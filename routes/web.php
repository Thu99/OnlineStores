<?php

use TCG\Voyager\Facades\Voyager;
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
/*
Route::get('/', function () {
    return view('welcome');
})->name('welcome');
*/

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

/*Product */
Route::get('/onlinestores', 'ProductController@index')->name('welcome');
Route::get('/onlinestores/{slug}', 'ProductController@show')->name('product.show');
/*
Route::get('/{slug}', function () {
    return view('product');
});
*/


//Route::get('/', 'WelcomeController@index')->name('welcome');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

/*Search function*/
Route::get('/search', 'SearchController@search')->name('search');
Route::get('/searchPrice', 'SearchController@price')->name('price');
/*Shopping Cart */
Route::get('onlinestores/mobile/cart', 'ShoppingCartController@index')->name('cart.index');
Route::post('onlinestores/mobile/cart/add', 'ShoppingCartController@store')->name('cart.store')->middleware('auth');
Route::delete('onlinestores/mobile/cart/{rowId}', 'ShoppingCartController@destroy')->name('cart.destroy');
Route::get('onlinestores/mobile/cart/remove', function () {
    Cart::destroy();
    return back();
})->name('destroyall');
Route::patch('mobile/cart/{rowId}', 'ShoppingCartController@update')->name('cart.update');

/*checkout*/
Route::get('mobile/checkout', 'CheckoutController@index')->name('checkout.index');
Route::post('mobile/checkout/add', 'CheckoutController@store')->name('checkout.store');

/*Order */
Route::post('m/order/add', 'OrderController@store')->name('order.store');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
