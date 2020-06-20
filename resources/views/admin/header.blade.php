<!DOCTYPE html>
<html lang="zxx">
<!--head start-->

<!-- Mirrored from netgon.ru/themeforest/repaired_html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 May 2020 18:55:51 GMT -->
<head>
    <!-- Charset-->
    <meta charset="utf-8"/>
    <!-- IE  -->
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <!-- Title-->
    <title>THEGFIX | Home</title>
    <!-- Viewport (Need to responsive) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Framework/libraries/Plugins/style CSS-->
    <link href="{{ asset('css/plugins/vendor.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css"/>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</head>
<!-- head end-->
<body>
<div class="preloader"></div>
<div class="page-wrapper">
    <!-- Header Wrapper -->
    <div class="main-header-wrapper">
        <!-- main header of page -->
        <header class="main-header">
            <div class="main-header-content">
                <!-- logotype -->
                <div class="main-header-logotype-container">
                    <!-- Your Logotype --><img src="{{ asset('images/logotype.png') }}" alt="">
                </div>
                <nav class="main-header-navigation">
                    <ul class="main-header-navigation-list">
                        <li class="main-header-navigation-item"><a class="main-header-navigation-link" href="{{env('APP_URL')}}/admin-dashboard">Home</a></li>
                        <li class="main-header-navigation-item"><a class="main-header-navigation-link" href="{{env('APP_URL')}}/bookings">Bookings</a></li>
                        <li class="main-header-navigation-item"><a class="main-header-navigation-link" href="{{env('APP_URL')}}/stores">Stores</a></li>
                        <li class="main-header-navigation-item"><a class="main-header-navigation-link" href="{{env('APP_URL')}}/products">Products</a></li>
                        <li class="main-header-navigation-item"><a class="main-header-navigation-link" href="{{env('APP_URL')}}/newsletter">NEWSLETTER Emails</a></li>
                        <li class="main-header-navigation-item"><a class="main-header-navigation-link" href="{{env('APP_URL')}}/phones">Phones</a></li>
                        <li class="main-header-navigation-item"><a class="main-header-navigation-link" href="{{env('APP_URL')}}/admin/about">About</a></li>
                        <li class="main-header-navigation-item"><a class="main-header-navigation-link" href="{{env('APP_URL')}}/admin/blog">Blogs</a></li>
                        <li class="main-header-navigation-item"><a class="main-header-navigation-link" href="{{env('APP_URL')}}/repair/videos">Repair Videos</a></li>
                        <li class="main-header-navigation-item"><a class="main-header-navigation-link" href="{{env('APP_URL')}}/logout">Logout</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Main-header Social Link and part of info -->
            <div class="main-header-subcontent-container">
                <!-- Social list -->
            </div>
        </header>
    </div>
