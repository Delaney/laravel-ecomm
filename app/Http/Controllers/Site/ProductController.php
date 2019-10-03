<?php

namespace App\Http\Controllers\Site;

use Cart;
use Illuminate\Http\Request;
use App\Contracts\ProductContract;
use App\Http\Controllers\Controller;
use App\Contracts\AttributeContract;
use App\Models\Product;
use App\Models\ProductImage;

use Response;

class ProductController extends Controller
{
    protected $productRepository;

    public function __construct(ProductContract $productRepository, AttributeContract $attributeRepository)
	{
		$this->productRepository = $productRepository;
		$this->attributeRepository = $attributeRepository;
	}

    public function show($slug)
    {
        $product = $this->productRepository->findProductBySlug($slug);
		$attributes = $this->attributeRepository->listAttributes();
		$images = ProductImage::where('product_id', $product->id);
		$featured = Product::where('featured', 1)->get();

		return view('site.pages.product', compact('product', 'attributes', 'images', 'featured'));
	}
	
	public function addToCart(Request $request)
	{
		$product = $this->productRepository->findProductById($request->input('productId'));
		$options = $request->except('_token', 'productId', 'price', 'qty');

		Cart::add(uniqid(), $product->name, $request->input('price'), $request->input('qty'), $options);

		// return redirect()->back()->with('message', 'Item added to cart successfully.');

		return Response::json([], 200);
	}

	public function search(Request $request)
	{
		$results = Product::where('name','LIKE','%'.$request->search.'%')->get();
		// $results = Product::where('featured', 1)->get();

		return view('site.pages.search', [
			'results' => $results,
			'search' => $request->search
		]);
	}
}
