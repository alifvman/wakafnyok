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
	  		.t-pilih{
	  			font-family: 'Poppins';
				font-style: normal;
				font-weight: 700;
				font-size: 35px;
				line-height: 52px;
				/* identical to box height */


				color: #333333
	  		}
	  		.b-nominal{
	  			border: 1px solid #BCBCBC;
				box-sizing: border-box;
				border-radius: 25px;
	  		}
	  		.n-nominal{
	  			font-family: 'Poppins';
				font-style: normal;
				font-weight: 500;
				font-size: 35px;
				line-height: 52px;
				/* identical to box height */

				color: #333333;
				padding-top: 15px;
	  		}
	  		.c-bank{
	  			border: 1px solid #BCBCBC;
				box-sizing: border-box;
				border-radius: 25px 25px 0px 0px;
	  		}
	  		.t-bank{
	  			font-family: 'Poppins';
				font-style: normal;
				font-weight: 600;
				font-size: 25px;
				line-height: 52px;
				/* identical to box height */

				padding-top: 15px;
				padding-left: 20px;
				color: #333333;
	  		}
	  		.b-jenis{
	  			border: 1px solid #BCBCBC;
				box-sizing: border-box;
	  		}
	  		.t-transfer{
	  			font-family: 'Poppins';
				font-style: normal;
				font-weight: 400;
				font-size: 25px;
				line-height: 38px;
				/* identical to box height */

				color: #4E4E4E;
				padding-top: 20px;
	  		}
	  		.c-total{
	  			background: #F5F5F5;
				border: 1px solid #BCBCBC;
				box-sizing: border-box;
				border-radius: 25px;
	  		}
	  		.t-rp{
	  			font-family: 'Poppins';
				font-style: normal;
				font-weight: 600;
				font-size: 25px;
				line-height: 52px;
				/* identical to box height */

				padding-top: 15px;
				color: #219F94;
	  		}
	  		.s-btn{
	  			font-family: 'Poppins';
				font-style: normal;
				font-weight: 600;
				font-size: 25px;
				line-height: 52px;
				/* identical to box height */

				text-align: center;

				color: #FFFFFF;
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
		<div class="bg2" style="padding-bottom: 50px;">
			<div class="container" style="padding-top: 70px;">
				<div class="row">
					<div class="col-7">
						<img src="{{ asset('img/wakaf.png') }}" class="img-fluid" style="width: 100%;">
					</div>
					<div class="col-5" align="left" style="padding-left: 75px;">
						<strong><p class="title-wakaf">Wakaf Peduli Ulama di Pedalaman</p></strong>
						<p class="text-map"><i class="fa fa-map-marker" aria-hidden="true"></i> Klender, Jakarta Timur</p>
						<hr style="color: #219F94;">
						<img src="{{ asset('img/logo1.png') }}" class="image-fluid">
					</div>
					<div class="col-12 form-group" align="center">
						<p class="t-nominal">Masukkan Nominal Wakaf</p>
						<input type="text" class="form-control" name="" style="border: 1px solid #BCBCBC; box-sizing: border-box; border-radius: 15px; height: 60px;" placeholder="Rp">
						<p class="t-minimumm">Mohon isi Rp 10.000 atau lebih</p>
					</div>
					<div class="col-12" align="center" style="padding-top: 25px;">
						<p class="t-pilih">Atau pilih Nominal Wakaf</p>
					</div>
					<div class="col-4" align="center">
						<div class="container b-nominal">
							<p class="n-nominal">10.000</p>
						</div>
					</div>
					<div class="col-4" align="center">
						<div class="container b-nominal">
							<p class="n-nominal">20.000</p>
						</div>
					</div>
					<div class="col-4" align="center">
						<div class="container b-nominal">
							<p class="n-nominal">50.000</p>
						</div>
					</div>
					<div class="col-4" align="center" style="padding-top: 20px;">
						<div class="container b-nominal">
							<p class="n-nominal">100.000</p>
						</div>
					</div>
					<div class="col-4" align="center" style="padding-top: 20px;">
						<div class="container b-nominal">
							<p class="n-nominal">200.000</p>
						</div>
					</div>
					<div class="col-4" align="center" style="padding-top: 20px;">
						<div class="container b-nominal">
							<p class="n-nominal">500.000</p>
						</div>
					</div>
					<div class="col-12" align="center" style="padding-top: 50px;">
						<p class="t-pilih">Metode Pembayaran</p>
					</div>
					<div class="col-12 c-bank">
						<p class="t-bank">Bank Transfer dan Virtual Account</p>
					</div>
					<div class="col-12 b-jenis">
						<div class="row">
							<div class="col-2">
								<img src="{{ asset('img/bca.png') }}" class="img-fluid" style="padding: 20px;">
							</div>
							<div class="col-9">
								<p class="t-transfer">Bank Central Asia</p>
							</div>
							<div class="col-1">
								
							</div>
						</div>
					</div>
					<div class="col-12 b-jenis">
						<div class="row">
							<div class="col-2">
								<img src="{{ asset('img/bni.png') }}" class="img-fluid" style="padding: 20px;">
							</div>
							<div class="col-9">
								<p class="t-transfer">Bank Nasional Indonesia</p>
							</div>
							<div class="col-1">
								
							</div>
						</div>
					</div>
					<div class="col-12 b-jenis">
						<div class="row">
							<div class="col-2">
								<img src="{{ asset('img/mandiri.png') }}" class="img-fluid" style="padding: 20px;">
							</div>
							<div class="col-9">
								<p class="t-transfer">Bank Mandiri</p>
							</div>
							<div class="col-1">
								
							</div>
						</div>
					</div>
					<div class="col-12 b-jenis">
						<div class="row">
							<div class="col-2">
								<img src="{{ asset('img/bsi.png') }}" class="img-fluid" style="padding: 20px;">
							</div>
							<div class="col-9">
								<p class="t-transfer">Bank Syariah Indonesia</p>
							</div>
							<div class="col-1">
								
							</div>
						</div>
					</div>
					<div class="col-12 b-jenis">
						<div class="row">
							<div class="col-2">
								<img src="{{ asset('img/bri.png') }}" class="img-fluid" style="padding: 20px;">
							</div>
							<div class="col-9">
								<p class="t-transfer">Bank Rakyat Indonesia</p>
							</div>
							<div class="col-1">
								
							</div>
						</div>
					</div>
					<div class="col-12 b-jenis">
						<p class="t-bank">E-Wallet</p>
					</div>
					<div class="col-12 b-jenis">
						<div class="row">
							<div class="col-2">
								<img src="{{ asset('img/gopay.png') }}" class="img-fluid" style="padding-left: 20px;max-width: 70%;padding-top: 5px;">
							</div>
							<div class="col-9">
								<p class="t-transfer">Gopay</p>
							</div>
							<div class="col-1">
								
							</div>
						</div>
					</div>
					<div class="col-12" style="border: 1px solid #BCBCBC; box-sizing: border-box; border-radius: 0px 0px 25px 25px;">
						<div class="row">
							<div class="col-2">
								<img src="{{ asset('img/shope.png') }}" class="img-fluid" style="padding-top: 5px;padding-left: 20px;max-width: 80%;">
							</div>
							<div class="col-9">
								<p class="t-transfer">Shoope Pay</p>
							</div>
							<div class="col-1">
								
							</div>
						</div>
					</div>
					<div class="col-12" align="center" style="padding-top: 75px;">
						<p class="t-pilih">Profil Wakif</p>
					</div>
					<div class="col-12 form-group" style="padding-top: 10px;">
						<input type="text" name="" placeholder="Nama Lengkap" class="form-control">
					</div>
					<div class="col-12 form-group" style="padding-top: 10px;">
						<input type="text" name="" placeholder="Alamat Email" class="form-control">
					</div>
					<div class="col-12 form-group" style="padding-top: 10px;" align="center">
						<input type="text" name="" placeholder="Nomor Telpon" class="form-control">
						<p class="t-minimumm">Mohon diisi</p>
					</div>
					<div class="col-1"></div>
					<div class="col-11">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
							<label class="form-check-label" for="flexCheckDefault">
								Tampilkan sebagai wakif anonim
							</label>
						</div>
					</div>
					<div class="col-12 form-group" align="center" style="padding-top: 75px;">
						<p class="t-pilih">Dukungan atau Doamu (Optional)</p>
						<textarea class="form-control" style="min-height: 150px; background: transparent;"></textarea>
					</div>
					<div class="col-12" align="center" style="padding-top: 35px;">
						<div class="card c-total">
							<div class="container">
								<div class="row">
									<div class="col-3" align="left">
										<p class="t-bank">Total</p>
									</div>
									<div class="col-9" align="right">
										<p class="t-rp">Rp</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="d-grid gap-2" style="padding-top: 25px; padding-bottom: 50px;">
						<button class="btn btn-primary s-btn" type="button" style="background: #219F94; border-radius: 20px; max-height: 70px;">Lanjutkan Pembayaran</button>
					</div>
				</div>
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
</html>