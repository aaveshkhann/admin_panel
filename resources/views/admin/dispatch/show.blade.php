@extends('admin.layout.app');

@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Show dispatch <button value="submit"class="btn btn-danger btn-sm" > <a href="/admin/dispatch" class="text-white"> Add dispatchs</a></button></h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Show dispatchs</li>
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
					<h3 class="box-title">Add dispatch</h3>
				</div>
                {{-- <button onclick="window.print()" >print</button> --}}
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
        <th>dispatch Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Rate</th>
        <th>Action</th>
      </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        @foreach ( $dispatchs as $dispatch )


      <tr class="table-info">
        <th scope="row">{{$dispatch->dispatch_id}}</th>
        <td>{{$dispatch->first_name}} </td>
        <td>{{$dispatch->last_name}} </td>
        <td>{{$dispatch->phone}}</td>
        <td>{{$dispatch->email}}</td>
        <td>{{$dispatch->rate}}</td>
        <td>
            <a href="{{route('dispatch.edit',['id'=>$dispatch->id ])}}"><i class="fas fa-edit"></i> </a>
            <a href="{{route('delete.dispatch',['id'=>$dispatch->id])}}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
      </tr>
     @endforeach

    </tbody>
    <!--Table body-->

  </table>
  <div class="m-3">
  {{$dispatchs->links()}}
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
