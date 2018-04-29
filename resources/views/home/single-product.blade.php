@extends('home.partial.master')
@section('body_class',"catalog-product-view")
@section('style-sheet')


<!-- Customizable CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/css/swiper.min.css">
<link rel="stylesheet" href="{{asset('assets/css/main.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/blue.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/owl.transitions.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/animate.min.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap-select.min.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/lightbox.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/easyzoom.css') }}">
<!-- Icons/Glyphs -->

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> @endsection @section('content')
<!-- START MAIN AREA -->
<div class="em-wrapper-main">
  <div class="container container-main">
    <div class="wrapper-breadcrums">
      <div class="container">
        <div class="row">
          <div class="col-sm-24">
            <div class="breadcrumbs">
              <ul>
                <li class="home" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                  <a href="" title="Go to Home Page" itemprop="url"><span itemprop="title">Home</span></a> <span class="separator">/ </span>
                </li>
                @if ($singleProduct->category)
                <li class="category170" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                  <a href="" title="" itemprop="url"><span itemprop="title">{{ $singleProduct->category->name }}</span></a> <span class="separator">/ </span>
                </li>
                @endif @if ($singleProduct->subcategory)
                <li class="category171" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                  <a href="" title="" itemprop="url"><span itemprop="title">{{ $singleProduct->subcategory->name }}</span></a> <span class="separator">/ </span>
                </li>
                @endif @if ($singleProduct->undersubcategory)
                <li class="category190" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                  <a href="" title="" itemprop="url"><span itemprop="title">{{ $singleProduct->undersubcategory->name }}</span></a> <span class="separator">/ </span>
                </li>
                @endif

                <li class="product"> <strong>{{ $singleProduct->title }}</strong>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.breadcrumb -->
    <div class="body-content outer-top-xs">
      <div class='container'>
        <div class='row single-product'>

          <!-- /.sidebar -->
          <div class='col-md-18 col-xs-24'>

            <div class="detail-block">
              <div class="row  wow fadeInUp">
                <!-- mobile product image -->
                <div class="em-product-view-primary em-product-img-box col-sm-12 first visible-xs">
                  <div class="product-img-box">
                    <div class="mobile-slider">
                      <div class="swiper-container swiper-container-horizontal swiper-container-android">
                        <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                          @if ($singleProduct->image0)
                            <div class="swiper-slide swiper-slide-active" style="width: 353px; margin-right: 30px;">
                              <img src="{{ asset('images/thumbnail/'.$singleProduct->image0) }}" alt="{{ $singleProduct->title }}">
                            </div>
                          @endif
                          @if ($singleProduct->image1)
                            <div class="swiper-slide swiper-slide-next" style="width: 353px; margin-right: 30px;">
                              <img src="{{ asset('images/thumbnail/'.$singleProduct->image1) }}" alt="{{ $singleProduct->title }}">
                            </div>
                          @endif
                          @if ($singleProduct->image2)
                            <div class="swiper-slide swiper-slide-next" style="width: 353px; margin-right: 30px;">
                              <img src="{{ asset('images/thumbnail/'.$singleProduct->image2) }}" alt="{{ $singleProduct->title }}">
                            </div>
                          @endif
                          @if ($singleProduct->image3)
                            <div class="swiper-slide swiper-slide-next" style="width: 353px; margin-right: 30px;">
                              <img src="{{ asset('images/thumbnail/'.$singleProduct->image3) }}" alt="{{ $singleProduct->title }}">
                            </div>
                          @endif
                          @if ($singleProduct->image4)
                            <div class="swiper-slide swiper-slide-next" style="width: 353px; margin-right: 30px;">
                              <img src="{{ asset('images/thumbnail/'.$singleProduct->image4) }}" alt="{{ $singleProduct->title }}">
                            </div>
                          @endif
                          @if ($singleProduct->image5)
                            <div class="swiper-slide swiper-slide-next" style="width: 353px; margin-right: 30px;">
                              <img src="{{ asset('images/thumbnail/'.$singleProduct->image5) }}" alt="{{ $singleProduct->title }}">
                            </div>
                          @endif


                        </div> <!-- Add Pagination -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                      </div>
                    </div>
                </div>
                </div>
                <style media="screen">
                .swiper-slide img {
                    width: 100%;
                  }
                </style>
                <!-- mobile product image -->
                <div class="col-xs-24 col-sm-12 col-md-12 gallery-holder zoom-wrapper hidden-xs">
                  <div class="product-item-holder">
                    @if ($singleProduct->image0)
                    <div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails">
                      <a href="{{ asset('images/zoom/'.$singleProduct->image0) }}">
                        <img src="{{ asset('images/thumbnail/'.$singleProduct->image0) }}" alt="" width="410" height="400" />
                      </a>
                    </div>
                    @endif
                    <ul class="thumbnails">
              				<li>
              					<a href="{{ asset('images/zoom/'.$singleProduct->image0) }}" data-standard="{{ asset('images/thumbnail/'.$singleProduct->image0) }}">
              						<img src="{{ asset('images/small/'.$singleProduct->image0) }}" alt="" />
              					</a>
              				</li>
              				<li>
              					<a href="{{ asset('images/zoom/'.$singleProduct->image1) }}" data-standard="{{ asset('images/thumbnail/'.$singleProduct->image1) }}">
              						<img src="{{ asset('images/small/'.$singleProduct->image1) }}" alt="" />
              					</a>
              				</li>
              				<li>
              					<a href="{{ asset('images/zoom/'.$singleProduct->image2) }}" data-standard="{{ asset('images/thumbnail/'.$singleProduct->image2) }}">
              						<img src="{{ asset('images/small/'.$singleProduct->image2) }}" alt="" />
              					</a>
              				</li>
              				<li>
              					<a href="{{ asset('images/zoom/'.$singleProduct->image3) }}" data-standard="{{ asset('images/thumbnail/'.$singleProduct->image3) }}">
              						<img src="{{ asset('images/small/'.$singleProduct->image3) }}" alt="" />
              					</a>
              				</li>
              				<li>
              					<a href="{{ asset('images/zoom/'.$singleProduct->image4) }}" data-standard="{{ asset('images/thumbnail/'.$singleProduct->image4) }}">
              						<img src="{{ asset('images/small/'.$singleProduct->image4) }}" alt="" />
              					</a>
              				</li>
              				<li>
              					<a href="{{ asset('images/zoom/'.$singleProduct->image5) }}" data-standard="{{ asset('images/thumbnail/'.$singleProduct->image5) }}">
              						<img src="{{ asset('images/small/'.$singleProduct->image5) }}" alt="" />
              					</a>
              				</li>
              			</ul>
                  </div>

                  <!-- /.single-product-gallery -->
                  {{-- <div class="zoom-right"></div> --}}
                </div>
                <!-- /.gallery-holder -->
                <div class='col-xs-24 col-sm-12 col-md-12 product-info-block'>
                  <div class="product-info">
                    <h1 class="name">{{ $singleProduct->title }}</h1>
                    <div class="rating-reviews m-t-20">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="averag-rating">
                            @for ($i = 0; $i
                            < $avgrating; $i++) <i class="fa fa-star" aria-hidden="true"></i>
                              @endfor
                          </div>
                        </div>
                        <div class="col-sm-16">
                          <div class="reviews">
                            <a href="#" class="lnk">({{ $reviewcount }} Reviews)</a>
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
                            <span class="value">{{ $singleProduct->availability }}</span>
                          </div>
                        </div>
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.stock-container -->

                    <!-- /.description-container -->
                    <div class="price-container info-container m-t-20">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="price-box">

                            <span class="price">৳{{ number_format((float)$singleProduct->price, 2, '.', '') }}</span>
                            <span class="price-strike">@if ($singleProduct->discount !=0)
                                                          ৳{{ $singleProduct->main_price }}
                                                        @endif </span>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          @if ($singleProduct->discount !=0)
                          <div class="view-percent-price"> <strong style="font-size:18px;">-{{ $singleProduct->discount }}%</strong></div>
                        @endif
                        </div>
                      </div>
                      <!-- /.row -->
                      <div class="col-sm-24">
                        <div class="short-description">
                          <ul class="product-content">
                            <li>
                              <img alt="" src="https://d1lwfjp709sq0o.cloudfront.net/media/wysiwyg/em0131/layout_marketdeal/coin.png">
                               Earn
                               @if ($singleProduct->price >=1000)
                                 {{ ($singleProduct->price*5/100) }}
                               @endif
                               Club Points
                             </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                    <!-- /.price-container -->
                    {{-- <form class="" action="" method="post"> --}}
                    @if ($singleProduct->size_1)
                    <div class="product-options" id="product-options-wrapper">
                      <dl class="last">
                        <dt class="swatch-attr">
                            <label id="size_label" class="required"> <em>*</em>Size: <span id="select_label_size" class="select-label"></span> </label>
                        </dt>
                        <dd class="clearfix swatch-attr last">
                          <div class="input-box">
                            <ul id="configurable_swatch_size" class="configurable-swatch-list clearfix">
                              <li class="option-s" id="option73">
                                  <span class="swatch-label" data-size="S"  style="height: 50px; min-width: 50px; line-height: 50px;"> S </span>
                              </li>
                              <li class="option-l" id="option325">
                                  <span class="swatch-label" data-size="M" style="height: 50px; min-width: 50px; line-height: 50px;"> M </span>
                              </li>
                              <li class="option-m" id="option323">
                                  <span class="swatch-label" data-size="L" style="height: 50px; min-width: 50px; line-height: 50px;"> L </span>
                              </li>
                              <li class="option-xl" id="option326">
                                  <span class="swatch-label" data-size="XL" style="height: 50px; min-width: 50px; line-height: 50px;"> XL </span>
                              </li>
                              <li class="option-xxl" id="option5177">
                                  <span class="swatch-label" data-size="XXL" style="height: 50px; min-width: 50px; line-height: 50px;"> XXL </span>
                              </li>
                            </ul>
                          </div>
                        </dd>
                      </dl>
                      <p class="required"></p>
                    </div>
                    @endif
                    <div class="quantity-container info-container">
                      <div class="row">
                        <div class="col-xs-4 col-sm-4">
                          <span class="label">Qty :</span>
                        </div>
                        <div class="col-xs-6 col-sm-6">
                          <div class="cart-quantity">
                            <div class="quant-input">
                              <div class="arrows">
                                <div class="arrow plus gradient"><span class="ir"><i class="fa fa-sort-asc" aria-hidden="true"></i></span></div>
                                <div class="arrow minus gradient"><span class="ir"><i class="fa fa-sort-desc" aria-hidden="true"></i></span></div>
                              </div>
                              <input id="qty" type="text" value="1">
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-14 col-sm-14">
                          <a href="javascript:void(0)" class="btn btn-primary cart-btn" data-productid="{{ $singleProduct->id }}"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</a>
                        </div>
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.quantity-container -->
                  {{-- </form> --}}
                  </div>
                  <!-- /.product-info -->
                </div>
                <!-- /.col-sm-7 -->
              </div>
              <!-- /.row -->
            </div>

            <section id="em-wrapper-related" class="section featured-product wow fadeInUp">
              <h3 class="section-title">YOU MAY ALSO LIKE</h3>
              <div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
                @foreach ($reletedproduct as $element)

                <div class="item item-carousel">
                  <div class="products">
                    <div class="product">
                      <div class="product-image">
                        <div class="image">
                          <a href="{{ route('singleproduct',['sku'=>$element->sku,'slug' => $element->slug]) }}"><img  src="{{ asset('images/thumbnail/'.$element->image0 ) }}" alt=""></a>
                        </div>
                        <!-- /.image -->
                      </div>
                      <!-- /.product-image -->
                      <div class="product-info text-left">
                        <h3 class="name"><a href="{{ route('singleproduct',['sku'=>$element->sku,'slug' => $element->slug]) }}">{{ str_limit($element->title, 20, '...') }}</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="description"></div>
                        <div class="product-price">
                          <span class="price">৳{{ number_format((float)$element->price, 2, '.', '') }}</span>
                          <span class="price-before-discount">@if ($element->discount !=0)
                            ৳{{ $element->main_price }}
                          @endif</span>
                        </div>
                        <!-- /.product-price -->
                      </div>
                      <!-- /.product-info -->
                      {{-- <div class="cart clearfix animate-effect">
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
                      </div> --}}
                      <!-- /.cart -->
                    </div>
                    <!-- /.product -->
                  </div>
                  <!-- /.products -->
                </div>
                <!-- /.item -->
                @endforeach
              </div>
              <!-- /.home-owl-carousel -->
            </section>
            <!-- /.section -->

            <div class="product-tabs inner-bottom-xs  wow fadeInUp hidden-xs">
              <div class="row">
                <div class="col-sm-6">
                  <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                    <li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
                    <li><a data-toggle="tab" href="#specification">Specifications</a></li>
                    {{-- <li><a data-toggle="tab" href="#tags">TAGS</a></li> --}}
                  </ul>
                  <!-- /.nav-tabs #product-tabs -->
                </div>
                <div class="col-sm-18">
                  <div class="tab-content">
                    <div id="description" class="tab-pane in active">
                      <div class="product-tab">
                        {!! $singleProduct->detailes !!}
                      </div>
                    </div>
                    <!-- /.tab-pane -->
                    <div id="specification" class="tab-pane">
                      <div class="product-tab">
                        {!! $singleProduct->specification !!}

                      </div>
                      <!-- /.product-tab -->
                    </div>
                    <!-- /.tab-pane -->
                    {{-- <div id="tags" class="tab-pane">
                      <div class="product-tab">

                      </div>
                      <!-- /.product-tab -->
                    </div> --}}
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.product-tabs -->
            <div class="em-product-info ">
              {{-- <div class="mobile-view">
                <p>
                  <a title="Bkash Offer" href="https://www.pickaboo.com/bkash-terms-conditions" target="_blank">
                    <img class="img-responsive" style="display: block; margin-left: auto; margin-right: auto;" alt="Bkash Offer" src="https://d1lwfjp709sq0o.cloudfront.net/media/wysiwyg/cmsp/Bkash-strip_1.gif">
                  </a>
                </p>
              </div> --}}
              <div class="mobile-view">
                <img class="syn-buyer-protection img-responsive" src="https://www.pickaboo.com/skin/frontend/em0131/em0131_marketdeal/images/Buyer-Protection.jpg">
              </div>
              <div class="mobile-pdt-rating">
                <h3>Product Review</h3>
                <span>
                  <div class="product-rating">
                    <div class="mobile-review-rating">
                      <div class="mobile-rating">
                        <p class="amount-mobile">4.7 / 5</p>
                      </div>
                      <div class="mobile-two-ratings">
                        <div class="rating-box-txt">
                          <div class="rating-mobile" style="width:94%"></div>
                        </div>
                      </div>
                    </div>
                    <div class="ratings">
                      <div class="rating-box">
                        <div class="rating" style="width:94%"></div>
                      </div>
                      <span class="amount">
                        <a href="#" onclick="var t = opener ? opener.window : window; t.location.href='https://www.pickaboo.com/review/product/list/id/16182/'; return false;">(17)</a>
                      </span>
                    </div>
                    <div class="single-star-rating">
                      <ul class="skills">
                        <div class="mob-skill-full">
                          <div class="full-content-str">
                            <div class="mob-st-str">5</div>
                            <div class="sonny_progressbar" data-width="51">
                              <p class="title"></p>
                              <div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;">
                                <span class="backgroundBar"></span>
                                <span class="targetBar" style="width:51%;background-color:#CCC;"></span>
                                <span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; width: 51%;"></span>
                              </div>
                            </div>
                            <div class="mob-count">51</div>
                          </div>
                          <div class="full-content-str">
                            <div class="mob-st-str">4</div>
                            <div class="sonny_progressbar" data-width="17">
                              <p class="title"></p>
                              <div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;">
                                <span class="backgroundBar"></span>
                                <span class="targetBar" style="width:17%;background-color:#CCC;"></span>
                                <span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; width: 17%;"></span>
                              </div>
                            </div>
                            <div class="mob-count">17</div>
                          </div>
                          <div class="full-content-str">
                            <div class="mob-st-str">3</div>
                            <div class="sonny_progressbar" data-width="22">
                              <p class="title"></p>
                              <div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;">
                                <span class="backgroundBar"></span>
                                <span class="targetBar" style="width:22%;background-color:#CCC;"></span>
                                <span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; width: 22%;"></span>
                              </div>
                            </div>
                            <div class="mob-count">22</div>
                          </div>
                          <div class="full-content-str">
                            <div class="mob-st-str">2</div>
                            <div class="sonny_progressbar" data-width="0">
                              <p class="title"></p>
                              <div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;">
                                <span class="backgroundBar"></span>
                                <span class="bar" style="background-color: rgb(254, 242, 0); opacity: 1; width: 0%;"></span>
                              </div>
                            </div>
                            <div class="mob-count">0</div>
                          </div>
                          <div class="full-content-str">
                            <div class="mob-st-str">1</div>
                            <div class="sonny_progressbar" data-width="0">
                              <p class="title"></p>
                              <div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;">
                                <span class="backgroundBar"></span>
                                <span class="bar" style="background-color: rgb(249, 115, 82); opacity: 1; width: 0%;"></span>
                              </div>
                            </div>
                            <div class="mob-count">0</div>
                          </div>
                        </div>
                      </ul>
                      <script>
                        jQuery('.progressbar1').progressBar({
                        shadow : true,
                        percentage : false,
                        animation : true,
                        });
                        jQuery('.progressbar2').progressBar({
                        shadow : true,
                        percentage : false,
                        animation : true,
                        barColor : "#527AF9",
                        });
                        jQuery('.progressbar4').progressBar({
                        shadow : true,
                        percentage : false,
                        animation : true,
                        animateTarget : true,
                        barColor : "#FEF200",
                        });
                        jQuery('.progressbar5').progressBar({
                        shadow : true,
                        percentage : false,
                        animation : true,
                        barColor : "#61BC47",
                        });
                        jQuery('.progressbar3').progressBar({
                        shadow : true,
                        percentage : false,
                        animation : true,
                        animateTarget : true,
                        barColor : "#C3B238",
                        });//Menu
                        jQuery(".spinDown").click(function() {
                        var target = $(this).data("target");
                        var scrollFix = -80;
                        target = "#" + target;
                        jQuery("html,body").animate({
                        scrollTop : $(target).offset().top + scrollFix
                        }, 1000);
                        return false;
                        });
                      </script>
                    </div>
                    <div class="mobile-review-btn">
                      <span>
                        <input class="link-login" type="button" value="Rating &amp; review" title="" onclick="review('')">
                      </span>
                      <input type="hidden" id="logged" value="">
                    </div>
                    <script>
                      function review(customerid)
                        {
                        var logged = jQuery("#logged").val();
                        if(logged == ''){
                        alert('Please Login');
                        }
                        else {
                        jQuery("#customer_review_form").show();
                        jQuery(".link-login").hide();
                        jQuery("#customer_review_form").css({"Display": "block"});
                        } }
                    </script>
                  </div>
                </span>
              </div>
              <div class="mobile-pdt-review">
                <div class="box-collateral box-reviews em-line-01" id="customer-reviews">
                  <div id="customer_review_list" class="reviews">
                    <div class="em-block-title"><h2>Customer Reviews</h2></div>
                    <div class="em-box-review">
                      <table>
                        <colgroup>
                          <col style="width:1%;">
                          <col style="width:1%;">
                          <col>
                        </colgroup>
                        <tbody>
                          <tr>
                            <td class="em-review-nickname"> Mahamudul</td>
                            <td>
                              <table class="ratings-table">
                                <colgroup>
                                  <col style="width:1%;">
                                  <col>
                                </colgroup>
                                <tbody>
                                  <tr>
                                    <th>Quality</th>
                                    <td>
                                      <div class="rating-box">
                                        <div class="rating" style="width:100%;"></div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th>Price</th>
                                    <td>
                                      <div class="rating-box">
                                        <div class="rating" style="width:100%;"></div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th>Value</th>
                                    <td>
                                      <div class="rating-box">
                                        <div class="rating" style="width:100%;"></div>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                            <td>
                              <p>
                                <a href="https://www.pickaboo.com/review/product/view/id/5069/">good</a>
                              </p>
                              <p>good</p>
                            </td>
                          </tr>
                          <tr>
                            <td class="em-review-nickname"> Afnan</td>
                            <td>
                              <table class="ratings-table">
                                <colgroup>
                                  <col style="width:1%;"><col>
                                </colgroup>
                                <tbody>
                                  <tr>
                                    <th>Quality</th>
                                    <td>
                                      <div class="rating-box">
                                        <div class="rating" style="width:100%;"></div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th>Value</th>
                                    <td>
                                      <div class="rating-box">
                                        <div class="rating" style="width:100%;"></div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th>Price</th>
                                    <td>
                                      <div class="rating-box">
                                        <div class="rating" style="width:100%;"></div>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                            <td>
                              <p>
                                <a href="https://www.pickaboo.com/review/product/view/id/4702/">100% Satisfied</a>
                              </p>
                              <p>Tnx pickaboo atto valo 1ta product atto valo offer  a dia r jonny</p>
                            </td>
                          </tr>
                          </tbody>
                        </table>
                        <a class="viewall" href="https://www.pickaboo.com/review/product/list/id/16182/">
                          <span>View all</span>
                        </a>
                      </div>
                    </div>
                    <div class="form_review have_reviews">
                      <div class="form-add" id="customer_review_form">
                        <div class="em-block-title">
                          <h2>Write Your Own Review</h2>
                        </div>
                        <p class="review-nologged" id="review-form"> Only registered users can write reviews. Please,
                          <a href="">log in</a> or <a href="">register</a>
                        </p>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="em-product-details ">
                  <div class="emtabs-below-image em-line-01 em-details-tabs product-collateral r-tabs">
                      <div id="ss_menu" class="syn-mobile-view">
                        <div class="dd_button">Details</div>
                        <div class="dd_content">
                          <div class="em-block-title">
                            <h2>Details</h2>
                          </div>
                          <div class="box-collateral-content">
                            <div class="std">
                              {!! $singleProduct->detailes !!}
                            </div>
                          </div>
                        </div>
                      </div>
                      <script>
                      jQuery(function() {
                        jQuery('.dd_button').on('click',function() {
                          // jQuery('.ss_content').slideUp('fast');
                          jQuery('.dd_content').toggle();
                          // jQuery(this).next('.ss_content').slideDown('fast');
                        });
                      });
                    </script>
                      <div id="ss_menu" class="syn-mobile-view">
                        <div class="sp_button">Specifications</div>
                        <div class="sp_content">
                          <div class="em-block-title">
                            <h2>Specifications</h2>
                          </div>
                          <div class="box-collateral-content">
                            {!! $singleProduct->specification !!}
                          </div>
                        </div>
                      </div>
                      <script>
                      jQuery(function() {
                        jQuery('.sp_button').on('click',function() {
                        jQuery('.sp_content').toggle();
                        });
                      });
                    </script>
                      <div id="ss_menu" class="syn-mobile-view">
                        <div class="pm_button">Payment Methods</div>
                        <div class="pm_content">
                          <p class="payment-methods-p1">Cash/Card on delivery</p>
                          <p class="payment-methods-p2">bKash/Online payment</p>
                        </div>
                      </div>
                      <script>
                      jQuery(function() {
                        jQuery('.pm_button').on('click',function() {
                          jQuery('.pm_content').toggle();
                        });
                      });
                    </script>
                  </div>
                </div>
            <div class="desktop-pdt-rating">
              <div class="box-collateral box-reviews em-line-01" id="customer-reviews">
                @if ($reviewcount)
                <div id="customer_review_list" class="reviews">
                  <div class="em-block-title">
                    <h2>Customer Reviews</h2>
                  </div>
                  <div class="em-box-review">
                    @foreach ($singleProduct->reviews as $review)
                    <table>
                      <colgroup>
                        <col style="width:1%;">
                        <col style="width:1%;">
                        <col>
                      </colgroup>
                      <tbody>
                        <tr>
                          <td class="em-review-nickname"> Sajibe</td>
                          <td>
                            <table class="ratings-table">
                              <colgroup>
                                <col style="width:1%;">
                                <col>
                              </colgroup>
                              <tbody>
                                <tr>
                                  @php $count = $review->rating; @endphp
                                  <td>
                                    @for ($i = 0; $i
                                    < $count; $i++) <i class="fa fa-star" aria-hidden="true"></i>
                                      @endfor
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                          <td>
                            <p><a href="">{{ $review->title }}</a></p>
                            <p>{{ $review->comment }}</p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    @endforeach
                  </div>
                </div>
                @endif

                @guest
                  <div class="form_review have_reviews">
                    <div class="form-add" id="customer_review_form">
                      <div class="em-block-title">
                        <h2>Write Your Own Review</h2>
                      </div>
                      <p class="review-nologged" id="review-form"> Only registered users can write reviews. Please,
                        <a href="{{ route('custom.login') }}">log in</a> or
                        <a href="{{ route('register') }}">register</a>
                      </p>
                    </div>
                  </div>
                @else
                  <div class="form_review have_reviews">
                    <div class="form-add" id="customer_review_form">
                      <div class="em-block-title">
                        <h2>Write Your Own Review</h2>
                      </div>
                      <form action="{{ route('singleproduct.review',['sku'=> $singleProduct->sku]) }}" method="post" id="review-form">
                        {{ csrf_field() }}
                        <div class="row">
                          <div class="col-sm-11">
                            <fieldset>
                              <h3>You're reviewing: <span>Samsung Galaxy J1 NXT Prime 1GB/8GB</span></h3>
                              <ul class="form-list">
                                <li> <label for="nickname_field" class="required"><em>*</em>Nickname</label>
                                  <div class="input-box">
                                    <input type="text" name="nickname" id="nickname_field" class="input-text required-entry" value="{{ Auth::user()->firstname }}">
                                  </div>
                                </li>
                                <li> <label for="summary_field" class="required"><em>*</em>Summary of Your Review</label>
                                  <div class="input-box">
                                    <input type="text" name="title" id="summary_field" class="input-text required-entry" value="">
                                  </div>
                                </li>
                                <li> <label for="review_field" class="required"><em>*</em>Review</label>
                                  <div class="input-box"> <textarea name="detail" id="review_field" cols="5" rows="3" class="required-entry"></textarea>
                                  </div>
                                </li>
                              </ul>
                            </fieldset>
                          </div>
                          <div class="col-sm-13">
                            <h4>How do you rate this product? <em class="required">*</em></h4> <span id="input-message-box"></span>
                            <span class="rating">
                                            <input id="rating5" type="radio" name="rating" value="5">
                                            <label for="rating5">5</label>
                                            <input id="rating4" type="radio" name="rating" value="4">
                                            <label for="rating4">4</label>
                                            <input id="rating3" type="radio" name="rating" value="3">
                                            <label for="rating3">3</label>
                                            <input id="rating2" type="radio" name="rating" value="2">
                                            <label for="rating2">2</label>
                                            <input id="rating1" type="radio" name="rating" value="1">
                                            <label for="rating1">1</label>
                                        </span>

                          </div>
                        </div>
                        <div class="buttons-set">
                          <button type="submit" title="Submit Review" class="button"><span><span>Submit Review</span></span></button>
                        </div>
                      </form>
                    </div>
                  </div>
                @endguest

              </div>
            </div>


          </div>

          <div class="clearfix"></div>
        </div>
        <div class='col-md-6 sidebar hidden-xs'>
          <div class="sidebar-module-container">
            <div class="syn-desktop-view">
              <div class="syn-payment-methods">
                <h3>Payment Methods</h3>
                <p>Cash/Card on delivery</p>
                {{-- <p>bKash/Online payment</p> --}}
              </div>
              {{-- <div class="security-guarenteed">
                <h3><i class="fa fa-lock" aria-hidden="true"></i> Payment Security Guarenteed</h3>

                <img class="img-responsive" src="{{asset('assets/images/payments/payments.jpg')}}">
              </div> --}}
            </div>

            {{-- <div class="sidebar-widget hot-deals wow fadeInUp outer-top-vs">
              <h3 class="section-title">hot deals</h3>
              <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-xs">
                <div class="item">
                  <div class="products">
                    <div class="hot-deal-wrapper">
                      <div class="image">
                        <img src="assets/images/hot-deals/p5.jpg" alt="">
                      </div>
                      <div class="sale-offer-tag"><span>35%<br>off</span></div>

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
            </div> --}}
            <!-- /.sidebar-widget -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.container -->
    </div>
  </div>
</div>
<!-- END MAIN AREA -->
@endsection
@section('js-script')
<script src=" {{asset('assets/js/jquery-1.11.1.min.js') }}"></script>
{{-- <script src="{{ asset('assets/js/jquery.elevateZoom-3.0.8.min.js') }} "></script> --}}
<script src="{{ asset('assets/js/easyzoom.js') }} "></script>
<script src=" {{asset('assets/js/bootstrap.min.js') }}"></script>
<script src=" {{asset('assets/js/bootstrap-hover-dropdown.min.js') }}"></script>
<script src=" {{asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/js/swiper.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/js/swiper.esm.js"></script>
<script src=" {{asset('assets/js/echo.min.js') }}"></script>
<script src=" {{asset('assets/js/jquery.easing-1.3.min.js') }}"></script>
<script src=" {{asset('assets/js/bootstrap-slider.min.js') }}"></script>
<script src=" {{asset('assets/js/lightbox.min.js') }}"></script>
<script src=" {{asset('assets/js/bootstrap-select.min.js') }}"></script>
<script src=" {{asset('assets/js/wow.min.js') }}"></script>
<script src=" {{asset('assets/js/scripts.js') }}"></script>
<script type="text/javascript">
var $easyzoom = $('.easyzoom').easyZoom();

// Setup thumbnails example
var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

$('.thumbnails').on('click', 'a', function(e) {
  var $this = $(this);

  e.preventDefault();

  // Use EasyZoom's `swap` method
  api1.swap($this.data('standard'), $this.attr('href'));
});
$(document).ready(function () {
    //initialize swiper when document ready
    var mySwiper = new Swiper ('.swiper-container', {
      loop: true,
      navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    })
  });
</script>
@endsection
