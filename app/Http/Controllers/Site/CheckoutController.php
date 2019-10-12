<?php

namespace App\Http\Controllers\Site;

use App\Models\Order;
use App\Models\User;
use App\Mail\InvoiceMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Services\PayPalService;
use App\Contracts\OrderContract;
use App\Http\Controllers\Controller;
use Paystack;
use Cart;
use Response;
use Cookie;
use PDF;

class CheckoutController extends Controller
{
    protected $orderRepository;

    public function __construct(OrderContract $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function getCheckout()
    {
		$cartCollection = Cart::getContent();
		return view('site.pages.checkout', compact('cartCollection'));
    }

    public function placeOrder(Request $request)
    {
        $order = $this->orderRepository->storeOrderDetails($request->all());

        if ($order) {
			Cookie::queue('order', $order->order_number, 100);
			return Paystack::getAuthorizationUrl()->redirectNow();
		}
	}
	
	public function handleGatewayCallback()
	{
		$paymentDetails = Paystack::getPaymentData();

		$order = Order::where('order_number', Cookie::get('order'))->first();
		$order->status = 'processing';
		$order->payment_status = 1;
		$order->payment_method = 'Paystack -'. $paymentDetails['data']['channel'];
		$order->save();
		$order->get();
		
		Cart::clear();

		$data["email"] = $order->user->email;
        $data["client_name"] = $order->user->email;
		$data["subject"]="Your order has been placed successfully!";
		
		// $orderO = $order;
		// $order = $order->toArray();

		// $email = $orderO->user->email;
		// $name = $orderO->user->fullName;
		$user = User::where('id', $order->user_id)->first();
		// return $orderO->user;

		try{
			// Mail::to($email)->subject("Your order has been placed successfully!")->send(new InvoiceMail($order));
			Mail::to($order->user->email)->send(new InvoiceMail($order, $user));

			// Mail::send('emails.invoice', $data, function($message) use($order, $email, $name) {
			// 	$message->to($email, $name)->subject("Your order has been placed successfully!");
			// });
		} catch(JWTException $exception){
			$this->serverstatuscode = "0";
			$this->serverstatusdes = $exception->getMessage();
		}

		if (Mail::failures()) {
			$this->statusdesc = 'Error sending mail';
			$this->statuscode = "0";
		} else {
			$this->statusdesc = "Message sent successfully";
			$this->statuscode = "1";
			return view('site.pages.success', compact('order'));
		}

	}

	public function clearCart()
	{
		Cart::clear();

		return redirect()->back()->with('message', 'Cart cleared.');
	}
}
