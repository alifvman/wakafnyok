@extends('layouts.app')
@section('content')

    <style type="text/css">
     
    .multi-item-carousel {
      overflow: hidden;
    }
    .multi-item-carousel .carousel-indicators {
      margin-right: 25%;
      margin-left: 25%;
    }
    .multi-item-carousel .carousel-control-prev,
    .multi-item-carousel .carousel-control-next {
      background: rgba(255, 255, 255, 0.3);
      width: 25%;
      z-index: 11; /* .carousel-caption has z-index 10 */
    }
    .multi-item-carousel .carousel-inner {
      width: 150%;
      left: -25%;
    }
    .multi-item-carousel .carousel-item-next:not(.carousel-item-left),
    .multi-item-carousel .carousel-item-right.active {
      -webkit-transform: translate3d(33%, 0, 0);
      transform: translate3d(33%, 0, 0);
    }
    .multi-item-carousel .carousel-item-prev:not(.carousel-item-right),
    .multi-item-carousel .carousel-item-left.active {
      -webkit-transform: translate3d(-33%, 0, 0);
      transform: translate3d(-33%, 0, 0);
    }
    .multi-item-carousel .item__third {
      float: left;
      position: relative;
      width: 33.33333333%;
    }
    </style>

    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap/css/bootstrap-theme.min.css') }}">
    <script type="text/javascript" src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Poppins:900,800,700,600,500,400,300,200,100&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <!-- Top content -->

            
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


@endsection
@section('script')

	<script type="text/javascript">
        /*
    Carousel
*/
$('#carousel-example').on('slide.bs.carousel', function (e) {
    /*
        CC 2.0 License Iatek LLC 2018 - Attribution required
    */
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 5;
    var totalItems = $('.carousel-item').length;
 
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});
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

@endsection