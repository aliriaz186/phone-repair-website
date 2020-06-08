@extends('template/frontEnd/layout/layout')
@section('content')
    <!-- Header Wrapper -->
    <div class="main-header-toggle btn hidden-down-xs-flex">
        <div class="main-header-toggle-icon">
            <div class="main-header-toggle-icon-item"></div>
        </div>
    </div>
    <div class="content-wrapper">
        <div class="shop-page">
            <!-- Content Header-->
            <header class="content-header">
                <!-- Sub Header Block-->
                <div class="background-parallax" data-stellar-background-ratio="0.2"><img class="background-parallax-item" data-src="images/header-2.jpg" src="images/header-2.jpg" alt=""/></div>
                <div class="home-background-overlay"></div>
                <div class="content-header-content">
                    <h2>Shop</h2>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/shops">Shop</a></li>
                        <li><a href="#">Shop Item</a></li>
                    </ul>
                </div>
            </header>
            <!-- Content Block  -->
            <div class="content-block">
                <!-- Content Block item-->
                <div class="content-block-item">
                    <div class="container container-custom clearfix">
                        <!-- Content -->
                        <div class="col-xs-12 col-md-6 col-lg-9 clearfix">
                            <div class="shop-item-block">
                                <div class="row row-flex">
                                    <div class="shop-item-block-image col-xs-12 col-lg-4"> <img src="{{ asset('images/products/' . $products->image) }}">
                                    </div>
                                    <div class="shop-item-block-content col-xs-12 col-lg-8">
                                        <div class="shop-item-block-content-heading">
                                            <h4>{{$products->name}}</h4><span style="font-weight: bold;font-size: 20px!important;">{{$products->price}}$</span>
                                        </div>
                                        <div class="row row-flex">
                                            <div class="shop-item-block-content-description col-xs-12">
                                                <p>{{$products->description}}</p>
                                            </div>
                                        </div><a class="btn hvr-bounce-to-right" href="#">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- SideBar -->
                        <div class="col-xs-12 col-md-6 col-lg-3 clearfix">
                        </div>
                    </div>
                </div>
            </div>
@stop
