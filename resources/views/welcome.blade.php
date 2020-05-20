@extends('template/frontEnd/layout/layout')
@section('content')
<!--  HOME BANNER BLOCK  -->
<section class="section-content-block section-custom-bg" data-bg_color="#FFFFFF" data-bg_opacity="0" data-bg_img="images/banner_bg.jpg" data-bg_size="cover">

    <div class="container">

        <div class="row">
            <div class="col-lg-7 col-12">

                <div class="banner-content text-left" data-wow-duration="1s" data-wow-delay="0s">

                    <h2 class="text-dark-color font-weight-medium margin-top-36">
                        We Offering #1
                        <br><span class="font-weight-bold font-style-italic">Phone REPAIR</span>
                        <br>Service.

                    </h2>

                    <p class="margin-top-24">
                        <a href="#" class="btn btn-theme btn-theme-invert btn-semi-rounded">Book Appointment</a>

                    </p>

                </div> <!-- end .banner-content   -->

                <div class="row text-center mt-3">

                    <div class="col-4">

                        <div class="highlight-layout-1 highlight-icon-padding theme-custom-box-shadow theme-custom-box-animation">
                            <figure class="margin-bottom-0">
                                <a>
                                    <i class="fa fa-angellist"></i>
                                </a>
                            </figure>
                            <h5 class="font-weight-regular font-size-regular">
                                <a>Quality Service</a>
                            </h5>
                        </div>

                    </div> <!--  end .col-lg-4 col-md-4 col-sm-12 col-xs-12  -->

                    <div class="col-4">

                        <div class="highlight-layout-1 highlight-icon-padding theme-custom-box-shadow theme-custom-box-animation">
                            <figure class="margin-bottom-0">
                                <a>
                                    <i class="fa fa-people-carry"></i>
                                </a>
                            </figure>
                            <h5 class="font-weight-medium font-size-regular">
                                <a>Expert Workers</a>
                            </h5>
                        </div>

                    </div> <!--  end .col-lg-4 col-md-4 col-sm-12 col-xs-12  -->

                    <div class="col-4">

                        <div class="highlight-layout-1 highlight-icon-padding theme-custom-box-shadow theme-custom-box-animation">
                            <figure class="margin-bottom-0">
                                <a>
                                    <i class="fa fa-shuttle-van"></i>
                                </a>
                            </figure>
                            <h5 class="font-weight-regular font-size-regular">
                                <a>Quick Delivery</a>
                            </h5>
                        </div>

                    </div> <!--  end .col-lg-4 col-md-4 col-sm-12 col-xs-12  -->


                </div> <!--  end .row  -->

            </div>

            <div class="col-lg-5 col-12">

                <div class="gallery-carousel owl-carousel theme-custom-box-shadow pb-1 block-white-bg" data-items="1">

                    <div class="col-md-3 col-sm-6 col-xs-12 gallery-container">

                        <a class="gallery-light-box xs-margin" data-gall="myGallery" href="{{ asset('images/gallery_1.jpg') }}">

                            <figure class="gallery-img">

                                <img src="{{ asset('images/gallery_1.jpg') }}" alt="gallery image" height="420px" />

                            </figure> <!-- end .cause-img  -->

                        </a> <!-- end .gallery-light-box  -->

                    </div><!-- end .col-sm-3  -->

                    <div class="col-md-3 col-sm-6 col-xs-12 gallery-container">

                        <a class="gallery-light-box xs-margin"  data-gall="myGallery" href="{{ asset('images/gallery_2.jpg') }}">

                            <figure class="gallery-img">

                                <img src="{{ asset('images/gallery_2.jpg') }}" height="420px" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a>

                    </div><!-- end .col-sm-3  -->

                    <div class="col-md-3 col-sm-6 col-xs-12 gallery-container">

                        <a class="gallery-light-box xs-margin" data-gall="myGallery" href="{{ asset('images/gallery_3.jpg') }}">

                            <figure class="gallery-img">

                                <img src="{{ asset('images/gallery_3.jpg') }}" height="420px" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a> <!-- end .gallery-light-box  -->

                    </div><!-- end .col-sm-3  -->

                    <div class="col-md-3 col-sm-6 col-xs-12 gallery-container filter spray">

                        <a class="gallery-light-box xs-margin"  data-gall="myGallery" href="{{ asset('images/gallery_4.jpg') }}">

                            <figure class="gallery-img">

                                <img src="{{ asset('images/gallery_4.jpg') }}" height="420px" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a>

                    </div><!-- end .col-sm-3  -->

                    <div class="col-md-3 col-sm-6 col-xs-12 gallery-container">

                        <a class="gallery-light-box xs-margin" data-gall="myGallery" href="{{ asset('images/gallery_5.jpg') }}">

                            <figure class="gallery-img">

                                <img src="{{ asset('images/gallery_5.jpg') }}" height="420px" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a> <!-- end .gallery-light-box  -->

                    </div><!-- end .col-sm-3  -->

                    <div class="col-md-3 col-sm-6 col-xs-12 gallery-container">

                        <a class="gallery-light-box xs-margin"  data-gall="myGallery" href="{{ asset('images/gallery_6.jpg') }}">

                            <figure class="gallery-img">

                                <img src="{{ asset('images/gallery_6.jpg') }}" height="420px" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a>

                    </div><!-- end .col-sm-3  -->

                    <div class="col-md-3 col-sm-6 col-xs-12 gallery-container">

                        <a class="gallery-light-box xs-margin" data-gall="myGallery" href="{{ asset('images/gallery_7.jpg') }}">

                            <figure class="gallery-img">

                                <img src="{{ asset('images/gallery_7.jpg') }}" height="420px" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a> <!-- end .gallery-light-box  -->

                    </div><!-- end .col-sm-3  -->

                    <div class="col-md-3 col-sm-6 col-xs-12 gallery-container">

                        <a class="gallery-light-box xs-margin"  data-gall="myGallery" href="{{ asset('images/gallery_8.jpg') }}">

                            <figure class="gallery-img">

                                <img src="{{ asset('images/gallery_8.jpg') }}" height="420px" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a>

                    </div><!-- end .col-sm-3  -->


                </div> <!-- end .row  -->
            </div>
        </div>

    </div>

</section>

<!--  SECTION APPOINTMENT   06-->

<section class="section-content-block section-secondary-bg">

    <div class="container">

        <div class="row">

            <div class="appointment-form-wrapper light-layout  margin-bottom-24 clearfix theme-custom-no-box-shadow d-lg-inline-flex">

                <div class="col-lg-4 col-12">
                    <div class="appointment-form-heading text-left">
                        <h2 class="form-title text-capitalize margin-top-24">
                            Request Booking
                        </h2>

                        <p>
                            Please fill out the booking form and very soon we will contact with you to schedule an appointment.
                        </p>

                    </div>
                </div>

                <div class="col-lg-8 col-12">

                    <form class="appoinment-form margin-top-42 wow fadeInLeft">

                        <div class="container">
                            <div class="row">

                                <div class="form-group col-4">
                                    <input id="your_name" class="form-control" placeholder="Name" type="text"  required="" data-msg="This field is required.">
                                </div>
                                <div class="form-group col-4">
                                    <input id="your_email" class="form-control" placeholder="Email" type="email"  required="" data-msg="This field is required.">
                                </div>
                                <div class="form-group col-4">
                                    <input id="your_phone" class="form-control" placeholder="Phone" type="text"  required="" data-msg="This field is required.">
                                </div>

                                <div class="form-group col-12">
                                    <textarea id="textarea_message" class="form-control" rows="3" placeholder="Your Message..."  required="" data-msg="This field is required."></textarea>
                                </div>

                                <div class="form-group col-12 col-sm-12 col-xs-12 text-left">
                                    <button id="btn_submit" class="btn btn-lg btn-theme btn-semi-rounded btn-theme-invert" type="submit">Get Appointment</button>
                                </div>

                            </div>
                        </div>

                    </form>

                </div>

            </div> <!-- end .appointment-form-wrapper  -->


        </div> <!--  end .row  -->

    </div> <!--  end .container -->

</section>  <!--  end .appointment-section  -->

<!--  ABOUT US -->

<section class="section-content-block" id="highlights-1">
    <div class="container">

        <div class="row">

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

                <div class="row section-heading-wrapper margin-bottom-12">

                    <div class="col-md-12 col-sm-12 text-left">
                        <h4 class="heading-alt-style text-uppercase text-dark-color">
                            TOP REPAIR SERVICE
                            <br class="hidden-sm">
                            BY THE PROFESSIONALS
                        </h4>
                        <p>
                            Get your device repaired quickly by our experts and professionals and we promise to deliver the quality work to you.
                        </p>
                    </div> <!-- end .col-sm-12  -->

                </div>

                <div class="row">

                    <div class="col-md-12">
                        <div class="highlight-layout-2">

                            <div class="highlight-icon">
                                <i class="fa fa-wrench"></i>
                            </div> <!-- end .service-icon  -->

                            <div class="highlight-text">
                                <h5><a href="#">Free Estimation</a></h5>
                                <div>No extra payment will be charged for the estimation. Our expert team members will analyze,  measure and provide you the accurate floor repairing cost of your house.</div>
                            </div> <!-- end .service-text  -->

                        </div> <!-- end .service-item  -->
                    </div>

                    <div class="col-md-12">
                        <div class="highlight-layout-2">

                            <div class="highlight-icon">
                                <i class="fa fa-users"></i>
                            </div> <!-- end .service-icon  -->

                            <div class="highlight-text">
                                <h5><a href="#">Customer Satisfaction</a></h5>
                                <div>We ensure our customer to deliver the quality work. Get guaranteed customer satisfaction from us and build a strong customer relationship with our company.</div>
                            </div> <!-- end .service-text  -->

                        </div> <!-- end .service-item  -->
                    </div>

                    <div class="col-md-12">
                        <div class="highlight-layout-2">

                            <div class="highlight-icon">
                                <i class="fa fa-hand-peace-o"></i>
                            </div> <!-- end .service-icon  -->

                            <div class="highlight-text">
                                <h5><a href="#">On Time Delivery</a></h5>
                                <div>Get your job done within our estimated time frame. We will deliver the quality material and expert team members to hand over your required work on time.</div>
                            </div> <!-- end .service-text  -->

                        </div> <!-- end .service-item  -->
                    </div>



                </div>

            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 text-center">

                <img src="{{ asset('images/about_us_persons.jpg') }}" style="width: 400px;" alt="" class="img-responsive wow fadeInRight">

            </div>

        </div> <!--  end .row  -->
    </div> <!--  end .container -->

</section>

<!-- PROCESS SECTION 02-->

<section class="section-content-block section-custom-bg" data-bg_img="images/process_bg_1.jpg" data-bg_color="#2bb6d3" data-bg_opacity="0">

    <div class="container">

        <div class="row section-heading-wrapper section-heading-wrapper-alt">

            <div class="col-md-8 offset-md-2 col-sm-12 col-sm-offset-0 text-center">
                <h4>How It Works?</h4>
                <span class="heading-separator"></span>
                <h2>THREE STEPS SOLUTION</h2>
            </div> <!-- end .col-sm-12  -->

        </div>

        <div class="row wow fadeInUp text-center">

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="process-step-1 block-primary-bg wow fadeIn theme-custom-box-animation theme-custom-box-shadow" data-wow-delay="0.20s">


                    <i class="fa fa-mobile-alt text-light-color"></i>
                    <h3 class="text-light-color">
                        Bring The Device
                    </h3>
                    <div class="process-info text-light-color">Experienced service department ready to handle all of your auto service needs.</div>
                </div>
            </div> <!--  end .col-lg-3 col-md-3 col-sm-12 col-xs-12  -->

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="process-step-1 block-white-bg wow fadeIn theme-custom-box-animation theme-custom-box-shadow" data-wow-delay="0.40s">

                    <i class="fa fa-wrench text-primary-color"></i>
                    <h3>
                        Diagnose The Problem
                    </h3>
                    <div class="process-info">Experienced service department ready to handle all of your auto service needs.</div>
                </div>
            </div> <!--  end .col-lg-3 col-md-3 col-sm-12 col-xs-12  -->

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="process-step-1 block-black-bg wow fadeIn theme-custom-box-animation theme-custom-box-shadow" data-wow-delay="0.60s">

                    <i class="fa fa-handshake-o text-primary-color"></i>
                    <h3 class="text-light-color">
                        Return Repaired Device
                    </h3>
                    <div class="process-info text-light-color">Experienced service department ready to handle all of your auto service needs.</div>
                </div>
            </div> <!--  end .col-lg-3 col-md-3 col-sm-12 col-xs-12  -->

        </div> <!--  end .row -->

        <div class="row counter-inline-container wow zoomIn">

            <div class="col-lg-3 col-6">

                <div class="counter-block-2 counter-border">

                    <i class="icon fa fa-users"></i>
                    <div class="count-info">
                        <span class="counter">35</span>
                        <span class="counter-postfix">+</span>
                        <p class="text-capitalize">Years Service</p>
                    </div>

                </div>

            </div> <!--  end .col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

            <div class="col-lg-3 col-6">

                <div class="counter-block-2 counter-border">

                    <i class="icon fa fa-smile-o"></i>

                    <div class="count-info">
                        <span class="counter">7000</span>
                        <p class="text-capitalize">Happy Buyers</p>
                    </div>

                </div>

            </div> <!--  end .col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

            <div class="col-lg-3 col-6">

                <div class="counter-block-2 counter-border">

                    <i class="icon fa fa-forumbee"></i>
                    <div class="count-info">
                        <span class="counter">99</span>
                        <span class="counter-postfix">%</span>
                        <p class="text-capitalize">Devices Fixed</p>
                    </div>

                </div>

            </div> <!--  end .col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

            <div class="col-lg-3 col-6">

                <div class="counter-block-2 counter-border">

                    <i class="icon fa fa-wrench"></i>
                    <div class="count-info">
                        <span class="counter">1275</span>
                        <p class="text-capitalize">National Awards</p>
                    </div>

                </div>

            </div> <!--  end .col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

        </div>  <!--  end .row  -->

    </div> <!--  end .container  -->

</section> <!--  end .section-content-block -->


<!-- SECTION TESTIMONIAL  04 -->

<section class="section-content-block section-pure-white-bg border-top-1-light">

    <div class="container">
        <div class="row section-heading-wrapper">

            <div class="col-md-12 col-sm-12 text-center">
                <h4 class="heading-alt-style text-capitalize">Customers Opinion</h4>
                <span class="heading-separator heading-separator-horizontal"></span>
                <h2 class="subheading-alt-style pl-lg-5 pl-0 pr-lg-5 pr-0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet orci tortor, sed dignissim urna ullamcorper sit amet.
                </h2>

            </div> <!-- end .col-sm-12  -->

        </div>
    </div>

    <div class="container theme-custom-box-shadow">

        <div class="row">

            <div class="col-lg-5 d-none-md d-none-sm no-padding">
                <figure>
                    <img src="{{ asset('images/testimony_feat_img.jpg') }}" alt="" height="400px" class="db"/>
                </figure>
            </div>

            <div class="col-lg-7 col-12">

                <div class="testimonial-container owl-carousel text-left margin-top-48" data-items  ="2" data-dots="false">

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                        <div class="testimony-layout-1 transparent-bg">

                            <p class="testimony-text font-size-regular">
                                Always friendly, honest service. Comparable prices and good advice. I appreciate the ride to work too and delivered to my work the same day it broke down.
                            </p>

                            <div class="testimony-info">
                                <img class="img-responsive" src="{{ asset('images/user_2.jpg') }}" alt="Client Image" />
                                <h4>Brandon Munson </h4>
                                <h6>CTO, Fulcrum Design</h6>
                            </div>
                        </div> <!-- end .testimony-layout-1  -->

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                        <div class="testimony-layout-1 transparent-bg">
                            <p class="testimony-text font-size-regular">
                                Always friendly, honest service. Comparable prices and good advice. I appreciate the ride to work too and delivered to my work the same day it broke down.
                            </p>
                            <img class="img-responsive" src="{{ asset('images/user_3.jpg') }}" alt="Client Image" />
                            <div class="testimony-info">
                                <h4>Sunnybrook Church </h4>
                                <h6 class="bq-author-info">CEO, HW Tech Inc</h6>
                            </div>
                        </div> <!-- end .testimony-layout-1  -->

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                        <div class="testimony-layout-1 transparent-bg">
                            <p class="testimony-text font-size-regular">
                                Always friendly, honest service. Comparable prices and good advice. I appreciate the ride to work too and delivered to my work the same day it broke down.
                            </p>
                            <img class="img-responsive" src="{{ asset('images/user_1.jpg') }}" alt="Client Image" />
                            <div class="testimony-info">
                                <h4>Sunnybrook Church </h4>
                                <h6 class="bq-author-info">CEO, HW Tech Inc</h6>
                            </div>
                        </div> <!-- end .testimony-layout-1  -->

                    </div>

                </div> <!-- end .testimonial-container  -->

            </div>



        </div>



    </div> <!-- end .container  -->

</section>

<!--  SECTION CTA 04 -->

<section class="cta-layout-02 section-primary-bg clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <h2 class="text-light-color">
                    Do you need assistance to repair your computer?
                </h2>
                <p>
                    We will happy to serve our best to you. Just bring your valuable desktop, laptop, Macbook, tab or gaming computer. Our experts will be happy to assist you.

                </p>
            </div> <!--  end .col-md-8  -->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center">
                <a class="btn btn-theme btn-semi-rounded btn-theme-invert wow bounce" href="#">CONTACT WITH US</a>
            </div> <!--  end .col-md-4  -->
        </div> <!--  end .row  -->
    </div>
</section>
@stop
<!-- START FOOTER 05 -->
