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
                            <h2>Booking Details</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <div style="text-decoration: underline">Customer Details</div>
                                    <div style="font-weight: bold">Name</div>
                                    <div>{{$bookARepair->customer_name}}</div>
                                    <div style="font-weight: bold">Address</div>
                                    <div>{{$bookARepair->customer_address}}</div>
                                    <div style="font-weight: bold">Location</div>
                                    <div>{{$bookARepair->customer_location}}</div>
                                    <div style="font-weight: bold">Phone</div>
                                    <div>{{$bookARepair->customer_number}}</div>
                                </div>
                                <div class="col-md-6">
                                    <div style="text-decoration: underline">Appointment Details</div>
                                    <div style="font-weight: bold">Appointment Date</div>
                                    <div>{{$bookARepair->date}}</div>
                                    <div style="font-weight: bold">Appointment Time</div>
                                    <div>{{$bookARepair->time}}</div>
                                    <div style="font-weight: bold">Meetup Location</div>
                                    <div>{{$bookARepair->customer_location}}</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div style="margin-top: 40px!important;">
                                        <div style="text-decoration: underline">Phone Details</div>
                                        <div class="select-problem-cards"
                                             style="width: 180px;border: 1px solid #0c2340;float: left;margin-top: 15px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;margin-left: 15px;margin-right: 15px;text-align: center">
                                            <img style="height: 90px;margin: 4px 23px;width: 78px;" src="{{$phone->phone_svg}}">
                                            <p style="padding-bottom: 2px!important;color: black!important;font-weight: bold;font-size: small!important;">
                                            {{$phone->name}}
                                            <div>
                                                Color :  {{$bookARepair->selected_phone_color}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div style="text-decoration: underline; margin-top: 40px!important;">Phone Problem</div>
                                    <div>{{$bookARepair->phone_problem}}</div>
                                    <div style="text-decoration: underline; margin-top: 40px" >Change Appointment Status</div>
                                    <form method="post" action="<?php echo e(url("/bookings/status/update")); ?>">
                                        @csrf
                                        <input type="hidden" value="{{$bookARepair->id}}" name="id">
                                        <select style="margin-top: 20px!important;" name="status">
                                            <option value="pending" {{$bookARepair->status == 'pending' ? 'selected' : ''}}>pending</option>
                                            <option value="completed"  {{$bookARepair->status == 'completed' ? 'selected' : ''}}>completed</option>
                                            <option value="cancelled" {{$bookARepair->status == 'cancelled' ? 'selected' : ''}}>cancelled</option>
                                        </select>
                                        <button class="btn" style="background: black; color: white" type="submit">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
