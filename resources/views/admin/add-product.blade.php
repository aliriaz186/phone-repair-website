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
                            <h3>Add New Product</h3>
                            <div>
                                <form onsubmit="return checkValidations()" action="{{url("/product/save")}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <div class="">
                                            <img src="{{asset('images/default-image.svg')}}" style="width: 150px!important;cursor: pointer" onclick="uploadImage()" class="rounded picture-src" id="photopreview" accept="image/*">
                                            <input type="file" name="image" id="photo" onchange="readURL(this)" style="display: none">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="pwd">Product Name</label>
                                            <input type="text" class="form-control" id="product-name" placeholder="Enter Product Name" name="productName">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="pwd">Product Price</label>
                                            <input type="number" class="form-control" id="product-price" placeholder="Enter Price" name="productPrice">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="pwd">Product Description</label>
                                            <textarea type="text" class="form-control" id="product-description" rows="4" name="productDescription">
                                        </textarea>
                                        </div>
                                    </div>
                                    <button class="btn hvr-bounce-to-right" type="submit">Submit </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function uploadImage() {
            document.getElementById("photo").click();
        }
    </script>
    <script type="text/javascript">
        function checkValidations() {
            if (document.getElementById('product-name').value === '' || document.getElementById('product-name').value === null) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Product name cannot be empty!',
                });
                return false;
            }
            if (document.getElementById('product-price').value === '' || document.getElementById('product-price').value === null) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Product price cannot be empty!',
                });
                return false;
            }
            if (document.getElementById('product-price').value<1) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Product price cannot be 0!',
                });
                return false;
            }
            if (document.getElementById('product-description').value === '' || document.getElementById('product-description').value === null) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Product Description cannot be empty!',
                });
                return false;
            }
            return true;
        }
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    document.getElementById('photopreview').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        // $('form').submit(function(){
        //     let name = document.getElementById('name').value;
        //     let url = document.getElementById('url').value;
        //     regexp =  /^(?:(?:https?|ftp):\/\/)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/\S*)?$/;
        //     if(name === ''){
        //         Swal.fire({
        //             icon: 'error',
        //             title: 'Oops...',
        //             text: 'Invalid Name!',
        //         });
        //         return false;
        //     }
        //     if(url === ''){
        //         Swal.fire({
        //             icon: 'error',
        //             title: 'Oops...',
        //             text: 'Invalid Url!',
        //         });
        //         return false;
        //     }
        //     if (regexp.test(url) !==true) {
        //         Swal.fire({
        //             icon: 'error',
        //             title: 'Oops...',
        //             text: 'Invalid Url!',
        //         });
        //         return false;
        //     }
        //     $("#btnFetch").html(
        //         `<span class="spinner-border spinner-border-sm" role="status"></span> Loading...`
        //     );
        // });
    </script>
@stop
