@extends('template/frontEnd/layout/layout')
@section('content')
    <!--  PAGE HEADING -->

    <section class="page-header">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 text-center">


                    <h3>
                        Contact Us
                    </h3>

                    <p class="page-breadcrumb">
                        <a href="#">Home</a> / Contact
                    </p>


                </div>

            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!-- end .page-header  -->


    <section class="section-content-block section-contact-block">

        <div class="container">

            <div class="row">

                <div class="col-sm-6 wow fadeInLeft">

                    <div class="contact-form-block">

                        <h2 class="contact-title">Say hello to us</h2>

                        <form role="form" onsubmit="return checkContactValidations()" action="{{url("/message/send")}}" method="post">
                            @csrf

                            <div class="form-group">
                                <input type="text" class="form-control" id="user_name" name="name" placeholder="Name"
                                       data-msg="Please Write Your Name"/>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" id="user_email" name="email"
                                       placeholder="Email" data-msg="Please Write Your Valid Email"/>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="message" id="email_message"
                                          placeholder="Message" data-msg="Please Write Your Message"></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-custom" style="background: black; color: white">Send Now</button>
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
                        </form>

                    </div> <!-- end .contact-form-block  -->

                </div> <!--  end col-sm-6  -->

                {{--<div class="col-sm-6 wow fadeInRight">--}}

                {{--<h2 class="contact-title">Our Location</h2>--}}


                {{--<div class="section-google-map-block wow fadeInUp">--}}

                {{--<div id="map_canvas"></div>--}}

                {{--</div> <!-- end .section-content-block  -->--}}

                {{--</div> <!--  end col-sm-6  -->--}}

            </div> <!-- end row  -->

        </div> <!--  end .container -->

    </section> <!-- end .section-content-block  -->


    <!--  MAIN CONTENT  -->

    <section class="section-content-block section-contact-block">

        <div class="container">

            <div class="row">

                <div class="col-md-12">
                    <h2 class="contact-title">Contact us</h2>
                </div>

                <div class="col-md-3">

                    <ul class="contact-info">
                        <li>
                            <span class="icon-container"><i class="fa fa-home"></i></span>
                            <address>30 1/1, Galle road, Dehiwala, Srilanka</address>
                        </li>
                    </ul>

                </div>

                <div class="col-md-3">

                    <ul class="contact-info">

                        <li>
                            <span class="icon-container"><i class="fa fa-phone"></i></span>
                            <address><a href="tel:+94766694477">+94 7 666 9 44 77</a></address>
                        </li>

                    </ul>

                </div>

                <div class="col-md-3">
                    <ul class="contact-info">
                        <li>
                            <span class="icon-container"><i class="fa fa-envelope"></i></span>
                            <address><a href="mailto:Info@thegeniusfix.com">info@thegfix.com</a></address>
                        </li>
                    </ul>

                </div>

                <div class="col-md-3">

                    <ul class="contact-info">
                        <li>
                            <span class="icon-container"><i class="fa fa-globe"></i></span>
                            <address><a target="_blank" href="/">www.thegfix.com</a></address>
                        </li>
                    </ul>

                </div>

            </div>

        </div>
        <script type="text/javascript">
            function checkContactValidations() {
                if (document.getElementById('user_name').value === '' || document.getElementById('user_name').value === null) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Name cannot be empty!',
                    });
                    return false;
                }
                if (document.getElementById('user_email').value === '' || document.getElementById('user_email').value === null) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Email cannot be empty!',
                    });
                    return false;
                }
                if (document.getElementById('email_message').value === '' || document.getElementById('email_message').value === null) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Message cannot be empty!',
                    });
                    return false;
                }
                return true;
            }
        </script>

    </section>
@stop
