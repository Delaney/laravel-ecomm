<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Contracts\ProductContract;
use App\Http\Controllers\BaseController;

use App\Models\Product;
use App\Models\Order;

class AdminController extends BaseController
{
    protected $productRepository;

    public function __construct(ProductContract $productRepository)
	{
		$this->middleware('auth:admin');
		$this->productRepository = $productRepository;
	}

	public function index()
	{
		$products = count($this->productRepository->listProducts());
		$pending = count(Order::where('status', 'pending')->get());
		$processed = count(Order::where('status', 'processing')->get());

		return view('admin.dashboard.index', compact('products', 'pending', 'processed'));
	}
}
