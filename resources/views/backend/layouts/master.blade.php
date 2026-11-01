<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laceharbor | E-commerce Dashboard</title>

    <!-- ====== CSS Links Start ====== -->
    @include('frontend.partials.csslink')
    <!-- ====== CSS Links End ====== -->


</head>


<body>

    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- ====== Side NavBar Section Start ====== -->
    @include('frontend.partials.side-navbar')
    <!-- ====== Side NavBar Section End ====== -->

    <div class="zentic-main" id="zenticMain">

        <!-- ====== Header Section Start ====== -->
        @include('frontend.partials.header')
        <!-- ====== Header Section End ====== -->


        <!-- ======= Main Content Area Start ======= -->
        @yield('content')
        <!-- ======= Main Content Area End ======= -->


        <!-- ========= Footer Section Start ========= -->
        @include('frontend.partials.footer')
        <!-- ========= Footer Section End ========= -->

    </div>

    <!-- ========== Script Links Start ========== -->
    @include('frontend.partials.scriptlink')
    <!-- ========== Script Links End ========== -->

</body>

</html>