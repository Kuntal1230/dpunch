@extends('admin.layout.master')

@section('title',"All Product")

@section('page-style')
<link rel="stylesheet" href="{{ asset('admin-assets/css/fileinput.css') }}">
@endsection

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
              <br>
              @if (session('productstatus'))
                  <div class="alert alert-success">
                      {{ session('productstatus') }}
                  </div>
              @endif
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{ route('admin.addproduct') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                   <label for="" class="col-sm-3 control-label">Select Category <span class="text-red">* </span> :</label>
                   <div class="col-sm-9">
                     <select class="form-control select2" id="category" name="category_id" style="width: 100%;" required>
                       <option value="" disabled selected>Select Category</option>
                       @foreach ($allcategory as $category)
                         <option value="{{ $category->id }}">{{ $category->name }}</option>
                       @endforeach
                     </select>
                   </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                   <label for="" class="col-sm-3 control-label">Select Sub-Category <span class="text-red">* </span> :</label>
                   <div class="col-sm-9">
                     <select class="form-control select2" id="subcategory" name="subcategory_id" style="width: 100%;" required>
                       <option value="" disabled selected>Select Sub-category</option>
                     </select>
                   </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                   <label for="" class="col-sm-3 control-label">Select Product Category <span id="child_cat" class="text-red hidden">* </span> :</label>
                   <div class="col-sm-9">
                     <select class="form-control select2" id="undersubcategory" name="undersubcategory_id" style="width: 100%;">
                       <option value="" disabled selected>Select Product Category</option>
                     </select>
                   </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                   <label for="" class="col-sm-3 control-label">Product Brand <span class="text-red">* </span> :</label>
                   <div class="col-sm-9">
                     <select class="form-control select2" id="brand" name="brand_id" style="width: 100%;">
                       <option value="" disabled selected>Select Product Brand</option>
                     </select>
                   </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                   <label for="" class="col-sm-3 control-label">Product Condition :</label>
                   <div class="col-sm-9">
                     <select class="form-control select2" name="product_condition" style="width: 100%;">
                       <option value="" disabled selected>Select Product Condition</option>
                       <option value="New">New</option>
                       <option value="Refurnished">Refurnished</option>
                     </select>
                   </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                   <label for="" class="col-sm-3 control-label">Product Orgin :</label>
                   <div class="col-sm-9">
                     <select class="form-control select2" name="product_origin" style="width: 100%;">
                       <option value="" disabled selected>Select Product Orgin</option>
                       <option value="Original">Original</option>
                       <option value="Copy">Copy</option>
                       <option value="OME">OME</option>
                     </select>
                   </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="title" class="col-sm-3 control-label">Product Title <span class="text-red">* </span> :</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Product Title" required value="{{ old('title') }}">
                  </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="color" class="col-sm-3 control-label">Product Color <span class="text-red">* </span> :</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="color" name="color" placeholder="Product Color" required value="{{ old('color') }}">
                  </div>
                </div>
                <!-- /.form-group -->
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="price" class="col-sm-6 control-label">Product Price <span class="text-red">* </span> :</label>

                      <div class="col-sm-6 input-group">
                        <input type="number" class="form-control" id="price" name="price" placeholder="0.00" required value="{{ old('price') }}">
                        <div class="input-group-addon">৳</div>
                      </div>
                    </div>

                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="discount" class="col-sm-6 control-label">Product Discount :</label>

                      <div class="col-sm-6 input-group">
                        <input type="number" class="form-control" id="discount" name="discount" placeholder="00" value="{{ old('discount') }}">
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
                        <input type="text" class="form-control" id="" name="size_1" placeholder="S or 15" value="{{ old('size_1') }}">
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="" name="size_2" placeholder="M or 15.5" value="{{ old('size_2') }}">
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="" name="size_3" placeholder="L or 16" value="{{ old('size_3') }}">
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="" name="size_4" placeholder="XL or 16.5" value="{{ old('size_4') }}">
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="" name="size_5" placeholder="XXL or 17" value="{{ old('size_5') }}">
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="" name="size_6" placeholder="other" value="{{ old('size_6') }}">
                      </div>

                    </div>
                  </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Product Availability <span class="text-red">* </span> :</label>

                  <div class="col-sm-9">
                    <select class="form-control select2" name="availability" style="width: 100%;">
                      <option value="" disabled selected>Select Product Availability</option>
                      <option value="InStock">In Stock</option>
                      <option value="OutofStock">Out of Stock</option>
                    </select>
                  </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="detailes" class="col-sm-3 control-label">Product Image <span class="text-red">* </span> :</label>

                  <div class="col-sm-9">
                    <div class="file-loading">
                      <input id="product_img" class="file" type="file" name="image[]" multiple data-min-file-count="0">
                    </div>
                  </div>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                  <label for="detailes" class="col-sm-3 control-label">Product Detailes <span class="text-red">* </span> :</label>

                  <div class="col-sm-9">
                    <textarea id="detailes" name="detailes" rows="10" cols="60" required>{{ old('detailes') }}</textarea>
                  </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="specification" class="col-sm-3 control-label">Product Specifications <span class="text-red">* </span> :</label>

                  <div class="col-sm-9">
                    <textarea id="specification" name="specification" rows="10" cols="60" required>{{ old('specification') }}</textarea>
                  </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="return_replacement" class="col-sm-3 control-label">Return & Replacement Policy<span class="text-red">* </span> :</label>

                  <div class="col-sm-9">
                    <textarea id="return_replacement" name="return_replacement" rows="10" cols="60" required>{{ old('return_replacement') }}</textarea>
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

    @section('page-script')
      <script src="{{ asset('admin-assets/js/fileinput.js') }}"></script>
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

    @section('custom_script')

      <script type="text/javascript">

      $(document).ready(function() {
          $('#category').change(function() {
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
              var options = '';
              options += '<option value="">No data available</option>';
              $("select#subcategory").html(options);
              var id =($(this).val());
              $.ajax({
                   type:"POST",
                   url:"/admin/ajaxsubcategory/",
                   data: {id:id},
                   success : function(result) {
                     console.log(result);
                     if (result.length>0) {
                       var options = '';
                       options += '<option value="" disabled selected>Select subcategory</option>';
                          for (var i = 0; i < result.length; i++) {
                            options += '<option value="' + result[i].id + '">' + result[i].name + '</option>';
                          }
                          $("select#subcategory").html(options);
                     }

                   }
              });
          });

          $('#subcategory').change(function() {
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
              var options = '';
              options += '<option value="">No data available</option>';
              $("select#undersubcategory").html(options);
              $("select#undersubcategory").attr('disabled',true);
              $("select#undersubcategory").attr('required',false);
              $("#child_cat").addClass('hidden');
              var id =($(this).val());
              console.log(id);
              $.ajax({
                   type:"POST",
                   url:"/admin/ajaxundersubcategory/",
                   data: {id:id},
                   success : function(result) {
                     if (result.length>0) {
                       var options = '';
                       options += '<option value="" disabled selected>Select subcategory</option>';
                          for (var i = 0; i < result.length; i++) {
                            options += '<option value="' + result[i].id + '">' + result[i].name + '</option>';
                          }

                          $("select#undersubcategory").html(options);
                          $("select#undersubcategory").attr('disabled',false);
                          $("select#undersubcategory").attr('required',true);
                          $("#child_cat").removeClass('hidden');
                     }else{
                       var options = '';
                       options += '<option value="">No data available</option>';
                       $("select#brand").html(options);
                       $.ajax({
                         type:"POST",
                         url:"/admin/ajaxbrandbysubcat/",
                         data: {id:id},
                         success : function(result) {
                           if (result.length>0) {
                             var options = '';
                             options += '<option value="" disabled selected>Select Brand</option>';
                                for (var i = 0; i < result.length; i++) {
                                  options += '<option value="' + result[i].id + '">' + result[i].name + '</option>';
                                }
                                $("select#brand").html(options);
                                $("select#brand").attr('required',true);

                           }

                         }
                       })
                     }

                   }
              });
          });

          $('#undersubcategory').change(function() {
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
              var options = '';
              options += '<option value="">No data available</option>';
              $("select#brand").html(options);
              var id =($(this).val());
              $.ajax({
                   type:"POST",
                   url:"/admin/ajaxbrand/",
                   data: {id:id},
                   success : function(result) {
                     if (result.length>0) {
                       var options = '';
                       options += '<option value="" disabled selected>Select Brand</option>';
                          for (var i = 0; i < result.length; i++) {
                            options += '<option value="' + result[i].id + '">' + result[i].name + '</option>';
                          }
                          $("select#brand").html(options);
                          $("select#brand").attr('required',true);

                     }

                   }
              });
          });

      });
      </script>

    @endsection
