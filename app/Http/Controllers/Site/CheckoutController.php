<?php

namespace App\Http\Controllers\Site;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Services\PayPalService;
use App\Contracts\OrderContract;
use App\Http\Controllers\Controller;
use Paystack;
use Cart;
use Response;
use Cookie;

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
			Cookie::queue('order', $order->order_number, 10);
			return Paystack::getAuthorizationUrl()->redirectNow();
			// return Response::json(['order' => $order], 200);
		}
	}
	
	public function handleGatewayCallback()
	{
		$paymentDetails = Paystack::getPaymentData();

		// return $paymentDetails;

		$order = Order::where('order_number', Cookie::get('order'))->first();
		$order->status = 'processing';
		$order->payment_status = 1;
		$order->payment_method = 'Paystack -'. $paymentDetails['data']['channel'];
		$order->save();

		Cart::clear();
		return view('site.pages.success', compact('order'));
	}
}
