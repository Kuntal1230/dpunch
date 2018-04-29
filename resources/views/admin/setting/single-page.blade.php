@extends('admin.layout.master')

@section('title',"Dashboard")

@section('site-class',"active")
@section('page-class',"active")
@section('page-view-class',"active")
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
          <div class="box">
            <div class="box-header text-center">
              <h3 class="box-title">All Page</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Discription</th>
                  <th class="text-center" style="width:220px">Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($singlepages as $key=>$element)

                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $element->title }}</td>
                      <td>{!! str_limit($element->description, 50, '...') !!}</td>
                      <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('admin.editpage',$element->id) }}">Edit <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> |
                        <form class="pull-right" action="" method="post">
                            <input type="hidden" name="_method" value="delete" />
                            <button class="btn btn-danger" data-toggle="confirmation-delet" data-placement="left" type="button" data-original-title="" title=""> Delete <i class="fa fa-trash-o" aria-hidden="true"></i></button>
                            {!! csrf_field() !!}
                        </form>
                      </td>
                    </tr>
                    {{-- <a href="#">View <i class="fa fa-eye" aria-hidden="true"></i></a> |  --}}

                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Tittle</th>
                  <th>Discription</th>
                  <th class="text-center">Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
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
  </script>
@endsection
