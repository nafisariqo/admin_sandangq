<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="Colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>SandangQ</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="{{ url('css/linearicons.css') }}">=
        <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ url('css/nice-select.css') }}">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ url('css/main.css') }}">
    </head>
    <body>

        <!-- Start Header Area -->
        <header class="default-header">
            <div class="container">
                <div class="header-wrap">
                    <div class="header-top d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="{{ url('home') }}"><img src="img/logo.png" alt=""></a>
                        </div>
                        {{-- <div class="main-menubar d-flex align-items-center">
                            <nav class="hide">
                                <a href="index.html">Home</a>
                                <a href="index.html">Projects</a>
                                <a href="index.html">About</a>
                                <a href="index.html">Donate</a>
                            </nav>
                            <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header Area -->

        <!-- start banner Area -->
        <!-- <section class="banner-area relative" id="home">
            <div class="overlay overlay-bg"></div>
            <div class="container">
                    <div class="row fullscreen align-items-center justify-content-start" style="height: 915px;">
                        <div class="banner-content col-lg-9 col-md-12">
                            <h1>
                                Your Donation <br>
                                is Others Inspiration
                            </h1>
                            <a href="#donate" class="head-btn btn text-uppercase">Donate Now</a>
                        </div>
                    </div>
            </div>
        </section> -->
        <!-- End banner Area -->

        <!-- Start callto Area -->
            <!-- <section class="callto-area relative">
                <div class="container">
                    <div class="row d-flex callto-wrap justify-content-between pt-40 pb-40">
                        <h3 class="text-white">Please Help them and Donate now</h3>
                        <a href="#" class="head-btn head-btn2 btn text-uppercase">Donate Now</a>
                    </div>
                </div>
            </section> -->
        <!-- End callto Area -->


        {{-- <!-- Start project Area -->
        <section class="project-area section-gap" id="project">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8 pb-80 header-text">
                        <h1>Waiting for Help</h1>
                        <p>
                            this Sandang Project until October 30th<br><br>
                            HISTORY:
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 project-wrap">
                        <div class="single-project">
                            <div class="content">
                                <a href="#" target="_blank">
                                  <!-- <div class="content-overlay"></div> -->
                                       <img class="content-image img-fluid d-block mx-auto" src="img/1.jpg" alt="">
                                      <!-- <div class="content-details fadeIn-bottom">
                                          <a href="#" class="head-btn btn text-uppercase">Donate Now</a>
                                      </div> -->
                                </a>
                             </div>
                        </div>
                        <div class="details">
                            <a href="#"><h2>Dari: Anonim</h2></a>
                              <p>Status: Ekspedisi sedang menyortir</p>
                              <!-- <a class="text-uppercase" href="#">read more</a> -->
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-4 project-wrap">
                        <div class="single-project">
                            <div class="content">
                                <a href="#" target="_blank">
                                  <!-- <div class="content-overlay"></div> -->
                                       <img class="content-image img-fluid d-block mx-auto" src="img/1.jpg" alt="">
                                      <!-- <div class="content-details fadeIn-bottom">
                                          <a href="#" class="head-btn btn text-uppercase">Donate Now</a>
                                      </div>-->
                                </a>
                             </div>
                        </div>
                        <div class="details">
                            <a href="#"><h2>Dari: Jilan</h2></a>
                              <p>Status: Paket sampai di Cibinong</p>
                              <!-- <a class="text-uppercase" href="#">read more</a> -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 project-wrap">
                        <div class="single-project">
                            <div class="content">
                                <a href="#" target="_blank">
                                  <!-- <div class="content-overlay"></div> -->
                                       <img class="content-image img-fluid d-block mx-auto" src="img/1.jpg" alt="">
                                      <!-- <div class="content-details fadeIn-bottom">
                                          <a href="#" class="head-btn btn text-uppercase">Donate Now</a>
                                      </div> -->
                                </a>
                             </div>
                        </div>
                        <div class="details">
                            <a href="#"><h2>Dari: Diffa</h2></a>
                              <p>Status: Paket sampai di Depok</p>
                              <!-- <a class="text-uppercase" href="#">read more</a> -->
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End project Area --> --}}

        <!-- Start Konten Area -->
        <section class="about-area" id="about">
            <div class="container-fluid">
                @foreach ($item['konten'] as $k)
                <div class="row d-flex justify-content-end align-items-center">
                    <div class="col-lg-6 col-md-12 about-left no-padding">
                        <img class="img-fluid" src="{{ asset ('img/' . $k->gmbr) }}" alt="">
                    </div>
                    <div class="col-lg-6 col-md-12 about-right">
                        <h1>{{ $k->title}}</h1>
                        <p>{!! $k->description !!}</p>
                        <!-- <button href="" class="primary-btn mt-20 text-uppercase ">Donate Now<span class="lnr lnr-arrow-right"></span></button> -->
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <!-- End about Area -->

        <!-- Start volunteer Area -->
        <!-- <section class="volunteer-area section-gap">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8 pb-80 header-text">
                        <h1>Our Volunteers</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 vol-wrap">
                        <div class="single-vol">
                            <div class="content">
                                <a href="#" target="_blank">
                                  <div class="content-overlay"></div>
                                       <img class="content-image img-fluid d-block mx-auto" src="img/v1.jpg" alt="">
                                      <div class="content-details fadeIn-bottom">
                                          <h4>Andy Florence</h4>
                                          <p>
                                              inappropriate behavior
                                          </p>
                                      </div>
                                </a>
                             </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 vol-wrap">
                        <div class="single-vol">
                            <div class="content">
                                <a href="#" target="_blank">
                                  <div class="content-overlay"></div>
                                       <img class="content-image img-fluid d-block mx-auto" src="img/v2.jpg" alt="">
                                      <div class="content-details fadeIn-bottom">
                                          <h4>Andy Florence</h4>
                                          <p>
                                              inappropriate behavior
                                          </p>
                                      </div>
                                </a>
                             </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 vol-wrap">
                        <div class="single-vol">
                            <div class="content">
                                <a href="#" target="_blank">
                                  <div class="content-overlay"></div>
                                       <img class="content-image img-fluid d-block mx-auto" src="img/v3.jpg" alt="">
                                      <div class="content-details fadeIn-bottom">
                                          <h4>Andy Florence</h4>
                                          <p>
                                              inappropriate behavior
                                          </p>
                                      </div>
                                </a>
                             </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 vol-wrap">
                        <div class="single-vol">
                            <div class="content">
                                <a href="#" target="_blank">
                                  <div class="content-overlay"></div>
                                       <img class="content-image img-fluid d-block mx-auto" src="img/v4.jpg" alt="">
                                      <div class="content-details fadeIn-bottom">
                                          <h4>Andy Florence</h4>
                                          <p>
                                              inappropriate behavior
                                          </p>
                                      </div>
                                </a>
                             </div>
                        </div>
                    </div>

                </div>
            </div>
        </section> -->
        <!-- End volunteer Area -->
<br>

           <!-- Start donate Area -->
        <section class="donate-area relative section-gap" id="donate">
            <div class="overlay overlay-bg"></div>
            <div class="container">
                <div class="row d-flex justify-content-end">
                    <div class="col-lg-6 col-sm-12 pb-80 header-text">
                        <h1>Donate Your Sandang Now!</h1>
                        <p>
                           PENDONASI DIHARAP MEMBACA SYARAT DAN KETENTUAN SEBELUM BERDONASI!
                        </p>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    @foreach ($item['sk'] as $ks)
                    <div class="col-lg-6 contact-left">
                        <div class="single-info">
                            <h4>Syarat</h4>
                            {!! $ks->syarat !!}
                            <h4>Ketentuan</h4>
                            {!! $ks->ketentuan !!}
                        </div>
                    @endforeach
                    </div>
                    <div class="col-lg-6 contact-right">
                        @foreach ($item['konten'] as $k)
                        <form action="{{route('save-donasi')}}" method="POST" class="booking-form" id="myForm" action="donate.php">
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-12 d-flex flex-column">
                                        <input name="id_konten" id="id_konten" value="{{$k->title}}" onfocus="this.placeholder = ''" onblur="this.placeholder = ''" class="form-control mt-20" required="" type="text" readonly>
                                    </div>
                                    <div class="col-lg-6 d-flex flex-column">
                                       <input name="name" id="name" placeholder="Nama Lengkap" onfocus="this.placeholder = ''" onblur="this.placeholder = ''" class="form-control mt-20" required="" type="text" required>
                                   </div>
                                   <div class="col-lg-6 d-flex flex-column">
                                       <input name="phone" id="phone" placeholder="Nomor telepon" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Phone Number'" class="form-control mt-20" required="" type="number" required>
                                   </div>
                                   <div class="col-lg-12 d-flex flex-column">
                                       <textarea class="form-control mt-20" name="address" id="address" placeholder="Alamat" required=""></textarea>
                                       <input name="resi" id="resi" placeholder="No. Resi" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No. Resi'" class="form-control mt-20" required="" type="text" required>
                                   </div>
                                                                     
                                   <div class="col-lg-12 d-flex justify-content-end send-btn">
                                        {{-- <a href="" type="sibmit" class="head-btn head-btn2 btn text-uppercase">DONATE</a> --}}
                                       <button type="submit" id="btnsave" onclick="alert('data berhasil tersimpan!')" class="submit-btn primary-btn mt-20 text-uppercase">DONATE<span class="lnr lnr-arrow-right"></span></button>
                                   </div>
                        
                                   <div class="alert-msg"></div>
                               </div>
                         </form>
                         @endforeach
                          <!-- <p class="payment-method">
                              We Accept :   <img src="img/payment.png" alt="">
                          </p> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End donate Area -->


        <!-- start footer Area -->
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row d-flex flex-column justify-content-center">
                    <ul class="footer-menu">
                        <li><a href="{{ url('/') }}">Return to Home</a></li>
                        <!-- <li><a href="index.html">Projects</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="#donate">Donate</a></li> -->
                    </ul>
                    <div class="footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                    <p class="footer-text m-0">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">SandangQ</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </footer>
        <!-- End footer Area -->

        <script src="{{ url('js/vendor/jquery-2.2.4.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="{{ url('js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ url('js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ url('js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ url('js/jquery.sticky.js') }}"></script>
        <script src="{{ url('js/parallax.min.js') }}"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="{{ url('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ url('js/main.js') }}"></script>
    </body>
</html>
