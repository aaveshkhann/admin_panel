
@extends('admin.layout.app')


@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Settings </h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add Settings</li>

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

				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">

                            <form role="form" action="https://roommatebd.com/amit/delivery/admin/update_settings_record" method="post"
                            enctype="multipart/form-data">
                          <div class="box-body">
                              <div class="form-group">

                                  <label for="exampleInputPassword1" >Company Name</label>
                                  <input type="text" value="Abc" class="form-control" name="name"
                                         id="exampleInputPassword1"
                                         placeholder="Enter Name">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Company Email</label>
                                  <input type="text" class="form-control" value="info@abc.com" name="email"
                                         id="exampleInputPassword1"
                                         placeholder="Enter Email">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Address</label>
                                  <input class="form-control" name="address" value="Daka"
                                         id="address">
                                  <input type="hidden" value="" name="latitude" id="latitude">
                                  <input type="hidden" value="" name="longitude" id="longitude">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Phone</label>
                                  <input type="text" class="form-control" name="phone" id="exampleInputPassword1"
                                         value="9876543210"
                                         placeholder="Enter Phone">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Currency</label>
                                  <input type="text" class="form-control" name="currency" id="exampleInputPassword1"
                                         value="INR"
                                         placeholder="Enter Currency">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputFile">Logo</label>
                                  <input type="file" id="exampleInputFile" name="image"
                                         onchange="imagePreview(this);"><br>
                                                                          <img src="https://roommatebd.com/amit/delivery/image/b21e031dbeb5a53204460dd216bd1372.jpg" class="img-thumbnail" id="img">
                                                                  </div>
                          </div>
                          <!-- /.box-body -->

                          <input type="hidden" value="image/b21e031dbeb5a53204460dd216bd1372.jpg" name="old_logo">

                          <div class="box-footer">
                              <button type="submit" class="btn btn-danger">Submit</button>
                          </div>
                      </form>
					</div>
				</div>

			</div>
			<!-- /.box -->

		</div>
		<!--/.col (left) -->
	</div>
</div>
</div>
</div>
@endsection


