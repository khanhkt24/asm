<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.layout.patial.header')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('backend.layout.patial.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column mb-5">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('backend.layout.patial.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                @yield('content')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('backend.layout.patial.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    @include('backend.layout.patial.logoutModel')

    @include('backend.layout.patial.jsAdmin')

</body>

</html>
