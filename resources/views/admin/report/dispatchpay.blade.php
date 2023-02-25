@extends('admin.layout.app');

@section('content')


<section class="content">
	<!-- Small boxes (Stat box) -->
	<div class="row">
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Dispatch Pay Summary</h3>
				</div>

				<!-- /.box-header -->

				<div class="row-2">
					<div class="col-md-1"></div>
					<form role="form" action="{{route('report.driver')}}" method="post"
						  target="_blank"
						  enctype="multipart/form-data">
                          @csrf

						<div class="col-md-6">
							<div class="box-body">
								<div class="form-group">
									<label for="exampleInputPassword1">Dispatch</label>
									<select class="form-control select2" name="dispatch_id" required>
										<option value="">--Select--</option>
																					<option
												value="1">DISP-2001 - Demo Last Demo</option>
																					<option
												value="2">DISP-2002 - King Test</option>
																					<option
												value="3">DISP-2003 - Michael antonov</option>
																					<option
												value="4">DISP-2004 - Arafat Akash</option>
																					<option
												value="6">DISP-2006 - ssdsd dsdsd</option>
																					<option
												value="8">DISP-2007 - dd 643hh</option>
																					<option
												value="9">DISP-2008 - dasd sdsads</option>
																					<option
												value="10">DISP-2009 - Abinandhanan Chahat</option>
																					<option
												value="11">DISP-2010 - GRAND KUWAIT INTERNATIONAL</option>
																					<option
												value="15">DISP-2014 - test test</option>
																					<option
												value="16">DISP-2015 - Rahul Raj</option>
																					<option
												value="17">DISP-2016 - Denis Chirchir</option>
																					<option
												value="18">DISP-2017 - Edwin Koech</option>
																					<option
												value="19">DISP-2018 - nika gogiashvili</option>
																					<option
												value="20">DISP-2019 - hasan Poyraz</option>
																					<option
												value="21">DISP-2020 - Aurora Mona</option>
																					<option
												value="22">DISP-2021 - fatih türk</option>
																					<option
												value="23">DISP-2022 - Abdulkadir Açıkgöz</option>
																					<option
												value="24">DISP-2023 - AHOUETOHOU Mahougnigan</option>
																					<option
												value="25">DISP-2024 - Jack Joe</option>
																					<option
												value="26">DISP-2025 - Erol Bekciogullari</option>
																					<option
												value="27">DISP-2026 - enhancebyshareeka cas</option>
																					<option
												value="28">DISP-2027 - Hassan Khan</option>
																					<option
												value="29">DISP-2028 - test dporin</option>
																					<option
												value="31">DISP-2029 - ajlan kinan</option>
																					<option
												value="32">DISP-2030 - pppppppppp pppp</option>
																					<option
												value="33">DISP-2031 - Phema Chakma</option>
																					<option
												value="34">DISP-2032 - Ali Mukhammadiev</option>
																			</select>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">From Date</label>
									<input type="date" class="form-control datepicker" name="from_date" required
										   id="exampleInputPassword1">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">To Date</label>
									<input type="date" class="form-control datepicker" name="to_date" required
										   id="exampleInputPassword1">
								</div>
							</div>
							<!-- /.box-body -->

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
@endsection
