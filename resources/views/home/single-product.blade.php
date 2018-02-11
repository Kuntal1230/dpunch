@extends('home.partial.master')

@section('style-sheet')

  <!-- Bootstrap Core CSS -->
  {{-- <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css') }}"> --}}
  <!-- Customizable CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/main.css') }}">
  <link rel="stylesheet" href="{{asset('assets/css/blue.css') }}">
  <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css') }}">
  <link rel="stylesheet" href="{{asset('assets/css/owl.transitions.css') }}">
  <link rel="stylesheet" href="{{asset('assets/css/animate.min.css') }}">
  <link rel="stylesheet" href="{{asset('assets/css/rateit.css') }}">
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap-select.min.css') }}">
  <link href="{{asset('assets/css/lightbox.css') }}" rel="stylesheet">
  <!-- Icons/Glyphs -->
  {{-- <link rel="stylesheet" href="{{asset('assets/css/font-awesome.css') }}"> --}}
  <!-- Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
@endsection
@section('content')
<!-- START MAIN AREA -->
<div class="em-wrapper-main">
    <div class="container container-main">
    <div class="breadcrumb">
            <div class="container">
                <div class="breadcrumb-inner">
                    <ul class="list-inline list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Clothing</a></li>
                        <li class='active'>Floral Print Buttoned</li>
                    </ul>
                </div>
                <!-- /.breadcrumb-inner -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.breadcrumb -->
        <div class="body-content outer-top-xs">
            <div class='container'>
                <div class='row single-product'>

                    <!-- /.sidebar -->
                    <div class='col-md-18'>
                        <div class="detail-block">
                            <div class="row  wow fadeInUp">
                                <div class="col-xs-24 col-sm-12 col-md-10 gallery-holder">
                                    <div class="product-item-holder size-big single-product-gallery small-gallery">
                                        <div id="owl-single-product">
                                            <div class="single-product-gallery-item" id="slide1">
                                                <a data-lightbox="image-1" data-title="Gallery" href="{{asset('assets/images/products/p8.jpg') }}">
                                                <img class="img-responsive" alt="" src="{{asset('assets/images/blank.gif') }}" data-echo="{{asset('assets/images/products/p8.jpg') }}" />
                                                </a>
                                            </div>
                                            <!-- /.single-product-gallery-item -->
                                            <div class="single-product-gallery-item" id="slide2">
                                                <a data-lightbox="image-1" data-title="Gallery" href="{{asset('assets/images/products/p9.jpg') }}">
                                                <img class="img-responsive" alt="" src="{{asset('assets/images/blank.gif') }}" data-echo="{{asset('assets/images/products/p9.jpg') }}" />
                                                </a>
                                            </div>
                                            <!-- /.single-product-gallery-item -->
                                            <div class="single-product-gallery-item" id="slide3">
                                                <a data-lightbox="image-1" data-title="Gallery" href="{{asset('assets/images/products/p10.jpg') }}">
                                                <img class="img-responsive" alt="" src="{{asset('assets/images/blank.gif') }}" data-echo="{{asset('assets/images/products/p10.jpg') }}" />
                                                </a>
                                            </div>
                                            <!-- /.single-product-gallery-item -->
                                            <div class="single-product-gallery-item" id="slide4">
                                                <a data-lightbox="image-1" data-title="Gallery" href="{{asset('assets/images/products/p11.jpg') }}">
                                                <img class="img-responsive" alt="" src="{{asset('assets/images/blank.gif') }}" data-echo="{{asset('assets/images/products/p11.jpg') }}" />
                                                </a>
                                            </div>
                                            <!-- /.single-product-gallery-item -->
                                            <div class="single-product-gallery-item" id="slide5">
                                                <a data-lightbox="image-1" data-title="Gallery" href="{{asset('assets/images/products/p12.jpg') }}">
                                                <img class="img-responsive" alt="" src="{{asset('assets/images/blank.gif') }}" data-echo="{{asset('assets/images/products/p12.jpg') }}" />
                                                </a>
                                            </div>
                                            <!-- /.single-product-gallery-item -->
                                            <div class="single-product-gallery-item" id="slide6">
                                                <a data-lightbox="image-1" data-title="Gallery" href="{{asset('assets/images/products/p13.jpg') }}">
                                                <img class="img-responsive" alt="" src="{{asset('assets/images/blank.gif') }}" data-echo="{{asset('assets/images/products/p13.jpg') }}" />
                                                </a>
                                            </div>
                                            <!-- /.single-product-gallery-item -->
                                            <div class="single-product-gallery-item" id="slide7">
                                                <a data-lightbox="image-1" data-title="Gallery" href="{{asset('assets/images/products/p14.jpg') }}">
                                                <img class="img-responsive" alt="" src="{{asset('assets/images/blank.gif') }}" data-echo="{{asset('assets/images/products/p14.jpg') }}" />
                                                </a>
                                            </div>
                                            <!-- /.single-product-gallery-item -->
                                            <div class="single-product-gallery-item" id="slide8">
                                                <a data-lightbox="image-1" data-title="Gallery" href="{{asset('assets/images/products/p15.jpg') }}">
                                                <img class="img-responsive" alt="" src="{{asset('assets/images/blank.gif') }}" data-echo="{{asset('assets/images/products/p15.jpg') }}" />
                                                </a>
                                            </div>
                                            <!-- /.single-product-gallery-item -->
                                            <div class="single-product-gallery-item" id="slide9">
                                                <a data-lightbox="image-1" data-title="Gallery" href="{{asset('assets/images/products/p16.jpg') }}">
                                                <img class="img-responsive" alt="" src="{{asset('assets/images/blank.gif') }}" data-echo="{{asset('assets/images/products/p16.jpg') }}" />
                                                </a>
                                            </div>
                                            <!-- /.single-product-gallery-item -->
                                        </div>
                                        <!-- /.single-product-slider -->
                                        <div class="single-product-gallery-thumbs gallery-thumbs">
                                            <div id="owl-single-product-thumbnails">
                                                <div class="item">
                                                    <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide1">
                                                    <img class="img-responsive" width="85" alt="" src="{{asset('assets/images/blank.gif') }}" data-echo="{{asset('assets/images/products/p17.jpg') }}" />
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide2">
                                                    <img class="img-responsive" width="85" alt="" src="{{asset('assets/images/blank.gif') }}" data-echo="{{asset('assets/images/products/p18.jpg') }}"/>
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="3" href="#slide3">
                                                    <img class="img-responsive" width="85" alt="" src="{{asset('assets/images/blank.gif') }}" data-echo="{{asset('assets/images/products/p19.jpg') }}" />
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="4" href="#slide4">
                                                    <img class="img-responsive" width="85" alt="" src="{{asset('assets/images/blank.gif') }}" data-echo="{{asset('assets/images/products/p20.jpg') }}" />
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="5" href="#slide5">
                                                    <img class="img-responsive" width="85" alt="" src="{{asset('assets/images/blank.gif') }}" data-echo="{{asset('assets/images/products/p21.jpg') }}" />
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="6" href="#slide6">
                                                    <img class="img-responsive" width="85" alt="" src="{{asset('assets/images/blank.gif') }}" data-echo="{{asset('assets/images/products/p22.jpg') }}" />
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="7" href="#slide7">
                                                    <img class="img-responsive" width="85" alt="" src="{{asset('assets/images/blank.gif') }}" data-echo="{{asset('assets/images/products/p23.jpg') }}" />
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="8" href="#slide8">
                                                    <img class="img-responsive" width="85" alt="" src="{{asset('assets/images/blank.gif') }}" data-echo="{{asset('assets/images/products/p24.jpg') }}" />
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="9" href="#slide9">
                                                    <img class="img-responsive" width="85" alt="" src="{{asset('assets/images/blank.gif') }}" data-echo="{{asset('assets/images/products/p25.jpg') }}" />
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- /#owl-single-product-thumbnails -->
                                        </div>
                                        <!-- /.gallery-thumbs -->
                                    </div>
                                    <!-- /.single-product-gallery -->
                                </div>
                                <!-- /.gallery-holder -->
                                <div class='col-sm-12 col-md-14 product-info-block'>
                                    <div class="product-info">
                                        <h1 class="name">Floral Print Buttoned</h1>
                                        <div class="rating-reviews m-t-20">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="rating rateit-small"></div>
                                                </div>
                                                <div class="col-sm-16">
                                                    <div class="reviews">
                                                        <a href="#" class="lnk">(13 Reviews)</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.rating-reviews -->
                                        <div class="stock-container info-container m-t-10">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="stock-box">
                                                        <span class="label">Availability :</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-18">
                                                    <div class="stock-box">
                                                        <span class="value">In Stock</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.stock-container -->
                                        <div class="description-container m-t-20">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </div>
                                        <!-- /.description-container -->
                                        <div class="price-container info-container m-t-20">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="price-box">
                                                        <span class="price">$800.00</span>
                                                        <span class="price-strike">$900.00</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="favorite-button m-t-10">
                                                        <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" href="#">
                                                        <i class="fa fa-heart"></i>
                                                        </a>
                                                        <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Add to Compare" href="#">
                                                        <i class="fa fa-signal"></i>
                                                        </a>
                                                        <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="E-mail" href="#">
                                                        <i class="fa fa-envelope"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.price-container -->
                                        <div class="quantity-container info-container">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <span class="label">Qty :</span>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="cart-quantity">
                                                        <div class="quant-input">
                                                            <div class="arrows">
                                                                <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                                                <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                                            </div>
                                                            <input type="text" value="1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-14">
                                                    <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</a>
                                                </div>
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.quantity-container -->
                                    </div>
                                    <!-- /.product-info -->
                                </div>
                                <!-- /.col-sm-7 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <div class="product-tabs inner-bottom-xs  wow fadeInUp">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                                        <li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
                                        <li><a data-toggle="tab" href="#review">REVIEW</a></li>
                                        <li><a data-toggle="tab" href="#tags">TAGS</a></li>
                                    </ul>
                                    <!-- /.nav-tabs #product-tabs -->
                                </div>
                                <div class="col-sm-18">
                                    <div class="tab-content">
                                        <div id="description" class="tab-pane in active">
                                            <div class="product-tab">
                                                <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br><br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div id="review" class="tab-pane">
                                            <div class="product-tab">
                                                <div class="product-reviews">
                                                    <h4 class="title">Customer Reviews</h4>
                                                    <div class="reviews">
                                                        <div class="review">
                                                            <div class="review-title"><span class="summary">We love this product</span><span class="date"><i class="fa fa-calendar"></i><span>1 days ago</span></span></div>
                                                            <div class="text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit.Aliquam suscipit."</div>
                                                        </div>
                                                    </div>
                                                    <!-- /.reviews -->
                                                </div>
                                                <!-- /.product-reviews -->
                                                <div class="product-add-review">
                                                    <h4 class="title">Write your own review</h4>
                                                    <div class="review-table">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="cell-label">&nbsp;</th>
                                                                        <th>1 star</th>
                                                                        <th>2 stars</th>
                                                                        <th>3 stars</th>
                                                                        <th>4 stars</th>
                                                                        <th>5 stars</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="cell-label">Quality</td>
                                                                        <td><input type="radio" name="quality" class="radio" value="1"></td>
                                                                        <td><input type="radio" name="quality" class="radio" value="2"></td>
                                                                        <td><input type="radio" name="quality" class="radio" value="3"></td>
                                                                        <td><input type="radio" name="quality" class="radio" value="4"></td>
                                                                        <td><input type="radio" name="quality" class="radio" value="5"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="cell-label">Price</td>
                                                                        <td><input type="radio" name="quality" class="radio" value="1"></td>
                                                                        <td><input type="radio" name="quality" class="radio" value="2"></td>
                                                                        <td><input type="radio" name="quality" class="radio" value="3"></td>
                                                                        <td><input type="radio" name="quality" class="radio" value="4"></td>
                                                                        <td><input type="radio" name="quality" class="radio" value="5"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="cell-label">Value</td>
                                                                        <td><input type="radio" name="quality" class="radio" value="1"></td>
                                                                        <td><input type="radio" name="quality" class="radio" value="2"></td>
                                                                        <td><input type="radio" name="quality" class="radio" value="3"></td>
                                                                        <td><input type="radio" name="quality" class="radio" value="4"></td>
                                                                        <td><input type="radio" name="quality" class="radio" value="5"></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!-- /.table .table-bordered -->
                                                        </div>
                                                        <!-- /.table-responsive -->
                                                    </div>
                                                    <!-- /.review-table -->
                                                    <div class="review-form">
                                                        <div class="form-container">
                                                            <form role="form" class="cnt-form">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label for="exampleInputName">Your Name <span class="astk">*</span></label>
                                                                            <input type="text" class="form-control txt" id="exampleInputName" placeholder="">
                                                                        </div>
                                                                        <!-- /.form-group -->
                                                                        <div class="form-group">
                                                                            <label for="exampleInputSummary">Summary <span class="astk">*</span></label>
                                                                            <input type="text" class="form-control txt" id="exampleInputSummary" placeholder="">
                                                                        </div>
                                                                        <!-- /.form-group -->
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="exampleInputReview">Review <span class="astk">*</span></label>
                                                                            <textarea class="form-control txt txt-review" id="exampleInputReview" rows="4" placeholder=""></textarea>
                                                                        </div>
                                                                        <!-- /.form-group -->
                                                                    </div>
                                                                </div>
                                                                <!-- /.row -->
                                                                <div class="action text-right">
                                                                    <button class="btn btn-primary btn-upper">SUBMIT REVIEW</button>
                                                                </div>
                                                                <!-- /.action -->
                                                            </form>
                                                            <!-- /.cnt-form -->
                                                        </div>
                                                        <!-- /.form-container -->
                                                    </div>
                                                    <!-- /.review-form -->
                                                </div>
                                                <!-- /.product-add-review -->
                                            </div>
                                            <!-- /.product-tab -->
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div id="tags" class="tab-pane">
                                            <div class="product-tag">
                                                <h4 class="title">Product Tags</h4>
                                                <form role="form" class="form-inline form-cnt">
                                                    <div class="form-container">
                                                        <div class="form-group">
                                                            <label for="exampleInputTag">Add Your Tags: </label>
                                                            <input type="email" id="exampleInputTag" class="form-control txt">
                                                        </div>
                                                        <button class="btn btn-upper btn-primary" type="submit">ADD TAGS</button>
                                                    </div>
                                                    <!-- /.form-container -->
                                                </form>
                                                <!-- /.form-cnt -->
                                                <form role="form" class="form-inline form-cnt">
                                                    <div class="form-group">
                                                        <label>&nbsp;</label>
                                                        <span class="text col-md-offset-3">Use spaces to separate tags. Use single quotes (') for phrases.</span>
                                                    </div>
                                                </form>
                                                <!-- /.form-cnt -->
                                            </div>
                                            <!-- /.product-tab -->
                                        </div>
                                        <!-- /.tab-pane -->
                                    </div>
                                    <!-- /.tab-content -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.product-tabs -->

                        <section class="section featured-product wow fadeInUp">
                            <h3 class="section-title">upsell products</h3>
                            <div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
                                <div class="item item-carousel">
                                    <div class="products">
                                        <div class="product">
                                            <div class="product-image">
                                                <div class="image">
                                                    <a href="detail.html"><img  src="{{asset('assets/images/products/p1.jpg')}}" alt=""></a>
                                                </div>
                                                <!-- /.image -->
                                                <div class="tag sale"><span>sale</span></div>
                                            </div>
                                            <!-- /.product-image -->
                                            <div class="product-info text-left">
                                                <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                                <div class="rating rateit-small"></div>
                                                <div class="description"></div>
                                                <div class="product-price">
                                                    <span class="price">
                                                    $650.99             </span>
                                                    <span class="price-before-discount">$ 800</span>
                                                </div>
                                                <!-- /.product-price -->
                                            </div>
                                            <!-- /.product-info -->
                                            <div class="cart clearfix animate-effect">
                                                <div class="action">
                                                    <ul class="list-unstyled">
                                                        <li class="add-cart-button btn-group">
                                                            <button class="btn btn-primary cart-btn" type="button"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                                                        </li>
                                                        <li class="add-cart-button btn-group">
                                                            <button class="btn btn-primary cart-btn" type="button"><i class="fa fa-heart" aria-hidden="true"></i></button>
                                                        </li>
                                                        <li class="add-cart-button btn-group">
                                                            <button class="btn btn-primary cart-btn" type="button"><i class="fa fa-signal"></i></button>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <!-- /.action -->
                                            </div>
                                            <!-- /.cart -->
                                        </div>
                                        <!-- /.product -->
                                    </div>
                                    <!-- /.products -->
                                </div>
                                <!-- /.item -->
                                <div class="item item-carousel">
                                    <div class="products">
                                        <div class="product">
                                            <div class="product-image">
                                                <div class="image">
                                                    <a href="detail.html"><img  src="{{asset('assets/images/products/p2.jpg')}}" alt=""></a>
                                                </div>
                                                <!-- /.image -->
                                                <div class="tag sale"><span>sale</span></div>
                                            </div>
                                            <!-- /.product-image -->
                                            <div class="product-info text-left">
                                                <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                                <div class="rating rateit-small"></div>
                                                <div class="description"></div>
                                                <div class="product-price">
                                                    <span class="price">
                                                    $650.99             </span>
                                                    <span class="price-before-discount">$ 800</span>
                                                </div>
                                                <!-- /.product-price -->
                                            </div>
                                            <!-- /.product-info -->
                                            <div class="cart clearfix animate-effect">
                                                <div class="action">
                                                    <ul class="list-unstyled">
                                                      <li class="add-cart-button btn-group">
                                                          <button class="btn btn-primary cart-btn" type="button"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                                                      </li>
                                                      <li class="add-cart-button btn-group">
                                                          <button class="btn btn-primary cart-btn" type="button"><i class="fa fa-heart" aria-hidden="true"></i></button>
                                                      </li>
                                                      <li class="add-cart-button btn-group">
                                                          <button class="btn btn-primary cart-btn" type="button"><i class="fa fa-signal"></i></button>
                                                      </li>
                                                    </ul>
                                                </div>
                                                <!-- /.action -->
                                            </div>
                                            <!-- /.cart -->
                                        </div>
                                        <!-- /.product -->
                                    </div>
                                    <!-- /.products -->
                                </div>
                                <!-- /.item -->
                                <div class="item item-carousel">
                                    <div class="products">
                                        <div class="product">
                                            <div class="product-image">
                                                <div class="image">
                                                    <a href="detail.html"><img  src="assets/images/products/p3.jpg" alt=""></a>
                                                </div>
                                                <!-- /.image -->
                                                <div class="tag hot"><span>hot</span></div>
                                            </div>
                                            <!-- /.product-image -->
                                            <div class="product-info text-left">
                                                <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                                <div class="rating rateit-small"></div>
                                                <div class="description"></div>
                                                <div class="product-price">
                                                    <span class="price">
                                                    $650.99             </span>
                                                    <span class="price-before-discount">$ 800</span>
                                                </div>
                                                <!-- /.product-price -->
                                            </div>
                                            <!-- /.product-info -->
                                            <div class="cart clearfix animate-effect">
                                                <div class="action">
                                                    <ul class="list-unstyled">
                                                      <li class="add-cart-button btn-group">
                                                          <button class="btn btn-primary cart-btn" type="button"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                                                      </li>
                                                      <li class="add-cart-button btn-group">
                                                          <button class="btn btn-primary cart-btn" type="button"><i class="fa fa-heart" aria-hidden="true"></i></button>
                                                      </li>
                                                      <li class="add-cart-button btn-group">
                                                          <button class="btn btn-primary cart-btn" type="button"><i class="fa fa-signal"></i></button>
                                                      </li>
                                                    </ul>
                                                </div>
                                                <!-- /.action -->
                                            </div>
                                            <!-- /.cart -->
                                        </div>
                                        <!-- /.product -->
                                    </div>
                                    <!-- /.products -->
                                </div>
                                <!-- /.item -->
                                <div class="item item-carousel">
                                    <div class="products">
                                        <div class="product">
                                            <div class="product-image">
                                                <div class="image">
                                                    <a href="detail.html"><img  src="assets/images/products/p4.jpg" alt=""></a>
                                                </div>
                                                <!-- /.image -->
                                                <div class="tag new"><span>new</span></div>
                                            </div>
                                            <!-- /.product-image -->
                                            <div class="product-info text-left">
                                                <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                                <div class="rating rateit-small"></div>
                                                <div class="description"></div>
                                                <div class="product-price">
                                                    <span class="price">
                                                    $650.99             </span>
                                                    <span class="price-before-discount">$ 800</span>
                                                </div>
                                                <!-- /.product-price -->
                                            </div>
                                            <!-- /.product-info -->
                                            <div class="cart clearfix animate-effect">
                                                <div class="action">
                                                    <ul class="list-unstyled">
                                                      <li class="add-cart-button btn-group">
                                                          <button class="btn btn-primary cart-btn" type="button"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                                                      </li>
                                                      <li class="add-cart-button btn-group">
                                                          <button class="btn btn-primary cart-btn" type="button"><i class="fa fa-heart" aria-hidden="true"></i></button>
                                                      </li>
                                                      <li class="add-cart-button btn-group">
                                                          <button class="btn btn-primary cart-btn" type="button"><i class="fa fa-signal"></i></button>
                                                      </li>
                                                    </ul>
                                                </div>
                                                <!-- /.action -->
                                            </div>
                                            <!-- /.cart -->
                                        </div>
                                        <!-- /.product -->
                                    </div>
                                    <!-- /.products -->
                                </div>
                                <!-- /.item -->
                                <div class="item item-carousel">
                                    <div class="products">
                                        <div class="product">
                                            <div class="product-image">
                                                <div class="image">
                                                    <a href="detail.html"><img  src="assets/images/blank.gif" data-echo="assets/images/products/p5.jpg" alt=""></a>
                                                </div>
                                                <!-- /.image -->
                                                <div class="tag hot"><span>hot</span></div>
                                            </div>
                                            <!-- /.product-image -->
                                            <div class="product-info text-left">
                                                <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                                <div class="rating rateit-small"></div>
                                                <div class="description"></div>
                                                <div class="product-price">
                                                    <span class="price">
                                                    $650.99             </span>
                                                    <span class="price-before-discount">$ 800</span>
                                                </div>
                                                <!-- /.product-price -->
                                            </div>
                                            <!-- /.product-info -->
                                            <div class="cart clearfix animate-effect">
                                                <div class="action">
                                                    <ul class="list-unstyled">
                                                      <li class="add-cart-button btn-group">
                                                          <button class="btn btn-primary cart-btn" type="button"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                                                      </li>
                                                      <li class="add-cart-button btn-group">
                                                          <button class="btn btn-primary cart-btn" type="button"><i class="fa fa-heart" aria-hidden="true"></i></button>
                                                      </li>
                                                      <li class="add-cart-button btn-group">
                                                          <button class="btn btn-primary cart-btn" type="button"><i class="fa fa-signal"></i></button>
                                                      </li>
                                                    </ul>
                                                </div>
                                                <!-- /.action -->
                                            </div>
                                            <!-- /.cart -->
                                        </div>
                                        <!-- /.product -->
                                    </div>
                                    <!-- /.products -->
                                </div>
                                <!-- /.item -->
                                <div class="item item-carousel">
                                    <div class="products">
                                        <div class="product">
                                            <div class="product-image">
                                                <div class="image">
                                                    <a href="detail.html"><img  src="assets/images/blank.gif" data-echo="assets/images/products/p6.jpg" alt=""></a>
                                                </div>
                                                <!-- /.image -->
                                                <div class="tag new"><span>new</span></div>
                                            </div>
                                            <!-- /.product-image -->
                                            <div class="product-info text-left">
                                                <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                                <div class="rating rateit-small"></div>
                                                <div class="description"></div>
                                                <div class="product-price">
                                                    <span class="price">
                                                    $650.99             </span>
                                                    <span class="price-before-discount">$ 800</span>
                                                </div>
                                                <!-- /.product-price -->
                                            </div>
                                            <!-- /.product-info -->
                                            <div class="cart clearfix animate-effect">
                                                <div class="action">
                                                    <ul class="list-unstyled">
                                                      <li class="add-cart-button btn-group">
                                                          <button class="btn btn-primary cart-btn" type="button"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                                                      </li>
                                                      <li class="add-cart-button btn-group">
                                                          <button class="btn btn-primary cart-btn" type="button"><i class="fa fa-heart" aria-hidden="true"></i></button>
                                                      </li>
                                                      <li class="add-cart-button btn-group">
                                                          <button class="btn btn-primary cart-btn" type="button"><i class="fa fa-signal"></i></button>
                                                      </li>
                                                    </ul>
                                                </div>
                                                <!-- /.action -->
                                            </div>
                                            <!-- /.cart -->
                                        </div>
                                        <!-- /.product -->
                                    </div>
                                    <!-- /.products -->
                                </div>
                                <!-- /.item -->
                            </div>
                            <!-- /.home-owl-carousel -->
                        </section>
                        <!-- /.section -->
                    </div>
                    <div class='col-md-6 sidebar'>
                        <div class="sidebar-module-container">
                            <div class="syn-desktop-view">
                                <div class="syn-payment-methods">
                                    <h3>Payment Methods</h3>
                                    <p>Cash/Card on delivery</p>
                                    <p>bKash/Online payment</p>
                                </div>
                                <div class="security-guarenteed">
                                    <h3><i class="fa fa-lock" aria-hidden="true"></i> Payment Security Guarenteed</h3>

                                    <img class="img-responsive" src="{{asset('assets/images/payments/payments.jpg')}}">
                                </div>
                            </div>

                            <div class="sidebar-widget hot-deals wow fadeInUp outer-top-vs">
                                <h3 class="section-title">hot deals</h3>
                                <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-xs">
                                    <div class="item">
                                        <div class="products">
                                            <div class="hot-deal-wrapper">
                                                <div class="image">
                                                    <img src="assets/images/hot-deals/p5.jpg" alt="">
                                                </div>
                                                <div class="sale-offer-tag"><span>35%<br>off</span></div>
                                                <!-- <div class="timing-wrapper">
                                                    <div class="box-wrapper">
                                                        <div class="date box">
                                                            <span class="key">120</span>
                                                            <span class="value">Days</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-wrapper">
                                                        <div class="hour box">
                                                            <span class="key">20</span>
                                                            <span class="value">HRS</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-wrapper">
                                                        <div class="minutes box">
                                                            <span class="key">36</span>
                                                            <span class="value">MINS</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-wrapper hidden-md">
                                                        <div class="seconds box">
                                                            <span class="key">60</span>
                                                            <span class="value">SEC</span>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <!-- /.hot-deal-wrapper -->
                                            <div class="product-info text-left m-t-20">
                                                <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                                <div class="rating rateit-small"></div>
                                                <div class="product-price">
                                                    <span class="price">
                                                    $600.00
                                                    </span>
                                                    <span class="price-before-discount">$800.00</span>
                                                </div>
                                                <!-- /.product-price -->
                                            </div>
                                            <!-- /.product-info -->
                                            <div class="cart clearfix animate-effect">
                                                <div class="action">
                                                    <div class="add-cart-button btn-group">
                                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                        </button>
                                                        <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                    </div>
                                                </div>
                                                <!-- /.action -->
                                            </div>
                                            <!-- /.cart -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="products">
                                            <div class="hot-deal-wrapper">
                                                <div class="image">
                                                    <img src="{{asset('assets/images/products/p6.jpg')}}" alt="">
                                                </div>
                                                <div class="sale-offer-tag"><span>35%<br>off</span></div>
                                                <div class="timing-wrapper">
                                                    <div class="box-wrapper">
                                                        <div class="date box">
                                                            <span class="key">120</span>
                                                            <span class="value">Days</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-wrapper">
                                                        <div class="hour box">
                                                            <span class="key">20</span>
                                                            <span class="value">HRS</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-wrapper">
                                                        <div class="minutes box">
                                                            <span class="key">36</span>
                                                            <span class="value">MINS</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-wrapper hidden-md">
                                                        <div class="seconds box">
                                                            <span class="key">60</span>
                                                            <span class="value">SEC</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.hot-deal-wrapper -->
                                            <div class="product-info text-left m-t-20">
                                                <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                                <div class="rating rateit-small"></div>
                                                <div class="product-price">
                                                    <span class="price">
                                                    $600.00
                                                    </span>
                                                    <span class="price-before-discount">$800.00</span>
                                                </div>
                                                <!-- /.product-price -->
                                            </div>
                                            <!-- /.product-info -->
                                            <div class="cart clearfix animate-effect">
                                                <div class="action">
                                                    <div class="add-cart-button btn-group">
                                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                        <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                    </div>
                                                </div>
                                                <!-- /.action -->
                                            </div>
                                            <!-- /.cart -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="products">
                                            <div class="hot-deal-wrapper">
                                                <div class="image">
                                                    <img src="{{asset('assets/images/products/p7.jpg')}}" alt="">
                                                </div>
                                                <div class="sale-offer-tag"><span>35%<br>off</span></div>
                                                <div class="timing-wrapper">
                                                    <div class="box-wrapper">
                                                        <div class="date box">
                                                            <span class="key">120</span>
                                                            <span class="value">Days</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-wrapper">
                                                        <div class="hour box">
                                                            <span class="key">20</span>
                                                            <span class="value">HRS</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-wrapper">
                                                        <div class="minutes box">
                                                            <span class="key">36</span>
                                                            <span class="value">MINS</span>
                                                        </div>
                                                    </div>
                                                    <div class="box-wrapper hidden-md">
                                                        <div class="seconds box">
                                                            <span class="key">60</span>
                                                            <span class="value">SEC</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.hot-deal-wrapper -->
                                            <div class="product-info text-left m-t-20">
                                                <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                                <div class="rating rateit-small"></div>
                                                <div class="product-price">
                                                    <span class="price">
                                                    $600.00
                                                    </span>
                                                    <span class="price-before-discount">$800.00</span>
                                                </div>
                                                <!-- /.product-price -->
                                            </div>
                                            <!-- /.product-info -->
                                            <div class="cart clearfix animate-effect">
                                                <div class="action">
                                                    <div class="add-cart-button btn-group">
                                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                        <i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                        <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                    </div>
                                                </div>
                                                <!-- /.action -->
                                            </div>
                                            <!-- /.cart -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /.sidebar-widget -->
                            </div>
                            <!-- /.sidebar-widget -->
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- /.container -->
        </div>
    </div>
</div>
<!-- END MAIN AREA -->
  @endsection

  @section('js-script')
    <script src=" {{asset('assets/js/jquery-1.11.1.min.js') }}"></script>
    <script src=" {{asset('assets/js/bootstrap.min.js') }}"></script>
    <script src=" {{asset('assets/js/bootstrap-hover-dropdown.min.js') }}"></script>
    <script src=" {{asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src=" {{asset('assets/js/echo.min.js') }}"></script>
    <script src=" {{asset('assets/js/jquery.easing-1.3.min.js') }}"></script>
    <script src=" {{asset('assets/js/bootstrap-slider.min.js') }}"></script>
    <script src=" {{asset('assets/js/jquery.rateit.min.js') }}"></script>
    <script type="text/javascript" src=" {{asset('assets/js/lightbox.min.js') }}"></script>
    <script src=" {{asset('assets/js/bootstrap-select.min.js') }}"></script>
    <script src=" {{asset('assets/js/wow.min.js') }}"></script>
    <script src=" {{asset('assets/js/scripts.js') }}"></script>
  @endsection