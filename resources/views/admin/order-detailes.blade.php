@extends('admin.layout.master')

@section('title',"All Order")

@section('order-class',"active")

@section('all-order-class',"active")

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Order page
        <small>order detailes</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Order</a></li>
        <li class="active">Order Detailes</li>
      </ol>
    </section>

    <!-- Main content -->
    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <img class="invoice-logo" src="{{ asset('assets/img/dpunch_logo.png') }}" alt="">
            <small class="pull-right"><b>Order ID:</b> <strong>{{ $orderdetailes->order_id }}</strong></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          <strong>{{ $orderdetailes->firstname. ' '.$orderdetailes->lastname }}</strong>
          <address>
            <br>{{ $orderdetailes->user->userinfo->address[0].','.$orderdetailes->user->userinfo->address[1].','.$orderdetailes->user->userinfo->address[2] }}<br>
            {{ $orderdetailes->user->userinfo->region }},{{ $orderdetailes->user->userinfo->city }}
            <br>
            Phone:{{ $orderdetailes->user->mobilenum }}<br>
            Email: {{ $orderdetailes->user->email }}
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Shipping Address:</b>
          <address>
            <br>{{ $orderdetailes->address }}<br>
            {{ $orderdetailes->state }}, {{ $orderdetailes->city }}<br>
            Phone:{{ $orderdetailes->phonenum }}<br>
            Email: {{ $orderdetailes->user->email }}
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Order Date:</b> {{ $orderdetailes->created_at }}<br>
          <b>Payment Method:</b> {{ $orderdetailes->payment_methods }}
          {{-- <b>Ammount:</b> <strong>{{ $orderdetailes->grand_total }}</strong> --}}
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-bordered">
            <thead>
            <tr>
              <th>Product Name</th>
              <th>SKU</th>
              <th>Price</th>
              <th>Qty</th>
              <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($orderdetailes->cartitem as $item)
                <tr>
                  <td>{{ $item->product->title }}</td>
                  <td>{{ $item->product->sku }}</td>
                  <td>{{ $item->price }}</td>
                  <td>{{ $item->qty }}</td>
                  <td>{{ $item->price * $item->qty}}</td>
                </tr>
              @endforeach

            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">

        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Subtotal:</th>
                <td>{{ $orderdetailes->total_price }}</td>
              </tr>
              <tr>
                <th>Shipping:</th>
                <td>100</td>
              </tr>
              <tr>
                <th>Total:</th>
                <td>{{ $orderdetailes->grand_total }}</td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="{{ route('admin.orderdetailesprint',$orderdetailes->id) }}" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
          @if ($orderdetailes->status == 0)
            <a href="{{ route('admin.confirmorder',$orderdetailes->id) }}" class="btn btn-success pull-right orderbtn">Confirm</a>
            <a href="{{ route('admin.cancleorder',$orderdetailes->id) }}" class="btn btn-danger pull-right orderbtn">Cancel</a>
          @endif

        </div>
      </div>
    </section>
    <!-- /.content -->
    <!-- /.content -->
    @endsection

    @section('page-script')
      <!-- DataTables -->
      <script src="{{ asset('admin-assets/datatables.net/js/jquery.dataTables.min.js') }}"></script>
      <script src="{{ asset('admin-assets/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

      <script>
        $(function () {
          $('#example1').DataTable()
        })
      </script>
    @endsection
