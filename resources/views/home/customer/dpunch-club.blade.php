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
              <li> <a href="{{ route('customer.orderhistory') }}">My Orders</a></li>
              <li> <a href="{{ route('customer.reviews') }}"></a> My Product Reviews</li>
              <li class="last current"><strong>Dpunch Club</strong></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-18 em-col-main categ-view">
        <div class="my-account">
          <div class="dashboard">
            <div class="em-box-02">
              <div class="page-title title-box">
                <h1>My Dashboard</h1>
              </div>
            </div>
            <link href="https://www.pickaboo.com/skin/frontend/em0131/default/css/mageworx/customercredit/customercredit.css" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
            <div class="col-lg-24" style="padding: 0!Important;">
              <div class="creditcard backgroundclass1default">
                <div class="sidediv1"> <span class="topsy1 "></span>
                  <span class="topsy1a colortopsy1adefault">{{ Auth::user()->firstname." ".Auth::user()->lastname }}</span>
                  <span class="topsy1b colortopsy1bcdefault">Customer Id</span>
                  <span class="topsy1c topsy1cmemberdefault">{{ Auth::user()->id }}</span>
                  <span class="topsy1b sidediv3club2colordefault" style="font-size:14px;">LifeTime Club Points {{ Auth::user()->t_point }}</span>
                </div>
                <div class="sidediv2">
                  <span class="topsy2"><img src="{{ asset('assets/img/d_club.png') }}" alt"pickaboo"=""></span>
                </div>
                <div class="sidediv3">
                  <span class="club-right-2-pnt sidediv3clubdefault">Current Club Points</span>
                  <span class="club-right-21 sidediv3clubdefault1">{{ Auth::user()->t_point }} (<span class="price">৳{{ Auth::user()->t_point/10 }}</span>)</span>
                  <span class="club-right-11lato sidediv3club3default"> Points Left for </span>
                  <span class="club-right-12lato sidediv4club3default"> {{ $next_membership->member_type }} Membership </span>
                  <span class="club-right-13lato sidediv5club3default"> {{ $next_membership->point-Auth::user()->t_point }} </span>
                </div>
              </div>
            </div>
            <div class="customercredit-box">
              <div class="referallink">Refer Friends On
                <a href="" title="Refer on Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="" title="Refer on Google Plus"><i class="fa fa-google" aria-hidden="true"></i></a>
                <a href="" title="Refer on Twitter"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="" title="Refer on Email"><i class="fa fa-envelope" aria-hidden="true"></i></a>
              </div>
              <div>

              </div>
              <br>
                <script type="text/javascript">
                    var productAddToCartForm = new VarienForm('product_addtocart_form');
                    productAddToCartForm.submit = function(button, url) {
                    if (this.validator.validate()) {
                    var form = this.form;
                    var oldUrl = form.action;if (url) {
                    form.action = url;
                    }
                    var e = null;
                    try {
                    this.form.submit();
                    } catch (e) {
                    }
                    this.form.action = oldUrl;
                    if (e) {
                    throw e;
                    }if (button && button != 'undefined') {
                    button.disabled = true;
                    }
                    }
                    }.bind(productAddToCartForm);productAddToCartForm.submitLight = function(button, url){
                    if(this.validator) {
                    var nv = Validation.methods;
                    delete Validation.methods['required-entry'];
                    delete Validation.methods['validate-one-required'];
                    delete Validation.methods['validate-one-required-by-name'];
                    // Remove custom datetime validators
                    for (var methodName in Validation.methods) {
                    if (methodName.match(/^validate-datetime-.*/i)) {
                    delete Validation.methods[methodName];
                    }
                    }if (this.validator.validate()) {
                    if (url) {
                    this.form.action = url;
                    }
                    this.form.submit();
                    }
                    Object.extend(Validation.methods, nv);
                    }
                    }.bind(productAddToCartForm);
                  </script>
              <div class="box-account box-recent">
                <div class="box-head credit-payment">
                  <h2>Recent Actions</h2>
                  <a href="https://www.pickaboo.com/club/index/log/">View All</a>
                </div>
                <table cellspacing="0" class="data-table" id="my-credit-log-table">
                  <colgroup>
                    <col width="50">
                    <col width="50">
                    <col width="150">
                    <col width="50">
                    <col>
                  </colgroup>
                  <thead>
                    <tr class="first last">
                      <th>Club Points Balance</th>
                      <th>Added/Deducted</th>
                      <th>Modified On</th>
                      <th>Action</th>
                      <th>Comment</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach (Auth::user()->userpoint as $element)
                      <tr class="first odd">
                        <td>{{ $element->current_total }}</td>
                        <td>@if ($element->status == 1)+ @else - @endif{{ $element->point }}</td>
                        <td>{{ $element->created_at }}</td>
                        <td>
                          @if ($element->status == 1)
                            Added
                          @else
                            Deducted
                          @endif
                        </td>
                        <td class="last">{{ $element->point_source }}</td>
                      </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('js-script')
  <script type="text/javascript" src="{{ asset('assets/js/jquery-noconflict.js') }} "></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
  <script type="text/javascript">
  jQuery(document).ready( function ($) {
    $('#my-credit-log-table').DataTable();
  } );
  </script>
@endsection
