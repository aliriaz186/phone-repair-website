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
                        <div class="shop-cart-small-item"><a class="shop-cart-small-item-image" href="shop-item.html"> <img src="images/a9.png" alt=""></a>
                            <div class="shop-cart-small-item-name">
                                <h5> <a href="shop-item.html">Samsumg A9</a><span>175$ <span>x1</span></span></h5>
                            </div>
                            <div class="shop-cart-small-item-close"><a href="#"><i class="close-icon close-icon-small"> </i></a></div>
                        </div>
                        <div class="shop-cart-small-item"><a class="shop-cart-small-item-image" href="shop-item.html"> <img src="images/RN3.png" alt=""></a>
                            <div class="shop-cart-small-item-name">
                                <h5> <a href="shop-item.html">Xiaomi Redmi Note 3</a><span>105$ <span>x2</span></span></h5>
                            </div>
                            <div class="shop-cart-small-item-close"><a href="#"><i class="close-icon close-icon-small"> </i></a></div>
                        </div>
                    </div>
                    <div class="shop-cart-small-button btn-bordered-container"><a class="btn hvr-bounce-to-right" href="shop-cart.html">View Cart</a><a class="btn hvr-bounce-to-right" href="shop-checkout.html">Checkout</a></div>
                </div>
            </div><a class="modal-item-close btn" href="#"><span class="close-icon close-icon-accent-background"></span></a>
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
                        <li><a href="index.html">Home</a></li>
                        <li><a href="shop-list.html">Shop</a></li>
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
                            <div class="sort-bar">
                                <div class="sort-bar-links"><a class="btn hvr-bounce-to-right" href="shop-grid.html"> <i class="icon ion-grid"></i></a><a class="btn hvr-bounce-to-right" href="shop-list.html"><i class="icon ion-navicon"></i></a></div>
                                <div class="sort-bar-select">
                                    <select>
                                        <option>Popularity </option>
                                        <option>Ascending Price</option>
                                        <option>Descending Price</option>
                                        <option>Availability</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row row-flex">
                                <!-- Grid Shop Item Block Start-->
                                <div class="shop-item-container col-xs-12 col-sm-6">
                                    <div class="shop-item-content">
                                        <div class="shop-item-content-image col-xs-12"><img src="images/RN3.png" alt=""/></div>
                                        <h5 class="col-xs-8">Xiaomi Redmi Note 3</h5><span class="col-xs-4">175$</span>
                                        <p class="col-xs-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos obcaecati qui, ut neque voluptates magni officia consectetur minus nisi, pariatur accusantium magnam ducimus sed amet, id quasi quod enim. In.</p>
                                        <div class="shop-item-content-controls col-xs-12"><a class="btn hvr-bounce-to-right" href="shop-list.html">Buy </a><a class="btn hvr-bounce-to-right" href="shop-item.html">Read More </a></div>
                                    </div>
                                </div>
                                <!-- Grid Shop Item Block Start-->
                                <div class="shop-item-container col-xs-12 col-sm-6">
                                    <div class="shop-item-content">
                                        <div class="shop-item-content-image col-xs-12"><img src="images/Iphone.png" alt=""/></div>
                                        <h5 class="col-xs-8">iPhone 7</h5><span class="col-xs-4">875$</span>
                                        <p class="col-xs-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos obcaecati qui, ut neque voluptates magni officia consectetur minus nisi, pariatur accusantium magnam ducimus sed amet, id quasi quod enim. In.</p>
                                        <div class="shop-item-content-controls col-xs-12"><a class="btn hvr-bounce-to-right" href="shop-list.html">Buy </a><a class="btn hvr-bounce-to-right" href="shop-item.html">Read More </a></div>
                                    </div>
                                </div>
                                <!-- Grid Shop Item Block Start-->
                                <div class="shop-item-container col-xs-12 col-sm-6">
                                    <div class="shop-item-content">
                                        <div class="shop-item-content-image col-xs-12"><img src="images/Mp6.png" alt=""/></div>
                                        <h5 class="col-xs-8">Meizu Pro 6</h5><span class="col-xs-4">275$</span>
                                        <p class="col-xs-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos obcaecati qui, ut neque voluptates magni officia consectetur minus nisi, pariatur accusantium magnam ducimus sed amet, id quasi quod enim. In.</p>
                                        <div class="shop-item-content-controls col-xs-12"><a class="btn hvr-bounce-to-right" href="shop-list.html">Buy </a><a class="btn hvr-bounce-to-right" href="shop-item.html">Read More </a></div>
                                    </div>
                                </div>
                                <!-- Grid Shop Item Block Start-->
                                <div class="shop-item-container col-xs-12 col-sm-6">
                                    <div class="shop-item-content">
                                        <div class="shop-item-content-image col-xs-12"><img src="images/JBL.png" alt=""/></div>
                                        <h5 class="col-xs-8">JBL</h5><span class="col-xs-4">475$</span>
                                        <p class="col-xs-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos obcaecati qui, ut neque voluptates magni officia consectetur minus nisi, pariatur accusantium magnam ducimus sed amet, id quasi quod enim. In.</p>
                                        <div class="shop-item-content-controls col-xs-12"><a class="btn hvr-bounce-to-right" href="shop-list.html">Buy </a><a class="btn hvr-bounce-to-right" href="shop-item.html">Read More </a></div>
                                    </div>
                                </div>
                                <!-- Grid Shop Item Block Start-->
                                <div class="shop-item-container col-xs-12 col-sm-6">
                                    <div class="shop-item-content">
                                        <div class="shop-item-content-image col-xs-12"><img src="images/Senhi.png" alt=""/></div>
                                        <h5 class="col-xs-8">Senhiser</h5><span class="col-xs-4">475$</span>
                                        <p class="col-xs-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos obcaecati qui, ut neque voluptates magni officia consectetur minus nisi, pariatur accusantium magnam ducimus sed amet, id quasi quod enim. In.</p>
                                        <div class="shop-item-content-controls col-xs-12"><a class="btn hvr-bounce-to-right" href="shop-list.html">Buy </a><a class="btn hvr-bounce-to-right" href="shop-item.html">Read More </a></div>
                                    </div>
                                </div>
                                <!-- Grid Shop Item Block Start-->
                                <div class="shop-item-container col-xs-12 col-sm-6">
                                    <div class="shop-item-content">
                                        <div class="shop-item-content-image col-xs-12"><img src="images/MacBook.png" alt=""/></div>
                                        <h5 class="col-xs-8">MacBook</h5><span class="col-xs-4">1475$</span>
                                        <p class="col-xs-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos obcaecati qui, ut neque voluptates magni officia consectetur minus nisi, pariatur accusantium magnam ducimus sed amet, id quasi quod enim. In.</p>
                                        <div class="shop-item-content-controls col-xs-12"><a class="btn hvr-bounce-to-right" href="shop-list.html">Buy </a><a class="btn hvr-bounce-to-right" href="shop-item.html">Read More </a></div>
                                    </div>
                                </div>
                                <!-- Grid Shop Item Block Start-->
                                <div class="shop-item-container col-xs-12 col-sm-6">
                                    <div class="shop-item-content">
                                        <div class="shop-item-content-image col-xs-12"><img src="images/JBL.png" alt=""/></div>
                                        <h5 class="col-xs-8">JBL</h5><span class="col-xs-4">475$</span>
                                        <p class="col-xs-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos obcaecati qui, ut neque voluptates magni officia consectetur minus nisi, pariatur accusantium magnam ducimus sed amet, id quasi quod enim. In.</p>
                                        <div class="shop-item-content-controls col-xs-12"><a class="btn hvr-bounce-to-right" href="shop-list.html">Buy </a><a class="btn hvr-bounce-to-right" href="shop-item.html">Read More </a></div>
                                    </div>
                                </div>
                                <!-- Grid Shop Item Block Start-->
                                <div class="shop-item-container col-xs-12 col-sm-6">
                                    <div class="shop-item-content">
                                        <div class="shop-item-content-image col-xs-12"><img src="images/Mp6.png" alt=""/></div>
                                        <h5 class="col-xs-8">Meizu Pro 6</h5><span class="col-xs-4">275$</span>
                                        <p class="col-xs-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos obcaecati qui, ut neque voluptates magni officia consectetur minus nisi, pariatur accusantium magnam ducimus sed amet, id quasi quod enim. In.</p>
                                        <div class="shop-item-content-controls col-xs-12"><a class="btn hvr-bounce-to-right" href="shop-list.html">Buy </a><a class="btn hvr-bounce-to-right" href="shop-item.html">Read More </a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination-list"><a class="btn btn-small hvr-bounce-to-right" href="#">1</a><a class="btn btn-small hvr-bounce-to-right" href="#">2</a><a class="btn btn-small hvr-bounce-to-right" href="#">3</a><a class="btn btn-small hvr-bounce-to-right" href="#">></a></div>
                        </div>
                        <!-- SideBar -->
                        {{--<div class="col-xs-12 col-lg-3 clearfix">--}}
                            {{--<div class="sidebar">--}}
                                {{--<div class="sidebar-item-container col-xs-12 col-sm-6 col-md-12">--}}
                                    {{--<div class="sidebar-item sidebar-search">--}}
                                        {{--<h4>Search </h4>--}}
                                        {{--<form class="sidebar-item-form-search">--}}
                                            {{--<input placeholder="Search" type="text" name="search" id="search">--}}
                                            {{--<button class="btn hvr-bounce-to-right" type="submit"> <i class="icon ion-ios-search-strong"></i></button>--}}
                                        {{--</form>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="sidebar-item-container col-xs-12 col-sm-6 col-md-12">--}}
                                    {{--<div class="sidebar-item sidebar-price">--}}
                                        {{--<h4>Price </h4>--}}
                                        {{--<form class="sidebar-item-form-range">               <span> </span>--}}
                                            {{--<input type="text">--}}
                                        {{--</form>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="sidebar-item-container col-xs-12 col-sm-6 col-md-12">--}}
                                    {{--<div class="sidebar-item sidebar-category">--}}
                                        {{--<h4>Category </h4>--}}
                                        {{--<ul>--}}
                                            {{--<li> <a href="service-item.html">Phone </a></li>--}}
                                            {{--<li> <a href="service-item.html">Laptop</a></li>--}}
                                            {{--<li> <a href="service-item.html">Tablet</a></li>--}}
                                            {{--<li> <a href="service-item.html">Computer</a></li>--}}
                                            {{--<li> <a href="service-item.html">Apple Products</a></li>--}}
                                            {{--<li> <a href="service-item.html">MotherBoard </a></li>--}}
                                            {{--<li> <a href="service-item.html">CPU</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="sidebar-item-container col-xs-12 col-sm-6 col-md-12">--}}
                                    {{--<div class="sidebar-item sidebar-recent-trade">--}}
                                        {{--<h4>Best Trade </h4><a class="sidebar-recent-trade-item" href="shop-item.html">--}}
                                            {{--<div class="sidebar-recent-trade-item-image"> <img src="images/Iphone.png" alt=""></div><span>iPhone 7</span></a><a class="sidebar-recent-trade-item" href="shop-item.html">--}}
                                            {{--<div class="sidebar-recent-trade-item-image"> <img src="images/A9-2.png" alt=""></div><span>Samsung A9 (2016)</span></a><a class="sidebar-recent-trade-item" href="shop-item.html">--}}
                                            {{--<div class="sidebar-recent-trade-item-image"> <img src="images/Mp6.png" alt=""></div><span>Meizu Pro 6</span></a><a class="sidebar-recent-trade-item" href="shop-item.html">--}}
                                            {{--<div class="sidebar-recent-trade-item-image"> <img src="images/Iphone.png" alt=""></div><span>iPhone 7</span></a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
@stop
