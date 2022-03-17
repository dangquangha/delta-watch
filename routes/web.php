<?php

Route::get('/', 'HomeController@index')->name('get.home');
Route::get('products-by-brand/{slug}', 'HomeController@getProductsByBrand')->name('get.products-by-brand');
Route::get('listing', 'ProductController@listing')->name('get.listing');
Route::get('detail', 'ProductController@detail')->name('get.detail');
//Route::get('cart', 'CartController@index')->name('get.cart');

Route::group(['middleware' => 'guest:customer'], function () {
    Route::get('login', 'AuthController@login')->name('get.login');
    Route::post('login', 'AuthController@executeLogin')->name('post.login');
    Route::get('register', 'AuthController@register')->name('get.register');
    Route::post('register', 'AuthController@executeRegister')->name('post.register');
});

Route::get('logout', 'AuthController@logout')->name('get.logout');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
