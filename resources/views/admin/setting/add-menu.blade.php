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
    <div class="row">
      <div class="col-md-4">
        <div class="box box-primary">
            <div class="box-header with-border text-center">
              <h3 class="box-title">Manage Main Menu</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="mainmenu">Main Menu Name</label>
                  <input type="text" class="form-control" id="mainmenu" placeholder="Main menu name">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
              </div>
            </form>
          </div>
      </div>
      <div class="col-md-4">
        <div class="box box-primary">
            <div class="box-header with-border text-center">
              <h3 class="box-title">Manage Sub Menu</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                   <label>Main menu</label>
                   <select class="form-control select2" style="width: 100%;">
                     <option selected="selected">Alabama</option>
                     <option>Alaska</option>
                     <option>California</option>
                     <option>Delaware</option>
                     <option>Tennessee</option>
                     <option>Texas</option>
                     <option>Washington</option>
                   </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="submenu">Sub Menu Name</label>
                  <input type="text" class="form-control" id="submenu" placeholder="Sub menu name">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
              </div>
            </form>
          </div>
      </div>
      <div class="col-md-4">
        <div class="box box-primary">
            <div class="box-header with-border text-center">
              <h3 class="box-title">Manage Category wise Menu</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                   <label>Main menu</label>
                   <select class="form-control select2" style="width: 100%;">
                     <option selected="selected">Alabama</option>
                     <option>Alaska</option>
                     <option>California</option>
                     <option>Delaware</option>
                     <option>Tennessee</option>
                     <option>Texas</option>
                     <option>Washington</option>
                   </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                   <label>Sub menu</label>
                   <select class="form-control select2" style="width: 100%;">
                     <option selected="selected">Alabama</option>
                     <option>Alaska</option>
                     <option>California</option>
                     <option>Delaware</option>
                     <option>Tennessee</option>
                     <option>Texas</option>
                     <option>Washington</option>
                   </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="categorymenu">Category Wise Menu Name</label>
                  <input type="text" class="form-control" id="categorymenu" placeholder="Category name">
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
    <!-- /.row -->
  </section>
  <!-- /.content -->

@endsection
