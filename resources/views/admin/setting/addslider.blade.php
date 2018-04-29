@extends('admin.layout.master')

@section('title',"Dashboard")

@section('site-class',"active")
@section('manage-class',"active")
@section('slider-add-class',"active")
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
      <div class="col-md-12">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="box box-info">
          <div class="box-header with-border text-center">
            <h3 class="box-title">Manage Slider</h3>
          </div>
          <!-- /.box-header -->
          <div class="col-md-6">
              <div class="box box-info">
            <form method="post" action="{{ route('admin.addslider',1) }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="slider1">Slide 1</label>
                  <input type="file" name="slider" id="slider1" class="form-control">
                </div>
                <div class="form-group">
                  <label for="slider1text">Slide Discription</label>
                  <input type="text" class="form-control" id="slider1text" name="slidertext" value="" placeholder="Slide 1 discription" required>
                </div>
                <div class="form-group">
                  <label for="slider1link">Page Link</label>
                  <input type="text" class="form-control" id="slider1link" name="sliderlink" value="" placeholder="Slide 1 page link" required>
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
            <form method="post" action="{{ route('admin.addslider',2) }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="slider2">Slide 2</label>
                  <input type="file" id="slider2" name="slider" class="form-control">
                </div>
                <div class="form-group">
                  <label for="slider2text">Slide Discription</label>
                  <input type="text" class="form-control" id="slider2text" name="slidertext" value="" placeholder="Slide 2 discription" required>
                </div>
                <div class="form-group">
                  <label for="slider2link">Page Link</label>
                  <input type="text" class="form-control" id="slider2link" name="sliderlink" value="" placeholder="Slide 2 page link" required>
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
            <form method="post" action="{{ route('admin.addslider',3) }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="slider3">Slide 3</label>
                  <input type="file" id="slider3" name="slider" class="form-control">
                </div>
                <div class="form-group">
                  <label for="slider3text">Slide Discription</label>
                  <input type="text" class="form-control" id="slider3text" name="slidertext" value="" placeholder="Slide 3 discription" required>
                </div>
                <div class="form-group">
                  <label for="slider3link">Page Link</label>
                  <input type="text" class="form-control" id="slider3link" name="sliderlink" value="" placeholder="Slide 3 page link" required>
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
            <form method="post" action="{{ route('admin.addslider',4) }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="slider4">Slide 4</label>
                  <input type="file" id="slider4" name="slider" class="form-control">
                </div>
                <div class="form-group">
                  <label for="slider4text">Slide Discription</label>
                  <input type="text" class="form-control" id="slider4text" name="slidertext" value="" placeholder="Slide 4 discription" required>
                </div>

                <div class="form-group">
                  <label for="slider4link">Page Link</label>
                  <input type="text" class="form-control" id="slider4link" name="sliderlink" value="" placeholder="Slide 4 page link" required>
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
            <form method="post" action="{{ route('admin.addslider',5) }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="slider5">Slide 5</label>
                  <input type="file" id="slider5" name="slider" class="form-control">
                </div>
                <div class="form-group">
                  <label for="slider5text">Slide Discription</label>
                  <input type="text" class="form-control" id="slider5text" name="slidertext" value="" placeholder="Slide 5 discription" required>
                </div>
                <div class="form-group">
                  <label for="slider5link">Page Link</label>
                  <input type="text" class="form-control" id="slider5link" name="sliderlink" value="" placeholder="Slide 5 page link" required>
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
            <form method="post" action="{{ route('admin.addslider',6) }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="slider6">Slide 6</label>
                  <input type="file" id="slider6" name="slider" class="form-control">
                </div>
                <div class="form-group">
                  <label for="slider6text">Slide Discription</label>
                  <input type="text" class="form-control" id="slider6text" name="slidertext" value="" placeholder="Slide 6 discription" required>
                </div>
                <div class="form-group">
                  <label for="slider6link">Page Link</label>
                  <input type="text" class="form-control" id="slider6link" name="sliderlink" value="" placeholder="Slide 6 page link" required>
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
