<!DOCTYPE html>
<html lang="en">
<head>
    <title>Siaga</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="{{ asset('assets/images/samudra.jpg')}}"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
    
    <div class="limiter">
        <div class="container-login100">
            <div class="login100-more"
            style="background-image: url('{{asset('assets/images/ships.jpg')}}');">
                <div class="bg-caption text-white" style="padding-top: 700px; padding-left: 25px;">
                    <h2 class="semi-bold text-white" style="font-size: 37px;">Sistem Informasi Galangan</h2>
                    <p class="semi-bold text-white" style="font-size: 14px;"> © 2018 PT Samudera Indonesia Tbk</p>
                </div>
            </div>
            <div class="wrap-login100 p-l-50 p-r-50 p-t-50 p-b-50" >
                <img src="{{ asset('assets/images/samudra.jpg')}}" style="width: 78px;" >
            <div class="card-body" style="padding-left: 0px;">
            <form method="POST" action="{{url('/registerPost')}}" class="login100-form validate-form">
                {{csrf_field()}}
                @if(count($errors)>0)
                    @foreach($errors->all() as $error)
                        <div class="col-md-8 alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group required validate-input" style="width: 72%; font-size: 13px; ">
                            <label for="name" >Name</label>
                            <input class="form-control" type="text" name="name" id="name" autofocus="" 
                            style=" width: 270px;">
                            <span class="focus-input100" ></span>
                        </div>
                    </div>
            <div class="row">
                    <div class="col-md-6">
                        <div class="form-group required validate-input"style="font-size: 13px;">
                            <label for="username">User Name</label>
                            <input class="form-control" type="username" name="username" id="username">
                            <span class="focus-input100"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group required validate-input" style="font-size: 13px;">
                            <label for="email">E-Mail Address</label>
                            <input class="form-control" type="email" name="email" id="email" 
                            style="width: 190px;" autofocus="">
                            <span class="focus-input100"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group required validate-input" style="font-size: 13px;">
                            <label for="password">password</label>
                                <input class="form-control" type="password" name="password" id="password" 
                                 autofocus="">
                            <span class="focus-input100"></span>     
                        </div>
                    </div>
                    
                
                
                

               

                <div class="container-login100-form-btn" style="padding-top: 20px;">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" name="login">Register</button>
                        </div>
                        <a href="login" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                            Login
                        <i class="fa fa-long-arrow-right m-l-5"></i>
                        </a>
                    </div>
            </form>
            </div>
            </div>
        </div>
    </div>
    
<!--===============================================================================================-->
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>