@extends('layouts.app')
@section('content')

	<style type="text/css">
		
  		.bg2{
  			background-image: url("{{ asset('img/bg2.png') }}");
  			width: 100%;
  			height: auto;
  			background-size: auto 100%;
  			background-repeat: no-repeat;
  		}
  		.pembayaran{
  			font-weight: 500;
			font-size: 35px;
			text-align: center;
			letter-spacing: 0.03em;

			color: #4E4E4E;
			padding-top: 50px;
  		}
  		.metode{
  			margin-top: 10px;
  			border: 1px solid #219F94;
  			border-radius: 8px 8px 0px 0px;
  			background: #FFFFFF;
  		}
  		.bank{
  			padding: 25px;
			font-weight: 500;
			font-size: 25px;
			line-height: 38px;
			/* identical to box height */


			color: #4E4E4E;
  		}
  		.label{
  			font-weight: 500;
			font-size: 25px;
			line-height: 38px;
			/* identical to box height */


			color: #4E4E4E;
  		}
  		.isi{
  			font-weight: 600;
			font-size: 25px;
			line-height: 38px;
			/* identical to box height */


			color: #4E4E4E;
  		}
  		.tf_sebelum{
  			font-weight: 400;
			font-size: 22px;
			line-height: 33px;
			text-align: center;

			color: #4E4E4E;
  		}
  		.cr_pembayaran{
  			font-weight: 700;
			font-size: 35px;
			line-height: 48px;
			/* identical to box height */

			text-align: center;
			letter-spacing: 0.03em;

			color: #4E4E4E;
  		}
  		.metode_bayar{
  			font-weight: 500;
			font-size: 25px;
			line-height: 38px;
			/* identical to box height */


			color: #4E4E4E;
  		}
  		.sel, .sel2, .sel3{
			color: #4E4E4E;
		    min-height: 40px;
		    box-sizing: border-box;
		    overflow: hidden;
		    text-align: left;
		    border: 1px solid #219F94;
			border-radius: 8px 8px 0px 0px;
		}
		.txt, .txt2, .txt3{
		    padding: 20px;
		    padding-left: 40px;
		    padding-right: 40px;
		}
		.hide, .hide2, .hide3{
		    display: none;
		}
		.sel, .sel2, .sel3, .options, .options2, .options3 div {
		    transition: all 0.2s ease-out;
		    padding: 20px;
		    padding-left: 40px;
		    padding-right: 40px;
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
	</style>

	<div class="bg2" style="padding-bottom: 50px;" align="center">
		<label class="pembayaran">Pembayaran</label>
		<div class="col-8" style="padding-top: 50px;">
			<div class="container">
				<div class="card" style="background: #FFFFFF; box-shadow: 4px 14px 24px rgba(0, 0, 0, 0.1); border-radius: 8px;">
					<div class="card metode">
						<div class="container">
							<div class="row">
								<div class="col-6" align="left">
									<img src="{{ asset('img/'.$metode.'.png') }}" class="img-fluid bank">
								</div>
								<div class="col-6" align="right">
									<label class="bank">{{ $virtual_akun }}</label>
								</div>
							</div>
						</div>
					</div>
					<div class="container" style="padding: 40px;">
						<div class="row">
							<div class="col-6" style="padding-top: 10px;" align="left">
								<label class="label">No. Virtual Account</label>
							</div>
							<div class="col-6" style="padding-top: 10px;" align="right">
								<label class="isi">{{ $rand_va }}</label>
							</div>
							<div class="col-6" style="padding-top: 10px;" align="left">
								<label class="label">ID Transaksi</label>
							</div>
							<div class="col-6" style="padding-top: 10px;" align="right">
								<label class="isi">{{ $rand_idtran }}</label>
							</div>
							<div class="col-6" style="padding-top: 10px;" align="left">
								<label class="label">Tanggal Transaksi</label>
							</div>
							<div class="col-6" style="padding-top: 10px;" align="right">
								<label class="isi">{{ $tgl }}</label>
							</div>
							<div class="col-6" style="padding-top: 10px;" align="left">
								<label class="label">Wakaf Nominal</label>
							</div>
							<div class="col-6" style="padding-top: 10px;" align="right">
								<label class="isi">{{ $nominal }}</label>
							</div>
							<div class="col-6" style="padding-top: 10px;" align="left">
								<label class="label">Admin</label>
							</div>
							<div class="col-6" style="padding-top: 10px;" align="right">
								<label class="isi">{{ $admin }}</label>
							</div>
							<div class="col-6" style="padding-top: 10px;" align="left">
								<label class="label">Total</label>
							</div>
							<div class="col-6" style="padding-top: 10px;" align="right">
								<label class="isi">{{ $total }}</label>
							</div>
						</div>
					</div>						
				</div>
			</div>
		</div>
		<div class="col-8" style="padding-top: 50px;">
			<label class="tf_sebelum">Transfer sebelum {{ $tglakhir }} WIB</label>
			<label class="tf_sebelum">atau wakaf kamu dibatalkan secara otomatis oleh sistem</label>
		</div>
		<div class="col-8" style="padding-top: 80px;">
			<label class="cr_pembayaran">Cara Pembayaran</label>
		</div>
		<div class="col-8" style="padding-top: 50px;">
			<div class="container">
				<div class="card" style="background: #FFFFFF; box-shadow: 4px 14px 24px rgba(0, 0, 0, 0.1); border-radius: 8px;">
					<div class="container">
						<div class="row sel">
							<div class='txt'>
								<label class="metode_bayar">{{ $metode_bayar1 }}</label>
							</div>
						</div>
					    <div class="options hide" align="left">
					    	@foreach($isi_metode1 as $isi1)
					        	<div> {{ $loop->iteration.'. '.$isi1 }}</div>
				        	@endforeach
					    </div>
						<div class="row sel2" style="border-radius: 0;">
							<div class='txt2'>
								<label class="metode_bayar">{{ $metode_bayar2 }}</label>
							</div>
						</div>
					    <div class="options2 hide2" align="left">
					    	@foreach($isi_metode2 as $isi2)
					        	<div> {{ $loop->iteration.'. '.$isi2 }}</div>
				        	@endforeach
				        	tes
					    </div>
						<div class="row sel3" style="border-radius: 0px 0px 8px 8px;">
							<div class='txt3'>
								<label class="metode_bayar">{{ $metode_bayar3 }}</label>
							</div>
						</div>
					    <div class="options3 hide3" align="left">
					    	@foreach($isi_metode3 as $isi3)
					        	<div> {{ $loop->iteration.'. '.$isi3 }}</div>
				        	@endforeach
				        	tes
					    </div>
					</div>
				</div>
			</div>
		</div>
		<div class="d-grid gap-2 col-8" style="padding-top: 75px; padding-bottom: 75px;">
			<button class="btn btn-primary s-btn" type="submit" style="background: #219F94; border-radius: 20px; padding-top: 20px; padding-bottom: 20px; margin-right: 15px; margin-left: 15px;">Konfirmasi Pembayaran</button>
		</div>
		<div style="background-color: #F5F5F5;">
			<div class="container" style="padding-top: 90px; padding-bottom: 90px;">
				<div class="row">
					<div class="col-4" align="left">
						<p class="p-dominasi">Terus Berwakaf</p>
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
	</div>

@endsection
@section('script')

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
	<script type="text/javascript">
		var sel = $('.sel'),
		    txt = $('.txt'),
		    options = $('.options');

		sel.click(function (e) {
		    e.stopPropagation();
		    options.show();
		});

		$('body').click(function (e) {
		    options.hide();
		});

		options.children('div').click(function (e) {
		    e.stopPropagation();
		    txt.text($(this).text());
		    $(this).addClass('selected').siblings('div').removeClass('selected');
		    options.hide();
		});

		var sel2 = $('.sel2'),
		    txt2 = $('.txt2'),
		    options2 = $('.options2');

		sel2.click(function (e) {
		    e.stopPropagation();
		    options2.show();
		});

		$('body').click(function (e) {
		    options2.hide();
		});

		options2.children('div').click(function (e) {
		    e.stopPropagation();
		    txt2.text($(this).text());
		    $(this).addClass('selected2').siblings('div').removeClass('selected2');
		    options2.hide();
		});

		var sel3 = $('.sel3'),
		    txt3 = $('.txt3'),
		    options3 = $('.options3');

		sel3.click(function (e) {
		    e.stopPropagation();
		    options3.show();
		});

		$('body').click(function (e) {
		    options3.hide();
		});

		options3.children('div').click(function (e) {
		    e.stopPropagation();
		    txt3.text($(this).text());
		    $(this).addClass('selected3').siblings('div').removeClass('selected3');
		    options3.hide();
		});
	</script>

@endsection