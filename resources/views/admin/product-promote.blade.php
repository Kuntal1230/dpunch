@extends('admin.layout.master')

@section('title',"All Product")

@section('page-style')
<link rel="stylesheet" href="{{ asset('admin-assets/css/fileinput.css') }}">
@endsection

@section('product-classs',"active")

@section('promote-product-class',"active")

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Product page
        <small>View products</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Products</a></li>
        <li class="active">View product</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header with-border text-center">
              <h3 class="box-title">View Product</h3>
              <br>
              @if (session('message'))
                  <div class="alert alert-success">
                      {{ session('message') }}
                  </div>
              @endif
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width:300px"></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Seller</td>
                          <td>{{ $promote->product->seller }}</td>
                        </tr>
                        <tr>
                          <td>SKU</td>
                          <td>{{ $promote->product->sku }}</td>
                        </tr>
                        <tr>
                          <td>Title</td>
                          <td>{{ $promote->product->title }}</td>
                        </tr>
                        <tr>
                          <td>Brand</td>
                          <td>{{ $promote->product->brand->name }}</td>
                        </tr>
                        <tr>
                          <td>Color</td>
                          <td>{{ $promote->product->color }}</td>
                        </tr>
                        <tr>
                          <td>Price</td>
                          <td> {{ $promote->product->main_price }} TK</td>
                        </tr>
                        <tr>
                          <td>Discount</td>
                          <td> {{ $promote->product->discount }}%</td>
                        </tr>
                        <tr>
                          <td>Availability</td>
                          <td>{{ $promote->product->availability }}</td>
                        </tr>
                        <tr>
                          <td>Details</td>
                          <td>{!! $promote->product->detailes !!}</td>
                        </tr>
                        <tr>
                          <td>Specification</td>
                          <td>{!! $promote->product->specification !!}</td>
                        </tr>
                        <tr>
                          <td>Message for Promote</td>
                          <td>{!! $promote->message !!}</td>
                        </tr>
                        <tr>
                          <td>Image</td>
                          <td>
                            <div class="p_image">
                              <img src="{{ asset('images/'.$promote->product->image0) }}" alt="">
                            </div>
                            <div class="p_image">
                            <img src="{{ asset('images/'.$promote->product->image1) }}" alt="">
                          </div>
                          <div class="p_image">
                            <img src="{{ asset('images/'.$promote->product->image2) }}" alt="">
                          </div>
                          <div class="p_image">
                            <img src="{{ asset('images/'.$promote->product->image3) }}" alt="">
                          </div>
                          <div class="p_image">
                            <img src="{{ asset('images/'.$promote->product->image4) }}" alt="">
                          </div>
                          <div class="p_image">
                            <img src="{{ asset('images/'.$promote->product->image5) }}" alt="">
                          </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                @if ($promote->promote_status == 1)
                  <button class="btn btn-primary pull-right" disabled> Promoted <i class="fa fa-product-hunt" aria-hidden="true"></i></button>
                @else
                  <form class="pull-right" action="{{ route('admin.promoteproduct', $promote->id) }}" method="post">
                      <button class="btn btn-primary"> Promote <i class="fa fa-product-hunt" aria-hidden="true"></i></button>
                      {!! csrf_field() !!}
                  </form>
                @endif
              </div>
              <!-- /.box-footer -->
          </div>

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    @endsection

    @section('page-script')

    @endsection

    @section('ckeditor')
      <script src="{{ asset('admin-assets/ckeditor/ckeditor.js') }}"></script>
      </script>
    @endsection

    @section('custom_script')

      <script type="text/javascript">

      </script>

    @endsection
