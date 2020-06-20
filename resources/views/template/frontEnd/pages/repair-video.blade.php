@extends('template/frontEnd/layout/layout')
@section('content')
    <div class="main-header-toggle btn hidden-down-xs-flex">
        <div class="main-header-toggle-icon">
            <div class="main-header-toggle-icon-item"></div>
        </div>
    </div>
    <div class="content-wrapper">
        <div class="contact-page">
            <!-- Content Header-->
            <header class="content-header">
                <!-- Sub Header Block-->
                <div class="background-parallax" data-stellar-background-ratio="0.2"><img class="background-parallax-item" data-src="images/header-4.jpg" src="images/header-4.jpg" alt=""/></div>
                <div class="home-background-overlay"></div>
                <div class="content-header-content">
                    <h2>Repair Video</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="blog-list.html">Video</a></li>
                    </ul>
                </div>
            </header>
            <!-- Content Block  -->
            <div class="content-block">
                <!-- Content Block Item-->
                <div class="content-block-item">
                    <div class="container container-custom clearfix">
                        <!-- Content -->
                        <div class="col-xs-12 col-lg-9 clearfix">
                            <div class="row blog-block-masonry">
                                <!-- Blog Card block -->
                                @foreach($video as $videos)
                                    <div class="blog-item-container col-xs-12 col-md-6">
                                        <div class="blog-item-content">
                                            <!-- Blog Card Image-->
                                            <div class="blog-item-content-image col-xs-12">
                                                @if(!empty($videos->video))
                                                    <video src="{{ asset('/images/videos/' . $videos->video) }}" controls style="width: 400px;height: 250px!important;border: none!important;">
                                                    </video>
                                                @else
                                                    <img src="{{URL::to('')}}/images/RN3.png">
                                                @endif

                                            </div>
                                            <!-- Blog Card Heading   -->
                                            <div class="blog-item-content-heading col-xs-12">
                                                <!-- Blog Card Heading--><a href="#">{{$videos->title}}</a>
                                                <!-- Blog Card Info-->
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- SideBar -->
                        <div class="col-xs-12 col-lg-3 clearfix">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
