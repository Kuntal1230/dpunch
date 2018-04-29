@extends('admin.layout.master')

@section('title',"All Cuppon")

@section('cuppon-classs',"active")

@section('all-cuppon-class',"active")

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cuppon page
        <small>all cuppon</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Cuppon</a></li>
        <li class="active">All cuppon</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header text-center">
              <h3 class="box-title">Cuppon Table</h3>

              @if (session('message'))
                  <div class="alert alert-success">
                      {{ session('message') }}
                  </div>
              @endif

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Cuppon Code</th>
                  <th>Cuppon value</th>
                  <th>Cuppon type</th>
                  <th>Discription</th>
                  <th>Status</th>
                  <th class="text-center" style="width:220px">Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($coupons as $key=>$element)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $element->code }}</td>
                      <td>{{ $element->value }}</td>
                      <td>{{ $element->type }}</td>
                      <td>{{ $element->discription }}</td>
                      <td>
                        @if ($element->validity==1)
                          Active
                        @else
                          Deactivate
                        @endif
                    </td>
                      <td class="text-center">
                        <a href="{{ route('admin.editcuponform',$element->id) }}" class="btn btn-info">Edit</a>|
                        <a href="{{ route('admin.managecupon',$element->id) }}" class="btn btn-info"
                          onclick="event.preventDefault(); document.getElementById('manage_form').submit();">
                          @if ($element->validity==1)
                            Daactivate
                          @elseif ($element->validity==0)
                            Active
                          @endif
                        </a>
                        <form id="manage_form" action="{{ route('admin.managecupon',$element->id) }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                            <input type="hidden" name="validity" value="@if ($element->validity==1)0 @elseif ($element->validity==0)1 @endif">
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Cuppon Code</th>
                  <th>Cuppon value</th>
                  <th>Cuppon type</th>
                  <th>Discription</th>
                  <th>Status</th>
                  <th class="text-center" style="width:220px">Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    @endsection

    @section('page-script')
      <!-- DataTables -->
      <script src="{{ asset('admin-assets/datatables.net/js/jquery.dataTables.min.js') }}"></script>
      <script src="{{ asset('admin-assets/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

      <script>
        $(function () {
          $('#example1').DataTable()
        });

        $('input[type=checkbox]').change(function() {
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          var id = $(this).data('id');
          var status = 0;
          if ($(this).is(":checked"))
              {
                status = 1;
              }

              console.log(id);

              $.ajax({
                   type:"POST",
                   url:"/admin/publish-product",
                   data: {id:id,status:status},
                   success : function(result) {
                      console.log(result);
                   }
              });
        });

        $(document).ready(function () {
            $('[data-toggle=confirmation-delet]').confirmation({
            rootSelector: '[data-toggle=confirmation-delet]',
              onConfirm: function (event, element) {
                  element.closest('form').submit();
              }
            });

        });
      </script>
    @endsection
