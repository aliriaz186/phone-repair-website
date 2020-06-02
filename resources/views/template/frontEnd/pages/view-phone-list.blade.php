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
                                    style="width: 35px;height: 35px;margin-right: 20px;background: #e8e8e8;border-radius: 30px;line-height: 35px;text-align: center;color: #fe636c;font-size: 17px;padding-top: 8px; padding-bottom: 8px;padding-left: 14px;padding-right: 13px;">3</span>Select
                                Model</p>
                            @foreach($phonesData as $data)
                                <div class="select-problem-cards" onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/{{$data['phoneProblem']}}/phone/{{$data['phonesData']->company}}/{{$data['phonesData']->id}}/color'"
                                     style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                    <img style="height: 90px;margin: 4px 23px;width: 78px;"
                                         src="{{$data['phonesData']->phone_svg}}">
                                    <p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    {{$data['phonesData']->name}}
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    </script>
@stop
