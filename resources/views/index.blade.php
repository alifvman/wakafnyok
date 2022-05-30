<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Badan Wakaf Indonesia | {{$page->title ?? 'Home'}}</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/logo.png') }}" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap/css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <script type="text/javascript" src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Poppins:900,800,700,600,500,400,300,200,100&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  	<!-- <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> -->
  	
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
									<button style="border: 0; background-color: transparent;" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev"><img src="{{ asset('img/arrow_left.png') }}"></a>
								</div>
								<div class="col-1">
									<button style="border: 0; background-color: transparent;" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next"><img src="{{ asset('img/arrow_right.png') }}"></a>
								</div>
							</div>
						</div>
					</div>


				    <div class="container">
				        <div class="row">
				            <div class="col-xs-12">
				            	<div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="2000" data-ride="carousel" data-pause="hover" data-wrap="true">
				                    <div class="carousel-inner">
				                        <div class="carousel-item active">
				                            <div class="row">
												<div class="col-4" style="padding-top: 90px;">
													<div class="card" style="background: #FFFFFF; border-radius: 20px; min-height: 520px;">
														<div class="form-group" style="padding: 5px;">
															<img src="{{ asset('img/wakaf.png') }}" class="img-fluid" style="padding: 5px; min-height: 262px;">
															<p class="t-psw">Wakaf peduli ulama di pedalaman</p>
															<p class="text-psw">Bencana di wilayah Jawa Tengah, Indonesia. Mereka membutuhkan makanan dan pakaia</p>
															<div class="container" style="padding: 0 5px 0 5px;">
																<div style="width: 100%; background-color: #C4C4C4; border-radius: 5px;">
																  	<div style="width: 75%; height: 10px; background-color: #219F94; border-radius: 5px;"></div>
																</div>
															</div>
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
															<div class="container" style="padding: 0 5px 0 5px;">
																<div style="width: 100%; background-color: #C4C4C4; border-radius: 5px;">
																  	<div style="width: 75%; height: 10px; background-color: #219F94; border-radius: 5px;"></div>
																</div>
															</div>
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
															<div class="container" style="padding: 0 5px 0 5px;">
																<div style="width: 100%; background-color: #C4C4C4; border-radius: 5px;">
																  	<div style="width: 75%; height: 10px; background-color: #219F94; border-radius: 5px;"></div>
																</div>
															</div>
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
				                        <div class="carousel-item">
				                            <div class="row">
												<div class="col-4" style="padding-top: 90px;">
													<div class="card" style="background: #FFFFFF; border-radius: 20px; min-height: 520px;">
														<div class="form-group" style="padding: 5px;">
															<img src="{{ asset('img/wakaf_mesjid.png') }}" class="img-fluid" style="padding: 5px; min-height: 262px;">
															<p class="t-psw">Wakaf renovasi Masjid</p>
															<p class="text-psw">Bencana di wilayah Jawa Tengah, Indonesia. Mereka membutuhkan makanan dan pakaian</p>
															<div class="container" style="padding: 0 5px 0 5px;">
																<div style="width: 100%; background-color: #C4C4C4; border-radius: 5px;">
																  	<div style="width: 75%; height: 10px; background-color: #219F94; border-radius: 5px;"></div>
																</div>
															</div>
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
															<div class="container" style="padding: 0 5px 0 5px;">
																<div style="width: 100%; background-color: #C4C4C4; border-radius: 5px;">
																  	<div style="width: 75%; height: 10px; background-color: #219F94; border-radius: 5px;"></div>
																</div>
															</div>
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

												<div class="col-4" style="padding-top: 90px;">
													<div class="card" style="background: #FFFFFF; border-radius: 20px; min-height: 520px;">
														<div class="form-group" style="padding: 5px;">
															<img src="{{ asset('img/wakaf.png') }}" class="img-fluid" style="padding: 5px; min-height: 262px;">
															<p class="t-psw">Wakaf peduli ulama di pedalaman</p>
															<p class="text-psw">Bencana di wilayah Jawa Tengah, Indonesia. Mereka membutuhkan makanan dan pakaia</p>
															<div class="container" style="padding: 0 5px 0 5px;">
																<div style="width: 100%; background-color: #C4C4C4; border-radius: 5px;">
																  	<div style="width: 75%; height: 10px; background-color: #219F94; border-radius: 5px;"></div>
																</div>
															</div>
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
				                            </div>
				                        </div>
				                        <div class="carousel-item">
				                            <div class="row">
												<div class="col-4" style="padding-top: 90px;">
													<div class="card" style="background: #FFFFFF; border-radius: 20px; min-height: 520px;">
														<div class="form-group" style="padding: 5px;">
															<img src="{{ asset('img/wakaf_nasional.png') }}" class="img-fluid" style="padding: 5px; min-height: 262px;">
															<p class="t-psw">Gerakan Nasional Wakaf Uang</p>
															<p class="text-psw">Bencana di wilayah Jawa Tengah, Indonesia. Mereka membutuhkan makanan dan pakaia</p>
															<div class="container" style="padding: 0 5px 0 5px;">
																<div style="width: 100%; background-color: #C4C4C4; border-radius: 5px;">
																  	<div style="width: 75%; height: 10px; background-color: #219F94; border-radius: 5px;"></div>
																</div>
															</div>
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

												<div class="col-4" style="padding-top: 90px;">
													<div class="card" style="background: #FFFFFF; border-radius: 20px; min-height: 520px;">
														<div class="form-group" style="padding: 5px;">
															<img src="{{ asset('img/wakaf.png') }}" class="img-fluid" style="padding: 5px; min-height: 262px;">
															<p class="t-psw">Wakaf peduli ulama di pedalaman</p>
															<p class="text-psw">Bencana di wilayah Jawa Tengah, Indonesia. Mereka membutuhkan makanan dan pakaia</p>
															<div class="container" style="padding: 0 5px 0 5px;">
																<div style="width: 100%; background-color: #C4C4C4; border-radius: 5px;">
																  	<div style="width: 75%; height: 10px; background-color: #219F94; border-radius: 5px;"></div>
																</div>
															</div>
															<!-- <div id="myProgress">
															  	<div id="myBar"></div>
															</div>
															#myProgress {
															  width: 100%;
															  background-color: grey;
															}

															#myBar {
															  width: 1%;
															  height: 30px;
															  background-color: green;
															} -->
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
															<div class="container" style="padding: 0 5px 0 5px;">
																<div style="width: 100%; background-color: #C4C4C4; border-radius: 5px;">
																  	<div style="width: 75%; height: 10px; background-color: #219F94; border-radius: 5px;"></div>
																</div>
															</div>
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
				                            </div>
				                        </div>
									</div>
								</div>
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
	<script type="text/javascript">
		$('.carousel-item', '.multi-item-carousel').each(function(){
			var next = $(this).next();
			if (! next.length) {
				next = $(this).siblings(':first');
			}
			next.children(':first-child').clone().appendTo($(this));
		}).each(function(){
			var prev = $(this).prev();
			if (! prev.length) {
				prev = $(this).siblings(':last');
			}
			prev.children(':nth-last-child(2)').clone().prependTo($(this));
		});
	</script>
</body>
</html>