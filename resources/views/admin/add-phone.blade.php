@extends('admin.layout')
@section('content')
    <div class="main-header-toggle btn hidden-down-xs-flex">
        <div class="main-header-toggle-icon">
            <div class="main-header-toggle-icon-item"></div>
        </div>
    </div>
    <div class="content-wrapper">
        <div class="home-page">
            <div class="content-block">
                <div class="content-block-item">
                    <div class="service-block">
                        <div class="container container-custom">
                            <h3>Add New Phone</h3>
                            <div>
                                <form action="{{url("/phone/save")}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="pwd">Name</label>
                                            <input type="text" class="form-control" placeholder="Enter phone name" name="name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="pwd">Company</label>
                                            <input type="text" class="form-control" placeholder="Enter company" name="company">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="pwd">Phone Svg link</label>
                                            <input type="text" class="form-control" placeholder="Enter link" name="svg">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="pwd">Phone Picture link</label>
                                            <input type="text" class="form-control" id="product-price" placeholder="Enter link" name="picture">
                                        </div>
                                    </div>
                                    <button class="btn hvr-bounce-to-right" type="submit">Submit </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
