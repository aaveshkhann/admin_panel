<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">

 @include('admin.layout.css')
 <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
 <link rel="stylesheet" href="//cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Navbar -->
@include('admin.layout.header')

@include('admin.layout.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

@yield('content')

  </div>
  <!-- /.content-wrapper -->

@include('admin.layout.footer')
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('admin.layout.js')



</body>
</html>
