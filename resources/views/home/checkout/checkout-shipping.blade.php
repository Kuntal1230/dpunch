@extends('home.partial.master')

@section('body_class',"checkout-onepage-index")

@section('content')
        <div class="wrapper-breadcrums">
          <div class="container">
            <div class="row">
              <div class="col-sm-24">
                <div class="breadcrumbs">
                  <ul>
                    <li class="home" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                      <a href="{{ url('/') }}" title="Home" itemprop="url"><span itemprop="title">Home</span></a> <span class="separator">/ </span>
                    </li>
                    <li class="Checkout">
                      <strong>Checkout</strong>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="em-wrapper-area04"></div>
        <div class="em-main-container em-col2-left-layout">
          <div class="row">
            <div class="col-sm-24 em-col-main categ-view">
              <div class="page-title"><h1>Checkout</h1></div>

              <ul class="nav nav-tabs">
                <li><a href="#step1" data-toggle="tab">YOUR ADDRESS</a></li>
                <li class="active"><a href="#2a" data-toggle="tab">SHIPPING METHOD</a></li>
                <li><a href="#3a" data-toggle="tab">PAYMENT INFORMATION</a></li>
                <li><a href="#4a" data-toggle="tab">ORDER REVIEW</a></li>
              </ul>
              <div class="tab-content clearfix">

        				<div class="tab-pane active" id="step2">
                  <form class="" action="{{ route('order.tempdata') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>
                        <input type="radio" name="shipping_method" value="regular_shipping" required @if (session('shipping.shipping_method')=="regular_shipping")
                          checked
                        @endif>
                        Regular Shipping (৳100) <br> <small class="help-text"> (Regular Shipping - Delivery within 2-5 Days)</small>
                        </label>
                        <div class="help-block with-errors"></div>
                    </div>
                    {{-- <input type="hidden" name="shipping_msg" value="Regular Shipping - Delivery within 2-5 Days">
                    <input type="hidden" name="shipping_fee" value="100"> --}}
                    <div class="form-group">
                        <label>
                        <input type="radio" name="shipping_method" value="office_collection" required @if (session('shipping.shipping_method')=="office_collection")
                          checked
                        @endif>
                        Office Collection <br> <small class="help-text">(Earn 100 Club Points)</small>
                        </label>
                        <div class="help-block with-errors"></div>
                    </div>
                     {{-- data-msg="Office Collection - (Ready within 1-48 Hours )" data-fee="0"   --}}
                    <div class="buttons-set" id="billing-buttons-container">
                      <button type="button" title="Back" class="button"><a href="{{ route('cart.checkout.address') }}"><span>Back</span></a></button>
                      <button type="submit" title="Continue" name="pagetype" value="payment" class="button"><span><span>Continue</span></span></button>
                    </div>
                  </form>
        				</div>
        			</div>
            </div>
          </div>
        <div class="em-wrapper-area05"></div>
        <div class="em-wrapper-area06"></div>
@endsection
