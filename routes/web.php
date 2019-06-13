<?php

Route::get('/signup', 'Auth\RegisterController@index');

Route::get('/login', 'Auth\LoginController@index');

Route::get('/logout', 'Auth\LoginController@logout');

Route::post('/confirmation', 'Auth\RegisterController@checkRegisterData');

Route::post('/register', 'Auth\RegisterController@register');

Route::post('/login', 'Auth\LoginController@validateLogin');

Route::post('/navbar/login', 'Auth\LoginController@validateLogin');

Route::get('/', 'ProductCategoryController@index');

Route::get('/catalogue', 'ProductCategoryController@show');

Route::post('/search', 'ProductController@search');

// Product Detail
Route::get('/category/{id}/catalogue', 'ProductController@index');

Route::get('/category/{id}/catalogue/update', 'ProductController@edit');

Route::post('/category/update', 'ProductCategoryController@update');

Route::post('/catalogue/insert', 'ProductController@store');

Route::post('/catalogue/update', 'ProductController@update');

Route::post('/catalogue/delete', 'ProductController@destroy');

// Cart and Checkout
Route::get('/cart', 'CartController@index');

Route::post('/cart/add', 'CartController@store');

Route::post('/cart/delete', 'CartController@destroy');

Route::post('/checkout', 'CartController@checkout');

Route::get('/order', 'SalesController@index');

Route::get('/order/sales', 'SalesController@index');

Route::get('/order/finance', 'SalesController@index');

Route::post('/order/insert', 'SalesController@store');

Route::post('/order/update', 'SalesController@update');

Route::post('/order/delete', 'SalesController@destroy');

Route::get('/order/{id}/purchase', 'SalesController@show');

Route::get('/order/{id}/purchase/pdf', 'SalesController@pdf');

Route::get('/order/{id}/delivery', 'SalesController@show');

Route::get('/order/{id}/delivery/pdf', 'SalesController@pdf');

Route::get('/order/{id}/invoice', 'SalesController@show');

Route::get('/order/{id}/invoice/pdf', 'SalesController@pdf');

// Profile
Route::get('/profile', 'UserController@index');

// Procurement
Route::get('/reorder', 'ProcurementController@index');

Route::post('/reorder/insert', 'ProcurementController@store');

Route::get('/reorder/procure', 'ProcurementController@show');

// Notification
Route::get('/notification/outgoing', 'SalesController@showNotification');

Route::post('/notification/outgoing', 'SalesController@changeStatus');

Route::get('/notification/incoming', 'ProcurementController@showNotification');

Route::post('/notification/incoming', 'ProcurementController@changeStatus');


// Inventory
Route::get('/inventory', 'ProductController@show');

