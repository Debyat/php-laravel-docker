<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <link rel="icon" type="image/x-icon" href="https://irp-cdn.multiscreensite.com/5d54c1dd/site_favicon_16_1612333745562.ico">
  <title>MyPortal™ Marketing Inc. -@yield('title')</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

  <!-- Bootstrap core CSS -->
  {{-- <link rel="stylesheet" href="../../css/bootstrap.min.css"> --}}
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

  <!-- Material Design Bootstrap -->
  {{-- <link rel="stylesheet" href="../../css/mdb.min.css"> --}}
  <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">

  @stack('css')
  <!-- Your custom styles (optional) -->
  <style>

  </style>
</head>

<body class="fixed-sn white-skin">

    {{-- Header --}}
    @include('common.header')

  <!-- Main layout -->
  <main>

    @yield('content')

  </main>
  <!-- Main layout -->


  <!-- Footer -->
  {{-- @include('common.footer') --}}

  <!-- SCRIPTS -->
  <!-- JQuery -->
  {{-- <script src="../../js/jquery-3.4.1.min.js"></script> --}}
  <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  {{-- <script type="text/javascript" src="../../js/popper.min.js"></script> --}}
  <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>

  <!-- Bootstrap core JavaScript -->
  {{-- <script type="text/javascript" src="../../js/bootstrap.js"></script> --}}
  <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
  <!-- MDB core JavaScript -->
  {{-- <script type="text/javascript" src="../../js/mdb.min.js"></script> --}}
  <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>

  {{-- Common --}}
    @stack('js')
  <script src="{{asset('js/common.js')}}"></script>

  <!-- TinyMCE -->

</body>

</html>
