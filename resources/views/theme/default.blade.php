<!DOCTYPE html>

<html lang="en">

<head>

   <meta charset="utf-8">

   <meta http-equiv="X-UA-Compatible" content="IE=edge">

   <meta name="viewport" content="width=device-width, initial-scale=1">

   <meta name="description" content="">

   <meta name="author" content="">

   <title>SB Admin 2 - Bootstrap Admin Theme</title>


  <!-- Custom fonts for this template-->
  <link href="{!! asset('css/all.min.css') !!}" rel="stylesheet">
  <link href="{!! asset('css/fonts-googleapis.css') !!}" rel="stylesheet">



  <!-- Custom CSS -->
  <link href="{!! asset('css/sb-admin-2.min.css') !!}" rel="stylesheet">



  

</head>

<body id="page-top">

   <div id="wrapper">

      
           
       @include('theme.sidebar')



       <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="nnn">

        @include('theme.topbar')

        <!-- Begin Page Content -->
        @yield('content')
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      @include('theme.footer')

    </div>
    <!-- End of Content Wrapper -->

   </div>

   <!-- /#wrapper --
  
<!-- Bootstrap core JavaScript-->
  <script src="js/jquery/jquery.min.js"></script>
  <script src="js/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="js/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="js/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>



</html>




