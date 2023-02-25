@extends('admin.layout.app')


@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add Shipper <button class="btn btn-danger btn-sm "> <a href="/admin/shipper/show" class="text-white">View Shippers</a> </button></h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add Shipper</li>

          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
				<!-- /.box-header -->
				<form role="form" action="{{route('shipper.update', ['id' => $shippers->id])}}" method="post"
					  enctype="multipart/form-data">
                      @method('PUT')
                      @csrf

                      @if (session('success'))
                      <div class="alert alert-success">
                          {{session('success')}}
                          <button class="close" data-dismiss="alert">×</button>
                      </div>
                    @endif

					<div class="row m-2">
						<div class="col-md-12">
							<div class="box-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="exampleInputPassword1">Shipper ID</label>
											<input type="text" class="form-control" name="shippers_id" readonly value="{{$shippers->shippers_id}}"

												   id="exampleInputPassword1">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Name</label>
											<input type="text" class="form-control" name="name"
												   value="{{$shippers->name}}"
												   id="exampleInputPassword1">
											<span>
									</span>
                                    <span class="text-danger">
                                        @error('name')
                                           {{$message}}
                                        @enderror
                                       </span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Address</label>
											<textarea class="form-control" name="address"
													  id="exampleInputPassword1">{{$shippers->address}}</textarea>
											<span>
									</span>
                                    <span class="text-danger">
                                        @error('address')
                                           {{$message}}
                                        @enderror
                                       </span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">City</label>
											<input type="text" class="form-control" name="city"
												   value="{{$shippers->city}}"
												   id="city">
											<input type="hidden" value="" name="latitude" id="latitude">
											<input type="hidden" value="" name="longitude" id="longitude">
											<span>
									</span>
                                    <span class="text-danger">
                                        @error('city')
                                           {{$message}}
                                        @enderror
                                       </span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Postal/Zip</label>
											<input type="text" class="form-control" name="postal_zip" value="{{$shippers->postal_zip}}"
												   value=""
												   id="exampleInputPassword1">
											<span>
									</span>
                                    <span class="text-danger">
                                        @error('postal_zip')
                                           {{$message}}
                                        @enderror
                                       </span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">State</label>
											<input type="text" class="form-control" name="state" value="{{$shippers->state}}"
												   value=""
												   id="exampleInputPassword1">
											<span>
									</span>
                                    <span class="text-danger">
                                        @error('state')
                                           {{$message}}
                                        @enderror
                                       </span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="exampleInputPassword1">Contact</label>
											<input type="text" class="form-control" name="contact" value="{{$shippers->contact}}"
												   id="exampleInputPassword1">

                                                   <span class="text-danger">
                                                    @error('contact')
                                                       {{$message}}
                                                    @enderror
                                                   </span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Telephone</label>
											<input type="text" class="form-control" name="telephone" value="{{$shippers->telephone}}"
												   id="exampleInputPassword1">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Ext.</label>
											<input type="text" class="form-control" name="ext" value="{{$shippers->ext}}"
												   id="exampleInputPassword1">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Contact Email</label>
											<input type="text" class="form-control" name="email" value="{{$shippers->email}}"
												   id="exampleInputPassword1">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Notes</label>
											<textarea class="form-control" name="notes"
													  id="exampleInputPassword1">{{$shippers->notes}}</textarea>
										</div>
									</div>
								</div>
							</div>
							<!-- /.box-body -->
							<div class="box-footer text-center">
								<button type="submit" class="btn btn-danger">Submit</button>
							</div>
						</div>
					</div>
					<!-- form start -->
				</form>
			</div>
			<!-- /.box -->

		</div>
		<!--/.col (left) -->
	</div>
@endsection
