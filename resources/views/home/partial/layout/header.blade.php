<!DOCTYPE html>
<html id="top" class="js" lang="{{ app()->getLocale() }}">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Online Shopping </title>
        <meta name="keywords" content=""><meta name="robots" content="INDEX,FOLLOW">
        <meta property="og:site_name" content="">
        <link rel="icon" href="" type="image/x-icon">
        <link rel="shortcut icon" href="" type="image/x-icon">
        <meta http-equiv="" content="IE=edge">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/calendar-win2k-1.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/menu.css') }}" media="all">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/menu_002.css') }}" media="all">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/widgets.css') }}" media="all">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}" media="all">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/swiper.css') }} " media="all">
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }} " media="all"> --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.css') }} " media="all">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }} " media="all">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }} " media="all">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/em_responsive.css') }} " media="all">

        {{-- <link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/trackorder.css') }} " media="all"> --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/em_ajaxcart.css') }} " media="all">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles17.css') }} " media="all">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles_003.css') }} " media="all">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/em_multidealpro.css') }} " media="all">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/em_productlabels.css') }} " media="all">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/em_quickshop.css') }} " media="all">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/em_magnify_zoom.css') }} " media="all">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive-tabs.css') }} " media="all">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/button_002.css') }} " media="all">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/button.css') }} " media="all">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/mirasvit_fpc.css') }} " media="all">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/mirasvit_searchindex.css') }} " media="all">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }} " media="all">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/print.css') }} " media="print">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/in_style.css') }}" media="all">

        @yield('style-sheet')


        <script type="text/javascript" src="{{ asset('assets/js/prototype.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery-1.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/em_fix_check_browser.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/ccard.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/validation.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/custom.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/builder.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/effects.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/dragdrop.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/controls.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/slider.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/js.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/form.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/menu_002.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/translate.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/cookies.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/ios-orientationchange-fix.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery_004.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery_005.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/html5shiv.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/respond.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/product.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/configurable.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/calendar.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/calendar-setup.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery-noconflict.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery_007.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/et_currencymanager_round.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/iwd-jquery-2.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/modal.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery_002.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/swiper.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/swiper_002.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/progressbar.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/menu.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/selectUl.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/ajaxaddto.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/owl.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/em0131.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/bundle.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery_003.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/lightbox.js') }} "></script>
        {{-- <script type="text/javascript" src=" {{ asset('assets/js/em_ajaxcart.js') }} "></script> --}}
        <script type="text/javascript" src="{{ asset('assets/js/isotope.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery_006.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/countdown.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/em_multidealpro.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/msrp.js') }} "></script>
        <script type="text/javascript" src="{{ asset('assets/js/em_quickshop.js') }}"></script>
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
            var urlSkinsite = '';
            LightboxOptions = Object.extend({
                fileLoadingImage: urlSkinsite + 'img/loading.gif',
                fileBottomNavCloseImage: urlSkinsite + 'img/closelabel.png',
                overlayOpacity: 0.8, /* controls transparency of shadow overlay    */
                animate: true, /* toggles resizing animations*/
                resizeSpeed: 7, /* controls the speed of the image resizing animations (1=slowest and 10=fastest)    */
                borderSize: 10, /*if you adjust the padding in the CSS, you will need to update this variable    */
                /* When grouping images this is used to write: Image # of #.*/
                /* Change it for non-english localization*/
                labelImage: "Image",
                labelOf: "of"
            }, window.LightboxOptions || {});
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
                                <div class="em-logo"><a href="" title="" class="logo"><strong>example.com</strong><img src="" alt=""></a></div>
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
                                                                <script type="text/javascript">
                                                                    var searchForm = new Varien.searchForm('search_mini_form', 'search', 'Search...');
                                                                    searchForm.initAutocomplete('', 'search_autocomplete');
                                                                </script>
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
                                                            <span class="em-topcart-qty">0</span>
                                                        </a>
                                                    </div>

                                                    <div class="em-container-js-topcart topcart-popup" style="display:none">
                                                        <div class="topcart-popup-content">
                                                            <p class="em-block-subtitle">Shopping Cart</p>
                                                            <div class="topcart-content">
                                                                <p class="amount-content ">
                                                                    You have no items in your shopping cart.
                                                                </p>
                                                            </div>

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
                                                    <img src=" {{ asset('assets/img/dpunch_logo.png') }}" alt="">
                                                </a>
                                            </div>

                                            <div class="em-menu-hoz col-sm-24">
                                                <div id="em-main-megamenu">
                                                    <div class="em-menu"><div class="megamenu-wrapper wrapper-6_8644 em-menu-mobile">
                                                            <div class="em_nav" id="toogle_menu_6_8644">
                                                                <ul class="hnav effect-menu">
                                                                    <li class="menu-item-link menu-item-depth-0  menu-item-parent"><a href="javascript:void(0)" class="arrow"><span>&gt;</span></a>
                                                                        <a class="em-menu-link" href="">
                                                                            <span>
                                                                                Mobiles &amp; Tablets				</span>
                                                                        </a>
                                                                        <ul class="menu-container">                                                                                    <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col19 grid_22 bkg-menu01 menu-item-parent" style="">
                                                                                <ul class="menu-container">                                                                                                            <li class="menu-item-vbox menu-item-depth-2 col-sm-7 menu-item-parent" style="">
                                                                                        <ul class="menu-container">                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                                                <h5><a href=""><span style="color: #000000;">Mobile Phones</span></a></h5>
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-12">
                                                                                                        <ul class="list-text">
                                                                                                            <li><a href="">iPhone</a></li>
                                                                                                            <li><a href="">Samsung</a></li>
                                                                                                            <li><a href="">Nokia</a></li>
                                                                                                            <li><a href="">Huawei</a></li>
                                                                                                            <li><a href="">Xiaomi</a></li>
                                                                                                            <li><a href="">LG</a></li>
                                                                                                            <li><a href="">HTC</a></li>
                                                                                                            <li><a href="">Lenovo</a></li>
                                                                                                            <li><a href="">LAVA</a></li>
                                                                                                            <li><a href="">Micromax</a></li>
                                                                                                            <li><a href="">Asus</a></li>
                                                                                                            <li><a href="">Helio</a></li>



                                                                                                        </ul>
                                                                                                    </div>
                                                                                                    <div class="col-sm-12">
                                                                                                        <ul class="list-text">
                                                                                                            <li><a href="">BlackBerry</a></li>
                                                                                                            <li><a href="">OnePlus</a></li>
                                                                                                            <li><a href="">Symphony</a></li>
                                                                                                            <li><a href="">Maximus</a></li>
                                                                                                            <li><a href="">Meizu</a></li>
                                                                                                            <li><a href="">WE</a></li>
                                                                                                            <li><a href="">Infinix</a></li>
                                                                                                            <li><a href="">Linnex</a></li>
                                                                                                            <li><a href="">INOVA</a></li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>                                                                                                                           </li><!-- 3 -->
                                                                                        </ul><!-- 3 -->
                                                                                    </li><!-- 2 -->
                                                                                    <li class="menu-item-vbox menu-item-depth-2 col-sm-3 menu-item-parent" style="">
                                                                                        <ul class="menu-container">                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                                                <h5><a href=""><span style="color: #000000;">Tablets</span></a></h5>
                                                                                                <ul class="list-text">
                                                                                                    <li><a href="">Apple</a></li>
                                                                                                    <li><a href="">Samsung</a></li>
                                                                                                    <li><a href="">Lenovo</a></li>
                                                                                                    <li><a href="">Huawei</a></li>
                                                                                                    <li><a href="">Symphony</a></li>
                                                                                                    <li><a href="">Asus</a></li>
                                                                                                    <li><a href="">Ainol</a></li>
                                                                                                </ul>                                                                                                                           </li><!-- 3 -->
                                                                                        </ul><!-- 3 -->
                                                                                    </li><!-- 2 -->
                                                                                    <li class="menu-item-vbox menu-item-depth-2 col-sm-4 menu-item-parent" style="">
                                                                                        <ul class="menu-container">                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                                                <h5><a href=""><span style="color: #000000;">Feature Phones</span></a></h5>
                                                                                                <ul class="list-text">
                                                                                                    <li><a href="">Nokia</a></li>
                                                                                                    <li><a href="">Samsung</a></li>
                                                                                                    <li><a href="">Symphony </a></li>
                                                                                                    <li><a href="">Maximus</a></li>
                                                                                                    <li><a href="">Micromax</a></li>
                                                                                                    <li><a href="">Metrocem</a></li>
                                                                                                </ul>                                                                                                                           </li><!-- 3 -->
                                                                                        </ul><!-- 3 -->
                                                                                    </li><!-- 2 -->
                                                                                    <li class="menu-item-vbox menu-item-depth-2 col-sm-7 menu-item-parent" style="">
                                                                                        <ul class="menu-container">                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                                                <h5><a href=""><span style="color: #000000;">Mobile &amp; Tablet Accessories</span></a></h5>
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-12">
                                                                                                        <ul class="list-text">
                                                                                                            <li><a href="">Flip Cover</a></li>
                                                                                                            <li><a href="">Back Cover</a></li>
                                                                                                            <li><a href="">Screen Protector</a></li>
                                                                                                            <li><a href="">Charger</a></li>
                                                                                                            <li><a href="">Power Bank</a></li>
                                                                                                            <li><a href="">Selfie Stick</a></li>
                                                                                                            <li><a href="">OTG &amp; Cables </a></li>
                                                                                                            <li><a href="">Headphones</a></li>
                                                                                                            <li><a href="">Bluetooth Speaker</a></li>
                                                                                                            <li><a href="">Memory Card</a></li>
                                                                                                            <li><a href="">Smart Watch</a></li>
                                                                                                            <li><a href="">Battery</a></li>

                                                                                                        </ul>
                                                                                                    </div>
                                                                                                    <div class="col-sm-12">
                                                                                                        <ul class="list-text">
                                                                                                            <li><a href="">VR Box</a></li>
                                                                                                            <li><a href="">Wearables</a></li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>                                                                                                                           </li><!-- 3 -->
                                                                                        </ul><!-- 3 -->
                                                                                    </li><!-- 2 -->
                                                                                </ul><!-- 2 -->
                                                                            </li><!-- 1 -->
                                                                        </ul><!-- 1 -->
                                                                    </li><!-- 0 -->
                                                                    <li class="menu-item-link menu-item-depth-0  menu-item-parent"><a href="javascript:void(0)" class="arrow"><span>&gt;</span></a>
                                                                        <a class="em-menu-link" href="">
                                                                            <span>Computers</span>
                                                                        </a>
                                                                        <ul class="menu-container">                                                                                    <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col19 grid_22 bkg-menu01 menu-item-parent" style="">
                                                                                <ul class="menu-container">                                                                                                            <li class="menu-item-vbox menu-item-depth-2 col-sm-5 menu-item-parent" style="">
                                                                                        <ul class="menu-container">                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                                                <ul class="list-text">
                                                                                                    <li><h5><a href=""><span style="color: #000000;">Desktop Computers</span></a></h5></li>
                                                                                                    <li><h5><a href=""><span style="color: #000000;">Laptops &amp; Notebooks</span></a></h5></li>
                                                                                                    <li><h5><a href=""><span style="color: #000000;">Apple Mac</span></a></h5></li>
                                                                                                    <li><h5><a href=""><span style="color: #000000;">Apple Accessories</span></a></h5></li>
                                                                                                </ul>                                                                                                                           </li><!-- 3 -->
                                                                                        </ul><!-- 3 -->
                                                                                    </li><!-- 2 -->
                                                                                    <li class="menu-item-vbox menu-item-depth-2 col-sm-14 menu-item-parent" style="">
                                                                                        <ul class="menu-container">                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                                                <h5><a href=""><span style="color: #000000;">Computer Accessories</span></a></h5>
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-8">
                                                                                                        <ul class="list-text">
                                                                                                            <li><a href="">Printer</a></li>
                                                                                                            <li><a href="">Printer Accessories</a></li>
                                                                                                            <li><a href="">Motherboard</a></li>
                                                                                                            <li><a href="">Monitor</a></li>
                                                                                                            <li><a href="">Keyboard</a></li>
                                                                                                            <li><a href="">Mouse</a></li>
                                                                                                            <li><a href="">Headphones &amp; Headsets</a></li>
                                                                                                            <li><a href="">Graphics Card</a></li>
                                                                                                            <li><a href="">Battery</a></li>
                                                                                                            <li><a href="">Pendrive</a></li>
                                                                                                            <li><a href="">Speakers</a></li>
                                                                                                            <li><a href="">HDD</a></li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                    <div class="col-sm-8">
                                                                                                        <ul class="list-text">
                                                                                                            <li><a href="">Portable Hard Drive</a></li>
                                                                                                            <li><a href="">Power Supply</a></li>
                                                                                                            <li><a href="">Ram</a></li>
                                                                                                            <li><a href="">Webcam</a></li>
                                                                                                            <li><a href="">USB Port</a></li>
                                                                                                            <li><a href="">USB Cables</a></li>
                                                                                                            <li><a href="">Software &amp; Antivirus</a></li>
                                                                                                            <li><a href="">Computer Cases</a></li>
                                                                                                            <li><a href="">Scanners</a></li>
                                                                                                            <li><a href="">USB Hubs</a></li>
                                                                                                            <li><a href="">Networking Accessories</a></li>
                                                                                                            <li><a href="">Projectors</a></li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                    <div class="col-sm-8">
                                                                                                        <ul class="list-text">
                                                                                                            <li><a href="">Laptop Accessories</a></li>
                                                                                                            <li><a href="">TV Cards</a></li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>                                                                                                                           </li><!-- 3 -->
                                                                                        </ul><!-- 3 -->
                                                                                    </li><!-- 2 -->
                                                                                </ul><!-- 2 -->
                                                                            </li><!-- 1 -->
                                                                        </ul><!-- 1 -->
                                                                    </li><!-- 0 -->
                                                                    <li class="menu-item-link menu-item-depth-0  menu-item-parent"><a href="javascript:void(0)" class="arrow"><span>&gt;</span></a>
                                                                        <a class="em-menu-link" href="">
                                                                            <span>Electronics &amp; Appliances</span>
                                                                        </a>
                                                                        <ul class="menu-container">                                                                                    <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col21 grid_21 bkg-menu01 menu-item-parent" style="">
                                                                                <ul class="menu-container">                                                                                                            <li class="menu-item-vbox menu-item-depth-2 col-sm-4 menu-item-parent" style="">
                                                                                        <ul class="menu-container">                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                                                <h5><a href=""><span style="color: #000000;">Televisions</span></a></h5>
                                                                                                <ul class="list-text">
                                                                                                    <li><a href="">LED TV</a></li>
                                                                                                    <li><a href="">Smart TV</a></li>
                                                                                                    <li><a href="">3D TV</a></li>
                                                                                                    <li><a href="">TV Accessories</a></li>
                                                                                                </ul>
                                                                                                &nbsp;
                                                                                                <h5><a href=""><span style="color: #000000;">Security Systems</span></a></h5>
                                                                                                <ul class="list-text">
                                                                                                    <li><a href="">Security Cameras</a></li>
                                                                                                    <li><a href="">Alarm System</a></li>
                                                                                                    <li><a href="">Door Security</a></li>
                                                                                                    <li><a href="">Gate Security</a></li>
                                                                                                    <li><a href="">Retail Solutions</a></li>
                                                                                                    <li><a href="">Access Control Systems</a></li>
                                                                                                    <li><a href="">Wireless Sensors</a></li>
                                                                                                    <li><a href="">GPS Trackers</a></li>
                                                                                                    <li><a href="">Motion Sensors &amp; Detectors</a></li>
                                                                                                </ul>                                                                                                                           </li><!-- 3 -->
                                                                                        </ul><!-- 3 -->
                                                                                    </li><!-- 2 -->
                                                                                    <li class="menu-item-vbox menu-item-depth-2 col-sm-4 menu-item-parent" style="">
                                                                                        <ul class="menu-container">                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                                                <h5><a href=""><span style="color: #000000;">Home Appliances</span></a></h5>
                                                                                                <ul class="list-text">
                                                                                                    <li><a href="">Air Conditioner</a></li>
                                                                                                    <li><a href="">Air Cooler</a></li>
                                                                                                    <li><a href="">IPS</a></li>
                                                                                                    <li><a href="">Washing Machine</a></li>
                                                                                                    <li><a href="">Refrigerator</a></li>
                                                                                                    <li><a href="">Dryer</a></li>
                                                                                                    <li><a href="">Iron</a></li>
                                                                                                    <li><a href="">Room Heater</a></li>
                                                                                                    <li><a href="">Water Heater</a></li>
                                                                                                    <li><a href="">Vacuum Cleaners</a></li>
                                                                                                    <li><a href="">Water Filter</a></li>
                                                                                                    <li><a href="">Air Purifier</a></li>
                                                                                                    <li><a href="">Landline Phones</a></li>
                                                                                                </ul>                                                                                                                           </li><!-- 3 -->
                                                                                        </ul><!-- 3 -->
                                                                                    </li><!-- 2 -->
                                                                                    <li class="menu-item-vbox menu-item-depth-2 col-sm-9 menu-item-parent" style="">
                                                                                        <ul class="menu-container">                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                                                <h5><a href=""><span style="color: #000000;">Kitchen Appliances</span></a></h5>
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-12">
                                                                                                        <ul class="list-text">
                                                                                                            <li><a href="">Microwave Ovens</a></li>
                                                                                                            <li><a href="">Blender</a></li>
                                                                                                            <li><a href="">Juicer</a></li>
                                                                                                            <li><a href="">Coffee Maker</a></li>
                                                                                                            <li><a href="">Toaster</a></li>
                                                                                                            <li><a href="">Food Processor</a></li>
                                                                                                            <li><a href="">Induction Cooker</a></li>
                                                                                                            <li><a href="">Roti Makers</a></li>
                                                                                                            <li><a href="">Rice Cooker</a></li>
                                                                                                            <li><a href="">Large Ovens</a></li>
                                                                                                            <li><a href="">Tandoori Grill Machine</a></li>
                                                                                                            <li><a href="">Pressure Cooker</a></li>

                                                                                                        </ul>
                                                                                                    </div>
                                                                                                    <div class="col-sm-12">
                                                                                                        <ul class="list-text">
                                                                                                            <li><a href="">Gas Cooker</a></li>
                                                                                                            <li><a href="">Fryer</a></li>
                                                                                                            <li><a href="">Dish Washer</a></li>
                                                                                                            <li><a href="">Chimney Kitchen Hood</a></li>
                                                                                                            <li><a href="">Small Kitchen Appliances</a></li>
                                                                                                            <li><a href="">Sandwich Maker</a></li>
                                                                                                            <li><a href="">Gas Stove</a></li>
                                                                                                            <li><a href="">Electric Ovens</a></li>
                                                                                                            <li><a href="">Steam Ovens</a></li>
                                                                                                            <li><a href="">Food warmer set</a></li>
                                                                                                            <li><a href="">Kettles</a></li>
                                                                                                            <li><a href="">Beater Machine</a></li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>                                                                                                                           </li><!-- 3 -->
                                                                                        </ul><!-- 3 -->
                                                                                    </li><!-- 2 -->
                                                                                    <li class="menu-item-vbox menu-item-depth-2 col-sm-6 menu-item-parent" style="">
                                                                                        <ul class="menu-container">                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                                                <h5><a href=""><span style="color: #000000;">Cleaning Supplies &amp; Tools</span></a></h5>

                                                                                                <ul class="list-text">
                                                                                                    <li><a href="">Pressure Washer</a></li>
                                                                                                    <li><a href="">Vacuum Cleaner</a></li>
                                                                                                    <li><a href="">Steam Cleaner</a></li>
                                                                                                    <li><a href="">Window Cleaning</a></li>
                                                                                                    <li><a href="">Push Sweeper</a></li>
                                                                                                    <li><a href="">Floor Care</a></li>
                                                                                                    <li><a href="">Carpet Cleaners</a></li>


                                                                                                </ul>                                                                                                                           </li><!-- 3 -->
                                                                                        </ul><!-- 3 -->
                                                                                    </li><!-- 2 -->
                                                                                </ul><!-- 2 -->
                                                                            </li><!-- 1 -->
                                                                        </ul><!-- 1 -->
                                                                    </li><!-- 0 -->
                                                                    <li class="menu-item-link menu-item-depth-0  menu-item-parent"><a href="javascript:void(0)" class="arrow"><span>&gt;</span></a>
                                                                        <a class="em-menu-link" href="">
                                                                            <span>Entertainment	</span>
                                                                        </a>
                                                                        <ul class="menu-container">                                                                                    <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col18 grid_22 bkg-menu01 menu-item-parent" style="">
                                                                                <ul class="menu-container">                                                                                                            <li class="menu-item-vbox menu-item-depth-2 col-sm-4 menu-item-parent" style="">
                                                                                        <ul class="menu-container">                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                                                <h5><a href=""><span style="color: #000000;">Cameras</span></a></h5>
                                                                                                <ul class="list-text">
                                                                                                    <li><a href="">DSLR Cameras</a></li>
                                                                                                    <li><a href="">Digital Cameras</a></li>
                                                                                                    <li><a href="">Camera Accessories</a></li>
                                                                                                </ul>                                                                                                                           </li><!-- 3 -->
                                                                                        </ul><!-- 3 -->
                                                                                    </li><!-- 2 -->
                                                                                    <li class="menu-item-vbox menu-item-depth-2 col-sm-6 menu-item-parent" style="">
                                                                                        <ul class="menu-container">                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                                                <h5><a href=""><span style="color: #000000;">Audio Players &amp; Systems</span></a></h5>
                                                                                                <ul class="list-text">
                                                                                                    <li><a href="">Home Theater &amp; Sound System</a></li>
                                                                                                    <li><a href="">Audio Recorders</a></li>
                                                                                                </ul>                                                                                                                           </li><!-- 3 -->
                                                                                        </ul><!-- 3 -->
                                                                                    </li><!-- 2 -->
                                                                                    <li class="menu-item-vbox menu-item-depth-2 col-sm-5 menu-item-parent" style="">
                                                                                        <ul class="menu-container">                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                                                <h5><a href=""><span style="color: #000000;">Gaming &amp; Console</span></a></h5>

                                                                                                <ul class="list-text">
                                                                                                    <li><a href="">Xbox</a></li>
                                                                                                    <li><a href="">Controller</a></li>
                                                                                                    <li><a href="">Gaming DVDs</a></li>
                                                                                                    <li><a href="">Gaming Accessories</a></li>
                                                                                                    <li><a href="">Gaming Mouse</a></li>
                                                                                                    <li><a href="">Gaming Keyboard</a></li>
                                                                                                    <li><a href="">Gaming Console</a></li>
                                                                                                </ul>                                                                                                                           </li><!-- 3 -->
                                                                                        </ul><!-- 3 -->
                                                                                    </li><!-- 2 -->
                                                                                    <li class="menu-item-vbox menu-item-depth-2 col-sm-5 menu-item-parent" style="">
                                                                                        <ul class="menu-container">                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                                                <ul class="list-text">
                                                                                                    <li><h5><a href=""><span style="color: #000000;">Toys &amp; Games</span></a></h5></li>
                                                                                                    <li><h5><a href=""><span style="color: #000000;">Fitness</span></a></h5></li>
                                                                                                    <li><h5><a href=""><span style="color: #000000;">Grooming Products</span></a></h5></li>
                                                                                                    <li><h5><a href=""><span style="color: #000000;">Vehicles</span></a></h5></li>
                                                                                                    <li><h5><a href=""><span style="color: #000000;">Health Care Devices</span></a></h5></li>
                                                                                                    <li><h5><a href=""><span style="color: #000000;">Fidget Spinner</span></a></h5></li>

                                                                                                </ul>                                                                                                                           </li><!-- 3 -->
                                                                                        </ul><!-- 3 -->
                                                                                    </li><!-- 2 -->
                                                                                </ul><!-- 2 -->
                                                                            </li><!-- 1 -->
                                                                        </ul><!-- 1 -->
                                                                    </li><!-- 0 -->
                                                                    <li class="menu-item-link menu-item-depth-0  menu-item-parent"><a href="javascript:void(0)" class="arrow"><span>&gt;</span></a>
                                                                        <a class="em-menu-link" href="">
                                                                            <span>Daily Needs</span>
                                                                        </a>
                                                                        <ul class="menu-container">                                                                                    <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col7 grid_10 bkg-menu01 menu-item-parent" style="">
                                                                                <ul class="menu-container">                                                                                                            <li class="menu-item-vbox menu-item-depth-2 col-sm-17 menu-item-parent" style="">
                                                                                        <ul class="menu-container">                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                                                <ul class="list-text">
                                                                                                    <li><h5><a href=""><span style="color: #000000;">Lighting &amp; Bulbs</span></a></h5></li>
                                                                                                    <li><h5><a href=""><span style="color: #000000;">Fans</span></a></h5></li>
                                                                                                    <li><h5><a href=""><span style="color: #000000;">Home &amp; Living</span></a></h5></li>
                                                                                                    <li><h5><a href=""><span style="color: #000000;">Tools &amp; Hardware</span></a></h5></li>
                                                                                                    <li><h5><a href=""><span style="color: #000000;">Switch, Socket &amp; Multi Plug</span></a></h5></li>
                                                                                                    <li><h5><a href=""><span style="color: #000000;">Pest Control</span></a></h5></li>
                                                                                                    <li><h5><a href=""><span style="color: #000000;">Solar Products</span></a></h5></li>
                                                                                                </ul>                                                                                                                           </li><!-- 3 -->
                                                                                        </ul><!-- 3 -->
                                                                                    </li><!-- 2 -->
                                                                                </ul><!-- 2 -->
                                                                            </li><!-- 1 -->
                                                                        </ul><!-- 1 -->
                                                                    </li><!-- 0 -->
                                                                    <li class="menu-item-link menu-item-depth-0  menu-item-parent"><a href="javascript:void(0)" class="arrow"><span>&gt;</span></a>
                                                                        <a class="em-menu-link" href="">
                                                                            <span>Fashion &amp; Beauty</span>
                                                                        </a>
                                                                        <ul class="menu-container">                                                                                    <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col24 grid_24 bkg-menu01 menu-item-parent" style="">
                                                                                <ul class="menu-container">                                                                                                            <li class="menu-item-vbox menu-item-depth-2 col-sm-8 menu-item-parent" style="">
                                                                                        <ul class="menu-container">                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                                                <h5><a href=""><span style="color: #ED4923;">Men</span></a></h5>                                                                                                                           </li><!-- 3 -->
                                                                                        </ul><!-- 3 -->
                                                                                    </li><!-- 2 -->
                                                                                    <li class="menu-item-vbox menu-item-depth-2 col-sm-8 menu-item-parent" style="">
                                                                                        <ul class="menu-container">                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                                                <h5><a href=""><span style="color: #ED4923;">Women</span></a></h5>                                                                                                                           </li><!-- 3 -->
                                                                                        </ul><!-- 3 -->
                                                                                    </li><!-- 2 -->
                                                                                    <li class="menu-item-vbox menu-item-depth-2 col-sm-8 menu-item-parent" style="">
                                                                                        <ul class="menu-container">                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                                                <h5><span style="color: #ED4923;">Beauty &amp; Grooming</span></h5>                                                                                                                           </li><!-- 3 -->
                                                                                        </ul><!-- 3 -->
                                                                                    </li><!-- 2 -->
                                                                                </ul><!-- 2 -->
                                                                            </li><!-- 1 -->
                                                                            <li class="menu-item-hbox menu-item-depth-1 col-menu menu_col24 grid_24 bkg-menu01 menu-item-parent" style="">
                                                                                <ul class="menu-container">                                                                                                            <li class="menu-item-vbox menu-item-depth-2 col-sm-4 menu-item-parent" style="">
                                                                                        <ul class="menu-container">                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                                                <h5><a href=""><span style="color: #000000;">TOP WEAR</span></a></h5>
                                                                                                <ul class="list-text">
                                                                                                    <li><a href="">T-Shirts</a></li>
                                                                                                    <li><a href="">Casual Shirts</a></li>
                                                                                                    <li><a href="">Formal Shirts</a></li>
                                                                                                    <li><a href="">Hoodies</a></li>
                                                                                                    <li><a href="">Jackets</a></li>
                                                                                                    <li><a href="">Sweaters &amp; Cardigans</a></li>
                                                                                                    <li><a href="">Blazer &amp; Coats</a></li>
                                                                                                    <li><a href="">Polo Shirts</a></li>
                                                                                                    <li><a href="">Waist Coats</a></li>
                                                                                                </ul>
                                                                                                &nbsp;
                                                                                                <h5><a href=""><span style="color: #000000;">BOTTOM WEAR</span></a></h5>
                                                                                                <ul class="list-text">
                                                                                                    <li><a href="">Formal Pants</a></li>
                                                                                                    <li><a href="">Jeans</a></li>
                                                                                                    <li><a href="">Sports &amp; Barmudas</a></li>
                                                                                                    <li><a href="">Trousers</a></li>
                                                                                                </ul>
                                                                                                &nbsp;
                                                                                                <h5><a href=""><span style="color: #000000;">Traditional Wear</span></a></h5>
                                                                                                <ul class="list-text">
                                                                                                    <li><a href="">Panjabi</a></li>
                                                                                                    <li><a href="">Pajama</a></li>
                                                                                                </ul>
                                                                                            </li><!-- 3 -->
                                                                                        </ul><!-- 3 -->
                                                                                    </li><!-- 2 -->
                                                                                    <li class="menu-item-vbox menu-item-depth-2 col-sm-4 menu-item-parent" style="">
                                                                                        <ul class="menu-container">                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                                                <h5><a href=""><span style="color: #000000;">Men's Watches</span></a></h5>
                                                                                                &nbsp;
                                                                                                <h5><a href=""><span style="color: #000000;">Accessories</span></a></h5>
                                                                                                <ul class="list-text">
                                                                                                    <li><a href="">Bags &amp; Backpacks</a></li>
                                                                                                </ul>
                                                                                                &nbsp;
                                                                                                <h5><a href=""><span style="color: #000000;">Foot Wear</span></a></h5>
                                                                                                <ul class="list-text">
                                                                                                    <li><a href="">Sandels &amp; flipflops</a></li>
                                                                                                </ul>                                                                                                                           </li><!-- 3 -->
                                                                                        </ul><!-- 3 -->
                                                                                    </li><!-- 2 -->
                                                                                    <li class="menu-item-vbox menu-item-depth-2 col-sm-4 menu-item-parent" style="">
                                                                                        <ul class="menu-container">                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                                                <h5><a href=""><span style="color: #000000;">Top Wear</span></a></h5>
                                                                                                <ul class="list-text">
                                                                                                    <li><a href="">Hoodies</a></li>
                                                                                                    <li><a href="">Coats &amp; Jackets</a></li>
                                                                                                    <li><a href="">Tunic</a></li>
                                                                                                    <li><a href="">Shurgs</a></li>
                                                                                                </ul>

                                                                                                &nbsp;
                                                                                                <h5><a href=""><span style="color: #000000;">Bottom Wear</span></a></h5>
                                                                                                <ul class="list-text">
                                                                                                    <li><a href="">Leggings</a></li>
                                                                                                    <li><a href="">Pants</a></li>
                                                                                                    <li><a href="">Palazzo</a></li>
                                                                                                </ul>
                                                                                                &nbsp;
                                                                                                <h5><a href=""><span style="color: #000000;">Traditional Wear</span></a></h5>
                                                                                                <ul class="list-text">
                                                                                                    <li><a href="">Kurti &amp; Fatua</a></li>
                                                                                                    <li><a href="">Salwar Kameez</a></li>
                                                                                                    <li><a href="">Boutique Dress</a></li>
                                                                                                </ul>
                                                                                                &nbsp;
                                                                                                <h5><a href=""><span style="color: #000000;">Footwear</span></a></h5>
                                                                                                <ul class="list-text">
                                                                                                    <li><a href="">Flats &amp; Sandels</a></li>

                                                                                                </ul>                                                                                                                           </li><!-- 3 -->
                                                                                        </ul><!-- 3 -->
                                                                                    </li><!-- 2 -->
                                                                                    <li class="menu-item-vbox menu-item-depth-2 col-sm-4 menu-item-parent" style="">
                                                                                        <ul class="menu-container">                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                                                <h5><a href=""><span style="color: #000000;">Women's Watches</span></a></h5>
                                                                                                &nbsp;
                                                                                                <h5><a href=""><span style="color: #000000;">Handbags, Bags &amp; Wallets</span></a></h5>
                                                                                                <ul class="list-text">
                                                                                                    <li><a href="">Handbags &amp; Totes</a></li>
                                                                                                    <li><a href="">Backpacks</a></li>

                                                                                                </ul>                                                                                                                           </li><!-- 3 -->
                                                                                        </ul><!-- 3 -->
                                                                                    </li><!-- 2 -->
                                                                                    <li class="menu-item-vbox menu-item-depth-2 col-sm-4 menu-item-parent" style="">
                                                                                        <ul class="menu-container">                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                                                <h5><a href=""><span style="color: #000000;">Face Makeup</span></a></h5>
                                                                                                <ul class="list-text">
                                                                                                    <li><a href="">Foundations</a></li>
                                                                                                    <li><a href="">BB &amp; CC Cream</a></li>
                                                                                                    <li><a href="">Primers</a></li>
                                                                                                    <li><a href="">Concealer &amp; Contouring</a></li>
                                                                                                    <li><a href="">Highlighter &amp; Bronzers</a></li>
                                                                                                    <li><a href="">Blush</a></li>
                                                                                                    <li><a href="">Makeup Remover</a></li>
                                                                                                    <li><a href="">Compact &amp; Powders</a></li>
                                                                                                    <li><a href="">Make up setting sprays</a></li>

                                                                                                </ul>
                                                                                                &nbsp;
                                                                                                <h5><a href=""><span style="color: #000000;">EYE MAKEUP</span></a></h5>
                                                                                                <ul class="list-text">
                                                                                                    <li><a href="">Eye Brows Pencil &amp; Palettes</a></li>
                                                                                                    <li><a href="">Eye Liners &amp; kajal</a></li>
                                                                                                    <li><a href="">Eye Shadows &amp; Palettes</a></li>
                                                                                                    <li><a href="">Mascara</a></li>
                                                                                                </ul>
                                                                                                &nbsp;
                                                                                                <h5><a href=""><span style="color: #000000;">Hair Care</span></a></h5>
                                                                                                <ul class="list-text">
                                                                                                    <li><a href="">Hair Oil</a></li>
                                                                                                </ul>
                                                                                            </li><!-- 3 -->
                                                                                        </ul><!-- 3 -->
                                                                                    </li><!-- 2 -->
                                                                                    <li class="menu-item-vbox menu-item-depth-2 col-sm-4 menu-item-parent" style="">
                                                                                        <ul class="menu-container">                                                            <li class="menu-item-text menu-item-depth-3  ">
                                                                                                <h5><a href=""><span style="color: #000000;">LIP MAKEUP</span></a></h5>
                                                                                                <ul class="list-text">
                                                                                                    <li><a href="">Lipstick</a></li>
                                                                                                    <li><a href="">Lip gloss</a></li>
                                                                                                    <li><a href="">Lip Liner</a></li>
                                                                                                </ul>
                                                                                                &nbsp;
                                                                                                <h5><a href=""><span style="color: #000000;">Makeup Accessories</span></a></h5>
                                                                                                <ul class="list-text">
                                                                                                    <li><a href="">Beauty Blender &amp; Sponge</a></li>
                                                                                                </ul>
                                                                                                &nbsp;
                                                                                                <h5><a href=""><span style="color: #000000;">Body &amp; Skin Care</span></a></h5>
                                                                                                <ul class="list-text">

                                                                                                    <li><a href="">Essential Oil</a></li>
                                                                                                    <li><a href="">Face Mask</a></li>
                                                                                                    <li><a href="">Face Wash</a></li>
                                                                                                </ul>

                                                                                                &nbsp;
                                                                                                <h5><a href=""><span style="color: #000000;">NAILS</span></a></h5>
                                                                                                <ul class="list-text">
                                                                                                    <li><a href="">Nail Polish</a></li>
                                                                                                    <li><a href="">Nail polish removers</a></li>
                                                                                                </ul>                                                                                                            </li><!-- 3 -->
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
                                                                <span class="em-topcart-qty">0</span>
                                                            </a>
                                                        </div>

                                                        <div class="em-container-js-topcart topcart-popup" style="display:none">
                                                            <div class="topcart-popup-content">
                                                                <p class="em-block-subtitle">Shopping Cart</p>
                                                                <div class="topcart-content">
                                                                    <p class="amount-content ">
                                                                        You have no items in your shopping cart.											</p>
                                                                </div>

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
                        <script type="text/javascript">
                            var dataForm = new VarienForm('login-form', true);
                          </script>
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
