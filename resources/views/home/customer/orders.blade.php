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
    @if (session('ordermessage'))
        <div class="alert alert-success">
            {{ session('ordermessage') }}
        </div>
    @endif
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
        <div class="page-title">
          <h1>My Orders</h1>
        </div>

        <table class="data-table" id="my-orders-table">
          <colgroup>
            <col width="1">
            <col width="1">
            <col>
            <col width="1">
            <col width="1">
            <col width="1">
          </colgroup>
          <thead>
            <tr class="first last">
              <th>Order #</th>
              <th>Date</th>
              <th>Ship To</th>
              <th><span class="nobr">Order Total</span></th>
              <th><span class="nobr">Order Status</span></th>
              <th>&nbsp;</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($orders as $element)
              <tr class="first last odd">
                <td>{{ $element->order_id }}</td>
                <td><span class="nobr">{{ $element->created_at }}</span></td>
                <td>{{ $element->address }}</td>
                <td><span class="price">{{ $element->grand_total }}</span></td>
                <td><em>
                  @if ($element->status == 0)
                    Processing
                  @elseif ($element->status == 1)
                    Confirmed
                  @else
                    Cancled
                  @endif
                </em></td>
                {{-- <td class="a-center last">
                  <span class="nobr">
                    <a href="">View Order</a>
                  </span>
                </td> --}}
              </tr>
            @endforeach

          </tbody>
        </table>

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

@section('js-script')
  <script type="text/javascript" src="{{ asset('assets/js/jquery-noconflict.js') }} "></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
  <script type="text/javascript">
  jQuery(document).ready( function ($) {
    $('#my-orders-table').DataTable();
  } );
  </script>
@endsection
