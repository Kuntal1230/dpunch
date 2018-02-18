@extends('admin.layout.master')

@section('title',"All Product")

@section('product-classs',"active")

@section('all-product-class',"active")

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Product page
        <small>all products</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Products</a></li>
        <li class="active">All product</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header text-center">
              <h3 class="box-title">Product Table</h3>

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
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($allprodutcs as $product)

                    <tr>
                      <td>{{ $product->sku }}</td>
                      <td>{{ $product->seller }}</td>
                      <td>{{ $product->category->name }}</td>
                      <td>{{ $product->brand->name }}</td>
                      <td>{{ $product->title }}</td>
                      <td class="text-center"><a href="#">View <i class="fa fa-eye" aria-hidden="true"></i></a> | <a href="{{ URL('/admin/edit-product/'.$product->id )}}">Edit <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> | <a href="#">Delete <i class="fa fa-trash-o" aria-hidden="true"></i></a> </td>
                    </tr>

                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Seller</th>
                  <th>Category</th>
                  <th>Brand</th>
                  <th>Title</th>
                  <th class="text-center">Action</th>
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
