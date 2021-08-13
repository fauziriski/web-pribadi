<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('client/plugins/bootstrap/bootstrap.min.css') }}">
  <!-- slick slider -->
  <link rel="stylesheet" href="{{ asset('client/plugins/slick/slick.css') }}">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="{{ asset('client/plugins/themify-icons/themify-icons.css') }}">

  <!-- Main Stylesheet -->
  <link href="{{ asset('client/css/style.css') }}" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="{{ asset('client/images/favicon.ico') }}" type="image/x-icon">
  <link rel="icon" href="{{ asset('client/images/favicon.ico') }}" type="image/x-icon">

</head>

<body>

@section('header')
    @include('user.layouts.header')
@show


@yield('content')
{{-- @include('sweetalert::alert') --}}

@section('footer')
    @include('user.layouts.footer')
@show

    
<!-- jQuery -->
<script src="{{ asset('client/plugins/jQuery/jquery.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('client/plugins/bootstrap/bootstrap.min.js') }}"></script>
<!-- slick slider -->
<script src="{{ asset('client/plugins/slick/slick.min.js') }}"></script>
<!-- filter -->
<script src="{{ asset('client/plugins/shuffle/shuffle.min.js') }}"></script>

<!-- Main Script -->
<script src="{{ asset('client/js/script.js') }}"></script>

</body>
</html>