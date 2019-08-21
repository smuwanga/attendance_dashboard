<!DOCTYPE html>

<html lang="en">

<head>

   <meta charset="utf-8">

   <meta http-equiv="X-UA-Compatible" content="IE=edge">

   <meta name="viewport" content="width=device-width, initial-scale=1">

   <meta name="description" content="">

   <meta name="author" content="">

   <title>Attendance Timesheet</title>



  <!-- Custom fonts for this template-->
  <link href="{!! asset('css/all.min.css') !!}" rel="stylesheet">
  <link href="{!! asset('css/datepicker.css') !!}" rel="stylesheet">
  <link href="{!! asset('css/fonts-googleapis.css') !!}" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="{!! asset('css/sb-admin-2.min.css') !!}" rel="stylesheet">
  



<!-- Bootstrap core JavaScript-->
<script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
<script src="{{ asset('js/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/jquery/jquery.js') }}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js" type="text/javascript"></script>




  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

 

 <script>
    $(document).ready(function() {
           $('.datepicker').datepicker({
                format: 'dd/mm/yyyy'
                
            });
         });
    </script>

  

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
  


</body>



</html>




