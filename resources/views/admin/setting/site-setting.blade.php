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
      <div class="col-md-12">
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
                  <input type="text" class="form-control" id="slider1text" name="slidertext" value="" placeholder="Slide 1 discription">
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
                  <input type="text" class="form-control" id="slider2text" name="slidertext" value="" placeholder="Slide 2 discription">
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
                  <input type="text" class="form-control" id="slider3text" name="slidertext" value="" placeholder="Slide 3 discription">
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
                  <input type="text" class="form-control" id="slider4text" name="slidertext" value="" placeholder="Slide 4 discription">
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
                  <input type="text" class="form-control" id="slider5text" name="slidertext" value="" placeholder="Slide 5 discription">
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
                  <input type="text" class="form-control" id="slider6text" name="slidertext" value="" placeholder="Slide 6 discription">
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
      <br>
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
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
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
    <div class="row">
      <div class="col-md-12">
        <div class="box box-info">
          <div class="box-header with-border text-center">
            <h3 class="box-title">Manage Return & Replacement Policy</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form class="form-horizontal">
            <div class="box-body pad">
                    <textarea id="return_replacement" name="return_replacement" rows="50" cols="">
                      <h2>Return &amp; Replacement Policy</h2>
                      <ol>
                        <li>
                          <p>You can return this product for a full refund within 3 calendar days of receiving your order.</p>
                        </li>
                        <li>
                          <p>Please read the <span style="color: #0000ff;"><strong><a title="Return &amp; Replacement Policy" href="" target="_blank"><span style="color: #0000ff;">Return and Replacement Policy</span></a></strong></span> Page thoroughly before requesting a return or replacement for your purchased item.</p>
                        </li>
                        <li>
                          <p>If your purchased item meets all the requirements, your return can be initiated via two options -</p>
                        </li>
                        <ul>
                          <li>
                            <p>Option 1: Communicating with us by Facebook chat or through Live Chat on Pickaboo website.</p>
                          </li>
                          <li>
                            <p>Option 2: By calling Pickaboo’s Customer Service on 09666745745.</p>
                          </li>
                          <li>
                            <p>Option 3: Directly drop off the product at the office premises or by post by Sundarban Courier Service.</p>
                          </li>
                          <li>
                            <p>Option 4: Request online by clicking on My Account followed by clicking on the Return/Replacement section then “Request new Return”.</p>
                          </li>
                        </ul>
                        <li>
                          <p>Whether you prefer to replace or get a refund for your purchased item, please specify to the Customer Service.</p>
                        </li>
                        <li>
                          <p>Pickaboo’s Customer Service will contact you as soon as your product has been received for replacement.</p>
                        </li>
                      </ol>
                      <h2>WARRANTY POLICY</h2>
                      <ol>
                        <li>
                          <p>The warranty covers any defects in material under normal use during the warranty period.</p>
                        </li>
                        <li>
                          <p>Any software related issues (device malfunction or battery drainage issues) will be under the service warranty coverage if the problem is not caused by the user/customer.</p>
                        </li>
                        <li>
                          <p>In accidental cases such as a broken display, bending, scratch, dent, burn, soaked or liquid damage, root or manual update issues, the service warranty will become void.</p>
                        </li>
                        <li>
                          <p>The limited warranty applies to physical products purchased from the online shop, Pickaboo.com.</p>
                        </li>
                        <li>
                          <p>In the case of “Official Warranty Product”, customers are suggested to communicate with the products nominated Customer Service Point to avail their warranty services.</p>
                        </li>
                      </ol>
                      <p><strong>NOTE:</strong></p><p><span>★&nbsp;&nbsp;&nbsp;Please read the </span><span style="color: #0000ff;"><strong><a title="Warranty Policy" href="" target="_blank"><span style="color: #0000ff;">Warranty Policy</span></a></strong></span> carefully before claiming warranty service or any further information.</p>
                      <p><span>★&nbsp;&nbsp;&nbsp;Please read the </span><span style="color: #0000ff;"><strong><a title="Terms of Service" href="" target="_blank"><span style="color: #0000ff;">Terms of Service</span></a></strong></span> carefully before accessing our website or using our services. By accessing or using any part of the site, you agree to be legally bound by these Terms of Service.</p>
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
      CKEDITOR.replace('return_replacement')
    })
  </script>
@endsection
