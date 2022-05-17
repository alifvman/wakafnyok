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
			padding: 40px;
  		}
  		.button_down{
  			background-color: transparent;
  			border: none;
  			text-align: right;
  			padding-right: 50px;
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
						<div class="row">
							<div class="col-8" align="left">
								<label class="metode_bayar">{{ $metode_bayar1 }}</label>
							</div>
							<button class="col-4 button_down" id="metode_bayar1">
								v
							</button>
							<div id="show1" class="col-12">
								test
							</div>
    						<div style="clear:both;"> </div>
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
		$('document').ready(function() {
		    $('#metode_bayar1').click(function() {
		        $('#show1').slideToggle();
		        
		        $('html, body').animate({
			      	scrollTop: $("#show1").offset().down + $('window').height()
			    }, 2000);
		    });
		});
	</script>

@endsection