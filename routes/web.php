<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/product', 'HomeController@SingleProduct')->name('product');

// admin routes start
Route::prefix('admin')->group(function () {

Route::POST('/','Admin\LoginController@login')->name('admin');
Route::GET('/','Admin\LoginController@showLoginForm')->name('admin');
Route::POST('password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('password/reset','Admin\ResetPasswordController@reset');
Route::GET('password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::get('dashboard','AdminController@index')->name('admin.dashboard');
Route::get('manageseller','AdminController@allSeller')->name('admin.allseller');
Route::get('manageproduct','AdminController@allProduct')->name('admin.allproduct');
Route::get('managecustomer','AdminController@allCustomer')->name('admin.allcustomer');
Route::get('manageorder','AdminController@allOrder')->name('admin.allorder');

});

// seller routes start
Route::prefix('seller')->group(function () {

Route::POST('/','Seller\LoginController@login')->name('seller');
Route::GET('/','Seller\LoginController@showLoginForm')->name('seller');
Route::POST('password/email','Seller\ForgotPasswordController@sendResetLinkEmail')->name('seller.password.email');
Route::GET('password/reset','Seller\ForgotPasswordController@showLinkRequestForm')->name('seller.password.request');
Route::POST('password/reset','Seller\ResetPasswordController@reset');
Route::GET('password/reset/{token}','Seller\ResetPasswordController@showResetForm')->name('seller.password.reset');
Route::GET('register','Seller\RegisterController@showRegistrationForm')->name('seller.register');
Route::POST('register','Seller\RegisterController@register');

Route::get('dashboard','SellerController@index')->name('seller.dashboard');
Route::get('manageproduct','SellerController@allProduct')->name('seller.allproduct');
Route::get('manageorder','SellerController@allOrder')->name('seller.allorder');

});