@extends('template/frontEnd/layout/layout')
@section('content')
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
                        <li><a href="{{env('APP_URL')}}/">Home</a></li>
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
                            <div class="select-problem-cards"
                                 onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/phone-screen'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 114px;margin: 12px 25px;width: 78px;"
                                     src="{{ asset('images/phonescreen.png') }}">
{{--                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
{{--                                    Phone Screen--}}
                            </div>
                            <div class="select-problem-cards"
                                 onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/home-button'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 114px;margin: 12px 16px;width: 97px;"
                                     src="{{ asset('images/homebutton.png') }}">
{{--                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
{{--                                    Home Button--}}
                            </div>
                            <div class="select-problem-cards"
                                 onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/battery'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 114px;margin: 12px 25px;width: 59px;"
                                     src="{{ asset('images/battery.png') }}">
{{--                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
{{--                                    Battery--}}
                            </div>
                            <div class="select-problem-cards"
                                 onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/power-button'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 114px;margin: 12px 16px;width: 95px;"
                                     src="{{ asset('images/powerbutton.png') }}">
{{--                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">--}}
{{--                                    Power Button--}}
                            </div>
                            <div class="select-problem-cards"
                                 onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/microphone'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 114px;margin: 12px 25px;width: 78px;"
                                     src="{{ asset('images/microphone.png') }}">
{{--                                    Microphone--}}
                            </div>
                            <div class="select-problem-cards"
                                 onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/headphone-jack'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 114px;margin: 12px 25px;width: 78px;"
                                     src="{{ asset('images/headphonejack.png') }}">
                            </div>
                            <div class="select-problem-cards"
                                 onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/ear-speaker'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 114px;margin: 12px 25px;width: 78px;"
                                     src="{{ asset('images/earspeaker.png') }}">
                            </div>
                            <div class="select-problem-cards"
                                 onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/volume-buttons'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 114px;margin: 12px 19px;width: 91px;"
                                     src="{{ asset('images/volumebuttons.png') }}">
                            </div>
                            <div class="select-problem-cards"
                                 onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/mute-buttons'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 114px;margin: 12px 20px;width: 91px;"
                                     src="{{ asset('images/mutebutton.png') }}">
                            </div>
                            <div class="select-problem-cards"
                                 onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/front-camera'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 114px;margin: 12px 25px;width: 78px;"
                                     src="{{ asset('images/frontcamera.png') }}">
                            </div>
                            <div class="select-problem-cards"
                                 onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/rear-camera'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 114px;margin: 12px 25px;width: 78px;"
                                     src="{{ asset('images/rearcamera.png') }}">
                            </div>
                            <div class="select-problem-cards"
                                 onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/vibrator'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 114px;margin: 12px 25px;width: 78px;"
                                     src="{{ asset('images/vibrator.png') }}">
                            </div>
                            <div class="select-problem-cards"
                                 onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/back-housing'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 114px;margin: 12px 19px;width: 87px;"
                                     src="{{ asset('images/backhousing.png') }}">
                            </div>
                            <div class="select-problem-cards"
                                 onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/loud-speaker'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 114px;margin: 12px 25px;width: 78px;"
                                     src="{{ asset('images/loudspeaker.png') }}">
                            </div>
                            <div class="select-problem-cards"
                                 onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/tablet-glass'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 114px;margin: 12px 25px;width: 78px;"
                                     src="{{ asset('images/tabletglass.png') }}">
                            </div>
                            <div class="select-problem-cards"
                                 onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/tablet-lcd'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 114px;margin: 12px 25px;width: 78px;"
                                     src="{{ asset('images/tabletlcd.png') }}">
                            </div>
                            <div class="select-problem-cards"
                                 onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/charger-port'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 114px;margin: 12px 25px;width: 78px;"
                                     src="{{ asset('images/chargerport.png') }}">
                            </div>
                            <div class="select-problem-cards"
                                 onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/back-glass'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 114px;margin: 12px 25px;width: 78px;"
                                     src="{{ asset('images/backglass.png') }}">
                            </div>
                            <div class="select-problem-cards"
                                 onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/frame'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 114px;margin: 12px 25px;width: 78px;"
                                     src="{{ asset('images/frame.png') }}">
                            </div>
                            <div class="select-problem-cards"
                                 onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/finger-print-scanner'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 114px;margin: 12px 1px;width: 125px;"
                                     src="{{ asset('images/fingerprintscanner.png') }}">
                            </div>
                            <div class="select-problem-cards"
                                 onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/wireless-charging'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 114px;margin: 12px 12px;width: 105px;"
                                     src="{{ asset('images/wirelesscharging.png') }}">
                            </div>
                            <div class="select-problem-cards"
                                 onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/proximity-issue'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 114px;margin: 12px 7px;width: 114px;"
                                     src="{{ asset('images/proximityissue.png') }}">
                            </div>
                            <div class="select-problem-cards"
                                 onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/s-open'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 114px;margin: 12px 25px;width: 78px;"
                                     src="{{ asset('images/spen.png') }}">
                            </div>
                            <div class="select-problem-cards"
                                 onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/iris-issue'"
                                 style="width: 130px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 114px;margin: 12px 25px;width: 78px;"
                                     src="{{ asset('images/iriscamera.png') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    </script>
@stop
