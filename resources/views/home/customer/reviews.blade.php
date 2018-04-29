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
        <table class="data-table table-bordered" id="my-reviews-table">
          {{-- <colgroup>
            <col width="1">
            <col>
            <col width="1">
            <col >
            <col width="1">
          </colgroup> --}}
          <thead>
            <tr>
                <th>Date</th>
                <th>Title</th>
                <th>Rating</th>
                <th>Discription</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @if (Auth::user()->review)

              @foreach (Auth::user()->review as $element)
                <tr class="first last odd">
                  <td><span class="nobr">{{ \Carbon\Carbon::parse($element->created_at)->format('d/m/Y')}}</span></td>
                  <td>
                    <h2 class="product-name">
                      <a href="">{{ str_limit($element->product->title, 50, '...')}}</a>
                    </h2>
                  </td>
                  @php $count = $element->rating; @endphp
                  <td>
                      @for ($i = 0; $i
                      < $count; $i++) <i class="fa fa-star" aria-hidden="true"></i>
                        @endfor
                  </td>
                  <td>{{ str_limit($element->comment, 15, '...')  }}</td>
                  <td class="last">
                    <a href="" class="nobr">View Details</a>
                  </td>
                </tr>
              @endforeach
            @endif

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
    $('#my-reviews-table').DataTable();
  } );
  </script>

@endsection
