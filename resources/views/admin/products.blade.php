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
                            <h3>Prodducts</h3>
                            <a href="{{env('APP_URL')}}/product/new" class="btn" style="background: black; color: white; float: right; margin-bottom: 20px!important;">Add New Product</a>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th class="text-center">Action</th>
                                </thead>
                                <tbody>
                                @foreach($products as $key=>$product)
                                    <tr>
                                        <td>
                                            {{$key+1}}
                                        </td>
                                        <td>
                                            <img src="{{asset('images/products/')}}/{{$product->image}}" style="width: 60px; height: 60px">
                                        </td>
                                        <td>
                                            {{$product->name}}
                                        </td>
                                        <td>
                                            {{$product->price}}
                                        </td>
                                        <td>
                                            {{$product->description}}
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-danger btn-sm" href="{{env('APP_URL')}}/product/{{$product->id}}/delete">Delete</a>
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
