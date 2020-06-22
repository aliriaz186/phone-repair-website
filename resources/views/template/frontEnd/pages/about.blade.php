@extends('template/frontEnd/layout/layout')
@section('content')
    <div class="content-wrapper">
        <div class="about-page">
            <!-- Content Header-->
            <header class="content-header">
                <!-- Sub Header Block-->
                <div class="background-parallax" data-stellar-background-ratio="0.2"><img class="background-parallax-item" data-src="images/header-1.jpg" src="images/header-1.jpg" alt=""/></div>
                <div class="home-background-overlay"></div>
                <div class="content-header-content">
                    <h2>About</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                    </ul>
                </div>
            </header>
            <!-- Content Block  -->
            <div class="content-block">
                <!-- Content Block Item-->
                <div class="content-block-item">
                    <div class="about-block">
                        <div class="container container-custom">
                            <div class="row row-flex">
                                <div class="col-sm-12 col-md-6">
                                    <!-- About Block Heading -->
                                    <h3>We are  THE GENIUS FIX</h3>
                                    <p>{{ $about ?? '' }}</p>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <!-- About Block Image--><img src="images/dd-825x411.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-block-item">
                    <div class="service-block">
                        <div class="container container-custom">
                            <h3>Our Service</h3>
                            <div class="row row-flex row-margin">
                                <!-- Service Icon Block Start-->
                                <div class="service-icon-container col-xs-12 col-sm-6 col-md-4">
                                    <div class="service-icon-content">
                                        <div class="service-icon-image"><i class="icon ion-iphone"></i></div>
                                        <h4>Phone Repair</h4>
                                        <p>Our experts can fix your phone within no time, be it any issues like charge
                                            problems, battery issues, crashed system, button replacement and so much
                                            more.</p>
                                    </div>
                                </div>
                                <!-- Service Icon Block Start-->
                                <div class="service-icon-container col-xs-12 col-sm-6 col-md-4">
                                    <div class="service-icon-content">
                                        <div class="service-icon-image"><i class="icon ion-gear-b"></i></div>
                                        <h4>Assistance in Buying Gadgets</h4>
                                        <p>Before purchasing any gadget, it is highly recommended to take suggestions
                                            from experts. At The Genius Fix, we offer you our assistance in buying any
                                            gadget, from mobile phones, to laptops and tablets. </p>
                                    </div>
                                </div>
                                <!-- Service Icon Block Start-->
                                <div class="service-icon-container col-xs-12 col-sm-6 col-md-4">
                                    <div class="service-icon-content">
                                        <div class="service-icon-image"><i class="icon ion-ios-loop"></i></div>
                                        <h4>Sell Your Phone</h4>
                                        <p>If you no longer need your old phone, you can easily sell it to us with just
                                            one visit. We assure good re-sell price as well. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Counter Block-->
                <div class="counter-block">
                    <!-- Counter Block Start -->
                    <div class="counter-item col-xs-12 col-sm-6 col-md-3">
                        <div class="counter-item-icon"> <i class="icon ion-heart-broken"></i></div><span>150</span>
                        <h4>Broken Screen</h4>
                    </div>
                    <!-- Counter Block Start -->
                    <div class="counter-item col-xs-12 col-sm-6 col-md-3">
                        <div class="counter-item-icon"> <i class="icon ion-battery-empty"></i></div><span>220</span>
                        <h4>Replacement Battery</h4>
                    </div>
                    <!-- Counter Block Start -->
                    <div class="counter-item col-xs-12 col-sm-6 col-md-3">
                        <div class="counter-item-icon"> <i class="icon ion-monitor"></i></div><span>55</span>
                        <h4>Working Hackintosh</h4>
                    </div>
                    <!-- Counter Block Start -->
                    <div class="counter-item col-xs-12 col-sm-6 col-md-3">
                        <div class="counter-item-icon"> <i class="icon ion-heart"></i></div><span>1000</span>+
                        <h4>Happy Client</h4>
                    </div>
                </div>
            </div>
        </div></div>
@stop
