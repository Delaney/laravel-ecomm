<?php

namespace App\Http\Controllers\Site;

use Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function getCart()
    {
        return view('site.pages.cart');
	}

	public function getItems()
	{
		return \Response::json([
			'cart' => Cart::getContent(),
			'total' => Cart::getSubTotal(),
			'symbol' => \Config::get('settings')['currency_symbol']
		], 200);
	}
	
	public function removeItem($id)
	{
		Cart::remove($id);

		if (Cart::isEmpty()) {
			return redirect('/');
		}
		return redirect()->back()->with('message', 'Item removed from cart successfully.');
	}

	public function clearCart()
	{
		Cart::clear();

		return redirect('/');
	}
}
