@extends('admin.layout.app')

@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add Driver <button value="submit"class="btn btn-danger btn-sm" > <a href="/admin/driver/show" class="text-white"> Show Driver</a></button></h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active">Add Driver</li>
          </ol>

        </div><!-- /.col -->

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<form role="form" action="{{route('driver.adddata')}}" method="POST"
enctype="multipart/form-data">
@csrf
<div class="row-3">
  <div class="col-md-12">
      <div class="box-body">
        @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
            <button class="close" data-dismiss="alert">×</button>
        </div>
      @endif
          <div class="row m-1">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="exampleInputPassword1">Driver ID</label>
                      <input type="text" class="form-control" name="driver_id" readonly
                             value="6007"
                             id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">First Name</label>
                      <input type="text" class="form-control" name="first_name"
                             value=""
                             id="exampleInputPassword1">
                      <span>
              </span>
              <span class="text-danger">
                @error('first_name')
                   {{$message}}
                @enderror
               </span>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Last Name</label>
                      <input type="text" class="form-control" name="last_name"
                             value=""
                             id="exampleInputPassword1">
                      <span>
              </span>
              <span class="text-danger">
                @error('last_name')
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
                  <div class="form-group">
                      <label for="exampleInputPassword1">Postal/Zip Code</label>
                      <input type="text" class="form-control" name="postal_zip"
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
                      <label for="exampleInputPassword1">Email</label>
                      <input type="text" class="form-control" name="email"
                             value=""
                             id="exampleInputPassword1">
                      <span>
              </span>
              <span class="text-danger">
                @error('email')
                   {{$message}}
                @enderror
               </span>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">DOB</label>
                      <input type="date" class="form-control datepicker" name="dob"
                             id="exampleInputPassword1">
                      <span>
              </span>
              <span class="text-danger">
                @error('dob')
                   {{$message}}
                @enderror
               </span>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">SSN</label>
                      <input type="text" class="form-control" name="ssn"
                             value=""
                             id="exampleInputPassword1">
                      <span>
              </span>
              <span class="text-danger">
                @error('ssn')
                   {{$message}}
                @enderror
               </span>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Insurance (Liability & Cargo)</label>
                      <input type="number" step="any" class="form-control" name="insurance"
                             value=""
                             id="exampleInputPassword1">
                      <span>
              </span>
              <span class="text-danger">
                @error('insurance')
                   {{$message}}
                @enderror
               </span>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Insurance (Truck/Trailer PD)</label>
                      <input type="number" step="any" class="form-control" name="insurance_truck"
                             value=""
                             id="exampleInputPassword1">
                      <span>
              </span>
              <span class="text-danger">
                @error('insurance_truck')
                   {{$message}}
                @enderror
               </span>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">IFTA Service</label>
                      <input type="number" step="any" class="form-control" name="ifta_service"
                             value=""
                             id="exampleInputPassword1">
                      <span>
              </span>
              <span class="text-danger">
                @error('ifta_service')
                   {{$message}}
                @enderror
               </span>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Account Holder</label>
                      <select class="form-control select2" name="account_holder">
                          <option value="">--Select--</option>
                                                                              <option value="1">Kalyan Brata 1</option>
                                                                              <option value="3">Amit </option>
                                                                              <option value="6">Mohammed omar</option>
                                                                              <option value="9">tryuyio</option>
                                                                              <option value="10">Arif Ansari</option>
                                                                              <option value="11">Darshan</option>
                                                                              <option value="12">Akter</option>
                                                                              <option value="13">Akter</option>
                                                                              <option value="14">hakim</option>
                                                                              <option value="15">nnmdi</option>
                                                                              <option value="16">test</option>
                                                                              <option value="17">test</option>
                                                                              <option value="19">Amir</option>
                                                                              <option value="20">Sambanet</option>
                                                                              <option value="21">sdgf</option>
                                                                              <option value="22">abdirahim</option>
                                                                              <option value="23">Amit</option>
                                                                              <option value="24">Najam Awan</option>
                                                                              <option value="25">RAJEEV BOSS</option>
                                                                              <option value="26"></option>
                                                                              <option value="27">test</option>
                                                                              <option value="28">Lila Dyer</option>
                                                                              <option value="29">pickkaro.pk</option>
                                                                              <option value="30">fdfdf</option>
                                                                              <option value="31">Md Mahmud</option>
                                                                              <option value="32">Gora Pene</option>
                                                                              <option value="33">1234</option>
                                                                              <option value="34">1234 Person</option>
                                                                              <option value="35">testo</option>
                                                                              <option value="36">rohit</option>
                                                                              <option value="37">kk</option>
                                                                              <option value="38">tenderjo test</option>
                                                                              <option value="39">dia</option>
                                                                              <option value="40">Blukel</option>
                                                                              <option value="41"></option>
                                                                              <option value="42"></option>
                                                                              <option value="43">Idriso</option>
                                                                              <option value="44">amit</option>
                                                                              <option value="45">ras</option>
                                                                              <option value="46">Rashmi</option>
                                                                      </select>
                      <span>
              </span>
              <span class="text-danger">
                @error('account_holder')
                   {{$message}}
                @enderror
               </span>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="exampleInputPassword1">License Number</label>
                      <input type="text" class="form-control" name="license_number"
                             value=""
                             id="exampleInputPassword1">
                      <span>
              </span>
              <span class="text-danger">
                @error('license_number')
                   {{$message}}
                @enderror
               </span>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">License Expiry</label>
                      <input type="text" class="form-control datepicker" name="license_exp"
                             value=""
                             id="exampleInputPassword1">
                      <span>
              </span>
              <span class="text-danger">
                @error('license_exp')
                   {{$message}}
                @enderror
               </span>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Medical Date</label>
                      <input type="text" class="form-control datepicker" name="medical_date"
                             value=""
                             id="exampleInputPassword1">
                      <span>
              </span>
              <span class="text-danger">
                @error('medical_date')
                   {{$message}}
                @enderror
               </span>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Medical Expiry</label>
                      <input type="text" class="form-control datepicker" name="medical_exp"
                             value=""
                             id="exampleInputPassword1">
                      <span>
              </span>
              <span class="text-danger">
                @error('medical_exp')
                   {{$message}}
                @enderror
               </span>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Drug Test</label>
                      <input type="text" class="form-control datepicker" name="drug_test"
                             value=""
                             id="exampleInputPassword1">
                      <span>
              </span>
              <span class="text-danger">
                @error('drug_test')
                   {{$message}}
                @enderror
               </span>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Pay Type</label>
                      <select name="pay_type" class="select2 form-control" id="pay_type">
                          <option value="Percentage">Percentage</option>
                          <option value="Per Mile">Per Mile</option>
                          <option value="Other">Other</option>
                      </select>
                      <span>
              </span>
              <span class="text-danger">
                @error('pay_type')
                   {{$message}}
                @enderror
               </span>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Per Mile</label>
                      <input type="text" class="form-control" name="per_mile" readonly
                             value=""
                             id="per_mile">
                  </div>

                  <div class="form-group">
                      <label for="exampleInputPassword1">Empty Mile</label>
                      <input type="text" class="form-control" name="empty_mile" readonly
                             value=""
                             id="empty_mile">
                  </div>

                  <div class="form-group">
                      <label for="exampleInputPassword1">Percentage</label>
                      <input type="number" step="any" class="form-control" name="percentage"
                             value=""
                             id="exampleInputPassword1">
                      <span>
              </span>
              <span class="text-danger">
                @error('percentage')
                   {{$message}}
                @enderror
               </span>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Status</label>
                      <select name="status" class="select2 form-control">
                          <option value="Active">Active</option>
                          <option value="Terminated">Terminated</option>
                          <option value="Temporary">Temporary</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Notes</label>
                      <textarea class="form-control" name="notes"
                                id="exampleInputPassword1"></textarea>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Prepass</label>
                      <input type="number" step="any" class="form-control" name="prepass"
                             value=""
                             id="exampleInputPassword1">
                      <span>
              </span>
              <span class="text-danger">
                @error('prepass')
                   {{$message}}
                @enderror
               </span>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Load Board</label>
                      <input type="number" step="any" class="form-control" name="load_board"
                             value=""
                             id="exampleInputPassword1">
                      <span>
              </span>
              <span class="text-danger">
                @error('load_board')
                   {{$message}}
                @enderror
               </span>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Trailer Rent</label>
                      <input type="number" step="any" class="form-control" name="trailer_rent"
                             value=""
                             id="exampleInputPassword1">
                      <span>
              </span>
              <span class="text-danger">
                @error('trailer_rent')
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


@endsection
