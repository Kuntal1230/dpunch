@extends('admin.layout.master')

@section('title',"Dashboard")

@section('site-class',"active")
@section('page-class',"active")
@section('page-add-class',"active")
@section('content')

  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-info">
          <div class="box-header with-border text-center">
            <h3 class="box-title">Add Single Page</h3>
            <br>
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form class="form-horizontal" method="post" action="{{ route('admin.addpage') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="detailes" class="col-sm-3 control-label">Page Title :</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control" name="page_title" value="">
                </div>
              </div>

              <div class="form-group">
                <label for="description" class="col-sm-3 control-label">Page Detailes :</label>

                <div class="col-sm-9">
                  <textarea id="description" name="description" rows="10" cols="60" required>{{ old('detailes') }}</textarea>
                </div>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="reset" class="btn btn-default">Reset</button>
              <button type="submit" class="btn btn-info pull-right">Submit</button>
            </div>
            <!-- /.box-footer -->
          </form>
        </div>

      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->

@endsection
@section('ckeditor')
  <script src="{{ asset('admin-assets/ckeditor/ckeditor.js') }}"></script>
  <script>
    $(function () {
      CKEDITOR.replace('description')
    })
  </script>
@endsection
