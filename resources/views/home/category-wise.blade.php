@extends('home.partial.master')

@section('body_class',"catalog-category-view")

@section('breadcrum')
  <div class="wrapper-breadcrums">
    <div class="container">
      <div class="row">
        <div class="col-sm-24">
          <div class="breadcrumbs">
            <ul>
              <li class="home" itemscope="" itemtype="">
                <a href="" title="Go to Home Page" itemprop="url"><span itemprop="title">Home</span></a>
                <span class="separator">/ </span>
              </li>
              <li class="category170" itemscope="" itemtype="">
                <a href="" title="" itemprop="url"><span itemprop="title">Mobiles &amp; Tablets</span></a>
                <span class="separator">/ </span>
              </li>
              <li class="category192" itemscope="" itemtype="">
                <a href="" title="" itemprop="url"><span itemprop="title">Feature Phones</span></a>
                <span class="separator">/ </span>
              </li>
              <li class="category193" itemscope="" itemtype="">
                <a href="" title="" itemprop="url"><span itemprop="title">Nokia</span></a>
                <span class="separator">/ </span>
              </li>
              <li class="product"> <strong>Nokia 105 Dual 2017</strong></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('content')
<!-- START MAIN AREA -->
<div class="em-wrapper-main">
  <div class="container container-main">
    <div class="em-inner-main">
      <div class="em-wrapper-area04"></div>
      <div class="em-main-container em-col2-left-layout">
        <div class="row">
          <div class="col-sm-6 em-col-left em-sidebar catelog_nav">
            <div class="em-wrapper-area03"></div>
            <div id="catalog-filters">
              <div class="block block-layered-nav">
                <div class="block-title cat-title">
                  <strong><span>Filter</span></strong>
                </div>
                <div class="mobile-responsive-icon">
                  <div class="icons">
                    <div class="plusIcon"></div>
                  </div>
                </div>
                <div class="layer-block-content">
                  <div class="fme-filter">
                      <div id="fme_filters_list">
                        <div class="cate-layer-nav">
                          <div class="full-filter">
                            <div class="fme_layered_dt"></div>
                            <div class="fme_layered_dt_add"></div>
                            <div class="var-style" id="fme_layered_cat">
                              <div class="top-catagory">
                                @foreach ($category->subcategory as $element)
                                  <p class="main-parent-category"><a href="{{ route('subcategoryproduct',['category'=>$element->category->slug,'subcategory'=>$element->slug]) }}" title="" computers="">{{ $element->name }}</a></p>
                                @endforeach
                              </div>
                            </div>
                          </div>
                          {{-- <div class="full-filter-price">
                            <div id="Slider"></div>
                          </div> --}}
                          <div class="full-filter col-sm-4 col-add-tablet">
                            <div class="fme_layered_dt"></div>
                            <div class="fme_layered_dt_add">Brand</div>
                            <div class="var-style" id="fme_layered_manufacturer">
                              <select id="manufacturer">
                                <option value="">Select</option>
                                @foreach ($category->brand as $element)
                                  <option value="">{{ $element->name }}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="full-filter col-sm-4 col-add-tablet">
                            <div class="fme_layered_dt"></div>
                            <div class="fme_layered_dt_add">Color</div>
                            <div class="var-style" id="fme_layered_color">
                              <select id="color">
                                <option value="">Select</option>
                                <option value="color-1134">Anthracite Gray (4)</option>
                                <option value="color-1048">Aqua Blue (1)</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="fme_loading_filters" style="display:none"></div>
              </div>
              <script type="text/javascript">
                var windowWidth = screen.width;
                if (windowWidth < '768') {
                  jQuery('#fme_filters_list').hide();
                  jQuery(".mobile-responsive-icon").click(function() {
                    jQuery(".toolbar-top").slideToggle('slow');
                    jQuery('#fme_filters_list').slideToggle('slow');
                  });
                }
              </script>
              <script type="text/javascript">
                fme_layered_init();
              </script>
            </div>
          </div>
          <div class="col-sm-18 em-col-main categ-view">
            <div class="page-title category-title">
              <h1>Computers</h1></div>
            <div class="category-description std"> Buy desktop computer, laptop notebook, Apple MacBook Air &amp; Pro at best online shopping store pickaboo.com. We are offering best competitive price in Bangladesh. Buy your desired product and order online.</div>
            <div id="fme_layered_container">
              <div class="category-products">
                <ol class="products-list visible-xs" id="products-list">
                  @foreach ($categoryproducts as $element)
                  <li class="item odd"> <!-- Show Thumbnail -->
                    <a href="{{ route('singleproduct',['sku'=>$element->sku,'slug'=>$element->slug]) }}" title="{{ $element->title }}" class="product-image"><!--show label product - label extension is required-->
                      <ul class="productlabels_icons">
                        <li class="label special">
                          <p> <span>-14%</span></p>
                        </li>
                      </ul>
                      @if ($element->image1)
                        <img class="img-responsive em-alt-hover" src="{{ asset('images/thumbnail/'.$element->image1) }}" width="190" height="190" alt="{{ $element->title }}">
                      @else
                        <img class="img-responsive em-alt-hover" src="{{ asset('images/thumbnail/'.$element->image0) }}" width="190" height="190" alt="{{ $element->title }}">
                      @endif
                      <img id="product-collection-image-10259" class="img-responsive em-alt-org" src="{{ asset('images/thumbnail/'.$element->image0) }}" width="190" height="190" alt="{{ $element->title }}">
                    </a>
                    <div class="product-shop">
                      <div class="f-fix"> <!--product name-->
                        <h2 class="product-name"><a href="{{ route('singleproduct',['sku'=>$element->sku,'slug'=>$element->slug]) }}" title="{{ $element->title }}">{{ $element->title }} </a></h2> <!--product description-->

                        <div class="price-box">
                          @if ($element->discount)
                          <p class="old-price">
                            <span class="price-label">Regular Price:</span>
                            <span class="price" id="old-price-10259">৳{{ $element->main_price }}</span>
                          </p>
                          @endif
                          <p class="special-price">
                            <span class="price-label">Special Price</span>
                            <span class="price" itemprop="price" content="34560" id="product-price-10259">৳{{$element->price}}</span>
                          </p> <!-- <input type="button" name="off" value="-30% OFF" id="product_but">-->
                        </div>
                      </div>
                    </div>
                  </li>
                  @endforeach
                </ol>
            <div id="em-grid-mode">
              <ul class="emcatalog-grid-mode products-grid  emcatalog-disable-hover-below-mobile hidden-xs">
                @foreach ($categoryproducts as $element)
                  <li class="product-column item first" style="height: 378px;">
                    <div class="product-item">
                      <div class="product-shop-top">
                        @if ($element->discount)
                          <div class="percent-price"> <strong>-{{ $element->discount }}%</strong></div>
                        @endif
                        <!-- Show Thumbnail -->
                        <a href="{{ route('singleproduct',['sku'=>$element->sku,'slug'=>$element->slug]) }}" title="" class="product-image">
                          <ul class="productlabels_icons">
                            <li class="label special">
                              <p> <span>-2%</span></p>
                            </li>
                          </ul>
                          @if ($element->image1)
                            <img class="img-responsive em-alt-hover" src="{{ asset('images/thumbnail/'.$element->image1) }}" width="205" height="205" alt="">
                            @else
                            <img class="img-responsive em-alt-hover" src="{{ asset('images/thumbnail/'.$element->image0) }}" width="205" height="205" alt="">
                          @endif
                          <img id="product-collection-image-5192" class="img-responsive em-alt-org" src="{{ asset('images/thumbnail/'.$element->image0) }}" width="205" height="205" alt="">
                          <span class="bkg-hover"></span>
                        </a>
                      </div>
                      <div class="product-shop">
                        <div class="f-fix">
                          <!--product name-->
                          <h2 class="product-name newname"> <a href="{{ route('singleproduct',['sku'=>$element->sku,'slug'=>$element->slug]) }}" title="">{{ $element->title }}</a></h2>
                          <!--show reviews-->
                          <div class=" text-center">
                            <div class="ratings">
                              <div class="rating-box">
                                <div class="rating" style="width:0%"></div>
                              </div>
                              <span class="amount">
                                <a href="#"></a>
                              </span>
                            </div>
                          </div>
                          <div class="text-center ">
                            <div class="price-box">
                              <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price" id="old-price-5192"> ৳6,300 </span></p>
                              <p class="special-price"> <span class="price-label">Special Price</span> <span class="price" itemprop="price" content="6200" id="product-price-5192"> ৳6,200 </span></p></div>
                          </div>
                          <!--product description-->
                          <div class="desc prdt-desciption std text-center "> 18...</div>
                        </div>
                      </div>
                    </div>
                  </li>
                @endforeach

              </ul>
            </div>
          </div>
          <!--  colorswatch -->
          <!--Enhanced Ecommerce   -->
          <div class="fme_loading_filters" style="display:none"><img id="loading-image" src="https://www.pickaboo.com/skin/frontend/em0131/default/images/FME/ajax-loader.gif"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="em-wrapper-area05"></div>
  <div class="em-wrapper-area06"></div>
</div>
</div>
</div>
<!-- END MAIN AREA -->
@endsection
