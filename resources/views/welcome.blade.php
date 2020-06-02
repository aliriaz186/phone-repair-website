@extends('template/frontEnd/layout/layout')
@section('content')
    <div class="main-header-toggle btn hidden-down-xs-flex">
        <div class="main-header-toggle-icon">
            <div class="main-header-toggle-icon-item"></div>
        </div>
    </div><a class="btn btn-icon hvr-bounce-to-bottom modal-toggle" href="#"><i class="icon ion-bag"></i></a>
    <div class="modal-wrapper">
        <div class="modal-item">
            <div class="modal-item-content">
                <div class="modal-item-content-item">
                    <div class="modal-item-content-item-wrapper">
                        <h4>Your Cart</h4>
                        <div class="shop-cart-small-item"><a class="shop-cart-small-item-image" href="shop-item.html">
                                <img src="images/a9.png" alt=""></a>
                            <div class="shop-cart-small-item-name">
                                <h5><a href="shop-item.html">Samsumg A9</a><span>175$ <span>x1</span></span></h5>
                            </div>
                            <div class="shop-cart-small-item-close"><a href="#"><i
                                        class="close-icon close-icon-small"> </i></a></div>
                        </div>
                        <div class="shop-cart-small-item"><a class="shop-cart-small-item-image" href="shop-item.html">
                                <img src="images/RN3.png" alt=""></a>
                            <div class="shop-cart-small-item-name">
                                <h5><a href="shop-item.html">Xiaomi Redmi Note 3</a><span>105$ <span>x2</span></span>
                                </h5>
                            </div>
                            <div class="shop-cart-small-item-close"><a href="#"><i
                                        class="close-icon close-icon-small"> </i></a></div>
                        </div>
                    </div>
                    <div class="shop-cart-small-button btn-bordered-container"><a class="btn hvr-bounce-to-right"
                                                                                  href="shop-cart.html">View Cart</a><a
                            class="btn hvr-bounce-to-right" href="shop-checkout.html">Checkout</a></div>
                </div>
            </div>
            <a class="modal-item-close btn" href="#"><span class="close-icon close-icon-accent-background"></span></a>
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
                <div class="home-content"><span class="home-content-heading">Broken your Phone?</span><span
                        class="home-content-subheading"><a style="color: white" href="{{env('APP_URL')}}/book-a-repair">Book a Repair</a></span>
                </div>
            </header>
            <!-- Content Block  -->
            <div class="content-block">
                <div class="content-block-item">
                    <div class="appointment-block">
                        <div class="container container-custom">
                            <h3>Wake in Repair</h3>
                            <div class="row row-flex">
                                <div class="col-xs-12 col-md-6">
                                    <form>
                                        <div class="row row-flex">
                                            <div class="col-xs-12 col-md-6">
                                                <input placeholder="Your Name" name="appname" id="appname">
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                                <input placeholder="Your E-mail" name="appemail" id="appemail">
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                                <input placeholder="Your Telephone" name="appphone" id="appphone">
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                                <input placeholder="Subject" name="appsubject" id="appsubject">
                                            </div>
                                            <div class="col-xs-12">
                                                <textarea placeholder="Your Problem in Detail" name="apptext"
                                                          id="apptext"></textarea>
                                            </div>
                                        </div>
                                        <button class="btn hvr-bounce-to-right" type="submit">Send</button>
                                    </form>
                                </div>
                                <div class="appointment-block-content col-xs-12 col-md-6">
                                    <h4>Schedule</h4>
                                    <p>We will be glad to meet with you at the time indicated below. In your message, we
                                        will try to answer as soon as possible.</p>
                                    <ul>
                                        <li>Mon - Fri: <b>9am - 6pm</b></li>
                                        <li>Sun: <b>10am - 4pm </b></li>
                                        <li>Sut: <b>Holiday</b></li>
                                    </ul>
                                </div>
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
                                    <h3>We're RepairED </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nihil voluptatum
                                        quia molestias numquam vel beatae dicta modi eos facere? Dolorem aspernatur,
                                        voluptatibus, ipsam neque corporis obcaecati repudiandae dignissimos
                                        tempore.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque
                                        necessitatibus facere debitis eum explicabo ea consequatur. </p>
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
                                        <div class="service-icon-image"><i class="icon ion-android-desktop"></i></div>
                                        <h4>Desktop Repair</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam autem
                                            sapiente dignissimos modi earum ex culpa, aperiam repudiandae? Quo quaerat
                                            eum ratione dignissimos similique itaque, cumque, nostrum veritatis esse
                                            aspernatur.</p><a href="service-item.html">Read More </a>
                                    </div>
                                </div>
                                <!-- Service Icon Block Start-->
                                <div class="service-icon-container col-xs-12 col-sm-6 col-md-4">
                                    <div class="service-icon-content">
                                        <div class="service-icon-image"><i class="icon ion-laptop"></i></div>
                                        <h4>Laptop Repair</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam doloremque
                                            maxime ullam quae necessitatibus quibusdam voluptatibus aspernatur,
                                            sapiente, cupiditate suscipit architecto nulla nihil itaque, ad et
                                            exercitationem. Voluptatem, amet.</p><a href="service-item.html">Read
                                            More </a>
                                    </div>
                                </div>
                                <!-- Service Icon Block Start-->
                                <div class="service-icon-container col-xs-12 col-sm-6 col-md-4">
                                    <div class="service-icon-content">
                                        <div class="service-icon-image"><i class="icon ion-ipad"></i></div>
                                        <h4>Tablet Repair</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam doloremque
                                            maxime ullam quae necessitatibus quibusdam voluptatibus aspernatur,
                                            sapiente, cupiditate suscipit architecto nulla nihil itaque, ad et
                                            exercitationem. Voluptatem, amet.</p><a href="service-item.html">Read
                                            More </a>
                                    </div>
                                </div>
                                <!-- Service Icon Block Start-->
                                <div class="service-icon-container col-xs-12 col-sm-6 col-md-4">
                                    <div class="service-icon-content">
                                        <div class="service-icon-image"><i class="icon ion-iphone"></i></div>
                                        <h4>Phone Repair</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam doloremque
                                            maxime ullam quae necessitatibus quibusdam voluptatibus aspernatur,
                                            sapiente, cupiditate suscipit architecto nulla nihil itaque, ad et
                                            exercitationem. Voluptatem, amet.</p><a href="service-item.html">Read
                                            More </a>
                                    </div>
                                </div>
                                <!-- Service Icon Block Start-->
                                <div class="service-icon-container col-xs-12 col-sm-6 col-md-4">
                                    <div class="service-icon-content">
                                        <div class="service-icon-image"><i class="icon ion-gear-b"></i></div>
                                        <h4>Selling Details</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam autem
                                            sapiente dignissimos modi earum ex culpa, aperiam repudiandae? Quo quaerat
                                            eum ratione dignissimos similique itaque, cumque, nostrum veritatis esse
                                            aspernatur.</p><a href="service-item.html">Read More </a>
                                    </div>
                                </div>
                                <!-- Service Icon Block Start-->
                                <div class="service-icon-container col-xs-12 col-sm-6 col-md-4">
                                    <div class="service-icon-content">
                                        <div class="service-icon-image"><i class="icon ion-ios-loop"></i></div>
                                        <h4>Buy Your Gadgets</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam doloremque
                                            maxime ullam quae necessitatibus quibusdam voluptatibus aspernatur,
                                            sapiente, cupiditate suscipit architecto nulla nihil itaque, ad et
                                            exercitationem. Voluptatem, amet.</p><a href="service-item.html">Read
                                            More </a>
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
                            <h4>Working Hackintosh</h4>
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
