@extends('admin.layout.master')

@section('title',"Dashboard")

@section('site-class',"active")
@section('menu-class',"active")
@section('menu-view-class',"active")
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
          <div class="box">
            <div class="box-header text-center">
              <h3 class="box-title">Main Menu</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>#</th>
                  <th>Menu Name</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>John Doe</td>
                  <td><span class="label label-success">Approved</span></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Alexander Pierce</td>
                  <td><span class="label label-warning">Pending</span></td>
                </tr>
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
