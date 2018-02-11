    @extends('home.partial.master')

    @section('slider')
      <div class="em-wrapper-area01-02-03">
                  <div class="container"><div class="row">
                          <div class="col-sm-16">
                              <div class="em-wrapper-area02"><div class="em-slideshow">
                                      <div class="em-owlcarousel-slideshow em-minislideshow-stop-on-hover">
                                          <div id="em_owlcarousel_26_26596_sync1" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                                              <div id="progressBar">
                                                  <div id="bar" style="width: 33%;">

                                                  </div>

                                              </div>
                                              <div class="owl-wrapper-outer">
                                                  <div class="owl-wrapper" style="width: 9360px; left: 0px; display: block; transition: all 0ms ease 0s; transform: translate3d(-2340px, 0px, 0px); transform-origin: 2925px center 0px; perspective-origin: 2925px center;">
                                                      <div class="owl-item" style="width: 1170px;">
                                                          <div class="item">
                                                              <a href=""> <img alt="img/1516537790_0_under-999-big-banner1.jpg" class="lazyOwl img-responsive" src="{{ asset('assets/img/1516537790_0_under-999-big-banner1.jpg') }}" style="display: block;"> </a>
                                                          </div>
                                                      </div>
                                                      <div class="owl-item" style="width: 1170px;">
                                                          <div class="item">
                                                              <a href=""> <img alt="img/1516537790_0_under-999-big-banner1.jpg" class="lazyOwl img-responsive" src="{{ asset('assets/img/1516537790_0_under-999-big-banner1.jpg') }}" style="display: block;"> </a>
                                                          </div>
                                                      </div>
                                                      <div class="owl-item" style="width: 1170px;">
                                                          <div class="item">
                                                              <a href=""> <img alt="img/1516537790_0_under-999-big-banner1.jpg" class="lazyOwl img-responsive" src="{{ asset('assets/img/1516537790_0_under-999-big-banner1.jpg') }}" style="display: block;"> </a>
                                                          </div>
                                                      </div>
                                                      <div class="owl-item loading" style="width: 1170px;">
                                                          <div class="item">
                                                              <a href=""> <img alt="1516537790_0_under-999-big-banner1" class="lazyOwl img-responsive" src="{{ asset('assets/img/Look-Sharp-category-Banner_1_.jpg') }}" style="display: block;"> </a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="owl-controls clickable">
                                                  <div class="owl-pagination">
                                                      <div class="owl-page">
                                                          <span class=""></span>
                                                        </div>
                                                      <div class="owl-page">
                                                          <span class=""></span>
                                                      </div>
                                                      <div class="owl-page active">
                                                          <span class=""></span>
                                                      </div>
                                                      <div class="owl-page">
                                                          <span class=""></span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div id="em_owlcarousel_26_26596_sync2" class="owl-carousel syn-thumb-fullwidth owl-theme" style="opacity: 1; display: block;">
                                              <div class="owl-wrapper-outer">
                                                  <div class="owl-wrapper" style="width: 2336px; left: 0px; display: block;">
                                                      <div class="owl-item" style="width: 292px;">
                                                          <div class="item em-owlcarousel-thumbs-00 syn-mainslider-thumb">
                                                              <strong>Under 999</strong>
                                                          </div>
                                                      </div>
                                                      <div class="owl-item" style="width: 292px;">
                                                          <div class="item em-owlcarousel-thumbs-01 syn-mainslider-thumb">
                                                              <strong>HUAWEI Mate 10 Pro <br>Pre-Book</strong>
                                                          </div>
                                                      </div>
                                                      <div class="owl-item synced" style="width: 292px;">
                                                          <div class="item em-owlcarousel-thumbs-02 syn-mainslider-thumb">
                                                              <strong>Great offers on <br>smartphones</strong>
                                                          </div>
                                                      </div>
                                                      <div class="owl-item" style="width: 292px;">
                                                          <div class="item em-owlcarousel-thumbs-03 syn-mainslider-thumb">
                                                              <strong>Philips <br>Mega Sale</strong>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                       <script type="text/javascript"> (function ($) {
                                              $(document).ready(function () {
                                                  var sync1 = $('#em_owlcarousel_26_26596_sync1');
                                                  sync1.owlCarousel({
                                                      singleItem: true,
                                                      scrollPerPage: false,
                                                      stopOnHover: true,
                                                      lazyLoad: true,
                                                      pagination: true, navigationText: ["Pre", "Next"],
                                                      afterAction: syncPosition,
                                                      transitionStyle: 'fade',
                                                      slideSpeed: 500,
                                                      paginationSpeed: 500,
                                                      afterInit: progressBar,
                                                      afterMove: moved,
                                                      startDragging: pauseOnDragging
                                                  });
                                                  var sync2 = $('#em_owlcarousel_26_26596_sync2');
                                                  sync2.owlCarousel({
                                                      items: 4,
                                                      itemsMobile: [479, 2],
                                                      pagination: false,
                                                      responsiveRefreshRate: 100,
                                                      lazyLoad: true,
                                                      afterInit: function (el) {
                                                          el.find('.owl-item').eq(0).addClass('synced');
                                                      }
                                                  });
                                                  function syncPosition(el) {
                                                      var current = this.currentItem;
                                                      $('#em_owlcarousel_26_26596_sync2').find('.owl-item').removeClass('synced').eq(current).addClass('synced')
                                                      if ($('#em_owlcarousel_26_26596_sync2').data('owlCarousel') !== undefined) {
                                                          center(current);
                                                      }
                                                  }
                                                  $('#em_owlcarousel_26_26596_sync2').on('click', '.owl-item', function (e) {
                                                      e.preventDefault();
                                                      var number = $(this).data('owlItem');
                                                      sync1.trigger('owl.goTo', number);
                                                  });
                                                  function center(number) {
                                                      var sync2visible = sync2.data('owlCarousel').owl.visibleItems;
                                                      var num = number;
                                                      var found = false;
                                                      for (var i in sync2visible) {
                                                          if (num === sync2visible[i]) {
                                                              var found = true;
                                                          }
                                                      }
                                                      if (found === false) {
                                                          if (num > sync2visible[sync2visible.length - 1]) {
                                                              sync2.trigger('owl.goTo', num - sync2visible.length + 2)
                                                          } else {
                                                              if (num - 1 === -1) {
                                                                  num = 0;
                                                              }
                                                              sync2.trigger('owl.goTo', num);
                                                          }
                                                      } else if (num === sync2visible[sync2visible.length - 1]) {
                                                          sync2.trigger('owl.goTo', sync2visible[1])
                                                      } else if (num === sync2visible[0]) {
                                                          sync2.trigger('owl.goTo', num - 1)
                                                      }
                                                  }
                                                  //Init progressBar where elem is $("#owl-demo")
                                                  var time = 5; // time in seconds
                                                  var $progressBar, $bar, $elem, isPause, tick, percentTime;
                                                  function progressBar(elem) {
                                                      $elem = elem;
                                                      //build progress bar elements
                                                      buildProgressBar();
                                                      //start counting
                                                      start();
                                                  }
                                                  //create div#progressBar and div#bar then prepend to $("#owl-demo")
                                                  function buildProgressBar() {
                                                      $progressBar = $("<div>", {
                                                          id: "progressBar"
                                                      });
                                                      $bar = $("<div>", {
                                                          id: "bar"
                                                      });
                                                      $progressBar.append($bar).prependTo($elem);
                                                  }
                                                  function start() {
                                                      //reset timer
                                                      percentTime = 0;
                                                      isPause = false;
                                                      //run interval every 0.01 second
                                                      tick = setInterval(interval, 10);
                                                  }
                                                  ;
                                                  function interval() {
                                                      if (isPause === false) {
                                                          percentTime += 1 / time;
                                                          $bar.css({
                                                              width: percentTime + "%"
                                                          });
                                                          //if percentTime is equal or greater than 100
                                                          if (percentTime >= 100) {
                                                              //slide to next item
                                                              $elem.trigger('owl.next')
                                                          }
                                                      }
                                                  }
                                                  //pause while dragging
                                                  function pauseOnDragging() {
                                                      isPause = true;
                                                  }
                                                  //moved callback
                                                  function moved() {
                                                      //clear interval
                                                      clearTimeout(tick);
                                                      //start again
                                                      start();
                                                  }
                                              });
                                          })(jQuery);</script>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
    @endsection

    @section('banner_hotdeals')
      <div class="em-inner-main">
          <div class="em-wrapper-area04">
              <div class="row hidden-xs">
                  <div class="em-wrapper-banners">
                      <div class="col-sm-12  text-center">
                          <div class="img-banner">
                              <a class="banner-img" title="Nova 2i" href="">
                                  <img class="img-responsive" title="Nova 2i" alt="Nova 2i" src="{{ asset('assets/img/Nova2i-Small-banner_2_1_.png') }}">
                              </a>
                          </div>
                      </div>
                      <div class="col-sm-12  text-center">
                          <div class="img-banner">
                              <a class="banner-img" title="Nokia 3310 (2017)" href="">
                                  <img class="img-responsive" title="Nokia 3310 (2017)" alt="Nokia 3310 (2017)" src="{{ asset('assets/img/3310-small-banner.png') }}">
                              </a></div>
                      </div>
                  </div>
              </div>
          </div>
          <div>
            <div class="syn-hot-deals">
                  <div class="row syn-row">
                      <div class="syn-cat-name"> * HOT DEALS *</div>
                      <div class="syn-view">
                          <div class="col-md-15 col-sm-15 col-xs-12 product-item syn-5column">
                              <div class="syn-product-image">
                                  <a href="">
                                      <img id="product-collection-image-7338" class="img-responsive" src="{{ asset('assets/img/1475002144387720682_2.jpg') }}" alt="" align="middle" width="211" height="190">
                                  </a>
                              </div>
                              <div class="syn-product-shop">
                                  <div class="syn-extra-info">
                                      <div class="syn-product-rating">
                                          <div class="mobile-review-rating">
                                              <div class="mobile-rating">
                                                  <p class="amount-mobile">4.75 / 5</p>
                                              </div>
                                              <div class="mobile-two-ratings">
                                                  <div class="rating-box-txt">
                                                      <div class="rating-mobile" style="width:95%"></div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="ratings">
                                              <div class="rating-box">
                                                  <div class="rating" style="width:95%"></div>

                                              </div>
                                              <span class="amount">
                                                  <a href="#" onclick="var t = opener ? opener.window : window;
                                                          t.location.href = '';
                                                          return false;">(98)
                                                  </a>
                                              </span>
                                          </div>
                                          <div class="single-star-rating">
                                              <ul class="skills">
                                                  <div class="mob-skill-full">
                                                      <div class="full-content-str">
                                                          <div class="mob-st-str">5</div>
                                                          <div class="sonny_progressbar" data-width="306">
                                                              <p class="title"></p>
                                                              <div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;">
                                                                  <span class="backgroundBar"></span>
                                                                  <span class="targetBar" style="width:306%;background-color:#CCC;"></span>
                                                                  <span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 306%;"></span>
                                                              </div>
                                                          </div>
                                                          <div class="mob-count">306</div>

                                                      </div>
                                                      <div class="full-content-str"><div class="mob-st-str">4</div>
                                                          <div class="sonny_progressbar" data-width="59">
                                                              <p class="title"></p>
                                                              <div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;">
                                                                  <span class="backgroundBar"></span>
                                                                  <span class="targetBar" style="width:59%;background-color:#CCC;"></span>
                                                                  <span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 59%;"></span>
                                                              </div>
                                                          </div>
                                                          <div class="mob-count">59</div></div>
                                                      <div class="full-content-str">
                                                          <div class="mob-st-str">3</div>
                                                          <div class="sonny_progressbar" data-width="11">
                                                              <p class="title"></p>
                                                              <div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;">
                                                                  <span class="backgroundBar"></span>
                                                                  <span class="targetBar" style="width:11%;background-color:#CCC;"></span>
                                                                  <span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 11%;"></span>
                                                              </div>
                                                          </div>
                                                          <div class="mob-count">11</div>

                                                      </div>
                                                      <div class="full-content-str">
                                                          <div class="mob-st-str">2</div>
                                                          <div class="sonny_progressbar" data-width="2">
                                                              <p class="title"></p>
                                                              <div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;">
                                                                  <span class="backgroundBar"></span>
                                                                  <span class="targetBar loader" style="width:2%;background-color:#CCC;"></span>
                                                                  <span class="bar" style="background-color: rgb(254, 242, 0); opacity: 1; display: inline-block; width: 2%;"></span>
                                                              </div>
                                                          </div>
                                                          <div class="mob-count">2</div>

                                                      </div>
                                                      <div class="full-content-str">
                                                          <div class="mob-st-str">1</div>
                                                          <div class="sonny_progressbar" data-width="9">
                                                              <p class="title"></p>
                                                              <div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;">
                                                                  <span class="backgroundBar"></span>
                                                                  <span class="targetBar" style="width:9%;background-color:#CCC;"></span>
                                                                  <span class="bar" style="background-color: rgb(249, 115, 82); opacity: 1; display: inline-block; width: 9%;"></span>
                                                              </div>
                                                          </div>
                                                          <div class="mob-count">9</div>

                                                      </div>

                                                  </div>
                                              </ul>
                                          </div>
                                          <!--
                                                                                                      <div class="mobile-review-btn">
                                                                                                          <span> <input class="link-login" value="Rating &amp; review" title="" onclick="review('')" type="button"> </span>
                                                                                                          <input id="logged" value="" type="hidden">
                                                                                                      </div>
                                          -->
                                      </div>
                                      <div class="syn-product-name">
                                          <a href=""> <span>Xiaomi Mi Band 2 ...</span> </a>
                                      </div>
                                      <div class="syn-product-price">
                                          <div class="percent-price">
                                              <strong style="font-size:18px;">-30%</strong>
                                          </div> <span class="syn-price-product-grid">৳2,800</span> ৳1,949
                                      </div>
                                  </div>
                                  <div class="syn-buy-now-wrapper">
                                      <button type="button" title="Add to Cart" class="syn-buy-now-button" onclick="setLocation('')">
                                          <span><span> Buy Now </span></span>
                                      </button>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-15 col-sm-15 col-xs-12 product-item syn-5column">
                              <div class="syn-product-image">
                                  <a href="">
                                      <img id="product-collection-image-12370" class="img-responsive" src="{{ asset('assets/img/d30-1.jpg') }}" alt="" align="middle" width="211" height="190">
                                  </a>
                              </div>
                              <div class="syn-product-shop">
                                  <div class="syn-extra-info">
                                      <div class="syn-product-rating">
                                          <div class="mobile-review-rating">
                                              <div class="mobile-rating">
                                                  <p class="amount-mobile">4.45 / 5</p>
                                              </div>
                                              <div class="mobile-two-ratings">
                                                  <div class="rating-box-txt">
                                                      <div class="rating-mobile" style="width:89%"></div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="ratings">
                                              <div class="rating-box">
                                                  <div class="rating" style="width:89%"></div>

                                              </div> <span class="amount">
                                                  <a href="#" onclick="var t = opener ? opener.window : window;
                                                          t.location.href = '';
                                                          return false;">(4)
                                                  </a></span>
                                          </div>
                                          <div class="single-star-rating">
                                              <ul class="skills">
                                                  <div class="mob-skill-full">
                                                      <div class="full-content-str">
                                                          <div class="mob-st-str">5</div>
                                                          <div class="sonny_progressbar" data-width="8">
                                                              <p class="title"></p>
                                                              <div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;">
                                                                  <span class="backgroundBar"></span>
                                                                  <span class="targetBar" style="width:8%;background-color:#CCC;"></span>
                                                                  <span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 8%;"></span>
                                                              </div>
                                                          </div>
                                                          <div class="mob-count">8</div>

                                                      </div>
                                                      <div class="full-content-str">
                                                          <div class="mob-st-str">4</div>
                                                          <div class="sonny_progressbar" data-width="2">
                                                              <p class="title"></p>
                                                              <div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;">
                                                                  <span class="backgroundBar"></span><span class="targetBar" style="width:2%;background-color:#CCC;"></span>
                                                                  <span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 2%;"></span>
                                                              </div>
                                                          </div>
                                                          <div class="mob-count">2</div>

                                                      </div><div class="full-content-str">
                                                          <div class="mob-st-str">3</div>
                                                          <div class="sonny_progressbar" data-width="2">
                                                              <p class="title"></p><
                                                              div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;">
                                                              <span class="backgroundBar"></span>
                                                              <span class="targetBar" style="width:2%;background-color:#CCC;"></span>
                                                              <span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 2%;"></span>
                                                          </div>
                                                      </div>
                                                      <div class="mob-count">2</div>

                                                  </div>
                                                  <div class="full-content-str">
                                                      <div class="mob-st-str">2</div>
                                                      <div class="sonny_progressbar" data-width="0">
                                                          <p class="title"></p>
                                                          <div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;">
                                                              <span class="backgroundBar"></span>
                                                              <span class="bar" style="background-color: rgb(254, 242, 0); opacity: 1; display: inline-block; width: 0%;"></span>
                                                          </div>
                                                      </div>
                                                      <div class="mob-count">0</div>

                                                  </div>
                                                  <div class="full-content-str">
                                                      <div class="mob-st-str">1</div>
                                                      <div class="sonny_progressbar" data-width="3">
                                                          <p class="title"></p>
                                                          <div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;">
                                                              <span class="backgroundBar"></span><span class="targetBar" style="width:3%;background-color:#CCC;"></span>
                                                              <span class="bar" style="background-color: rgb(249, 115, 82); opacity: 1; display: inline-block; width: 3%;"></span>
                                                          </div>
                                                      </div>
                                                      <div class="mob-count">3</div>

                                                  </div>
                                              </ul>
                                          </div>

                                      </div>
                                      <!--
                                                                                              <div class="mobile-review-btn">
                                                                                                  <span> <input class="link-login" value="Rating &amp; review" title="" onclick="review('')" type="button"> </span>
                                                                                                  <input id="logged" value="" type="hidden">
                                                                                              </div>
                                      -->
                                  </div>
                                  <div class="syn-product-name">
                                      <a href=""> <span>Midea 30L Water Heat...</span> </a>
                                  </div>
                                  <div class="syn-product-price">
                                      <div class="percent-price">
                                          <strong style="font-size:18px;">-17%</strong>
                                      </div>
                                      <span class="syn-price-product-grid">৳9,500</span> ৳7,890
                                  </div>
                              </div>
                              <div class="syn-buy-now-wrapper">
                                  <button type="button" title="Add to Cart" class="syn-buy-now-button" onclick="setLocation('')">
                                      <span><span> Buy Now </span></span>
                                  </button>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-15 col-sm-15 col-xs-12 product-item syn-5column">
                          <div class="category-express-delivery">
                              <img class="img-responsive syncategory-express-delivery" src="{{ asset('assets/img/fastpick.png') }}">
                          </div>
                          <div class="syn-product-image">
                              <a href="">
                                  <img id="product-collection-image-16182" class="img-responsive" src="{{ asset('assets/img/huawei-nova2i-2000-tk-gift-card.jpg') }}" alt="" align="middle" width="211" height="190">
                              </a>
                          </div>
                          <div class="syn-product-shop">
                              <div class="syn-extra-info">
                                  <div class="syn-product-rating">
                                      <div class="mobile-review-rating">
                                          <div class="mobile-rating">
                                              <p class="amount-mobile">4.65 / 5</p>
                                          </div>
                                          <div class="mobile-two-ratings">
                                              <div class="rating-box-txt">
                                                  <div class="rating-mobile" style="width:93%"></div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="ratings">
                                          <div class="rating-box">
                                              <div class="rating" style="width:93%"></div>
                                          </div>
                                          <span class="amount">
                                              <a href="#" onclick="var t = opener ? opener.window : window;
                                                      t.location.href = '';
                                                      return false;">(12)
                                              </a>
                                          </span>
                                      </div>
                                      <div class="single-star-rating">
                                          <ul class="skills">
                                              <div class="mob-skill-full">
                                                  <div class="full-content-str">
                                                      <div class="mob-st-str">5</div>
                                                      <div class="sonny_progressbar" data-width="34">
                                                          <p class="title"></p>
                                                          <div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;">
                                                              <span class="backgroundBar"></span>
                                                              <span class="targetBar" style="width:34%;background-color:#CCC;"></span>
                                                              <span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 34%;"></span>
                                                          </div>
                                                      </div>
                                                      <div class="mob-count">34</div>

                                                  </div>
                                                  <div class="full-content-str">
                                                      <div class="mob-st-str">4</div>
                                                      <div class="sonny_progressbar" data-width="16">
                                                          <p class="title"></p>
                                                          <div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;">
                                                              <span class="backgroundBar"></span>
                                                              <span class="targetBar" style="width:16%;background-color:#CCC;"></span>
                                                              <span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 16%;"></span>
                                                          </div>
                                                      </div>
                                                      <div class="mob-count">16</div>

                                                  </div>
                                                  <div class="full-content-str">
                                                      <div class="mob-st-str">3</div>
                                                      <div class="sonny_progressbar" data-width="22">
                                                          <p class="title"></p>
                                                          <div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;">
                                                              <span class="backgroundBar"></span>
                                                              <span class="targetBar" style="width:22%;background-color:#CCC;"></span>
                                                              <span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 22%;"></span>
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
                                                              <span class="bar" style="background-color: rgb(254, 242, 0); opacity: 1; display: inline-block; width: 0%;">

                                                              </span>
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
                                                              <span class="bar" style="background-color: rgb(249, 115, 82); opacity: 1; display: inline-block; width: 0%;"></span>
                                                          </div>
                                                      </div>
                                                      <div class="mob-count">0</div>

                                                  </div>
                                              </div>
                                          </ul>
                                      </div>
                                      <!--
                                                                                              <div class="mobile-review-btn">
                                                                                                  <span> <input class="link-login" value="Rating &amp; review" title="" onclick="review('')" type="button"> </span>
                                                                                                  <input id="logged" value="" type="hidden">
                                                                                              </div>
                                      -->
                                  </div>
                                  <div class="syn-product-name">
                                      <a href=""> <span>HUAWEI Nova 2i With ...</span> </a>
                                  </div>
                                  <div class="syn-product-price"> ৳26,990</div>

                              </div>
                              <div class="syn-buy-now-wrapper">
                                  <button type="button" title="Add to Cart" class="syn-buy-now-button" onclick="setLocation('')"> <span><span> Buy Now </span></span> </button>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-15 col-sm-15 col-xs-12 product-item syn-5column">
                          <div class="syn-product-image">
                              <a href="">
                                  <img id="product-collection-image-21395" class="img-responsive" src="{{ asset('assets/img/kaspersky-safe-kids.jpg') }}" alt="" align="middle" width="211" height="190">
                              </a>
                          </div>
                          <div class="syn-product-shop">
                              <div class="syn-extra-info">
                                  <div class="syn-product-rating">
                                      <div class="mobile-review-rating">
                                          <div class="mobile-rating">
                                              <p class="amount-mobile">0 / 5</p>
                                          </div>
                                          <div class="mobile-two-ratings">
                                              <div class="rating-box-txt">
                                                  <div class="rating-mobile" style="width:%"></div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="ratings">
                                          <div class="rating-box">
                                              <div class="rating" style="width:%"></div>

                                          </div>
                                          <span class="amount">
                                              <a href="#" onclick="var t = opener ? opener.window : window;
                                                      t.location.href = '';
                                                      return false;">(0)
                                              </a>
                                          </span>
                                      </div>
                                      <div class="single-star-rating">
                                          <ul class="skills">
                                              <div class="mob-skill-full">
                                                  <div class="full-content-str">
                                                      <div class="mob-st-str">5</div>
                                                      <div class="sonny_progressbar" data-width="0">
                                                          <p class="title"></p>
                                                          <div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;">
                                                              <span class="backgroundBar"></span>
                                                              <span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 0%;"></span>
                                                          </div>
                                                      </div>
                                                      <div class="mob-count">0</div>

                                                  </div>
                                                  <div class="full-content-str">
                                                      <div class="mob-st-str">4</div>
                                                      <div class="sonny_progressbar" data-width="0">
                                                          <p class="title"></p>
                                                          <div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;">
                                                              <span class="backgroundBar"></span>
                                                              <span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 0%;"></span>
                                                          </div>
                                                      </div>
                                                      <div class="mob-count">0</div>

                                                  </div>
                                                  <div class="full-content-str">
                                                      <div class="mob-st-str">3</div>
                                                      <div class="sonny_progressbar" data-width="0">
                                                          <p class="title"></p>
                                                          <div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;">
                                                              <span class="backgroundBar"></span>
                                                              <span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 0%;"></span>
                                                          </div>
                                                      </div>
                                                      <div class="mob-count">0</div>

                                                  </div>
                                                  <div class="full-content-str">
                                                      <div class="mob-st-str">2</div>
                                                      <div class="sonny_progressbar" data-width="0">
                                                          <p class="title"></p>
                                                          <div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;">
                                                              <span class="backgroundBar"></span>
                                                              <span class="bar" style="background-color: rgb(254, 242, 0); opacity: 1; display: inline-block; width: 0%;"></span>
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
                                                              <span class="bar" style="background-color: rgb(249, 115, 82); opacity: 1; display: inline-block; width: 0%;"></span>
                                                          </div>
                                                      </div>
                                                      <div class="mob-count">0</div>

                                                  </div>

                                              </div>
                                          </ul>

                                      </div>
                                      <!--
                                                                                              <div class="mobile-review-btn">
                                                                                                  <span> <input class="link-login" value="Rating &amp; review" title="" onclick="review('')" type="button"> </span>
                                                                                                  <input id="logged" value="" type="hidden">
                                                                                              </div>
                                      -->
                                  </div>
                                  <div class="syn-product-name">
                                      <a href="h"> <span>Kaspersky Safe Kids...</span> </a>
                                  </div>
                                  <div class="syn-product-price">
                                      <div class="percent-price">
                                          <strong style="font-size:18px;">-12%</strong>
                                      </div> <span class="syn-price-product-grid">৳799</span> ৳700
                                  </div>
                              </div>
                              <div class="syn-buy-now-wrapper">
                                  <button type="button" title="Add to Cart" class="syn-buy-now-button" onclick="setLocation('')"> <span><span> Buy Now </span></span> </button>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-15 col-sm-15 col-xs-12 product-item syn-5column">
                          <div class="syn-product-image">
                              <a href=""><img id="product-collection-image-22233" class="img-responsive" src="{{ asset('assets/img/samsung-a8_-front_1.jpg') }}" alt="" align="middle" width="211" height="190">
                              </a>
                          </div>
                          <div class="syn-product-shop">
                              <div class="syn-extra-info">
                                  <div class="syn-product-rating">
                                      <div class="mobile-review-rating">
                                          <div class="mobile-rating">
                                              <p class="amount-mobile">0 / 5</p>
                                          </div>
                                          <div class="mobile-two-ratings">
                                              <div class="rating-box-txt">
                                                  <div class="rating-mobile" style="width:%"></div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="ratings">
                                          <div class="rating-box">
                                              <div class="rating" style="width:%"></div>

                                          </div>
                                          <span class="amount">
                                              <a href="#" onclick="var t = opener ? opener.window : window;
                                                      t.location.href = '';
                                                      return false;">(0)
                                              </a>
                                          </span>
                                      </div>
                                      <div class="single-star-rating">
                                          <ul class="skills">
                                              <div class="mob-skill-full">
                                                  <div class="full-content-str">
                                                      <div class="mob-st-str">5</div>
                                                      <div class="sonny_progressbar" data-width="0">
                                                          <p class="title"></p>
                                                          <div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;">
                                                              <span class="backgroundBar"></span>
                                                              <span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 0%;"></span>
                                                          </div>
                                                      </div>
                                                      <div class="mob-count">0</div>

                                                  </div>
                                                  <div class="full-content-str">
                                                      <div class="mob-st-str">4</div>
                                                      <div class="sonny_progressbar" data-width="0">
                                                          <p class="title"></p>
                                                          <div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;">
                                                              <span class="backgroundBar"></span>
                                                              <span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 0%;"></span>
                                                          </div>
                                                      </div>
                                                      <div class="mob-count">0</div>
                                                  </div>
                                                  <div class="full-content-str">
                                                      <div class="mob-st-str">3</div>
                                                      <div class="sonny_progressbar" data-width="0">
                                                          <p class="title"></p>
                                                          <div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;">
                                                              <span class="backgroundBar"></span>
                                                              <span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 0%;"></span>
                                                          </div>
                                                      </div>
                                                      <div class="mob-count">0</div>

                                                  </div>
                                                  <div class="full-content-str">
                                                      <div class="mob-st-str">2</div>
                                                      <div class="sonny_progressbar" data-width="0">
                                                          <p class="title"></p>
                                                          <div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;">
                                                              <span class="backgroundBar"></span><span class="bar" style="background-color: rgb(254, 242, 0); opacity: 1; display: inline-block; width: 0%;"></span>
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
                                                              <span class="bar" style="background-color: rgb(249, 115, 82); opacity: 1; display: inline-block; width: 0%;"></span>
                                                          </div>
                                                      </div>
                                                      <div class="mob-count">0</div>

                                                  </div>

                                              </div>
                                          </ul>
                                      </div>
                                      <!--
                                                                                              <div class="mobile-review-btn">
                                                                                                  <span>
                                                                                                      <input class="link-login" value="Rating &amp; review" title="" onclick="review('')" type="button">
                                                                                                  </span>
                                                                                                  <input id="logged" value="" type="hidden">
                                                                                              </div>
                                      -->
                                  </div>
                                  <div class="syn-product-name">
                                      <a href=""> <span>Samsung A8+ 6GB/64GB...</span>
                                      </a>
                                  </div>
                                  <div class="syn-product-price">
                                      <div class="percent-price">
                                          <strong style="font-size:18px;">-5%</strong>
                                      </div>
                                      <span class="syn-price-product-grid">৳65,900</span>
                                      ৳62,900
                                  </div>
                              </div>
                              <div class="syn-buy-now-wrapper">
                                  <button type="button" title="Add to Cart" class="syn-buy-now-button" onclick="setLocation('')"> <span><span> Buy Now </span></span>
                                  </button>
                              </div>
                          </div>
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
                                <div class="syn-category row red mone">
                                    <div class="syn-category-products">
                                        <div id="em_ajax_products_723af370dc7f900c85b98fdf79faf706bc01a209076d26f9f9407cfc08b83413" class="emfilter-ajaxblock-loaded">
                                            <div class="syn-homepage-category">
                                                <div class="syn-category-tab">
                                                    <div class="syn-category-header">
                                                        <img class="img-responsive syn-homepage-catimage" src="{{asset('assets/img/mob-tablet.png')}}" alt="">
                                                        <h3>Mobiles &amp; Tablets</h3>
                                                        <span class="syn-button-viewall">
                                                            <a href="">View all</a>
                                                        </span>
                                                    </div>
                                                    <div class="syn-subcategory">
                                                        <ul>
                                                            <a href=""><li class="syn-subcategory-list">Mobile Phones</li></a>

                                                            <a href=""><li class="syn-subcategory-list">Tablets </li></a>

                                                            <a href=""><li class="syn-subcategory-list">Feature Phones</li></a>

                                                            <a href=""><li class="syn-subcategory-list">Mobile &amp; Tablet Accessories</li></a>

                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="syn-category-product-grid">

                                                    <div class="syn-product col-lg-8 col-sm-8">

                                                        <div class="category-express-delivery">
                                                            <img class="img-responsive syncategory-express-delivery" src="{{ asset('assets/img/fastpick.png') }}">
                                                        </div>
                                                        <a href="" title="" class="product-image ">
                                                            <img class="img-responsive em-alt-org" src="{{ asset('assets/img/samsung-s7-edge-with-gear-vr.jpg') }}" alt=" Samsung Galaxy S7 Edge-Dual 4GB/32GB With Free Samsung Gear VR" align="middle" width="150" height="150">
                                                        </a>
                                                        <div class="syn-extra-info">
                                                            <div class="syn-product-rating">
                                                                <div class="mobile-review-rating">
                                                                    <div class="mobile-rating">
                                                                        <p class="amount-mobile">0 / 5</p>

                                                                    </div>
                                                                    <div class="mobile-two-ratings">
                                                                        <div class="rating-box-txt">
                                                                            <div class="rating-mobile" style="width:%"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ratings">
                                                                    <div class="rating-box">
                                                                        <div class="rating" style="width:%"></div>
                                                                    </div>
                                                                    <span class="amount">
                                                                        <a href="#" onclick="var t = opener ? opener.window : window;
                                                                                t.location.href = '';
                                                                                return false;">(0)
                                                                        </a>
                                                                    </span>
                                                                </div>

                                                                <div class="single-star-rating">
                                                                    <ul class="skills">
                                                                        <div class="mob-skill-full">
                                                                            <div class="full-content-str">  <div class="mob-st-str">5</div><div class="sonny_progressbar" data-width="0"><p class="title"></p><div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;"><span class="backgroundBar"></span><span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 0%;"></span></div></div><div class="mob-count">0</div></div>
                                                                            <div class="full-content-str"> <div class="mob-st-str">4</div><div class="sonny_progressbar" data-width="0"><p class="title"></p><div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;"><span class="backgroundBar"></span><span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 0%;"></span></div></div><div class="mob-count">0</div></div>
                                                                            <div class="full-content-str"><div class="mob-st-str">3</div><div class="sonny_progressbar" data-width="0"><p class="title"></p><div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;"><span class="backgroundBar"></span><span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 0%;"></span></div></div><div class="mob-count">0</div></div>
                                                                            <div class="full-content-str"><div class="mob-st-str">2</div><div class="sonny_progressbar" data-width="0"><p class="title"></p><div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;"><span class="backgroundBar"></span><span class="bar" style="background-color: rgb(254, 242, 0); opacity: 1; display: inline-block; width: 0%;"></span></div></div><div class="mob-count">0</div></div>
                                                                            <div class="full-content-str"><div class="mob-st-str">1</div><div class="sonny_progressbar" data-width="0"><p class="title"></p><div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;"><span class="backgroundBar"></span><span class="bar" style="background-color: rgb(249, 115, 82); opacity: 1; display: inline-block; width: 0%;"></span></div></div><div class="mob-count">0</div></div>
                                                                        </div>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="syn-product-name">
                                                                <span>
                                                                    <a href="" title="">Samsung Galaxy S7 Edge-Dual 4GB/32GB ...</a>
                                                                </span>
                                                            </div>
                                                            <div class="syn-product-price">
                                                                ৳54,990<span class="syn-price-product-grid">৳64,900</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="syn-product col-lg-8 col-sm-8">
                                                        <a href="" title="" class="product-image ">
                                                            <img class="img-responsive em-alt-org" src="{{ asset('assets/img/apple-iphone-x.jpg') }}" alt="Apple iPhone X 64GB" align="middle" width="150" height="150">
                                                        </a>
                                                        <div class="syn-extra-info">
                                                            <div class="syn-product-rating">
                                                                <div class="mobile-review-rating">
                                                                    <div class="mobile-rating">
                                                                        <p class="amount-mobile">4.35 / 5</p>
                                                                    </div>
                                                                    <div class="mobile-two-ratings">
                                                                        <div class="rating-box-txt">
                                                                            <div class="rating-mobile" style="width:87%"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ratings">
                                                                    <div class="rating-box">
                                                                        <div class="rating" style="width:87%"></div>
                                                                    </div>
                                                                    <span class="amount"><a href="#" onclick="var t = opener ? opener.window : window; t.location.href = '';
                                                                            return false;">(2)</a></span>
                                                                </div>

                                                                <div class="single-star-rating">
                                                                    <ul class="skills">
                                                                        <div class="mob-skill-full">
                                                                            <div class="full-content-str">  <div class="mob-st-str">5</div><div class="sonny_progressbar" data-width="8"><p class="title"></p><div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;"><span class="backgroundBar"></span><span class="targetBar" style="width:8%;background-color:#CCC;"></span><span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 8%;"></span></div></div><div class="mob-count">8</div></div>
                                                                            <div class="full-content-str"> <div class="mob-st-str">4</div><div class="sonny_progressbar" data-width="6"><p class="title"></p><div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;"><span class="backgroundBar"></span><span class="targetBar" style="width:6%;background-color:#CCC;"></span><span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 6%;"></span></div></div><div class="mob-count">6</div></div>
                                                                            <div class="full-content-str"><div class="mob-st-str">3</div><div class="sonny_progressbar" data-width="1"><p class="title"></p><div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;"><span class="backgroundBar"></span><span class="targetBar" style="width:1%;background-color:#CCC;"></span><span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 1%;"></span></div></div><div class="mob-count">1</div></div>
                                                                            <div class="full-content-str"><div class="mob-st-str">2</div><div class="sonny_progressbar" data-width="0"><p class="title"></p><div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;"><span class="backgroundBar"></span><span class="bar" style="background-color: rgb(254, 242, 0); opacity: 1; display: inline-block; width: 0%;"></span></div></div><div class="mob-count">0</div></div>
                                                                            <div class="full-content-str"><div class="mob-st-str">1</div><div class="sonny_progressbar" data-width="0"><p class="title"></p><div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;"><span class="backgroundBar"></span><span class="bar" style="background-color: rgb(249, 115, 82); opacity: 1; display: inline-block; width: 0%;"></span></div></div><div class="mob-count">0</div></div>
                                                                        </div>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="syn-product-name">
                                                                <span>
                                                                    <a href="" title="">Apple iPhone X 64GB</a>
                                                                </span>
                                                            </div>
                                                            <div class="syn-product-price"> ৳130,990</div>
                                                        </div>
                                                    </div>

                                                    <div class="syn-product col-lg-8 col-sm-8">
                                                        <a href="" title="" class="product-image ">
                                                            <img class="img-responsive em-alt-org" src="{{ asset('assets/img/fitbit-alta.jpg') }}" alt="" align="middle" width="150" height="150">
                                                        </a>
                                                        <div class="syn-extra-info">
                                                            <div class="syn-product-rating">
                                                                <div class="mobile-review-rating">
                                                                    <div class="mobile-rating">
                                                                        <p class="amount-mobile">0 / 5</p>

                                                                    </div>
                                                                    <div class="mobile-two-ratings">
                                                                        <div class="rating-box-txt">
                                                                            <div class="rating-mobile" style="width:%"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ratings">
                                                                    <div class="rating-box">
                                                                        <div class="rating" style="width:%"></div>
                                                                    </div>
                                                                    <span class="amount">
                                                                        <a href="#" onclick="var t = opener ? opener.window : window;
                                                                                t.location.href = '';
                                                                                return false;">(0)
                                                                        </a>
                                                                    </span>
                                                                </div>
                                                                <div class="single-star-rating">
                                                                    <ul class="skills">
                                                                        <div class="mob-skill-full">
                                                                            <div class="full-content-str">  <div class="mob-st-str">5</div><div class="sonny_progressbar" data-width="0"><p class="title"></p><div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;"><span class="backgroundBar"></span><span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 0%;"></span></div></div><div class="mob-count">0</div></div>
                                                                            <div class="full-content-str"> <div class="mob-st-str">4</div><div class="sonny_progressbar" data-width="0"><p class="title"></p><div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;"><span class="backgroundBar"></span><span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 0%;"></span></div></div><div class="mob-count">0</div></div>
                                                                            <div class="full-content-str"><div class="mob-st-str">3</div><div class="sonny_progressbar" data-width="0"><p class="title"></p><div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;"><span class="backgroundBar"></span><span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 0%;"></span></div></div><div class="mob-count">0</div></div>
                                                                            <div class="full-content-str"><div class="mob-st-str">2</div><div class="sonny_progressbar" data-width="0"><p class="title"></p><div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;"><span class="backgroundBar"></span><span class="bar" style="background-color: rgb(254, 242, 0); opacity: 1; display: inline-block; width: 0%;"></span></div></div><div class="mob-count">0</div></div>
                                                                            <div class="full-content-str"><div class="mob-st-str">1</div><div class="sonny_progressbar" data-width="0"><p class="title"></p><div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;"><span class="backgroundBar"></span><span class="bar" style="background-color: rgb(249, 115, 82); opacity: 1; display: inline-block; width: 0%;"></span></div></div><div class="mob-count">0</div></div>
                                                                        </div>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="syn-product-name">
                                                                <span>
                                                                    <a href="" title="">Fitbit Alta Fitness Tracker</a>
                                                                </span>
                                                            </div>
                                                            <div class="syn-product-price">৳12,499<span class="syn-price-product-grid">৳16,799</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="syn-product col-lg-8 col-sm-8">
                                                        <div class="category-express-delivery">
                                                            <img class="img-responsive syncategory-express-delivery" src="{{ asset('assets/img/fastpick.png') }}">
                                                        </div>
                                                        <a href="" title="" class="product-image ">
                                                            <img class="img-responsive em-alt-org" src="{{ asset('assets/img/huawei-color-band-a2.jpg') }}" alt="Huawei Color Band A2" align="middle" width="150" height="150">
                                                        </a>
                                                        <div class="syn-extra-info">
                                                            <div class="syn-product-rating">
                                                                <div class="mobile-review-rating">
                                                                    <div class="mobile-rating">
                                                                        <p class="amount-mobile">4.8 / 5</p>
                                                                    </div>
                                                                    <div class="mobile-two-ratings">
                                                                        <div class="rating-box-txt">
                                                                            <div class="rating-mobile" style="width:96%"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ratings">
                                                                    <div class="rating-box">
                                                                        <div class="rating" style="width:96%"></div>
                                                                    </div>
                                                                    <span class="amount">
                                                                        <a href="#" onclick="var t = opener ? opener.window : window;
                                                                                t.location.href = '';
                                                                                return false;">(5)
                                                                        </a>
                                                                    </span>
                                                                </div>

                                                                <div class="single-star-rating">
                                                                    <ul class="skills">
                                                                        <div class="mob-skill-full">
                                                                            <div class="full-content-str">  <div class="mob-st-str">5</div><div class="sonny_progressbar" data-width="29"><p class="title"></p><div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;"><span class="backgroundBar"></span><span class="targetBar" style="width:29%;background-color:#CCC;"></span><span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 29%;"></span></div></div><div class="mob-count">29</div></div>
                                                                            <div class="full-content-str"> <div class="mob-st-str">4</div><div class="sonny_progressbar" data-width="8"><p class="title"></p><div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;"><span class="backgroundBar"></span><span class="targetBar" style="width:8%;background-color:#CCC;"></span><span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 8%;"></span></div></div><div class="mob-count">8</div></div>
                                                                            <div class="full-content-str"><div class="mob-st-str">3</div><div class="sonny_progressbar" data-width="8"><p class="title"></p><div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;"><span class="backgroundBar"></span><span class="targetBar" style="width:8%;background-color:#CCC;"></span><span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 8%;"></span></div></div><div class="mob-count">8</div></div>
                                                                            <div class="full-content-str"><div class="mob-st-str">2</div><div class="sonny_progressbar" data-width="0"><p class="title"></p><div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;"><span class="backgroundBar"></span><span class="bar" style="background-color: rgb(254, 242, 0); opacity: 1; display: inline-block; width: 0%;"></span></div></div><div class="mob-count">0</div></div>
                                                                            <div class="full-content-str"><div class="mob-st-str">1</div><div class="sonny_progressbar" data-width="0"><p class="title"></p><div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;"><span class="backgroundBar"></span><span class="bar" style="background-color: rgb(249, 115, 82); opacity: 1; display: inline-block; width: 0%;"></span></div></div><div class="mob-count">0</div></div>
                                                                        </div>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="syn-product-name">
                                                                <span>
                                                                    <a href="" title=""> Huawei Color Band A2</a>
                                                                </span>
                                                            </div>
                                                            <div class="syn-product-price">৳2,590</div>
                                                        </div>
                                                    </div>
                                                    <div class="syn-product col-lg-8 col-sm-8">
                                                        <div class="category-express-delivery">
                                                            <img class="img-responsive syncategory-express-delivery" src="{{ asset('assets/img/fastpick.png') }}">
                                                        </div>
                                                        <a href="" title="" class="product-image ">
                                                            <img class="img-responsive em-alt-org" src="{{ asset('assets/img/nokia-3310.jpg') }}" alt="Nokia 3310 (2017)" align="middle" width="150" height="150">
                                                        </a>
                                                        <div class="syn-extra-info">
                                                            <div class="syn-product-rating">
                                                                <div class="mobile-review-rating">
                                                                    <div class="mobile-rating">
                                                                        <p class="amount-mobile">0 / 5</p>

                                                                    </div>
                                                                    <div class="mobile-two-ratings">
                                                                        <div class="rating-box-txt">
                                                                            <div class="rating-mobile" style="width:0%"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ratings">
                                                                    <div class="rating-box">
                                                                        <div class="rating" style="width:0%"></div>
                                                                    </div>
                                                                    <span class="amount">
                                                                        <a href="#" onclick="var t = opener ? opener.window : window;
                                                                                t.location.href = '';
                                                                                return false;">(0)
                                                                        </a>
                                                                    </span>
                                                                </div>
                                                                <div class="single-star-rating">
                                                                    <ul class="skills">
                                                                        <div class="mob-skill-full">
                                                                            <div class="full-content-str">  <div class="mob-st-str">5</div><div class="sonny_progressbar" data-width="6"><p class="title"></p><div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;"><span class="backgroundBar"></span><span class="targetBar" style="width:6%;background-color:#CCC;"></span><span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 6%;"></span></div></div><div class="mob-count">6</div></div>
                                                                            <div class="full-content-str"> <div class="mob-st-str">4</div><div class="sonny_progressbar" data-width="0"><p class="title"></p><div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;"><span class="backgroundBar"></span><span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 0%;"></span></div></div><div class="mob-count">0</div></div>
                                                                            <div class="full-content-str"><div class="mob-st-str">3</div><div class="sonny_progressbar" data-width="0"><p class="title"></p><div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;"><span class="backgroundBar"></span><span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 0%;"></span></div></div><div class="mob-count">0</div></div>
                                                                            <div class="full-content-str"><div class="mob-st-str">2</div><div class="sonny_progressbar" data-width="0"><p class="title"></p><div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;"><span class="backgroundBar"></span><span class="bar" style="background-color: rgb(254, 242, 0); opacity: 1; display: inline-block; width: 0%;"></span></div></div><div class="mob-count">0</div></div>
                                                                            <div class="full-content-str"><div class="mob-st-str">1</div><div class="sonny_progressbar" data-width="0"><p class="title"></p><div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;"><span class="backgroundBar"></span><span class="bar" style="background-color: rgb(249, 115, 82); opacity: 1; display: inline-block; width: 0%;"></span></div></div><div class="mob-count">0</div></div>
                                                                        </div>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="syn-product-name">
                                                                <span>
                                                                    <a href="" title="">Nokia 3310 (2017)</a>
                                                                </span>
                                                            </div>
                                                            <div class="syn-product-price"> ৳4,500</div>
                                                        </div>
                                                    </div>
                                                    <div class="syn-product col-lg-8 col-sm-8">
                                                        <div class="category-express-delivery">
                                                            <img class="img-responsive syncategory-express-delivery" src="{{ asset('assets/img/fastpick.png') }}">
                                                        </div>
                                                        <a href="" title="" class="product-image ">
                                                            <img class="img-responsive em-alt-org" src="{{ asset('assets/img/symphony-inova.jpg') }}" alt="" align="middle" width="150" height="150">
                                                        </a>
                                                        <div class="syn-extra-info">
                                                            <div class="syn-product-rating">
                                                                <div class="mobile-review-rating">
                                                                    <div class="mobile-rating">
                                                                        <p class="amount-mobile">4.85 / 5</p>
                                                                    </div>
                                                                    <div class="mobile-two-ratings">
                                                                        <div class="rating-box-txt">
                                                                            <div class="rating-mobile" style="width:97%"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ratings">
                                                                    <div class="rating-box">
                                                                        <div class="rating" style="width:97%"></div>
                                                                    </div>
                                                                    <span class="amount">
                                                                        <a href="#" onclick="var t = opener ? opener.window : window;
                                                                                t.location.href = '';
                                                                                return false;">(2)
                                                                        </a>
                                                                    </span>
                                                                </div>
                                                                <div class="single-star-rating">
                                                                    <ul class="skills">
                                                                        <div class="mob-skill-full">
                                                                            <div class="full-content-str">  <div class="mob-st-str">5</div><div class="sonny_progressbar" data-width="8"><p class="title"></p><div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;"><span class="backgroundBar"></span><span class="targetBar" style="width:8%;background-color:#CCC;"></span><span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 8%;"></span></div></div><div class="mob-count">8</div></div>
                                                                            <div class="full-content-str"> <div class="mob-st-str">4</div><div class="sonny_progressbar" data-width="4"><p class="title"></p><div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;"><span class="backgroundBar"></span><span class="targetBar" style="width:4%;background-color:#CCC;"></span><span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 4%;"></span></div></div><div class="mob-count">4</div></div>
                                                                            <div class="full-content-str"><div class="mob-st-str">3</div><div class="sonny_progressbar" data-width="0"><p class="title"></p><div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;"><span class="backgroundBar"></span><span class="bar" style="background-color: rgb(97, 188, 71); opacity: 1; display: inline-block; width: 0%;"></span></div></div><div class="mob-count">0</div></div>
                                                                            <div class="full-content-str"><div class="mob-st-str">2</div><div class="sonny_progressbar" data-width="0"><p class="title"></p><div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;"><span class="backgroundBar"></span><span class="bar" style="background-color: rgb(254, 242, 0); opacity: 1; display: inline-block; width: 0%;"></span></div></div><div class="mob-count">0</div></div>
                                                                            <div class="full-content-str"><div class="mob-st-str">1</div><div class="sonny_progressbar" data-width="0"><p class="title"></p><div class="bar-container shadow" style="background-color:#E0E0E0;height:30px;"><span class="backgroundBar"></span><span class="bar" style="background-color: rgb(249, 115, 82); opacity: 1; display: inline-block; width: 0%;"></span></div></div><div class="mob-count">0</div></div>
                                                                        </div>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="syn-product-name">
                                                                <span>
                                                                    <a href="" title="">Symphony INOVA 2GB/16GB</a>
                                                                </span>
                                                            </div>
                                                            <div class="syn-product-price">৳8,390</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="syn-home-category-cms">
                                        <div class="widget widget-static-block">
                                            <div>
                                                <a title="mobile accessories" href="">
                                                    <img class="img-responsive" title="mobile accessories" alt="mobile accessories" src="{{ asset('assets/img/Category-banner-mobile-accesories.jpg') }}">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="em-wrapper-area05">
                                    <div class="em-wrapper-banners hidden-xs">
                                        <div class="row"><div class="col-sm-24">
                                                <div class="img-banner-small">
                                                    <div class="effect-hover-text2">
                                                        <a class="banner-img" title="Enjoy Interest Free Installment" href="">
                                                            <img class="img-responsive" title="" alt="" src="{{ asset('assets/img/Pickaboo-Service-Bank-EMI-Logo-final_3_.jpg') }}">
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
