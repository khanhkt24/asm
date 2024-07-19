<!DOCTYPE html>
<html lang="en-us">

@include('fontend.layouts.patials.head')

<body>
    <!-- navigation -->
    <header class="navigation fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-white">

                @include('fontend/layouts/patials/nav')

            </nav>
        </div>
    </header>
    <!-- /navigation -->

    <div class="py-4">
    </div>
    @yield('content-detail')

    <footer class="footer">

        @include('fontend.layouts.patials.footer')

    </footer>

    @include('fontend/layouts/patials/libs-js')
</body>

</html>
