<?php

Route::get('/register', 'Auth\RegisterController@index');

Route::get('/login', 'Auth\LoginController@index');

Route::get('/logout', 'Auth\LoginController@logout');

Route::post('/confirmation', 'Auth\RegisterController@checkRegisterData');

Route::post('/register', 'Auth\RegisterController@register');

Route::post('/login', 'Auth\LoginController@validateLogin');

Route::get('/', 'ProductCategoryController@index');

Route::get('/search', 'ProductCategoryController@search');

Route::get('/category/{id}/catalogue', 'ProductController@index');

Route::get('/cart', 'CartController@index');

Route::post('/cart/add', 'CartController@store');

Route::post('/cart/delete/{id}', 'CartController@destroy');

Route::get('/checkout', 'CartController@checkout');

Route::get('/profile', 'UserController@index');

Route::get('/profile/update', function(){
    return view('profile-update');
});


Route::get('/inventory', function(){
    return view('inventory');
});

Route::get('/order', function(){
    return view('order');
});
