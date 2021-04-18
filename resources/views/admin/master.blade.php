<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perpustakaan</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{ asset('css/custom.css')}}" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

   <link href="{{ asset('js/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet" />
   <!-- Topnav -->
   <link href="{{ asset('css/topnav.css') }}" rel="stylesheet">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>{{ config('app.name', 'Laravel') }}</title>

  </head>
<body>
    <div id="wrapper">
        <!-- Header -->
        @include('layouts.header')
        <!-- End Header -->

        <!-- Navbar Samping  -->
        @include('layouts.sidebar')
        <!-- /. NAV SIDE  -->

        <!-- Isi halaman -->
        <div id="page-wrapper" >
          <div id="page-inner">
             @yield('content')
          </div>
        </div>
        <!-- End Isi  -->

    </div>

    <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- JQUERY SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
    integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{ asset('js/jquery.metisMenu.js') }}"></script>
      <!-- CUSTOM SCRIPTS -->


    <script src="{{ asset('js/dataTables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/dataTables/dataTables.bootstrap.js') }}"></script>
    {{-- <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script> --}}
         <!-- CUSTOM SCRIPTS -->
    <script src="{{ asset('js/custom.js') }}"></script>


</body>
</html>
