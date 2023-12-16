<!DOCTYPE html>
<html lang="en">
@include('includes.head')

<body>
    <!--header-top start -->
    @include('includes.header')
    <!--header-top end -->

    <!-- top-area Start -->
    @include('includes.topArea')
    <!-- top-area End -->


    @yield('content')
    
    <!--footer start-->
    @include('includes.footer')
    <!--footer end-->

    @include('includes.footerJS')

</body>

</html>