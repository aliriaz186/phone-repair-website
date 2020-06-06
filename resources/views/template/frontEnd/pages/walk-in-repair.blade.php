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
                        <li><a>Walk in Repair</a></li>
                    </ul>
                </div>
            </header>
            <!-- Content Block  -->
            <div class="content-block">
                <!-- Content Block Item-->
                <div class="content-block-item">
                    <div class="container container-custom clearfix">
                        <h1 class="text-center" style="font-weight: 800!important;">MOBILE <span style="color: #005cbf">PHONE</span>
                            REPAIRS</h1>
                        <div style="width: 640px!important;margin: 0 auto!important;">
                            <p class="text-center"
                               style="font-weight: bold;text-transform: none!important;font-size: x-large">Walk In
                                Repair</p>
                            @foreach($storesData as $data)
                                <div class="row row-flex"
                                     style="margin-top: 3%;border-bottom: 1px solid black;padding-top: 2%;padding-bottom: 4%">
                                    <div class="col-xs-12 col-md-7">
                                        <h4>Store Info</h4>
                                        <ul>
                                            <li>Name: <b>{{$data->name}}</b></li>
                                            <li>Location: <b>{{$data->location}}</b></li>
                                            <li>Phone no: <b>{{$data->phone_no}}</b></li>
                                            <li>Description: <b>{{$data->description}}</b></li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-12 col-md-5">
                                        <h4>Timings</h4>
                                        <p>Store Opening and Closing Timings</p>
                                        <ul>
                                            <li>{{$data->from_day}} - {{$data->to_day}}: <b>{{$data->from_time}}
                                                    - {{$data->to_time}}</b></li>
                                            <li>Sun: <b>Holiday</b></li>
                                        </ul>
                                    </div>
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
