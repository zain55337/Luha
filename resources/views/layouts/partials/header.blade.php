<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{url('assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{url('assets/img/favicon.png')}}">
  <title>>@hasSection('htmlHeaderTitle')@yield('htmlHeaderTitle') @endif</title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{url('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{url('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{url('assets/css/material-dashboard.css?v=3.0.0')}}" rel="stylesheet" />
  <style>
    .navbar-vertical.navbar-expand-xs .navbar-collapse {
      height: auto !important;
    }

    .sidenav .navbar-brand {
      margin-top: -20px !important;
      padding: 0rem 2rem;
    }

    .sidenav-header {
      height: 10rem;
    }
  </style>
  @yield('customStyle')
</head>