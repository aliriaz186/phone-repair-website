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
                            <h3>Add New Store</h3>
                            <div style="width: 300px">
                                <form  onsubmit="return checkValidations()" action="{{url("/store/save")}}" method="POST">
                                    @csrf
                                    <div>Name</div>
                                    <input type="text" id="name" name="name">
                                    <div>Location</div>
                                    <input type="text" name="location" id="location">
                                    <div>Description</div>
                                    <input type="text" name="description" id="description">
                                    <div>Phone No</div>
                                    <input type="text" name="phone" id="phone">
                                    <div>From Day</div>
                                    <select name="from_day" id="from_day">
                                        <option>Monday</option>
                                        <option>Tuesday</option>
                                        <option>Wednesday</option>
                                        <option>Thursday</option>
                                        <option>Friday</option>
                                        <option>Saturday</option>
                                        <option>Sunday</option>
                                    </select>
                                    <div>To Day</div>
                                    <select name="to_day" id="to_day">
                                        <option>Monday</option>
                                        <option>Tuesday</option>
                                        <option>Wednesday</option>
                                        <option>Thursday</option>
                                        <option>Friday</option>
                                        <option>Saturday</option>
                                        <option>Sunday</option>
                                    </select>
                                    <div>From Time</div>
                                    <input type="time" name="from_time" id="from_time">
                                    <div>To Time</div>
                                    <input type="time" name="to_time" id="to_time">
                                    <button class="btn" style="background: black; color: white" type="submit">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function checkValidations() {
            if (document.getElementById('name').value === '' || document.getElementById('name').value === null) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Store Name cannot be empty!',
                });
                return false;
            }
            if (document.getElementById('location').value === '' || document.getElementById('location').value === null) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Store location cannot be empty!',
                });
                return false;
            }
            if (document.getElementById('description').value === '' || document.getElementById('description').value === null) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Store Description cannot be empty!',
                });
                return false;
            }
            if (document.getElementById('phone').value === '' || document.getElementById('phone').value === null) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Store Phone cannot be empty!',
                });
                return false;
            }
            if (document.getElementById('from_day').value === '' || document.getElementById('from_day').value === null) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'From Day cannot be empty!',
                });
                return false;
            }
            if (document.getElementById('to_day').value === '' || document.getElementById('to_day').value === null) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'To day cannot be empty!',
                });
                return false;
            }
            if (document.getElementById('from_time').value === '' || document.getElementById('from_time').value === null) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'From time cannot be empty!',
                });
                return false;
            }
            if (document.getElementById('to_time').value === '' || document.getElementById('to_time').value === null) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'To time cannot be empty!',
                });
                return false;
            }
            return true;
        }
    </script>
@stop
