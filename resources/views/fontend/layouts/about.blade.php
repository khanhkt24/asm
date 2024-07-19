<!DOCTYPE html>

<html lang="en-us">

@include('fontend.layouts.patials.head')

<body>
    <!-- navigation -->

    <header class="navigation fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-white">
                @include('fontend.layouts.patials.nav')
            </nav>
        </div>
    </header>
    <!-- /navigation -->
    <div class="header text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <h1 class="mb-4">@yield('title1')</h1>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a class="text-default" href="">@yield('title')
                                &nbsp; &nbsp; /</a></li>
                        <li class="list-inline-item text-primary">@yield('title1')</li>
                    </ul>
                </div>
            </div>
        </div>


        @include('fontend.layouts.patials.nav-1')

    </div>

    @yield('about-content')


    <footer class="footer">

        @include('fontend.layouts.patials.footer')

    </footer>


    <!-- JS Plugins -->
    @include('fontend.layouts.patials/libs-js')
</body>

</html>
