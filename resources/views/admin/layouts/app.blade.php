<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    @yield('title')

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet"
        href="https://demo.getstisla.com/assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
    
    <!-- CSS Libraries -->
    {{-- <link rel="stylesheet" href="{{ asset('admin/node_modules/jqvmap/dist/jqvmap.min.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('admin/node_modules/weathericons/css/weather-icons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/node_modules/weathericons/css/weather-icons-wind.min.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('admin/node_modules/summernote/dist/summernote-bs4.css') }}"> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet"> --}}

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/components.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('admin/assets/plugins/summernote/summernote-lite.css') }}"> --}}
</head>

{{-- @include('sweetalert::alert') --}}
@section('header')
    @include('admin.layouts.header')
@show

@section('sidebar')
    @include('admin.layouts.sidebar')
@show
@include('sweetalert::alert')

@yield('content')


@section('footer')
    @include('admin.layouts.footer')
@show

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
@yield('js')

<!-- General JS Scripts -->
{{-- <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script> --}}
{{-- <script src="https://code.jquery.com/jquery-3.4.1.js"></script> --}}


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="{{ asset('admin/assets/js/stisla.js') }}"></script>

{{-- <script src="{{ asset('admin/assets/plugins/summernote/summernote-lite.js') }}"></script> --}}
{{-- <script src="{{ asset('admin/assets/plugins/summernote/plugin/nugget/summernote-ext-nugget.js') }}"></script> --}}
{{-- <script src="{{ asset('admin/assets/plugins/summernote/plugin/highlight/src/summernote-ext-highlight.js') }}"></script> --}}
<!-- JS Libraies -->
{{-- <script src="{{ asset('admin/node_modules/simpleweather/jquery.simpleWeather.min.js') }}"></script>
  <script src="{{ asset('admin/node_modules/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('admin/node_modules/jqvmap/dist/jquery.vmap.min.js') }}"></script>
  <script src="{{ asset('admin/node_modules/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
  <script src="{{ asset('admin/node_modules/summernote/dist/summernote-bs4.js') }}"></script>
  <script src="{{ asset('admin/node_modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script> --}}

<!-- Template JS File -->
<script src="{{ asset('admin/assets/js/scripts.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom.js') }}"></script>


<!-- Page Specific JS File -->
{{-- <script src="{{ asset('admin/assets/js/page/index-0.js') }}"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> --}}
{{-- <script src="http://cdn.jsdelivr.net/npm/summernote-ext-highlight.js"></script> --}}

<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

{{-- <script src="https://demo.getstisla.com/assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script> --}}
{{-- <script src="https://demo.getstisla.com/assets/modules/bootstrap-tagsinput/src/bootstrap-tagsinput.js"></script> --}}







</body>

</html>
