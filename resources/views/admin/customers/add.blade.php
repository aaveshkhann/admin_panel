@extends('admin.layout.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add Customer <button class="btn btn-danger btn-sm "> <a href="/admin/customer/show" class="text-white">View Customer</a> </button></h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add Customer</li>

          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

<form role="form" action="{{route('customer.add')}}" method="post"
					  enctype="multipart/form-data">

                      @csrf
					<div class="row m-2">
						<div class="col-md-12 m-2 p-2">
							<div class="box-body">
                                @if (session('success'))
                                <div class="alert alert-success">
                                    {{session('success')}}
                                    <button class="close" data-dismiss="alert">×</button>
                                </div>
                              @endif
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="exampleInputPassword1">Customer ID</label>
											<input type="text" class="form-control" name="customer_id" readonly
												   value="5049"
												   id="exampleInputPassword1">

										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Customer Name</label>
											<input type="text" class="form-control" name="name"
												   value=""
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
													  id="exampleInputPassword1"></textarea>
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
												   value=""
												   id="exampleInputPassword1">
											<span>
									</span>
                                    <span class="text-danger">
                                        @error('city')
                                           {{$message}}
                                        @enderror
                                       </span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Zip</label>
											<input type="text" class="form-control" name="zip"
												   value=""
												   id="exampleInputPassword1">
											<span>
									</span>
                                    <span class="text-danger">
                                        @error('zip')
                                           {{$message}}
                                        @enderror
                                       </span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">State</label>
											<input type="text" class="form-control" name="state"
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
											<label for="exampleInputPassword1">Country</label>
											<input type="text" class="form-control" name="country"
												   value=""
												   id="exampleInputPassword1">
											<span>
									</span>
                                    <span class="text-danger">
                                        @error('country')
                                           {{$message}}
                                        @enderror
                                       </span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Telephone</label>
											<input type="text" class="form-control" name="telephone"
												   value=""
												   id="exampleInputPassword1">
											<span>
									</span>
                                    <span class="text-danger">
                                        @error('telephone')
                                           {{$message}}
                                        @enderror
                                       </span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">MC#.</label>
											<input type="text" class="form-control" name="mc"
												   id="exampleInputPassword1">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Email</label>
											<input type="text" class="form-control" name="email"
												   id="exampleInputPassword1">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Notes</label>
											<textarea class="form-control" name="notes"
													  id="exampleInputPassword1"></textarea>
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
@endsection
