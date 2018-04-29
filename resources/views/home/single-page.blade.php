@extends('home.partial.master')

@section('breadcrum')
  <div class="wrapper-breadcrums">
    <div class="container">
      <div class="row">
        <div class="col-sm-24">
          <div class="breadcrumbs">
            <ul>
              <li class="home" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href="https://www.pickaboo.com/" title="Go to Home Page" itemprop="url"><span itemprop="title">Home</span></a> <span class="separator">/ </span>
              </li>
              <li class="cms_page"> <strong>Earn Club Points While Shopping at Dpunch.com | Dpunch Club</strong></li>
            </ul>
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
        <div class="row">
          <div class="col-lg-6 col-md-3 col-sm-1" style="text-align: center;">&nbsp;</div>
          <div class="col-lg-12 col-md-18 col-sm-22">
            {!! $page->description !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
