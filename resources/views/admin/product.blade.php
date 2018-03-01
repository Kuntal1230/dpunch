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
                  <th>Status</th>
                  <th class="text-center" style="width:220px">Action</th>
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
                      <td>
                        <input @if($product->status == 1)checked @endif  data-toggle="toggle" data-on="Active" data-off="Not Active" data-onstyle="success" data-offstyle="danger" type="checkbox" data-id="{{ $product->id }}">
                      </td>
                      <td class="text-right">
                        <a class="btn btn-success" href="{{ route('admin.viewproduct', $product->id) }}">View <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> |
                        <a class="btn btn-primary" href="{{ route('admin.editproduct', $product->id) }}">Edit <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> |
                        <form class="pull-right" action="{{ route('admin.deleteproduct', $product->id) }}" method="post">
                            <input type="hidden" name="_method" value="delete" />
                            <button class="btn btn-danger"> Delete <i class="fa fa-trash-o" aria-hidden="true"></i></button>
                            {!! csrf_field() !!}
                        </form>
                      </td>
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
                  <th>Status</th>
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
        });

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

              console.log(id);

              $.ajax({
                   type:"POST",
                   url:"/admin/publish-product/",
                   data: {id:id,status:status},
                   success : function(result) {
                      console.log(result);
                   }
              });
        });
      </script>
    @endsection
