<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/product', 'HomeController@SingleProduct')->name('product');
Route::get('register', function(){
  return view('home.register');
});

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
    Route::post('updateseller','AdminController@updateSeller')->name('admin.updateseller');

    //admin product....................
    Route::get('manageproduct','AdminController@allProduct')->name('admin.allproduct');
    Route::get('archiveproduct','AdminController@allArchiveProduct')->name('admin.archiveproduct');
    Route::get('add-product','AdminController@addProductForm')->name('admin.addproduct');
    Route::post('add-product','AdminController@addProduct')->name('admin.addproduct');
    Route::post('publish-product','AdminController@publishProduct')->name('admin.publishproduct');
    Route::get('edit-product/{id}/edit','AdminController@editProductForm')->name('admin.editproduct');
    Route::get('view-product/{id}','AdminController@viewProduct')->name('admin.viewproduct');
    Route::post('edit-product/{id}','AdminController@updateProduct')->name('admin.updateproduct');
    Route::DELETE('delete-product/{id}','AdminController@deleteProduct')->name('admin.deleteproduct');
    //admin product....................

    Route::get('managecustomer','AdminController@allCustomer')->name('admin.allcustomer');
    Route::get('manageorder','AdminController@allOrder')->name('admin.allorder');

    //admin manage site....................
    Route::get('managesite','AdminController@generalSetting')->name('admin.generalsetting');
    Route::get('managemenu','AdminController@menuManage')->name('admin.menumanage');
    Route::get('addmenu','AdminController@addMenu')->name('admin.addmenu');
    Route::post('addcategory','AdminController@addCategory')->name('admin.addcategory');
    Route::post('addsubcategory','AdminController@addSubcategory')->name('admin.addsubcategory');
    Route::post('addundersubcategory','AdminController@addUndersubcategory')->name('admin.addundersubcategory');
    Route::post('addbrand','AdminController@addBrand')->name('admin.addbrand');
    Route::post('ajaxsubcategory','AdminController@ajaxForSubCategory')->name('admin.ajaxsubcategory');
    Route::post('ajaxundersubcategory','AdminController@ajaxForUnderSubCategory')->name('admin.ajaxundersubcategory');
    Route::post('ajaxbrand','AdminController@ajaxForBrand')->name('admin.ajaxbrand');
    Route::post('ajaxbrandbysubcat','AdminController@ajaxForBrandBySubcat')->name('admin.ajaxbrandbysubcat');
    //admin manage site....................

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
    Route::post('ajaxsubcategory','SellerController@ajaxForSubCategory')->name('seller.ajaxsubcategory');
    Route::post('ajaxundersubcategory','SellerController@ajaxForUnderSubCategory')->name('seller.ajaxundersubcategory');
    Route::post('ajaxbrand','SellerController@ajaxForBrand')->name('seller.ajaxbrand');
    Route::post('ajaxbrandbysubcat','SellerController@ajaxForBrandBySubcat')->name('seller.ajaxbrandbysubcat');

    //seller product.....
    Route::get('manageproduct','SellerController@allProduct')->name('seller.allproduct');
    Route::get('add-product','SellerController@addProductForm')->name('seller.addproduct');
    Route::post('add-product','SellerController@addProduct')->name('seller.addproduct');
    Route::get('edit-product/{id}/edit','SellerController@editProductForm')->name('seller.editproduct');
    Route::post('edit-product/{id}','SellerController@updateProduct')->name('seller.updateproduct');
    Route::DELETE('delete-product/{id}','SellerController@deleteProduct')->name('seller.deleteproduct');
    //seller product.....

    Route::get('manageorder','SellerController@allOrder')->name('seller.allorder');
    Route::get('managestore','SellerController@storeStting')->name('seller.managestore');
    Route::post('managestore','SellerController@addStoreInfo')->name('seller.addstoreinfo');

});

Route::resource('cart','CartController');
