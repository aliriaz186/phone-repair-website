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
        <div class="shop-page">
            <!-- Content Header-->
            <header class="content-header">
                <!-- Sub Header Block-->
                <div class="background-parallax" data-stellar-background-ratio="0.2"><img
                        class="background-parallax-item" data-src="images/header-2.jpg" src="images/header-2.jpg"
                        alt=""/></div>
                <div class="home-background-overlay"></div>
                <div class="content-header-content">
                    <h2>Book a Repair</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a>Book a Repair</a></li>
                    </ul>
                </div>
            </header>
            <!-- Content Block  -->
            <div class="content-block">
                <!-- Content Block Item-->
                <div class="content-block-item">
                    <div class="container container-custom clearfix">
                        <h1 class="text-center" style="font-weight: 800!important;">MOBILE <span style="color: #005cbf">PHONE</span>
                            REPAIRS<br> BY PROBLEM</h1>
                        <div style="width: 640px!important;margin: 0 auto!important;display: block;">
                            <p class="text-center"
                               style="font-weight: bold;text-transform: none!important;font-size: x-large"><span
                                    style="width: 35px;height: 35px;margin-right: 20px;background: #e8e8e8;border-radius: 30px;line-height: 35px;text-align: center;color: #fe636c;font-size: 17px;padding-top: 8px; padding-bottom: 8px;padding-left: 14px;padding-right: 13px;">1</span>Select
                                Problem</p>
                            <div class="select-problem-cards" onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/phone-screen'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/screen.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Phone Screen
                            </div>
                            <div class="select-problem-cards" onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/home-button'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/home-button.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Home Button
                            </div>
                            <div class="select-problem-cards" onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/battery'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/battery.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Battery
                            </div>
                            <div class="select-problem-cards" onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/power-button'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/power-button.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Power Button
                            </div>
                            <div class="select-problem-cards" onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/microphone'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/microphone.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Microphone
                            </div>
                            <div class="select-problem-cards" onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/headphone-jack'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/headphone-jack.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Headphone jack
                            </div>
                            <div class="select-problem-cards" onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/ear-speaker'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/ear-speaker.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Ear Speaker
                            </div>
                            <div class="select-problem-cards" onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/volume-buttons'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/volume-buttons.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Volume Buttons
                            </div>
                            <div class="select-problem-cards" onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/mute-buttons'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/mute-button.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Mute Button
                            </div>
                            <div class="select-problem-cards" onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/front-camera'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/front-camera.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Front Camera
                            </div>
                            <div class="select-problem-cards" onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/rear-camera'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/rear-camera.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Rear Camera
                            </div>
                            <div class="select-problem-cards" onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/vibrator'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/vibrator.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Vibrator
                            </div>
                            <div class="select-problem-cards" onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/back-housing'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/back-housing.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Back Housing
                            </div>
                            <div class="select-problem-cards" onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/loud-speaker'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/loud-speaker.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Loud Speaker
                            </div>
                            <div class="select-problem-cards" onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/tablet-glass'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/glass.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Tablet Glass
                            </div>
                            <div class="select-problem-cards" onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/tablet-lcd'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/lcd.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Tablet LCD
                            </div>
                            <div class="select-problem-cards" onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/charger-port'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/charger-port.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Charger Port
                            </div>
                            <div class="select-problem-cards" onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/back-glass'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/back-glass.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Back Glass
                            </div>
                            <div class="select-problem-cards" onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/frame'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/frame.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Frame
                            </div>
                            <div class="select-problem-cards" onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/finger-print-scanner'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/finger-print.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Finger Print Scanner
                            </div>
                            <div class="select-problem-cards" onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/wireless-charging'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/wireless-charging.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Wireless Charging
                            </div>
                            <div class="select-problem-cards" onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/proximity-issue'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/proximity-issue.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Proximity Issue
                            </div>
                            <div class="select-problem-cards" onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/s-open'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/s-pen.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    S Pen
                            </div>
                            <div class="select-problem-cards" onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/iris-issue'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/iris-camera.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Iris Camera
                            </div>
                        </div>


                        {{--<div style="width: 640px!important;margin: 0 auto!important;display: none;">--}}
                            {{--<p class="text-center"--}}
                               {{--style="font-weight: bold;text-transform: none!important;font-size: x-large"><span--}}
                                    {{--style="width: 35px;height: 35px;margin-right: 20px;background: #e8e8e8;border-radius: 30px;line-height: 35px;text-align: center;color: #fe636c;font-size: 17px;padding-top: 8px; padding-bottom: 8px;padding-left: 14px;padding-right: 13px;">3</span>Select--}}
                                {{--Model</p>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/apple/phone/iphone-x/space-grey.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--iPhone X--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/apple/phone/iphone-11/black-1586169713.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--iPhone 11--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/apple/phone/iphone-11-pro-max/gold-1586267066.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--iPhone 11 Pro Max--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/apple/phone/iphone-xr/black.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--iPhone XR--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/apple/phone/iphone-xs/gold.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--iPhone XS--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/apple/phone/iphone-xs-max/gold.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--iPhone XS Max--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/apple/phone/iphone-8/silver.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--iPhone 8--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/apple/phone/iphone-8-plus/silver.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--iPhone 8 Plus--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/apple/phone/iphone-7/black.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--iPhone 7--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/apple/phone/iphone-7-plus/black.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--iPhone 7 Plus--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/apple/phone/iphone-6s/space-grey.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--iPhone 6s--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/apple/phone/iphone-6/space-grey.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--iPhone 6--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/apple/phone/iphone-6s-plus/space-grey.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--iPhone 6s Plus--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/apple/phone/iphone-6-plus/space-grey.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--iPhone 6 Plus--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/apple/phone/iphone-se/space-grey.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--iPhone SE--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/apple/phone/iphone-5s/space-grey.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--iPhone 5S--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/apple/phone/iphone-5c/white.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--iPhone 5C--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/apple/phone/iphone-5/black.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--iPhone 5--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div style="width: 640px!important;margin: 0 auto!important;display: block;">--}}
                            {{--<p class="text-center"--}}
                               {{--style="font-weight: bold;text-transform: none!important;font-size: x-large"><span--}}
                                    {{--style="width: 35px;height: 35px;margin-right: 20px;background: #e8e8e8;border-radius: 30px;line-height: 35px;text-align: center;color: #fe636c;font-size: 17px;padding-top: 8px; padding-bottom: 8px;padding-left: 14px;padding-right: 13px;">3</span>Select--}}
                                {{--Model</p>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/galaxy-s20-4g/cloud-pink-1585141539.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy S20 4G--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/galaxy-s20-5g/cosmic-grey-1585226322.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy S20 5G--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/galaxy-s20-plus/cosmic-grey-1585583699.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy S20+--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/galaxy-s20-ultra/cosmic-black--1585672508.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy S20 Ultra--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/galaxy-z-flip/mirror-black-1585910317.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy Z Flip--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/galaxy-s10-plus/black.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy S10+--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/galaxy-s10/black.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy S10--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/galaxy-s10e/yellow.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy S10e--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/galaxy-s10-lite/prism-black.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy S10 Lite--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/SM-G977/majestic-black.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy S10 5G--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/galaxy-s9/midnight-black.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy S9--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/galaxy-s9/midnight-black.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy S9+--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/galaxy-s8-plus/midnight-black.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy S8+--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/galaxy-s8/midnight-black.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy S8--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/galaxy-a80/black.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy A80--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/samsung-galaxy-a40/black.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy A40--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/galaxy-a51/prism-crush-black.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy A51--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/galaxy-a50/black.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy A50--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/galaxy-a71/prism-crush-black.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy A71--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/galaxy-a70/black.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy A70--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/galaxy-note-10-plus-5g/aura-black.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy Note 10+ 5G--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/galaxy-note-10-lite/aura-black.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy Note 10 Lite--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/galaxy-note-10-plus/aura-black.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy Note 10+--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/SM-N970/aura-black.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy Note 10--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/galaxy-note-9/midnight-black.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy Note 9--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/galaxy-note-8/midnight-black.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy Note 8--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/galaxy-s7/black.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy S7--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/galaxy-s5/black.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy S5--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/galaxy-a3-2017/black-sky.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy A3--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/galaxy-a5-2017/black-sky.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy A5 (2015)--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/galaxy-A6/black.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy A6--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/galaxy-a6-plus/black-1584458386.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy A6 Plus--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/galaxy-a7/blue.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy A7--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/galaxy-A8/black.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy A8--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/galaxy-a9/lemonade-blue.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy A9--}}
                            {{--</div>--}}
                            {{--<div class="select-problem-cards"--}}
                                 {{--style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">--}}
                                {{--<img style="height: 90px;margin: 4px 23px;width: 78px;"--}}
                                     {{--src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/makes/samsung/phone/SM-A105/black.svg">--}}
                                {{--<p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
                                    {{--Galaxy A10--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    </script>
@stop
