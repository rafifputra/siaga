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
</head>
<body style="background-color: #999999;">	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" 
				style="background-image: url('{{asset('assets/images/ships.jpg')}}');">
				<div class="bg-caption text-white" style="padding-top: 540px; padding-left: 25px;">
				 	<h2 class="semi-bold text-white" style="font-size: 37px;">Sistem Informasi Galangan</h2>
				 	<p class="semi-bold text-white" style="font-size: 14px;"> © 2018 PT Samudera Indonesia Tbk</p>
				 </div>
			</div>
			<div class="wrap-login100 p-l-50 p-r-50 p-t-50 p-b-50" >
				<form class="login100-form validate-form" action="/loginpost" method="POST">
					{{csrf_field()}}
					<img src="{{ asset('assets/images/samudra.jpg')}}" style="width: 78px;" >
					<span class="login100-form-title p-b-59" style="padding-top: 20px;">
						Sign into your pages account
					</span>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">User Name</span>
						<input class="input100" type="text" name="username" placeholder="User Name" required="required">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Credentials" required="required">
						<span class="focus-input100"></span>
					</div>
					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">Remember me?</span>
							</label>
						</div>
					</div>
					@if(\Session::has('alert'))
                		<div class="alert alert-danger">
                    		<div>{{Session::get('alert')}}</div>
                		</div>
            		@endif
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="login">Login</button>
						</div>
						<!-- <a href="register" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Register
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a> -->
					</div>
				</form>
			</div>
		</div>
	</div>
<!--===============================================================================================-->
	<script src="{{asset('assets/js/main.js')}}"></script>
	
</body>
</html>