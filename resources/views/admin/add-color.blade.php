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
                            <h3>Add New Color</h3>
                            <div>
                                <form action="{{url("/color/save")}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="pwd">Name</label>
                                            <input type="text" class="form-control" placeholder="Enter color name" name="name">
                                            <input type="hidden" class="form-control" value="{{$phoneId}}" name="phone_id">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="pwd">Color Svg link</label>
                                            <input type="text" class="form-control" placeholder="Enter link" name="svg">
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
