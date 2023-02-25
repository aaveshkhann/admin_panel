@extends('admin.layout.app')


@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add User <button class="btn btn-danger btn-sm "> <a href="/admin/add_user/show" class="text-white">View Users</a> </button></h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add User</li>

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
					<h4 class="box-title">Add User</h4>
				</div>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="text text-center">
													</div>
					</div>
				</div>
				<!-- /.box-header -->
                <div class="row-2">
					<div class="col-md-1"></div>
					<form role="form" action="{{route('adduser.update',$users->id)}}" method="post"
						  enctype="multipart/form-data">
                          @csrf
                          @method('PUT')
                          <div class="container ml-5">
						<div class="col-md-6">
							<div class="box-body">
								<div class="form-group">
									<label for="exampleInputPassword1">Name</label>
									<input type="text" class="form-control" name="name" id="exampleInputPassword1"
										   value="{{$users->name}}"
										   placeholder="Enter Name">
									<span>
									</span>
                                    <span class="text-danger">
                                        @error('name')
                                           {{$message}}
                                        @enderror
                                       </span>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Email</label>
									<input type="text" class="form-control" name="email" id="exampleInputPassword1"
                                    value="{{$users->email}}" placeholder="Enter Email">
									<span>
									</span>
                                    <span class="text-danger">
                                        @error('email')
                                           {{$message}}
                                        @enderror
                                       </span>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Username</label>
									<input type="text" class="form-control" name="username" id="exampleInputPassword1"
                                    value="{{$users->username}}"
										   placeholder="Enter Username">
									<span>
									</span>
                                    <span class="text-danger">
                                        @error('username')
                                           {{$message}}
                                        @enderror
                                       </span>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Phone</label>
									<input type="text" class="form-control" name="phone" id="exampleInputPassword1"
                                    value="{{$users->phone}}"
										   placeholder="Enter Phone">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Password</label>
									<input type="password" class="form-control" name="password"
										   id="exampleInputPassword1"
										   placeholder="Enter Password">
									<span>
									</span>
                                    <span class="text-danger">
                                        @error('password')
                                           {{$message}}
                                        @enderror
                                       </span>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Confirm Password</label>
									<input type="password" class="form-control" name="confirm_password"
										   id="exampleInputPassword1"
										   placeholder="Enter Confirm Password">
									<span>
									</span>
                                    <span class="text-danger">
                                        @error('confirm_password')
                                           {{$message}}
                                        @enderror
                                       </span>
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Image</label>
									<input type="file" id="exampleInputFile" name="image" required
										   onchange="imagePreview(this);"><br>
									<img src="http://placehold.it/150x150" class="img-thumbnail" id="img">
								</div>
							</div>
							<!-- /.box-body -->

							<div class="box-footer">
								<button type="submit" class="btn btn-danger">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- /.box -->
        </div>
		</div>
		<!--/.col (left) -->
	</div>
</div>
</div>
</div>
@endsection
