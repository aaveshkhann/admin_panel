@extends('admin.layout.app');

@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Show Load Entry <button value="submit"class="btn btn-danger btn-sm" > <a href="/admin/load_entry/add" class="text-white"> Add Load Entry</a></button></h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Show Load Entry</li>
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
					<h3 class="box-title">Add Load Entry</h3>
                    {{-- <div class="btn">
                       <button  class="btn btn-default" onclick="window.print()" >Print</button>


                    </div> --}}
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
    <table id="example1" class="table table-bordered table-striped  display responsive nowrap">
    <!--Table head-->
    <thead>
      <tr>
        <th>Load Id</th>
        <th>Customer Name</th>
        <th>Customer Load</th>
        <th>Load type</th>
        <th>Date</th>
        <th>Pice up Date</th>
        <th>Delivery Date</th>
        <th>Dispatch</th>
        <th>Line Haul Rate</th>
        <th>Unloading</th>
        <th>Reimburse</th>
        <th>Action</th>
      </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        @foreach ( $loads as $load )


      <tr class="table-info">
        <th  >{{$load->load_id}}</th>
        <td>{{$load->customer_id}}</td>
        <td >{{$load->customer_load}}</td>
        <td>{{$load->load_type}}</td>
        <td>{{$load->date}}</td>
        <td colspan="">{{$load->pick_up_date}}</td>
        <td>{{$load->delivery_date}}</td>
        <td>{{$load->dispatch}}</td>
        <td colspan="">{{$load->line_haul_rate}}</td>
        <td>{{$load->unloading}}</td>
        <td>{{$load->reimburse}}</td>
        <td>
            <a href="{{route('load_entry.edit',['id'=>$load->id ])}}"><i class="fas fa-edit"></i> </a>
            <a href="{{route('load.delete',['id'=> $load ->id])}}"><i class="fa fa-trash" aria-hidden="true"></i> </a>

        </td>
      </tr>
     @endforeach
    </tbody>
    <!--Table body-->

  </table>
  <div class="m-3">
  {{$loads->links()}}
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
