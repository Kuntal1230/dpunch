@extends('admin.layout.master')

@section('title',"All Order")

@section('order-class',"active")

@section('all-order-class',"active")

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Order page
        <small>all orders</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Order</a></li>
        <li class="active">All order</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title text-center">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Customer Name</th>
                  <th>Customer Mobile</th>
                  <th>Total Ammount</th>
                  <th>Order Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($allorder as $element)
                    <tr>
                      <td>{{ $element->order_id }}</td>
                      <td>{{ $element->user->firstname.' '.$element->user->lastname }}</td>
                      <td>{{ $element->user->mobilenum }}</td>
                      <td>{{ $element->grand_total }}</td>
                      <td>{{ $element->created_at }}</td>
                      <td>
                        @if ( $element->status ==0)
                          Not Shipped
                        @else
                          Shipped
                        @endif
                      </td>
                      <td>
                        <a class="btn btn-primary" href="{{ route('admin.orderdetailes',$element->id) }}">View</a>
                      </td>
                    </tr>
                  @endforeach


                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Customer Name</th>
                  <th>Customer Mobile</th>
                  <th>Total Ammount</th>
                  <th>Order Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
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
