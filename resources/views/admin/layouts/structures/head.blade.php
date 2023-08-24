<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<link rel="shortcut icon" href="{{ public_url('assets/img/icon-og/favicon.ico') }}" type="image/x-icon">
<title>{{ !empty($title) ? $title : '' }}</title>
<meta name="description" content="">
<link rel="icon" type="image/png" sizes="16x16" href="{{ public_url('assets/img/logo.png') }}">
<meta name="csrf-token" content="{{ csrf_token() }}" />

{!! loadFiles([
    'vendors/bootstrap_v5.0.2.min',
    'vendors/themefy_icon/themify-icons',
    'vendors/niceselect/css/nice-select',
    'vendors/owl_carousel/css/owl.carousel',
    'vendors/gijgo/gijgo.min',
    'vendors/font_awesome/css/all.min',
    'vendors/tagsinput/tagsinput',
    'vendors/bootstrap-datepicker3.min',
    'vendors/scroll/scrollable',
    'vendors/datatable/css/jquery.dataTables.min',
    'vendors/datatable/css/responsive.dataTables.min',
    'vendors/datatable/css/buttons.dataTables.min',
    'vendors/text_editor/summernote-bs4',
    'vendors/morris/morris',
    'vendors/material_icon/material-icons',
    'vendors/metisMenu',
    'vendors/md-preloader.min',
    'vendors/toastr.min',
    'admin/style',
    'vendors/colors/default',
    'common',
    'admin/custom',
]) !!}

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ public_url('assets/adminLte/plugins/fontawesome-free/css/all.min.css') }}">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="{{ public_url('assets/adminLte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
<!-- iCheck -->
<link rel="stylesheet" href="{{ public_url('assets/adminLte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
<!-- JQVMap -->
<link rel="stylesheet" href="{{ public_url('assets/adminLte/plugins/jqvmap/jqvmap.min.css') }}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ public_url('assets/adminLte/dist/css/adminlte.min.css') }}">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{ public_url('assets/adminLte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{ public_url('assets/adminLte/plugins/daterangepicker/daterangepicker.css') }}">
<!-- summernote -->
<link rel="stylesheet" href="{{ public_url('assets/adminLte/plugins/summernote/summernote-bs4.min.css') }}">

@stack('styles')
