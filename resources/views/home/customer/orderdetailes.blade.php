@extends('home.partial.master')

@section('body_class',"customer-account-index")

@section('breadcrum')
  <div class="wrapper-breadcrums">
    <div class="container">
      <div class="row">
        <div class="col-sm-24">
          <div class="breadcrumbs">
            <ul>
              <li class="home" itemscope="" itemtype="">
                <a href="" title="Go to Home Page" itemprop="url"><span itemprop="title">Home</span></a> <span class="separator">/ </span>
              </li>
              <li class="cms_page"> <strong>MY ACCOUNT</strong></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('content')
  <div class="em-main-container em-col2-left-layout">
    <div class="row">
      <div class="col-sm-6 em-col-left em-sidebar catelog_nav">
        <div class="em-wrapper-area03"></div>
        <div class="em-line-01 block block-account">
          <div class="block-title em-block-title"> <strong><span>My Account</span></strong></div>
          <div class="block-content">
            <ul>
              <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form2').submit();">Logout</a>
                  <form id="logout-form2" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
              </li>
              <li> <a href="{{ route('customer.dashboard') }}">Account Dashboard</a></li>
              <li> <a href="{{ route('customer.infornation') }}">Account Information</a> </li>
              <li> <a href="{{ route('customer.address') }}">Address Book</a></li>
              <li class="current"><strong>My Orders</strong></li>
              <li><a href="{{ route('customer.reviews') }}">My Product Reviews</a></li>
              <li class="last"><a href="{{ route('customer.club') }}">Dpunch Club</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-18 em-col-main categ-view">
        <div class="my-account">
          <div class="page-title title-buttons">
            <h1>Order #100156126 - Cancelled</h1>
            <a href="https://www.pickaboo.com/sales/order/reorder/order_id/171853/" class="link-reorder">Reorder</a>
            <span class="separator">|</span>
            <a href="https://www.pickaboo.com/sales/order/print/order_id/171853/" class="link-print" onclick="this.target='_blank';">Print Order</a>
          </div>
          <dl class="order-info">
            <dt>About This Order:</dt>
            <dd>
              <ul id="order-info-tabs">
                <li class="current first last">Order Information</li>
              </ul>
              <script type="text/javascript">decorateGeneric($('order-info-tabs').select('LI'),['first','last']);</script>
            </dd>
          </dl>
          <p class="order-date">Order Date: March 24, 2018</p>
          <div class="col2-set order-info-box">
            <div class="col-1">
              <div class="box">
                <div class="box-title">
                  <h2>Shipping Address</h2>
                </div>
                <div class="box-content">
                  <address>shuva Baidya<br>dfdsvxvxcvxcvcx<br>Dhaka,  Dhaka, <br> Bangladesh<br> T: 01684679820</address>
                </div>
              </div>
            </div>
            <div class="col-2">
              <div class="box">
                <div class="box-title">
                  <h2>Shipping Method</h2>
                </div>
                <div class="box-content"> Click &amp; Collect - Collect from our office within 1 Hour</div>
              </div>
            </div>
          </div>
          <div class="col2-set order-info-box">
            <div class="col-1">
              <div class="box">
                <div class="box-title">
                  <h2>Billing Address</h2>
                </div>
                <div class="box-content">
                  <address>shuva Baidya<br>dfdsvxvxcvxcvcx<br>Dhaka,  Dhaka, <br> Bangladesh<br> T: 01684679820</address>
                </div>
              </div>
            </div>
            <div class="col-2">
              <div class="box box-payment">
                <div class="box-title">
                  <h2>Payment Method</h2>
                </div>
                <div class="box-content"> Internal Club Points +<p><strong>Online Payment</strong></p>
                  <a href="https://www.pickaboo.com/sales/order/reorder/order_id/171853/" class="link-reorder">Reorder</a>
                  <span class="separator">|</span>
                  <a href="https://www.pickaboo.com/sales/order/print/order_id/171853/" class="link-print" onclick="this.target='_blank';">Print Order</a>
                </div>
              </div>
            </div>
          </div>
          <div class="order-items order-details">
            <h2 class="table-caption">Items Ordered</h2>
            <table class="data-table" id="my-orders-table" summary="Items Ordered">
              <colgroup>
                <col>
                <col width="1">
                <col width="1">
                <col width="1">
                <col width="1">
              </colgroup>
              <thead>
                <tr class="first last">
                  <th>Product Name</th>
                  <th>SKU</th>
                  <th class="a-right">Price</th>
                  <th class="a-center">Qty</th>
                  <th class="a-right">Subtotal</th>
                </tr>
              </thead>
              <tfoot>
                <tr class="subtotal first">
                  <td colspan="4" class="a-right"> Subtotal</td>
                  <td class="last a-right">
                    <span class="price">৳1,149.00</span>
                  </td>
                </tr>
                <tr class="shipping">
                  <td colspan="4" class="a-right"> Shipping &amp; Handling</td>
                  <td class="last a-right">
                    <span class="price">৳0.00</span>
                  </td>
                </tr>
                <tr class="customer_credit_amount">
                  <td colspan="4" class="a-right"> Internal Club Points</td>
                  <td class="last a-right"> <span class="price">-৳30.00</span></td>
                </tr>
                <tr class="grand_total last">
                  <td colspan="4" class="a-right"> <strong>Grand Total</strong></td>
                  <td class="last a-right"> <strong><span class="price">৳1,119.00</span></strong></td>
                </tr>
              </tfoot>
              <tbody class="odd">
                <tr class="border first last" id="order-item-row-315326">
                  <td>
                    <h3 class="product-name">Kemei Cord/Cordless 7In 1 Multi-Functional Hair Trimmer &amp; Shaver Full Package (KM-580A)</h3>
                  </td>
                  <td>MHNKM580ASGT-TS</td>
                  <td class="a-right">
                    <span class="price-excl-tax">
                      <span class="cart-price">
                        <span class="price">৳1,149.00</span>
                      </span>
                    </span> <br>
                  </td>
                  <td class="a-right">
                    <span class="nobr"> Ordered: <strong>1</strong><br> Canceled: <strong>1</strong><br> </span>
                  </td>
                  <td class="a-right last">
                    <span class="price-excl-tax">
                      <span class="cart-price">
                        <span class="price">৳1,149.00</span>
                      </span>
                    </span> <br>
                  </td>
                </tr>
              </tbody>
            </table>
            <script type="text/javascript">decorateTable('my-orders-table', {'tbody' : ['odd', 'even'], 'tbody tr' : ['first', 'last']})</script>
            <div class="buttons-set">
              <p class="back-link">
                <a href="https://www.pickaboo.com/sales/order/history/"><small>« </small>Back to My Orders</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
