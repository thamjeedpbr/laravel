<!doctype html>
<html lang="en" dir="ltr">
  <head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>

		<!--favicon -->
		<link rel="icon" href="../../assets/images/brand/favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="../../assets/images/brand/favicon.ico" type="image/x-icon"/>

		<!-- TITLE -->
		<title>Fixerman – Admin Login</title>

		<!-- DASHBOARD CSS -->
		<link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet"/>
		{{-- <link href="../../assets/css/style-modes.css" rel="stylesheet"/> --}}

		<!-- SINGLE-PAGE CSS -->
		<link href="{{ asset('assets/plugins/single-page/css/main.css') }}" rel="stylesheet" type="text/css">

		<!--- FONT-ICONS CSS -->
		<link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet"/>

		<!-- Skin css-->
		<link href="{{ asset('assets/skins/skins-modes/color1.css') }}"  id="theme" rel="stylesheet" type="text/css" media="all" />

	</head>

	<body>

		<!-- BACKGROUND-IMAGE -->
		<div class="login-img">

			<!-- GLOABAL LOADER -->
			<div id="global-loader">
				<img src="../../assets/images/svgs/loader.svg" class="loader-img" alt="Loader">
			</div>

			<div class="page">
				<div class="">
				    <!-- CONTAINER OPEN -->
					<div class="col col-login mx-auto">
						<div class="text-center">
							<img src="../../assets/images/brand/logo-2.png" class="header-brand-img" alt="">
						</div>
					</div>
					<div class="container-login100">
						<div class="wrap-login100 p-6">
							<form method="POST" action="{{ route('login.submit') }}" class="login100-form validate-form">
								@csrf
								@if ($errors->any())
								<div class="alert alert-danger">
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach


								</ul>
								</div>
								@endif
								@if(Session::has('error_message'))
									<p class="alert alert-danger">{{ Session::get('error_message') }}</p>
									@endif
								<span class="login100-form-title">
									Admin Login
								</span>
								<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
									<input class="input100" type="text" name="email" placeholder="Email">
									<span class="focus-input100"></span>
									<span class="symbol-input100">
										<i class="zmdi zmdi-email" aria-hidden="true"></i>
									</span>
								</div>
								<div class="wrap-input100 validate-input" data-validate = "Password is required">
									<input class="input100" type="password" name="password" placeholder="Password">
									<span class="focus-input100"></span>
									<span class="symbol-input100">
										<i class="zmdi zmdi-lock" aria-hidden="true"></i>
									</span>
								</div>
								{{-- <div class="text-right pt-1">
									<p class="mb-0"><a href="forgot-password.html" class="text-primary ml-1">Forgot Password?</a></p>
								</div> --}}
								<div class="container-login100-form-btn">
									<button type="submit" class="login100-form-btn btn-primary">
										Login
									</button>
								</div>
								{{-- <div class="text-center pt-3">
									<p class="text-dark mb-0">Not a member?<a href="register.html" class="text-primary ml-1">Sign UP now</a></p>
								</div> --}}
								{{-- <div class=" flex-c-m text-center mt-3">
								    <p>Or</p>
									<div class="social-icons">
										<ul>
											<li><a class="btn  btn-social btn-block"><i class="fa fa-google-plus text-google-plus"></i> Sign up with Google</a></li>
											<li><a class="btn  btn-social btn-block mt-2"><i class="fa fa-facebook text-facebook"></i> Sign in with Facebook</a></li>
										</ul>
									</div>
								</div> --}}
							</form>
						</div>
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
			</div>
		</div>
		<!-- BACKGROUND-IMAGE CLOSED -->

		<!-- JQUERY SCRIPTS -->
		<script src="{{ asset('assets/js/vendors/jquery-3.2.1.min.js') }}"></script>

		<!-- BOOTSTRAP SCRIPTS -->
		{{-- <script src="../../assets/js/vendors/bootstrap.bundle.min.js"></script> --}}

		<!-- CUSTOM JS-->
		<script src="{{ asset('assets/js/custom.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
        <script>

            toastr.options = {
                "closeButton": true,
            };
            @if (Session::has('success'))
                toastr.success("{{ Session::get('success') }}");
                @php
                    Session::forget('success');
                @endphp
            @endif

            @if (Session::has('error'))
                toastr.error("{{ Session::get('error') }}");
                @php
                    Session::forget('error');
                @endphp
            @endif
            @if (Session::has('warning'))
                toastr.warning("{{ Session::get('warning') }}");
                @php
                    Session::forget('warning');
                @endphp
            @endif

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    toastr.error("{{ $error }}");
                @endforeach
            @endif
        </script>
	</body>
</html>
