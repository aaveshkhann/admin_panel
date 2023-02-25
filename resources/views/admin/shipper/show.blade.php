@extends('admin.layout.app');

@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Show Shippers <button value="submit"class="btn btn-danger btn-sm" > <a href="/admin/shipper/add" class="text-white"> Add Shipper</a></button></h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active">Show Shippers</li>
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
					<h3 class="box-title">Add Shippers</h3>
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
    <table id="example1" class="table table-bordered table-striped display responsive nowraps">
    <!--Table head-->
    <thead>
      <tr>
        <th>shipper Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>City</th>
        <th>postal/zip</th>
        <th>State</th>
        <th>Contact</th>
        <th>Action</th>
      </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        @foreach ( $shippers as $shipper )


      <tr class="table-info">
        <th scope="row">{{$shipper->shippers_id}}</th>
        <td>{{$shipper->name}}</td>
        <td>{{$shipper->address}}</td>
        <td>{{$shipper->city}}</td>
        <td>{{$shipper->postal_zip}}</td>
        <td>{{$shipper->state}}</td>
        <td>{{$shipper->contact}}</td>
        <td>
            <a href="{{route('shipper.edit',['id'=>$shipper->id])}}"><i class="fas fa-edit"></i></a>
            <a href="{{route('shipper.delete',['id'=> $shipper ->id])}}"><i class="fa fa-trash" aria-hidden="true"></i> </a>

        </td>

      </tr>
     @endforeach

    </tbody>
    <!--Table body-->

  </table>
  <div class="m-3">
  {{$shippers->links()}}
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
