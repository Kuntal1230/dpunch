@extends('admin.layout.master')

@section('title',"Dashboard")

@section('site-class',"active")
@section('manage-class',"active")
@section('banner-add-class',"active")
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
      @if (session('message'))
          <div class="alert alert-success">
              {{ session('message') }}
          </div>
      @endif
      <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border text-center">
              <h3 class="box-title">Manage Banner Add</h3>
            </div>
            <!-- /.box-header -->
            <form method="post" action="{{ route('admin.addbanner',1) }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="bannerimg">Banner Image</label>
                  <input type="file" class="form-control" id="bannerimg" name="banner">
                </div>
                <div class="form-group">
                  <label for="bannerlink">Page link</label>
                  <input type="text" class="form-control" id="bannerlink" name="bannerlink" required>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
            </form>
          </div>
      </div>
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->

@endsection
@section('ckeditor')
  <script src="{{ asset('admin-assets/ckeditor/ckeditor.js') }}"></script>
  <script>
    $(function () {
      CKEDITOR.replace('editor1')
      CKEDITOR.replace('return_replacement')
    })
  </script>
@endsection
