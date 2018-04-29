@extends('home.partial.master')

@section('body_class',"checkout-cart-index")

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
              <li class="shopping_cart">
                <strong>Shopping Cart</strong>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
        <div class="em-wrapper-area04">

        </div><div class="em-main-container em-col1-layout">
          <div class="row">
            <div class="em-col-main col-sm-24">
              @if (empty($items = LaraCart::getItems())=== false)
              <div class="cart">
                <div class="page-title title-buttons">
                  <h1><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="shopping-cart-header">Shopping Cart</span></h1>
                  <ul class="checkout-types">
                    <li>
                      <button type="button" title="Proceed to Checkout" class="button btn-proceed-checkout btn-checkout" onclick="window.location='';"><span><span>Proceed to Checkout2</span></span></button>
                    </li>
                  </ul>
                </div>
                  <fieldset>
                    <table id="shopping-cart-table" class="data-table cart-table">
                      <colgroup>
                        <col style="width: 1%;">
                        <col>
                        <col style="width: 1%;">
                        <col style="width: 1%;">
                        <col style="width: 1%;">
                        <col style="width: 1%;">
                        <col style="width: 1%;">
                      </colgroup>
                      <thead>
                        <tr class="em-block-title first last">
                          <th rowspan="1"><span class="nobr">Product Image</span></th>
                          <th rowspan="1"><span class="nobr">Product Name</span></th>
                          <th class="a-center" colspan="1"><span class="nobr">Unit Price</span></th>
                          <th rowspan="1" class="a-center">Qty</th>
                          <th colspan="1">Subtotal</th>
                          <th class="a-center last" rowspan="1">&nbsp;</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($items = LaraCart::getItems() as $item)
                          <tr class="cart-item">
                            <td>
                              <a href="" title="" class="product-image">
                                <img src="{{ asset('images/small/'.$item->getModel()->image0) }}" width="75" height="75" alt="">
                              </a>
                            </td>
                            <td>
                              <h2 class="product-name">
                                <a href="">{{ $item->getModel()->title }}</a>
                              </h2>
                              @if ($item->size)
                                <dl class="item-options">
                                  <dt>Size</dt>
                                  <dd>{{ $item->size }}</dd>
                                </dl>
                              @endif

                              <div class="cart-item-remove-wrapper">
                                <a href="{{ route('cart.delete',$item->getHash()) }}" class="cart-item-remove" onclick="event.preventDefault(); document.getElementById('remove_item').submit();">
                                    Remove
                                </a>
                                <form id="remove_item" action="{{ route('cart.delete',$item->getHash()) }}" method="POST" style="display: none;">
                                  <input type="hidden" name="_method" value="delete" />
                                    {{ csrf_field() }}
                                </form>
                              </div>
                            </td>
                            <td class="a-right"> <span class="cart-price"> <span class="price">৳{{ $item->price }}</span> </span></td>
                            <td class="a-center qty"> <input name="qty" value="{{ $item->qty }}" size="4" title="Qty" class="input-text qty" maxlength="12"></td>
                            <td class="a-right"> <span class="cart-price"> <span class="price">৳{{ $item->subTotal($formatted = false) }}</span> </span></td>
                            <td class="a-center last"><a href="javascript:void(0)" title="Update item" class="btn btn-primary btn-update" data-itemHash="{{ $item->itemHash }}">Update</a></td>
                          </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                        <tr class="first last">
                          <td colspan="50" class="a-right last">
                            <button type="button" title="Continue Shopping" class="button btn-continue"><span><span>Continue Shopping</span></span></button>
                            {{-- <button type="button" name="update_cart_action" value="update_qty" title="Update Shopping Cart" class="button btn-update"><span><span>Update Shopping Cart</span></span></button> --}}
                            <button type="button" name="update_cart_action" value="empty_cart" title="Clear Shopping Cart" class="button btn-empty" id="empty_cart_button"><span><span>Clear Shopping Cart</span></span></button>
                          </td>
                        </tr>
                      </tfoot>
                    </table>
                  </fieldset>
                <div class="cart-collaterals row">
                  <div class="first col-md-16 col-sm-24">
                    <div class="row">
                      <div class="col-sm-24 col-md-12">
                        <div class="discount em-box-cart rewarddiscount">
                          <h2 class="open-block" style="width:100%!important;">Club Points<i class="toggle-custom-ab fa fa-minus" aria-hidden="true" style="float:right!important;margin-top:3px;width:15px;"></i></h2>
                          <div class="discount-form em-box rewarddiscountsubs">
                            <div class="credit-payment box discount" style="overflow:hidden!important;">
                              @guest
                                <p>Available Club Points amount: 0 Club Points (<span class="price">৳ 0.00</span>)</p>
                                <button type="submit" class="button internalrewardsbtn"><span><span>Use Club Points</span></span></button>
                              @else
                                @if (session('c_point'))
                                    <p>Available Club Points amount: 0 Club Points (<span class="price">৳ 0.00</span>)</p>
                                @else
                                  <form action="{{ route('cart.addclubpoint') }}" method="post" id="credit-payment">
                                    {{ csrf_field() }}
                                    <p>Available Club Points amount: {{ Auth::user()->t_point }} Club Points (<span class="price">৳{{ Auth::user()->t_point/10 }}</span>)</p>
                                    <input type="hidden" name="CouponCode" value="cpoint">
                                    <input type="hidden" name="CouponValue" value="{{ Auth::user()->t_point/10 }}">
                                    <input type="hidden" name="Description" value="Club Points">
                                    <button type="submit" class="button internalrewardsbtn"><span><span>Use Club Points</span></span></button>
                                  </form>
                                @endif

                              @endguest
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-24 col-md-8">
                        <form method="post" action="{{ route('cart.addcoupon') }}" >
                          {{ csrf_field() }}
                          <div class="discount em-box-cart coupondiscount">
                            <h2 class="open-block">Discount Codes<i class="toggle-custom fa fa-minus" aria-hidden="true"></i></h2>
                            <div class="discount-form em-box">
                              <label for="coupon_code">Enter your coupon code if you have one.</label>
                              <div class="input-box">
                                <input class="input-text" id="coupon_code" name="coupon_code" value="">
                              </div>
                              <div class="buttons-set">
                                <button type="submit" title="Apply Coupon" class="button"><span><span>Apply Coupon</span></span></button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="last totals col-md-8 col-sm-24">
                    <div class="em-box-cart">
                      <h2>Order Total</h2>
                      <div class="em-box">
                        <table id="shopping-cart-totals-table">
                          <colgroup>
                            <col>
                            <col style="width: 1%;">
                          </colgroup>
                          <tbody>
                            <tr>
                              <td style="" class="a-right" colspan="1"> Subtotal</td>
                              <td style="" class="a-right"> <span class="price">৳{{ LaraCart::total($format = false, $withDiscount = false) }}</span></td>
                            </tr>
                            <tr>
                              <td style="" class="a-right" colspan="1"> Discount</td>
                              <td style="" class="a-right"> <span class="price">৳{{ LaraCart::totalDiscount($formatted = false) }}</span></td>
                            </tr>
                          </tbody>
                          <tfoot>
                            <tr>
                              <td style="" class="a-right" colspan="1">
                                <strong>Grand Total</strong>
                              </td>
                              <td style="" class="a-right">
                                <strong><span class="price">৳{{ LaraCart::total($formatted = false, $withDiscount = true) }}</span></strong>
                              </td>
                            </tr>
                          </tfoot>
                        </table>
                        <ul class="checkout-types">
                          <li>
                            <button type="button" title="Proceed to Checkout" class="button btn-proceed-checkout btn-checkout" onclick="window.location='{{ route('cart.checkout.address') }}';"><span><span>Proceed to Checkout</span></span></button>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @else
                <div class="page-title"><h1>Shopping Cart is Empty</h1></div>
                <div class="cart-empty"><p>You have no items in your shopping cart.</p><p><a href="{{ route('home') }}">Click here</a> to continue shopping.</p></div>
              @endif
            </div>
          </div>
        </div>
        <div class="em-wrapper-area05"></div>
        <div class="em-wrapper-area06"></div>
@endsection
