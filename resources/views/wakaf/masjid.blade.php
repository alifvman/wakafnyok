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
	  		.bg2{
	  			background-image: url("{{ asset('img/bg2.png') }}");
	  			width: 100%;
	  			height: auto;
	  			background-size: auto 100%;
	  			background-repeat: no-repeat;
	  		}
	  		.title-wakaf{
	  			font-family: 'Poppins';
				font-style: normal;
				font-weight: 700;
				font-size: 35px;
				line-height: 52px;

				color: #333333;
				padding-top: 100px;
	  		}
	  		.text-map{
	  			font-family: 'Poppins';
				font-style: normal;
				font-weight: 500;
				font-size: 25px;
				line-height: 38px;
				/* identical to box height */

				color: #219F94;
				padding-top: 25px;
	  		}
	  		.t-nominal{
	  			font-family: 'Poppins';
				font-style: normal;
				font-weight: 700;
				font-size: 35px;
				line-height: 52px;
				/* identical to box height */

				color: #333333;
				padding-top: 100px;
	  		}
	  		.t-minimumm{
	  			font-family: 'Poppins';
				font-style: normal;
				font-weight: 400;
				font-size: 15px;
				line-height: 38px;
				/* identical to box height */


				color: #EC7575;
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

		<!-- CONTENT -->
		<div class="bg2">
			<div class="container" style="padding-top: 70px;">
				<div class="row">
					<div class="col-7">
						<img src="{{ asset('img/wakaf_mesjid.png') }}" class="img-fluid" style="width: 100%;">
					</div>
					<div class="col-5" align="left" style="padding-left: 75px;">
						<strong><p class="title-wakaf">Wakaf Renovasi Pembangunan Masjid</p></strong>
						<p class="text-map"><i class="fa fa-map-marker" aria-hidden="true"></i> Klender, Jakarta Timur</p>
						<hr style="color: #219F94;">
						<img src="{{ asset('img/logo1.png') }}" class="image-fluid">
					</div>
					<div class="col-12 form-group" align="center">
						<p class="t-nominal">Masukkan Nominal Wakaf</p>
						<input type="text" class="form-control" name="" style="border: 1px solid #BCBCBC; box-sizing: border-box; border-radius: 15px; height: 60px;" placeholder="Rp">
						<p class="t-minimumm">Mohon isi Rp 10.000 atau lebih</p>
					</div>
				</div>
			</div>
		</div>

	</body>
</html>