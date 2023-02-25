@extends('admin.layout.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Report </h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Report</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>



                <div class="container">
                    <h4>Driver Pay Summary</h4>
               <div class="row">
                <div class="col-6">
                    <div class="form">
                 <img class="img" src="https://roommatebd.com/amit/delivery/image/b21e031dbeb5a53204460dd216bd1372.jpg" width="130px" height="100" alt="">
                  <div class="text">
                    <h5 class="name" >User</h5>
                     <p  class="num">0987977878</p>
                    <p class="email">info@abc.com</p>
                    </div>
                   </div>
                 </div>
                 <hr>
                 <div class="col-5">
                    <button class="btn-" onclick="window.print()" >print</button>
                  <p class="example " >Driver Pay Report</p>
                </div>
               </div>

               <table class="table table-bordered mt-5">

                <thead>
                    <tr>
                        <th class="text-light bg-secondary" colspan="1" scope="col">Line Haules</th>
                        <th  colspan="3" scope="col"></th>
                    </tr>

                    <tr>
                        <th class="text-light bg-info" colspan="1" scope="col">Line Haules</th>
                        <th  colspan="2" scope="col"></th>
                        <th class="text-light bg-warning" colspan="3" scope="col">Miles</th>
                    </tr>
                  <tr>
                        <th class="text-light bg-info" scope="col">Load #</th>
                        <th class="text-light bg-info" scope="col">P/L</th>
                        <th class="text-light bg-info" scope="col">D/L</th>
                        <th class="text-light bg-warning"scope="col">DH</th>
                        <th class="text-light bg-warning" scope="col">Loaded</th>
                        <th class="text-light bg-warning"scope="col">Per Mile</th>
                  </tr>
                </thead>

              </table>


              <div class="col-6 mt-5">

                <table class="table table-bordered mb-2 ">

                    <thead>
                      <th class="example1 text-dark" >Other Expenses</th>
                      <tr>
                        <td class="text-daek" scope="col">Date</td>
                        <td class="text-daek" scope="col">Description</td>
                        <td class="text-daek" scope="col">Amount</td>
                      </tr>
                    </thead>

                  </table>
              </div>


              <div class="col-6 mt-5">
                <table class="table table-bordered mb-2 ">

                    <thead>

                        <th class="text-light bg-success">Summary</th>
                      <tr>
                          <td class="">Total Income</td>
                           <td class="bg-success">$0</td>
                        </tr>

                        <tr>
                            <td class="">Service Charge</td>
                             <td class="bg-danger">$0</td>
                          </tr>

                          <tr>
                            <td class="">Total Expense</td>
                             <td class="bg-danger">$0</td>
                          </tr>
                          <tr>
                            <td class="text-dark">Total Pay</td>
                             <td class="bg-success">$0</td>
                          </tr>
                    </thead>
                  </table>
              </div>
<hr>
            <h6 class="text-center" >abc ABC</h6>
            </div>


<style>
    *{
        padding: 0px;
        margin: 0px;
    }
 .form{
    border: 1px solid black;
    padding: 5px 20px 5px;
    margin-right: 300px;
    margin-top: 10px;
 }
 .name{
    margin-left:20px;
 }
 .text{
    margin-left: 22px;
 }
 .btn-{
    float: right;
    background-color: default;
    border: 1px;
    color: black;
    padding: 6px 10px;
    font-size: 16px;
    cursor: pointer;
 }
 .example{
    margin-top: 80px;
    margin-left: 200px;
    border-bottom: 1px solid #000;
    padding: 10px 37px  ;
    background-color: rgb(245, 179, 179) ;
 }
 .example1 {
    margin-top: 100px;
    margin-bottom: 2px;
    border: 1px solid #000;
    padding: 6px 30px  ;
    font-size: 16px;
    background-color: rgb(209, 23, 23) ;

 }
 .example3 {
    margin-top: 100px;
    margin-bottom: 2px;
    border: 1px solid #000;
    padding: 6px 30px  ;
    font-size: 16px;
    background-color:#e35b69;

 }
</style>

@endsection
