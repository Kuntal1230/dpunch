@extends('admin.layout.master')
@section('title',"All Seller")
@section('seller-class',"active")
@section('all-seller-class',"active")
@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Seller page
        <small>all seller here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Seller</a></li>
        <li class="active">All seller</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title text-center">Seller List</h3>
              @if (session('message'))
                  <div class="alert alert-success">
                      {{ session('message') }}
                  </div>
              @endif
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Store Name</th>
                  <th>Mobile No.</th>
                  <th style="width:150px">Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($allseller as $key=>$seller)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $seller->name }}</td>
                      <td>{{ $seller->store->store_name }}</td>
                      <td>{{ $seller->store->mobile }}</td>
                      <td class="text-center"> <input data-toggle="toggle" data-on="Active" data-off="Not Active" data-onstyle="success" data-offstyle="danger" type="checkbox" data-id="{{ $seller->id }}" @if ($seller->status == 1)checked

                      @endif></td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Store Name</th>
                  <th>Mobile No.</th>
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

        $('input[type=checkbox]').change(function() {
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          var id = $(this).data('id');
          var status = 0;
          if ($(this).is(":checked"))
              {
                status = 1;
              }

              $.ajax({
                   type:"POST",
                   url:"/admin/updateseller",
                   data: {id:id,status:status},
                   success : function(result) {
                      console.log(result);
                   }
              });
        });
      </script>
    @endsection
