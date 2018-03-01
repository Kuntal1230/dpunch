@extends('seller.layout.master')

@section('title',"Dashboard")

@section('setting-class',"active")

@section('content')
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Store Settings</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border text-center">
              <h3 class="box-title">Store Settings</h3>

              @if (session('message'))
                  <div class="alert alert-success">
                      {{ session('message') }}
                  </div>
              @endif
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('seller.addstoreinfo') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">

                <div class="form-group">
                  <label for="store_name">Store Name</label>
                  <input type="text" class="form-control" id="store_name" name="store_name" placeholder="Store name" value="{{ $store->store_name }}">
                </div>

                <div class="form-group">
                  <label for="address">Store Address</label>
                  <input type="text" class="form-control" id="address" name="address" placeholder="Store address" value="{{ $store->address }}">
                </div>

                <div class="form-group">
                  <label for="mobile">Contact Number</label>
                  <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Contact number" value="{{ $store->mobile }}">
                </div>

                <div class="form-group">
                  <label for="store_banar">Store Banar</label>
                  <input type="file" class="form-control" id="store_banar" name="store_banar" placeholder="Store banar">
                </div>


              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
              </div>
            </form>
          </div>

      </div>

    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->

@endsection
