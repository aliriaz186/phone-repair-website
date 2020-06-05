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
                        <div style="width: 380px!important;margin: 0 auto!important;display: block;">
                            <p class="text-center"
                               style="font-weight: bold;text-transform: none!important;font-size: x-large"><span
                                    style="width: 35px;height: 35px;margin-right: 20px;background: #e8e8e8;border-radius: 30px;line-height: 35px;text-align: center;color: #fe636c;font-size: 17px;padding-top: 8px; padding-bottom: 8px;padding-left: 14px;padding-right: 13px;">2</span>Select
                                Phone Type</p>
                            <div class="select-problem-cards"
                                 onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/{{$problem}}/phone/apple'"
                                 style="width: 160px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/device-types/phones/dblue-line.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Apple Phone Repairs
                            </div>
                            <div class="select-problem-cards"
                                 onclick="location.href='{{ env('APP_URL') }}/book-a-repair/problem/{{$problem}}/phone/samsung'"
                                 style="width: 160px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                <img style="height: 78px;margin: 12px 25px;width: 78px;"
                                     src="https://reviveaphoneuploads.s3.eu-west-1.amazonaws.com/device-types/phones/dblue-line.svg">
                                <p style="padding-top: 15px!important;padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                    Samsung Phone Repairs
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
