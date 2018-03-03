<!DOCTYPE html>
<html id="top" class="js" lang="{{ app()->getLocale() }}">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Online Shopping </title>
        <meta name="keywords" content=""><meta name="robots" content="INDEX,FOLLOW">

        <link rel="icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">
        <link rel="shortcut icon" href="" type="image/x-icon">
        <meta http-equiv="" content="IE=edge">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/calendar-win2k-1.css') }}"> --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/menu.css') }}" media="all">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/menu_002.css') }}" media="all">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/widgets.css') }}" media="all">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}" media="all">
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/swiper.css') }} " media="all"> --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }} " media="all">
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.css') }} " media="all"> --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }} " media="all">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }} " media="all">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/em_responsive.css') }} " media="all">

        {{-- <link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/trackorder.css') }} " media="all"> --}}
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/em_ajaxcart.css') }} " media="all"> --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles17.css') }} " media="all">
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles_003.css') }} " media="all"> --}}
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/em_multidealpro.css') }} " media="all"> --}}
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/em_productlabels.css') }} " media="all"> --}}
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/em_quickshop.css') }} " media="all"> --}}
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/em_magnify_zoom.css') }} " media="all"> --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive-tabs.css') }} " media="all">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/button_002.css') }} " media="all">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/button.css') }} " media="all">
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/mirasvit_fpc.css') }} " media="all"> --}}
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/mirasvit_searchindex.css') }} " media="all"> --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }} " media="all">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/print.css') }} " media="print">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/in_style.css') }}" media="all">

        @yield('style-sheet')


        <script type="text/javascript" src="{{ asset('assets/js/prototype.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery-1.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/em_fix_check_browser.js') }} "></script>
        {{-- <script type="text/javascript" src="{{ asset('assets/js/ccard.js') }} "></script> --}}
        {{-- <script type="text/javascript" src="{{ asset('assets/js/validation.js') }} "></script> --}}
        {{-- <script type="text/javascript" src="{{ asset('assets/js/custom.js') }} "></script> --}}
        {{-- <script type="text/javascript" src="{{ asset('assets/js/builder.js') }} "></script> --}}
        {{-- <script type="text/javascript" src="{{ asset('assets/js/effects.js') }} "></script> --}}
        {{-- <script type="text/javascript" src="{{ asset('assets/js/dragdrop.js') }} "></script> --}}
        {{-- <script type="text/javascript" src="{{ asset('assets/js/controls.js') }} "></script> --}}
        {{-- <script type="text/javascript" src="{{ asset('assets/js/slider.js') }} "></script> --}}
        {{-- <script type="text/javascript" src="{{ asset('assets/js/js.js') }} "></script> --}}
        {{-- <script type="text/javascript" src="{{ asset('assets/js/form.js') }} "></script> --}}
        <script type="text/javascript" src="{{ asset('assets/js/menu_002.js') }} "></script>
        {{-- <script type="text/javascript" src="{{ asset('assets/js/translate.js') }} "></script> --}}
        <script type="text/javascript" src="{{ asset('assets/js/cookies.js') }} "></script>
        {{-- <script type="text/javascript" src="{{ asset('assets/js/ios-orientationchange-fix.js') }} "></script> --}}
        <script type="text/javascript" src="{{ asset('assets/js/jquery_004.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery_005.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }} "></script>
        {{-- <script type="text/javascript" src="{{ asset('assets/js/html5shiv.js') }} "></script> --}}
        {{-- <script type="text/javascript" src="{{ asset('assets/js/respond.js') }} "></script> --}}
        {{-- <script type="text/javascript" src="{{ asset('assets/js/product.js') }} "></script> --}}
        {{-- <script type="text/javascript" src="{{ asset('assets/js/configurable.js') }} "></script> --}}
        {{-- <script type="text/javascript" src="{{ asset('assets/js/calendar.js') }} "></script> --}}
        {{-- <script type="text/javascript" src="{{ asset('assets/js/calendar-setup.js') }} "></script> --}}
        <script type="text/javascript" src="{{ asset('assets/js/jquery-noconflict.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery_007.js') }} "></script>
        {{-- <script type="text/javascript" src="{{ asset('assets/js/et_currencymanager_round.js') }} "></script> --}}
        <script type="text/javascript" src="{{ asset('assets/js/iwd-jquery-2.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/modal.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery_002.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/swiper.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/swiper_002.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/progressbar.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/menu.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/selectUl.js') }} "></script>
        {{-- <script type="text/javascript" src="{{ asset('assets/js/ajaxaddto.js') }} "></script> --}}
        <script type="text/javascript" src="{{ asset('assets/js/owl.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/em0131.js') }} "></script>
        {{-- <script type="text/javascript" src="{{ asset('assets/js/bundle.js') }} "></script> --}}
        <script type="text/javascript" src="{{ asset('assets/js/jquery_003.js') }} "></script>
        {{-- <script type="text/javascript" src="{{ asset('assets/js/lightbox.js') }} "></script> --}}
        {{-- <script type="text/javascript" src=" {{ asset('assets/js/em_ajaxcart.js') }} "></script> --}}
        {{-- <script type="text/javascript" src="{{ asset('assets/js/isotope.js') }} "></script> --}}
        <script type="text/javascript" src="{{ asset('assets/js/jquery_006.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/countdown.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/em_multidealpro.js') }} "></script>
        {{-- <script type="text/javascript" src="{{ asset('assets/js/msrp.js') }} "></script> --}}
        {{-- <script type="text/javascript" src="{{ asset('assets/js/em_quickshop.js') }}"></script> --}}
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

        <link href="{{ asset('assets/css/css_002.css') }}" rel="stylesheet" type="text/css"> <!-- Add Css File -->
        <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/css/style_marketdeal.css') }}"> <!-- Add Custom Css -->

    </head>
    <div class="wrapper ">
            <noscript><div class="global-site-notice noscript">
                <div class="notice-inner">
                    <p> <strong>JavaScript seems to be disabled in your browser.</strong><br /> You must have JavaScript enabled in your browser to utilize the functionality of this website.</p>
                </div>
            </div>
            </noscript>
            <div class="page one-column">
                <div class="em-wrapper-header">
                    <style type="text/css">
                        @media(min-width: 768px) {
                            #em-mheader.visible-xs
                            {
                                display: none;
                            }
                        }
                        @media(max-width: 767px) {
                            .display-tablet
                            {
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
                                <div class="em-logo"><a href="" title="" class="logo"><strong>example.com</strong><img src="{{ asset("assets/img/logo-s.png") }}" alt=""></a></div>
                            </div>
                            <div class="col-xs-11">
                                <div class="em-top-search">
                                    <div id="top-search-mobile" class="em-header-search-mobile">
                                        <div id="move-search"><div class="em-wrapper-js-search">
                                                <div class="em-wrapper-search em-no-category-search">
                                                    <a class="hidden-xs em-search-icon" title="Search" href="javascript:void(0);"><span>Search</span></a>
                                                    <div class="em-container-js-search" style="display: none;">
                                                        <form id="search_mini_form" action="" method="get">
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
                                                (function ($) {
                                                    function getWindowWidth() {
                                                        var w = window;
                                                        var d = document;
                                                        var e = d.documentElement;
                                                        var g = d.getElementsByTagName('body')[0];
                                                        var x = w.innerWidth || e.clientWidth || g.clientWidth;
                                                        return x;
                                                    }
                                                    ;

                                                    var timeoutSearch = null;
                                                    function hideSearch(e) {
                                                        var $_container = e.children().find('.em-container-js-search');
                                                        if (timeoutSearch)
                                                            clearTimeout(timeoutSearch);
                                                        timeoutSearch = setTimeout(function () {
                                                            timeoutSearch = null;
                                                            $_container.hide(300, function () {
                                                                $(this).css('overflow', 'inherit');
                                                            });
                                                        }, 200);
                                                    }
                                                    function showSearch(e) {
                                                        var $_container = e.children().find('.em-container-js-search');
                                                        if (timeoutSearch)
                                                            clearTimeout(timeoutSearch);
                                                        timeoutSearch = setTimeout(function () {
                                                            timeoutSearch = null;
                                                            $_container.show(300, function () {
                                                                $(this).css('overflow', 'inherit');
                                                            });
                                                        }, 200);
                                                    }

                                                    $(window).resize(function () {
                                                        var wi = getWindowWidth();
                                                        var $_emSearch = $(".em-search-style01");
                                                        if (wi <= 767) {
                                                            $_emSearch.unbind();
                                                        } else {
                                                            $_emSearch.bind('mouseover', function (e) {
                                                                e.preventDefault();
                                                                var $_this = $(this);
                                                                showSearch($_this);
                                                            }).bind('mouseout', function (e) {
                                                                e.preventDefault();
                                                                var $_this = $(this);
                                                                hideSearch($_this);
                                                            });
                                                        }
                                                    });

                                                    $(document).ready(function () {
                                                        var wi = getWindowWidth();
                                                        var $_emSearch = $(".em-search-style01");
                                                        if (wi <= 767) {
                                                            $_emSearch.unbind();
                                                        } else {
                                                            $_emSearch.bind('mouseover', function (e) {
                                                                e.preventDefault();
                                                                var $_this = $(this);
                                                                showSearch($_this);
                                                            }).bind('mouseout', function (e) {
                                                                e.preventDefault();
                                                                var $_this = $(this);
                                                                hideSearch($_this);
                                                            });
                                                        }
                                                    });

                                                })(jQuery);
                                            </script>
                                            <style type="text/css">
                                                .em-header-search-mobile .em-container-js-search {display:block !important}
                                            </style></div></div>
                                </div>
                            </div>

                            <div class="col-xs-9">

                                <ul class="top-header-link links">


                                    <li class="first col-sm-8 em-clear-padding">
                                        <a title="Log In" class="login-link fa fa-user" onclick="openPopupLogin();"></a>
                                    </li>

                                    <li class="col-sm-8 em-clear-padding">
                                        <a href="" class="checkout-link fa fa-shopping-cart"></a>
                                    </li>


                                    <li class="last col-sm-8 em-clear-padding">
                                        <style> @media(max-width:767px)
                                            {
                                                .menu
                                                {
                                                    font-family: Arial, Verdana;
                                                    font-size: 14px;
                                                    margin: 0;
                                                    padding: 0;
                                                    list-style: none;
                                                }.menu li
                                                {
                                                    display: block;
                                                    position: relative;
                                                    float: left;
                                                }li .menu
                                                {
                                                    display: none;
                                                }.menu li a
                                                {
                                                    display: block;
                                                    text-decoration: none;
                                                    color: #ffffff;
                                                    border-top: 1px solid #ffffff;
                                                    padding: 5px 15px 5px 15px;
                                                    background: #ffffff;
                                                    margin-left: 1px;
                                                    white-space: nowrap;
                                                }.menu li a:hover
                                                {
                                                    background: #0198d1;
                                                }
                                                li:hover .menu
                                                {
                                                    display: block;
                                                    position: absolute;
                                                    z-index:10;
                                                }li:hover li
                                                {
                                                    float: none;
                                                    font-size: 11px;
                                                }
                                                .syn-default-lan
                                                {
                                                    background: #ed4923 none repeat scroll 0 0;
                                                    border: 0 none;
                                                    border-radius: 50%;
                                                    display: inline-block;
                                                    height: 30px;
                                                    line-height: 34px;
                                                    text-align: center;
                                                    width: 30px;}
                                                .syn-default-lan > img {
                                                    width: 32px;
                                                    height: 32px;
                                                    border-radius: 50%;
                                                    top: -4px;
                                                    position: relative;
                                                    border:2px solid #ffffff;
                                                }
                                                li:hover li a:hover
                                                {
                                                    background: #0198d1;
                                                }.menu {
                                                    right: -22px;
                                                    top: 20px;
                                                }
                                            } </style>
                                        <a class="syn-default-lan" href="#">
                                            <img alt="english" src=" {{ asset('assets/img/english.png') }}">
                                        </a>
                                        <ul class="menu">
                                            <li class="selected">
                                                <a href="" title="English">
                                                    <img alt="english" src=" {{ asset('assets/img/english.png') }}">
                                                </a>
                                            </li>
                                            <li class="">
                                                    <a href="" title="Bangla">
                                                        <img alt="bangla" src=" {{ asset('assets/img/bangla.png') }}">
                                                    </a>
                                            </li>
                                        </ul> 											</li>


                                </ul>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        (function ($) {
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
                            }
                            ;
                            function fixNavOverFlow() {
                                var $_iconNav = $('#em-mheader-menu-icon');
                                var elem = $('#em-mheader-menu-content');
                                var $_parent = $('#em-mheader-wrapper-menu');
                                $_iconNav.click(function (e) {
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
                                    $_parent.on("swipeleft", function () {
                                        var self = $(this);
                                        if (self.hasClass('active')) {
                                            elem.removeClass('show');
                                            $_iconNav.removeClass('active');
                                            self.removeClass('active');
                                        }
                                    });
                                }
                            }
                            ;
                            $(document).ready(function () {
                                if (EM.SETTING.DISABLE_RESPONSIVE != 0) {
                                    fixNavigationMobileView();
                                    fixNavOverFlow();
                                }
                            });
                            $(window).resize($.throttle(300, function () {
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
                                        <a href="" title="" class="logo">
                                            <strong>example.com</strong>
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
                                                <a onclick="openPopupLogin();" class="link-account" id="link-login" title="Login">Sign In</a>
                                            </div>
                                        </div>
                                        <div class="help-link f-left">
                                            <div id="em-help-link" class="em-help">
                                                <a href="" class="link-help" id="link-help" title="Help">Need Help</a>

                                                <div id="syn-help-link" class="syn-help-policy" style="display: none;">
                                                    <div class="block-content">
                                                        <ul class="need-help-links">
                                                            <li class="em-links-item"><a title="Return Policy" href=""><span>Returns and Replacement</span></a></li>
                                                            <li class="em-links-item"><a title="Warranty policy" href=""><span>Warranty policy</span></a></li>
                                                            <li class="em-links-item"><a title="FAQ" href=""><span>FAQ</span></a></li>
                                                            <li class="em-links-item"><a title="Privacy Policy" href=""><span>Privacy Policy</span></a></li>
                                                            <li class="em-links-item"><a title="Cookie Policy" href=""><span>Cookie Policy</span></a></li>
                                                            <li class="em-links-item"><a title="Contact us" href=""><span>Contact us</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <script type="text/javascript">
                                                    (function ($) {
                                                        function effectHelp() {
                                                            var pHelp = $('#syn-help-link');
                                                            var pLink = $('#link-help');
                                                            var pDivLink = $('#em-help-link');

                                                            if (pHelp.length > 0) {
                                                                if (isMobile) {

                                                                    pLink.attr('href', 'javascript:void(0);');
                                                                    pLink.click(function (e) {
                                                                        pHelp.slideToggle();
                                                                    });
                                                                } else {
                                                                    var tmlink;

                                                                    function showlink(el) {
                                                                        clearTimeout(tmlink);
                                                                        tmlink = setTimeout(function () {
                                                                            el.slideDown();
                                                                        }, 200);
                                                                    }
                                                                    function hidelink(el) {
                                                                        clearTimeout(tmlink);
                                                                        tmlink = setTimeout(function () {
                                                                            el.slideUp();
                                                                        }, 200);
                                                                    }
                                                                    pDivLink.mouseover(function () {
                                                                        showlink(pHelp);
                                                                    });
                                                                    pDivLink.mouseout(function () {
                                                                        hidelink(pHelp);
                                                                    });
                                                                }
                                                            }
                                                        }
                                                        $(document).ready(function () {
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
                                                        <a class="em-amount-js-topcart em-amount-topcart" title="Shopping Cart" href="">
                                                            <span class="em-top-cart-text"> Cart </span>
                                                            <span class="em-topcart-text">My Cart:</span>
                                                            <span class="em-topcart-qty">{{ Cart::count() }}</span>
                                                        </a>
                                                    </div>

                                                    <div class="em-container-js-topcart topcart-popup" style="display:none">
                                                        <div class="topcart-popup-content">
                                                            <p class="em-block-subtitle">Shopping Cart</p>
                                                            @if (Cart::count() == 0)
                                                              <div class="topcart-content">
                                                              <p class="amount-content ">You have no items in your shopping cart.</p>
                                                              </div>
                                                            @else
                                                              <div class="topcart-content">
                                                                <p class="amount-content ">There is <a href="">{{ Cart::count() }} item</a> in your shopping cart.</p>
                                                                    <ol class="em-topcart-list">
                                                                      @foreach (Cart::content() as $row)
                                                                        {{-- {{ $row->name }} --}}
                                                                        <li class="item">
                                                                          <a href="" title="{{ $row->name }}" class="product-image">
                                                                            <img src="{{ asset('images/'.$row->model->image0) }}" width="135" alt="{{ $row->name }}">
                                                                          </a>
                                                                          <div class="product-details">
                                                                            <a href="" title="Remove This Item" onclick="return confirm('Are you sure you would like to remove this item from the shopping cart?');" class="btn-remove">Remove This Item</a>
                                                                            <a href="" title="Edit item" class="btn-edit">Edit item</a>
                                                                            <p class="product-name">
                                                                              <a href="">{{ $row->name }}</a></p>
                                                                            <p class="sku">{{ $row->model->sku }}</p>
                                                                            <strong>{{ Cart::count() }}</strong> x<span class="price">৳{{ $row->price }}</span>
                                                                              <div class="dd-truncated">
                                                                                <div class="truncated">
                                                                                  <div class="truncated_full_value">
                                                                                    <dl class="item-options">
                                                                                      <dt>Color</dt>
                                                                                        <dd>{{ $row->model->color }}</dd>
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
                                                                <p class="subtotal"><span class="label">Cart Subtotal</span> <span class="price">৳{{ Cart::subtotal() }}</span></p>
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
                                                jQuery(function ($) {
                                                    function emTopCart() {
                                                        var sCartContent = $(".em-wrapper-js-topcart");
                                                        if (isMobile == true) {
                                                            sCartContent.unbind('click');
                                                            var sLink = $('.em-amount-js-topcart');
                                                            sLink.attr('href', 'javascript:void(0)');
                                                            sCartContent.click(function (event) {
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
                                                                timeout = setTimeout(function () {
                                                                    timeout = null;
                                                                    $_container.hide(300, function () {
                                                                        $(this).css('overflow', 'inherit');
                                                                    });
                                                                }, 200);
                                                            }
                                                            // Show Cart
                                                            function showCart(e) {
                                                                var $_container = e.children().find('.em-container-js-topcart');
                                                                if (timeout)
                                                                    clearTimeout(timeout);
                                                                timeout = setTimeout(function () {
                                                                    timeout = null;
                                                                    $_container.show(300, function () {
                                                                        $(this).css('overflow', 'inherit');
                                                                    });
                                                                }, 200);
                                                            }

                                                            sCartContent.bind('mouseover', function (e) {
                                                                e.preventDefault();
                                                                var $_this = $(this);
                                                                showCart($_this);
                                                            }).bind('mouseout', function (e) {
                                                                e.preventDefault();
                                                                var $_this = $(this);
                                                                hideCart($_this);
                                                            });
                                                        }
                                                    }
                                                    $(document).ready(function () {
                                                        emTopCart();
                                                    });
                                                });
                                            </script>					</div>
                                        <div class="em-language-currency row">
                                            <div class="col-sm-24">
                                                <div class="form-language toolbar-switch em-language-style01">
                                                    <div class="toolbar-title">
                                                        <select id="em-hoverUl-language" title="Your Language" onchange="window.location.href = this.value" class=".toolbar-switch" style="display: none;">
                                                            <option  value="" selected="selected">English</option>
                                                            <option value="">Bangla</option>
                                                        </select>
                                                    </div>

                                                </div>
                                                <script type="text/javascript">
                                                    (function ($) {
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
                                                        $(document).ready(function () {
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
                                                <a href="" title="" class="logo">
                                                    <img src=" {{ asset('assets/img/logo-s.png') }}" alt="">
                                                </a>
                                            </div>

                                            <div class="em-menu-hoz col-sm-24">
                                                <div id="em-main-megamenu">

                                                    <div class="em-menu"><div class="megamenu-wrapper wrapper-6_8644 em-menu-mobile">
                                                            <div class="em_nav" id="toogle_menu_6_8644">
                                                              <ul class="hnav effect-menu">
                                                                <li class="menu-item-link menu-item-depth-0  menu-item-parent">
                                                                  <a class="em-menu-link" href="mobile-tablet.html/index.html"><span>Mobiles & Tablets</span></a>
                                                                  <ul class="menu-container">
                                                                    <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col19 grid_22 bkg-menu01 menu-item-parent" style="">
                                                                      <ul class="menu-container">
                                                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-7 menu-item-parent" style="">
                                                                          <ul class="menu-container">

                                                                            <li class="menu-item-text menu-item-depth-3 ">
                                                                              <h5>
                                                                            <a href="mobile-tablet/mobile-smart-phone.html/index.html">
                                                                              <span style="color: #000000;">Mobile Phones</span>
                                                                            </a>
                                                                          </h5>
                                                                              <div class="row">
                                                                                <div class="col-sm-12">
                                                                                  <ul class="list-text">
                                                                                    <li><a href="mobile-tablet/mobile-smart-phone/iphone.html/index.html">iPhone</a></li>
                                                                                    <li><a href="mobile-tablet/mobile-smart-phone/samsung.html/index.html">Samsung</a></li>
                                                                                    <li><a href="mobile-tablet/mobile-smart-phone/nokia.html/index.html">Nokia</a></li>
                                                                                    <li><a href="mobile-tablet/mobile-smart-phone/huawei.html/index.html">Huawei</a></li>
                                                                                    <li><a href="mobile-tablet/mobile-smart-phone/xiaomi.html/index.html">Xiaomi</a></li>
                                                                                    <li><a href="mobile-tablet/mobile-smart-phone/lg.html/index.html">LG</a></li>
                                                                                    <li><a href="mobile-tablet/mobile-smart-phone/htc.html/index.html">HTC</a></li>
                                                                                    <li><a href="mobile-tablet/mobile-smart-phone/lenovo.html/index.html">Lenovo</a></li>
                                                                                    <li><a href="mobile-tablet/mobile-smart-phone/lava.html/index.html">LAVA</a></li>
                                                                                    <li><a href="mobile-tablet/mobile-smart-phone/micromax.html/index.html">Micromax</a></li>
                                                                                    <li><a href="mobile-tablet/mobile-smart-phone/asus.html/index.html">Asus</a></li>
                                                                                    <li><a href="mobile-tablet/mobile-smart-phone/helio.html/index.html">Helio</a></li>
                                                                                  </ul>
                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                  <ul class="list-text">
                                                                                    <li><a href="mobile-tablet/mobile-smart-phone/blackberry.html/index.html">BlackBerry</a></li>
                                                                                    <li><a href="mobile-tablet/mobile-smart-phone/oneplus.html/index.html">OnePlus</a></li>
                                                                                    <li><a href="mobile-tablet/mobile-smart-phone/symphony.html/index.html">Symphony</a></li>
                                                                                    <li><a href="mobile-tablet/mobile-smart-phone/maximus.html/index.html">Maximus</a></li>
                                                                                    <li><a href="mobile-tablet/mobile-smart-phone/meizu.html/index.html">Meizu</a></li>
                                                                                    <li><a href="mobile-tablet/mobile-smart-phone/we.html/index.html">WE</a></li>
                                                                                    <li><a href="mobile-tablet/mobile-smart-phone/infinix.html/index.html">Infinix</a></li>
                                                                                    <li><a href="mobile-tablet/mobile-smart-phone/linnex.html/index.html">Linnex</a></li>
                                                                                    <li><a href="mobile-tablet/mobile-smart-phone/inova.html/index.html">INOVA</a></li>
                                                                                  </ul>
                                                                                </div>
                                                                              </div>
                                                                            </li>
                                                                          </ul>
                                                                        </li>
                                                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-3 menu-item-parent" style="">
                                                                          <ul class="menu-container">
                                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                              <h5>
                                                                            <a href="mobile-tablet/tablet.html/index.html">
                                                                            <span style="color: #000000;">Tablets</span>
                                                                            </a>
                                                                          </h5>
                                                                              <ul class="list-text">
                                                                                <li><a href="mobile-tablet/tablet/apple.html/index.html">Apple</a></li>
                                                                                <li><a href="mobile-tablet/tablet/samsung.html/index.html">Samsung</a></li>
                                                                                <li><a href="mobile-tablet/tablet/lenovo.html/index.html">Lenovo</a></li>
                                                                                <li><a href="mobile-tablet/tablet/huawei.html/index.html">Huawei</a></li>
                                                                                <li><a href="mobile-tablet/tablet/symphony.html/index.html">Symphony</a></li>
                                                                                <li><a href="mobile-tablet/tablet/asus.html/index.html">Asus</a></li>
                                                                                <li><a href="mobile-tablet/tablet/ainol.html/index.html">Ainol</a></li>
                                                                              </ul>
                                                                            </li>
                                                                          </ul>
                                                                        </li>
                                                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-4 menu-item-parent" style="">
                                                                          <ul class="menu-container">
                                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                              <h5>
                                                                            <a href="mobile-tablet/feature-phone.html/index.html"><span style="color: #000000;">Feature Phones</span></a>
                                                                          </h5>
                                                                              <ul class="list-text">
                                                                                <li><a href="mobile-tablet/feature-phone/nokia.html/index.html">Nokia</a></li>
                                                                                <li><a href="mobile-tablet/feature-phone/samsung.html/index.html">Samsung</a></li>
                                                                                <li><a href="mobile-tablet/feature-phone/symphony.html/index.html">Symphony </a></li>
                                                                                <li><a href="mobile-tablet/feature-phone/maximus.html/index.html">Maximus</a></li>
                                                                                <li><a href="mobile-tablet/feature-phone/micromax.html/index.html">Micromax</a></li>
                                                                                <li><a href="mobile-tablet/feature-phone/metrocem.html/index.html">Metrocem</a></li>
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
                                                                              <h5><a href="mobile-tablet/mobile-tablet-accessories.html/index.html"><span style="color: #000000;">Mobile & Tablet Accessories</span></a></h5>
                                                                              <div class="row">
                                                                                <div class="col-sm-12">
                                                                                  <ul class="list-text">
                                                                                    <li><a href="mobile-tablet/mobile-tablet-accessories/flip-cover.html/index.html">Flip Cover</a></li>
                                                                                    <li><a href="mobile-tablet/mobile-tablet-accessories/back-cover.html/index.html">Back Cover</a></li>
                                                                                    <li><a href="mobile-tablet/mobile-tablet-accessories/screen-protector.html/index.html">Screen Protector</a></li>
                                                                                    <li><a href="mobile-tablet/mobile-tablet-accessories/charger.html/index.html">Charger</a></li>
                                                                                    <li><a href="mobile-tablet/mobile-tablet-accessories/power-bank.html/index.html">Power Bank</a></li>
                                                                                    <li><a href="mobile-tablet/mobile-tablet-accessories/selfie-stick.html/index.html">Selfie Stick</a></li>
                                                                                    <li><a href="mobile-tablet/mobile-tablet-accessories/otg-cables.html/index.html">OTG & Cables </a></li>
                                                                                    <li><a href="mobile-tablet/mobile-tablet-accessories/headphones.html/index.html">Headphones</a></li>
                                                                                    <li><a href="mobile-tablet/mobile-tablet-accessories/bluetooth-speaker.html/index.html">Bluetooth Speaker</a></li>
                                                                                    <li><a href="mobile-tablet/mobile-tablet-accessories/memory-card.html/index.html">Memory Card</a></li>
                                                                                    <li><a href="mobile-tablet/mobile-tablet-accessories/smart-watch.html/index.html">Smart Watch</a></li>
                                                                                    <li><a href="mobile-tablet/mobile-tablet-accessories/battery.html/index.html">Battery</a></li>

                                                                                  </ul>
                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                  <ul class="list-text">
                                                                                    <li><a href="mobile-tablet/mobile-tablet-accessories/vr-box.html/index.html">VR Box</a></li>
                                                                                    <li><a href="mobile-tablet/mobile-tablet-accessories/wearable.html/index.html">Wearables</a></li>
                                                                                  </ul>
                                                                                </div>
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
                                                                  <a class="em-menu-link" href="computer-pc.html/index.html"><span>Computers</span></a>
                                                                  <ul class="menu-container">
                                                                    <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col19 grid_22 bkg-menu01 menu-item-parent" style="">
                                                                      <ul class="menu-container">
                                                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-5 menu-item-parent" style="">
                                                                          <ul class="menu-container">
                                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                              <ul class="list-text">

                                                                                <li>
                                                                                  <h5><a href="computer-pc/desktop.html/index.html"><span style="color: #000000;">Desktop Computers</span></a></h5></li>
                                                                                <li>
                                                                                  <h5><a href="computer-pc/laptop-notebook.html/index.html"><span style="color: #000000;">Laptops & Notebooks</span></a></h5></li>
                                                                                <li>
                                                                                  <h5><a href="computer-pc/apple-mac.html/index.html"><span style="color: #000000;">Apple Mac</span></a></h5></li>
                                                                                <li>
                                                                                  <h5><a href="computer-pc/apple-accessories.html/index.html"><span style="color: #000000;">Apple Accessories</span></a></h5></li>
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
                                                                              <h5><a href="computer-pc/computer-accessories.html/index.html"><span style="color: #000000;">Computer Accessories</span></a></h5>
                                                                              <div class="row">
                                                                                <div class="col-sm-8">
                                                                                  <ul class="list-text">
                                                                                    <li><a href="computer-pc/computer-accessories/printer.html/index.html">Printer</a></li>
                                                                                    <li><a href="computer-pc/computer-accessories/printer-accessories.html/index.html">Printer Accessories</a></li>
                                                                                    <li><a href="computer-pc/computer-accessories/motherboard.html/index.html">Motherboard</a></li>
                                                                                    <li><a href="computer-pc/computer-accessories/monitor.html/index.html">Monitor</a></li>
                                                                                    <li><a href="computer-pc/computer-accessories/keyboard.html/index.html">Keyboard</a></li>
                                                                                    <li><a href="computer-pc/computer-accessories/mouse.html/index.html">Mouse</a></li>
                                                                                    <li><a href="computer-pc/computer-accessories/headphone-headset.html/index.html">Headphones & Headsets</a></li>
                                                                                    <li><a href="computer-pc/computer-accessories/graphics-card.html/index.html">Graphics Card</a></li>
                                                                                    <li><a href="computer-pc/computer-accessories/battery.html/index.html">Battery</a></li>
                                                                                    <li><a href="computer-pc/computer-accessories/pendrive.html/index.html">Pendrive</a></li>
                                                                                    <li><a href="computer-pc/computer-accessories/speaker.html/index.html">Speakers</a></li>
                                                                                    <li><a href="computer-pc/computer-accessories/hdd.html/index.html">HDD</a></li>
                                                                                  </ul>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                  <ul class="list-text">
                                                                                    <li><a href="computer-pc/computer-accessories/portable-hard-drive.html/index.html">Portable Hard Drive</a></li>
                                                                                    <li><a href="computer-pc/computer-accessories/power-supply.html/index.html">Power Supply</a></li>
                                                                                    <li><a href="computer-pc/computer-accessories/ram.html/index.html">Ram</a></li>
                                                                                    <li><a href="computer-pc/computer-accessories/webcam.html/index.html">Webcam</a></li>
                                                                                    <li><a href="computer-pc/computer-accessories/usb-port.html/index.html">USB Port</a></li>
                                                                                    <li><a href="computer-pc/computer-accessories/usb-cable.html/index.html">USB Cables</a></li>
                                                                                    <li><a href="computer-pc/computer-accessories/software-antivirus.html/index.html">Software & Antivirus</a></li>
                                                                                    <li><a href="computer-pc/computer-accessories/computer-case.html/index.html">Computer Cases</a></li>
                                                                                    <li><a href="computer-pc/computer-accessories/scanner.html/index.html">Scanners</a></li>
                                                                                    <li><a href="computer-pc/computer-accessories/usb-hub.html/index.html">USB Hubs</a></li>
                                                                                    <li><a href="computer-pc/computer-accessories/networking-accessories.html/index.html">Networking Accessories</a></li>
                                                                                    <li><a href="computer-pc/computer-accessories/projector.html/index.html">Projectors</a></li>
                                                                                  </ul>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                  <ul class="list-text">
                                                                                    <li><a href="computer-pc/computer-accessories/laptop-accessories.html/index.html">Laptop Accessories</a></li>
                                                                                    <li><a href="computer-pc/computer-accessories/tv-card.html/index.html">TV Cards</a></li>
                                                                                  </ul>
                                                                                </div>
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
                                                                  <a class="em-menu-link" href="electronics-appliances.html/index.html"><span>Electronics & Appliances</span></a>
                                                                  <ul class="menu-container">
                                                                    <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col21 grid_21 bkg-menu01 menu-item-parent" style="">
                                                                      <ul class="menu-container">
                                                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-4 menu-item-parent" style="">
                                                                          <ul class="menu-container">
                                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                              <h5><a href="electronics-appliances/television.html/index.html"><span style="color: #000000;">Televisions</span></a></h5>
                                                                              <ul class="list-text">
                                                                                <li><a href="electronics-appliances/television/led-tv.html/index.html">LED TV</a></li>
                                                                                <li><a href="electronics-appliances/television/smart-tv.html/index.html">Smart TV</a></li>
                                                                                <li><a href="electronics-appliances/television/3d-tv.html/index.html">3D TV</a></li>
                                                                                <li><a href="electronics-appliances/television/tv-accessories.html/index.html">TV Accessories</a></li>
                                                                              </ul>
                                                                              &nbsp;
                                                                              <h5><a href="electronics-appliances/security-system.html/index.html"><span style="color: #000000;">Security Systems</span></a></h5>
                                                                              <ul class="list-text">
                                                                                <li><a href="electronics-appliances/security-system/security-camera.html/index.html">Security Cameras</a></li>
                                                                                <li><a href="electronics-appliances/security-system/alarm-system.html/index.html">Alarm System</a></li>
                                                                                <li><a href="electronics-appliances/security-system/door-security.html/index.html">Door Security</a></li>
                                                                                <li><a href="electronics-appliances/security-system/gate-security.html/index.html">Gate Security</a></li>
                                                                                <li><a href="electronics-appliances/security-system/retail-solution.html/index.html">Retail Solutions</a></li>
                                                                                <li><a href="electronics-appliances/security-system/access-control-system.html/index.html">Access Control Systems</a></li>
                                                                                <li><a href="electronics-appliances/security-system/wireless-sensors.html/index.html">Wireless Sensors</a></li>
                                                                                <li><a href="electronics-appliances/security-system/gps-tracker.html/index.html">GPS Trackers</a></li>
                                                                                <li><a href="electronics-appliances/security-system/motion-sensors-detector.html/index.html">Motion Sensors & Detectors</a></li>
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
                                                                              <h5><a href="electronics-appliances/home-appliance.html/index.html"><span style="color: #000000;">Home Appliances</span></a></h5>
                                                                              <ul class="list-text">
                                                                                <li><a href="electronics-appliances/home-appliance/air-conditioner.html/index.html">Air Conditioner</a></li>
                                                                                <li><a href="electronics-appliances/home-appliance/air-cooler.html/index.html">Air Cooler</a></li>
                                                                                <li><a href="electronics-appliances/home-appliance/ips.html/index.html">IPS</a></li>
                                                                                <li><a href="electronics-appliances/home-appliance/washing-machine.html/index.html">Washing Machine</a></li>
                                                                                <li><a href="electronics-appliances/home-appliance/refrigerator.html/index.html">Refrigerator</a></li>
                                                                                <li><a href="electronics-appliances/home-appliance/dryer.html/index.html">Dryer</a></li>
                                                                                <li><a href="electronics-appliances/home-appliance/iron.html/index.html">Iron</a></li>
                                                                                <li><a href="electronics-appliances/home-appliance/room-heater.html/index.html">Room Heater</a></li>
                                                                                <li><a href="electronics-appliances/home-appliance/hot-water-system.html/index.html">Water Heater</a></li>
                                                                                <li><a href="electronics-appliances/cleaning-supplies-tool/vacuum-cleaner.html/index.html">Vacuum Cleaners</a></li>
                                                                                <li><a href="electronics-appliances/home-appliance/water-filter.html/index.html">Water Filter</a></li>
                                                                                <li><a href="electronics-appliances/home-appliance/air-purifier.html/index.html">Air Purifier</a></li>
                                                                                <li><a href="electronics-appliances/home-appliance/landline-phone.html/index.html">Landline Phones</a></li>
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
                                                                              <h5><a href="electronics-appliances/kitchen-appliance.html/index.html"><span style="color: #000000;">Kitchen Appliances</span></a></h5>
                                                                              <div class="row">
                                                                                <div class="col-sm-12">
                                                                                  <ul class="list-text">
                                                                                    <li><a href="electronics-appliances/kitchen-appliance/microwave-oven.html/index.html">Microwave Ovens</a></li>
                                                                                    <li><a href="electronics-appliances/kitchen-appliance/blender.html/index.html">Blender</a></li>
                                                                                    <li><a href="electronics-appliances/kitchen-appliance/juicer.html/index.html">Juicer</a></li>
                                                                                    <li><a href="electronics-appliances/kitchen-appliance/coffee-maker.html/index.html">Coffee Maker</a></li>
                                                                                    <li><a href="electronics-appliances/kitchen-appliance/toaster.html/index.html">Toaster</a></li>
                                                                                    <li><a href="electronics-appliances/kitchen-appliance/food-processor.html/index.html">Food Processor</a></li>
                                                                                    <li><a href="electronics-appliances/kitchen-appliance/induction-cooker.html/index.html">Induction Cooker</a></li>
                                                                                    <li><a href="electronics-appliances/kitchen-appliance/roti-maker.html/index.html">Roti Makers</a></li>
                                                                                    <li><a href="electronics-appliances/kitchen-appliance/rice-cooker.html/index.html">Rice Cooker</a></li>
                                                                                    <li><a href="electronics-appliances/kitchen-appliance/large-oven.html/index.html">Large Ovens</a></li>
                                                                                    <li><a href="electronics-appliances/kitchen-appliance/tandoori-grill-machine.html/index.html">Tandoori Grill Machine</a></li>
                                                                                    <li><a href="electronics-appliances/kitchen-appliance/pressure-cooker.html/index.html">Pressure Cooker</a></li>

                                                                                  </ul>
                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                  <ul class="list-text">
                                                                                    <li><a href="electronics-appliances/kitchen-appliance/gas-cooker.html/index.html">Gas Cooker</a></li>
                                                                                    <li><a href="electronics-appliances/kitchen-appliance/fryer.html/index.html">Fryer</a></li>
                                                                                    <li><a href="electronics-appliances/kitchen-appliance/dish-washer.html/index.html">Dish Washer</a></li>
                                                                                    <li><a href="electronics-appliances/kitchen-appliance/chimney-kitchen-hood.html/index.html">Chimney Kitchen Hood</a></li>
                                                                                    <li><a href="electronics-appliances/kitchen-appliance/small-kitchen-appliance.html/index.html">Small Kitchen Appliances</a></li>
                                                                                    <li><a href="electronics-appliances/kitchen-appliance/sandwich-maker.html/index.html">Sandwich Maker</a></li>
                                                                                    <li><a href="electronics-appliances/kitchen-appliance/gas-stove.html/index.html">Gas Stove</a></li>
                                                                                    <li><a href="electronics-appliances/kitchen-appliance/electric-oven.html/index.html">Electric Ovens</a></li>
                                                                                    <li><a href="electronics-appliances/kitchen-appliance/steam-oven.html/index.html">Steam Ovens</a></li>
                                                                                    <li><a href="electronics-appliances/kitchen-appliance/food-warmer-set.html/index.html">Food warmer set</a></li>
                                                                                    <li><a href="electronics-appliances/kitchen-appliance/kettle.html/index.html">Kettles</a></li>
                                                                                    <li><a href="electronics-appliances/kitchen-appliance/beater.html/index.html">Beater Machine</a></li>
                                                                                  </ul>
                                                                                </div>
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
                                                                              <h5><a href="electronics-appliances/cleaning-supplies-tool.html/index.html"><span style="color: #000000;">Cleaning Supplies & Tools</span></a></h5>

                                                                              <ul class="list-text">
                                                                                <li><a href="electronics-appliances/cleaning-supplies-tool/pressure-washer.html/index.html">Pressure Washer</a></li>
                                                                                <li><a href="electronics-appliances/cleaning-supplies-tool/vacuum-cleaner.html/index.html">Vacuum Cleaner</a></li>
                                                                                <li><a href="electronics-appliances/cleaning-supplies-tool/steam-cleaner.html/index.html">Steam Cleaner</a></li>
                                                                                <li><a href="electronics-appliances/cleaning-supplies-tool/window-cleaning.html/index.html">Window Cleaning</a></li>
                                                                                <li><a href="electronics-appliances/cleaning-supplies-tool/push-sweeper.html/index.html">Push Sweeper</a></li>
                                                                                <li><a href="electronics-appliances/cleaning-supplies-tool/floor-care.html/index.html">Floor Care</a></li>
                                                                                <li><a href="electronics-appliances/cleaning-supplies-tool/carpet-cleaner.html/index.html">Carpet Cleaners</a></li>


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
                                                                  <a class="em-menu-link" href="lifestyle-entertainment.html/index.html"><span>Entertainment</span></a>
                                                                  <ul class="menu-container">
                                                                    <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col18 grid_22 bkg-menu01 menu-item-parent" style="">
                                                                      <ul class="menu-container">
                                                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-4 menu-item-parent" style="">
                                                                          <ul class="menu-container">
                                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                              <h5><a href="lifestyle-entertainment/camera-camcorder.html/index.html"><span style="color: #000000;">Cameras</span></a></h5>
                                                                              <ul class="list-text">
                                                                                <li><a href="lifestyle-entertainment/camera-camcorder/dslr-camera.html/index.html">DSLR Cameras</a></li>
                                                                                <li><a href="lifestyle-entertainment/camera-camcorder/digital-camera.html/index.html">Digital Cameras</a></li>
                                                                                <li><a href="lifestyle-entertainment/camera-camcorder/accessories.html/index.html">Camera Accessories</a></li>
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
                                                                              <h5><a href="lifestyle-entertainment/audio-player-system.html/index.html"><span style="color: #000000;">Audio Players & Systems</span></a></h5>
                                                                              <ul class="list-text">
                                                                                <li><a href="lifestyle-entertainment/audio-player-system/home-theater-sound-system.html/index.html">Home Theater & Sound System</a></li>
                                                                                <li><a href="lifestyle-entertainment/audio-player-system/audio-recorder.html/index.html">Audio Recorders</a></li>
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
                                                                              <h5><a href="lifestyle-entertainment/gaming-console.html/index.html"><span style="color: #000000;">Gaming & Console</span></a></h5>

                                                                              <ul class="list-text">
                                                                                <li><a href="lifestyle-entertainment/gaming-console/xbox.html/index.html">Xbox</a></li>
                                                                                <li><a href="lifestyle-entertainment/gaming-console/controller.html/index.html">Controller</a></li>
                                                                                <li><a href="lifestyle-entertainment/gaming-console/gaming-dvd.html/index.html">Gaming DVDs</a></li>
                                                                                <li><a href="lifestyle-entertainment/gaming-console/gaming-accessories.html/index.html">Gaming Accessories</a></li>
                                                                                <li><a href="lifestyle-entertainment/gaming-console/gaming-mouse.html/index.html">Gaming Mouse</a></li>
                                                                                <li><a href="lifestyle-entertainment/gaming-console/gaming-keyboard.html/index.html">Gaming Keyboard</a></li>
                                                                                <li><a href="lifestyle-entertainment/gaming-console/console.html/index.html">Gaming Console</a></li>
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
                                                                                  <h5><a href="lifestyle-entertainment/toys-games.html/index.html"><span style="color: #000000;">Toys & Games</span></a></h5></li>
                                                                                <li>
                                                                                  <h5><a href="lifestyle-entertainment/fitness.html/index.html"><span style="color: #000000;">Fitness</span></a></h5></li>
                                                                                <li>
                                                                                  <h5><a href="lifestyle-entertainment/grooming-product.html/index.html"><span style="color: #000000;">Grooming Products</span></a></h5></li>
                                                                                <li>
                                                                                  <h5><a href="lifestyle-entertainment/vehicle.html/index.html"><span style="color: #000000;">Vehicles</span></a></h5></li>
                                                                                <li>
                                                                                  <h5><a href="lifestyle-entertainment/health-care-device.html/index.html"><span style="color: #000000;">Health Care Devices</span></a></h5></li>
                                                                                <li>
                                                                                  <h5><a href="lifestyle-entertainment/fidget-spinner.html/index.html"><span style="color: #000000;">Fidget Spinner</span></a></h5></li>

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
                                                                  <a class="em-menu-link" href="daily-need.html/index.html"><span>Daily Needs</span></a>
                                                                  <ul class="menu-container">
                                                                    <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col7 grid_10 bkg-menu01 menu-item-parent" style="">
                                                                      <ul class="menu-container">
                                                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-17 menu-item-parent" style="">
                                                                          <ul class="menu-container">
                                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                              <ul class="list-text">
                                                                                <li>
                                                                                  <h5><a href="daily-need/lighting.html/index.html"><span style="color: #000000;">Lighting & Bulbs</span></a></h5></li>
                                                                                <li>
                                                                                  <h5><a href="daily-need/fan.html/index.html"><span style="color: #000000;">Fans</span></a></h5></li>
                                                                                <li>
                                                                                  <h5><a href="daily-need/home-living.html/index.html"><span style="color: #000000;">Home & Living</span></a></h5></li>
                                                                                <li>
                                                                                  <h5><a href="daily-need/tools-hardware.html/index.html"><span style="color: #000000;">Tools & Hardware</span></a></h5></li>
                                                                                <li>
                                                                                  <h5><a href="daily-need/switch-socket.html/index.html"><span style="color: #000000;">Switch, Socket & Multi Plug</span></a></h5></li>
                                                                                <li>
                                                                                  <h5><a href="daily-need/pest-control.html/index.html"><span style="color: #000000;">Pest Control</span></a></h5></li>
                                                                                <li>
                                                                                  <h5><a href="daily-need/solar-power-product.html/index.html"><span style="color: #000000;">Solar Products</span></a></h5></li>
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
                                                                  <a class="em-menu-link" href="fashion-beauty.html/index.html"><span>Fashion & Beauty</span></a>
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
                                                                              <h5><a href="fashion-beauty/men/top-wear.html/index.html"><span style="color: #000000;">TOP WEAR</span></a></h5>
                                                                              <ul class="list-text">
                                                                                <li><a href="fashion-beauty/men/top-wear/t-shirt.html">T-Shirts</a></li>
                                                                                <li><a href="fashion-beauty/men/top-wear/casual-shirts.html">Casual Shirts</a></li>
                                                                                <li><a href="fashion-beauty/men/top-wear/formal-shirts.html">Formal Shirts</a></li>
                                                                                <li><a href="fashion-beauty/men/top-wear/hoodie-t-shirt.html">Hoodies</a></li>
                                                                                <li><a href="fashion-beauty/men/top-wear/jacket.html">Jackets</a></li>
                                                                                <li><a href="fashion-beauty/men/top-wear/sweater.html">Sweaters & Cardigans</a></li>
                                                                                <li><a href="fashion-beauty/men/top-wear/blazer.html">Blazer & Coats</a></li>
                                                                                <li><a href="fashion-beauty/men/top-wear/polo-shirts.html">Polo Shirts</a></li>
                                                                                <li><a href="fashion-beauty/men/top-wear/waist-coats.html">Waist Coats</a></li>
                                                                              </ul>
                                                                              &nbsp;
                                                                              <h5><a href="fashion-beauty/men/bottom-wear.html/index.html"><span style="color: #000000;">BOTTOM WEAR</span></a></h5>
                                                                              <ul class="list-text">
                                                                                <li><a href="fashion-beauty/men/bottom-wear/formal-pants.html">Formal Pants</a></li>
                                                                                <li><a href="fashion-beauty/men/bottom-wear/jeans.html">Jeans</a></li>
                                                                                <li><a href="fashion-beauty/men/bottom-wear/sports-bermudas.html">Sports & Bermudas</a></li>
                                                                                <li><a href="fashion-beauty/men/bottom-wear/trousers.html">Trousers</a></li>
                                                                              </ul>
                                                                              &nbsp;
                                                                              <h5><a href="fashion-beauty/men/traditional-wear.html/index.html"><span style="color: #000000;">Traditional Wear</span></a></h5>
                                                                              <ul class="list-text">
                                                                                <li><a href="fashion-beauty/men/traditional-wear/punjabi.html">Panjabi</a></li>
                                                                                <li><a href="fashion-beauty/men/traditional-wear/pajama.html">Pajama</a></li>
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
                                                                              <h5><a href="fashion-beauty/men/watch.html/index.html"><span style="color: #000000;">Men's Watches</span></a></h5> &nbsp;
                                                                              <h5><a href="fashion-beauty/men/accessories.html/index.html"><span style="color: #000000;">Accessories</span></a></h5>
                                                                              <ul class="list-text">
                                                                                <li><a href="fashion-beauty/men/accessories/bags-backpacks.html">Bags & Backpacks</a></li>
                                                                              </ul>
                                                                              &nbsp;
                                                                              <h5><a href="fashion-beauty/men/footwear.html/index.html"><span style="color: #000000;">Foot Wear</span></a></h5>
                                                                              <ul class="list-text">
                                                                                <li><a href="fashion-beauty/men/footwear/sandals-flip-flops.html">Sandals & Flip-flops</a></li>
                                                                              </ul>
                                                                              &nbsp;
                                                                              <h5><a href="fashion-beauty/men/fragrance.html"><span style="color: #000000;">Fragrance</span></a></h5>
                                                                              <ul class="list-text">
                                                                                <li><a href="fashion-beauty/men/fragrance/perfume.html">Perfume</a></li>
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
                                                                              <h5><a href="fashion-beauty/women/top-wear.html/index.html"><span style="color: #000000;">Top Wear</span></a></h5>
                                                                              <ul class="list-text">
                                                                                <li><a href="fashion-beauty/women/top-wear/hoodie-t-shirt.html">Hoodies</a></li>
                                                                                <li><a href="fashion-beauty/women/top-wear/coats-jackets.html">Coats & Jackets</a></li>
                                                                                <li><a href="fashion-beauty/women/top-wear/tunic.html">Tunic</a></li>
                                                                                <li><a href="fashion-beauty/women/top-wear/shrugs.html">Shrugs</a></li>
                                                                              </ul>

                                                                              &nbsp;
                                                                              <h5><a href="fashion-beauty/women/bottom-wear.html/index.html"><span style="color: #000000;">Bottom Wear</span></a></h5>
                                                                              <ul class="list-text">
                                                                                <li><a href="fashion-beauty/women/bottom-wear/leggings.html">Leggings</a></li>
                                                                                <li><a href="fashion-beauty/women/bottom-wear/pants.html">Pants</a></li>
                                                                                <li><a href="fashion-beauty/women/bottom-wear/palazzo.html">Palazzo</a></li>
                                                                              </ul>
                                                                              &nbsp;
                                                                              <h5><a href="fashion-beauty/women/traditional-wear.html/index.html"><span style="color: #000000;">Traditional Wear</span></a></h5>
                                                                              <ul class="list-text">
                                                                                <li><a href="fashion-beauty/women/traditional-wear/kurti-fatua.html">Kurti & Fatua</a></li>
                                                                                <li><a href="fashion-beauty/women/traditional-wear/salwar-kameez.html">Salwar Kameez</a></li>
                                                                                <li><a href="fashion-beauty/women/traditional-wear/boutique-dress.html">Boutique Dress</a></li>
                                                                              </ul>
                                                                              &nbsp;
                                                                              <h5><a href="fashion-beauty/women/footwear.html/index.html"><span style="color: #000000;">Footwear</span></a></h5>
                                                                              <ul class="list-text">
                                                                                <li><a href="fashion-beauty/women/footwear/sandals.html">Flats & Sandals</a></li>

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
                                                                              <h5><a href="fashion-beauty/women/watch.html/index.html"><span style="color: #000000;">Women's Watches</span></a></h5> &nbsp;
                                                                              <h5><a href="fashion-beauty/women/handbags-bags-wallets.html/index.html"><span style="color: #000000;">Handbags, Bags & Wallets</span></a></h5>
                                                                              <ul class="list-text">
                                                                                <li><a href="fashion-beauty/women/handbags-bags-wallets/handbags-totes.html">Handbags & Totes</a></li>
                                                                                <li><a href="fashion-beauty/women/handbags-bags-wallets/backpacks.html">Backpacks</a></li>

                                                                              </ul>
                                                                              &nbsp;
                                                                              <h5><a href="fashion-beauty/women/fragrance.html"><span style="color: #000000;">Fragrance</span></a></h5>
                                                                              <ul class="list-text">
                                                                                <li><a href="fashion-beauty/women/fragrance/perfume.html">Perfume</a></li>
                                                                                <li><a href="fashion-beauty/women/fragrance/body-mist.html">Body Mist</a></li>

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
                                                                              <h5><a href="fashion-beauty/women/face-makeup.html/index.html"><span style="color: #000000;">Face Makeup</span></a></h5>
                                                                              <ul class="list-text">
                                                                                <li><a href="fashion-beauty/women/face-makeup/foundations.html">Foundations</a></li>
                                                                                <li><a href="fashion-beauty/women/face-makeup/bb-cc-creams.html">BB & CC Cream</a></li>
                                                                                <li><a href="fashion-beauty/women/face-makeup/makeup-bases-primers.html">Primers</a></li>
                                                                                <li><a href="fashion-beauty/women/face-makeup/concealers.html">Concealer & Contouring</a></li>
                                                                                <li><a href="fashion-beauty/women/face-makeup/highlighter-illuminator.html">Highlighter & Bronzers</a></li>
                                                                                <li><a href="fashion-beauty/women/face-makeup/blushes.html">Blush</a></li>
                                                                                <li><a href="fashion-beauty/women/face-makeup/makeup-remover.html">Makeup Remover</a></li>
                                                                                <li><a href="fashion-beauty/women/face-makeup/compacts-powders.html">Compact & Powders</a></li>
                                                                                <li><a href="fashion-beauty/women/face-makeup/makeup-setting-finishing-spray.html">Make up setting sprays</a></li>

                                                                              </ul>
                                                                              &nbsp;
                                                                              <h5><a href="fashion-beauty/women/eyes.html/index.html"><span style="color: #000000;">EYE MAKEUP</span></a></h5>
                                                                              <ul class="list-text">
                                                                                <li><a href="fashion-beauty/women/eyes/eyebrow.html">Eye Brows Pencil & Palettes</a></li>
                                                                                <li><a href="fashion-beauty/women/eyes/eyeliners.html">Eye Liners & kajal</a></li>
                                                                                <li><a href="fashion-beauty/women/eyes/eyeshadows.html">Eye Shadows & Palettes</a></li>
                                                                                <li><a href="fashion-beauty/women/eyes/mascaras.html">Mascara</a></li>
                                                                              </ul>
                                                                              &nbsp;
                                                                              <h5><a href="fashion-beauty/women/hair-care.html/index.html"><span style="color: #000000;">Hair Care</span></a></h5>
                                                                              <ul class="list-text">
                                                                                <li><a href="fashion-beauty/women/hair-care/hair-oil.html">Hair Oil</a></li>
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
                                                                              <h5><a href="fashion-beauty/women/lips.html/index.html"><span style="color: #000000;">LIP MAKEUP</span></a></h5>
                                                                              <ul class="list-text">
                                                                                <li><a href="fashion-beauty/women/lips/lipstick.html">Lipstick</a></li>
                                                                                <li><a href="fashion-beauty/women/lips/lip-gloss.html">Lip gloss</a></li>
                                                                                <li><a href="fashion-beauty/women/lips/lip-liner.html">Lip Liner</a></li>
                                                                              </ul>
                                                                              &nbsp;
                                                                              <h5><a href="fashion-beauty/women/makeup-accessories.html/index.html"><span style="color: #000000;">Makeup Accessories</span></a></h5>
                                                                              <ul class="list-text">
                                                                                <li><a href="fashion-beauty/women/makeup-accessories/beauty-blender-sponge.html">Beauty Blender & Sponge</a></li>
                                                                                <li><a href="fashion-beauty/women/makeup-accessories/brush-sets.html">Brush Set</a></li>
                                                                                <li><a href="fashion-beauty/women/makeup-accessories/lip-brushes.html">Lip Brushes</a></li>
                                                                              </ul>
                                                                              &nbsp;
                                                                              <h5><a href="fashion-beauty/women/body-skin-care.html/index.html"><span style="color: #000000;">Body & Skin Care</span></a></h5>
                                                                              <ul class="list-text">

                                                                                <li><a href="fashion-beauty/women/body-skin-care/oil.html">Essential Oil</a></li>
                                                                                <li><a href="fashion-beauty/women/body-skin-care/face-mask.html">Face Mask</a></li>
                                                                                <li><a href="fashion-beauty/women/body-skin-care/face-wash.html">Face Wash</a></li>
                                                                              </ul>

                                                                              &nbsp;
                                                                              <h5><a href="fashion-beauty/women/nails.html/index.html"><span style="color: #000000;">NAILS</span></a></h5>
                                                                              <ul class="list-text">
                                                                                <li><a href="fashion-beauty/women/nails/nail-polishes.html">Nail Polish</a></li>
                                                                                <li><a href="fashion-beauty/women/nails/nail-remover.html">Nail polish removers</a></li>
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
                                                                  <a class="em-menu-link" href="daily-need.html/index.html"><span>Cars & Bikes</span></a>
                                                                  <ul class="menu-container">
                                                                    <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col7 grid_10 bkg-menu01 menu-item-parent" style="">
                                                                      <ul class="menu-container">
                                                                        <li class="menu-item-vbox menu-item-depth-2 col-sm-17 menu-item-parent" style="">
                                                                          <ul class="menu-container">
                                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                              <ul class="list-text">
                                                                                <li>
                                                                                  <h5><a href="daily-need/lighting.html/index.html"><span style="color: #000000;">Lighting & Bulbs</span></a></h5></li>
                                                                                <li>
                                                                                  <h5><a href="daily-need/fan.html/index.html"><span style="color: #000000;">Fans</span></a></h5></li>
                                                                                <li>
                                                                                  <h5><a href="daily-need/home-living.html/index.html"><span style="color: #000000;">Home & Living</span></a></h5></li>
                                                                                <li>
                                                                                  <h5><a href="daily-need/tools-hardware.html/index.html"><span style="color: #000000;">Tools & Hardware</span></a></h5></li>
                                                                                <li>
                                                                                  <h5><a href="daily-need/switch-socket.html/index.html"><span style="color: #000000;">Switch, Socket & Multi Plug</span></a></h5></li>
                                                                                <li>
                                                                                  <h5><a href="daily-need/pest-control.html/index.html"><span style="color: #000000;">Pest Control</span></a></h5></li>
                                                                                <li>
                                                                                  <h5><a href="daily-need/solar-power-product.html/index.html"><span style="color: #000000;">Solar Products</span></a></h5></li>
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
                                                            }
                                                            ;
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
                                                            }
                                                            ;

                                                            jQuery(document).ready(function () {
                                                                toogleMenuPro_6_8644();
                                                            });

                                                            jQuery(window).bind('resize orientationchange', function () {
                                                                if (EM.SETTING.DISABLE_RESPONSIVE != 0) {
                                                                    toogleMenuPro_6_8644();
                                                                }
                                                            });
                                                      </script>
                                                    </div>							</div>
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
                                                                <span class="em-topcart-qty">{{ Cart::count() }}</span>
                                                            </a>
                                                        </div>

                                                        <div class="em-container-js-topcart topcart-popup" style="display:none">
                                                            <div class="topcart-popup-content">
                                                                <p class="em-block-subtitle">Shopping Cart</p>

                                                                  @if (Cart::count() == 0)
                                                                    <div class="topcart-content">
                                                                    <p class="amount-content ">You have no items in your shopping cart.</p>
                                                                    </div>
                                                                  @else
                                                                    <div class="topcart-content">
                                                            					<p class="amount-content ">There is <a href="">{{ Cart::count() }} item</a> in your shopping cart.</p>
                                                            							<ol class="em-topcart-list">
                                                                            @foreach (Cart::content() as $row)
                                                                              {{-- {{ $row->name }} --}}
                                                                              <li class="item">
                                                                                <a href="" title="{{ $row->name }}" class="product-image">
                                                                                  <img src="{{ asset('images/'.$row->model->image0) }}" width="135" alt="{{ $row->name }}">
                                                                                </a>
                                                                                <div class="product-details">
                                                                                  <a href="" title="Remove This Item" onclick="return confirm('Are you sure you would like to remove this item from the shopping cart?');" class="btn-remove">Remove This Item</a>
                                                                                  <a href="" title="Edit item" class="btn-edit">Edit item</a>
                                                                                  <p class="product-name">
                                                                                    <a href="">{{ $row->name }}</a></p>
                                                                                  <p class="sku">{{ $row->model->sku }}</p>
                                                                                  <strong>{{ Cart::count() }}</strong> x<span class="price">৳{{ $row->price }}</span>
                                                                                    <div class="dd-truncated">
                                                                                      <div class="truncated">
                                                                                        <div class="truncated_full_value">
                                                                                          <dl class="item-options">
                                                                                            <dt>Color</dt>
                                                                                              <dd>{{ $row->model->color }}</dd>
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
                                                            					<p class="subtotal"><span class="label">Cart Subtotal</span> <span class="price">৳{{ Cart::subtotal() }}</span></p>
                                                              					<div class="wrapper_bottom_button">
                                                              						<button type="button" title="Checkout" class="button button-checkout" onclick=""><span><span>Checkout</span></span></button>
                                                              						<a href="" class="goto-cart"><span><span>My Cart</span></span></a>
                                                              					</div>
                                                            				</div>
                                                                  @endif



                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <script type="text/javascript">
                                                    jQuery(function ($) {
                                                        function emTopCart() {
                                                            var sCartContent = $(".em-wrapper-js-topcart");
                                                            if (isMobile == true) {
                                                                sCartContent.unbind('click');
                                                                var sLink = $('.em-amount-js-topcart');
                                                                sLink.attr('href', 'javascript:void(0)');
                                                                sCartContent.click(function (event) {
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
                                                                    timeout = setTimeout(function () {
                                                                        timeout = null;
                                                                        $_container.hide(300, function () {
                                                                            $(this).css('overflow', 'inherit');
                                                                        });
                                                                    }, 200);
                                                                }
                                                                // Show Cart
                                                                function showCart(e) {
                                                                    var $_container = e.children().find('.em-container-js-topcart');
                                                                    if (timeout)
                                                                        clearTimeout(timeout);
                                                                    timeout = setTimeout(function () {
                                                                        timeout = null;
                                                                        $_container.show(300, function () {
                                                                            $(this).css('overflow', 'inherit');
                                                                        });
                                                                    }, 200);
                                                                }

                                                                sCartContent.bind('mouseover', function (e) {
                                                                    e.preventDefault();
                                                                    var $_this = $(this);
                                                                    showCart($_this);
                                                                }).bind('mouseout', function (e) {
                                                                    e.preventDefault();
                                                                    var $_this = $(this);
                                                                    hideCart($_this);
                                                                });
                                                            }
                                                        }
                                                        $(document).ready(function () {
                                                            emTopCart();
                                                        });
                                                    });
                                                  </script>                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="display:none;" id="loginpopup" class="popup-login account-login">
                        <img onclick="closePopupLogin();" id="popuploginclose" src="{{ asset('assets/img/icon-close-circled-128.png')}}" class="popup-login-close">
                        <form action="" method="post" id="login-form" class="scaffold-form">
                            <div class="col2-set">
                                <div class="col-2 registered-users">
                                    <div class="content fieldset">
                                        <ul class="form-list">

                                            <li>
                                                <label for="username" class="required"><em>*</em>Email/Mobile</label>
                                                <div class="input-box">
                                                    <input name="login[username]" id="username" class="input-text required-entry validate" value="" title="Email/Mobile" type="text">
                                                </div>
                                            </li>

                                            <li>
                                                <label for="pass" class="required"><em>*</em>Password</label>
                                                <div class="input-box">
                                                    <input name="login[password]" class="input-text required-entry validate-password" id="pass" title="Password" type="password">
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
                                                    <a title="Sign Up" class="button" id="signup" href=""><span><span>Sign up now</span></span></a>
                                                    <a href="" class="forgot-password">Forgot Your Password?</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="or-img"><img class="img-responsive orimg" src="{{asset('assets/img/or.png')}}"></div>
                                            </li>
                                            <li>
                                                <p class="customer-fb-lgn"><a href="">Sign in with facebook</a></p>
                                            </li>
                                            <li>
                                                <p class="customer-gpls-lgn"><a href="">Sign in with Google</a></p>

                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                    <script type="text/javascript">
                        function closePopupLogin()
                        {
                            jQuery("#loginpopup").hide();
                            jQuery(".pop-up-login-overlay").hide();
                            jQuery('body').css("overflow", "initial");
                        }

                        function openPopupLogin()
                        {
                            jQuery("#loginpopup").css("opacity", "1");
                            jQuery("#loginpopup").show();
                            jQuery(".pop-up-login-overlay").show();
                            jQuery('body').css("overflow", "hidden");
                        }
                    </script>
                    <script type="text/javascript">
                        jQuery(function () {
                            var pgurl = window.location.href;
                            jQuery(".campaign-menu a").each(function () {
                                if (jQuery(this).attr("href") == pgurl || jQuery(this).attr("href") == '')
                                {
                                    if ("main_camp_cat" == jQuery(this).attr("id"))
                                    {
                                        jQuery(".camp-main-cat-img-active").show();
                                        jQuery(".camp-main-cat-img").hide();
                                    } else
                                    {
                                        jQuery(".camp-main-cat-img-active").hide();
                                        jQuery(".camp-main-cat-img").show();
                                    }
                                    jQuery(this).addClass("active");
                                }
                            })
                        });
                    </script>
                </div><!-- ======================================================== Message Block	- Start ======================================================== -->
            </div>
            <div class="msgs">
                <div class="container">
                </div>
            </div> <!-- ======================================================== Message Block	- End ======================================================== -->
