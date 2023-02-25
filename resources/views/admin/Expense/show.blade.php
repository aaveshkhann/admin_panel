@extends('admin.layout.app');

@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Show Expense <button value="submit"class="btn btn-danger btn-sm" > <a href="/admin/expense" class="text-white"> Add Expense</a></button></h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Show Expenses</li>
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
					<h3 class="box-title">Add Expense</h3>
				</div>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="text text-center">
													</div>
					</div>
				</div>
  <!--Table-->
  <div class="box-body" style="overflow-y: scroll;overflow-x:scroll">
    <table id="example1" class="table table-bordered table-striped display responsive nowrap">
    <!--Table head-->
    <thead>
      <tr>
        <th>Date</th>
        <th>Vendor</th>
        <th>Description</th>
        <th>Account Holder</th>
        <th>Amount</th>
        <th>Action</th>
      </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        @foreach ( $Expenses as $Expense )


      <tr class="table-info">
        <th >{{$Expense->date}}</th>
        <td>{{$Expense->vendor}}</td>
        <td colspan="">{{$Expense->description}}</td>
        <td>{{$Expense->account_holder}}</td>
        <td>{{$Expense->amount}}</td>
        <td>
            <a href="{{route('expense.edit',['id'=>$Expense->id ])}}"><i class="fas fa-edit"></i> </a>
            <a href="{{route('delete.expense',['id'=> $Expense ->id])}}"><i class="fa fa-trash" aria-hidden="true"></i> </a>

        </td>
      </tr>
     @endforeach

    </tbody>
    <!--Table body-->

  </table>
  <div class="m-3">
  {{$Expenses->links()}}
</div>
  <!--Table-->
  </div>
</div>
</div>
</div>
<script>
    $(document).ready(function() {
      $('#example1').DataTable( {
          dom: 'Bfrtip',
          buttons: [
              'copy', 'csv',  'print'
          ]
      } );
  } );
  </script>

@endsection
