<?php

Route::get('/register', 'Auth\RegisterController@index');

Route::get('/login', 'Auth\LoginController@index');

Route::get('/logout', 'Auth\LoginController@logout');

Route::post('/confirmation', 'Auth\RegisterController@checkRegisterData');

Route::post('/register', 'Auth\RegisterController@register');

Route::post('/login', 'Auth\LoginController@validateLogin');

Route::get('/', 'ProductCategoryController@index');

Route::get('/category/{id}/catalogue', 'ProductController@index');

Route::get('/profile', 'UserController@index');

Route::get('/profile/update', function(){
    return view('profile-update');
});

Route::get('/cart', function(){
    return view('cart');
});

Route::get('/checkout', function(){
    return view('checkout');
});

Route::get('/inventory', function(){
    return view('layouts/master');
});

Route::get('/order', function(){
    return view('layouts/master');
});
