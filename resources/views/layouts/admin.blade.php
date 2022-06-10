<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Phụ Kiện LD</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
    @yield('css')
    @toastr_css
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('backend.body.header')

    @include('backend.body.sidebar')

    <div class="content-wrapper">
        @yield('content')
    </div>

    @include('backend.body.footer')
</div>

<script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('backend/dist/js/adminlte.min.js') }}"></script>
@yield('js')
@toastr_js
@toastr_render
</body>
</html>
