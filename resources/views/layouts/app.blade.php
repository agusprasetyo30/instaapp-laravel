<!DOCTYPE html>
<html lang="en">
<head>
   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
   
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/fontawesome-free/css/all.min.css') }}">
   <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/ion-icon/css/ionicons.min.css') }}">
   <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/adminlte.min.css') }}">
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">

   <title>@yield('title')</title>

   @stack('css')

   <style>
      .input-cari {
         width: 200px;
         height: 25px;
         border-radius: 5px;
         border: 1px solid rgb(196, 195, 195);
         font-size: 10px;
         text-align: center;
      }

      .input-cari:focus {
         outline: 0;
      }
   </style>
</head>
<body>
   @include('layouts.navbar')
   
   @if (session('success'))
      <div class="alert alert-success alert-dismissible">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
         <h5><i class="icon fas fa-check"></i> Peringatan !</h5>
         {{ session('success') }}
      </div>
   @endif

   @if (session('error'))
      <div class="alert alert-danger alert-dismissible">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
         <h5><i class="icon fas fa-ban"></i> Peringatan !</h5>
         {{ session('error') }}
      </div>
   @endif

   @yield('content')
   
   <!-- jQuery -->
   <script src="{{ asset('vendor/adminlte/plugins/jquery/jquery.min.js') }}"></script>
   <!-- Bootstrap 4 -->
   <script src="{{ asset('vendor/adminlte/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
   <!-- AdminLTE App -->
   <script src="{{ asset('vendor/adminlte/js/adminlte.min.js') }}"></script>
   @stack('js')
</body>
</html>