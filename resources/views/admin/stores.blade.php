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
                            <h3>Stores</h3>
                            <a href="{{env('APP_URL')}}/store/new" class="btn" style="background: black; color: white; float: right; margin-bottom: 20px!important;">Add New Store</a>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <th>#</th>
                                <th>Name</th>
                                <th>Location</th>
                                <th>Description</th>
                                <th>Phone</th>
                                <th>Days</th>
                                <th>Timing</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                @foreach($stores as $key=>$store)
                                    <tr>
                                        <td>
                                            {{$key+1}}
                                        </td>
                                        <td>
                                            {{$store->name}}
                                        </td>
                                        <td>
                                            {{$store->location}}
                                        </td>
                                        <td>
                                            {{$store->description}}
                                        </td>
                                        <td>
                                            {{$store->phone_no}}
                                        </td>
                                        <td>
                                            {{$store->from_day}} - {{$store->to_day}}
                                        </td>
                                        <td>
                                            {{$store->from_time}} - {{$store->to_time}}
                                        </td>
                                        <td>
                                            <a class="btn btn-danger btn-sm" href="{{env('APP_URL')}}/store/{{$store->id}}/delete">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
