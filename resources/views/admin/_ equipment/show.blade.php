@extends('admin.layout.app');

@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Show Equipments <button value="submit"class="btn btn-danger btn-sm" > <a href="/admin/equipment" class="text-white"> Add Equipment</a></button></h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Show Equipments</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <section class="content">
	<!-- Small boxes (Stat box) -->
	<div class="row">
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Add Equipments</h3>
				</div>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="text text-center">
													</div>
					</div>
				</div>
  <!--Table-->
  <div class="box-body" style="overflow-y: scroll;overflow-x:scroll">
    <table id="example1" class="table table-bordered table-striped display responsive nowrap">
    <!--Table head-->
    <thead>
      <tr>
        <th>First Name</th>
        <th>Secend Name</th>
        <th>Unit Number</th>
        <th>make</th>
        <th>Type</th>
        <th>VIN</th>
        <th>Plate Number</th>
        <th>Plate Expiry</th>
        <th>Mileage</th>
        <th>Province</th>
        <th>Action</th>
      </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        @foreach ( $Equipments as $Equipment )


      <tr class="table-info">
        <th scope="row">{{$Equipment->owner_first_name}}</th>
        <td>{{$Equipment->owner_last_name}}</td>
        <td>{{$Equipment->unit_number}}</td>
        <td>{{$Equipment->make}}</td>
        <td>{{$Equipment->type}}</td>
        <td>{{$Equipment->vin}}</td>
        <td>{{$Equipment->plate_number}}</td>
        <td>{{$Equipment->plate_exp}}</td>
        <td>{{$Equipment->mileage}}</td>
        <td>{{$Equipment->province}}</td>
        <td>
            <a href="{{route('equipment.edit',['id'=>$Equipment->id ])}}"><i class="fas fa-edit"></i> </a>
            <a href="{{route('delete.equipment',['id'=>$Equipment->id])}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
        </td>
      </tr>
     @endforeach

    </tbody>
    <!--Table body-->

  </table>
  <div class="m-3">
  {{$Equipments->links()}}
</div>

  <!--Table-->
  </div>
</div>
</div>
</div>
<script>
    $(document).ready(function() {
      $('#example1').DataTable( {
          dom: 'Bfrtip',
          buttons: [
              'copy', 'csv',  'print'
          ]
      } );
  } );
  </script>

@endsection
