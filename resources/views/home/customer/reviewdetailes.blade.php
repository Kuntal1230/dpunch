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
              <li class="current"><strong>My Product Reviews</strong></li>
              <li class="last"><a href="{{ route('customer.club') }}">Dpunch Club</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-18 em-col-main categ-view">
      <div class="my-account">
        <div class="page-title">
          <h1>My Product Reviews</h1>
        </div>
        <div class="pager">
          <p class="amount"> <strong>1 Item(s)</strong></p>
          <div class="limiter"> <label>Show</label>

          </div>
        </div>
        <table class="data-table" id="my-reviews-table">
          <colgroup>
            <col width="1">
            <col>
            <col width="1">
            <col>
            <col width="1">
          </colgroup>
          <tbody>
            <tr class="first last odd">
              <td><span class="nobr">3/24/2018</span></td>
              <td>
                <h2 class="product-name">
                  <a href="">HUAWEI Nova 2i with Free Color Band A2</a>
                </h2>
              </td>
              <td>
                <div class="rating-box">

                </div>
              </td>
              <td>good</td>
              <td class="last">
                <a href="" class="nobr">View Details</a>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="pager">
          <p class="amount">
            <strong>1 Item(s)</strong>
          </p>
          <div class="limiter"> <label>Show</label>

          </div>
        </div>
        <div class="buttons-set">
          <p class="back-link">
            <a href=""><small>« </small>Back</a>
          </p>
        </div>
      </div>
      </div>
    </div>
  </div>
@endsection
