<!DOCTYPE html>
<html lang="en">
<head>
	<title>Molinos Contact</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>
	<div id="app" class="container-contact100">
		<div class="wrap-contact100">
			<form method="POST" action="/store" enctype="multipart/form-data" class="contact100-form validate-form">
				@csrf
				<a href="/login"><i class="fa fa-sign-in"></i> Admin panel</a>
				<span class="contact100-form-title">
					Send your question!
				</span>
				<div class="wrap-input100 validate-input">
					<span class="label-input100">Name</span>
					<input value="{{ old('name') }}" class="input100" type="text" name="name" placeholder="Your name">
					<span class="focus-input100"></span>
				</div>
				@if ($errors->has('name'))
					<span class="alert">
						<strong>{{ $errors->first('name') }}</strong>
					</span>
				@endif

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Email</span>
					<input value="{{ old('email') }}" class="input100" type="text" name="email" placeholder="Your Email">
					<span class="focus-input100"></span>
				</div>
				@if ($errors->has('email'))
					<span class="alert">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
				@endif

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Question</span>
					<textarea class="input100" name="question" placeholder="Your message here...">{{ old('question') }}</textarea>
					<span class="focus-input100"></span>
				</div>
				@if ($errors->has('question'))
					<span class="alert">
						<strong>{{ $errors->first('question') }}</strong>
					</span>
				@endif
				<div class="wrap-input100">
					<span class="label-input100">Files</span>
					<files-input id="files-input"></files-input>
					<span class="focus-input100"></span>
				</div>
				@if ($errors->has('files.*'))
					<span class="alert">
						<strong>Files must be images.</strong>
					</span>
				@endif
				@if(env('GOOGLE_RECAPTCHA_KEY'))
					<div class="g-recaptcha"
						data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
					</div>
					@if ($errors->has('g-recaptcha-response'))
						<span class="alert">
							<strong>Confirm captcha</strong>
						</span>
					@endif
				@endif
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Send
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>


	<script src="{{ URL::asset('/js/app.js') }}"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>

</body>
</html>
