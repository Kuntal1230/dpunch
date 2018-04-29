    @extends('home.partial.master')

    @section('body_class',"cms-index-index cms-home  loaded")

    @section('slider')
      <script type="text/javascript">
          jQuery(document).ready(function ($) {

              var jssor_1_SlideshowTransitions = [
                {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
              ];

              var jssor_1_options = {
                $AutoPlay: 1,
                $SlideshowOptions: {
                  $Class: $JssorSlideshowRunner$,
                  $Transitions: jssor_1_SlideshowTransitions,
                  $TransitionsOrder: 1
                },
                $ArrowNavigatorOptions: {
                  $Class: $JssorArrowNavigator$
                },
                $ThumbnailNavigatorOptions: {
                  $Class: $JssorThumbnailNavigator$
                }
              };

              var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

              /*#region responsive code begin*/

              var MAX_WIDTH = 1180;

              function ScaleSlider() {
                  var containerElement = jssor_1_slider.$Elmt.parentNode;
                  var containerWidth = containerElement.clientWidth;

                  if (containerWidth) {

                      var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                      jssor_1_slider.$ScaleWidth(expectedWidth);
                  }
                  else {
                      window.setTimeout(ScaleSlider, 30);
                  }
              }

              ScaleSlider();

              $(window).bind("load", ScaleSlider);
              $(window).bind("resize", ScaleSlider);
              $(window).bind("orientationchange", ScaleSlider);
              /*#endregion responsive code end*/
          });
      </script>
      <style>
          /*jssor slider loading skin spin css*/
          .jssorl-009-spin img {
              animation-name: jssorl-009-spin;
              animation-duration: 1.6s;
              animation-iteration-count: infinite;
              animation-timing-function: linear;
          }

          @keyframes jssorl-009-spin {
              from { transform: rotate(0deg); }
              to { transform: rotate(360deg); }
          }

          /*jssor slider arrow skin 051 css*/
          .jssora051 {display:block;position:absolute;cursor:pointer;}
          .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
          .jssora051:hover {opacity:.8;}
          .jssora051.jssora051dn {opacity:.5;}
          .jssora051.jssora051ds {opacity:.3;pointer-events:none;}

          /*jssor slider thumbnail skin 111 css*/
          .jssort111 .p {position:absolute;top:0;left:0;width:200px;height:50px;background-color:#fff;}
          .jssort111 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.45;}
          .jssort111 .p:hover .t{opacity:.8;}
          .jssort111 .pav .t, .jssort111 .pdn .t, .jssort111 .p:hover.pdn .t{opacity:1;}
          .jssort111 .ti {position:absolute;bottom:0px;left:0px;width:100%;height:50px;line-height:50px;text-align:center;font-size:12px;color:#000;background-color:rgba(0,0,0,.3)}
          .jssort111 .pav .ti, .jssort111 .pdn .ti, .jssort111 .p:hover.pdn .ti{color:#000;background-color:rgba(255,255,255,.6);}
      </style>
      <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1180px;height:432px;overflow:hidden;visibility:hidden;">
          <!-- Loading Screen -->
          <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
              <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{asset('assets/img/spin.svg')}}" />
          </div>
          <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1180px;height:380px;overflow:hidden;">
              @foreach ($slider as $element)
                <div data-p="170.00">
                  <a href="{{ $element->slidelink }}">
                    <img data-u="image" src="{{asset('assets/img/slider/'.$element->sliderimg)}}" />
                  </a>
                    <div data-u="thumb">
                        <div class="ti">{{ $element->slidertext }}</div>
                    </div>
                </div>
              @endforeach
          </div>
          <!-- Thumbnail Navigator -->
          <div data-u="thumbnavigator" class="jssort111" style="position:absolute;left:0px;bottom:0px;width:1180px;height:50px;cursor:default;" data-autocenter="1" data-scale-bottom="0.75">
              <div data-u="slides">
                  <div data-u="prototype" class="p">
                      <div data-u="thumbnailtemplate" class="t"></div>
                  </div>
              </div>
          </div>
      </div>
      <!-- #endregion Jssor Slider End -->
    @endsection

    @section('banner_hotdeals')
      <div class="em-inner-main">
          <div class="em-wrapper-area04">
              <div class="row hidden-xs">
                  <div class="em-wrapper-banners">
                      <div class="col-sm-24  text-center">
                          <div class="img-banner">
                            @foreach ($banner as $element)
                              <a class="banner-img" href="{{ $element->bannerlink }}">
                                  <img class="img-responsive" title="Nova 2i" alt="Nova 2i" src="{{ asset('assets/img/banner/'.$element->banner) }}">
                              </a>
                            @endforeach

                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div>
            <div class="syn-mobmenu">
								<div class="row syn-mrow">
									<div class="syn-mmenu-header">
										<h3>* SHOP BY CATEGORY *</h3></div>
									<div class="syn-mmenu-list">
										<p class="col-xs-12 ">
                      <a href="http://dpunch.com/product/mobiles-tablets">
                        <img title="Mobile &amp; Smartphone" alt="" src="{{ asset('assets/img/Mobile-_-Tablet.png')}} " />Mobile &amp; Tablet</a>
                    </p>
										<p class="col-xs-12 ">
                      <a href="http://dpunch.com/product/electronics-appliances">
                        <img title="Electronics &amp; Appliances" alt="" src="{{ asset('assets/img/Electronics-_-Appliances.png')}}" />Electronics &amp; Appliances</a>
                    </p>
											<p class="col-xs-12 ">
                        <a href="http://dpunch.com/product/entertainment">
                          <img title="Entertainment" alt="" src="{{ asset('assets/img/Lifestyle-_-Entertainment.png')}}" />Entertainment</a>
                      </p>
												<p class="col-xs-12 ">
                          <a href="http://dpunch.com/product/computers">
                            <img title="Computers" alt="" src="{{ asset('assets/img/Computers.png')}}" />Computers</a>
                        </p>
												<p class="col-xs-12 ">
                          <a href="http://dpunch.com/product/daily-needs">
                            <img title="Daily Needs" alt="" src="{{ asset('assets/img/Daily-Needs.png')}}" />Daily Needs</a>
                        </p>
												<p class="col-xs-12 ">
                          <a href="http://dpunch.com/product/fashion-beauty">
                            <img title="Fashion &amp; Beauty" alt="" src="{{ asset('assets/img/Deals-_-Offers.png')}}" />Fashion &amp; Beauty</a>
                        </p>
									</div>
								</div>
						</div>
            <div class="syn-hot-deals">
                  <div class="row syn-row">
                      <div class="syn-cat-name"> * HOT DEALS *</div>
                      <div class="syn-view">
                        @foreach ($promotes as $element)
                          <div class="col-md-15 col-sm-15 col-xs-12 product-item syn-5column">
                              <div class="syn-product-image">
                                  <a href="{{ route('singleproduct',['sku'=>$element->product->sku,'slug' => $element->product->slug]) }}">
                                      <img id="product-collection-image-7338" class="img-responsive" src="{{ asset('images/thumbnail'.$element->product->image0) }}" alt="" align="middle" width="211" height="190">
                                  </a>
                              </div>
                              <div class="syn-product-shop">
                                  <div class="syn-extra-info">
                                      <div class="syn-product-rating">
                                      </div>
                                      <div class="syn-product-name">
                                          <a href="{{ route('singleproduct',['sku'=>$element->product->sku,'slug' => $element->product->slug]) }}"> <span>{{ str_limit($element->product->title, 20, '...') }}</span> </a>
                                      </div>
                                      <div class="syn-product-price">
                                          <div class="percent-price">
                                              <strong style="font-size:18px;">-{{ $element->product->discount }}%</strong>
                                          </div>
                                          ৳{{ number_format((float)$element->product->price, 2, '.', '') }}
                                            <span class="syn-price-product-grid">@if ($element->product->discount !=0)
                                              ৳{{ $element->product->main_price }}
                                            @endif </span>
                                      </div>
                                  </div>
                                  <!-- <div class="syn-buy-now-wrapper">
                                    <button type="button" title="Add to Cart" id="addItem" class="syn-buy-now-button" name="button" data-id="1" >Buy Now</button>
                                  </div> -->
                              </div>
                          </div>
                        @endforeach
                      </div>
                  </div>
              </div>
          </div>
      </div>
    @endsection
    @section('content')
      <div class="em-main-container em-col1-layout">
                        <div class="row">
                            <div class="em-col-main col-sm-24">
                                <div class="std">
                                    <div class="page-title">
                                        <h2>&nbsp;</h2>
                                    </div>
                                </div>
                                <div class="em-wrapper-area04">
                                    <div class="row hidden-xs">
                                        <div class="em-wrapper-category-banners">
                                            <div class="col-sm-24  text-center">
                                                <div class="img-category-banner">
                                                  @foreach ($banner as $element)
                                                    <a class="banner-img" href="{{ $element->bannerlink }}">
                                                        <img class="img-responsive" title="Nova 2i" alt="Nova 2i" src="{{ asset('assets/img/banner/'.$element->banner) }}">
                                                    </a>
                                                  @endforeach
                      
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Mobiles & Tablets start --}}
                                <div class="syn-category row red mone">
                                    <div class="syn-category-products">
                                        <div id="" class="emfilter-ajaxblock-loaded">
                                            <div class="syn-homepage-category">

                                                <div class="syn-category-tab">
                                                    <div class="syn-category-header">
                                                        <img class="img-responsive syn-homepage-catimage" src="{{asset('assets/img/mob-tablet.png')}}" alt="">
                                                        <h3>Mobiles & Tablets</h3>
                                                        <span class="syn-button-viewall">
                                                            <a href="http://dpunch.com/product/mobiles-tablets">View all</a>
                                                        </span>
                                                    </div>
                                                    <div class="syn-subcategory">
                                                        <ul>
                                                          @foreach ($mobile_tablates as $element)
                                                            <a href="{{ route('subcategoryproduct',['category'=>$element->category->slug,'subcategory'=>$element->slug]) }}"><li class="syn-subcategory-list">{{ $element->name }}</li></a>
                                                          @endforeach
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="syn-category-product-grid">
                                                  @foreach ($mobile_tablets as $element)
                                                    <div class="syn-product col-lg-8 col-sm-8">
                                                        <a href="{{ route('singleproduct',['sku'=>$element->sku,'slug' => $element->slug]) }}" title="" class="product-image ">
                                                            <img class="img-responsive em-alt-org" src="{{ asset('images/thumbnail/'.$element->image0) }}" alt="" align="middle" width="150" height="150">
                                                        </a>
                                                        <div class="syn-extra-info">
                                                          @if($element->reviews->count() <= 0)
                                                            <div class="syn-product-rating">
                                                              <div class="averag-no-rating-home" style="width:%">
                                                                @for ($i = 0; $i
                                                                < 5; $i++) <i class="fa fa-star" aria-hidden="true"></i>
                                                                  @endfor
                                                              </div>
                                                                <div class="ratings">
                                                                    <span class="amount">
                                                                        <a href="#">({{ $element->reviews->count() }})</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                          @else
                                                            <div class="syn-product-rating">
                                                              <div class="averag-rating-home" style="width:%">
                                                                @for ($i = 0; $i
                                                                < $element->reviews->avg('rating'); $i++) <i class="fa fa-star" aria-hidden="true"></i>
                                                                  @endfor
                                                              </div>
                                                                <div class="ratings">
                                                                    <span class="amount">
                                                                        <a href="#">({{ $element->reviews->count() }})</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                          @endif

                                                            <div class="syn-product-name">
                                                                <span>
                                                                    <a href="" title="">{{ str_limit($element->title, 20, '...')}}</a>
                                                                </span>
                                                            </div>
                                                            <div class="syn-product-price">৳{{ number_format((float)$element->price, 2, '.', '') }}
                                                              <span class="syn-price-product-grid">@if ($element->discount !=0)
                                                                ৳{{ $element->main_price }}
                                                              @endif </span>

                                                            </div>
                                                        </div>
                                                    </div>
                                                  @endforeach
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                {{-- Mobiles & Tablets end --}}

                                <div class="em-wrapper-area04">
                                    <div class="row hidden-xs">
                                        <div class="em-wrapper-category-banners">
                                            <div class="col-sm-24  text-center">
                                                <div class="img-category-banner">
                                                  @foreach ($banner as $element)
                                                    <a class="banner-img" href="{{ $element->bannerlink }}">
                                                        <img class="img-responsive" title="Nova 2i" alt="Nova 2i" src="{{ asset('assets/img/banner/'.$element->banner) }}">
                                                    </a>
                                                  @endforeach
                      
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Fashion & Beauty product start --}}
                                <div class="syn-category row red mone">
                                    <div class="syn-category-products">
                                        <div id="" class="emfilter-ajaxblock-loaded">
                                            <div class="syn-homepage-category">

                                                <div class="syn-category-tab">
                                                    <div class="syn-category-header">
                                                        <img class="img-responsive syn-homepage-catimage" src="{{asset('assets/img/mob-tablet.png')}}" alt="">
                                                        <h3>Fashion & Beauty</h3>
                                                        <span class="syn-button-viewall">
                                                            <a href="http://dpunch.com/product/fashion-beauty">View all</a>
                                                        </span>
                                                    </div>
                                                    <div class="syn-subcategory">
                                                        <ul>
                                                          @foreach ($fashion_beautys as $element)
                                                            <a href="{{ route('subcategoryproduct',['category'=>$element->category->slug,'subcategory'=>$element->slug]) }}"><li class="syn-subcategory-list">{{ $element->name }}</li></a>
                                                          @endforeach
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="syn-category-product-grid">
                                                    @foreach ($fashionbeautys as $element)
                                                      <div class="syn-product col-lg-8 col-sm-8">
                                                          <a href="{{ route('singleproduct',['sku'=>$element->sku,'slug'=>$element->slug]) }}" title="" class="product-image ">
                                                              <img class="img-responsive em-alt-org" src="{{ asset('images/thumbnail/'.$element->image0) }}" alt="" align="middle" width="150" height="150">
                                                          </a>
                                                          <div class="syn-extra-info">
                                                            @if($element->reviews->count() <= 0)
                                                              <div class="syn-product-rating">
                                                                <div class="averag-no-rating-home" style="width:%">
                                                                  @for ($i = 0; $i
                                                                  < 5; $i++) <i class="fa fa-star" aria-hidden="true"></i>
                                                                    @endfor
                                                                </div>
                                                                  <div class="ratings">
                                                                      <span class="amount">
                                                                          <a href="#">({{ $element->reviews->count() }})</a>
                                                                      </span>
                                                                  </div>
                                                              </div>
                                                            @else
                                                              <div class="syn-product-rating">
                                                                <div class="averag-rating-home" style="width:%">
                                                                  @for ($i = 0; $i
                                                                  < $element->reviews->avg('rating'); $i++) <i class="fa fa-star" aria-hidden="true"></i>
                                                                    @endfor
                                                                </div>
                                                                  <div class="ratings">
                                                                      <span class="amount">
                                                                          <a href="#">({{ $element->reviews->count() }})</a>
                                                                      </span>
                                                                  </div>
                                                              </div>
                                                            @endif
                                                              <div class="syn-product-name">
                                                                  <span>
                                                                      <a href="" title="">{{ str_limit($element->title, 20, '...')}}</a>
                                                                  </span>
                                                              </div>
                                                              <div class="syn-product-price">৳{{ number_format((float)$element->price, 2, '.', '') }}
                                                                <span class="syn-price-product-grid">@if ($element->discount !=0)
                                                                  ৳{{ $element->main_price }}
                                                                @endif </span>

                                                              </div>
                                                          </div>
                                                      </div>
                                                    @endforeach
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                {{-- Fashion & Beauty product end --}}

                                <div class="em-wrapper-area04">
                                    <div class="row hidden-xs">
                                        <div class="em-wrapper-category-banners">
                                            <div class="col-sm-24  text-center">
                                                <div class="img-category-banner">
                                                  @foreach ($banner as $element)
                                                    <a class="banner-img" href="{{ $element->bannerlink }}">
                                                        <img class="img-responsive" title="Nova 2i" alt="Nova 2i" src="{{ asset('assets/img/banner/'.$element->banner) }}">
                                                    </a>
                                                  @endforeach
                      
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Computers product start --}}
                                <div class="syn-category row red mone">
                                    <div class="syn-category-products">
                                        <div id="" class="emfilter-ajaxblock-loaded">
                                            <div class="syn-homepage-category">
                                                <div class="syn-category-tab">
                                                    <div class="syn-category-header">
                                                        <img class="img-responsive syn-homepage-catimage" src="{{asset('assets/img/tv-electronics-img.png')}}" alt="">
                                                        <h3>Computers</h3>
                                                        <span class="syn-button-viewall">
                                                            <a href="http://dpunch.com/product/computers">View all</a>
                                                        </span>
                                                    </div>
                                                    <div class="syn-subcategory">
                                                        <ul>
                                                          @foreach ($computer_menus as $element)
                                                            <a href="{{ route('subcategoryproduct',['category'=>$element->category->slug,'subcategory'=>$element->slug]) }}"><li class="syn-subcategory-list">{{ $element->name }}</li></a>
                                                          @endforeach

                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="syn-category-product-grid">
                                                  @foreach ($computers as $element)
                                                    <div class="syn-product col-lg-8 col-sm-8">
                                                        <a href="{{ route('singleproduct',['sku'=>$element->sku,'slug'=>$element->slug]) }}" title="" class="product-image ">
                                                            <img class="img-responsive em-alt-org" src="{{ asset('images/thumbnail/'.$element->image0) }}" alt="" align="middle" width="150" height="150">
                                                        </a>
                                                        <div class="syn-extra-info">
                                                          @if($element->reviews->count() <= 0)
                                                            <div class="syn-product-rating">
                                                              <div class="averag-no-rating-home" style="width:%">
                                                                @for ($i = 0; $i
                                                                < 5; $i++) <i class="fa fa-star" aria-hidden="true"></i>
                                                                  @endfor
                                                              </div>
                                                                <div class="ratings">
                                                                    <span class="amount">
                                                                        <a href="#">({{ $element->reviews->count() }})</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                          @else
                                                            <div class="syn-product-rating">
                                                              <div class="averag-rating-home" style="width:%">
                                                                @for ($i = 0; $i
                                                                < $element->reviews->avg('rating'); $i++) <i class="fa fa-star" aria-hidden="true"></i>
                                                                  @endfor
                                                              </div>
                                                                <div class="ratings">
                                                                    <span class="amount">
                                                                        <a href="#">({{ $element->reviews->count() }})</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                          @endif
                                                            <div class="syn-product-name">
                                                                <span>
                                                                    <a href="" title="">{{ str_limit($element->title, 20, '...')}}</a>
                                                                </span>
                                                            </div>
                                                            <div class="syn-product-price">৳{{ number_format((float)$element->price, 2, '.', '') }}
                                                              <span class="syn-price-product-grid">@if ($element->discount !=0)
                                                                ৳{{ $element->main_price }}
                                                              @endif </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Computers product end --}}

                                <div class="em-wrapper-area04">
                                    <div class="row hidden-xs">
                                        <div class="em-wrapper-category-banners">
                                            <div class="col-sm-24  text-center">
                                                <div class="img-category-banner">
                                                  @foreach ($banner as $element)
                                                    <a class="banner-img" href="{{ $element->bannerlink }}">
                                                        <img class="img-responsive" title="Nova 2i" alt="Nova 2i" src="{{ asset('assets/img/banner/'.$element->banner) }}">
                                                    </a>
                                                  @endforeach
                      
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Electronics & Appliances start --}}
                                <div class="syn-category row red mone">
                                    <div class="syn-category-products">
                                        <div id="" class="emfilter-ajaxblock-loaded">
                                            <div class="syn-homepage-category">

                                                <div class="syn-category-tab">
                                                    <div class="syn-category-header">
                                                        <img class="img-responsive syn-homepage-catimage" src="{{asset('assets/img/tv-electronics-img.png')}}" alt="">
                                                        <h3>Electronics & Appliances</h3>
                                                        <span class="syn-button-viewall">
                                                            <a href="http://dpunch.com/product/electronics-appliances">View all</a>
                                                        </span>
                                                    </div>
                                                    <div class="syn-subcategory">
                                                        <ul>
                                                          @foreach ($electronics as $element)
                                                            <a href="{{ route('subcategoryproduct',['category'=>$element->category->slug,'subcategory'=>$element->slug]) }}"><li class="syn-subcategory-list">{{ $element->name }}</li></a>
                                                          @endforeach

                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="syn-category-product-grid">
                                                  @foreach ($electronic_appliances as $element)
                                                    <div class="syn-product col-lg-8 col-sm-8">
                                                        <a href="{{ route('singleproduct',['sku'=>$element->sku,'slug'=>$element->slug]) }}" title="" class="product-image ">
                                                            <img class="img-responsive em-alt-org" src="{{ asset('images/thumbnail/'.$element->image0) }}" alt="" align="middle" width="150" height="150">
                                                        </a>
                                                        <div class="syn-extra-info">
                                                          @if($element->reviews->count() <= 0)
                                                            <div class="syn-product-rating">
                                                              <div class="averag-no-rating-home" style="width:%">
                                                                @for ($i = 0; $i
                                                                < 5; $i++) <i class="fa fa-star" aria-hidden="true"></i>
                                                                  @endfor
                                                              </div>
                                                                <div class="ratings">
                                                                    <span class="amount">
                                                                        <a href="#">({{ $element->reviews->count() }})</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                          @else
                                                            <div class="syn-product-rating">
                                                              <div class="averag-rating-home" style="width:%">
                                                                @for ($i = 0; $i
                                                                < $element->reviews->avg('rating'); $i++) <i class="fa fa-star" aria-hidden="true"></i>
                                                                  @endfor
                                                              </div>
                                                                <div class="ratings">
                                                                    <span class="amount">
                                                                        <a href="#">({{ $element->reviews->count() }})</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                          @endif
                                                            <div class="syn-product-name">
                                                                <span>
                                                                    <a href="" title="">{{ str_limit($element->title, 20, '...')}}</a>
                                                                </span>
                                                            </div>
                                                            <div class="syn-product-price">৳{{ number_format((float)$element->price, 2, '.', '') }}
                                                              <span class="syn-price-product-grid">@if ($element->discount !=0)
                                                                ৳{{ $element->main_price }}
                                                              @endif </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Electronics & Appliances start --}}

                                <div class="em-wrapper-area04">
                                    <div class="row hidden-xs">
                                        <div class="em-wrapper-category-banners">
                                            <div class="col-sm-24  text-center">
                                                <div class="img-category-banner">
                                                  @foreach ($banner as $element)
                                                    <a class="banner-img" href="{{ $element->bannerlink }}">
                                                        <img class="img-responsive" title="Nova 2i" alt="Nova 2i" src="{{ asset('assets/img/banner/'.$element->banner) }}">
                                                    </a>
                                                  @endforeach
                      
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Entertainment product Start --}}
                                <div class="syn-category row red mone">
                                    <div class="syn-category-products">
                                        <div id="" class="emfilter-ajaxblock-loaded">
                                            <div class="syn-homepage-category">

                                                <div class="syn-category-tab">
                                                    <div class="syn-category-header">
                                                        <img class="img-responsive syn-homepage-catimage" src="{{asset('assets/img/home-appliances-img.png')}}" alt="">
                                                        <h3>Entertainment</h3>
                                                        <span class="syn-button-viewall">
                                                            <a href="http://dpunch.com/product/entertainment">View all</a>
                                                        </span>
                                                    </div>
                                                    <div class="syn-subcategory">
                                                        <ul>
                                                          @foreach ($entertainment_menus as $element)
                                                            <a href="{{ route('subcategoryproduct',['category'=>$element->category->slug,'subcategory'=>$element->slug]) }}"><li class="syn-subcategory-list">{{ $element->name }}</li></a>
                                                          @endforeach

                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="syn-category-product-grid">
                                                  @foreach ($entertainments as $element)
                                                    <div class="syn-product col-lg-8 col-sm-8">
                                                        <a href="{{ route('singleproduct',['sku'=>$element->sku,'slug'=>$element->slug]) }}" title="" class="product-image ">
                                                            <img class="img-responsive em-alt-org" src="{{ asset('images/thumbnail/'.$element->image0) }}" alt="" align="middle" width="150" height="150">
                                                        </a>
                                                        <div class="syn-extra-info">
                                                          @if($element->reviews->count() <= 0)
                                                            <div class="syn-product-rating">
                                                              <div class="averag-no-rating-home" style="width:%">
                                                                @for ($i = 0; $i
                                                                < 5; $i++) <i class="fa fa-star" aria-hidden="true"></i>
                                                                  @endfor
                                                              </div>
                                                                <div class="ratings">
                                                                    <span class="amount">
                                                                        <a href="#">({{ $element->reviews->count() }})</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                          @else
                                                            <div class="syn-product-rating">
                                                              <div class="averag-rating-home" style="width:%">
                                                                @for ($i = 0; $i
                                                                < $element->reviews->avg('rating'); $i++) <i class="fa fa-star" aria-hidden="true"></i>
                                                                  @endfor
                                                              </div>
                                                                <div class="ratings">
                                                                    <span class="amount">
                                                                        <a href="#">({{ $element->reviews->count() }})</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                          @endif
                                                            <div class="syn-product-name">
                                                                <span>
                                                                    <a href="" title="">{{ str_limit($element->title, 20, '...')}}</a>
                                                                </span>
                                                            </div>
                                                            <div class="syn-product-price">৳{{ number_format((float)$element->price, 2, '.', '') }}
                                                              <span class="syn-price-product-grid">@if ($element->discount !=0)
                                                                ৳{{ $element->main_price }}
                                                              @endif </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Entertainment product <Start>nd</Start> --}}

                                <div class="em-wrapper-area04">
                                    <div class="row hidden-xs">
                                        <div class="em-wrapper-category-banners">
                                            <div class="col-sm-24  text-center">
                                                <div class="img-category-banner">
                                                  @foreach ($banner as $element)
                                                    <a class="banner-img" href="{{ $element->bannerlink }}">
                                                        <img class="img-responsive" title="Nova 2i" alt="Nova 2i" src="{{ asset('assets/img/banner/'.$element->banner) }}">
                                                    </a>
                                                  @endforeach
                      
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Cars And Bikes start --}}
                                <div class="syn-category row red mone">
                                    <div class="syn-category-products">
                                        <div id="" class="emfilter-ajaxblock-loaded">
                                            <div class="syn-homepage-category">

                                                <div class="syn-category-tab">
                                                    <div class="syn-category-header">
                                                        <img class="img-responsive syn-homepage-catimage" src="{{asset('assets/img/mob-tablet.png')}}" alt="">
                                                        <h3>Cars & Bikes</h3>
                                                        <span class="syn-button-viewall">
                                                            <a href="http://dpunch.com/product/cars-bikes">View all</a>
                                                        </span>
                                                    </div>
                                                    <div class="syn-subcategory">
                                                        <ul>
                                                          @foreach ($car_bikes as $element)
                                                              <a href="{{ route('subcategoryproduct',['category'=>$element->category->slug,'subcategory'=>$element->slug]) }}"><li class="syn-subcategory-list">{{ $element->name }}</li></a>
                                                          @endforeach


                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="syn-category-product-grid">
                                                  @foreach ($carbikes as $element)
                                                    <div class="syn-product col-lg-8 col-sm-8">
                                                        <a href="{{ route('singleproduct',['sku'=>$element->sku,'slug'=>$element->slug]) }}" title="" class="product-image ">
                                                            <img class="img-responsive em-alt-org" src="{{ asset('images/thumbnail/'.$element->image0) }}" alt="" align="middle" width="150" height="150">
                                                        </a>
                                                        <div class="syn-extra-info">
                                                          @if($element->reviews->count() <= 0)
                                                            <div class="syn-product-rating">
                                                              <div class="averag-no-rating-home" style="width:%">
                                                                @for ($i = 0; $i
                                                                < 5; $i++) <i class="fa fa-star" aria-hidden="true"></i>
                                                                  @endfor
                                                              </div>
                                                                <div class="ratings">
                                                                    <span class="amount">
                                                                        <a href="#">({{ $element->reviews->count() }})</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                          @else
                                                            <div class="syn-product-rating">
                                                              <div class="averag-rating-home" style="width:%">
                                                                @for ($i = 0; $i
                                                                < $element->reviews->avg('rating'); $i++) <i class="fa fa-star" aria-hidden="true"></i>
                                                                  @endfor
                                                              </div>
                                                                <div class="ratings">
                                                                    <span class="amount">
                                                                        <a href="#">({{ $element->reviews->count() }})</a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                          @endif
                                                            <div class="syn-product-name">
                                                                <span>
                                                                    <a href="" title="">{{ str_limit($element->title, 20, '...')}}</a>
                                                                </span>
                                                            </div>
                                                            <div class="syn-product-price">৳{{ number_format((float)$element->price, 2, '.', '') }}
                                                              <span class="syn-price-product-grid">@if ($element->discount !=0)
                                                                ৳{{ $element->main_price }}
                                                              @endif </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Cars and Bikes end --}}

                                <div class="em-wrapper-area05">
                                    <div class="em-wrapper-banners hidden-xs">
                                        <div class="row"><div class="col-sm-24">
                                                <div class="img-banner-small">
                                                    <div class="effect-hover-text2">
                                                        <a class="banner-img" title="Enjoy Interest Free Installment" href="">
                                                            <img class="img-responsive" title="" alt="" src="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="em-wrapper-area06">

                                </div>

                            </div>

                        </div>

                    </div>
    @endsection
