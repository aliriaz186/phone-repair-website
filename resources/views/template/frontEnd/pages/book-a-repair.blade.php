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
                        <div style="width: 640px!important;margin: 0 auto!important;">
                            <h3 class="text-center" style="font-weight: bold"><span style="width: 35px;height: 35px;margin-right: 20px;background: #e8e8e8;border-radius: 30px;line-height: 35px;text-align: center;color: #fe636c;font-size: 17px;padding-top: 8px; padding-bottom: 8px;padding-left: 14px;padding-right: 13px;">1</span>Select Problem</h3>
                            <div class="select-problem-cards"
                                style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                    src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/screen.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Phone Screen
                            </div>
                            <div class="select-problem-cards"
                                style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                    src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/home-button.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Home Button
                            </div>
                            <div class="select-problem-cards"
                                style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                    src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/battery.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Battery
                            </div>
                            <div class="select-problem-cards"
                                style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/power-button.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Power Button
                            </div>
                            <div class="select-problem-cards"
                                style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/microphone.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Microphone
                            </div>
                            <div class="select-problem-cards"
                                style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/headphone-jack.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Headphone jack
                            </div>
                            <div class="select-problem-cards"
                                style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/ear-speaker.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Ear Speaker
                            </div>
                            <div class="select-problem-cards"
                                style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/volume-buttons.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Volume Buttons
                            </div>
                            <div class="select-problem-cards"
                                style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/mute-button.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Mute Button
                            </div>
                            <div class="select-problem-cards"
                                style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/front-camera.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Front Camera
                            </div>
                            <div class="select-problem-cards"
                                style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/rear-camera.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Rear Camera
                            </div>
                            <div class="select-problem-cards"
                                style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/vibrator.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Vibrator
                            </div>
                            <div class="select-problem-cards"
                                style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/back-housing.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Back Housing
                            </div>
                            <div class="select-problem-cards"
                                style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/loud-speaker.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Loud Speaker
                            </div>
                            <div class="select-problem-cards"
                                style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/glass.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Tablet Glass
                            </div>
                            <div class="select-problem-cards"
                                style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/lcd.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Tablet LCD
                            </div>
                            <div class="select-problem-cards"
                                style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/charger-port.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Charger Port
                            </div>
                            <div class="select-problem-cards"
                                style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/back-glass.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Back Glass
                            </div>
                            <div class="select-problem-cards"
                                style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/frame.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Frame
                            </div>
                            <div class="select-problem-cards"
                                style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/finger-print.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Finger Print Scanner
                            </div>
                            <div class="select-problem-cards"
                                style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/wireless-charging.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Wireless Charging
                            </div>
                            <div class="select-problem-cards"
                                style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/proximity-issue.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Proximity Issue
                            </div>
                            <div class="select-problem-cards"
                                style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/s-pen.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    S Pen
                            </div>
                            <div class="select-problem-cards"
                                style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://res.cloudinary.com/wefix/image/upload/v1568900955/icons/repairs/V2/iris-camera.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Iris Camera
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
