<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Free Bootstrap Admin Dashboard Template</title>

    @section('styles')
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin_assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/vendors/css/vendor.bundle.addons.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('admin_assets/images/favicon.png') }}"/>    
    <link rel="stylesheet" href="{{ asset('assets/plugins/sweetalert/sweetalert2.min.css') }}">
    @show
</head>

<body>
    <div class="container-scroller">
        @include('adminpage.includes.header')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            @include('adminpage.includes.sidebar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                @include('adminpage.includes.footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    @section('scripts')
    <!-- plugins:js -->
    <script src="{{ asset('admin_assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('admin_assets/vendors/js/vendor.bundle.addons.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('admin_assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin_assets/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('admin_assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/plugins/sweetalert/sweetalert2.min.js') }}"></script>
    <!-- End custom js for this page-->

    @if(session('status') == 1)
    <script>
        swal({
            title: '{{ session('title') }}',
            text: '{{ session('message') }}',
            type: 'success'
        });
    </script>
    @elseif(session('status') == -1)
    <script>
        swal({
            title: '{{ session('title') }}',
            text: '{{ session('message') }}',
            type: 'danger'
        });
    </script>
    @endif
    @show
</body>

</html>
