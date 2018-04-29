@extends('admin.layout.master')

@section('title',"Add Cuppon")

@section('cuppon-classs',"active")

@section('add-cuppon-class',"active")

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cuppon page
        <small>Edit cuppon</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Cuppon</a></li>
        <li class="active">Edit cuppon</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header with-border text-center">
              <h3 class="box-title">Edit Cuppon</h3>
              <br>
              @if (session('cupponstatus'))
                  <div class="alert alert-success">
                      {{ session('cupponstatus') }}
                  </div>
              @endif
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{ route('admin.editcupon',$coupon->id) }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="title" class="col-sm-3 control-label">Cuppon Code <span class="text-red">* </span> :</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="Cuppon Code" name="code" placeholder="Cuppon Code" required value="{{ $coupon->code }}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="title" class="col-sm-3 control-label">Coupon Type <span class="text-red">* </span> :</label>

                  <div class="col-sm-9">
                    <select class="form-control" name="cupon_type">
                      @if ($coupon->type =='fixed')
                        <option value="fixed" selected>Fixed Amount</option>
                      @elseif ($coupon->type=='percent')
                        <option value="percent" selected>Percentage</option>
                      @endif
                      <option value="">Select Cupon Type</option>
                      <option value="fixed">Fixed Amount</option>
                      <option value="percent">Percentage</option>

                    </select>

                  </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="color" class="col-sm-3 control-label">Cuppon Value <span class="text-red">* </span> :</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="color" name="value" placeholder="Cuppon Value" value="{{ $coupon->value }}">
                  </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="color" class="col-sm-3 control-label">Cuppon Discription :</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="color" name="discription" placeholder="Cuppon Discription" value="{{ $coupon->discription }}">
                  </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="reset" class="btn btn-default">Reset</button>
                <span class="text-red">* Please fill up the required fields</span>
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
