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
                            <h3>About Us</h3>
                            <form action="{{url("/description/save")}}" method="post">
                                @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="pwd">Description</label>
                                <textarea class="form-control" rows="10" name="description" id="email_message"
                                          placeholder="" data-msg="Please Write Your description">{{ $about ?? '' }}</textarea>
                                </div>
                            </div>
                                <div style="margin-top: 5px!important;">
                                    @if ($errors->any())
                                        <div class="alert alert-warning">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                                <button class="btn hvr-bounce-to-right" type="submit">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
