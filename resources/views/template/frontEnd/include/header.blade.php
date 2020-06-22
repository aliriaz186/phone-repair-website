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
                    <!-- Your Logotype --><img src="{{ asset('images/logottype.png') }}" alt="">
                    {{--<!-- Your Name --><span>RepairED</span>--}}
                </div>
                <nav class="main-header-navigation">
                    <!-- Navigation Menu -->
                    <ul class="main-header-navigation-list">
                        <!-- Navigation Dropdown Menu -->
                        <li class="main-header-navigation-item"><a class="main-header-navigation-link"
                                                                   href="{{env('APP_URL')}}/">Home</a></li>
                        <li class="main-header-navigation-item"><a class="main-header-navigation-link"
                                                                   href="{{env('APP_URL')}}/book-a-repair">Book a
                                Repair</a></li>
                        <li class="main-header-navigation-item"><a class="main-header-navigation-link"
                                                                   href="{{env('APP_URL')}}/walk-in-repair">Walk in
                                Repair</a></li>
                        <li class="main-header-navigation-item"><a class="main-header-navigation-link"
                                                                   href="{{URL::to('')}}/about">About</a></li>
                        <!-- Navigation Dropdown Menu -->
                        <li class="main-header-navigation-item main-header-navigation-dropdown"><a
                                class="main-header-navigation-link" href="{{URL::to('')}}/shops">Shop</a>
                        </li>
                        <li class="main-header-navigation-item main-header-navigation-dropdown"><a
                                    class="main-header-navigation-link" href="{{URL::to('')}}/show-blogs">Blogs</a>
                        </li>
                        <li class="main-header-navigation-item main-header-navigation-dropdown"><a
                                    class="main-header-navigation-link" href="{{URL::to('')}}/show-repair-videos">Repair Videos</a>
                        </li>
                        <li class="main-header-navigation-item"><a class="main-header-navigation-link"
                                                                   href="{{URL::to('')}}/contact-us">Contact Us </a></li>
                    </ul>
                </nav>
            </div>
            <!-- Main-header Social Link and part of info -->
            <div class="main-header-subcontent-container">
                <!-- Social list -->
                {{--<ul class="main-header-social-list">--}}
                    {{--<!-- Social Item -->--}}
                    {{--<li class="main-header-social-item">--}}
                        {{--<!-- Social Link --><a class="main-header-social-link" href="#">--}}
                            {{--<!-- Social Icon --><i class="icon ion-social-twitter"></i></a>--}}
                    {{--</li>--}}
                    {{--<li class="main-header-social-item"><a class="main-header-social-link" href="#"><i--}}
                                {{--class="icon ion-social-facebook"></i></a></li>--}}
                    {{--<li class="main-header-social-item"><a class="main-header-social-link" href="#"><i--}}
                                {{--class="icon ion-social-github"></i></a></li>--}}
                    {{--<li class="main-header-social-item"><a class="main-header-social-link" href="#"><i--}}
                                {{--class="icon ion-social-pinterest"> </i></a></li>--}}
                    {{--<li class="main-header-social-item"><a class="main-header-social-link" href="#"><i--}}
                                {{--class="icon ion-social-linkedin"> </i></a></li>--}}
                {{--</ul>--}}
            </div>
        </header>
    </div>
