@extends('home.partial.master')

 @section('body_class'," catalogsearch-result-index ")
 @section('breadcrum')
   <div class="wrapper-breadcrums">
     <div class="container">
       <div class="row">
         <div class="col-sm-24">
           <div class="breadcrumbs">
             <ul>
               <li class="home" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                 <a href="/" title="Home" itemprop="url"><span itemprop="title">Home</span></a>
                 <span class="separator">/ </span>
               </li>
               <li class="register"> <strong>Search</strong></li>
           </div>
         </div>
       </div>
     </div>
   </div>
    @endsection
@section('content')
        <div class="em-wrapper-area04"></div>
        <div class="em-main-container em-col2-left-layout">
          <div class="row">
            <div class="col-sm-6 em-col-left em-sidebar catelog_nav">
              <div class="em-wrapper-area03"></div>
              <div class="em-line-01 block block-layered-nav">
                <div class="em-block-title block-title"> <strong><span>Filter</span></strong></div>
                <div class="mobile-responsive-icon">
                  <div class="icons">
                    <div class="plusIcon"></div>
                  </div>
                </div>
                <div class="block-content">
                  <p class="block-subtitle">Shopping Options</p>
                  <dl id="narrow-by-list">
                    <dt class="odd">Category</dt>
                    <dd class="odd">
                      <ol>
                        <li> <a href="">Computers</a> (824)</li>
                        <li> <a href="">Entertainment</a> (849)</li>
                        <li> <a href="">Electronics &amp; Appliances</a> (1132)</li>
                        <li> <a href="">Mobiles &amp; Tablets</a> (634)</li>
                        <li> <a href="">Daily Needs</a> (322)</li>
                        <li> <a href="">Fashion &amp; Beauty</a> (2696)</li>
                      </ol>
                    </dd>
                    <dt class="odd">Brand</dt>
                    <dd class="odd">
                      <ol>
                        <li> <a href="">4U2 Cosmetics</a> (21)</li>
                        <li> <a href="">A.Tech</a> (3)</li>
                        <li> <a href="">A4 Tech</a> (19)</li>
                        <li> <a href="">AaZuBa</a> (4)</li>
                        <li> <a href="">Abercrombie &amp; Fitch</a> (1)</li>
                        <li> <a href="">Absolute New York</a> (35)</li>
                        <li> <a href="">Acer</a> (6)</li>
                        <li> <a href="">ADATA</a> (37)</li>
                      </ol>
                    </dd>
                  </dl>
                </div>
              </div>
                <script type="text/javascript">
                  jQuery(".mobile-responsive-icon").click(function(){
                    jQuery(this).find(".icons div").toggleClass("minusIcon");
                    jQuery(this).next('.block-content').slideToggle();
                  });
              </script>
            </div>
            <div class="col-sm-18 em-col-main categ-view">
              <div class="page-title">
                <h1>Search results for</h1>
              </div>
              <div class="category-products">
                <div id="em-grid-mode">
                  <ul class="emcatalog-grid-mode products-grid  emcatalog-disable-hover-below-mobile">
                    @foreach ($product as $element)
                      <li class="product-column item" style="height: 402px;">
                        <div class="product-item">
                          <div class="product-shop-top">
                            @if ($element->discount)
                            <div class="percent-price">
                                <strong>-{{ $element->discount }}%</strong>
                             </div>
                             @endif
                            <a href="" title="{{ $element->title }}" class="product-image">
                              <ul class="productlabels_icons">
                                <li class="label special"><p> <span>-11%</span></p></li>
                              </ul>
                              <img class="img-responsive em-alt-hover" src="" width="205" height="205" alt="Gadmei TV Card">
                              <img id="product-collection-image-6553" class="img-responsive em-alt-org" src="{{ asset('images/thumbnail/'.$element->image0) }}" width="205" height="205" alt="{{ $element->title }}">
                              <span class="bkg-hover"></span>
                            </a>
                          </div>
                          <div class="product-shop">
                            <div class="f-fix">
                              <h2 class="product-name newname">
                                <a href="" title="">{{ str_limit($element->title, 20, '...')}}</a>
                              </h2>
                              <div class=" text-center">
                                @if ($element->reviews->count() <= 0)
                                  <div class="ratings">
                                    <div class="averag-rating-home" style="width:%">
                                      @for ($i = 0; $i
                                      < $element->reviews->avg('rating'); $i++) <i class="fa fa-star" aria-hidden="true"></i>
                                        @endfor
                                    </div>
                                    <span class="amount">
                                        <a href="#">({{ $element->reviews->count() }})</a>
                                    </span>
                                  </div>
                                @else
                                  <div class="ratings">
                                    <div class="averag-rating-home" style="width:%">
                                      @for ($i = 0; $i
                                      < $element->reviews->avg('rating'); $i++) <i class="fa fa-star" aria-hidden="true"></i>
                                        @endfor
                                    </div>
                                    <span class="amount">
                                        <a href="#">({{ $element->reviews->count() }})</a>
                                    </span>
                                  </div>
                                @endif

                              </div>
                              <div class="text-center ">
                                <div class="price-box">
                                  <p class="old-price">
                                    <span class="price-label">Regular Price:</span>
                                    <span class="price" id="old-price-6553"> ৳1,900 </span>
                                  </p>
                                  <p class="special-price">
                                    <span class="price-label">Special Price</span>
                                    <span class="price" itemprop="price" content="1700" id="product-price-6553"> ৳1,700 </span>
                                  </p>
                                </div>
                              </div>
                              <div class="desc prdt-desciption std text-center "> Watch TV on ...</div>
                            </div>
                          </div>
                        </div>
                      </li>
                    @endforeach

                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
