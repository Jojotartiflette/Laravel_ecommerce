<?php

use Illuminate\Support\Facades\Route;

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

//Main Page
Route::get('/', 'HomeController@home')-> name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');

//Shop
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

//Cart
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::get('/cart/reset', 'CartController@reset')->name('cart.reset');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');

//Checkout
Route::get('/checkout', 'CheckoutController@checkout')->name('checkout.index')->middleware('auth');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');
Route::get('/checkout/success', 'CheckoutController@success')->name('checkout.success');

//Orders
Route::get('/orders', 'HomeController@orders')->name('orders');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//Authentification
Auth::routes();

Route::get('/logout', function() {
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');