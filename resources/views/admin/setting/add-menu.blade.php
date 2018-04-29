@extends('admin.layout.master')

@section('title',"Dashboard")

@section('site-class',"active")
@section('menu-class',"active")
@section('menu-add-class',"active")
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

    <!-- /.row -->
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border text-center">
              <h3 class="box-title">Manage Brand</h3>
              @if (session('brandstatus'))
                  <div class="alert alert-success">
                      {{ session('brandstatus') }}
                  </div>
              @endif
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('admin.addbrand') }}" method="post">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                   <label>Main menu</label>
                   <select class="form-control select2" id="cat_for_brand" name="category_id" required style="width: 100%;">
                     <option value="" disabled selected>Select Category</option>
                     @foreach ($allcategory as $category)
                       <option value="{{ $category->id }}">{{ $category->name }}</option>
                     @endforeach
                   </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                   <label>Sub menu</label>
                   <select class="form-control select2" id="subcat_for_brand" name="subcategory_id" required style="width: 100%;">
                     <option value="" disabled selected>Select Subcategory</option>

                   </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                   <label>Child Menu</label>
                   <select class="form-control select2" id="under_subcat_for_brand" name="undersubcategory_id" style="width: 100%;">
                     <option value="" disabled selected>Select Child category</option>

                   </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="brand">Brand Name</label>
                  <input type="text" class="form-control" name="brand" id="brand" required placeholder="Brand name">
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
  </section>
  <!-- /.content -->

@endsection

@section('custom_script')

  <script type="text/javascript">

  $(document).ready(function() {
      $('#cat_for_subcat').change(function() {
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          var options = '';
          options += '<option value="">No data available</option>';
          $("select#sub_cat").html(options);
          var id =($(this).val());
          console.log(id);
          $.ajax({
               type:"POST",
               url:"/admin/ajaxsubcategory",
               data: {id:id},
               success : function(result) {
                 if (result.length>0) {
                   var options = '';
                   options += '<option value="" disabled selected>Select subcategory</option>';
                      for (var i = 0; i < result.length; i++) {
                        options += '<option value="' + result[i].id + '">' + result[i].name + '</option>';
                      }
                      $("select#sub_cat").html(options);
                 }

               }
          });
      });

      $('#cat_for_brand').change(function() {
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          var options = '';
          options += '<option value="">No data available</option>';
          $("select#subcat_for_brand").html(options);
          var id =($(this).val());
          console.log(id);
          $.ajax({
               type:"POST",
               url:"/admin/ajaxsubcategory",
               data: {id:id},
               success : function(result) {
                 if (result.length>0) {
                   var options = '';
                   options += '<option value="" disabled selected>Select subcategory</option>';
                      for (var i = 0; i < result.length; i++) {
                        options += '<option value="' + result[i].id + '">' + result[i].name + '</option>';
                      }
                      $("select#subcat_for_brand").html(options);
                 }

               }
          });
      });

      $('#subcat_for_brand').change(function() {
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          var options = '';
          options += '<option value="">No data available</option>';
          $("select#under_subcat_for_brand").html(options);
          var id =($(this).val());
          console.log(id);
          $.ajax({
               type:"POST",
               url:"/admin/ajaxundersubcategory",
               data: {id:id},
               success : function(result) {
                 if (result.length>0) {
                   var options = '';
                   options += '<option value="" disabled selected>Select Under Subcategory</option>';
                      for (var i = 0; i < result.length; i++) {
                        options += '<option value="' + result[i].id + '">' + result[i].name + '</option>';
                      }
                      $("select#under_subcat_for_brand").html(options);
                 }

               }
          });
      });

  });

  </script>

@endsection
