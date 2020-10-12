<!doctype html>
<html class="no-js " lang="en">

  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="description" content="Intellidrone Official Web page">
         <title>{{ config('app.name', 'Intellidrone')}}</title>
         {{-- CSRF --}}
            <meta name="csrf-token" content="{{ csrf_token() }}">
            {{-- Axios --}}
         
        <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
        <link rel="stylesheet" href="{{asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/assets/plugins/morrisjs/morris.css')}}" />
        <link rel="stylesheet" href="{{asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css')}}"/>

       {{-- Sweet Alert --}}
        <link rel="stylesheet" href="{{asset('admin/assets/plugins/sweetalert/sweetalert.css')}}"/>

        <!-- Custom Css -->
        <link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('admin/assets/css/color_skins.css')}}">
        <link rel="stylesheet" href="{{asset('admin/css/search.css')}}">
 </head>
 <body class="theme-black">
    <div class="container">
        @yield('content')
    </div>
  {{-- <script src="https://unpkg.com/axios/dist/axios.min.js"></script> --}}
  @include('admin.script')
  @yield('scripts')
  {{-- @yield('search') --}}
</body>

</html>
