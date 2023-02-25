@extends('admin.layout.app');

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard <small>Control panel</small></h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard </li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{$loads}}</h3>

              <p>Load Entry</p>
            </div>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
            <a href="/admin/load_entry/show" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{$customers}}</h3>

              <p>Customers</p>
            </div>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
            <a href="/admin/customer/show" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>{{$shippers}}</h3>

              <p>Shippers</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-bag"></i>
            </div>
            <a href="/admin/shipper/show" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>{{$consignees}}</h3>

              <p>Consignees</p>
            </div>
            <div class="icon">
                <i class="fa fa-shopping-bag"></i>
            </div>
            <a href="/admin/consignee/show" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
            <div class="small-box bg-yellow">
            <div class="inner">
                <h3>{{$drivers}}</h3>

                <p>Drivers</p>
            </div>
            <div class="icon">
                <i class="fa fa-shopping-bag"></i>
            </div>
            <a href="/admin/driver/show" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
      </div>
      <div class="col-lg-3 col-6">
        <!-- small box -->
            <div class="small-box bg-dark">
            <div class="inner">
                <h3>{{$equipments}}</h3>

                <p>Equipments</p>
            </div>
            <div class="icon">
                <i class="fa fa-shopping-bag"></i>
            </div>
            <a href="/admin/equipment/show" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
      </div>

      <div class="col-lg-3 col-6">
        <!-- small box -->
            <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{$dispatchs}}</h3>

                <p>Dispatches</p>
            </div>
            <div class="icon">
                <i class="fa fa-shopping-bag"></i>
            </div>
            <a href="/admin/dispatch/show" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
      </div>

    </div>


      <!-- /.row -->
      <!-- Main row -->
        </section>
@endsection
