<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Badan Wakaf Indonesia | {{$page->title ?? 'Home'}}</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo.png') }}" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Poppins:900,800,700,600,500,400,300,200,100&display=swap" rel="stylesheet">

  	<!-- <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> -->
  	<style type="text/css">
  		.a-header{
  			text-decoration: none;
			font-family: 'Poppins';
			font-style: normal;
			font-weight: 500;
			font-size: 15px;
			line-height: 30px;
			color: #219F94;
  		}
  		.m-text{
  			font-family: 'Poppins';
			font-style: normal;
			font-weight: 800;
			font-size: 45px;
			/* identical to box height */
			text-align: center;
			color: #219F94;
			padding: 0;
			margin: 0;
  		}
  		.m-text-2{
  			font-family: 'Poppins';
			font-style: normal;
			font-weight: 400;
			font-size: 13px;
			text-align: center;
			padding-top: 20px;
			color: #6D6B6B;
  		}
  		.b-mulai{
  			width: 240px;
			height: 84px;
  			background: #219F94;
			box-shadow: 4px 14px 50px rgba(19, 71, 122, 0.4);
			border-radius: 35px;
			font-family: 'Poppins';
			font-style: normal;
			font-weight: 600;
			font-size: 22px;
			line-height: 33px;
			/* identical to box height */

			text-align: center;

			color: #FFFFFF;
			border: 0;
  		}
  		.bg1{
  			background-image: url("{{ asset('img/bg.png') }}");
  			width: 100%;
  			height: auto;
  			background-size: 100% 100%;
  		}
  		.bg2{
  			background-image: url("{{ asset('img/bg2.png') }}");
  			width: 100%;
  			height: auto;
  			background-size: auto 100%;
  		}
  		.title-tk{
  			position: absolute;
			width: 144px;
			height: 30px;

			font-family: 'Poppins';
			font-style: normal;
			font-weight: 600;
			font-size: 18px;
			line-height: 30px;
			/* identical to box height */


			color: #219F94;
  		}
  		.text-berwakaf{
			font-family: 'Poppins';
			font-style: normal;
			font-weight: 700;
			font-size: 35px;

			color: #333333;
			padding-top: 30px;
  		}
  		.text-platform{
			font-family: 'Poppins';
			font-style: normal;
			font-weight: 400;
			font-size: 14px;

			color: #6D6B6B;
			padding-top: 30px;
  		}
  		.b-lengkap{
			width: 214px;
			height: 75px;

			background: #219F94;
			border-radius: 35px;
			font-family: 'Poppins';
			font-style: normal;
			font-weight: 600;
			font-size: 14px;
			line-height: 30px;
			/* identical to box height */

			text-align: center;

			color: #FFFFFF;
			border: 0;
  		}
  		.img-video{
  			padding-top: 80px;
  			width: 100%;
  			height: auto;
  			background-size: 100% 100%;
  		}
  		.img-icon{
  			position: absolute;
			width: 117px;
			height: 117px;

			background: #219F94;
  		}
  		.t-kategori{

			font-family: 'Poppins';
			font-style: normal;
			font-weight: 700;
			font-size: 24px;
			line-height: 36px;
			/* identical to box height */


			color: #333333;
			padding-top: 50px;
  		}
  		.text-kategori{
  			font-family: 'Poppins';
			font-style: normal;
			font-weight: 400;
			font-size: 15px;

			color: #333333;
			padding-top: 40px;
  		}
  		.p-dominasi{
  			font-family: 'Poppins';
			font-style: normal;
			font-weight: 800;
			font-size: 50px;
			line-height: 70px;

			color: #333333;
  		}
  		.t-psw{
  			font-family: 'Poppins';
			font-style: normal;
			font-weight: 800;
			font-size: 20px;

			color: #333333;
			padding: 5px;
			margin: 0;
  		}
  		.text-psw{
  			font-family: 'Poppins';
			font-style: normal;
			font-weight: 500;
			font-size: 12px;

			color: #6D6B6B;
			padding: 5px;
  		}
  		input[type=range] {
		   -webkit-appearance: none;
		}
		input[type=range]::-webkit-slider-runnable-track {
		   width: 100%;
		   height: 5px;
		   background: #ddd;
		   border: none;
		   border-radius: 3px;
		}
		input[type=range]::-webkit-slider-thumb {
		   -webkit-appearance: none;
		   border: none;
		   height: 16px;
		   width: 16px;
		   border-radius: 50%;
		   background: goldenrod;
		   margin-top: -4px;
		}
		input[type=range]:focus {
		   outline: none;
		}
		 input[type=range]:focus::-webkit-slider-runnable-track {
		   background: #ccc;
		}
		input[type=range] {
		   /* fix for FF unable to apply focus style bug  */
		   border: 1px solid white;
		   /*required for proper track sizing in FF*/
		   width: 100%;
		}
		 input[type=range]::-moz-range-track {
		   width: 300px;
		   height: 5px;
		   background: #ddd;
		   border: none;
		   border-radius: 3px;
		}
		 input[type=range]::-moz-range-thumb {
		   border: none;
		   height: 16px;
		   width: 16px;
		   border-radius: 50%;
		   background: goldenrod;
		}

		/*hide the outline behind the border*/
		input[type=range]:-moz-focusring {
		   outline: 1px solid white;
		   outline-offset: -1px;
		}
		 input[type=range]:focus::-moz-range-track {
		   background: #ccc;
		}

		/* for ie */

		input[type=range]::-ms-track {
		   width: 300px;
		   height: 5px;

		/*remove bg colour from the track, we'll use ms-fill-lower and ms-fill-upper instead */
		   background: transparent;

		/*leave room for the larger thumb to overflow with a transparent border */
		   border-color: transparent;
		   border-width: 6px 0;

		/*remove default tick marks*/
		   color: transparent;
		}
		input[type=range]::-ms-fill-lower {
		   background: #777;
		   border-radius: 10px;
		}
		input[type=range]::-ms-fill-upper {
		   background: #ddd;
		   border-radius: 10px;
		}
		input[type=range]::-ms-thumb {
		   border: none;
		   height: 16px;
		   width: 16px;
		   border-radius: 50%;
		   background: goldenrod;
		}
		input[type=range]:focus::-ms-fill-lower {
		   background: #888;
		}
		input[type=range]:focus::-ms-fill-upper {
		   background: #ccc;
		}
		.text-target{
			font-family: 'Poppins';
			font-style: normal;
			font-weight: 550;
			font-size: 13px;


			color: #333333;
		}
		.btn-wakaf{
			background: #219F94;
			border-radius: 35px;
			font-family: 'Poppins';
			font-style: normal;
			font-weight: 600;
			font-size: 13px;

			text-align: center;

			color: #FFFFFF;
			padding: 15px;
			border: 0;
		}
		.duaplus{
			font-family: 'Poppins';
			font-style: normal;
			font-weight: 600;
			font-size: 75px;
			line-height: 70px;
			/* identical to box height */

			margin-bottom: 0;
			color: #219F94;
		}
		.rupiah{
			font-family: 'Poppins';
			font-style: normal;
			font-weight: 600;
			font-size: 35px;
			line-height: 0;
			/* identical to box height */


			color: #219F94;
		}
		.b-duaplus{
			font-family: 'Poppins';
			font-weight: 500;
		}
		.wakaf_sukarela{
			font-family: 'Poppins';
			font-style: normal;
			font-weight: 800;
			font-size: 40px;

			color: #FFFFFF;
			padding-top: 40px;
		}
		.wakaf_koneksi{
			font-family: 'Poppins';
			font-style: normal;
			font-weight: 400;
			font-size: 16px;

			color: #FFFFFF;
		}
		.b-bergabung{
			border: 0;
			background: #FFFFFF;
			border-radius: 35px;
			font-family: 'Poppins';
			font-style: normal;
			font-weight: 600;
			font-size: 15px;
			line-height: 30px;
			/* identical to box height */

			text-align: center;

			color: #219F94;
			padding: 10px 30px 10px 30px;
			border: 0;
		}
		.b-lihat{
			background: #219F94;
			border: 1px solid #FFFFFF;
			box-sizing: border-box;
			border-radius: 35px;
			padding: 10px 30px 10px 30px;
			font-family: 'Poppins';
			font-style: normal;
			font-weight: 600;
			font-size: 15px;
			line-height: 30px;
			/* identical to box height */

			text-align: center;

			color: #FFFFFF;
		}
		.f-title{
			font-family: 'Poppins';
			font-style: normal;
			font-weight: 700;
			font-size: 24px;
			line-height: 36px;
			color: #333333;
		}
		.f-bantu{
			font-family: 'Poppins';
			font-style: normal;
			font-weight: 400;
			font-size: 22px;

			color: #555555;
			padding-top: 30px;
		}
		.f-text{
			font-family: 'Poppins';
			font-style: normal;
			font-weight: 400;
			font-size: 22px;

			color: #555555;
			padding-top: 20px;
		}
  	</style>
</head>
<body>
	<!-- <div style="background-image: url('{{ asset('img/bg.png') }}'); min-height: 888px;"> -->
	<div class="bg1">
		<div class="container">
			<!-- HEADER -->
			<nav class="navbar navbar-light" style="padding-top: 20px;">
				<div class="container-fluid">
					<a class="navbar-brand">
						<img src="{{ asset('img/logo1.png') }}" class="image-fluid">
					</a>
					<div class="d-flex">
						<a class="a-header p-3" href="{{ route('Home.tentang_kami') }}">Tentang Kami</a>
						<a class="a-header p-3">Kategori</a>
						<a class="a-header p-3">Program</a>
						<a class="a-header p-3">FAQ</a>
						<div class="p-2">
							<button class="btn btn-success" style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 15px; color: #FFFFFF; background: #219F94; border-radius: 20px; padding: 10px; padding-right: 15px; padding-left: 15px; border: 0;">Hubungi Kami</button>
						</div>
					</div>
				</div>
			</nav>
			<!-- CONTENT -->
			<div class="row" align="center">
				<div class="container" style="padding-top: 155px;">
					<div class="row">
						<h1 class="m-text">Bangun peradaban dengan Wakaf Produktif</h1>
						<h1 class="m-text">Untuk kemaslahatan dan kesejahteraan umat</h1>
						<div class="col-2"></div>
						<div class="col-8">
							<p class="m-text-2">Berawakaf dengan menggunakan Wakafnyok, platform yang aman, transparan, dan tepercaya. dan memiliki 10+ tahun pengalaman</p>
							<div style="padding-top: 70px; padding-bottom: 240px;">
								<button class="b-mulai">Mulai Sekarang</button>								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="bg2" style="padding-top: 90px; padding-bottom: 75px;">
		<div class="container" style="padding-bottom: 75px;">
			<div class="row">
				<div class="col-12">
					<p class="title-tk">Tentang Kami</p>
				</div>
				<div class="col-5" align="left" style="padding-top: 30px;">
					<p class="text-berwakaf">Berwakaf kekalkan kebaikan Jariyah disaat Lapang maupun Sempit</p>
				</div>
				<div class="col-1"></div>
				<div class="col-6" align="left" style="padding-top: 30px;">
					<p class="text-platform">kami adalah platform wakaf yang aman, transparan, dan tepercaya dengan lebih dari 10+ tahun pengalaman. kami telah membantu orang di seluruh dunia untuk hidup dengan aman dan damai</p>
					<button class="b-lengkap">Selengkapnya</button>
				</div>
				<div class="col-12">
					<img src="{{ asset('img/video.png') }}" class="img-video">
				</div>
				<div class="col-4" style="padding-top: 90px;">
					<div class="container">
						<div class="card" style="background: #FFFFFF; box-shadow: 4px 14px 24px rgba(0, 0, 0, 0.14); border-radius: 20px; min-height: 420px;">
							<div class="container" style="padding: 30px;">
								<div class="rounded-circle" style="background: #219F94;width: 117px; height: 117px; vertical-align: middle;" align="center">
									<img src="{{ asset('img/mesjid.png') }}" style="background-size: 100% 100%; padding: 25px; padding-top: 30px">
								</div>
								<p class="t-kategori">Wakaf Dakwah</p>
								<p class="text-kategori">Berwakaf untuk mereka terkait dakwah</p>
							</div>						
						</div>
					</div>
				</div>
				<div class="col-4" style="padding-top: 90px;">
					<div class="container">
						<div class="card" style="background: #FFFFFF; box-shadow: 4px 14px 24px rgba(0, 0, 0, 0.14); border-radius: 20px; min-height: 420px;">
							<div class="container" style="padding: 25px;">
								<div class="rounded-circle" style="background: #219F94;width: 117px; height: 117px; vertical-align: middle;" align="center">
									<img src="{{ asset('img/sarjana.png') }}" style="background-size: 100% 100%; padding: 25px; padding-top: 40px">
								</div>
								<p class="t-kategori">Wakaf Pendidikan</p>
								<p class="text-kategori">Berwakaf pendedikan dengan persediaan terkait pembelajaran</p>
							</div>						
						</div>
					</div>
				</div>
				<div class="col-4" style="padding-top: 90px;">
					<div class="container">
						<div class="card" style="background: #FFFFFF; box-shadow: 4px 14px 24px rgba(0, 0, 0, 0.14); border-radius: 20px; min-height: 420px;">
							<div class="container" style="padding: 25px;">
								<div class="rounded-circle" style="background: #219F94;width: 117px; height: 117px; vertical-align: middle;" align="center">
									<img src="{{ asset('img/kesehatan.png') }}" style="background-size: 100% 100%; padding: 25px; padding-top: 30px">
								</div>
								<p class="t-kategori">Wakaf Kesehatan</p>
								<p class="text-kategori">Bantu mereka dengan pasokan obat-obatan untuk kebutuhan khusus yang mereka derita</p>
							</div>						
						</div>
					</div>
				</div>
				<div class="col-4" style="padding-top: 70px;">
					<div class="container">
						<div class="card" style="background: #FFFFFF; box-shadow: 4px 14px 24px rgba(0, 0, 0, 0.14); border-radius: 20px; min-height: 420px;">
							<div class="container" style="padding: 25px;">
								<div class="rounded-circle" style="background: #219F94;width: 117px; height: 117px; vertical-align: middle;" align="center">
									<img src="{{ asset('img/ekonomi.png') }}" style="background-size: 100% 100%; padding: 25px; padding-top: 40px">
								</div>
								<p class="t-kategori">Wakaf Ekonomi</p>
								<p class="text-kategori">Berwakaf terhadap mereka yang membutuhkan, atau dalam kesulitan dari segi ekonmi</p>
							</div>						
						</div>
					</div>
				</div>
				<div class="col-4" style="padding-top: 70px;">
					<div class="container">
						<div class="card" style="background: #FFFFFF; box-shadow: 4px 14px 24px rgba(0, 0, 0, 0.14); border-radius: 20px; min-height: 420px;">
							<div class="container" style="padding: 25px;">
								<div class="rounded-circle" style="background: #219F94;width: 117px; height: 117px; vertical-align: middle;" align="center">
									<img src="{{ asset('img/sosial.png') }}" style="background-size: 100% 100%; padding: 25px; padding-top: 40px">
								</div>
								<p class="t-kategori">Wakaf Sosial</p>
								<p class="text-kategori">Membantu mereka yang membutuhkan, atau dalam kesulitan</p>
							</div>						
						</div>
					</div>
				</div>
				<div class="col-4" style="padding-top: 70px;">
					<div class="container">
						<div class="card" style="background: #FFFFFF; box-shadow: 4px 14px 24px rgba(0, 0, 0, 0.14); border-radius: 20px; min-height: 420px;">
							<div class="container" style="padding: 25px;">
								<div class="rounded-circle" style="background: #219F94;width: 117px; height: 117px; vertical-align: middle;" align="center">
									<img src="{{ asset('img/kesehatan.png') }}" style="background-size: 100% 100%; padding: 25px; padding-top: 30px">
								</div>
								<p class="t-kategori">Wakaf Kesehatan</p>
								<p class="text-kategori">Bantu mereka dengan makanan atau kebutuhan untuk bertahan hidup</p>
							</div>						
						</div>
					</div>
				</div>
			</div>
		</div>
		<div style="background-color: #F5F5F5;">
			<div class="container" style="padding-top: 90px; padding-bottom: 90px;">
				<div class="row">
					<div class="col-4" align="left">
						<p class="p-dominasi">Program Semua Wakaf</p>
					</div>
					<div class="col-8" align="right">
						<div class="container">
							<div class="row">
								<div class="col-11" style="padding-right: 0;">
									<button style="border: 0; background-color: transparent;"><img src="{{ asset('img/arrow_left.png') }}"></button>
								</div>
								<div class="col-1">
									<button style="border: 0; background-color: transparent;"><img src="{{ asset('img/arrow_right.png') }}"></button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-4" style="padding-top: 90px;">
						<div class="card" style="background: #FFFFFF; border-radius: 20px; min-height: 520px;">
							<div class="form-group" style="padding: 5px;">
								<img src="{{ asset('img/wakaf.png') }}" class="img-fluid" style="padding: 5px; min-height: 262px;">
								<p class="t-psw">Wakaf peduli ulama di pedalaman</p>
								<p class="text-psw">Bencana di wilayah Jawa Tengah, Indonesia. Mereka membutuhkan makanan dan pakaia</p>
								<input type="range" name="" min="0" value="75" max="100" step="1" class="form-control" style="padding: 5px">
								<div class="row" align="center">
									<div class="col-8" align="left">
										<p class="text-target" style="padding-left: 5px;">Target : Rp500.000.000</p>
									</div>
									<div class="col-4" align="right">
										<p class="text-target" style="padding-right: 5px;">75%</p>
									</div>
								</div>
								<a href="{{ route('Wakaf.index',['title' => 'Wakaf peduli ulama di pedalaman', 'img' => 'wakaf', 'text' => 'Wakaf Peduli Ulama di Pedalaman', 'alamat' => 'DKI Jakarta']) }}">
									<div align="center" style="padding-bottom: 20px;">
										<button class="btn-wakaf">Wakaf Sekarang</button>
									</div>
								</a>
							</div>						
						</div>
					</div>

					<div class="col-4" style="padding-top: 90px;">
						<div class="card" style="background: #FFFFFF; border-radius: 20px; min-height: 520px;">
							<div class="form-group" style="padding: 5px;">
								<img src="{{ asset('img/wakaf_mesjid.png') }}" class="img-fluid" style="padding: 5px; min-height: 262px;">
								<p class="t-psw">Wakaf renovasi Masjid</p>
								<p class="text-psw">Bencana di wilayah Jawa Tengah, Indonesia. Mereka membutuhkan makanan dan pakaian</p>
								<input type="range" name="" min="0" value="75" max="100" step="1" class="form-control" style="padding: 5px">
								<div class="row" align="center">
									<div class="col-8" align="left">
										<p class="text-target" style="padding-left: 5px;">Target : Rp500.000.000</p>
									</div>
									<div class="col-4" align="right">
										<p class="text-target" style="padding-right: 5px;">75%</p>
									</div>
								</div>
								<a href="{{ route('Wakaf.index',['title' => 'Wakaf renovasi Masjid', 'img' => 'wakaf_mesjid', 'text' => 'Wakaf Renovasi Pembangunan Masjid', 'alamat' => 'Klender, Jakarta Timur']) }}">
									<div align="center" style="padding-bottom: 20px;">
										<button class="btn-wakaf">Wakaf Sekarang</button>
									</div>
								</a>
							</div>						
						</div>
					</div>

					<div class="col-4" style="padding-top: 90px;">
						<div class="card" style="background: #FFFFFF; border-radius: 20px; min-height: 520px;">
							<div class="form-group" style="padding: 5px;">
								<img src="{{ asset('img/wakaf_nasional.png') }}" class="img-fluid" style="padding: 5px; min-height: 262px;">
								<p class="t-psw">Gerakan Nasional Wakaf Uang</p>
								<p class="text-psw">Bencana di wilayah Jawa Tengah, Indonesia. Mereka membutuhkan makanan dan pakaia</p>
								<input type="range" name="" min="0" value="75" max="100" step="1" class="form-control" style="padding: 5px">
								<div class="row" align="center">
									<div class="col-8" align="left">
										<p class="text-target" style="padding-left: 5px;">Target : Rp500.000.000</p>
									</div>
									<div class="col-4" align="right">
										<p class="text-target" style="padding-right: 5px;">75%</p>
									</div>
								</div>
								<a href="{{ route('Wakaf.index',['title' => 'Gerakan Nasional Wakaf Uang', 'img' => 'wakaf_nasional', 'text' => 'Gerakan Nasional Wakaf Uang', 'alamat' => 'DKI Jakarta']) }}">
									<div align="center" style="padding-bottom: 20px;">
										<button class="btn-wakaf">Wakaf Sekarang</button>
									</div>
								</a>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container" style="padding-top: 100px; padding-bottom: 100px;">
			<div class="row">
				<div class="col-4" align="center">
					<p class="duaplus">20+</p>
					<p class="b-duaplus">Proyek</p>
				</div>
				<div class="col-4" align="center" style="border-width: 0px 1px 0px 1px; border-style: solid; border-color: #BCBCBC;">
					<p class="duaplus">2.390+</p>
					<p class="b-duaplus">Wakif</p>
				</div>
				<div class="col-4" align="left">
					<div class="container">
						<div class="row">
							<div class="col-4 p-0" align="right">
								<p class="rupiah">Rp</p>
							</div>
							<div class="col-8 p-0" align="left">
								<p class="duaplus">78M+</p>
							</div>
						</div>
					</div>
					<div align="center">
						<p class="b-duaplus">Wakaf</p>
					</div>
				</div>
			</div>
		</div>
		<div style="background-color: #219F94;">
			<div class="container" style="padding-top: 90px; padding-bottom: 90px;">
				<div class="row">
					<div class="col-6">
						<p class="wakaf_sukarela">Wakaf lebih banyak dengan bergabung sebagai Sukarelawan!</p>
						<div class="col-9">
							<p class="wakaf_koneksi">Tempat berbagi informasi, aktivitas , menjalin koneksi, dan dapatkan teman baru</p>
						</div>
						<div class="row" style="padding-top: 30px;">
							<div class="col-3" align="left">
								<button class="b-bergabung">
									Bergabung
								</button>
							</div>
							<div class="col-5" align="left">
								<button class="b-lihat">
									Lihat Aksi Kami
								</button>
							</div>
							<div class="col-4"></div>
						</div>
					</div>
					<div class="col-6">
						<img src="{{ asset('img/mobil.png') }}" class="img-fluid">
						<div class="row" style="padding-top: 5px;">
							<div class="col-4" style="padding: 5px; padding-left: 10px;">
								<img src="{{ asset('img/gambar1.png') }}" class="img-fluid">
							</div>
							<div class="col-4" style="padding: 5px">
								<img src="{{ asset('img/gambar2.png') }}" class="img-fluid">
							</div>
							<div class="col-4" style="padding: 5px; padding-right: 10px;">
								<img src="{{ asset('img/gambar3.png') }}" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container" style="padding-top: 75px;">
			<div class="row">
				<div class="col-5" align="left">
					<div class="col-5">
						<img src="{{ asset('img/logo1.png') }}" class="image-fluid">
					</div>
					<p class="f-bantu">Bantu orang lain dengan menggunakan Berbagi, sebuah platform yang aman, transparan, dan terpercaya.</p>
					<p class="f-bantu" style="font-weight: 600;">bantuan@wakafnyok.org.id</p>
					<p class="f-bantu" style="font-weight: 600;">021-82216602</p>
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
</html>