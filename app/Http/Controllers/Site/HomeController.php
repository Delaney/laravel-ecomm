<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Contracts\ProductContract;
use App\Http\Controllers\BaseController;
use App\Models\Product;
use App\Mail\NewMessage;
use Illuminate\Support\Facades\Mail;

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

	public function contact(Request $request)
	{
		// $contact = $request->all();

		$contact = array(
			'name' => $request->name,
			'email' => $request->email,
			'phone' => $request->phone,
			'message' => $request->message,
		);

		try{
			Mail::to(\Config::get('settings')['default_email_address'])->send(new NewMessage($contact));
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
			return $this->responseRedirectBack('Your message has been sent successfully', 'success', true, true);
		}
	}
}
