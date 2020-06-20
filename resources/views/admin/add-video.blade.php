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
                            <h3>Add New Video</h3>
                            <div>
                                <form onsubmit="return checkBlogValidations()" action="{{url("/video/save")}}"
                                      method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Select Video to upload:</label>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                            {{--<img src="{{asset('images/default-image.svg')}}"--}}
                                                 {{--style="width: 150px!important;cursor: pointer" onclick="uploadImage()"--}}
                                                 {{--class="rounded picture-src" id="photopreview" accept="image/*">--}}
                                            <input type="file" name="file" id="file">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Title</label>
                                            <input type="text" class="form-control" id="title"
                                                   placeholder="Enter Blog Title" name="title">
                                        </div>
                                    </div>
                                    <button class="btn hvr-bounce-to-right" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        // function uploadImage() {
        //     document.getElementById("file").click();
        // }
    </script>
    <script type="text/javascript">
        function checkBlogValidations() {
            if (document.getElementById('title').value === '' || document.getElementById('title').value === null) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Title cannot be empty!',
                });
                return false;
            }

            return true;
        }

    </script>
@stop
