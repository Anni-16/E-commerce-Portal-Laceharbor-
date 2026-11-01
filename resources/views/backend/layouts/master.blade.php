<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ ucfirst(str_replace('-', ' ', request()->segment(2) ?? 'Dashboard')) }} | Laceharbor</title>
    
    <!-- ====== CSS Links Start ====== -->
    @include('backend.partials.csslink')
    <!-- ====== CSS Links End ====== -->

</head>


<body>

    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- ====== Side NavBar Section Start ====== -->
    @include('backend.partials.side-navbar')
    <!-- ====== Side NavBar Section End ====== -->

    <div class="zentic-main" id="zenticMain">

        <!-- ====== Header Section Start ====== -->
        @include('backend.partials.header')
        <!-- ====== Header Section End ====== -->


        <!-- ======= Main Content Area Start ======= -->
        @yield('content')
        <!-- ======= Main Content Area End ======= -->


        <!-- ========= Footer Section Start ========= -->
        @include('backend.partials.footer')
        <!-- ========= Footer Section End ========= -->

    </div>

    <!-- ========== Script Links Start ========== -->
    @include('backend.partials.scriptlink')
    <!-- ========== Script Links End ========== -->

</body>

</html>