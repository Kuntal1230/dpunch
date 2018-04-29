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
              <li class="current"><strong>Account Dashboard</strong></li>
              <li><a href="{{ route('customer.infornation') }}">Account Information</a></li>
              <li><a href="{{ route('customer.address') }}">Address Book</a></li>
              <li><a href="{{ route('customer.orderhistory') }}">My Orders</a></li>
              <li><a href="{{ route('customer.reviews') }}">My Product Reviews</a></li>
              <li class="last"><a href="{{ route('customer.club') }}">Dpunch Club</a></li>
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
            <link href="{{ asset('assets/css/customercredit.css') }}" rel="stylesheet">
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
                  <span class="club-right-12lato sidediv4club3default"> {{ $next_membership->member_type }}  Membership </span>
                  <span class="club-right-13lato sidediv5club3default"> {{ $next_membership->point-Auth::user()->t_point }} </span>
                </div>
              </div>
            </div>
            <div class="box-account box-info">
              <div class="em-box-02">
                <div class="box-head title-box">
                  <h2>Account Information</h2>
                </div>
              </div>
              <div class="box-account-content">
                <div class="col2-set">
                  <div class="col-1">
                    <div class="box">
                      <div class="box-title">
                        <h3>Contact Information</h3>
                        <a href="{{ route('customer.infornation') }}" class="link-edit"><span><span>Edit</span></span></a>
                      </div>
                      <div class="box-content">
                        <p>{{ Auth::user()->firstname." ".Auth::user()->lastname }}<br> {{ Auth::user()->email }}<br></p>
                        <p class="change-pass">
                          <a href="{{ route('customer.infornation') }}" class="button-link btn-link-01">Change Password</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col2-set">
                  <div class="box">
                    <div class="box-title">
                      <h3 class="address-book">Address Book</h3>
                    </div>
                    <div class="box-content">
                      <div class="col-1">
                        <h4>Default Billing Address</h4>
                        <a href="{{ route('customer.address') }}" class="link-edit"><span><span>Edit Address</span></span></a>
                        @if (Auth::user()->userinfo)
                          <address>{{ Auth::user()->firstname.' '.Auth::user()->lastname }}<br>{{ Auth::user()->userinfo->address[0].','.Auth::user()->userinfo->address[1].','.Auth::user()->userinfo->address[2] }}<br>{{ Auth::user()->userinfo->region.','.Auth::user()->userinfo->city}} <br> {{ Auth::user()->userinfo->country }}<br> T: {{ Auth::user()->userinfo->phonenum }} </address>
                        @else
                          <address> You have not set a default billing address.<br> </address>
                        @endif

                      </div>
                      <div class="col-2">
                        <h4>Default Shipping Address</h4>
                        <a href="{{ route('customer.address') }}" class="link-edit"><span><span>Edit Address</span></span></a>
                          @if (Auth::user()->userinfo)
                            <address>{{ Auth::user()->firstname.' '.Auth::user()->lastname }}<br>{{ Auth::user()->userinfo->address[0].','.Auth::user()->userinfo->address[1].','.Auth::user()->userinfo->address[2] }}<br>{{ Auth::user()->userinfo->region.','.Auth::user()->userinfo->city}} <br> {{ Auth::user()->userinfo->country }}<br> T: {{ Auth::user()->userinfo->phonenum }} </address>
                          @else
                            <address> You have not set a default billing address.<br> </address>
                          @endif
                      </div>
                    </div>
                    @if (!Auth::user()->userinfo)
                      <a href="{{ route('customer.address') }}" class="button-link btn-link-01"><span><span>Manage Addresses</span></span></a>
                    @endif
                  </div>
                </div>
              </div>
            </div>
            @if (Auth::user()->review)
              <div class="box-account box-reviews">
                <div class="box-head em-box-02">
                  <div class="title-box">
                    <h2>My Recent Reviews</h2>
                  </div>
                </div>
                <div class="box-account-content">
                  <ol id="my_recent_reviews">
                    <li class="item last odd"> <span class="number">1</span>
                      <div class="details">
                        <h3 class="product-name">
                          <a href="https://www.pickaboo.com/review/customer/view/id/5069/">HUAWEI Nova 2i with Free Color Band A2</a>
                        </h3>
                        <div class="ratings"> <strong>Rating:</strong>
                          <div class="rating-box">

                          </div>
                        </div>
                      </div>
                    </li>
                  </ol>
                  <a href="https://www.pickaboo.com/review/customer/" class="button-link btn-link-01"><span><span>View All Reviews</span></span></a>
                  <script type="text/javascript">decorateList('my_recent_reviews');</script>
                </div>
              </div>
            @endif

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
