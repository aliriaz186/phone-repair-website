@extends('template/frontEnd/layout/layout')
@section('content')
    <div class="content-wrapper">
        <div class="shop-page">
            <!-- Content Block  -->
            <div class="content-block">
                <!-- Content Block Item-->
                <div class="content-block-item">
                    <div class="container container-custom clearfix">
                        <head>
                            <link
                                href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap"
                                rel="stylesheet">
                        </head>
                        <div class="success-card-div">
                            <div class="card">
                                <div
                                    style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
                                    <i class="checkmark tick">✓</i>
                                </div>
                                <h1 class="success-text">Success</h1>
                                <p class="message-text">Your repair has been scheduled.<br> We'll be in touch shortly!
                                </p>
                                <p class="message-text"
                                   style="text-decoration: underline;color: #005cbf;font-weight: bold;cursor: pointer"
                                   onclick="location.href='{{ env('APP_URL') }}/'">Home Page</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">

            window.onload = function () {
            }
        </script>
@stop
