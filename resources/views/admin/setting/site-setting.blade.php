@extends('admin.layout.master')

@section('title',"Dashboard")

@section('site-class',"active")
@section('site-setting-class',"active")
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
      <div class="col-md-6">
        <div class="box box-info">
          <div class="box-header with-border text-center">
            <h3 class="box-title">Manage Logo</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form>
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile">

                <p class="help-block">Example block-level help text here.</p>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-default">Cancel</button>
              <button type="submit" class="btn btn-info pull-right">Submit</button>
            </div>
            <!-- /.box-footer -->
          </form>
        </div>
      </div>
      <div class="col-md-6">
        <div class="box box-info">
          <div class="box-header with-border text-center">
            <h3 class="box-title">Manage Logo</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form>
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile">

                <p class="help-block">Example block-level help text here.</p>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-default">Cancel</button>
              <button type="submit" class="btn btn-info pull-right">Submit</button>
            </div>
            <!-- /.box-footer -->
          </form>
        </div>
      </div>
      <div class="col-md-12">
        <div class="box box-info">
          <div class="box-header with-border text-center">
            <h3 class="box-title">Manage Slider</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form>
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile">

                <p class="help-block">Example block-level help text here.</p>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile">

                <p class="help-block">Example block-level help text here.</p>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile">

                <p class="help-block">Example block-level help text here.</p>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile">

                <p class="help-block">Example block-level help text here.</p>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-default">Cancel</button>
              <button type="submit" class="btn btn-info pull-right">Submit</button>
            </div>
            <!-- /.box-footer -->
          </form>
        </div>
      </div>
      <div class="col-md-5">
        <div class="box box-info">
          <div class="box-header with-border text-center">
            <h3 class="box-title">Manage Social Link</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form class="form-horizontal">
            <div class="box-body">
              <div class="form-group">
                <label for="facebook" class="col-sm-2 control-label">Facebook</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" id="facebook" placeholder="Facebook link">
                </div>
              </div>
              <div class="form-group">
                <label for="twittr" class="col-sm-2 control-label">Twittr</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" id="twittr" placeholder="Twittr link">
                </div>
              </div>
              <div class="form-group">
                <label for="youtube" class="col-sm-2 control-label">YouTube</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" id="youtube" placeholder="Yiutube link">
                </div>
              </div>
              <div class="form-group">
                <label for="google" class="col-sm-2 control-label">Google+</label>

                <div class="col-sm-10">
                  <input type="text" class="form-control" id="google" placeholder="Google+ link">
                </div>
              </div>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-default">Cancel</button>
              <button type="submit" class="btn btn-info pull-right">Submit</button>
            </div>
            <!-- /.box-footer -->
          </form>
        </div>
      </div>
      <div class="col-md-7">
        <div class="box box-info">
          <div class="box-header with-border text-center">
            <h3 class="box-title">Manage address</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form class="form-horizontal">
            <div class="box-body pad">
                    <textarea id="editor1" name="editor1" rows="10" cols="60">
                      <div itemprop="address">
                        <span itemprop="streetAddress"><span class="fa fa-fw"></span> Flat no B-5 Plot 06 <br>Block SW(H)</span>,
                        <span itemprop="addressLocality">Mirpur Avenue</span>,
                        <br> <span itemprop="addressRegion">Dhaka</span> -
                        <span itemprop="postalCode">1212</span>,
                        <span itemprop="addressCountry">Bangladesh</span>
                      </div>
                        <p class="em-phone"><span itemprop="telephone"><span class="fa fa-fw"></span> +1 877-216-8883</span></p>
                        <p class="em-email"><span itemprop="email"><span class="fa fa-fw"></span> support@example.com</span></p>
                    </textarea>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-default">Cancel</button>
              <button type="submit" class="btn btn-info pull-right">Submit</button>
            </div>
            <!-- /.box-footer -->
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
    })
  </script>
@endsection
