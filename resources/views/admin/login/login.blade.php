<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{asset('adminAsset')}}/assets/img/favicon.png" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('adminLoginAsset')}}/assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{asset('adminLoginAsset')}}/assets/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('adminLoginAsset')}}/assets/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="{{asset('adminLoginAsset')}}/assets/css/style.css">

    <title>Login</title>
</head>

<body>
<div class="d-lg-flex half">
    <div class="contents order-1 order-md-2">

        <div class="container">
            <div class="row align-items-center justify-content-center" style="background-color: #fff;">
                <div class="col-md-7">

                    <div style="position: absolute; top: -150px; margin-left: 70px;">
                        <img src="{{asset('adminLoginAsset')}}/assets/images/samaira logo.png" alt="" style="height: 50px; width: 200px;"><br>
                    </div>

                    <div id="select-button" style="position: absolute; top: -40px;">
                        <a href="" class="btn btn-primary"
                           style="background-color: #20428C; color: #fff; border-radius: 5px; border-color: #fff; text-decoration: none; padding-top: 13px;">Employee</a>
                        <a href="" class="btn btn-primary"
                           style="background-color: #20428C; color: #fff; border-radius: 5px; border-color: #fff; text-decoration: none; padding-top: 13px;">Agent</a>
                        <a href="" class="btn btn-primary"
                           style="background-color: #20428C; color: #fff; border-radius: 5px; border-color: #fff; text-decoration: none; padding-top: 13px;">Admin</a>
                    </div>

                    <form action="{{route('login')}}" method="post" style="margin-top: 30px;">
                        @csrf
                        <div class="form-group first">
                            <input type="text" class="form-control" name="email" placeholder="User name" id="username"
                                   style="border-radius: 5px; background-color: #D2D2D2;">
                        </div>
                        <div class="form-group last mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Password" id="password"
                                   style="border-radius: 5px; background-color: #D2D2D2;">
                        </div>

                        <input type="submit" style="border-radius: 5px; background-color: #20428C; border-color: #20428C;"
                               value="Log In" class="btn btn-block btn-primary">

                        <div class="d-flex mb-5 align-items-center mt-2">
                            <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                <input type="checkbox" checked="checked" />
                                <div class="control__indicator"></div>
                            </label>
                            <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row bg order-2 order-md-1 left-side" style="background-image: url('{{asset('adminLoginAsset')}}/assets/images/logo_temp.jpg');">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <img src="{{asset('adminLoginAsset')}}/assets/images/seip logo.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-3"><img src="{{asset('adminLoginAsset')}}/assets/images/bacco logo.png" alt="" class="img-fluid"></div>
            <div class="col-md-3"></div>
        </div>

        <div class="title"><span style="font-size: 56px;">SAMAIRA</span> <br> <span style="font-size: 24px;">SKILL
          DEVELOPMENT</span><br> <span style="font-size: 36px;">INSTITUTE (SSDI)</span>
        </div>
    </div>
</div>



<script src="{{asset('adminLoginAsset')}}/assets/js/jquery-3.3.1.min.js"></script>
<script src="{{asset('adminLoginAsset')}}/assets/js/popper.min.js"></script>
<script src="{{asset('adminLoginAsset')}}/assets/js/bootstrap.min.js"></script>
<script src="{{asset('adminLoginAsset')}}/assets/js/main.js"></script>
</body>

</html>
