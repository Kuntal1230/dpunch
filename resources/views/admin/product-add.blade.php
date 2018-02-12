@extends('admin.layout.master')

@section('title',"All Product")

@section('product-classs',"active")

@section('add-product-class',"active")

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Product page
        <small>add products</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Products</a></li>
        <li class="active">Add product</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header with-border text-center">
              <h3 class="box-title">Add Product</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                   <label for="" class="col-sm-3 control-label">Select Category <span class="text-red">* </span> :</label>
                   <div class="col-sm-9">
                     <select class="form-control select2" style="width: 100%;">
                       <option value="" disabled selected>Select Category</option>
                       <option>Alaska</option>
                       <option>California</option>
                       <option>Delaware</option>
                       <option>Tennessee</option>
                       <option>Texas</option>
                       <option>Washington</option>
                     </select>
                   </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                   <label for="" class="col-sm-3 control-label">Select Sub-Category <span class="text-red">* </span> :</label>
                   <div class="col-sm-9">
                     <select class="form-control select2" style="width: 100%;">
                       <option value="" disabled selected>Select Sub-category</option>
                       <option>Alabama</option>
                       <option>Alaska</option>
                       <option>California</option>
                       <option>Delaware</option>
                       <option>Tennessee</option>
                       <option>Texas</option>
                       <option>Washington</option>
                     </select>
                   </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                   <label for="" class="col-sm-3 control-label">Select Product Category <span class="text-red">* </span> :</label>
                   <div class="col-sm-9">
                     <select class="form-control select2" style="width: 100%;">
                       <option value="" disabled selected>Select Product Category</option>
                       <option>Alaska</option>
                       <option>California</option>
                       <option>Delaware</option>
                       <option>Tennessee</option>
                       <option>Texas</option>
                       <option>Washington</option>
                     </select>
                   </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                   <label for="" class="col-sm-3 control-label">Product Condition :</label>
                   <div class="col-sm-9">
                     <select class="form-control select2" style="width: 100%;">
                       <option value="" disabled selected>Select Product Condition</option>
                       <option>Alaska</option>
                       <option>California</option>
                       <option>Delaware</option>
                       <option>Tennessee</option>
                       <option>Texas</option>
                       <option>Washington</option>
                     </select>
                   </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                   <label for="" class="col-sm-3 control-label">Product Orgin :</label>
                   <div class="col-sm-9">
                     <select class="form-control select2" style="width: 100%;">
                       <option value="" disabled selected>Select Product Orgin</option>
                       <option>Alaska</option>
                       <option>California</option>
                       <option>Delaware</option>
                       <option>Tennessee</option>
                       <option>Texas</option>
                       <option>Washington</option>
                     </select>
                   </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Product Title <span class="text-red">* </span> :</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="" placeholder="Product Title">
                  </div>
                </div>
                <!-- /.form-group -->
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="" class="col-sm-6 control-label">Product Price <span class="text-red">* </span> :</label>

                      <div class="col-sm-6 input-group">
                        <input type="number" class="form-control" id="" value="0.00">
                        <div class="input-group-addon">৳</div>
                      </div>
                    </div>

                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="" class="col-sm-6 control-label">Product Discount :</label>

                      <div class="col-sm-6 input-group">
                        <input type="number" class="form-control" id="" value="00">
                        <div class="input-group-addon">%</div>
                      </div>
                    </div>

                  </div>

                </div>

                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Product Size :</label>
                  <div class="col-sm-9">
                    <div class="row">
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="" placeholder="S or 15">
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="" placeholder="M or 15.5">
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="" placeholder="L or 16">
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="" placeholder="XL or 16.5">
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="" placeholder="XXL or 17">
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="" placeholder="other">
                      </div>

                    </div>
                  </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Product Availability <span class="text-red">* </span> :</label>

                  <div class="col-sm-9">
                    <select class="form-control select2" style="width: 100%;">
                      <option value="" disabled selected>Select Product Orgin</option>
                      <option>Alaska</option>
                      <option>California</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
                    </select>
                  </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="detailes" class="col-sm-3 control-label">Product Detailes <span class="text-red">* </span> :</label>

                  <div class="col-sm-9">
                    <textarea id="detailes" name="detailes" rows="10" cols="60"></textarea>
                  </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="specification" class="col-sm-3 control-label">Product Specifications <span class="text-red">* </span> :</label>

                  <div class="col-sm-9">
                    <textarea id="specification" name="specification" rows="10" cols="60"></textarea>
                  </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="return_replacement" class="col-sm-3 control-label">Return & Replacement Policy<span class="text-red">* </span> :</label>

                  <div class="col-sm-9">
                    <textarea id="return_replacement" name="return_replacement" rows="10" cols="60"></textarea>
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

    @section('ckeditor')
      <script src="{{ asset('admin-assets/ckeditor/ckeditor.js') }}"></script>
      <script>
        $(function () {
          CKEDITOR.replace('detailes')
          CKEDITOR.replace('specification')
          CKEDITOR.replace('return_replacement')
        })
      </script>
    @endsection
