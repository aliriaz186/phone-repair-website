@extends('template/frontEnd/layout/layout')
@section('content')
    <div class="content-wrapper">
        <div class="shop-page">
            <!-- Content Header-->
            <header class="content-header">
                <!-- Sub Header Block-->
                <div class="background-parallax" data-stellar-background-ratio="0.2"><img
                        class="background-parallax-item" data-src="images/header-2.jpg" src="images/header-2.jpg"
                        alt=""/></div>
                <div class="home-background-overlay"></div>
                <div class="content-header-content">
                    <h2>Book a Repair</h2>
                    <ul>
                        <li><a href="{{env('APP_URL')}}/">Home</a></li>
                        <li><a>Book a Repair</a></li>
                    </ul>
                </div>
            </header>
            <!-- Content Block  -->
            <div class="content-block">
                <!-- Content Block Item-->
                <div class="content-block-item">
                    <div class="container container-custom clearfix">
                        <h1 class="text-center" style="font-weight: 800!important;">MOBILE <span style="color: #005cbf">PHONE</span>
                            REPAIRS<br> BY PROBLEM</h1>
                        <div style="width: 640px!important;margin: 0 auto!important;">
                            <p class="text-center"
                               style="font-weight: bold;text-transform: none!important;font-size: x-large"><span
                                    style="width: 35px;height: 35px;margin-right: 20px;background: #e8e8e8;border-radius: 30px;line-height: 35px;text-align: center;color: #fe636c;font-size: 17px;padding-top: 8px; padding-bottom: 8px;padding-left: 14px;padding-right: 13px;">5</span>Schedule
                                Repair</p>
                        </div>
                        <div class="row row-flex" style="margin-top: 3%">
                            <div class="col-xs-12 col-md-3">
                                <h4>Schedule Repair</h4>
                                <p>We will be glad to meet with you at the time indicated below and on your given
                                    location. By your given number, we
                                    will try to answer as soon as possible.</p>
                                <ul>
                                    <li>Mon - Fri: <b>9am - 6pm</b></li>
                                    <li>Sun: <b>10am - 4pm </b></li>
                                    <li>Sut: <b>Holiday</b></li>
                                </ul>
                            </div>
                            <div class="appointment-block-content col-xs-12 col-md-7">
                                <form onsubmit="return checkValidations()" action="{{url("/schedule-repair/save")}}"
                                      id="schedule-form" method="POST">
                                    @csrf
                                    <input hidden name="selectedProblem" id="selectedProblem"
                                           value="{{$selectedPhoneProblem}}">
                                    <input hidden name="selectedPhoneType" id="selectedPhoneType"
                                           value="{{$selectedPhoneType}}">
                                    <input hidden name="phoneId" id="phoneId" value="{{$phoneId}}">
                                    <input hidden name="selectedPhoneColor" id="selectedPhoneColor"
                                           value="{{$selectedPhoneColor}}">
                                    <div class="row row-flex">
                                        <div class="col-xs-12 col-md-6">
                                            <input placeholder="Your Name" name="customerName" id="customerName">
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <input placeholder="Your Address" name="customerAddress"
                                                   id="customerAddress">
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <input type="date" name="date" id="date">
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <input type="time" name="time" id="time">
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <input placeholder="Your Location" name="customerLocation"
                                                   id="customerLocation">
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <input placeholder="Your Phone Number" name="customerNumber"
                                                   id="customerNumber">
                                        </div>
                                    </div>
                                    <button class="btn hvr-bounce-to-right" type="submit">Schedule</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function checkValidations() {
            if (document.getElementById('customerName').value === '' || document.getElementById('customerName').value === null) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Customer name cannot be empty!',
                });
                return false;
            }
            if (document.getElementById('customerAddress').value === '' || document.getElementById('customerAddress').value === null) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Customer address cannot be empty!',
                });
                return false;
            }
            if (document.getElementById('date').value === '' || document.getElementById('date').value === null) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Date cannot be empty!',
                });
                return false;
            }
            if (document.getElementById('time').value === '' || document.getElementById('time').value === null) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Time cannot be empty!',
                });
                return false;
            }
            if (document.getElementById('customerLocation').value === '' || document.getElementById('customerLocation').value === null) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Customer location be empty!',
                });
                return false;
            }
            if (document.getElementById('customerNumber').value === '' || document.getElementById('customerNumber').value === null) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Customer number be empty!',
                });
                return false;
            }
            return true;
        }

        window.onload = function () {
            let todayDate = new Date();
            let date = todayDate.toISOString().slice(0, 10);
            let dd = todayDate.getDate();
            let mm = todayDate.getMonth() + 1;
            let yyyy = todayDate.getFullYear();
            let mint = todayDate.getMinutes();
            let hours = todayDate.getHours();
            if (dd < 10) {
                dd = '0' + dd;
            }
            if (mm < 10) {
                mm = '0' + mm;
            }
            if (mint < 10) {
                mint = '0' + mint;
            }
            if (hours < 10) {
                hours = '0' + hours;
            }
            let currentDate = yyyy + '-' + mm + '-' + dd;
            let currentTime = hours + ':' + mint;
            document.getElementById('date').value = currentDate;
            document.getElementById('time').value = currentTime;
        }
    </script>
@stop
