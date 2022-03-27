<?php

//Route::get('cart', 'CartController@index')->name('get.cart');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group(['middleware' => 'guest:customer'], function () {
    Route::get('login', 'AuthController@login')->name('get.login');
    Route::post('login', 'AuthController@executeLogin')->name('post.login');
    Route::get('register', 'AuthController@register')->name('get.register');
    Route::post('register', 'AuthController@executeRegister')->name('post.register');
});
Route::get('logout', 'AuthController@logout')->name('get.logout');

Route::get('/', 'HomeController@index')->name('get.home');
Route::get('products-by-brand/{slug}', 'HomeController@getProductsByBrand')->name('get.products-by-brand');
Route::get('product', 'ProductController@product')->name('get.product');
Route::post('product/show-modal/{id}', 'ProductController@showModal')->name('post.product.show-modal');

Route::group(['prefix' => 'cart'], function () {
    Route::get('/', 'CartController@index')->name('get.cart')->middleware('auth:customer');
    Route::post('add/{id}', 'CartController@add')->name('post.cart.add');
    Route::post('reduce/{id}', 'CartController@reduce')->name('post.cart.reduce');
    Route::post('remove/{id}', 'CartController@remove')->name('post.cart.remove');
});

Route::get('{slug}', 'ProductController@switchSlug')->name('get.slug');
