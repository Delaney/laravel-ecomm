<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require 'admin.php';

Auth::routes();

Route::get('/', 'Site\HomeController@index')->name('home');

Route::get('/product/{slug}', 'Site\ProductController@show')->name('product.show');
Route::get('/search/{str}', 'Site\ProductController@search')->name('product.search');

Route::post('/product/add/cart', 'Site\ProductController@addToCart')->name('product.add.cart');


Route::get('/cart', 'Site\CartController@getCart')->name('checkout.cart');
Route::get('/cart/item/{id}/remove', 'Site\CartController@removeItem')->name('checkout.cart.remove');
Route::get('/cart/clear', 'Site\CartController@clearCart')->name('checkout.cart.clear');

Route::get('/shop', 'Site\HomeController@shop')->name('shop');

Route::view('/contact', 'site.pages.contact')->name('contact');

Route::view('/about', 'site.pages.about')->name('about');

Route::group(['middleware' => ['auth']], function () {
	Route::get('/checkout', 'Site\CheckoutController@getCheckout')->name('checkout.index');
	Route::post('/checkout', 'Site\CheckoutController@getCheckout')->name('checkout.index');
    Route::post('/checkout/order', 'Site\CheckoutController@placeOrder')->name('checkout.place.order');
});

Route::get('/category/{slug}', 'Site\CategoryController@show')->name('category.show');

Route::get('account/orders', 'Site\AccountController@getOrders')->name('account.orders');



//Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');

Route::get('checkout/payment/callback', 'Site\CheckoutController@handleGatewayCallback');

Route::get('checkout/payment/complete', 'Site\CheckoutController@complete')->name('checkout.payment.complete');