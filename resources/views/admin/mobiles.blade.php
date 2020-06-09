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
                            <h3>Phones</h3>
                            {{--<a href="{{env('APP_URL')}}/phone/new" class="btn" style="background: black; color: white; float: right; margin-bottom: 20px!important;">Add New Phone</a>--}}
                            <table class="table table-bordered table-hover">
                                <thead>
                                <th>#</th>
                                <th>Name</th>
                                <th>Company</th>
                                {{--<th class="text-center">Colors</th>--}}
                                </thead>
                                <tbody>
                                @foreach($phones as $key=>$phone)
                                    <tr>
                                        <td>
                                            {{$key+1}}
                                        </td>
                                        <td>
                                            {{$phone->name}}
                                        </td>
                                        <td>
                                            {{$phone->company}}
                                        </td>
                                        {{--<td class="text-center">--}}
                                            {{--<button class="btn" style="background: black!important; color: white!important;" onclick="location.href='{{env('APP_URL')}}/phones/{{$phone->id}}/colors'">Add Color</button>--}}
                                        {{--</td>--}}
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
