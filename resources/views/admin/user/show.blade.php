
@extends('admin.layout.app');

@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Show Users <button value="submit"class="btn btn-danger btn-sm" > <a href="/admin/add_user" class="text-white"> Add User</a></button></h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active">Show Users</li>
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
					<h3 class="box-title">Add User</h3>
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
        <th>SL Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Username</th>
        <th>Status</th>
        <th>Action</th>


      </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        @foreach ( $Add_Users as $Add_User )


      <tr class="table-info">
        <th scope="row">{{$Add_User->id}}</th>
        <td>{{$Add_User->name}}</td>
        <td>{{$Add_User->email}}</td>
        <td>{{$Add_User->username}}</td>

        <td>
            <input type="checkbox" name="status" {{ $Add_User->status == 1 ? 'checked' : '' }} data-toggle="toggle" data-on="Active" data-off="Inactive">


        </td>
        <td>

            <a href="{{route('adduser.edit',['id'=>$Add_User->id])}}"><i class="fas fa-edit"></i></a>
            <a href="{{route('delete.adduser',['id'=> $Add_User ->id])}}"><i class="fa fa-trash" aria-hidden="true"></i> </a>
        </td>



      </tr>
     @endforeach

    </tbody>
    <!--Table body-->

  </table>
  <div class="m-3">
  {{$Add_Users->links()}}
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
