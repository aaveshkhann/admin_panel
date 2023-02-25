@extends('admin.layout.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add Account Holder <button class="btn btn-danger btn-sm "> <a href="/admin/account_holder/show" class="text-white">View Account Holder</a> </button></h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">  Add Account Holder</li>

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
			<div class="box box-primary">
				<div class="box-header with-border">
					<h4 class="box-title">Add Account Holder</h4>
				</div>
				{{-- <div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="text text-center">
																<div class="alert alert-success">
										<button class="close" data-dismiss="alert">×</button>
										Record Inserted Successfully									</div>
																					</div>
					</div>
				</div> --}}
				<!-- /.box-header -->
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<form role="form" action="{{route('account_holder.add')}}" method="post"
							  enctype="multipart/form-data">
                              @csrf
							<div class="box-body">
                                @if (session('success'))
                                <div class="alert alert-success">
                                    {{session('success')}}
                                    <button class="close" data-dismiss="alert">×</button>
                                </div>
                              @endif
								<div class="form-group">
									<label for="exampleInputPassword1">Account Holder Name</label>
									<input type="text" class="form-control" name="name"
										   id="exampleInputPassword1"
										   placeholder="Enter Name">
								</div>
                                <span class="text-danger">
                                    @error('name')
                                       {{$message}}
                                    @enderror
                                   </span>
							</div>
							<!-- /.box-body -->

							<div class="box-footer">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
				</div>
				<!-- form start -->
			</div>
			<!-- /.box -->

		</div>
		<!--/.col (left) -->
	</div>
@endsection
