<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Badan Wakaf Indonesia</title>
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo.png') }}" />
	    <!-- Bootstrap CSS -->
	    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	  	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	  	<link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css')}}">
		<style type="text/css">
	  		.a-header{
	  			text-decoration: none;
				font-family: 'Poppins';
				font-style: normal;
				font-weight: 600;
				font-size: 15px;
				line-height: 30px;
				color: #219F94;
	  		}
	  		.b-header{
	  			font-family: 'Poppins';
				font-style: normal;
				font-weight: 500;
				font-size: 15px;
				line-height: 30px;
				/* identical to box height */


				color: #FFFFFF;
	  			background: #219F94;
				border-radius: 25px;
	  		}
	  		.bg1{
	  			background-image: url("{{ asset('img/bg.png') }}");
	  			width: 100%;
	  			height: auto;
	  			background-size: 100% auto;
	  			background-repeat: no-repeat;
	  		}
	  	</style>
  	</head>
	<body>
		<div class="bg1">
			<div class="container">
				<!-- HEADER -->
				<nav class="navbar navbar-light">
					<div class="container-fluid" style="padding-bottom: 25px; padding-top: 25px;">
						<a class="navbar-brand">
							<img src="{{ asset('img/logo1.png') }}" class="image-fluid">
						</a>
						<div class="d-flex">
							<a class="a-header p-3">Tentang Kami</a>
							<a class="a-header p-3">Kategori</a>
							<a class="a-header p-3">Program</a>
							<a class="a-header p-3">FAQ</a>
							<button class="b-header p-3">Hubungi Kami</button>
						</div>
					</div>
				</nav>
			</div>
		</div>

		<div style="padding-top: 75px; background: #F5F5F5;">
			<div class="container">
				<div class="row">
					<div class="col-5" align="left">
						<div class="col-5">
							<img src="{{ asset('img/logo1.png') }}" class="image-fluid">
						</div>
						<p class="f-bantu">Bantu orang lain dengan menggunakan Berbagi, sebuah platform yang aman, transparan, dan terpercaya.</p>
						<p class="f-bantu">bantuan@wakafnyok.org.id</p>
						<p class="f-bantu">021-82216602</p>
					</div>
					<div class="col-7">
						<div class="row">
							<div class="col-4" align="left">
								<p class="f-title">Beranda</p>
								<p class="f-text">Tentang Kami</p>
								<p class="f-text">Kategori</p>
								<p class="f-text">Program</p>
							</div>
							<div class="col-4" align="left">
								<p class="f-title">Resource</p>
								<p class="f-text">Hubungi Kami</p>
								<p class="f-text">FAQ</p>
								<p class="f-text">Featured</p>
							</div>
							<div class="col-4" align="left">
								<p class="f-title">Legal</p>
								<p class="f-text">Privacy Policy</p>
								<p class="f-text">Term Condition</p>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</body>