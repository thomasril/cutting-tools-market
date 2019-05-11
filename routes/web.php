<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/profile', function(){
    return view('profile');
});

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
