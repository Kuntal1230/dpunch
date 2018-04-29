@extends('admin.layout.master')

@section('title',"Dashboard")

@section('site-class',"active")
@section('manage-class',"active")
@section('add-categorybanner-class',"active")
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
            <h3 class="box-title">Manage Category Banner</h3>
          </div>
          <!-- /.box-header -->
          <div class="col-md-6">
              <div class="box box-info">
                <div class="box-header with-border text-center">
                  <h3 class="box-title">Mobiles & Tablets Category Banner</h3>
                </div>
            <form method="post" action="{{ route('admin.addcategorybanner','mobile') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="bannerimg">Mobiles & Tablets banner</label>
                  <input type="file" name="bannerimg" id="bannerimg" class="form-control">
                </div>
                <div class="form-group">
                  <label for="bannerlink">Page Link</label>
                  <input type="text" class="form-control" id="bannerlink" name="bannerlink" value="" placeholder="Mobiles & Tablets banner Link" required>
                </div>
              </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-info pull-right">Submit</button>
                  </div>
            </form>
          </div>
          </div>
          <div class="col-md-6">
              <div class="box box-info">
                <div class="box-header with-border text-center">
                  <h3 class="box-title">Fashion & Beauty Category Banner</h3>
                </div>
            <form method="post" action="{{ route('admin.addcategorybanner','fashion') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="slider2">Fashion & Beauty banner</label>
                  <input type="file" id="slider2" name="bannerimg" class="form-control">
                </div>
                <div class="form-group">
                  <label for="slider2text">Page Link</label>
                  <input type="text" class="form-control" id="slider2text" name="bannerlink" value="" placeholder="Fashion & Beauty Category Banner Link" required>
                </div>
              </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-info pull-right">Submit</button>
                  </div>
            </form>
          </div>
          </div>
          <div class="col-md-6">
              <div class="box box-info">
                <div class="box-header with-border text-center">
                  <h3 class="box-title">Computers Category Banner</h3>
                </div>
            <form method="post" action="{{ route('admin.addcategorybanner','computers') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="slider3">Computers banner</label>
                  <input type="file" id="slider3" name="bannerimg" class="form-control">
                </div>
                <div class="form-group">
                  <label for="slider3text">Page Link</label>
                  <input type="text" class="form-control" id="slider3text" name="bannerlink" value="" placeholder="Computers Category Banner Link" required>
                </div>
              </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-info pull-right">Submit</button>
                  </div>
            </form>
          </div>
          </div>
          <div class="col-md-6">
              <div class="box box-info">
                <div class="box-header with-border text-center">
                  <h3 class="box-title">Electronics & Appliances Category Banner</h3>
                </div>
            <form method="post" action="{{ route('admin.addcategorybanner','electronics') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="slider4">Electronics & Appliances banner</label>
                  <input type="file" id="slider4" name="bannerimg" class="form-control">
                </div>
                <div class="form-group">
                  <label for="slider4text">Page Link</label>
                  <input type="text" class="form-control" id="slider4text" name="bannerlink" value="" placeholder="Electronics & Appliances Category Banner Link" required>
                </div>
              </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-info pull-right">Submit</button>
                  </div>
            </form>
          </div>
          </div>
          <div class="col-md-6">
              <div class="box box-info">
                <div class="box-header with-border text-center">
                  <h3 class="box-title">Entertainment Category Banner</h3>
                </div>
            <form method="post" action="{{ route('admin.addcategorybanner','entertainment') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="slider5">Entertainment banner</label>
                  <input type="file" id="slider5" name="bannerimg" class="form-control">
                </div>
                <div class="form-group">
                  <label for="slider5text">Page Link</label>
                  <input type="text" class="form-control" id="slider5text" name="bannerlink" value="" placeholder="Entertainment Category Banner Link" required>
                </div>
              </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-info pull-right">Submit</button>
                  </div>
            </form>
          </div>
          </div>
          <div class="col-md-6">
              <div class="box box-info">
                <div class="box-header with-border text-center">
                  <h3 class="box-title">Cars & Bikes Category Banner</h3>
                </div>
            <form method="post" action="{{ route('admin.addcategorybanner','cars') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="slider6">Cars & Bikes banner</label>
                  <input type="file" id="slider6" name="bannerimg" class="form-control">
                </div>
                <div class="form-group">
                  <label for="slider6text">Page Link</label>
                  <input type="text" class="form-control" id="slider6text" name="bannerlink" value="" placeholder="Cars & Bikes Category Banner Link" required>
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
      </div>
    </div>

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
