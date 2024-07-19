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
  @yield('tag-content')
   <!-- JS Plugins -->

    <footer class="footer">

        @include('fontend.layouts.patials.footer')

    </footer>


    <!-- JS Plugins -->
    @include('fontend.layouts.patials/libs-js')
</body>

</html>
