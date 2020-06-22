@extends('template/frontEnd/layout/layout')
@section('content')
    <div class="main-header-toggle btn hidden-down-xs-flex">
        <div class="main-header-toggle-icon">
            <div class="main-header-toggle-icon-item"></div>
        </div>
    </div>
    <div class="content-wrapper">
        <div class="home-page">
            <!-- Content Header-->
            <header class="home content-header">
                <div class="home-background-container background-parallax" data-stellar-background-ratio="0.1"><img
                        class="background-parallax-item" src="{{ asset('images/background-1.jpg') }}"
                        data-src="images/kh.jpg" alt=""></div>
                <div class="home-background-overlay"></div>
                <div class="home-content"><span class="home-content-heading">Cracked Screen?</span><span
                        class="home-content-subheading"><a style="color: white" href="{{env('APP_URL')}}/book-a-repair">Book a Repair</a></span>
                </div>
            </header>
            <!-- Content Block  -->
            <div class="content-block">
                <div class="content-block-item">
                    <div class="appointment-block">
                        <div class="container  container-custom">
                            <h3>Walk in Repair</h3>
                            <div style="width: 700px!important;!important;margin: 0 auto!important;">
                                @if(!empty($storesData))
                                    <div class="row row-flex">
                                        <div class="col-xs-12 col-md-7">
                                            <h4>Store Info</h4>
                                            <ul>
                                                <li>Name: <b>{{$storesData->name}}</b></li>
                                                <li>Location: <b>{{$storesData->location}}</b></li>
                                                <li>Phone no: <b>{{$storesData->phone_no}}</b></li>
                                                <li>Description: <b>{{$storesData->description}}</b></li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-12 col-md-5">
                                            <h4>Timings</h4>
                                            <p>Store Opening and Closing Timings</p>
                                            <ul>
                                                <li>{{$storesData->from_day}} - {{$storesData->to_day}}:
                                                    <b>{{$storesData->from_time}}
                                                        - {{$storesData->to_time}}</b></li>
                                                <li>Sun: <b>Holiday</b></li>
                                            </ul>
                                        </div>
                                    </div>
                                @else
                                    <div>OOPS, No Stores Found</div>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content Block Item-->
                <div class="content-block-item">
                    <div class="about-block">
                        <div class="container container-custom">
                            <div class="row row-flex">
                                <div class="col-sm-12 col-md-6">
                                    <!-- About Block Heading -->
                                    <h3>GET THE BEST PARTS FOR YOUR PHONE</h3>
                                    <p>For every phone, its what inside that counts, therefore, with our mobile phone
                                        repair services, you get the best and genuine parts for your phone easily.</p>
                                    <p> We are specialists in iPhone and Samsung repairs, so all your mobile phone
                                        worries
                                        can take a back seat because with The Genius Fix, you know hand over your phone
                                        to the best repair experts.</p>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <!-- About Block Image--><img src="{{ asset('images/ipport2.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content Block Item-->
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
                                            problems, battery issues, crashed system, button replacement and the best
                                            part is that they come to you. </p>
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
                <!-- Content Block Item-->
                <div class="content-block-item">
                    <div class="counter-block">
                        <!-- Counter Block Start -->
                        <div class="counter-item col-xs-12 col-sm-6 col-md-3">
                            <div class="counter-item-icon"><i class="icon ion-heart-broken"></i></div>
                            <span>150</span>
                            <h4>Broken Screen</h4>
                        </div>
                        <!-- Counter Block Start -->
                        <div class="counter-item col-xs-12 col-sm-6 col-md-3">
                            <div class="counter-item-icon"><i class="icon ion-battery-empty"></i></div>
                            <span>220</span>
                            <h4>Replacement Battery</h4>
                        </div>
                        <!-- Counter Block Start -->
                        <div class="counter-item col-xs-12 col-sm-6 col-md-3">
                            <div class="counter-item-icon"><i class="icon ion-monitor"></i></div>
                            <span>55</span>
                            <h4>Home Button</h4>
                        </div>
                        <!-- Counter Block Start -->
                        <div class="counter-item col-xs-12 col-sm-6 col-md-3">
                            <div class="counter-item-icon"><i class="icon ion-heart"></i></div>
                            <span>1000</span>+
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
