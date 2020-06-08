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
                            <h3>Bookings</h3>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <th>#</th>
                                    <th>Customer name</th>
                                    <th>Customer address</th>
                                    <th>Appointment date</th>
                                    <th>Time</th>
                                    <th>Location</th>
                                    <th>Customer phone</th>
                                    <th>Status</th>
                                    <th class="text-center">View</th>
                                </thead>
                                <tbody>
                                @foreach($bookARepair as $key=>$booking)
                                    <tr>
                                        <td>
                                            {{$key+1}}
                                        </td>
                                        <td>
                                            {{$booking->customer_name}}
                                        </td>
                                        <td>
                                            {{$booking->customer_address}}
                                        </td>
                                        <td>
                                            {{$booking->date}}
                                        </td>
                                        <td>
                                            {{$booking->time}}
                                        </td>
                                        <td>
                                            {{$booking->customer_location}}
                                        </td>
                                        <td>
                                            {{$booking->customer_number}}
                                        </td>
                                        <td>
                                            {{$booking->status}}
                                        </td>
                                        <td class="text-center">
                                            <button class="btn" style="background: black!important; color: white!important;" onclick="location.href='{{env('APP_URL')}}/bookings/{{$booking->id}}'">View Details</button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $bookARepair->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
