<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Gloudemans\Shoppingcart\Facades\Cart;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/*
Route::get('/', function () {
    return view('welcome');
})->name('welcome');*/
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

/*Product */
Route::get('/', 'ProductController@index')->name('welcome');
Route::get('/{slug}', 'ProductController@show')->name('product.show');

/*Shopping Cart */
Route::get('mobile/cart', 'ShoppingCartController@index')->name('cart.index');
Route::post('mobile/cart/add', 'ShoppingCartController@store')->name('cart.store');
Route::delete('mobile/cart/{rowId}', 'ShoppingCartController@destroy')->name('cart.destroy');
Route::get('mobile/cart/remove', function () {
    Cart::destroy();
    return back();
})->name('destroyall');
Route::patch('mobile/cart/{rowId}', 'ShoppingCartController@update')->name('cart.update');

/*checkout*/
Route::get('mobile/checkout', 'CheckoutController@index')->name('checkout.index');
Route::post('mobile/checkout/add', 'CheckoutController@store')->name('checkout.store');

/*Order */
Route::post('m/order/add', 'OrderController@store')->name('order.store');
