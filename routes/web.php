<?php

Auth::routes();
Route::get('customer/login',function()
{
  return view('home.login');
})->name('custom.login');

Route::get('search',function()
{
  return view('home.search-product');
});

Route::get('/search','HomeController@SearchProduct')->name('search.product');

// Socilite route
Route::get('/login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('/login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');


Route::get('customer/account/','CustomerController@index')->name('customer.dashboard');
Route::get('customer/account/edit','CustomerController@Information')->name('customer.infornation');
Route::get('customer/address','CustomerController@Address')->name('customer.address');
Route::post('customer/address','CustomerController@UpdateAddress')->name('customer.updateaddress');
Route::get('customer/order/history','CustomerController@Orderhistory')->name('customer.orderhistory');
Route::get('customer/reviews','CustomerController@Review')->name('customer.reviews');
Route::get('customer/club','CustomerController@Club')->name('customer.club');



Route::get('/', 'HomeController@index')->name('home');
Route::get('/product/{category}','HomeController@CategoryWise')->name('categoryproduct');
Route::get('/product/{category}/{subcategory}','HomeController@SubCategoryWise')->name('subcategoryproduct');
Route::get('/product/{category}/{subcategory}/{childcategory}','HomeController@ChildcategoryWise')->name('childcategoryproduct');
Route::get('/singleproduct/{sku}/{slug}', 'HomeController@SingleProduct')->name('singleproduct');
Route::post('/singleproduct/{sku}','HomeController@SingleProductReview')->name('singleproduct.review');

Route::get('dpunch/club', function(){
  return view('home.dpunch-club');
});

Route::get('page/{slug}/','HomeController@Singlepage')->name('single.page');





Route::get('/cart','CartController@index')->name('cart.index');
Route::post('/cart/add','CartController@add')->name('cart.add');
Route::get('/cart/details','CartController@details')->name('cart.details');
Route::delete('/cart/{itemHash}','CartController@delete')->name('cart.delete');
Route::post('cart/update','CartController@CartUpdate')->name('cart.update');
Route::get('/cart/empty','CartController@ClearCart')->name('cart.empty');
Route::post('set/clubpoint','CartController@AddClubPoint')->name('cart.addclubpoint');
Route::get('checkout','CartController@Checkout')->name('cart.checkout');
Route::post('order','OrderController@Order')->name('order');
Route::post('add/coupon','CartController@addCoupon')->name('cart.addcoupon');


Route::get('checkout/address','CartController@CheckoutLogin')->name('cart.checkout.address');
Route::get('checkout/shipping','CartController@CheckoutShipping')->name('cart.checkout.shipping');
Route::get('checkout/payment','CartController@CheckoutPayment')->name('cart.checkout.payment');
Route::get('checkout/review','CartController@CheckoutReview')->name('cart.checkout.review');
Route::post('tempdata','OrderController@TemoData')->name('order.tempdata');

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
    Route::get('promote-productlist','AdminController@promoteProductList')->name('admin.promoteproductlist');
    Route::get('promote-product/{id}','AdminController@promoteProductView')->name('admin.promoteproduct');
    Route::post('promote-product/{id}','AdminController@promoteProduct')->name('admin.promoteproduct');
    //admin product....................

    Route::get('managecustomer','AdminController@allCustomer')->name('admin.allcustomer');
    Route::get('manageorder','AdminController@allOrder')->name('admin.allorder');
    Route::get('managecancledorder','AdminController@allCancleOrder')->name('admin.allcancleorder');
    Route::get('manageconfirmedorder','AdminController@allConfirmedOrder')->name('admin.allconfirmedorder');
    Route::get('manageorderdetailes/{id}','AdminController@Orderdetailes')->name('admin.orderdetailes');
    Route::get('manageorderdetailesprint/{id}','AdminController@OrderdetailesPrint')->name('admin.orderdetailesprint');
    Route::get('confirmorder/{id}','AdminController@ConfirmOrder')->name('admin.confirmorder');
    Route::get('cancleorder/{id}','AdminController@CancleOrder')->name('admin.cancleorder');
    // admin manage cuppon

    Route::get('coupon','AdminController@allCuppon')->name('admin.cuppon');
    Route::get('addcoupon','AdminController@addCupponform')->name('admin.addcupponform');
    Route::post('addcoupon','AdminController@addCuppon')->name('admin.addcuppon');
    Route::get('editcoupon/{id}','AdminController@editCupponform')->name('admin.editcuponform');
    Route::post('editcoupon/{id}','AdminController@editCuppon')->name('admin.editcupon');
    Route::post('managecoupon/{id}','AdminController@manageCuppon')->name('admin.managecupon');

    //admin manage site....................
    Route::get('managesite','AdminController@generalSetting')->name('admin.generalsetting');
    Route::get('manageslider','AdminController@Slidermanage')->name('admin.manageslider');
    Route::get('managebanner','AdminController@BannerManage')->name('admin.managebanner');
    Route::get('managecategorybanner','AdminController@CategoryBannermanage')->name('admin.managecategorybanner');
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
    Route::post('addslider/{id}','AdminController@AddSlider')->name('admin.addslider');
    Route::post('addbanner/{id}','AdminController@AddBanner')->name('admin.addbanner');
    Route::post('addcategorybanner/{category}','AdminController@AddCAtegoryBanner')->name('admin.addcategorybanner');

    Route::get('singlepage','AdminController@ViewAllPage')->name('admin.viewallpage');
    Route::get('addpage','AdminController@AddsinglePage')->name('admin.addpage');
    Route::post('addpage','AdminController@AddPage')->name('admin.addpage');
    Route::get('singlepage/{id}','AdminController@EditPage')->name('admin.editpage');
    Route::post('singlepage/{id}','AdminController@UpdatePage')->name('admin.updatepage');
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
    Route::get('promote-product/{id}','SellerController@promoteProductFrom')->name('seller.promoteproduct');
    Route::post('promote-product/{id}','SellerController@promoteProduct')->name('seller.promoteproduct');
    //seller product.....

    Route::get('manageorder','SellerController@allOrder')->name('seller.allorder');
    Route::get('managestore','SellerController@storeStting')->name('seller.managestore');
    Route::post('managestore','SellerController@addStoreInfo')->name('seller.addstoreinfo');

});
