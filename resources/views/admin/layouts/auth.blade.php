<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ public_url('assets/adminLte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ public_url('assets/adminLte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ public_url('assets/adminLte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ public_url('assets/adminLte/css/common.css') }}">

    {!! loadFiles([
        'vendors/bootstrap_v5.0.2.min',
        'vendors/themefy_icon/themify-icons',
        'vendors/font_awesome/css/all.min',
        'vendors/scroll/scrollable',
        'vendors/metisMenu',
        'vendors/md-preloader.min',
        'admin/style',
        'vendors/colors/default',
        'common',
        'admin/custom',
    ]) !!}

    @stack('styles')
</head>
<body class="{{ getBodyClass() }} hold-transition login-page">
@yield('content')
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ public_url('assets/adminLte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ public_url('assets/adminLte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ public_url('assets/adminLte/dist/js/adminlte.min.js') }}"></script>

{!! loadFiles([
    'vendors/jquery-3.6.3.min',
    'vendors/popper.min',
    'vendors/bootstrap_v5.0.2.min',
    'vendors/metisMenu',
    'vendors/scroll/perfect-scrollbar.min',
    'vendors/scroll/scrollable-custom',
    'vendors/utils/loadingoverlay.min',
    'vendors/utils/common',
    'admin/backend',
    'admin/custom',
], '', 'js') !!}

@stack('scripts')
@stack('modal')
</body>
</html>
