<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layouts.structures.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed {{ getBodyClass() }}">
<div class="wrapper">
    <!-- Navbar -->
    @include('admin.layouts.structures.navbar')
    <!-- /.navbar -->
    <!-- sidebar -->
    @include('admin.layouts.structures.sidebar')
    <!-- sidebar end -->

    <section class="content-wrapper">
        @include('admin.layouts.structures.messages')
        @yield('content')

        <!-- modal -->
        @include('admin.elements.modal')
        <!-- modal end -->

        @stack('modals')

        <!-- footer -->
        @include('admin.layouts.structures.footer')
        <!-- footer end -->
    </section>
    <div id="back-top" style="display: none;">
        <a title="Go to Top" href="javascript:void(0)">
            <i class="ti-angle-up"></i>
        </a>
    </div>
</div>
<!-- footer js -->
@include('admin.layouts.structures.footer_js')
<!-- footer js end -->

@stack('scripts')
</body>
</html>
