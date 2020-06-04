@extends('template/frontEnd/layout/layout')
@section('content')
    {{--{{$phonesData->id}}--}}
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
                            <p class="text-center"
                               style="font-weight: bold;text-transform: none!important;font-size: x-large"><span
                                    style="width: 35px;height: 35px;margin-right: 20px;background: #e8e8e8;border-radius: 30px;line-height: 35px;text-align: center;color: #fe636c;font-size: 17px;padding-top: 8px; padding-bottom: 8px;padding-left: 14px;padding-right: 13px;">5</span>Schedule
                                Repair</p>
                        </div>
                        <div class="row row-flex" style="margin-top: 3%">
                            <div class="col-xs-12 col-md-3">
                                <h4>Schedule Repair</h4>
                                <p>We will be glad to meet with you at the time indicated below. In your message, we
                                    will try to answer as soon as possible.</p>
                                <ul>
                                    <li>Mon - Fri: <b>9am - 6pm</b></li>
                                    <li>Sun: <b>10am - 4pm </b></li>
                                    <li>Sut: <b>Holiday</b></li>
                                </ul>
                            </div>
                            <div class="appointment-block-content col-xs-12 col-md-7">
                                <form>
                                    <div class="row row-flex">
                                        <div class="col-xs-12 col-md-6">
                                            <input placeholder="Your Name" name="appname" id="appname">
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <input placeholder="Your Address" name="appemail" id="appemail">
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <input type="date" name="datee" id="date">
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <input type="time" name="time" id="time">
                                        </div>
                                    </div>
                                    <button class="btn hvr-bounce-to-right" type="submit">Schedule</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        window.onload = function () {
            let todayDate = new Date();
            let date = todayDate.toISOString().slice(0, 10);
            let dd = todayDate.getDate();
            let mm = todayDate.getMonth() + 1;
            let yyyy = todayDate.getFullYear();
            let mint = todayDate.getMinutes();
            let hours = todayDate.getHours();
            if (dd < 10) {
                dd = '0' + dd;
            }
            if (mm < 10) {
                mm = '0' + mm;
            }
            if (mint < 10) {
                mint = '0' + mint;
            }
            if (hours < 10) {
                hours = '0' + hours;
            }
            let currentDate = yyyy + '-' + mm + '-' + dd;
            let currentTime = hours + ':' + mint;
            document.getElementById('date').value = currentDate;
            document.getElementById('time').value = currentTime;
        }
    </script>
@stop
