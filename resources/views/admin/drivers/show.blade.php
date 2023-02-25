@extends('admin.layout.app');

@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Show Drivers <button value="submit"class="btn btn-danger btn-sm" > <a href="/admin/driver" class="text-white"> Add Driver</a></button></h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Show Drivers</li>
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
					<h3 class="box-title">Add Driver</h3>
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
        <th>Drivers Id</th>
        <th>Name</th>
        <th>email</th>
        <th>address</th>
        <th>City</th>
        <th>Postal/zip</th>
        <th>State</th>
        <th>Phone</th>
        <th>dob</th>
        <th>Action</th>
      </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        @foreach ( $Drivers as $Driver )


      <tr class="table-info">
        <th scope="row">{{$Driver->driver_id}}</th>
        <td>{{$Driver->first_name}} <br>{{$Driver->last_name}}</td>
        <td>{{$Driver->email}}</td>
        <td>{{$Driver->address}}</td>
        <td>{{$Driver->city}}</td>
        <td>{{$Driver->postal_zip}}</td>
        <td>{{$Driver->state}}</td>
        <td>{{$Driver->telephone}}</td>
        <td>{{$Driver->dob}}</td>

            <td>
                <a href="{{route('driver.edit',['id'=>$Driver->id ])}}"><i class="fas fa-edit"></i> </a>
                <a href="{{url('/driver/delete',['id'=>$Driver->id])}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
      </tr>
     @endforeach

    </tbody>
    <!--Table body-->

  </table>
  <div class="m-3">
  {{$Drivers->links()}}
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
