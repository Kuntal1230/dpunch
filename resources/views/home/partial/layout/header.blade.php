<!DOCTYPE html>
<html id="top" class="js" lang="{{ app()->getLocale() }}">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Online Shopping </title>
  <meta name="keywords" content="">
  <meta name="robots" content="INDEX,FOLLOW">

  <link rel="icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">
  <link rel="shortcut icon" href="" type="image/x-icon">
  <meta http-equiv="" content="IE=edge">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/menu.css') }}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/menu_002.css') }}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/widgets.css') }}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }} " media="all">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css"> {{--
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.css') }} " media="all"> --}}
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }} " media="all">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }} " media="all">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/em_responsive.css') }} " media="all">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles17.css') }} " media="all">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnify.css') }} " media="all">
  @yield('style-sheet')
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive-tabs.css') }} " media="all">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/button_002.css') }} " media="all">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/button.css') }} " media="all">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }} " media="all">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/print.css') }} " media="print">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/smart_wizard_theme_arrows.css') }} " media="all">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}" media="all">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/in_style.css') }}" media="all">
  <script type="text/javascript" src="{{ asset('assets/js/jquery-1.js') }} "></script>
  <script type="text/javascript" src="{{ asset('assets/js/em_fix_check_browser.js') }} "></script>

  <script type="text/javascript" src="{{ asset('assets/js/cookies.js') }} "></script>
  <script type="text/javascript" src="{{ asset('assets/js/jquery_004.js') }} "></script>
  <script type="text/javascript" src="{{ asset('assets/js/jquery_005.js') }} "></script>
  <script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }} "></script>
  <script type="text/javascript" src="{{ asset('assets/js/jquery-noconflict.js') }} "></script>
  <script type="text/javascript" src="{{ asset('assets/js/jquery_007.js') }} "></script>
  <script type="text/javascript" src="{{ asset('assets/js/iwd-jquery-2.js') }} "></script>
  <script type="text/javascript" src="{{ asset('assets/js/modal.js') }} "></script>
  <script type="text/javascript" src="{{ asset('assets/js/jquery_002.js') }} "></script>
  <script type="text/javascript" src="{{ asset('assets/js/swiper.js') }} "></script>
  <script type="text/javascript" src="{{ asset('assets/js/swiper_002.js') }} "></script>
  <script type="text/javascript" src="{{ asset('assets/js/progressbar.js') }} "></script>
  <script type="text/javascript" src="{{ asset('assets/js/menu.js') }} "></script>
  <script type="text/javascript" src="{{ asset('assets/js/selectUl.js') }} "></script>
  <script type="text/javascript" src="{{ asset('assets/js/owl.js') }} "></script>
  <script type="text/javascript" src="{{ asset('assets/js/em0131.js') }} "></script>
  <script type="text/javascript" src="{{ asset('assets/js/jquery_003.js') }} "></script>
  <script type="text/javascript" src="{{ asset('assets/js/jquery_006.js') }} "></script>
  <script type="text/javascript" src="{{ asset('assets/js/countdown.js') }} "></script>
  <script type="text/javascript" src="{{ asset('assets/js/em_multidealpro.js') }} "></script>
   <script type="text/javascript" src="{{ asset('assets/js/jssor.slider-27.1.0.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>

  <script type="text/javascript">
    var isMobile = '';
    var isPhone = '';
    var isWindowPhone = '';
    var language = '';
    var urlsite = '';
    var layout = '1column';
    var product_zoom = null;
    if (typeof EM == 'undefined')
      EM = {};
    EM.SETTING = {
      USE_TAB: '1',
      DISABLE_VARIATION: '0',
      DISABLE_RESPONSIVE: '1',
      AJAXCART_AUTOCLOSE: '0',
      DISABLE_AJAX_ADDTO: '1',
      DISABLE_COLLAPSE: '1',
      STICKY_MENU_SEARCH_CART: '1',
      RIGHT_TO_LEFT: '0',
      COLOR_SWATCHES: '1',
    };
  </script>

  <link href="{{ asset('assets/css/css.css') }}" rel="stylesheet" type="text/css">

  <link href="{{ asset('assets/css/css_002.css') }}" rel="stylesheet" type="text/css">
  <!-- Add Css File -->
  <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/css/style_marketdeal.css') }}">
  <!-- Add Custom Css -->
 {{-- cms-index-index cms-home catalog-category-view --}}
 <script type="text/javascript">function add_chatinline(){var hccid=60284001;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
add_chatinline(); </script>
</head>

<body class="@yield('body_class')">
  <div class="wrapper">
    <noscript>
              <div class="global-site-notice noscript">
                <div class="notice-inner">
                    <p> <strong>JavaScript seems to be disabled in your browser.</strong><br /> You must have JavaScript enabled in your browser to utilize the functionality of this website.</p>
                </div>
              </div>
            </noscript>
    <div class="page one-column">
      <div class="em-wrapper-header">
        <style type="text/css">
          @media(min-width: 768px) {
            #em-mheader.visible-xs {
              display: none;
            }
          }

          @media(max-width: 767px) {
            .display-tablet {
              display: none;
            }
          }

          .myaccount-link .account-link .em-account .block-content {
            width: 300px;
          }
        </style>

        <div id="em-mheader" class="visible-xs container">
          <div id="em-mheader-top" class="row">
            <div id="em-mheader-logo" class="col-xs-4">
              <div class="em-logo"><a href="{{ url('/') }}" title="" class="logo"><strong>dpunch.com</strong><img src="{{ asset("assets/img/dpunch-mobile.png") }}" alt=""></a></div>
            </div>
            <div class="col-xs-11">
              <div class="em-top-search">
                <div id="top-search-mobile" class="em-header-search-mobile">
                  <div id="move-search">
                    <div class="em-wrapper-js-search">
                      <div class="em-wrapper-search em-no-category-search">
                        <a class="hidden-xs em-search-icon" title="Search" href="javascript:void(0);"><span>Search</span></a>
                        <div class="em-container-js-search" style="display: none;">
                          <form id="search_mini_form" action="{{ route('search.product') }}" method="get">
                            <div class="form-search no_cate_search">
                              <div class="text-search">
                                <label for="search">Search:</label>
                                <input id="search" name="q" value="" class="input-text required-entry snize-input-style" maxlength="128" autocomplete="off" type="search">
                                <button type="submit" title="Search" class="button"><span><span style="text-transform:none;">Search</span></span></button>
                                <div id="search_autocomplete" class="search-autocomplete" style="display: none;"></div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <script type="text/javascript">
                      (function($) {
                        function getWindowWidth() {
                          var w = window;
                          var d = document;
                          var e = d.documentElement;
                          var g = d.getElementsByTagName('body')[0];
                          var x = w.innerWidth || e.clientWidth || g.clientWidth;
                          return x;
                        };

                        var timeoutSearch = null;

                        function hideSearch(e) {
                          var $_container = e.children().find('.em-container-js-search');
                          if (timeoutSearch)
                            clearTimeout(timeoutSearch);
                          timeoutSearch = setTimeout(function() {
                            timeoutSearch = null;
                            $_container.hide(300, function() {
                              $(this).css('overflow', 'inherit');
                            });
                          }, 200);
                        }

                        function showSearch(e) {
                          var $_container = e.children().find('.em-container-js-search');
                          if (timeoutSearch)
                            clearTimeout(timeoutSearch);
                          timeoutSearch = setTimeout(function() {
                            timeoutSearch = null;
                            $_container.show(300, function() {
                              $(this).css('overflow', 'inherit');
                            });
                          }, 200);
                        }

                        $(window).resize(function() {
                          var wi = getWindowWidth();
                          var $_emSearch = $(".em-search-style01");
                          if (wi <= 767) {
                            $_emSearch.unbind();
                          } else {
                            $_emSearch.bind('mouseover', function(e) {
                              e.preventDefault();
                              var $_this = $(this);
                              showSearch($_this);
                            }).bind('mouseout', function(e) {
                              e.preventDefault();
                              var $_this = $(this);
                              hideSearch($_this);
                            });
                          }
                        });

                        $(document).ready(function() {
                          var wi = getWindowWidth();
                          var $_emSearch = $(".em-search-style01");
                          if (wi <= 767) {
                            $_emSearch.unbind();
                          } else {
                            $_emSearch.bind('mouseover', function(e) {
                              e.preventDefault();
                              var $_this = $(this);
                              showSearch($_this);
                            }).bind('mouseout', function(e) {
                              e.preventDefault();
                              var $_this = $(this);
                              hideSearch($_this);
                            });
                          }
                        });

                      })(jQuery);
                    </script>
                    <style type="text/css">
                      .em-header-search-mobile .em-container-js-search {
                        display: block !important
                      }
                    </style>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xs-9 top_icon">

              <ul class="top-header-link links">
                <li class="first col-sm-8 em-clear-padding">
                  <a title="Log In" class="login-link fa fa-user" onclick="openPopupLogin();"></a>
                </li>
                <li class="col-sm-8 em-clear-padding">
                  @if (LaraCart::count() > 0)
                    <a href="{{ route('cart.index') }}" class="checkout-link fa fa-shopping-cart"></a>
                  @else
                    <a href="javascript:void(0);" class="checkout-link fa fa-shopping-cart"></a>
                  @endif

                </li>
                <li class="last col-sm-8 em-clear-padding">
                  <div id="em-mheader-wrapper-menu" class="">
                  <span class="visible-xs fa fa-bars syn-inline" id="em-mheader-menu-icon"></span>
                    <div id="em-mheader-menu-content" style="display: none;" class="">
                      <div class="em-wrapper-top">
                        <div class="em-top-links row">
                          <div class="">
                            <ul class="top-header-link links">
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="row mobile-main-menu toggle-menu">
                        <div class="col-sm-24">
                          <div class="em-top-menu">
                            <div class="em-menu-mobile">
                              <div class="megamenu-wrapper wrapper-7_8738 em-menu-mobile">
                                <div class="em_nav" id="toogle_menu_7_8738">
                                  <ul class="hnav em_menu_mobile">
                                    <li class="menu-item-link menu-item-depth-0 fa fa-tablet menu-item-parent cur-toggle">
                                      <a href="javascript:void(0)" class="arrow"><span>&gt;</span></a>
                                      <a class="em-menu-link" href="{{ route('categoryproduct',['category'=>'mobiles-tablets']) }}">
                                        <span>Mobile &amp; Tablet</span>
                                      </a>
                                      <ul class="menu-container" style="display: block;">
                                        <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col18 grid_18 bkg-menu01 menu-item-parent" style="">
                                          <ul class="menu-container">
                                              <li class="menu-item-vbox menu-item-depth-2 col-sm-5 menu-item-parent" style="">
                                                <ul class="menu-container">
                                                  <li class="menu-item-text menu-item-depth-3  ">
                                                    <h5><a href="{{ route('subcategoryproduct',['category'=>'mobiles-tablets','subcategory'=>'mobile-phones']) }}"><span style="color: #000000;">Mobile Phones</span></a></h5>
                                                    <ul class="list-text">
                                                      @foreach ($mobilephonemenus as $element)
                                                        <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                      @endforeach
                                                    </ul>
                                                  </li><!-- 3 -->
                                                </ul><!-- 3 -->
                                              </li><!-- 2 -->
                                              <li class="menu-item-vbox menu-item-depth-2 col-sm-5 menu-item-parent" style="">
                                                <ul class="menu-container">
                                                  <li class="menu-item-text menu-item-depth-3  ">&nbsp;
                                                    <h5><a href="{{ route('subcategoryproduct',['category'=>'mobiles-tablets','subcategory'=>'tablets']) }}"><span style="color: #000000;">Tablets</span></a></h5>
                                                    <ul class="list-text">
                                                      @foreach ($tabletmenus as $element)
                                                        <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                      @endforeach
                                                    </ul>
                                                  </li><!-- 3 -->
                                                </ul><!-- 3 -->
                                              </li><!-- 2 -->
                                              <li class="menu-item-vbox menu-item-depth-2 col-sm-5 menu-item-parent" style="">
                                              <ul class="menu-container">
                                                <li class="menu-item-text menu-item-depth-3  ">&nbsp;
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'mobiles-tablets','subcategory'=>'feature-phones']) }}"><span style="color: #000000;">Feature Phones</span></a></h5>
                                                  <ul class="list-text">
                                                    @foreach ($featurephonemenus as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name  }}</a></li>
                                                    @endforeach
                                                  </ul>
                                                </li><!-- 3 -->
                                              </ul><!-- 3 -->
                                              </li><!-- 2 -->
                                            <li class="menu-item-vbox menu-item-depth-2 col-sm-5 menu-item-parent" style="">
                                              <ul class="menu-container">
                                                <li class="menu-item-text menu-item-depth-3  ">&nbsp;
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'mobiles-tablets','subcategory'=>'mobile-tablet-accessories']) }}"><span style="color: #000000;">Mobile &amp; Tablet Accessories</span></a></h5>
                                                  <ul class="list-text">
                                                    @foreach ($mobiletabletaccessoriesmenus as $element)
                                                      <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    @endforeach
                                                  </ul>
                                                </li><!-- 3 -->
                                              </ul><!-- 3 -->
                                            </li><!-- 2 -->
                                          </ul><!-- 2 -->
                                        </li><!-- 1 -->
                                      </ul><!-- 1 -->
                                    </li><!-- 0 -->
                                    <li class="menu-item-link menu-item-depth-0 fa fa-laptop menu-item-parent"><a href="javascript:void(0)" class="arrow"><span>&gt;</span></a>
                                      <a class="em-menu-link" href="{{ route('categoryproduct',['category'=>'computers']) }}">
                                        <span>Computers</span>
                                      </a>
                                      <ul class="menu-container" style="">
                                        <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col12  fix-top menu-item-parent" style="">
                                          <ul class="menu-container">
                                            <li class="menu-item-vbox menu-item-depth-2 col-sm-8 menu-item-parent" style="">
                                              <ul class="menu-container">
                                                <li class="menu-item-text menu-item-depth-3  ">
                                                  <ul class="list-text">
                                                    <li><h5><a href="{{ route('subcategoryproduct',['category'=>'computers','subcategory'=>'desktop-computers']) }}"><span style="color: #000000;">Desktop Computers</span></a></h5></li>
                                                    <li><h5><a href="{{ route('subcategoryproduct',['category'=>'computers','subcategory'=>'laptops-notebooks']) }}"><span style="color: #000000;">Laptops &amp; Notebooks</span></a></h5></li>
                                                    <li><h5><a href="{{ route('subcategoryproduct',['category'=>'computers','subcategory'=>'apple-mac']) }}"><span style="color: #000000;">Apple Mac</span></a></h5></li>
                                                    <li><h5><a href="{{ route('subcategoryproduct',['category'=>'computers','subcategory'=>'apple-accessories']) }}"><span style="color: #000000;">Apple Accessories</span></a></h5></li>
                                                  </ul>
                                                </li><!-- 3 -->
                                              </ul><!-- 3 -->
                                            </li><!-- 2 -->
                                            <li class="menu-item-vbox menu-item-depth-2 col-sm-8 menu-item-parent" style="">
                                              <ul class="menu-container">
                                                <li class="menu-item-text menu-item-depth-3  ">&nbsp;
                                                <h5><a href="{{ route('subcategoryproduct',['category'=>'computers','subcategory'=>'computer-accessories']) }}"><span style="color: #000000;">Computer Accessories</span></a></h5>
                                                  <ul class="list-text">
                                                    @foreach ($computeraccessoriesmenu as $element)
                                                      <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    @endforeach
                                                  </ul>
                                                </li><!-- 3 -->
                                              </ul><!-- 3 -->
                                            </li><!-- 2 -->
                                          </ul><!-- 2 -->
                                        </li><!-- 1 -->
                                      </ul><!-- 1 -->
                                    </li><!-- 0 -->
                                    <li class="menu-item-link menu-item-depth-0 fa fa-building-o menu-item-parent">
                                      <a href="javascript:void(0)" class="arrow"><span>&gt;</span></a>
                                      <a class="em-menu-link" href="{{ route('categoryproduct',['category'=>'electronics-appliances']) }}">
                                        <span>Electronics &amp; Appliances</span>
                                      </a>
                                      <ul class="menu-container" style="">
                                        <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col10  fix-top menu-item-parent" style="">
                                          <ul class="menu-container">
                                            <li class="menu-item-vbox menu-item-depth-2 col-sm-12 alpha menu-item-parent" style="">
                                              <ul class="menu-container">
                                                <li class="menu-item-text menu-item-depth-3  ">
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'electronics-appliances','subcategory'=>'televisions']) }}">
                                                    <span style="color: #000000;">Televisions</span></a></h5>
                                                  <ul class="list-text">
                                                    @foreach ($televisionmenus as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    @endforeach
                                                  </ul>&nbsp;
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'electronics-appliances','subcategory'=>'security-systems']) }}">
                                                    <span style="color: #000000;">Security Systems</span></a></h5>
                                                  <ul class="list-text">
                                                    @foreach ($securitysystemmenus as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    @endforeach
                                                  </ul>
                                                </li><!-- 3 -->
                                              </ul><!-- 3 -->
                                            </li><!-- 2 -->
                                            <li class="menu-item-vbox menu-item-depth-2 col-sm-12 alpha menu-item-parent" style="">
                                              <ul class="menu-container">
                                                <li class="menu-item-text menu-item-depth-3  ">
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'electronics-appliances','subcategory'=>'home-appliances']) }}">
                                                    <span style="color: #000000;">Home Appliances</span></a>
                                                  </h5>
                                                  <ul class="list-text">
                                                    @foreach ($homeappliancemenus as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    @endforeach
                                                  </ul>
                                                </li><!-- 3 -->
                                              </ul><!-- 3 -->
                                            </li><!-- 2 -->
                                            <li class="menu-item-vbox menu-item-depth-2 col-sm-12 alpha menu-item-parent" style="">
                                              <ul class="menu-container">
                                                <li class="menu-item-text menu-item-depth-3  ">&nbsp;
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'electronics-appliances','subcategory'=>'kitchen-appliances']) }}">
                                                    <span style="color: #000000;">Kitchen Appliances</span></a>
                                                  </h5>
                                                  <ul class="list-text">
                                                    @foreach ($kitchenappliancemenus as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    @endforeach
                                                  </ul>
                                                </li><!-- 3 -->
                                              </ul><!-- 3 -->
                                            </li><!-- 2 -->
                                            <li class="menu-item-vbox menu-item-depth-2 col-sm-12 alpha menu-item-parent" style="">
                                              <ul class="menu-container">
                                                <li class="menu-item-text menu-item-depth-3  ">&nbsp;
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'electronics-appliances','subcategory'=>'cleaning-supplies-tools']) }}">
                                                    <span style="color: #000000;">Cleaning Supplies &amp; Tools</span></a>
                                                  </h5>
                                                  <ul class="list-text">
                                                    @foreach ($cleaningsuppliestoolmenus as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    @endforeach
                                                  </ul>
                                                </li><!-- 3 -->
                                              </ul><!-- 3 -->
                                            </li><!-- 2 -->
                                          </ul><!-- 2 -->
                                        </li><!-- 1 -->
                                      </ul><!-- 1 -->
                                    </li><!-- 0 -->
                                    <li class="menu-item-link menu-item-depth-0 fa fa-video-camera menu-item-parent"><a href="javascript:void(0)" class="arrow"><span>&gt;</span></a>
                                      <a class="em-menu-link" href="{{ route('categoryproduct',['category'=>'entertainment']) }}">
                                        <span>Entertainment</span>
                                      </a>
                                      <ul class="menu-container">
                                        <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col14 grid_18 bkg-menu01 menu-item-parent" style="">
                                          <ul class="menu-container">
                                            <li class="menu-item-vbox menu-item-depth-2 col-sm-6 menu-item-parent" style="">
                                              <ul class="menu-container">
                                                <li class="menu-item-text menu-item-depth-3  ">
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'entertainment','subcategory'=>'cameras']) }}"><span style="color: #000000;">Cameras</span></a></h5>
                                                  <ul class="list-text">
                                                    @foreach ($cameramenus as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{$element->name}}</a></li>
                                                    @endforeach
                                                  </ul>
                                                </li><!-- 3 -->
                                              </ul><!-- 3 -->
                                            </li><!-- 2 -->
                                            <li class="menu-item-vbox menu-item-depth-2 col-sm-6 menu-item-parent" style="">
                                              <ul class="menu-container">
                                                <li class="menu-item-text menu-item-depth-3  ">&nbsp;
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'entertainment','subcategory'=>'audio-players-systems']) }}"><span style="color: #000000;">Audio Players &amp; Systems</span></a></h5>
                                                  <ul class="list-text">
                                                    @foreach ($audioplayerssystemmenus as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    @endforeach
                                                  </ul>
                                                </li><!-- 3 -->
                                              </ul><!-- 3 -->
                                            </li><!-- 2 -->
                                            <li class="menu-item-vbox menu-item-depth-2 col-sm-6 menu-item-parent" style="">
                                              <ul class="menu-container">
                                                <li class="menu-item-text menu-item-depth-3  ">&nbsp;
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'entertainment','subcategory'=>'gaming-console']) }}"><span style="color: #000000;">Gaming &amp; Console</span></a></h5>
                                                  <ul class="list-text">
                                                    @foreach ($gamingconsolmenus as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    @endforeach
                                                  </ul>
                                                </li><!-- 3 -->
                                              </ul><!-- 3 -->
                                            </li><!-- 2 -->
                                            <li class="menu-item-vbox menu-item-depth-2 col-sm-6 menu-item-parent" style="">
                                              <ul class="menu-container">
                                                <li class="menu-item-text menu-item-depth-3  ">&nbsp;
                                                  <ul class="list-text">
                                                    <li><h5><a href="{{ route('subcategoryproduct',['category'=>'entertainment','subcategory'=>'toys-games']) }}"><span style="color: #000000;">Toys &amp; Games</span></a></h5></li>
                                                    <li><h5><a href="{{ route('subcategoryproduct',['category'=>'entertainment','subcategory'=>'fitness']) }}"><span style="color: #000000;">Fitness</span></a></h5></li>
                                                    <li><h5><a href="{{ route('subcategoryproduct',['category'=>'entertainment','subcategory'=>'grooming-products']) }}"><span style="color: #000000;">Grooming Products</span></a></h5></li>
                                                    <li><h5><a href="{{ route('subcategoryproduct',['category'=>'entertainment','subcategory'=>'vehicles']) }}"><span style="color: #000000;">Vehicles</span></a></h5></li>
                                                    <li><h5><a href="{{ route('subcategoryproduct',['category'=>'entertainment','subcategory'=>'health-care-devices']) }}"><span style="color: #000000;">Health Care Devices</span></a></h5></li>
                                                    <li><h5><a href="{{ route('subcategoryproduct',['category'=>'entertainment','subcategory'=>'fidget-spinner']) }}"><span style="color: #000000;">Fidget Spinner</span></a></h5></li>
                                                  </ul>
                                                </li><!-- 3 -->
                                              </ul><!-- 3 -->
                                            </li><!-- 2 -->
                                          </ul><!-- 2 -->
                                        </li><!-- 1 -->
                                      </ul><!-- 1 -->
                                    </li><!-- 0 -->
                                    <li class="menu-item-link menu-item-depth-0 fa fa-briefcase menu-item-parent">
                                      <a href="javascript:void(0)" class="arrow"><span>&gt;</span></a>
                                      <a class="em-menu-link" href="{{ route('categoryproduct',['category'=>'daily-needs']) }}">
                                        <span>Daily Needs</span>
                                      </a>
                                      <ul class="menu-container">
                                        <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col7 grid_10 bkg-menu01 menu-item-parent" style="">
                                          <ul class="menu-container">
                                            <li class="menu-item-vbox menu-item-depth-2 col-sm-17 menu-item-parent" style="">
                                              <ul class="menu-container">
                                                <li class="menu-item-text menu-item-depth-3  ">
                                                  <ul class="list-text">
                                                    @foreach ($dailyneed_menus as $element)
                                                    <li>
                                                      <h5>
                                                        <a href="{{ route('subcategoryproduct',['category'=>$element->category->slug,'subcategory'=>$element->slug]) }}"><span style="color: #000000;">{{ $element->name }}</span></a>
                                                      </h5>
                                                    </li>
                                                    @endforeach
                                                  </ul>
                                                </li><!-- 3 -->
                                              </ul><!-- 3 -->
                                            </li><!-- 2 -->
                                          </ul><!-- 2 -->
                                        </li><!-- 1 -->
                                      </ul><!-- 1 -->
                                    </li><!-- 0 -->
                                    <li class="menu-item-link menu-item-depth-0 fa fa-thumbs-o-up menu-item-parent">
                                      <a href="javascript:void(0)" class="arrow"><span>&gt;</span></a>
                                      <a class="em-menu-link" href="{{ route('categoryproduct',['category'=>'fashion-beauty']) }}">
                                        <span>Fashion &amp; Beauty</span>
                                      </a>
                                      <ul class="menu-container">
                                        <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col10  fix-top menu-item-parent" style="">
                                          <ul class="menu-container">
                                            <li class="menu-item-vbox menu-item-depth-2 col-sm-12 alpha menu-item-parent" style="">
                                              <ul class="menu-container">
                                                <li class="menu-item-text menu-item-depth-3  ">
                                                  <h5><a href=""><span style="color: #ED4923;">Men</span></a></h5>
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'mens-top-wear']) }}"><span style="color: #000000;">MEN'S TOP WEAR</span></a></h5>
                                                  <ul class="list-text">
                                                    @foreach ($menstopwearmenus as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    @endforeach
                                                  </ul>&nbsp;
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'mens-bottom-wear']) }}"><span style="color: #000000;"> MEN'S BOTTOM WEAR</span></a></h5>
                                                  <ul class="list-text">
                                                    @foreach ($mensbottomwearmenus as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    @endforeach
                                                  </ul>&nbsp;
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'mens-traditional-wear']) }}"><span style="color: #000000;">MEN'S Traditional Wear</span></a></h5>
                                                  <ul class="list-text">
                                                    @foreach ($menstraditionalwearmenus as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    @endforeach
                                                  </ul>&nbsp;
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'mens-accessories']) }}"><span style="color: #000000;">MEN'S Accessories</span></a></h5>
                                                  <ul class="list-text">
                                                    @foreach ($mensaccessoriesmenus as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    @endforeach
                                                  </ul>&nbsp;
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'mens-foot-wear']) }}"><span style="color: #000000;">MEN'S Foot Wear</span></a></h5>
                                                  <ul class="list-text">
                                                    @foreach ($mensfootwearmenus as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    @endforeach
                                                  </ul>&nbsp;
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'mens-fragrance']) }}"><span style="color: #000000;">MEN'S Fragrance</span></a></h5>
                                                  <ul class="list-text">
                                                    @foreach ($mensfragrancemenus as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    @endforeach
                                                  </ul>&nbsp;
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'mens-watches']) }}"><span style="color: #000000;">Men's Watches</span></a></h5> &nbsp;

                                                  <h5><a href=""><span style="color: #ED4923;">Women</span></a></h5>
                                                  &nbsp;
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'womens-top-wear']) }}"><span style="color: #000000;">WOMEN'S Top Wear</span></a></h5>
                                                  <ul class="list-text">
                                                    @foreach ($womenstopwearmenus as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    @endforeach
                                                  </ul>&nbsp;
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'womens-bottom-wear']) }}"><span style="color: #000000;">WOMEN'S Bottom Wear</span></a></h5>
                                                  <ul class="list-text">
                                                    @foreach ($womensbottomwearmenus as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    @endforeach
                                                  </ul>
                                                  &nbsp;
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'womens-traditional-wear']) }}"><span style="color: #000000;">WOMEN'S Traditional Wear</span></a></h5>
                                                  <ul class="list-text">
                                                    @foreach ($womenstraditionalwearmenus as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    @endforeach
                                                  </ul>
                                                  &nbsp;
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'womens-modest-wear']) }}"><span style="color: #000000;">WOMEN'S MODEST WEAR</span></a></h5>
                                                  <ul class="list-text">
                                                    @foreach ($womensmodeswearmenus as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    @endforeach
                                                  </ul>
                                                  &nbsp;
                                                    <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'womens-footwear']) }}"><span style="color: #000000;">WOMEN'S Footwear</span></a></h5>
                                                  <ul class="list-text">
                                                    @foreach ($womensfootwearmenus as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    @endforeach
                                                  </ul>
                                                  &nbsp;
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'womens-handbags-bags-wallets']) }}"><span style="color: #000000;">WOMEN'S Handbags, Bags & Wallets</span></a></h5>
                                                  <ul class="list-text">
                                                    @foreach ($womenshandbagsbagswalletsmenus as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    @endforeach
                                                  </ul>
                                                  &nbsp;
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'womens-fragrance']) }}"><span style="color: #000000;">WOMEN'S Fragrance</span></a></h5>
                                                  <ul class="list-text">
                                                    @foreach ($womensfragrancemenus as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    @endforeach
                                                  </ul>
                                                  &nbsp;
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'womens-watches']) }}"><span style="color: #000000;">Women's Watches</span></a></h5> &nbsp;
                                                  &nbsp;
                                                  <h5><span style="color: #ED4923;">Beauty &amp; Grooming</span></h5>
                                                  &nbsp;
                                                <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'face-makeup']) }}"><span style="color: #000000;">Face Makeup</span></a></h5>
                                                  <ul class="list-text">
                                                    @foreach ($facemakeupmenus as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    @endforeach
                                                  </ul>
                                                  &nbsp;
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'eye-makeup']) }}"><span style="color: #000000;">EYE MAKEUP</span></a></h5>
                                                  <ul class="list-text">
                                                    @foreach ($eyemakeupmenus as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    @endforeach
                                                  </ul>
                                                  &nbsp;
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'lip-makeup']) }}"><span style="color: #000000;">LIP MAKEUP</span></a></h5>
                                                  <ul class="list-text">
                                                    @foreach ($lipmakeupmenus as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    @endforeach
                                                  </ul>
                                                  &nbsp;
                                                <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'makeup-accessories']) }}"><span style="color: #000000;">Makeup Accessories</span></a></h5>
                                                  <ul class="list-text">
                                                    @foreach ($makeupaccessoriesmenus as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    @endforeach
                                                  </ul>
                                                  &nbsp;
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'body-skin-care']) }}"><span style="color: #000000;">Body & Skin Care</span></a></h5>
                                                  <ul class="list-text">
                                                    @foreach ($bodyskincaremenus as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    @endforeach
                                                  </ul>
                                                  &nbsp;
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'hair-care']) }}"><span style="color: #000000;">Hair Care</span></a></h5>
                                                  <ul class="list-text">
                                                    @foreach ($haircaremenus as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    @endforeach
                                                  </ul>
                                                  &nbsp;
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'nails']) }}"><span style="color: #000000;">NAILS</span></a></h5>
                                                  <ul class="list-text">
                                                    @foreach ($nailsmenus as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    @endforeach
                                                  </ul>
                                                </li><!-- 3 -->
                                              </ul><!-- 3 -->
                                            </li><!-- 2 -->
                                          </ul><!-- 2 -->
                                        </li><!-- 1 -->
                                      </ul><!-- 1 -->
                                    </li><!-- 0 -->

                                    <li class="menu-item-link menu-item-depth-0 fa fa-motorcycle menu-item-parent">
                                      <a href="javascript:void(0)" class="arrow"><span>&gt;</span></a>
                                      <a class="em-menu-link" href="{{ route('categoryproduct',['category'=>'cars-bikes']) }}">
                                        <span>Cars & Bikes</span>
                                      </a>
                                      <ul class="menu-container">
                                        <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col7 grid_10 bkg-menu01 menu-item-parent" style="">
                                          <ul class="menu-container">
                                            <li class="menu-item-vbox menu-item-depth-2 col-sm-17 menu-item-parent" style="">
                                              <ul class="menu-container">
                                                <li class="menu-item-text menu-item-depth-3  ">
                                                  <ul class="list-text">
                                                    @foreach($car_bikes as $element)
                                                    <li>
                                                      <h5>
                                                        <a href="{{ route('subcategoryproduct',['category'=>$element->category->slug,'subcategory'=>$element->slug]) }}"><span style="color: #000000;">{{ $element->name }}</span></a>
                                                      </h5>
                                                    </li>
                                                  @endforeach
                                                  </ul>
                                                </li><!-- 3 -->
                                              </ul><!-- 3 -->
                                            </li><!-- 2 -->
                                          </ul><!-- 2 -->
                                        </li><!-- 1 -->
                                      </ul><!-- 1 -->
                                    </li><!-- 0 -->
                                  </ul>
                                </div>
                              </div>
                              <script type="text/javascript">
                                function getWindowWidth() {
                                var w = window;
                                var d = document;
                                var e = d.documentElement;
                                var g = d.getElementsByTagName('body')[0];
                                var x = w.innerWidth||e.clientWidth||g.clientWidth;
                                return x;
                                };
                                function toogleMenuPro_7_8738(){
                                var $=jQuery;
                                var wi = getWindowWidth();
                                var wrapperMenu = $(".wrapper-7_8738");
                                var container = $("#toogle_menu_7_8738");
                                if (EM.SETTING.DISABLE_RESPONSIVE != 0) {
                                if( (wi <= 767) ){
                                wrapperMenu.addClass('em-menu-mobile');
                                }else{
                                wrapperMenu.removeClass('em-menu-mobile');
                                container.show();
                                }
                                }else{
                                wrapperMenu.removeClass('em-menu-mobile');
                                container.show();
                                }
                                };

                                jQuery(document).ready(function(){
                                toogleMenuPro_7_8738();
                                });

                                jQuery(window).bind('resize orientationchange', function() {
                                if (EM.SETTING.DISABLE_RESPONSIVE != 0) {
                                toogleMenuPro_7_8738();
                                }
                                });
                              </script>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row mobile-block">
                        <div class="col-sm-24">
                          <ul class="em-mobile-help">
                            <li><a href="https://www.pickaboo.com/contacts">Contact Us</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <script type="text/javascript">
          (function($) {
            function fixNavigationMobileView() {
              var $_winW = $(window).width();
              var $_mmenu = $('#em-mheader-menu-content');
              var elem = $('#em-mheader-menu-content');
              var $_parent = $('#em-mheader-wrapper-menu');
              var $_iconNav = $('#em-mheader-menu-icon');
              if (!isPhone || $_winW > 767) {
                $_mmenu.removeClass();
                $_iconNav.removeClass('active');
                elem.removeClass('show');
                $_parent.removeClass('active');
              }
            };

            function fixNavOverFlow() {
              var $_iconNav = $('#em-mheader-menu-icon');
              var elem = $('#em-mheader-menu-content');
              var $_parent = $('#em-mheader-wrapper-menu');
              $_iconNav.click(function(e) {
                e.preventDefault();
                var self = $(this);
                var isSkipContentOpen = elem.hasClass('show') ? 1 : 0;
                self.removeClass('active');
                elem.removeClass('show');
                $_parent.removeClass('active');
                if (isSkipContentOpen) {
                  self.removeClass('active');
                  $_parent.removeClass('active');
                } else {
                  self.addClass('active');
                  elem.addClass('show');
                  $_parent.addClass('active');
                }
              });
              if (isPhone) {
                $_parent.on("swipeleft", function() {
                  var self = $(this);
                  if (self.hasClass('active')) {
                    elem.removeClass('show');
                    $_iconNav.removeClass('active');
                    self.removeClass('active');
                  }
                });
              }
            };
            $(document).ready(function() {
              if (EM.SETTING.DISABLE_RESPONSIVE != 0) {
                fixNavigationMobileView();
                fixNavOverFlow();
              }
            });
            $(window).resize($.throttle(300, function() {
              if (EM.SETTING.DISABLE_RESPONSIVE != 0) {
                fixNavigationMobileView();
              }
            }));
          })(jQuery);
        </script>

        <div class="hidden-xs em-header-style31 .display-tablet">
          <div class="em-header-middle">
            <div class="container">
              <div class="row">
                <div class="em-logo col-sm-4">
                  <a href="{{ url('/') }}" title="" class="logo">
                                            <strong>dpunch.com</strong>
                                            <img class="retina-img img-responsive" src=" {{ asset('assets/img/dpunch_logo.png') }}" alt="">
                                        </a>
                </div>
                <div class="col-sm-20">


                  <!--<div class="em-search f-right">-->
                  <div class="em-search f-left">
                    <div class="em-top-search">
                      <div class="em-search-style02">
                        <div id="top-search-nofixed">

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="myaccount-link f-left" id="myaccount-link">

                    <div id="em-login-link" class="account-link f-right em-non-login">
                      @guest
                          <a onclick="openPopupLogin();" class="link-account" id="link-login" title="Login">Sign In</a>
                      @else
                          <a href="{{ route('customer.dashboard') }}" class="link-account header-my-acc" id="link-login" title="My Account"><span>My Account</span></a>
                          <div id="syn-logout-link" class="syn-logout-link" style="display: none;">
                            <div class="block-content">
                              <ul class="need-help-links">
                                <li class="em-links-item">
                                  <a href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                    <span>Logout</span>
                                  </a>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <script type="text/javascript">
                                    (function($) {
                                    function effectHelp() {
                                    var pHelp =$('#syn-logout-link');
                                    var pLink =$('#link-login');
                                    var pDivLink =$('#myaccount-link');
                                    if (pHelp.length > 0) {
                                    //hover Need Help
                                    if (isMobile) {
                                    pLink.attr('href', 'javascript:void(0);');
                                    pLink.click(function(e) {
                                    pHelp.slideToggle();
                                    });
                                    } else {
                                    var tmlink;
                                    function showlink(el) {
                                    clearTimeout(tmlink);
                                    tmlink = setTimeout(function() {
                                    el.slideDown();
                                    }, 200);
                                    }
                                    function hidelink(el) {
                                    clearTimeout(tmlink);
                                    tmlink = setTimeout(function() {
                                    el.slideUp();
                                    }, 200);
                                    }
                                    pDivLink.mouseover(function(){
                                    showlink(pHelp);
                                    });
                                    pDivLink.mouseout(function(){
                                    hidelink(pHelp);
                                    });
                                    }
                                    // Popup Need Help
                                    }
                                    }
                                    $(document).ready(function(){
                                    effectHelp();
                                    });
                                    })(jQuery);
                          </script>
                          <style type="text/css">
                                .myaccount-link.f-left, .header-log-out {
                                cursor: pointer;
                                }
                                .syn-logout-link
                                {
                                padding-top: 0;
                                position: absolute;
                                text-align: left;
                                top: 35px;
                                z-index: 9999;
                                }
                                .syn-logout-link .block-content {
                                background-color: #ffffff;
                                border: 1px solid #f6f6f6;
                                box-shadow: 0 0 5px #f6f6f6;
                                overflow: hidden;
                                padding: 17px 20px 9px;
                                width: 170px;
                                }
                                @media (min-width: 1025px) {
                                .em-header-style31 .em-search {
                                width: 54%;
                                }
                                }
                                @media (max-width: 1024px) and (min-width: 768px) {
                                .em-language-currency .form-language.toolbar-switch.em-language-style01 {
                                margin-left: 10px;
                                }
                                .em-header-style31 .help-link.f-left, .em-header-style31 .myaccount-link.f-left, .em-header-style31 .em-top-cart.f-left {
                                margin-left: 5px;
                                }
                                .em-header-style31 .em-search {
                                margin-right: 5px;
                                }
                                }
                          </style>
                      @endguest
                    </div>
                  </div>
                  <div class="help-link f-left">
                    <div id="em-help-link" class="em-help">
                      <a href="" class="link-help" id="link-help" title="Help">Need Help</a>

                      <div id="syn-help-link" class="syn-help-policy" style="display: none;">
                        <div class="block-content">
                          <ul class="need-help-links">
                            <li class="em-links-item"><a title="Return Policy" href="{{ route('single.page','returns-and-replacement') }}"><span>Returns and Replacement</span></a></li>
                            <li class="em-links-item"><a title="Warranty policy" href="{{ route('single.page','warranty-policy') }}"><span>Warranty policy</span></a></li>
                            <li class="em-links-item"><a title="FAQ" href="{{ route('single.page','faq') }}"><span>FAQ</span></a></li>
                            <li class="em-links-item"><a title="Privacy Policy" href="{{ route('single.page','privacy-policy') }}"><span>Privacy Policy</span></a></li>
                            <li class="em-links-item"><a title="Cookie Policy" href="{{ route('single.page','cookie-policy') }}"><span>Cookie Policy</span></a></li>
                            <li class="em-links-item"><a title="Contact us" href=""><span>Contact us</span></a></li>
                          </ul>
                        </div>
                      </div>

                      <script type="text/javascript">
                        (function($) {
                          function effectHelp() {
                            var pHelp = $('#syn-help-link');
                            var pLink = $('#link-help');
                            var pDivLink = $('#em-help-link');

                            if (pHelp.length > 0) {
                              if (isMobile) {

                                pLink.attr('href', 'javascript:void(0);');
                                pLink.click(function(e) {
                                  pHelp.slideToggle();
                                });
                              } else {
                                var tmlink;

                                function showlink(el) {
                                  clearTimeout(tmlink);
                                  tmlink = setTimeout(function() {
                                    el.slideDown();
                                  }, 200);
                                }

                                function hidelink(el) {
                                  clearTimeout(tmlink);
                                  tmlink = setTimeout(function() {
                                    el.slideUp();
                                  }, 200);
                                }
                                pDivLink.mouseover(function() {
                                  showlink(pHelp);
                                });
                                pDivLink.mouseout(function() {
                                  hidelink(pHelp);
                                });
                              }
                            }
                          }
                          $(document).ready(function() {
                            effectHelp();
                          });
                        })(jQuery);
                      </script>
                    </div>
                  </div>
                  <div class="em-top-cart f-left">
                    <div class="em-wrapper-js-topcart em-wrapper-topcart em-no-quickshop">
                      <div class="em-container-topcart">
                        <div class="em-summary-topcart">
                          <a class="em-amount-js-topcart em-amount-topcart" title="Shopping Cart" href="javascript:void(0)">
                            <span class="em-top-cart-text"> Cart </span>
                            <span class="em-topcart-text">My Cart:</span>
                            <span class="em-topcart-qty">{{ LaraCart::count() }}</span>
                          </a>
                        </div>

                        <div class="em-container-js-topcart topcart-popup" style="display:none">
                          <div class="topcart-popup-content">
                            <p class="em-block-subtitle">Shopping Cart</p>
                            @if (LaraCart::count() == 0)
                            <div class="topcart-content">
                              <p class="amount-content ">You have no items in your shopping cart.</p>
                            </div>
                            @else
                            <div class="topcart-content">
                              <p class="amount-content ">There is <a href="">{{ LaraCart::count() }} item</a> in your shopping cart.</p>
                              <ol class="em-topcart-list">
                                @foreach ($items = LaraCart::getItems() as $item)

                                <li class="item">
                                  <a href="" title="" class="product-image">
                                                                            <img src="{{ asset('images/small/'.$item->getModel()->image0) }}" width="135" alt="">
                                                                          </a>
                                  <div class="product-details">
                                    <a href="" title="Remove This Item" onclick="return confirm('Are you sure you would like to remove this item from the shopping cart?');" class="btn-remove">Remove This Item</a>
                                    <a href="" title="Edit item" class="btn-edit">Edit item</a>
                                    <p class="product-name">
                                      <a href="">{{ $item->name }}</a></p>
                                    <p class="sku">{{ $item->getModel()->sku }}</p>
                                    <strong>{{ $item->qty }}</strong> x<span class="price">৳ {{ $item->getModel()->price }}</span>
                                    <div class="dd-truncated">
                                      <div class="truncated">
                                        <div class="truncated_full_value">
                                          <dl class="item-options">
                                            <dt>Color</dt>
                                            <dd>{{ $item->getModel()->color }}</dd>
                                          </dl>
                                        </div>
                                        <a href="#" onclick="return false;" class="details">Details</a>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                @endforeach
                              </ol>
                            </div>
                            <div class="actions">
                              <p class="subtotal"><span class="label">Cart Subtotal</span> <span class="price">৳ {{ LaraCart::subTotal($formatted = false, $withDiscount = true) }}</span></p>
                              <div class="wrapper_bottom_button">
                                <a href="{{ route('cart.checkout') }}" title="Checkout" class="goto-cart"><span><span>Checkout</span></span></a>
                                <a href="{{ route('cart.index') }}" class="goto-cart"><span><span>My Cart</span></span></a>
                              </div>
                            </div>
                            @endif

                          </div>
                        </div>
                      </div>
                    </div>

                    <script type="text/javascript">
                      jQuery(function($) {
                        function emTopCart() {
                          var sCartContent = $(".em-wrapper-js-topcart");
                          if (isMobile == true) {
                            sCartContent.unbind('click');
                            var sLink = $('.em-amount-js-topcart');
                            sLink.attr('href', 'javascript:void(0)');
                            sCartContent.click(function(event) {
                              var $_this = $(this);
                              var $_container = $_this.children().find('.em-container-js-topcart');
                              $_container.slideToggle();
                              $_this.toggleClass('em-click-topcart');
                            });
                          } else {
                            // Hide Cart
                            var timeout = null;

                            function hideCart(e) {
                              var $_container = e.children().find('.em-container-js-topcart');
                              if (timeout)
                                clearTimeout(timeout);
                              timeout = setTimeout(function() {
                                timeout = null;
                                $_container.hide(300, function() {
                                  $(this).css('overflow', 'inherit');
                                });
                              }, 200);
                            }
                            // Show Cart
                            function showCart(e) {
                              var $_container = e.children().find('.em-container-js-topcart');
                              if (timeout)
                                clearTimeout(timeout);
                              timeout = setTimeout(function() {
                                timeout = null;
                                $_container.show(300, function() {
                                  $(this).css('overflow', 'inherit');
                                });
                              }, 200);
                            }

                            sCartContent.bind('mouseover', function(e) {
                              e.preventDefault();
                              var $_this = $(this);
                              showCart($_this);
                            }).bind('mouseout', function(e) {
                              e.preventDefault();
                              var $_this = $(this);
                              hideCart($_this);
                            });
                          }
                        }
                        $(document).ready(function() {
                          emTopCart();
                        });
                      });
                    </script>
                  </div>
                  <div class="em-language-currency row">
                    <div class="col-sm-24">

                      <script type="text/javascript">
                        (function($) {
                          function emHoverUlLanguage() {
                            if (!isMobile) {
                              var sLan = $('#em-hoverUl-language');
                              var len = sLan.length;
                              if (len) {
                                sLan.insertUlLanguage();
                                sLan.selectUl();
                              }
                            }
                          }
                          $(document).ready(function() {
                            emHoverUlLanguage();
                          });
                        })(jQuery);
                      </script>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="em-fixed-top"></div>
          <div class="em-header-bottom em-fixed-top">
            <div class="container em-menu-fix-pos">
              <div class="row">
                <div class="col-sm-24">
                  <div class="em-line">
                    <div class="em-logo-sticky f-left">
                      <a href="{{ url('/') }}" title="" class="logo">
                                                    <img src=" {{ asset('assets/img/logo-s.png') }}" alt="">
                                                </a>
                    </div>

                    <div class="em-menu-hoz col-sm-24">
                      <div id="em-main-megamenu">

                        <div class="em-menu">
                          <div class="megamenu-wrapper wrapper-6_8644 em-menu-mobile">
                            <div class="em_nav" id="toogle_menu_6_8644">
                              <ul class="hnav effect-menu">
                                <li class="menu-item-link menu-item-depth-0  menu-item-parent">
                                  <a class="em-menu-link" href="{{ route('categoryproduct',['category'=>'mobiles-tablets']) }}"><span>Mobiles & Tablets</span></a>
                                  <ul class="menu-container">
                                    <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col19 grid_22 bkg-menu01 menu-item-parent" style="">
                                      <ul class="menu-container">
                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-7 menu-item-parent" style="">
                                          <ul class="menu-container">

                                            <li class="menu-item-text menu-item-depth-3 ">
                                              <h5>
                                                                                <a href="{{ route('subcategoryproduct',['category'=>'mobiles-tablets','subcategory'=>'mobile-phones']) }}">
                                                                                  <span style="color: #000000;">Mobile Phones</span>
                                                                                </a>
                                                                              </h5>
                                              <div class="row">
                                                @foreach ($mobilephonemenus->chunk(12) as $chunk)
                                                <div class="col-sm-12">
                                                  <ul class="list-text">
                                                    @foreach ($chunk as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    {{--
                                                    <div class="col-xs-4">{{ $product->name }}</div> --}} @endforeach
                                                  </ul>
                                                </div>
                                                @endforeach
                                              </div>
                                            </li>
                                          </ul>
                                        </li>
                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-3 menu-item-parent" style="">
                                          <ul class="menu-container">
                                            <li class="menu-item-text menu-item-depth-3  ">
                                              <h5>
                                                                            <a href="{{ route('subcategoryproduct',['category'=>'mobiles-tablets','subcategory'=>'tablets']) }}">
                                                                            <span style="color: #000000;">Tablets</span>
                                                                            </a>
                                                                          </h5>
                                              <ul class="list-text">
                                                @foreach ($tabletmenus as $element)
                                                <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                @endforeach
                                              </ul>
                                            </li>
                                          </ul>
                                        </li>
                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-4 menu-item-parent" style="">
                                          <ul class="menu-container">
                                            <li class="menu-item-text menu-item-depth-3  ">
                                              <h5>
                                                                            <a href="{{ route('subcategoryproduct',['category'=>'mobiles-tablets','subcategory'=>'feature-phones']) }}"><span style="color: #000000;">Feature Phones</span></a>
                                                                          </h5>
                                              <ul class="list-text">
                                                @foreach ($featurephonemenus as $element)
                                                <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name  }}</a></li>
                                                @endforeach
                                              </ul>
                                            </li>
                                            <!-- 3 -->
                                          </ul>
                                          <!-- 3 -->
                                        </li>
                                        <!-- 2 -->
                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-7 menu-item-parent" style="">
                                          <ul class="menu-container">
                                            <li class="menu-item-text menu-item-depth-3  ">
                                              <h5><a href="{{ route('subcategoryproduct',['category'=>'mobiles-tablets','subcategory'=>'mobile-tablet-accessories']) }}"><span style="color: #000000;">Mobile & Tablet Accessories</span></a></h5>
                                              <div class="row">
                                                @foreach ($mobiletabletaccessoriesmenus->chunk(12) as $chunk)
                                                <div class="col-sm-12">
                                                  <ul class="list-text">
                                                    @foreach ($chunk as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    {{--
                                                    <div class="col-xs-4">{{ $product->name }}</div> --}} @endforeach
                                                  </ul>
                                                </div>
                                                @endforeach
                                              </div>
                                            </li>
                                            <!-- 3 -->
                                          </ul>
                                          <!-- 3 -->
                                        </li>
                                        <!-- 2 -->
                                      </ul>
                                      <!-- 2 -->
                                    </li>
                                    <!-- 1 -->
                                  </ul>
                                  <!-- 1 -->
                                </li>
                                <!-- 0 -->
                                <li class="menu-item-link menu-item-depth-0  menu-item-parent">
                                  <a class="em-menu-link" href="{{ route('categoryproduct',['category'=>'computers']) }}"><span>Computers</span></a>
                                  <ul class="menu-container">
                                    <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col19 grid_22 bkg-menu01 menu-item-parent" style="">
                                      <ul class="menu-container">
                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-5 menu-item-parent" style="">
                                          <ul class="menu-container">
                                            <li class="menu-item-text menu-item-depth-3  ">
                                              <ul class="list-text">

                                                <li>
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'computers','subcategory'=>'desktop-computers']) }}"><span style="color: #000000;">Desktop Computers</span></a></h5></li>
                                                <li>
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'computers','subcategory'=>'laptops-notebooks']) }}"><span style="color: #000000;">Laptops & Notebooks</span></a></h5></li>
                                                <li>
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'computers','subcategory'=>'apple-mac']) }}"><span style="color: #000000;">Apple Mac</span></a></h5></li>
                                                <li>
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'computers','subcategory'=>'apple-accessories']) }}"><span style="color: #000000;">Apple Accessories</span></a></h5></li>
                                              </ul>
                                            </li>
                                            <!-- 3 -->
                                          </ul>
                                          <!-- 3 -->
                                        </li>
                                        <!-- 2 -->
                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-14 menu-item-parent" style="">
                                          <ul class="menu-container">
                                            <li class="menu-item-text menu-item-depth-3  ">
                                              <h5><a href="{{ route('subcategoryproduct',['category'=>'computers','subcategory'=>'computer-accessories']) }}"><span style="color: #000000;">Computer Accessories</span></a></h5>
                                              <div class="row">
                                                @foreach ($computeraccessoriesmenu->chunk(12) as $chunk)
                                                <div class="col-sm-8">
                                                  <ul class="list-text">
                                                    @foreach ($chunk as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    {{--
                                                    <div class="col-xs-4">{{ $product->name }}</div> --}} @endforeach
                                                  </ul>
                                                </div>
                                                @endforeach
                                              </div>
                                            </li>
                                            <!-- 3 -->
                                          </ul>
                                          <!-- 3 -->
                                        </li>
                                        <!-- 2 -->
                                      </ul>
                                      <!-- 2 -->
                                    </li>
                                    <!-- 1 -->
                                  </ul>
                                  <!-- 1 -->
                                </li>
                                <!-- 0 -->
                                <li class="menu-item-link menu-item-depth-0  menu-item-parent">
                                  <a class="em-menu-link" href="{{ route('categoryproduct',['category'=>'electronics-appliances']) }}"><span>Electronics & Appliances</span></a>
                                  <ul class="menu-container">
                                    <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col21 grid_21 bkg-menu01 menu-item-parent" style="">
                                      <ul class="menu-container">
                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-4 menu-item-parent" style="">
                                          <ul class="menu-container">
                                            <li class="menu-item-text menu-item-depth-3  ">
                                              <h5><a href="{{ route('subcategoryproduct',['category'=>'electronics-appliances','subcategory'=>'televisions']) }}"><span style="color: #000000;">Televisions</span></a></h5>
                                              <ul class="list-text">
                                                @foreach ($televisionmenus as $element)
                                                <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                @endforeach
                                              </ul>
                                              &nbsp;
                                              <h5><a href="{{ route('subcategoryproduct',['category'=>'electronics-appliances','subcategory'=>'security-systems']) }}"><span style="color: #000000;">Security Systems</span></a></h5>
                                              <ul class="list-text">
                                                @foreach ($securitysystemmenus as $element)
                                                <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                @endforeach
                                              </ul>
                                            </li>
                                            <!-- 3 -->
                                          </ul>
                                          <!-- 3 -->
                                        </li>
                                        <!-- 2 -->
                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-4 menu-item-parent" style="">
                                          <ul class="menu-container">
                                            <li class="menu-item-text menu-item-depth-3  ">
                                              <h5><a href="{{ route('subcategoryproduct',['category'=>'electronics-appliances','subcategory'=>'home-appliances']) }}"><span style="color: #000000;">Home Appliances</span></a></h5>
                                              <ul class="list-text">
                                                @foreach ($homeappliancemenus as $element)
                                                <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                @endforeach
                                              </ul>
                                            </li>
                                            <!-- 3 -->
                                          </ul>
                                          <!-- 3 -->
                                        </li>
                                        <!-- 2 -->
                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-9 menu-item-parent" style="">
                                          <ul class="menu-container">
                                            <li class="menu-item-text menu-item-depth-3  ">
                                              <h5><a href="{{ route('subcategoryproduct',['category'=>'electronics-appliances','subcategory'=>'kitchen-appliances']) }}"><span style="color: #000000;">Kitchen Appliances</span></a></h5>
                                              <div class="row">
                                                @foreach ($kitchenappliancemenus->chunk(12) as $chunk)
                                                <div class="col-sm-12">
                                                  <ul class="list-text">
                                                    @foreach ($chunk as $element)
                                                    <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                    {{--
                                                    <div class="col-xs-4">{{ $product->name }}</div> --}} @endforeach
                                                  </ul>
                                                </div>
                                                @endforeach
                                              </div>
                                            </li>
                                            <!-- 3 -->
                                          </ul>
                                          <!-- 3 -->
                                        </li>
                                        <!-- 2 -->
                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-6 menu-item-parent" style="">
                                          <ul class="menu-container">
                                            <li class="menu-item-text menu-item-depth-3  ">
                                              <h5><a href="{{ route('subcategoryproduct',['category'=>'electronics-appliances','subcategory'=>'cleaning-supplies-tools']) }}"><span style="color: #000000;">Cleaning Supplies & Tools</span></a></h5>

                                              <ul class="list-text">
                                                @foreach ($cleaningsuppliestoolmenus as $element)
                                                <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                @endforeach
                                              </ul>
                                            </li>
                                            <!-- 3 -->
                                          </ul>
                                          <!-- 3 -->
                                        </li>
                                        <!-- 2 -->
                                      </ul>
                                      <!-- 2 -->
                                    </li>
                                    <!-- 1 -->
                                  </ul>
                                  <!-- 1 -->
                                </li>
                                <!-- 0 -->
                                <li class="menu-item-link menu-item-depth-0  menu-item-parent">
                                  <a class="em-menu-link" href="{{ route('categoryproduct',['category'=>'entertainment']) }}"><span>Entertainment</span></a>
                                  <ul class="menu-container">
                                    <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col18 grid_22 bkg-menu01 menu-item-parent" style="">
                                      <ul class="menu-container">
                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-4 menu-item-parent" style="">
                                          <ul class="menu-container">
                                            <li class="menu-item-text menu-item-depth-3  ">
                                              <h5><a href="{{ route('subcategoryproduct',['category'=>'entertainment','subcategory'=>'cameras']) }}"><span style="color: #000000;">Cameras</span></a></h5>
                                              <ul class="list-text">
                                                @foreach ($cameramenus as $element)
                                                <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{$element->name}}</a></li>
                                                @endforeach
                                              </ul>
                                            </li>
                                            <!-- 3 -->
                                          </ul>
                                          <!-- 3 -->
                                        </li>
                                        <!-- 2 -->
                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-6 menu-item-parent" style="">
                                          <ul class="menu-container">
                                            <li class="menu-item-text menu-item-depth-3  ">
                                              <h5><a href="{{ route('subcategoryproduct',['category'=>'entertainment','subcategory'=>'audio-players-systems']) }}"><span style="color: #000000;">Audio Players & Systems</span></a></h5>
                                              <ul class="list-text">
                                                @foreach ($audioplayerssystemmenus as $element)
                                                <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                @endforeach
                                              </ul>
                                            </li>
                                            <!-- 3 -->
                                          </ul>
                                          <!-- 3 -->
                                        </li>
                                        <!-- 2 -->
                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-5 menu-item-parent" style="">
                                          <ul class="menu-container">
                                            <li class="menu-item-text menu-item-depth-3  ">
                                              <h5><a href="{{ route('subcategoryproduct',['category'=>'entertainment','subcategory'=>'gaming-console']) }}"><span style="color: #000000;">Gaming & Console</span></a></h5>

                                              <ul class="list-text">
                                                @foreach ($gamingconsolmenus as $element)
                                                <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                @endforeach
                                              </ul>
                                            </li>
                                            <!-- 3 -->
                                          </ul>
                                          <!-- 3 -->
                                        </li>
                                        <!-- 2 -->
                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-5 menu-item-parent" style="">
                                          <ul class="menu-container">
                                            <li class="menu-item-text menu-item-depth-3  ">
                                              <ul class="list-text">
                                                <li>
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'entertainment','subcategory'=>'toys-games']) }}"><span style="color: #000000;">Toys & Games</span></a></h5></li>
                                                <li>
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'entertainment','subcategory'=>'fitness']) }}"><span style="color: #000000;">Fitness</span></a></h5></li>
                                                <li>
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'entertainment','subcategory'=>'grooming-products']) }}"><span style="color: #000000;">Grooming Products</span></a></h5></li>
                                                <li>
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'entertainment','subcategory'=>'vehicles']) }}"><span style="color: #000000;">Vehicles</span></a></h5></li>
                                                <li>
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'entertainment','subcategory'=>'health-care-devices']) }}"><span style="color: #000000;">Health Care Devices</span></a></h5></li>
                                                <li>
                                                  <h5><a href="{{ route('subcategoryproduct',['category'=>'entertainment','subcategory'=>'fidget-spinner']) }}"><span style="color: #000000;">Fidget Spinner</span></a></h5></li>

                                              </ul>
                                            </li>
                                            <!-- 3 -->
                                          </ul>
                                          <!-- 3 -->
                                        </li>
                                        <!-- 2 -->
                                      </ul>
                                      <!-- 2 -->
                                    </li>
                                    <!-- 1 -->
                                  </ul>
                                  <!-- 1 -->
                                </li>
                                <!-- 0 -->
                                <li class="menu-item-link menu-item-depth-0  menu-item-parent">
                                  <a class="em-menu-link" href="{{ route('categoryproduct',['category'=>'daily-needs']) }}"><span>Daily Needs</span></a>
                                  <ul class="menu-container">
                                    <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col7 grid_10 bkg-menu01 menu-item-parent" style="">
                                      <ul class="menu-container">
                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-17 menu-item-parent" style="">
                                          <ul class="menu-container">
                                            <li class="menu-item-text menu-item-depth-3  ">
                                              <ul class="list-text">
                                                @foreach ($dailyneed_menus as $element)
                                                <li>
                                                  <h5>
                                                    <a href="{{ route('subcategoryproduct',['category'=>$element->category->slug,'subcategory'=>$element->slug]) }}"><span style="color: #000000;">{{ $element->name }}</span></a>
                                                  </h5>
                                                </li>
                                                @endforeach
                                              </ul>
                                            </li>
                                            <!-- 3 -->
                                          </ul>
                                          <!-- 3 -->
                                        </li>
                                        <!-- 2 -->
                                      </ul>
                                      <!-- 2 -->
                                    </li>
                                    <!-- 1 -->
                                  </ul>
                                  <!-- 1 -->
                                </li>
                                <!-- 0 -->
                                <li class="menu-item-link menu-item-depth-0  menu-item-parent">
                                  <a class="em-menu-link" href="{{ route('categoryproduct',['category'=>'fashion-beauty']) }}"><span>Fashion & Beauty</span></a>
                                  <ul class="menu-container">
                                    <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col24 grid_24 bkg-menu01 menu-item-parent" style="">
                                      <ul class="menu-container">
                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-8 menu-item-parent" style="">
                                          <ul class="menu-container">
                                            <li class="menu-item-text menu-item-depth-3  ">
                                              <h5><a href="fashion-beauty/men.html/index.html"><span style="color: #ED4923;">Men</span></a></h5> </li>
                                            <!-- 3 -->
                                          </ul>
                                          <!-- 3 -->
                                        </li>
                                        <!-- 2 -->
                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-8 menu-item-parent" style="">
                                          <ul class="menu-container">
                                            <li class="menu-item-text menu-item-depth-3  ">
                                              <h5><a href="fashion-beauty/women.html/index.html"><span style="color: #ED4923;">Women</span></a></h5> </li>
                                            <!-- 3 -->
                                          </ul>
                                          <!-- 3 -->
                                        </li>
                                        <!-- 2 -->
                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-8 menu-item-parent" style="">
                                          <ul class="menu-container">
                                            <li class="menu-item-text menu-item-depth-3  ">
                                              <h5><span style="color: #ED4923;">Beauty & Grooming</span></h5> </li>
                                            <!-- 3 -->
                                          </ul>
                                          <!-- 3 -->
                                        </li>
                                        <!-- 2 -->
                                      </ul>
                                      <!-- 2 -->
                                    </li>
                                    <!-- 1 -->
                                    <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col24 grid_24 bkg-menu01 menu-item-parent" style="">
                                      <ul class="menu-container">
                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-4 menu-item-parent" style="">
                                          <ul class="menu-container">
                                            <li class="menu-item-text menu-item-depth-3  ">
                                              <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'mens-top-wear']) }}"><span style="color: #000000;">MEN'S TOP WEAR</span></a></h5>
                                              <ul class="list-text">
                                                @foreach ($menstopwearmenus as $element)
                                                <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                @endforeach
                                              </ul>
                                              &nbsp;
                                              <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'mens-bottom-wear']) }}"><span style="color: #000000;"> MEN'S BOTTOM WEAR</span></a></h5>
                                              <ul class="list-text">
                                                @foreach ($mensbottomwearmenus as $element)
                                                <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                @endforeach
                                              </ul>
                                              &nbsp;
                                              <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'mens-traditional-wear']) }}"><span style="color: #000000;">MEN'S Traditional Wear</span></a></h5>
                                              <ul class="list-text">
                                                @foreach ($menstraditionalwearmenus as $element)
                                                <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                @endforeach
                                              </ul>
                                            </li>
                                            <!-- 3 -->
                                          </ul>
                                          <!-- 3 -->
                                        </li>
                                        <!-- 2 -->
                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-4 menu-item-parent" style="">
                                          <ul class="menu-container">
                                            <li class="menu-item-text menu-item-depth-3  ">
                                              <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'mens-watches']) }}"><span style="color: #000000;">Men's Watches</span></a></h5> &nbsp;
                                              <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'mens-accessories']) }}"><span style="color: #000000;">MEN'S Accessories</span></a></h5>
                                              <ul class="list-text">
                                                @foreach ($mensaccessoriesmenus as $element)
                                                <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                @endforeach

                                              </ul>
                                              &nbsp;
                                              <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'mens-foot-wear']) }}"><span style="color: #000000;">MEN'S Foot Wear</span></a></h5>
                                              <ul class="list-text">
                                                @foreach ($mensfootwearmenus as $element)
                                                <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                @endforeach
                                              </ul>
                                              &nbsp;
                                              <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'mens-fragrance']) }}"><span style="color: #000000;">MEN'S Fragrance</span></a></h5>
                                              <ul class="list-text">
                                                @foreach ($mensfragrancemenus as $element)
                                                <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                @endforeach
                                              </ul>
                                            </li>
                                            <!-- 3 -->
                                          </ul>
                                          <!-- 3 -->
                                        </li>
                                        <!-- 2 -->
                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-4 menu-item-parent" style="">
                                          <ul class="menu-container">
                                            <li class="menu-item-text menu-item-depth-3  ">
                                              <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'womens-top-wear']) }}"><span style="color: #000000;">WOMEN'S Top Wear</span></a></h5>
                                              <ul class="list-text">
                                                @foreach ($womenstopwearmenus as $element)
                                                <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                @endforeach
                                              </ul>

                                              &nbsp;
                                              <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'womens-bottom-wear']) }}"><span style="color: #000000;">WOMEN'S Bottom Wear</span></a></h5>
                                              <ul class="list-text">
                                                @foreach ($womensbottomwearmenus as $element)
                                                <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                @endforeach
                                              </ul>
                                              &nbsp;
                                              <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'womens-traditional-wear']) }}"><span style="color: #000000;">WOMEN'S Traditional Wear</span></a></h5>
                                              <ul class="list-text">
                                                @foreach ($womenstraditionalwearmenus as $element)
                                                <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                @endforeach
                                              </ul>
                                              &nbsp;
                                              <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'womens-footwear']) }}"><span style="color: #000000;">WOMEN'S Footwear</span></a></h5>
                                              <ul class="list-text">
                                                @foreach ($womensfootwearmenus as $element)
                                                <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                @endforeach
                                              </ul>
                                            </li>
                                            <!-- 3 -->
                                          </ul>
                                          <!-- 3 -->
                                        </li>
                                        <!-- 2 -->
                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-4 menu-item-parent" style="">
                                          <ul class="menu-container">
                                            <li class="menu-item-text menu-item-depth-3  ">
                                              <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'womens-watches']) }}"><span style="color: #000000;">Women's Watches</span></a></h5> &nbsp;
                                              <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'womens-handbags-bags-wallets']) }}"><span style="color: #000000;">WOMEN'S Handbags, Bags & Wallets</span></a></h5>
                                              <ul class="list-text">
                                                @foreach ($womenshandbagsbagswalletsmenus as $element)
                                                <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                @endforeach
                                              </ul>
                                              &nbsp;
                                              <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'womens-fragrance']) }}"><span style="color: #000000;">WOMEN'S Fragrance</span></a></h5>
                                              <ul class="list-text">
                                                @foreach ($womensfragrancemenus as $element)
                                                <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                @endforeach
                                              </ul>
                                              &nbsp;
                                              <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'womens-modest-wear']) }}"><span style="color: #000000;">WOMEN'S MODEST WEAR</span></a></h5>
                                              <ul class="list-text">
                                                @foreach ($womensmodeswearmenus as $element)
                                                <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                @endforeach
                                              </ul>
                                            </li>
                                            <!-- 3 -->
                                          </ul>
                                          <!-- 3 -->
                                        </li>
                                        <!-- 2 -->
                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-4 menu-item-parent" style="">
                                          <ul class="menu-container">
                                            <li class="menu-item-text menu-item-depth-3  ">
                                              <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'face-makeup']) }}"><span style="color: #000000;">Face Makeup</span></a></h5>
                                              <ul class="list-text">
                                                @foreach ($facemakeupmenus as $element)
                                                <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                @endforeach
                                              </ul>
                                              &nbsp;
                                              <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'eye-makeup']) }}"><span style="color: #000000;">EYE MAKEUP</span></a></h5>
                                              <ul class="list-text">
                                                @foreach ($eyemakeupmenus as $element)
                                                <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                @endforeach
                                              </ul>
                                              &nbsp;
                                              <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'hair-care']) }}"><span style="color: #000000;">Hair Care</span></a></h5>
                                              <ul class="list-text">
                                                @foreach ($haircaremenus as $element)
                                                <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                @endforeach
                                              </ul>
                                            </li>
                                            <!-- 3 -->
                                          </ul>
                                          <!-- 3 -->
                                        </li>
                                        <!-- 2 -->
                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-4 menu-item-parent" style="">
                                          <ul class="menu-container">
                                            <li class="menu-item-text menu-item-depth-3  ">
                                              <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'lip-makeup']) }}"><span style="color: #000000;">LIP MAKEUP</span></a></h5>
                                              <ul class="list-text">
                                                @foreach ($lipmakeupmenus as $element)
                                                <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                @endforeach
                                              </ul>
                                              &nbsp;
                                              <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'makeup-accessories']) }}"><span style="color: #000000;">Makeup Accessories</span></a></h5>
                                              <ul class="list-text">
                                                @foreach ($makeupaccessoriesmenus as $element)
                                                <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                @endforeach
                                              </ul>
                                              &nbsp;
                                              <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'body-skin-care']) }}"><span style="color: #000000;">Body & Skin Care</span></a></h5>
                                              <ul class="list-text">
                                                @foreach ($bodyskincaremenus as $element)
                                                <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                @endforeach
                                              </ul>

                                              &nbsp;
                                              <h5><a href="{{ route('subcategoryproduct',['category'=>'fashion-beauty','subcategory'=>'nails']) }}"><span style="color: #000000;">NAILS</span></a></h5>
                                              <ul class="list-text">
                                                @foreach ($nailsmenus as $element)
                                                <li><a href="{{ route('childcategoryproduct',['category'=>$element->subcategory->category->slug,'subcategory'=>$element->subcategory->slug,'childcategory'=>$element->slug]) }}">{{ $element->name }}</a></li>
                                                @endforeach
                                              </ul>
                                            </li>
                                            <!-- 3 -->
                                          </ul>
                                          <!-- 3 -->
                                        </li>
                                        <!-- 2 -->
                                      </ul>
                                      <!-- 2 -->
                                    </li>
                                    <!-- 1 -->
                                  </ul>
                                  <!-- 1 -->
                                </li>
                                <!-- 0 -->
                                <li class="menu-item-link menu-item-depth-0  menu-item-parent">
                                  <a class="em-menu-link" href="{{ route('categoryproduct',['category'=>'cars-bikes']) }}"><span>Cars & Bikes</span></a>
                                  <ul class="menu-container">
                                    <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col7 grid_10 bkg-menu01 menu-item-parent" style="">
                                      <ul class="menu-container">
                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-17 menu-item-parent" style="">
                                          <ul class="menu-container">
                                            <li class="menu-item-text menu-item-depth-3  ">
                                              <ul class="list-text">
                                                @foreach($car_bikes as $element)
                                                <li>
                                                  <h5>
                                                    <a href="{{ route('subcategoryproduct',['category'=>$element->category->slug,'subcategory'=>$element->slug]) }}"><span style="color: #000000;">{{ $element->name }}</span></a>
                                                  </h5>
                                                </li>
                                              @endforeach
                                              </ul>
                                            </li>
                                            <!-- 3 -->
                                          </ul>
                                          <!-- 3 -->
                                        </li>
                                        <!-- 2 -->
                                      </ul>
                                      <!-- 2 -->
                                    </li>
                                    <!-- 1 -->
                                  </ul>
                                  <!-- 1 -->
                                </li>
                                <!-- 0 -->
                              </ul>
                            </div>
                          </div>
                          <script type="text/javascript">
                            function getWindowWidth() {
                              var w = window;
                              var d = document;
                              var e = d.documentElement;
                              var g = d.getElementsByTagName('body')[0];
                              var x = w.innerWidth || e.clientWidth || g.clientWidth;
                              return x;
                            };

                            function toogleMenuPro_6_8644() {
                              var $ = jQuery;
                              var wi = getWindowWidth();
                              var wrapperMenu = $(".wrapper-6_8644");
                              var container = $("#toogle_menu_6_8644");
                              if (EM.SETTING.DISABLE_RESPONSIVE != 0) {
                                if ((wi <= 767)) {
                                  wrapperMenu.addClass('em-menu-mobile');
                                } else {
                                  wrapperMenu.removeClass('em-menu-mobile');
                                  container.show();
                                }
                              } else {
                                wrapperMenu.removeClass('em-menu-mobile');
                                container.show();
                              }
                            };

                            jQuery(document).ready(function() {
                              toogleMenuPro_6_8644();
                            });

                            jQuery(window).bind('resize orientationchange', function() {
                              if (EM.SETTING.DISABLE_RESPONSIVE != 0) {
                                toogleMenuPro_6_8644();
                              }
                            });
                          </script>
                        </div>
                      </div>
                    </div>

                    <div class="em-search em-search-sticky f-right">
                      <div class="em-search-style01">
                        <div id="top-search-fixed"></div>
                      </div>
                    </div>
                    <div class="em-top-cart f-right em-top-cart-sticky">
                      <div class="em-wrapper-js-topcart em-wrapper-topcart em-no-quickshop">
                        <div class="em-container-topcart">
                          <div class="em-summary-topcart">
                            <a class="em-amount-js-topcart em-amount-topcart" title="Shopping Cart" href="">
                              <span class="em-top-cart-text"> Cart </span>
                              <span class="em-topcart-text">My Cart:</span>
                              <span class="em-topcart-qty">{{ LaraCart::count() }}</span>
                            </a>
                          </div>

                          <div class="em-container-js-topcart topcart-popup" style="display:none">
                            <div class="topcart-popup-content">
                              <p class="em-block-subtitle">Shopping Cart</p>
                              @if (LaraCart::count() == 0)
                              <div class="topcart-content">
                                <p class="amount-content ">You have no items in your shopping cart.</p>
                              </div>
                              @else
                              <div class="topcart-content">
                                <p class="amount-content ">There is <a href="">{{ LaraCart::count() }} item</a> in your shopping cart.</p>
                                <ol class="em-topcart-list">
                                  @foreach ($items = LaraCart::getItems() as $item)

                                  <li class="item">
                                    <a href="" title="" class="product-image">
                                      <img src="{{ asset('images/small/'.$item->getModel()->image0) }}" width="135" alt="">
                                    </a>
                                    <div class="product-details">
                                      {{-- <a href="" title="Remove This Item" onclick="return confirm('Are you sure you would like to remove this item from the shopping cart?');" class="btn-remove">Remove This Item</a> --}}
                                      <a href="" title="Edit item" class="btn-edit">Edit item</a>
                                      <p class="product-name">
                                        <a href="">{{ $item->name }}</a></p>
                                      <p class="sku">{{ $item->getModel()->sku }}</p>
                                      <strong>{{ $item->qty }}</strong> x<span class="price">৳ {{ $item->getModel()->price }}</span>
                                      <div class="dd-truncated">
                                        <div class="truncated">
                                          <div class="truncated_full_value">
                                            <dl class="item-options">
                                              <dt>Color</dt>
                                              <dd>{{ $item->getModel()->color }}</dd>
                                            </dl>
                                          </div>
                                          <a href="#" onclick="return false;" class="details">Details</a>
                                        </div>
                                      </div>
                                    </div>
                                  </li>
                                  @endforeach
                                </ol>
                              </div>
                              <div class="actions">
                                <p class="subtotal"><span class="label">Cart Subtotal</span> <span class="price">৳ {{ LaraCart::subTotal($formatted = false, $withDiscount = true) }}</span></p>
                                <div class="wrapper_bottom_button">
                                  <button type="button" title="Checkout" class="button button-checkout" onclick=""><span><span>Checkout</span></span></button>
                                  <a href="{{ route('cart.index') }}" class="goto-cart"><span><span>My Cart</span></span></a>
                                </div>
                              </div>
                              @endif

                            </div>
                          </div>

                        </div>
                      </div>

                      <script type="text/javascript">
                        jQuery(function($) {
                          function emTopCart() {
                            var sCartContent = $(".em-wrapper-js-topcart");
                            if (isMobile == true) {
                              sCartContent.unbind('click');
                              var sLink = $('.em-amount-js-topcart');
                              sLink.attr('href', 'javascript:void(0)');
                              sCartContent.click(function(event) {
                                var $_this = $(this);
                                var $_container = $_this.children().find('.em-container-js-topcart');
                                $_container.slideToggle();
                                $_this.toggleClass('em-click-topcart');
                              });
                            } else {
                              // Hide Cart
                              var timeout = null;

                              function hideCart(e) {
                                var $_container = e.children().find('.em-container-js-topcart');
                                if (timeout)
                                  clearTimeout(timeout);
                                timeout = setTimeout(function() {
                                  timeout = null;
                                  $_container.hide(300, function() {
                                    $(this).css('overflow', 'inherit');
                                  });
                                }, 200);
                              }
                              // Show Cart
                              function showCart(e) {
                                var $_container = e.children().find('.em-container-js-topcart');
                                if (timeout)
                                  clearTimeout(timeout);
                                timeout = setTimeout(function() {
                                  timeout = null;
                                  $_container.show(300, function() {
                                    $(this).css('overflow', 'inherit');
                                  });
                                }, 200);
                              }

                              sCartContent.bind('mouseover', function(e) {
                                e.preventDefault();
                                var $_this = $(this);
                                showCart($_this);
                              }).bind('mouseout', function(e) {
                                e.preventDefault();
                                var $_this = $(this);
                                hideCart($_this);
                              });
                            }
                          }
                          $(document).ready(function() {
                            emTopCart();
                          });
                        });
                      </script>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div style="display:none;" id="loginpopup" class="popup-login account-login">
          <img onclick="closePopupLogin();" id="popuploginclose" src="{{ asset('assets/img/icon-close-circled-128.png')}}" class="popup-login-close">
          <form  id="login-form" class="scaffold-form" method="" action="">
            {{ csrf_field() }}
            <div class="col2-set">
              <div class="col-2 registered-users">
                <div class="content fieldset">
                  <ul class="form-list">
                    <li>
                      <label for="username" class="required"><em>*</em>Email/Mobile</label>
                      <div class="input-box">
                        <input name="email" id="username" class="input-text required-entry validate" value="" title="Email/Mobile" type="text">
                            <span class="help-block">
                                <strong id="email"></strong>
                            </span>

                      </div>
                    </li>

                    <li>
                      <label for="pass" class="required"><em>*</em>Password</label>
                      <div class="input-box">
                        <input name="password" class="input-text required-entry validate-password" id="pass" title="Password" type="password">
                            <span class="help-block">
                                <strong id="password"></strong>
                            </span>

                      </div>
                    </li>
                    <li>
                      <div class="buttons-set">
                        <button type="submit" class="button" title="Login" name="send" id="send2"><span><span>Sign in</span></span></button>
                      </div>
                    </li>
                    <li>
                      <div class="buttons-set">
                        <span>Not a member? </span>
                        <a title="Sign Up" class="button" id="signup" href="{{ route('register') }}"><span><span>Sign up now</span></span></a>
                        <a href="" class="forgot-password">Forgot Your Password?</a>
                      </div>
                    </li>
                    <li>
                      <div class="or-img"><img class="img-responsive orimg" src="{{asset('assets/img/or.png')}}"></div>
                    </li>
                    <li>
                      <p class="customer-fb-lgn"><a href="/login/facebook">Sign in with facebook</a></p>
                    </li>
                    <li>
                      <p class="customer-gpls-lgn"><a href="/login/google">Sign in with Google</a></p>

                    </li>
                  </ul>
                </div>

              </div>
            </div>
          </form>
        </div>
        <script type="text/javascript">
          function closePopupLogin() {
            jQuery("#loginpopup").hide();
            jQuery(".pop-up-login-overlay").hide();
            jQuery('body').css("overflow", "initial");
          }

          function openPopupLogin() {
            jQuery("#loginpopup").css("opacity", "1");
            jQuery("#loginpopup").show();
            jQuery(".pop-up-login-overlay").show();
            jQuery('body').css("overflow", "hidden");
          }
          var loginForm = jQuery("#login-form");

              loginForm.submit(function(e){
                jQuery.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });
                  e.preventDefault();
                  var formData = loginForm.serialize();
                  jQuery.ajax({
                      url:'login',
                      type:'POST',
                      data:formData,
                      success:function(data){
                          closePopupLogin()
                          location.reload();
                          // console.log(data);
                      },
                      error: function (data) {
                        if (data.responseJSON.message) {
                          var email = data.responseJSON.message;
                        }
                        jQuery('#email').html(email);
                        jQuery('#password').html(password);
                        jQuery('.input-text').addClass('has-error');
                          // console.log(data);
                      }
                  });
              });
        </script>

        <script type="text/javascript">
          jQuery(function() {
            var pgurl = window.location.href;
            jQuery(".campaign-menu a").each(function() {
              if (jQuery(this).attr("href") == pgurl || jQuery(this).attr("href") == '') {
                if ("main_camp_cat" == jQuery(this).attr("id")) {
                  jQuery(".camp-main-cat-img-active").show();
                  jQuery(".camp-main-cat-img").hide();
                } else {
                  jQuery(".camp-main-cat-img-active").hide();
                  jQuery(".camp-main-cat-img").show();
                }
                jQuery(this).addClass("active");
              }
            })
          });
        </script>
      </div>
    </div>
