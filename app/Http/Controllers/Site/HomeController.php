<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Contracts\ProductContract;
use App\Http\Controllers\BaseController;

use App\Models\Product;

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
		$featured = Product::where('featured', 1)->get();

		return view('site.pages.shop', compact('products', 'featured'));
	}

	public function new()
	{
		$products = Product::orderBy('id', 'desc')->take(10)->get();
		$featured = Product::where('featured', 1)->get();

		return view('site.pages.shop', compact('products', 'featured'));
	}
}
