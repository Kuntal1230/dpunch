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
                <li><a href="#2a" data-toggle="tab">SHIPPING METHOD</a></li>
                <li class="active"><a href="#3a" data-toggle="tab">PAYMENT INFORMATION</a></li>
                <li><a href="#4a" data-toggle="tab">ORDER REVIEW</a></li>
              </ul>
              <div class="tab-content clearfix">
                <div class="tab-pane active" id="step3">
                  <form class="" action="{{ route('order.tempdata') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>
                        <input type="radio" name="payment_methods" value="cash_on_delevary" required @if (session('payment.payment_methods')=="cash_on_delevary")
                          checked
                        @endif>
                        Cash On Delivery
                        </label>
                        <div class="help-block with-errors"></div>
                    </div>
                   {{-- <div class="form-group">
                        <label>
                        <input type="radio" name="payment_methods" value="online_payment" @if (session('payment.payment_methods')=="online_payment")
                          checked
                        @endif>
                        Online Payment
                        </label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label>
                        <input type="radio" name="payment_methods" value="bkash_payment" @if (session('payment.payment_methods')=="bkash_payment")
                          checked
                        @endif>
                        bKash Payment
                        </label>
                        <div class="help-block with-errors"></div>
                    </div> --}}
                    <div class="buttons-set" id="billing-buttons-container">
                      <button type="button" title="Back" class="button"><a href="{{ route('cart.checkout.shipping') }}"><span>Back</span></a></button>
                      <button type="submit" title="Continue" name="pagetype" value="review" class="button"><span><span>Continue</span></span></button>
                    </div>
                  </form>
        				</div>
        			</div>

            </div>
          </div>
        <div class="em-wrapper-area05"></div>
        <div class="em-wrapper-area06"></div>
@endsection
@section('js-script')
  <script type="text/javascript">
    var loginForm = jQuery("#checkout_login_form");
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
                  // closePopupLogin()
                  location.reload();
                  // console.log(data);
              },
              error: function (data) {
                if (data.responseJSON.message) {
                  var email = data.responseJSON.message;
                }
                // console.log(email);
                jQuery('#email').html(email);
                // jQuery('#password').html(password);
                jQuery('.chk-lgn-input').addClass('has-error');
                  console.log(data);
              }
          });
      });

      jQuery('#chklgncrtacc').click(function() {
          jQuery('#checkout-step-login').addClass('hidden');
          jQuery('#checkout-step-billing').removeClass('hidden');
      });
  </script>
@endsection
