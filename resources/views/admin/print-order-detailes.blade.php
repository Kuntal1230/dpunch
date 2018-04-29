<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dpunch | Invoice</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('admin-assets/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin-assets/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('admin-assets/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin-assets/css/AdminLTE.min.css') }}">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<style media="all">
img.invoice-logo {
  height: 50px;
}
</style>
</head>
<body onload="window.print();">
<div class="wrapper">
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


  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
