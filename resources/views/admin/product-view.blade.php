@extends('admin.layout.master')

@section('title',"All Product")

@section('page-style')
<link rel="stylesheet" href="{{ asset('admin-assets/css/fileinput.css') }}">
@endsection

@section('product-classs',"active")

@section('all-product-class',"active")

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Product page
        <small>View products</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Products</a></li>
        <li class="active">View product</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header with-border text-center">
              <h3 class="box-title">View Product</h3>
              <br>
              @if (session('message'))
                  <div class="alert alert-success">
                      {{ session('message') }}
                  </div>
              @endif
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width:300px"></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>SKU</td>
                          <td>{{ $product->sku }}</td>
                        </tr>
                        <tr>
                          <td>Title</td>
                          <td>{{ $product->title }}</td>
                        </tr>
                        <tr>
                          <td>Brand</td>
                          <td>{{ $product->brand->name }}</td>
                        </tr>
                        <tr>
                          <td>Color</td>
                          <td>{{ $product->color }}</td>
                        </tr>
                        <tr>
                          <td>Product Condition</td>
                          <td>{{ $product->product_condition }}</td>
                        </tr>
                        <tr>
                          <td>Product Origin</td>
                          <td>{{ $product->product_origin }}</td>
                        </tr>
                        <tr>
                          <td>Category</td>
                          <td>{{ $product->category->name }}</td>
                        </tr>
                        <tr>
                          <td>Subcategory</td>
                          <td>{{ $product->subcategory->name }}</td>
                        </tr>
                        <tr>
                          <td>Product category</td>
                          <td>{{ $product->undersubcategory->name }}</td>
                        </tr>
                        <tr>
                          <td>Price</td>
                          <td>{{ $product->price }} .TK</td>
                        </tr>
                        @if ($product->discount)
                          <tr>
                            <td>Discount</td>
                            <td>{{ $product->discount }}</td>
                          </tr>
                        @endif

                        @if ($product->size_1)
                          <tr>
                            <td>Size</td>
                            <td>{{ $product->size_1 }},{{ $product->size_2 }},{{ $product->size_3 }},{{ $product->size_4 }},{{ $product->size_5 }},{{ $product->size_6 }}</td>
                          </tr>
                        @endif
                        <tr>
                          <td>Availability</td>
                          <td>{{ $product->availability }}</td>
                        </tr>
                        <tr>
                          <td>Details</td>
                          <td>{!! $product->detailes !!}</td>
                        </tr>
                        <tr>
                          <td>Specification</td>
                          <td>{!! $product->specification !!}</td>
                        </tr>
                        <tr>
                          <td>Availability</td>
                          <td>{{ $product->availability }}</td>
                        </tr>
                        <tr>
                          <td>Image</td>
                          <td>
                            <div class="p_image">
                              <img src="{{ asset('images/'.$product->image0) }}" alt="">
                            </div>
                            <div class="p_image">
                            <img src="{{ asset('images/'.$product->image1) }}" alt="">
                          </div>
                          <div class="p_image">
                            <img src="{{ asset('images/'.$product->image2) }}" alt="">
                          </div>
                          <div class="p_image">
                            <img src="{{ asset('images/'.$product->image3) }}" alt="">
                          </div>
                          <div class="p_image">
                            <img src="{{ asset('images/'.$product->image4) }}" alt="">
                          </div>
                          <div class="p_image">
                            <img src="{{ asset('images/'.$product->image5) }}" alt="">
                          </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              </div>
              <!-- /.box-footer -->
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
      <script type="text/javascript">
            var img0;
            var img1;
            var img2;
            var img3;
            var img4;
            var img5;
            @if ($product->image0)
              img0 = <?php echo json_encode(asset('images/'.$product->image0), JSON_HEX_TAG); ?>;
            @endif
            @if ($product->image1)
              img1 = <?php echo json_encode(asset('images/'.$product->image1), JSON_HEX_TAG); ?>;
            @endif
            @if ($product->image2)
              img2 = <?php echo json_encode(asset('images/'.$product->image2), JSON_HEX_TAG); ?>;
            @endif
            @if ($product->image3)
              img3 = <?php echo json_encode(asset('images/'.$product->image3), JSON_HEX_TAG); ?>;
            @endif
            @if ($product->image4)
              img4 = <?php echo json_encode(asset('images/'.$product->image4), JSON_HEX_TAG); ?>;
            @endif
            @if ($product->image5)
              img5 = <?php echo json_encode(asset('images/'.$product->image5), JSON_HEX_TAG); ?>;
            @endif


            $("#product_img").fileinput({
              initialPreview: [
              img0,
              img1,
              img2,
              img3,
              img4,
              img5,
          ],
          initialPreviewAsData: true
          });

      </script>
    @endsection

    @section('ckeditor')
      <script src="{{ asset('admin-assets/ckeditor/ckeditor.js') }}"></script>
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
