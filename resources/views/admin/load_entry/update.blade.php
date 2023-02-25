@extends('admin.layout.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Load Entry <button value="submit"class="btn btn-danger btn-sm"><a href="/admin/load_entry/show"  class="text-white" >View Load Entry </a> </button></h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Load Entry</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <!-- Main content -->

				<!-- /.box-header -->
				<form role="form" action="{{route('load_entry.update',['id' => $Loads->id]) }}" method="POST"
					  enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
					<div class="row m-2 ">
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
											<label for="exampleInputPassword1">Load#</label>
											<input type="text" class="form-control" value="{{$Loads->load_id}}" name="load_id"

												   id="exampleInputPassword1">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Customer</label>
											<select name="customer_id"  class="form-control select2"  value="{{$Loads->customer_id}}" id="customer_id">
																									<option
														value="1">Mr. Y</option>
																									<option
														value="2">Test EASLEY</option>
																									<option
														value="3">mohammed omar</option>
																									<option
														value="4">Para</option>
																									<option
														value="6">jg</option>
																									<option
														value="7">aaaa</option>
																									<option
														value="11">mustafa</option>
																									<option
														value="12">rajkumar</option>
																									<option
														value="13">bank i</option>
																									<option
														value="14">kriti verma</option>
																									<option
														value="15">Shopping tn</option>
																									<option
														value="16">Otman Farzal</option>
																									<option
														value="17">BORUSAN TAŞIMA</option>
																									<option
														value="18">عبدالحميد إبراهيم</option>
																									<option
														value="19">Test Customer</option>
																									<option
														value="20">UCHENDU HENRY</option>
																									<option
														value="21">test143</option>
																									<option
														value="22">Alvaro</option>
																									<option
														value="23">abdirahim</option>
																									<option
														value="24">Sham Das</option>
																									<option
														value="25">nasrallah aissa</option>
																									<option
														value="26">Syed Sartaj Hussain Shah</option>
																									<option
														value="27">Na</option>
																									<option
														value="28">EDWIN GEKE KAMANDA</option>
																									<option
														value="29">nika gogiashvili</option>
																									<option
														value="30">LS Textiles</option>
																									<option
														value="32">Hasan</option>
																									<option
														value="33">ndq</option>
																									<option
														value="34">Josymar Vasoncelos</option>
																									<option
														value="35">Test</option>
																									<option
														value="37">tsouli</option>
																									<option
														value="38">Md Mahmud</option>
																									<option
														value="39">Erol Bekciogullari</option>
																									<option
														value="40">aaaa</option>
																									<option
														value="41">Jhon PT</option>
																									<option
														value="42">ABC</option>
																									<option
														value="43">Ben</option>
																									<option
														value="44">Quincy</option>
																									<option
														value="45">kinan</option>
																									<option
														value="46">arun</option>
																									<option
														value="47">كريم</option>
																									<option
														value="48">Alex</option>
																									<option
														value="49">Latif</option>
																							</select>
											<span>
									</span>
                                    <span class="text-danger">
                                        @error('customer_id')
                                           {{$message}}
                                        @enderror
                                       </span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Customer Load</label>
											<input type="text" class="form-control" name="customer_load"
												   value="{{$Loads->customer_load}}"
												   id="exampleInputPassword1">
											<span>
									</span>
                                    <span class="text-danger">
                                        @error('customer_load')
                                           {{$message}}
                                        @enderror
                                       </span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Load Type</label>
											<select name="load_type" value="{{$Loads->load_type}}" class="form-control select2">
												<option value="TL">TL</option>
												<option value="LTL">LTL</option>
											</select>
											<span>
									</span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Date</label>
											<input type="date" class="form-control datepicker" name="date" readonly
												   value="{{$Loads->date}}"
												   id="exampleInputPassword1">
											<span>
									</span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Pick Up Date</label>
											<input type="date" class="form-control datepicker" name="pick_up_date"
                                            value="{{$Loads->pick_up_date}}"
												   id="exampleInputPassword1">
											<span>
									</span>
                                    <span class="text-danger">
                                        @error('pick_up_date')
                                           {{$message}}
                                        @enderror
                                       </span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Delivery Date</label>
											<input type="date" class="form-control datepicker" name="delivery_date"
												   value="{{$Loads->delivery_date}}"
												   id="exampleInputPassword1">
											<span>
									</span>
                                    <span class="text-danger">
                                        @error('delivery_date')
                                           {{$message}}
                                        @enderror
                                       </span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Dispatch</label>
											<select class="form-control select2" value="{{$Loads->dispatch}}" name="dispatch">
																									<option
														value="1">Demo Last Demo</option>
																									<option
														value="2">King Test</option>
																									<option
														value="3">Michael antonov</option>
																									<option
														value="4">Arafat Akash</option>
																									<option
														value="6">ssdsd dsdsd</option>
																									<option
														value="8">dd 643hh</option>
																									<option
														value="9">dasd sdsads</option>
																									<option
														value="10">Abinandhanan Chahat</option>
																									<option
														value="11">GRAND KUWAIT INTERNATIONAL</option>
																									<option
														value="15">test test</option>
																									<option
														value="16">Rahul Raj</option>
																									<option
														value="17">Denis Chirchir</option>
																									<option
														value="18">Edwin Koech</option>
																									<option
														value="19">nika gogiashvili</option>
																									<option
														value="20">hasan Poyraz</option>
																									<option
														value="21">Aurora Mona</option>
																									<option
														value="22">fatih türk</option>
																									<option
														value="23">Abdulkadir Açıkgöz</option>
																									<option
														value="24">AHOUETOHOU Mahougnigan</option>
																									<option
														value="25">Jack Joe</option>
																									<option
														value="26">Erol Bekciogullari</option>
																									<option
														value="27">enhancebyshareeka cas</option>
																									<option
														value="28">Hassan Khan</option>
																									<option
														value="29">test dporin</option>
																									<option
														value="31">ajlan kinan</option>
																									<option
														value="32">pppppppppp pppp</option>
																									<option
														value="33">Phema Chakma</option>
																									<option
														value="34">Ali Mukhammadiev</option>
																							</select>
											<span>
									</span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Line Haul Rate</label>
											<input type="text" class="form-control" name="line_haul_rate"
												   value="{{$Loads->line_haul_rate}}"
												   id="line_haul_rate">
											<span>
									</span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Unloading$</label>
											<input type="text" class="form-control" name="unloading"  value="{{$Loads->unloading}}"
												   id="unloading">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Reimburse$</label>
											<select class="form-control select2 reimburse" name="reimburse"
													id="reimburse">
												<option value="Yes">Yes</option>
												<option value="No">No</option>
											</select>
											<span>
									</span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Detention$</label>
											<input type="text" class="form-control" name="detention"  value="{{$Loads->detention}}"
												   id="detention">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Layover$</label>
											<input type="text" class="form-control" name="layover"  value="{{$Loads->layover}}"
												   id="layover">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Other Charges$</label>
											<input type="text" class="form-control" name="other_charges"  value="{{$Loads->other_charges}}"
												   id="other_charges">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Total Rate$</label>
											<input type="text" class="form-control" name="total_rate"  value="{{$Loads->total_rate}}"
												   id="total_rate">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Driver</label>
											<select name="driver_id" value="{{$Loads->driver_id}}" class="form-control select2 driver_id"
													id="driver_id">
												<option value="">--Select--</option>
																									<option
														value="2">Saiful Sahim</option>
																									<option
														value="3">Jake Wolde</option>
																									<option
														value="5">nika gogiashvili</option>
																									<option
														value="6">Immanuel Moses</option>
																									<option
														value="7">Md Mahmud</option>
																									<option
														value="8">معتز بريب</option>
																							</select>
											<span>
									</span>
                                    <span class="text-danger">
                                        @error('driver_id')
                                           {{$message}}
                                        @enderror
                                       </span>
										</div>
                                        <input type="hidden" name="oldConsigneeLat" id="oldConsigneeLat">
                                        <input type="hidden" name="oldConsigneeLong" id="oldConsigneeLong">
                                        <input type="hidden" name="oldConsigneeCity" id="oldConsigneeCity">
										<div class="form-group">
											<label for="exampleInputPassword1">Truck</label>
											<input type="text" class="form-control" name="truck"  value="{{$Loads->truck}}"
												   id="truck">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Trailer</label>
											<input type="text" class="form-control" name="trailer"  value="{{$Loads->trailer}}"
												   id="trailer">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Rate</label>
											<input type="text" class="form-control" name="rate"  value="{{$Loads->rate}}"
												   id="rate">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Shipper</label>
											<select class="form-control select2" name="shipper_id" value="{{$Loads->shipper_id}}" id="shipper_id">
												<option value="">--Select--</option>
																									<option value="2">Mr. Ahmad</option>
																									<option value="3">ELLISON FIRST ASIA</option>
																									<option value="7">Kabi Raj Giri</option>
																									<option value="8">Devender</option>
																									<option value="9">shipper</option>
																									<option value="10">Abassi Mehdi</option>
																									<option value="11">igwe</option>
																									<option value="12">asdadsa</option>
																									<option value="14">Berry Nelly</option>
																									<option value="15">hjkghjk</option>
																									<option value="16">AMAZON</option>
																									<option value="17">Mohit Kumar</option>
																									<option value="18">ICBC</option>
																									<option value="19">ndq</option>
																									<option value="20">Leo</option>
																									<option value="21">carlos villalobos</option>
																									<option value="24">18A</option>
																									<option value="25">72</option>
																									<option value="26">OSHI PAULINUS</option>
																									<option value="27">Ebieh Julius</option>
																									<option value="28">Ali</option>
																									<option value="29">Caseworx</option>
																									<option value="30">shipper a</option>
																									<option value="31">shipper a</option>
																									<option value="32">tenderjo tenderjo</option>
																									<option value="33">Haidar Kafa</option>
																									<option value="34">Mocha</option>
																									<option value="35">Gfhh</option>
																									<option value="36">Purushottam</option>
																									<option value="37">HARE PLAN</option>
																									<option value="38">Doris Malia</option>
																									<option value="39">Doris Malia</option>
																									<option value="40">CUSTOMS &amp; BODER PROTECTION</option>
																									<option value="41">Jim Allan</option>
																									<option value="42">Olusegun ADEKUNLE</option>
																							</select>
											<span>
									</span>
                                    <span class="text-danger">
                                        @error('shipper_id')
                                           {{$message}}
                                        @enderror
                                       </span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="exampleInputPassword1">Address</label>
											<textarea class="form-control" name="address"  value="{{$Loads->address}}"
													  id="address"></textarea>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">City</label>
											<input type="text" class="form-control" name="city"  value="{{$Loads->city}}"
												   id="city">
											<input type="hidden" value="" name="latitude" id="latitude">
											<input type="hidden" value="" name="longitude" id="longitude">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Zip Code</label>
											<input type="text" class="form-control" name="zip_code"  value="{{$Loads->zip_code}}"
												   id="zip_code">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">State</label>
											<input type="text" class="form-control" name="state"  value="{{$Loads->state}}"
												   id="state">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Weight</label>
											<input type="text" class="form-control" name="weight"  value="{{$Loads->weight}}"
												   id="exampleInputPassword1">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Qty</label>
											<input type="text" class="form-control" name="qty"  value="{{$Loads->qty}}"
												   id="exampleInputPassword1">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Shipper Contact</label>
											<input type="text" class="form-control" name="shipper_contact"  value="{{$Loads->shipper_contact}}"
												   id="exampleInputPassword1">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Note</label>
											<textarea class="form-control" name="note"  value="{{$Loads->note}}"
													  id="exampleInputPassword1"></textarea>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Consignee</label>
											<select class="form-control select2" name="consignee_id" value="{{$Loads->consignee_id}}" id="consignee_id">
												<option value="">--Select--</option>
																									<option
														value="1">Mr. X</option>
																									<option
														value="2">Touch of class</option>
																									<option
														value="4">sonihewo@mailinator.com</option>
																									<option
														value="5">Karthik Ajai</option>
																									<option
														value="6">Happiness Agwazia</option>
																									<option
														value="7">carrot</option>
																									<option
														value="8">sdfsd</option>
																									<option
														value="9">dggga ajsjaaks</option>
																									<option
														value="10">Sandeep Yadav</option>
																									<option
														value="11">ah kao</option>
																									<option
														value="12">shipper a</option>
																									<option
														value="13">shipper a</option>
																									<option
														value="14">hamdan Abdulkarim</option>
																									<option
														value="15">STAN BOOTS</option>
																									<option
														value="16">hghghghgamod</option>
																							</select>
											<span>
									</span>
                                    <span class="text-danger">
                                        @error('consignee_id')
                                           {{$message}}
                                        @enderror
                                       </span>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Address</label>
											<textarea class="form-control" name="con_address"  value="{{$Loads->con_address}}"
													  id="con_address"></textarea>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">City</label>
											<input type="text" class="form-control" name="con_city" value="{{$Loads->con_city}}"
												   id="con_city">
											<input type="hidden" value="" name="clatitude" id="clatitude">
											<input type="hidden" value="" name="clongitude" id="clongitude">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Zip Code</label>
											<input type="text" class="form-control" name="con_zip_code" value="{{$Loads->con_zip_code}}"
												   id="con_zip_code">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">State</label>
											<input type="text" class="form-control" name="con_state" value="{{$Loads->con_state}}"
												   id="con_state">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Consignee Contact</label>
											<input type="text" class="form-control" name="con_contact" value="{{$Loads->con_contact}}"
												   id="con_contact">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Con. Note</label>
											<textarea class="form-control" name="con_note" value="{{$Loads->con_note}}"
													  id="con_note"></textarea>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Empty M</label>
											<input type="text" class="form-control" name="empty_m" value="{{$Loads->empty_m}}"
												   id="empty_mile">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Loaded M</label>
											<input type="text" class="form-control" name="loaded_m" value="{{$Loads->loaded_m}}"
												   id="loaded">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Per Mile</label>
											<input type="text" class="form-control" name="per_mile" value="{{$Loads->per_mile}}"
												   id="per_mile">
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
@endsection
