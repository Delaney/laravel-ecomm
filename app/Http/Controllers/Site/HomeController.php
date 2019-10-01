<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Contracts\ProductContract;
use App\Http\Controllers\BaseController;

class HomeController extends BaseController
{
    protected $productRepository;

    public function __construct(ProductContract $productRepository)
	{
		$this->productRepository = $productRepository;
	}

	public function index()
	{
		$products = $this->productRepository->listProducts();

		return view('site.pages.homepage', compact('products'));
	}

	public function shop()
	{
		$products = $this->productRepository->listProducts();

		return view('site.pages.shop', compact('products'));
	}
}
