<?php

use Illuminate\Routing\Router;

use App\category;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    $router->resource('users', UserController::class);
     
    Route::resource('categories','categoryController');
    
    $router->resource('products', productController::class);















    
    




});
