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
	  		.metode{
	  			width: 50%;
	  			height: 40%;
	  			padding-top: 0px;
	  			margin-top: 20px;
	  		}
	  		.input-radio{
				display: inline-block;
				margin-right: 10px;
	  			border: 1px solid #BCBCBC;
				border-radius: 25px;
				width: 100%;
			}
			input[type=radio] {
			    display: none;
			}
				input[type=radio] + label {
				padding: 20px;
				border-radius: 40px;
				border: 1px solid #ddd;
				border-radius: 25px;
				width: 100%;

			}
				input[type=radio] + label:hover {
				border: 1px solid red;
			}
				input[type=radio]:checked + label {
				border: 1px solid red;
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
	        	<form class="form-horizontal" name="my-form" id="my-form" action="{{ route('Wakaf.payment') }}" method="post">
                    @csrf
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
							<input type="text" class="form-control" name="nominal" id="rupiah" style="border: 1px solid #BCBCBC; box-sizing: border-box; border-radius: 15px; height: 60px;" placeholder="Rp">
							<p class="t-minimumm">Mohon isi Rp 10.000 atau lebih</p>
						</div>
						<div class="col-12" align="center" style="padding-top: 25px;">
							<p class="t-pilih">Atau pilih Nominal Wakaf</p>
						</div>
						<div class="col-4" align="center">
							<div class="input-radio">
								<input type="radio" id="10000" name="nominal" value="10000"> 
								<label for="10000" class="n-nominal">10.000</label>
							</div>
						</div>
						<div class="col-4" align="center">
							<div class="input-radio">
								<input type="radio" id="20000" name="nominal" value="20000"> 
								<label for="20000" class="n-nominal">20.000</label>
							</div>
						</div>
						<div class="col-4" align="center">
							<div class="input-radio">
								<input type="radio" id="50000" name="nominal" value="50000"> 
								<label for="50000" class="n-nominal">50.000</label>
							</div>
						</div>
						<div class="col-4" align="center" style="padding-top: 20px;">
							<div class="input-radio">
								<input type="radio" id="100000" name="nominal" value="100000"> 
								<label for="100000" class="n-nominal">100.000</label>
							</div>
						</div>
						<div class="col-4" align="center" style="padding-top: 20px;">
							<div class="input-radio">
								<input type="radio" id="200000" name="nominal" value="200000"> 
								<label for="200000" class="n-nominal">200.000</label>
							</div>
						</div>
						<div class="col-4" align="center" style="padding-top: 20px;">
							<div class="input-radio">
								<input type="radio" id="500000" name="nominal" value="500000"> 
								<label for="500000" class="n-nominal">500.000</label>
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
								<div class="col-1 form-check">
									<input class="form-check-input metode" type="radio" name="metode" id="metode1" value="bca">
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
								<div class="col-1 form-check">
									<input class="form-check-input metode" type="radio" name="metode" id="metode1" value="bni">
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
								<div class="col-1 form-check">
									<input class="form-check-input metode" type="radio" name="metode" id="metode1" value="mandiri">
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
								<div class="col-1 form-check">
									<input class="form-check-input metode" type="radio" name="metode" id="metode1" value="bsi">
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
								<div class="col-1 form-check">
									<input class="form-check-input metode" type="radio" name="metode" id="metode1" value="bri">
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
								<div class="col-1 form-check">
									<input class="form-check-input metode" type="radio" name="metode" id="metode1" value="gopay">
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
								<div class="col-1 form-check">
									<input class="form-check-input metode" type="radio" name="metode" id="metode1" value="shope">
								</div>
							</div>
						</div>
						<div class="col-12" align="center" style="padding-top: 75px;">
							<p class="t-pilih">Profil Wakif</p>
						</div>
						<div class="col-12 form-group" style="padding-top: 25px;">
							<input type="text" id="nama" name="nama" placeholder="Nama Lengkap" class="form-control" style="font-size: 35px!important; ">
						</div>
						<div class="col-12 form-group" style="padding-top: 25px;">
							<input type="email" id="email" name="email" placeholder="Alamat Email" class="form-control" style="font-size: 35px!important; ">
						</div>
						<div class="col-12 form-group" style="padding-top: 25px;" align="center">
							<input type="number" id="no_hp" name="no_hp" placeholder="Nomor Telpon" class="form-control" style="font-size: 35px!important; ">
							<p class="t-minimumm" id="text">Mohon diisi</p>
						</div>
						<div class="col-11" style="padding-left: 50px;">
							<div class="form-check" id="checks">
    							<input name="checkin" type="checkbox" class="oneChecked badCheckbox" style="width: 25px; height: 25px; border-radius: 10%!important;" />
								<label class="form-check-label" for="checkin" style="font-size: 25px; padding-left: 10px;">
									Tampilkan sebagai wakif anonim
								</label>
							</div>
						</div>
						<div class="col-12 form-group" align="center" style="padding-top: 75px;">
							<p class="t-pilih">Dukungan atau Doamu (Optional)</p>
							<textarea name="doa" class="form-control" style="min-height: 150px; background: transparent;"></textarea>
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
							<button class="btn btn-primary s-btn" type="submit" style="background: #219F94; border-radius: 20px; max-height: 70px;">Lanjutkan Pembayaran</button>
						</div>
					</div>
					
				</form>
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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<script type="text/javascript">
			var rupiah = document.getElementById("rupiah");
			rupiah.addEventListener("keyup", function(e) {
				// tambahkan 'Rp.' pada saat form di ketik
				// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
				rupiah.value = formatRupiah(this.value, "Rp. ");
			});

			/* Fungsi formatRupiah */
			function formatRupiah(angka, prefix) {
				var number_string = angka.replace(/[^,\d]/g, "").toString(),
				    split = number_string.split(","),
				    sisa = split[0].length % 3,
				    rupiah = split[0].substr(0, sisa),
				    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

				// tambahkan titik jika yang di input sudah menjadi angka ribuan
				if (ribuan) {
				    separator = sisa ? "." : "";
				    rupiah += separator + ribuan.join(".");
			  	}

			  	rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
			  	return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
			}
			$('#checks').on('change', 'input[name="checkin"]', function (){

			    if( $(this).is(':checked') ){
			        $('#checks .oneChecked:checked').prop('checked', false);
			        $(this).prop('checked', true);
			    } else {
			        $('#checks .oneChecked:checked').prop('checked', false);
			        $(this).prop('checked', false);
			    }

			    if( $('#checks .badCheckbox:checked').is(':checked') ){
			        $('#nama').hide();
			        $('#email').hide();
			        $('#no_hp').hide();
			        $('#text').hide();
			    } else {
			        $('#nama').show();
			        $('#email').show();
			        $('#no_hp').show();
			        $('#text').show();
			    }
			    
			});
		</script>
	</body>
</html>