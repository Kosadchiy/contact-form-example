<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ URL::asset('/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">

        @section('header')
        @include('admin.layouts.header')
        @endsection

        @yield('header')

        @section('nav')
        @include('admin.layouts.nav')
        @endsection

        @yield('nav')
        <div class="dashboard-wrapper">
        @section('content')
        @endsection

        @yield('content')

        @section('footer')
        @include('admin.layouts.footer')
        @endsection

        @yield('footer')
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->

<!-- Optional JavaScript -->
    <script src="{{ URL::asset('/js/app.js') }}"></script>
</body>
 
</html>