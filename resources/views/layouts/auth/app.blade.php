<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/fontawesome-free/css/all.min.css') }}">
   <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/ion-icon/css/ionicons.min.css') }}">
   <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/adminlte.min.css') }}">
   <title>@yield('title')</title>
   <style>
      html, body {
         margin:0;
         /* padding:0; */
         height:100%;
      }
      .login-box {
         width: 460px;
      }

      .login-card-body {
         padding: 65px;
      }
   </style>
</head>
<body>
   @yield('content')
   
   <!-- jQuery -->
   <script src="{{ asset('vendor/adminlte/plugins/jquery/jquery.min.js') }}"></script>
   <!-- Bootstrap 4 -->
   <script src="{{ asset('vendor/adminlte/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
   <!-- AdminLTE App -->
   <script src="{{ asset('vendor/adminlte/js/adminlte.min.js') }}"></script>
</body>
</html>