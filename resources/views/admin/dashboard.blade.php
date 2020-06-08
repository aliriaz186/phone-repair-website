@extends('admin.layout')
@section('content')
    <div class="main-header-toggle btn hidden-down-xs-flex">
        <div class="main-header-toggle-icon">
            <div class="main-header-toggle-icon-item"></div>
        </div>
    </div>
    <div class="content-wrapper">
        <div class="home-page">
            <!-- Content Header-->
            <!-- Content Block  -->
            <div class="content-block">
                <div class="content-block-item">
                    <div class="service-block">
                        <div class="container container-custom">
                            <h3>Welcome Admin</h3>
                            <div class="row row-flex row-margin">
                                <div class="service-icon-container col-xs-12 col-sm-6 col-md-4" style="cursor: pointer" onclick="location.href = '{{env('APP_URL')}}/stores'">
                                    <div class="service-icon-content text-center">
                                        <div class="service-icon-image"><i class="icon ion-location"></i></div>
                                        <h4>Total Stores</h4>
                                        <h1>{{$storesCount}}+</h1>
                                    </div>
                                </div>
                                <div class="service-icon-container col-xs-12 col-sm-6 col-md-4" style="cursor: pointer" onclick="location.href = '{{env('APP_URL')}}/bookings'">
                                    <div class="service-icon-content text-center">
                                        <div class="service-icon-image"><i class="icon ion-android-time"></i></div>
                                        <h4>Total Bookings</h4>
                                        <h1>{{$bookingsCount}}+</h1>
                                    </div>
                                </div>
                                <div class="service-icon-container col-xs-12 col-sm-6 col-md-4" style="cursor: pointer" onclick="location.href = '{{env('APP_URL')}}/products'">
                                    <div class="service-icon-content text-center">
                                        <div class="service-icon-image"><i class="icon ion-android-phone-portrait"></i></div>
                                        <h4>Total Products</h4>
                                        <h1>{{$productsCount}}+</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content Block Item-->
                <div class="content-block-item">
                    <div class="counter-block">
                        <!-- Counter Block Start -->
                        <div class="counter-item col-xs-12 col-sm-6 col-md-3">
                            <div class="counter-item-icon"><i class="icon ion-heart-broken"></i></div>
                            <span>6500</span>
                            <h4>Broken Screen</h4>
                        </div>
                        <!-- Counter Block Start -->
                        <div class="counter-item col-xs-12 col-sm-6 col-md-3">
                            <div class="counter-item-icon"><i class="icon ion-battery-empty"></i></div>
                            <span>15000</span>
                            <h4>Replacement Battery</h4>
                        </div>
                        <!-- Counter Block Start -->
                        <div class="counter-item col-xs-12 col-sm-6 col-md-3">
                            <div class="counter-item-icon"><i class="icon ion-monitor"></i></div>
                            <span>1500</span>
                            <h4>Home Button</h4>
                        </div>
                        <!-- Counter Block Start -->
                        <div class="counter-item col-xs-12 col-sm-6 col-md-3">
                            <div class="counter-item-icon"><i class="icon ion-heart"></i></div>
                            <span>50000</span>
                            <h4>Happy Client</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

    </script>
    <!-- Content Footer  -->
@stop
