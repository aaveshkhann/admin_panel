@extends('admin.layout.app');

@section('content')



<section class="content">
	<!-- Small boxes (Stat box) -->
	<div class="row-2">
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Driver Pay Summary</h3>
				</div>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="text text-center">
													</div>
					</div>
				</div>
				<!-- /.box-header -->
                <div class="container center_div">
				<div class="row-2">
					<div class="col-md-1"></div>
                    <form role="form" action="https://roommatebd.com/amit/delivery/report/show_driver_pay_report" method="post" target="_blank"
                    enctype="multipart/form-data">
                  <div class="col-md-6">
                      <div class="box-body">
                          <div class="form-group">
                              <label for="exampleInputPassword1">Driver</label>
                              <select class="form-control select2" name="driver_id" required>
                                  <option value="">--Select--</option>
                                                                              <option
                                          value="2">6001 - Saiful Sahim</option>
                                                                              <option
                                          value="3">6002 - Jake Wolde</option>
                                                                              <option
                                          value="5">6003 - nika gogiashvili</option>
                                                                              <option
                                          value="6">6004 - Immanuel Moses</option>
                                                                              <option
                                          value="7">6005 - Md Mahmud</option>
                                                                              <option
                                          value="8">6006 - ???????? ????????</option>
                                                                      </select>
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">From Date</label>
                              <input type="text" class="form-control datepicker" name="from_date" required
                                     value="2023-01-29"
                                     id="exampleInputPassword1">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">To Date</label>
                              <input type="text" class="form-control datepicker" name="to_date" required
                                     value="2023-01-31"
                                     id="exampleInputPassword1">
                          </div>
                      </div>
                      <!-- /.box-body -->

                      <div class="box-footer">
                          <button type="submit" class="btn btn-primary">Submit</button>
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
