<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Contracts\OrderContract;
use App\Http\Controllers\Controller;
use Paystack;

class CheckoutController extends Controller
{
    protected $orderRepository;

    public function __construct(OrderContract $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function getCheckout()
    {
        return view('site.pages.checkout');
    }

    public function placeOrder(Request $request)
    {
        $order = $this->orderRepository->storeOrderDetails($request->all());

        if ($order) {
			return Paystack::getAuthorizationUrl()->redirectNow();
		}
	}
	
	public function handleGatewayCallback()
	{
		$paymentDetails = Paystack::getPaymentData();

		return $paymentDetails;

		// $paymentId = $request->input('paymentId');
		// $payerId = $request->input('PayerID');

		// $status = $this->payPal->completePayment($paymentId, $payerId);

		// $order = Order::where('order_number', $status['invoiceId'])->first();
		// $order->status = 'processing';
		// $order->payment_status = 1;
		// $order->payment_method = 'Paystack -'.$status['salesId'];
		// $order->save();

		// Cart::clear();
		// return view('site.pages.success', compact('order'));
	}
}
