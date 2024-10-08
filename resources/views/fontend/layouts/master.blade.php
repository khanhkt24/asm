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

    <!-- start of banner -->
    <div class="banner text-center">

        @include('fontend.layouts.patials.banner-text')

        @include('fontend.layouts.patials.banner-shape')

    </div>
    <!-- end of banner -->
    @yield('content')


    <footer class="footer">

        @include('fontend.layouts.patials.footer')

    </footer>

    @include('fontend/layouts/patials/libs-js')

</body>

</html>
