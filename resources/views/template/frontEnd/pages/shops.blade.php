@extends('template/frontEnd/layout/layout')
@section('content')
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
                    </ul>
                </div>
            </header>
            <!-- Content Block  -->
            <div class="content-block">
                <!-- Content Block Item-->
                <div class="content-block-item">
                    <div class="container container-custom clearfix">
                        <!-- Content -->
                        <div class="col-xs-12 col-lg-12 clearfix">
                            <div class="row">
                                <!-- Grid Shop Item Block Start-->
                                @foreach($products as $product)
                                <div class="shop-item-container col-xs-12 col-sm-4">
                                    <div class="shop-item-content">
                                        <div class="shop-item-content-image col-xs-12">
                                            @if(!empty($product->image))
                                                <img src="{{ asset('/public/images/products/' . $product->image) }}">
                                            @else
                                                <img src="{{URL::to('')}}/images/RN3.png">
                                            @endif
                                        </div>
                                        <h5 class="col-xs-8">{{$product->name}}</h5><span class="col-xs-4">{{$product->price}}$</span>
                                        <div class="shop-item-content-controls col-xs-12"><a class="btn hvr-bounce-to-right btn-sm" href="{{url("/shops-details")}}/{{$product->id}}">Buy </a><a class="btn hvr-bounce-to-right btn-sm" href="{{url("/shops-details")}}/{{$product->id}}">Read More </a></div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                                <!-- Grid Shop Item Block Start-->
                            {{--<div class="pagination-list"><a class="btn btn-small hvr-bounce-to-right" href="#">1</a><a class="btn btn-small hvr-bounce-to-right" href="#">2</a><a class="btn btn-small hvr-bounce-to-right" href="#">3</a><a class="btn btn-small hvr-bounce-to-right" href="#">></a></div>--}}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
@stop
