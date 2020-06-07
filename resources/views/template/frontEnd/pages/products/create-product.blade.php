@extends('template/frontEnd/layout/layout')
@section('content')
    <div class="main-header-toggle btn hidden-down-xs-flex">
        <div class="main-header-toggle-icon">
            <div class="main-header-toggle-icon-item"></div>
        </div>
    </div><a class="btn btn-icon hvr-bounce-to-bottom modal-toggle" href="#"><i class="icon ion-bag"></i></a>
    <div class="modal-wrapper">
        <div class="modal-item">
            <div class="modal-item-content">
                <div class="modal-item-content-item">
                    <div class="modal-item-content-item-wrapper">
                        <h4>Your Cart</h4>
                        <div class="shop-cart-small-item"><a class="shop-cart-small-item-image" href="shop-item.html"> <img src="images/a9.png" alt=""></a>
                            <div class="shop-cart-small-item-name">
                                <h5> <a href="shop-item.html">Samsumg A9</a><span>175$ <span>x1</span></span></h5>
                            </div>
                            <div class="shop-cart-small-item-close"><a href="#"><i class="close-icon close-icon-small"> </i></a></div>
                        </div>
                        <div class="shop-cart-small-item"><a class="shop-cart-small-item-image" href="shop-item.html"> <img src="images/RN3.png" alt=""></a>
                            <div class="shop-cart-small-item-name">
                                <h5> <a href="shop-item.html">Xiaomi Redmi Note 3</a><span>105$ <span>x2</span></span></h5>
                            </div>
                            <div class="shop-cart-small-item-close"><a href="#"><i class="close-icon close-icon-small"> </i></a></div>
                        </div>
                    </div>
                    <div class="shop-cart-small-button btn-bordered-container"><a class="btn hvr-bounce-to-right" href="shop-cart.html">View Cart</a><a class="btn hvr-bounce-to-right" href="shop-checkout.html">Checkout</a></div>
                </div>
            </div><a class="modal-item-close btn" href="#"><span class="close-icon close-icon-accent-background"></span></a>
        </div>
    </div>
    <div class="content-wrapper">
        <div class="shop-page">
            <!-- Content Header-->
            <header class="content-header">
                <!-- Sub Header Block-->
                <div class="background-parallax" data-stellar-background-ratio="0.2"><img class="background-parallax-item" data-src="images/header-2.jpg" src="images/header-2.jpg" alt=""/></div>
                <div class="home-background-overlay"></div>
                <div class="content-header-content">
                    <h2>Shop</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="shop-list.html">Shop</a></li>
                    </ul>
                </div>
            </header>
            <!-- Content Block  -->
            <div class="content-block">
                <!-- Content Block Item-->
                <div class="content-block-item">
                    <div class="container container-custom clearfix">
                        <!-- Content -->
                        <div class="col-xs-12 col-lg-12 clearfix">
                            <div class="row">
                                <h2>Add Products</h2>
                                <form onsubmit="return checkValidations()" action="{{url("/product/save")}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <div class="">
                                            <img src="{{asset('images/upload_image.png')}}" style="width: 150px!important;" onclick="uploadImage()" class="rounded picture-src" id="photopreview" accept="image/*">
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
