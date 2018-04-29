@extends('admin.layout.master')
@section('title',"All Customer")
@section('customer-class',"active")
@section('all-customar-class',"active")
@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Customer page
        <small>all customer here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Customer</a></li>
        <li class="active">All customer</li>
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
                  <th>Name</th>
                  <th>Join Date</th>
                  <th>Club Point</th>
                  <th>Total Order</th>
                  <th>Total Review</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($allcustomer as $key=>$element)
                  <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $element->firstname.' '.$element->lastname }}</td>
                    <td>{{ $element->created_at }}</td>
                    <td>{{ $element->t_point }}</td>
                    <td>{{ $element->order->count() }}</td>
                    <td>{{ $element->review->count() }}</td>
                  </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Join Date</th>
                  <th>Club Point</th>
                  <th>Total Order</th>
                  <th>Total Review</th>
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
