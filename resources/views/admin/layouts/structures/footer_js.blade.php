<!-- jQuery -->
<script src="{{ public_url('assets/adminLte/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ public_url('assets/adminLte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ public_url('assets/adminLte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ public_url('assets/adminLte/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ public_url('assets/adminLte/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ public_url('assets/adminLte/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ public_url('assets/adminLte/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ public_url('assets/adminLte/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ public_url('assets/adminLte/plugins/moment/moment.min.js') }}"></script>
<script src="{{ public_url('assets/adminLte/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ public_url('assets/adminLte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ public_url('assets/adminLte/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ public_url('assets/adminLte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ public_url('assets/adminLte/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ public_url('assets/adminLte/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ public_url('assets/adminLte/dist/js/pages/dashboard.js') }}"></script>

{!! loadFiles([
    'vendors/jquery-3.6.3.min',
    'vendors/popper.min',
    'vendors/bootstrap_v5.0.2.min',
    'vendors/bootstrap-datepicker.min',
    'vendors/locales/bootstrap-datepicker.ja.min',
    'vendors/metisMenu',
    'vendors/count_up/jquery.waypoints.min',
    'vendors/chartlist/Chart.min',
    'vendors/count_up/jquery.counterup.min',
    'vendors/niceselect/js/jquery.nice-select.min',
    'vendors/owl_carousel/js/owl.carousel.min',
    'vendors/datatable/js/jquery.dataTables.min',
    'vendors/datatable/js/dataTables.responsive.min',
    'vendors/datatable/js/dataTables.buttons.min',
    'vendors/datatable/js/buttons.flash.min',
    'vendors/datatable/js/jszip.min',
    'vendors/datatable/js/pdfmake.min',
    'vendors/datatable/js/vfs_fonts',
    'vendors/datatable/js/buttons.html5.min',
    'vendors/datatable/js/buttons.print.min',
    'vendors/chart.min',
    'vendors/progressbar/jquery.barfiller',
    'vendors/tagsinput/tagsinput',
    'vendors/text_editor/summernote-bs4',
    'vendors/am_chart/amcharts',
    'vendors/scroll/perfect-scrollbar.min',
    'vendors/scroll/scrollable-custom',
    'vendors/chart_am/core',
    'vendors/chart_am/charts',
    'vendors/chart_am/animated',
    'vendors/chart_am/kelly',
    'vendors/chart_am/chart-custom',
    'vendors/sweetalert2.all',
    'vendors/toastr.min',
    //'vendors/chartjs/chartjs_active2',
    'vendors/utils/loadingoverlay.min',
    'vendors/utils/min',
    'vendors/utils/xhr',
    'vendors/utils/common',
    'admin/backend',
], '', 'js') !!}

@include('admin.layouts.structures.footer_autoload')

