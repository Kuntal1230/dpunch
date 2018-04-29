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
                <li><a href="#step2" data-toggle="tab">SHIPPING METHOD</a></li>
                <li><a href="#step3" data-toggle="tab">PAYMENT INFORMATION</a></li>
                <li class="active"><a href="#step4" data-toggle="tab">ORDER REVIEW</a></li>
              </ul>
              <div class="tab-content clearfix">
                  <div class="tab-pane active" id="step4">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Product Name</th>
                          <th>Price</th>
                          <th>Qty</th>
                          <th>Subtotal</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($items = LaraCart::getItems() as $item)
                        <tr>
                          <td>{{ $item->getModel()->title }}</td>
                          <td>৳{{ $item->price }}</td>
                          <td>{{ $item->qty }}</td>
                          <td>৳{{ $item->subTotal($formatted = false) }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                      <tfoot class="order-review-tfoot">
                        <tr>
                          <td colspan="3" class="text-right subtotal">Subtotal :</td>
                          <td class="order-review-price">৳{{ LaraCart::total($format = false, $withDiscount = false) }}</td>
                        </tr>
                        <tr>
                          <td colspan="3" class="text-right delevery-charge" >Shipping & Handling ( @if (session('shipping.shipping_method')=="regular_shipping")
                            Regular Shipping - Delivery within 2-5 Days
                          @elseif (session('shipping.shipping_method')=="office_collection")
                            Office Collection - (Ready within 1-48 Hours )
                          @endif ) :</td>
                          <td class="order-review-price" >৳ @if (session('shipping.shipping_method')=="regular_shipping")
                            100
                            @else
                              0.00
                          @endif </span></td>
                        </tr>
                        <tr>
                          <td colspan="3" class="text-right total">Grand Total :</td>
                          @if (session('shipping.shipping_method')=="regular_shipping")
                            @php
                              $fee = 100;
                            @endphp
                            @else
                              @php
                                $fee = 0;
                              @endphp
                          @endif
                          <td class="order-review-price">৳{{ LaraCart::total($formatted = false, $withDiscount = true) +$fee }}</td>
                        </tr>
                      </tfoot>

                    </table>
                    <form class="" action="{{ route('order') }}" method="post">
                      {{ csrf_field() }}
                      <div class="form-group">
                          <label for="terms">I agree with the Terms & Conditions</label>
                          <input type="checkbox" id="terms" data-error="Please accept the Terms and Conditions" required>
                          <div class="help-block with-errors"></div>
                      </div>
                      <div class="buttons-set" id="billing-buttons-container">
                        <button type="button" title="Back" class="button"><a href="{{ route('cart.checkout.payment') }}"><span>Back</span></a></button>
                        <button type="submit" title="Continue" class="button"><span><span>Submit</span></span></button>
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
