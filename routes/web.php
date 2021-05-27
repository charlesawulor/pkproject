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

Route::get('/', function () {
    return view('storehome');
});

Route::get('/storehome', 'HomeController@index')->name('storehome');

Route::resource('shop','shopController');

Route::resource('product-details','shopController');

Route::get('/cart', 'CartController@index')->name('cart');

Route::post('/cart', 'CartController@store')->name('cart');


Route::post('/cart/switchToSaveForLater/{product}', 'CartController@switchToSaveForLater')->name('cart.switchToSaveForLater');



Route::get('empty', function(){

Cart::destroy();

});

Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');



Route::delete('/saveForLater/{product}', 'SaveForLaterController@destroy')->name('saveForLater.destroy');
Route::post('/saveForLater/switchToCart/{product}', 'SaveForLaterController@switchToCart')->name('saveForLater.switchToCart');


Route::get('/checkout', 'CheckoutController@index')->name('checkout');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
