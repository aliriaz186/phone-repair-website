<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GFIX | Login</title>
    <!-- Viewport (Need to responsive) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Framework/libraries/Plugins/style CSS-->
    <link href="{{ asset('css/plugins/vendor.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css"/>

</head>
<body style="background: #d3d3d314 !important;">
<main>
    <div style="width: 300px!important;!important;margin: 0 auto!important;">
        <div class="brand-wrapper" style="text-align: center!important;">
            <img style="width: 200px; height: 150px; text-align: center!important;"
                 src="{{ asset('images/logottype.png') }}" alt="">
        </div>
        <div class="login-wrapper my-auto">
            <h1 class="login-title text-center">Log in</h1>
            <form action="{{url("/admin/login")}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control"
                           placeholder="email@example.com">
                </div>
                <div class="form-group mb-4">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control"
                           placeholder="enter your passsword">
                </div>
                <input name="login" style="background: black!important; color: white!important;" id="login"
                       type="submit" value="Login">
            </form>
        </div>
    </div>
</main>
</body>
</html>
