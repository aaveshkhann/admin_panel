@extends('admin.layout.app')


@section('content')

<!-- Main content -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add Dispatch <button class="btn btn-danger btn-sm "> <a href="/admin/dispatch/show" class="text-white">View Dispatchs</a> </button></h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add Dispatch</li>

          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="container center_div">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="text text-center">
                                    </div>
    </div>
</div>

				<div class="row-2">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="text text-center">
													</div>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="row-3">
					<div class="col-md-1"></div>
					<form role="form" action="{{route('dispatch.update',['id'=>$dispatch->id])}}" method="post"
						  enctype="multipart/form-data">
                          @csrf
                          @method('PUT')
                          <div class="container ml-5">
						<div class="col-md-6">
							<div class="box-body">
                                @if (session('success'))
                                <div class="alert alert-success">
                                    {{session('success')}}
                                    <button class="close" data-dismiss="alert">×</button>
                                </div>
                              @endif
								<div class="form-group">
									<label for="exampleInputPassword1">Dispatch ID</label>
									<input type="text" class="form-control" name="dispatch_id"
										   id="exampleInputPassword1"
										   value="{{$dispatch->dispatch_id}}" readonly>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">First Name</label>
									<input type="text" class="form-control" name="first_name" id="exampleInputPassword1"
                                    value="{{$dispatch->first_name}}"  placeholder="Enter First Name">
									<span>
									</span>
                                    <span class="text-danger">
                                        @error('first_name')
                                           {{$message}}
                                        @enderror
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Last Name</label>
									<input type="text" class="form-control" name="last_name" id="exampleInputPassword1"
                                    value="{{$dispatch->last_name}}"
										   placeholder="Enter Last Name">
									<span>
									</span>
                                    <span class="text-danger">
                                        @error('last_name')
                                           {{$message}}
                                        @enderror
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Phone</label>
									<input type="text" class="form-control" name="phone"
                                    value="{{$dispatch->phone}}"  id="exampleInputPassword1"
										   placeholder="Enter Phone">
									<span>
									</span>
                                    <span class="text-danger">
                                        @error('phone')
                                           {{$message}}
                                        @enderror
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Email</label>
									<input type="text" class="form-control" name="email" id="exampleInputPassword1"
                                    value="{{$dispatch->email}}"
										   placeholder="Enter Email">
									<span>
									</span>
                                    <span class="text-danger">
                                        @error('email')
                                           {{$message}}
                                        @enderror
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Rate(%)</label>
									<input type="number" step="any" class="form-control" name="rate"
										   id="exampleInputPassword1"
                                           value="{{$dispatch->rate}}"
										   placeholder="%">
									<span>
									</span>
                                    <span class="text-danger">
                                        @error('rate')
                                           {{$message}}
                                        @enderror
								</div>
							</div>
							<!-- /.box-body -->
                        </div>
							<div class="box-footer">
								<button type="submit" class="btn btn-danger">Submit</button>
							</div>
						</div>
					</form>
				</div>
				<!-- form start -->
				<br><br><br>
			</div>
			<!-- /.box -->

		</div>
		<!--/.col (left) -->
	</div>
</div>
@endsection
