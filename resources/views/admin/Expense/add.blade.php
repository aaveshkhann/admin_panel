@extends('admin.layout.app')


@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add Expense <button class="btn btn-danger btn-sm "> <a href="/admin/expense/show" class="text-white">View Expense</a> </button></h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add  Expense</li>

          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
                 <form role="form" action="{{route('expense.add')}}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="container ml-5 mb-2">
              <div class="col-md-6">
                  <div class="box-body">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                        <button class="close" data-dismiss="alert">×</button>
                    </div>
                  @endif
                      <div class="form-group">
                          <label for="exampleInputPassword1">Date</label>
                          <input type="date" class="form-control datepicker" name="date" required
                                 id="exampleInputPassword1">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Vendor Name</label>
                          <input type="text" class="form-control" name="vendor" required
                                 id="exampleInputPassword1">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Description</label>
                          <textarea class="form-control" name="description"
                                    id="exampleInputPassword1"></textarea>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Account Holder</label>
                          <select class="form-control select2" name="account_holder" required>
                              <option value="">--Select--</option>
                                                                          <option value="Kalyan Brata 1">Kalyan Brata 1</option>
                                                                          <option value="Amit ">Amit </option>
                                                                          <option value="Mohammed omar">Mohammed omar</option>
                                                                          <option value="tryuyio">tryuyio</option>
                                                                          <option value="Arif Ansari">Arif Ansari</option>
                                                                          <option value="Darshan">Darshan</option>
                                                                          <option value="Akter">Akter</option>
                                                                          <option value="Akter">Akter</option>
                                                                          <option value="hakim">hakim</option>
                                                                          <option value="nnmdi">nnmdi</option>
                                                                          <option value="test">test</option>
                                                                          <option value="test">test</option>
                                                                          <option value="Amir">Amir</option>
                                                                          <option value="Sambanet">Sambanet</option>
                                                                          <option value="sdgf">sdgf</option>
                                                                          <option value="abdirahim">abdirahim</option>
                                                                          <option value="Amit">Amit</option>
                                                                          <option value="Najam Awan">Najam Awan</option>
                                                                          <option value="RAJEEV BOSS">RAJEEV BOSS</option>
                                                                          <option value=""></option>
                                                                          <option value="test">test</option>
                                                                          <option value="Lila Dyer">Lila Dyer</option>
                                                                          <option value="pickkaro.pk">pickkaro.pk</option>
                                                                          <option value="fdfdf">fdfdf</option>
                                                                          <option value="Md Mahmud">Md Mahmud</option>
                                                                          <option value="Gora Pene">Gora Pene</option>
                                                                          <option value="1234">1234</option>
                                                                          <option value="1234 Person">1234 Person</option>
                                                                          <option value="testo">testo</option>
                                                                          <option value="rohit">rohit</option>
                                                                          <option value="kk">kk</option>
                                                                          <option value="tenderjo test">tenderjo test</option>
                                                                          <option value="dia">dia</option>
                                                                          <option value="Blukel">Blukel</option>
                                                                          <option value=""></option>
                                                                          <option value=""></option>
                                                                          <option value="Idriso">Idriso</option>
                                                                          <option value="amit">amit</option>
                                                                          <option value="ras">ras</option>
                                                                          <option value="Rashmi">Rashmi</option>
                                                                          <option value="aryan">aryan</option>
                                                                          <option value=""></option>
                                                                          <option value=""></option>
                                                                  </select>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Amount</label>
                          <input type="number" step="any" class="form-control" name="amount" required
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
			<!-- /.box -->

		</div>
		<!--/.col (left) -->
    </div>
	</div>
</div>
</div>
</div>
@endsection
