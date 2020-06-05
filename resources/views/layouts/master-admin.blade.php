<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <title>PCI - PWPB Covid Indonesia @yield('title')</title>
  <link rel="shortcut icon" href="{{ URL::asset('/logo.png') }}" sizes="100x100">
  <!-- Custom fonts for this template-->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/sb-admin-2.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/vendor/fontawesome-free/css/all.min.css') }}">  
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('/vendor/datatables/dataTables.bootstrap4.css') }}">  

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css'>


  <script type="text/javascript" src="{{ URL::asset('/js/ckeditor.js') }}"></script>
  <style type="text/css">
    body{
      color: black;
    }
    #load{
      width: 100%;
      height: 100%;
      position: fixed;
      text-indent: 100%;
      background: url('/loading.gif') no-repeat center;
      z-index: 1;
      background-size: 7%;
    }
  </style>

</head>

<body id="page-top">
    <!-- Loader -->
    <div id="load"></div>
    <!-- Page Wrapper -->
    <div id="wrapper">
        @guest

        @if (Route::has('register'))
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
        @endif
        @else
        @include('admin.partials.sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
            @include('admin.partials.navigation')
                <!-- Begin Page Content -->
                
                @endguest
                <div>            
                    @yield('content')
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <br><br>
            <!-- Footer -->
            <footer class="sticky-footer bg-white shadow-sm">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; 2019-2020 PCI - PWPB COVID INDONESIA. All Rights Reserved.</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js'></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#load").fadeOut(1000);

        $('loading').on('click',function(){
          $("#loading").addClass('overlay');
          $("#loading").html('<i class="fas fa-spinner fa-spin"></i>');
          setTimeOut(RemoveClass,100);
        });

        function RemoveClass(){
          $("#loading").RemoveClass('overlay');
          $("#loading").fadeOut();
        }
      });
  </script>
    <!-- End of Page Wrapper -->


    <!-- Bootstrap core JavaScript-->
    <script type="text/javascript" src="{{ URL::asset('/vendor/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script type="text/javascript" src="{{ URL::asset('/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    

    <!-- Custom scripts for all pages-->
    <script type="text/javascript" src="{{ URL::asset('/js/sb-admin-2.js') }}"></script>

    <!-- Page level plugins -->
    <script type="text/javascript" src="{{ URL::asset('/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script type="text/javascript" src="{{ URL::asset('/js/demo/chart-area-demo.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/js/demo/chart-pie-demo.js') }}"></script>

    <!-- Page level plugins -->
    <script type="text/javascript" src="{{ URL::asset('/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script type="text/javascript" src="{{ URL::asset('/js/demo/datatables-demo.js') }}"></script>

    
    

</body>
</html>
