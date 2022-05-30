<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Badan Wakaf Indonesia | {{$page ?? 'Home'}}</title>
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo.png') }}" />
	    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	    <!-- Bootstrap CSS -->
	    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap/css/bootstrap-theme.min.css') }}">
	    <script type="text/javascript" src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
	    <link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css?family=Poppins:900,800,700,600,500,400,300,200,100&display=swap" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	  	<!-- <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> -->
		<style type="text/css">
			
			h6, .h6, h5, .h5, h4, .h4, h3, .h3, h2, .h2, h1, .h1, p .p {
				font-family: 'Poppins';
				font-style: normal;
			}

		</style>
	</head>
	<body>
		@include('layouts.header')
		@yield('content')
		@include('layouts.footer')
		@yield('script')
	</body>
</html>