
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
                 src="{{ asset('images/logotype.png') }}" alt="">
        </div>
        <div class="login-wrapper my-auto">
            <h1 class="login-title text-center">Error</h1>
            <div>
                <h2 style="color: darkred">Invalid Email or Password</h2>
                <input name="login" style="background: black!important; color: white!important;" id="login"
                       type="button" value="Go Back" onclick="location.href='{{ env('APP_URL') }}/admin'">
            </div>
        </div>
    </div>
</main>
</body>
</html>
