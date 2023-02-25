@extends('admin.layout.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add Equipment <button class="btn btn-danger btn-sm "> <a href="/admin/equipment/show" class="text-white">View Equipment</a> </button></h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add Equipment</li>

          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<!-- Main content -->
<section class="content">

				<!-- /.box-header -->
				<form role="form" action="{{route('equipment.add')}}" method="POST"
					  enctype="multipart/form-data">
                      @csrf
					<div class="row-2 mb-2">
						<div class="col-md-12">
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
											<label for="exampleInputPassword1">Owner First Name</label>
											<input type="text" class="form-control" name="owner_first_name"
												   value=""
												   id="exampleInputPassword1">
											<span>
									</span>
                                    <span class="text-danger">
                                        @error('owner_first_name')
                                           {{$message}}
                                        @enderror
                                       </span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Owner Last Name</label>
											<input type="text" class="form-control" name="owner_last_name"
												   value=""
												   id="exampleInputPassword1">
											<span>
									</span>
                                    <span class="text-danger">
                                        @error('owner_last_name')
                                           {{$message}}
                                        @enderror
                                       </span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Unit Number</label>
											<input type="text" class="form-control" name="unit_number"
												   value=""
												   id="exampleInputPassword1">
											<span>
									</span>
                                    <span class="text-danger">
                                        @error('unit_number')
                                           {{$message}}
                                        @enderror
                                       </span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Make</label>
											<input type="text" class="form-control" name="make"
												   value=""
												   id="exampleInputPassword1">
											<span>
									</span>
                                    <span class="text-danger">
                                        @error('make')
                                           {{$message}}
                                        @enderror
                                       </span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Type</label>
											<input type="text" class="form-control" name="type"
												   id="exampleInputPassword1">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Year</label>
											<input type="text" class="form-control" name="year"
												   value=""
												   id="exampleInputPassword1">
											<span>
									</span>
                                    <span class="text-danger">
                                        @error('year')
                                           {{$message}}
                                        @enderror
                                       </span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">VIN</label>
											<input type="text" class="form-control" name="vin"
												   value=""
												   id="exampleInputPassword1">
											<span>
									</span>
                                    <span class="text-danger">
                                        @error('vin')
                                           {{$message}}
                                        @enderror
                                       </span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Plate Number</label>
											<input type="text" class="form-control" name="plate_number"
												   value=""
												   id="exampleInputPassword1">
											<span>
									</span>
                                    <span class="text-danger">
                                        @error('plate_number')
                                           {{$message}}
                                        @enderror
                                       </span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Plate Expiry</label>
											<input type="text" class="form-control datepicker" name="plate_exp"
												   value=""
												   id="exampleInputPassword1">
											<span>
									</span>
                                    <span class="text-danger">
                                        @error('plate_exp')
                                           {{$message}}
                                        @enderror
                                       </span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Mileage</label>
											<input type="text" class="form-control" name="mileage"
												   id="exampleInputPassword1">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Truck</label>
											<input type="text" class="form-control" name="truck"
												   id="truck">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="exampleInputPassword1">Trailer</label>
											<input type="text" class="form-control" name="trailer"
												   id="trailer">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Province</label>
											<input type="text" class="form-control" name="province"
												   id="exampleInputPassword1">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Axels</label>
											<input type="text" class="form-control" name="axels"
												   id="exampleInputPassword1">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Fuel Type</label>
											<input type="text" class="form-control" name="fuel_type"
												   id="exampleInputPassword1">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Weight</label>
											<input type="text" class="form-control" name="weight"
												   id="exampleInputPassword1">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Start Date</label>
											<input type="date" class="form-control datepicker" name="start_date"
												   value=""
												   id="exampleInputPassword1">
											<span>
									</span>
                                    <span class="text-danger">
                                        @error('start_date')
                                           {{$message}}
                                        @enderror
                                       </span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Deactivation Date</label>
											<input type="date" class="form-control datepicker" name="deactivation_date"

                                            id="exampleInputPassword1">

										</div>

										<div class="form-group">
											<label for="exampleInputPassword1">DOT Inspection Date</label>
											<input type="date" class="form-control datepicker" name="dot_date"
												   value=""
												   id="exampleInputPassword1">
											<span>
									</span>
                                    <span class="text-danger">
                                        @error('dot_date')
                                           {{$message}}
                                        @enderror
                                       </span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">IFTA Truck</label>
											<select class="form-control select2" name="ifta_truck" id="">
												<option value="Yes">Yes</option>
												<option value="No">No</option>
											</select>
                                            <span class="text-danger">
                                                @error('ifta_truck')
                                                   {{$message}}
                                                @enderror
                                               </span>
										</div>

										<div class="form-group">
											<label for="exampleInputPassword1">Annual Inspection Date</label>
											<input type="date" class="form-control datepicker" name="annual_date"
												   value=""
												   id="exampleInputPassword1">
											<span>
									</span>
                                    <span class="text-danger">
                                        @error('annual_date')
                                           {{$message}}
                                        @enderror
                                       </span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">90 Days Inspection Date</label>
											<input type="text"  class="form-control datepicker"
												   name="days_inspection_date"
												   value=""
												   id="exampleInputPassword1">

											<span>
									</span>
                                    <span class="text-danger">
                                        @error('days_inspection_date')
                                           {{$message}}
                                        @enderror
                                       </span>
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
