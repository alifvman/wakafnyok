<style type="text/css">
	.bg1{
		background-image: url("{{ asset('img/bg.png') }}");
		width: 100%;
		height: auto;
		background-size: 100% auto;
		background-repeat: no-repeat;
	}

	.a-header{
		text-decoration: none;
		font-weight: 600;
		font-size: 15px;
		line-height: 30px;
		color: #219F94;
	}
	.b-header{
		font-weight: 500;
		font-size: 15px;
		line-height: 30px;
		/* identical to box height */


		color: #FFFFFF;
		background: #219F94;
		border-radius: 25px;
	}
</style>
<div class="bg1">
	<div class="container">
		<!-- HEADER -->
		<nav class="navbar navbar-light" style="padding-bottom: 25px; padding-top: 25px;">
			<!-- <div class="container-fluid"> -->
				<a class="navbar-brand" href="{{ route('Home.index') }}">
					<img src="{{ asset('img/logo1.png') }}" class="image-fluid">
				</a>
				<div class="d-flex">
					<a class="a-header p-3" href="">Tentang Kami</a>
					<a class="a-header p-3">Kategori</a>
					<a class="a-header p-3">Program</a>
					<a class="a-header p-3">FAQ</a>
					<div class="p-2">
						<button class="btn btn-success" style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 15px; color: #FFFFFF; background: #219F94; border-radius: 20px; padding: 10px; padding-right: 15px; padding-left: 15px; border: 0;">Hubungi Kami</button>
					</div>
				</div>
			<!-- </div> -->
		</nav>
	</div>
</div>