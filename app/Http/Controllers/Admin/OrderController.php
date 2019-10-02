<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\OrderContract;
use App\Http\Controllers\BaseController;

class OrderController extends BaseController
{
    protected $orderRepository;

    public function __construct(OrderContract $orderRepository)
    {
		$this->middleware('auth:admin');
        $this->orderRepository = $orderRepository;
	}
	
	public function index()
	{
		$orders = $this->orderRepository->listOrders();
		$this->setPageTitle('Orders', 'List of all orders');
		return view('admin.orders.index', compact('orders'));
	}

	public function show($orderNumber)
	{
		$order = $this->orderRepository->findOrderByNumber($orderNumber);

		$this->setPageTitle('Order Details', $orderNumber);
		return view('admin.orders.show', compact('order'));
	}

	public function cancel($orderNumber)
	{
		$order = $this->orderRepository->findOrderByNumber($orderNumber);
		$order->status = 'cancelled';
		$order->save();

		return $this->responseRedirectBack('Order ' .$orderNumber.' has been cancelled.', 'success', true, true);
	}

	public function complete($orderNumber)
	{
		$order = $this->orderRepository->findOrderByNumber($orderNumber);
		$order->status = 'completed';
		$order->save();

		return $this->responseRedirectBack('Order ' .$orderNumber.' has been completed.', 'success', true, true);
	}
}
