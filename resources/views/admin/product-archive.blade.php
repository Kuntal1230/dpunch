@extends('admin.layout.master')

@section('title',"All Product")

@section('archive-view-class',"active")

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Product archive
        <small>archive products</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Products</a></li>
        <li class="active">Archive product</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header text-center">
              <h3 class="box-title">Archive Product Table</h3>

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
                  <th>Seller</th>
                  <th>Category</th>
                  <th>Brand</th>
                  <th>Title</th>
                  <th>Delete date</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($archiveproducts as $product)

                    <tr>
                      <td>{{ $product->sku }}</td>
                      <td>{{ $product->seller }}</td>
                      <td>{{ $product->category->name }}</td>
                      <td>{{ $product->brand->name }}</td>
                      <td>{{ $product->title }}</td>
                      <td>{{ $product->deleted_at }}</td>
                    </tr>
                    {{-- <a href="#">View <i class="fa fa-eye" aria-hidden="true"></i></a> |  --}}

                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Seller</th>
                  <th>Category</th>
                  <th>Brand</th>
                  <th>Title</th>
                  <th>Delete date</th>
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
