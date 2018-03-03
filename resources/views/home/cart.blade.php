@extends('home.partial.master')

@section('content')
  <div class="wrapper-breadcrums">
    <div class="container">
      <div class="row">
        <div class="col-sm-24">
          <div class="breadcrumbs">
            <ul>
              <li class="home" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href="https://www.pickaboo.com/" title="Home" itemprop="url"><span itemprop="title">Home</span></a> <span class="separator">/ </span>
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
              <div class="cart">
                <div class="page-title title-buttons">
                  <h1><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="shopping-cart-header">Shopping Cart</span></h1>
                  <button type="button" title="Proceed to Checkout" class="button custom-checkout-button btn-proceed-checkout btn-checkout" onclick="window.location='https://www.pickaboo.com/checkout/onepage/';"><span><span>Proceed to Checkout</span></span></button>
                  <ul class="checkout-types">
                    <li>
                      <button type="button" title="Proceed to Checkout" class="button btn-proceed-checkout btn-checkout" onclick="window.location='https://www.pickaboo.com/checkout/onepage/';"><span><span>Proceed to Checkout</span></span></button>
                    </li>
                  </ul>
                </div>
                <form action="https://www.pickaboo.com/checkout/cart/updatePost/" method="post">
                  <input name="form_key" type="hidden" value="LU5sC9rGki7iQTTQ">
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
                          <th rowspan="1"></th>
                          <th rowspan="1" class="a-center"><span class="nobr">Move to Wishlist</span></th>
                          <th class="a-center" colspan="1"><span class="nobr">Unit Price</span></th>
                          <th rowspan="1" class="a-center">Qty</th><th colspan="1">Subtotal</th>
                          <th class="a-center last" rowspan="1">&nbsp;</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr class="first last">
                          <td colspan="50" class="a-right last">
                            <button type="button" title="Continue Shopping" class="button btn-continue" onclick="setLocation('https://www.pickaboo.com/')"><span><span>Continue Shopping</span></span></button>
                            <button type="submit" name="update_cart_action" value="update_qty" title="Update Shopping Cart" class="button btn-update"><span><span>Update Shopping Cart</span></span></button>
                            <button type="submit" name="update_cart_action" value="empty_cart" title="Clear Shopping Cart" class="button btn-empty" id="empty_cart_button"><span><span>Clear Shopping Cart</span></span></button>
                          </td>
                        </tr>
                      </tfoot>
                      <tbody>
                        @foreach (Cart::content() as $row)
                          <tr class="first last odd">
                            <td>
                              <a href="" title="{{ $row->name }}" class="product-image">
                                <img src="{{asset('images/'.$row->model->image0) }}" width="75" height="75" alt="{{ $row->name }}">
                              </a>
                            </td>
                            <td>
                              <h2 class="product-name">
                                <a href="">{{ $row->name }}</a>
                              </h2>
                              <dl class="item-options">
                                <dt>Color</dt>
                                <dd>{{ $row->model->color }}</dd>
                              </dl>
                              <div class="cart-item-remove-wrapper">
                                <a class="cart-item-remove" href="" title="Remove">Remove</a>
                              </div>
                            </td>
                            <td class="a-center">
                              <a href="" title="Edit item parameters">Edit</a>
                            </td>
                            <td class="a-center">
                              <a href="" class="link-wishlist use-ajax">Move</a>
                            </td>
                            <td class="a-right"> <span class="cart-price"> <span class="price">৳{{ $row->price }}</span> </span></td>
                            <td class="a-center"> <input name="qty" value="{{ $row->qty }}" size="4" title="Qty" class="input-text qty" maxlength="12"></td>
                            <td class="a-right"> <span class="cart-price"> <span class="price">৳{{ Cart::subtotal() }}</span> </span></td>
                            <td class="a-center last"><a href="" title="Remove item" class="btn-remove btn-remove2">Remove item</a></td>
                          </tr>
                        @endforeach

                      </tbody>
                    </table>
                    <script type="text/javascript">decorateTable('shopping-cart-table')</script>
                  </fieldset>
                </form>
                <div class="cart-collaterals row">
                  <div class="first col-md-16 col-sm-24">
                    <div class="row">
                      <div class="col-sm-24 col-md-12">
                        <form id="discount-coupon-form" action="" method="post">
                          <div class="discount em-box-cart coupondiscount">
                            <h2 class="open-block">Discount Codes<i class="toggle-custom fa fa-minus" aria-hidden="true"></i></h2>
                            <div class="discount-form em-box">
                              <label for="coupon_code">Enter your coupon code if you have one.</label>
                              <input type="hidden" name="remove" id="remove-coupone" value="0">
                              <div class="input-box">
                                <input class="input-text" id="coupon_code" name="coupon_code" value="">
                              </div>
                              <div class="buttons-set">
                                <button type="button" title="Apply Coupon" class="button" value="Apply Coupon"><span><span>Apply Coupon</span></span></button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="col-sm-24 col-md-12">
                        <form id="amgiftcard-form" action="" method="post">
                          <div class="discount">
                            <div id="amgiftcard_info">

                            </div>
                            <span id="span_message_please_wait" class="please-wait" style="display:none;">
                              <img src="" alt="" class="v-middle"> Please wait, loading...
                            </span>
                            <h2 class="open-block">Gift Cards<i class="toggle-custom-gc fa fa-plus" aria-hidden="true"></i></h2>
                              <div class="discount-form">
                                <div class="input-box">
                                  <input class="input-text" type="text" id="am_giftcard_code" name="am_giftcard_code" value="">
                                </div>
                                <div class="buttons-set">
                                  <button type="button" title="Add Gift Card" class="button" onclick="amgiftcardForm.submit()" value="Add Gift Card"><span><span>Add Gift Card</span></span></button> &nbsp;&nbsp;&nbsp;
                                  <button type="button" onclick="amCheckGiftCard();" title="Check Gift Card status" class="button cancel-coupon" value="Check Gift Card status"><span><span>Check Gift Card status</span></span> </button>
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
                          <tfoot>
                            <tr>
                              <td style="" class="a-right" colspan="1">
                                <strong>Grand Total</strong>
                              </td>
                              <td style="" class="a-right">
                                <strong><span class="price">৳{{ Cart::total() }}</span></strong>
                              </td>
                            </tr>
                          </tfoot>
                          <tbody>
                            <tr>
                              <td style="" class="a-right" colspan="1"> Subtotal</td>
                              <td style="" class="a-right"> <span class="price">৳ {{ Cart::subtotal() }}</span></td>
                            </tr>
                            <tr>
                              <td style="" class="a-right" colspan="1"> Vat</td>
                              <td style="" class="a-right"> <span class="price">৳ {{ Cart::tax() }}</span></td>
                            </tr>
                          </tbody>
                        </table>
                        <ul class="checkout-types">
                          <li>
                            <button type="button" title="Proceed to Checkout" class="button btn-proceed-checkout btn-checkout" onclick="window.location='https://www.pickaboo.com/checkout/onepage/';"><span><span>Proceed to Checkout</span></span></button>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="em-wrapper-area05"></div>
        <div class="em-wrapper-area06"></div>

@endsection
