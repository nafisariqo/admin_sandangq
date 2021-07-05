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
        <link rel="stylesheet" href="{{ url('css/linearicons.css') }}">
        <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ url('css/nice-select.css') }}">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ url('css/main.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.18/sweetalert2.min.css">
    </head>
    <body>

        <!-- Start Header Area -->
        <header class="default-header">
            <div class="container">
                <div class="header-wrap">
                    <div class="header-top d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="#home" ><img src="img/logo.png" alt="" style="width:120px;height:50px align=left;"></a>
                        </div>
                        <div class="main-menubar d-flex align-items-center">
                            <nav class="hide">
                                <a href="#home">Home</a>
                                <a href="#project">Projects</a>
                                <a href="#about">About</a>
                                <a href="#donate">Donate</a>
                            </nav>
                            <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header Area -->

        <!-- start banner Area -->
        <section class="banner-area relative" id="home">
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
        </section>
        <!-- End banner Area -->

        <!-- Start callto Area -->
            <section class="callto-area relative">
                <div class="container">
                    <div class="row d-flex callto-wrap justify-content-between pt-40 pb-40">
                        <h3 class="text-white">Tracking Your Donation!</h3>
                        <a href="#" class="head-btn head-btn2 btn text-uppercase">Tracking Now</a>
                    </div>
                </div>
            </section>
        <!-- End callto Area -->


        <!-- Start project Area -->
        <section class="project-area section-gap" id="project">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8 pb-80 header-text">
                        <h1>Waiting for Help</h1>
                        <p>
                           Project dibawah ini memiliki batas waktu, ayo donasikan sandangmu!
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 project-wrap">
                        <div class="single-project">
                            <div class="content">
                                <a href="#" target="_blank">
                                  <div class="content-overlay"></div>
                                       <img class="content-image img-fluid d-block mx-auto" src="img/1.png" alt="">
                                      <div class="content-details fadeIn-bottom">
                                          <a href="{{ url('read') }}" class="head-btn btn text-uppercase">Donate Now!</a>
                                      </div>
                                </a>
                             </div>
                        </div>
                        <div class="details">
                            <a href="#"><h2>Gempa Bumi Majene</h2></a>
                              <p>Bencana tersebut merenggut harta dan keluarga</p>
                            
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-4 project-wrap">
                        <div class="single-project">
                            <div class="content">
                                <a href="#" target="_blank">
                                  <div class="content-overlay"></div>
                                       <img class="content-image img-fluid d-block mx-auto" src="img/2.png" alt="">
                                      <div class="content-details fadeIn-bottom">
                                          <a href="{{ url('read') }}" class="head-btn btn text-uppercase">Donate Now!</a>
                                      </div>
                                </a>
                             </div>
                        </div>
                        <div class="details">
                            <a href="#"><h2>Banjir Kalimantan selatan</h2></a>
                              <p>Banjir tersebut merenggut harta dan keluarga</p>
                        
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 project-wrap">
                        <div class="single-project">
                            <div class="content">
                                <a href="#" target="_blank">
                                  <div class="content-overlay"></div>
                                       <img class="content-image img-fluid d-block mx-auto" src="img/3.png" alt="">
                                      <div class="content-details fadeIn-bottom">
                                          <a href="{{ url('read') }}" class="head-btn btn text-uppercase">Donate Now!</a>
                                      </div>
                                </a>
                             </div>
                        </div>
                        <div class="details">
                            <a href="#"><h2>Angin Puting Beliung Demak</h2></a>
                              <p>Bencana tersebut merenggut harta dan keluarga</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End project Area -->

        <!-- Start about Area -->
        <section class="about-area" id="about">
            <div class="container-fluid">
                <div class="row d-flex justify-content-end align-items-center">
                    <div class="col-lg-6 col-md-12 about-left no-padding">
                        <img class="img-fluid" src="img/about-img.jpg" alt="">
                    </div>
                    <div class="col-lg-6 col-md-12 about-right">
                        <h1>Sandang Q</h1>
                        <p>
                            merupakan sebuat website donasi yang bertujuan untuk membantu mengurangi limbah textil di dunia.
                        </p>
                        {{-- <button class="primary-btn mt-20 text-uppercase ">learn more<span class="lnr lnr-arrow-right"></span></button> --}}
                    </div>
                </div>
            </div>
        </section>
        <!-- End about Area -->

        <!-- Start volunteer Area -->
        <section class="volunteer-area section-gap">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8 pb-80 header-text">
                        <h1>Our Volunteers</h1>
                        {{-- <p>
                            <br> labore  et dolore magna aliqua.
                        </p> --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 vol-wrap">
                        <div class="single-vol">
                            <div class="content">
                                {{-- <a href="#" target="_blank"> --}}
                                  <div class="content-overlay"></div>
                                       <img class="content-image img-fluid d-block mx-auto" src="img/v1.jpg" alt="">
                                      <div class="content-details fadeIn-bottom">
                                          <h4>Jungkook</h4>
                                          <p>
                                              CEO
                                          </p>
                                      </div>
                                </a>
                             </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 vol-wrap">
                        <div class="single-vol">
                            <div class="content">
                                {{-- <a href="#" target="_blank"> --}}
                                  <div class="content-overlay"></div>
                                       <img class="content-image img-fluid d-block mx-auto" src="img/v2.jpg" alt="">
                                      <div class="content-details fadeIn-bottom">
                                          <h4>Seokjin</h4>
                                          <p>
                                              CCO
                                          </p>
                                      </div>
                                </a>
                             </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 vol-wrap">
                        <div class="single-vol">
                            <div class="content">
                                {{-- <a href="#" target="_blank"> --}}
                                  <div class="content-overlay"></div>
                                       <img class="content-image img-fluid d-block mx-auto" src="img/v3.jpg" alt="">
                                      <div class="content-details fadeIn-bottom">
                                          <h4>RM</h4>
                                          <p>
                                              Donatur
                                          </p>
                                      </div>
                                </a>
                             </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 vol-wrap">
                        <div class="single-vol">
                            <div class="content">
                                {{-- <a href="#" target="_blank"> --}}
                                  <div class="content-overlay"></div>
                                       <img class="content-image img-fluid d-block mx-auto" src="img/v4.jpg" alt="">
                                      <div class="content-details fadeIn-bottom">
                                          <h4>Jimin</h4>
                                          <p>
                                              Donatur
                                          </p>
                                      </div>
                                </a>
                             </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End volunteer Area -->


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
                    <div class="col-lg-6 contact-left">
                        <div class="single-info">
                            <h4>Syarat dan Ketentuan</h4>
                            <p>
                                1. Masih sangat layak untuk dipakai atau digunakan (pakaian, selimut, dan lain-lain) <br>
                                2. Tidak robek/berlubang/bernoda<br>
                                3. Tidak menerima pakaian dalam<br>
                                4. Sebelumnya sandang tidak digunakan oleh orang yg memiliki penyakit menular
                                (karena baju layak pakai akan diberikan kepada pasien luar daerah tidak mampu yg
                                berada dirumah singgah peduli, khawatir akan beresiko)<br>
                                5. Berkenan sebelum dikirim sandang sudah dalam keadaan bersih (telah dicuci/loundry)<br>
                                6. jika sandang yang akan didonasikan tidak sesuai dengan syarat, maka pendonasi bersedia untuk membayar biaya retur
                            </p>
                            <h4>Ketentuan</h4>
                            <p>
                                1. Pendonasi melihat deskripsi donasi, Syarat dan Ketentuan <br>
                                2. Pendonasi memutuskan untuk berdonasi kemana dan menyiapkan sandang yang akan didonasikan<br>
                                3. Pendonasi mengirimkan sandang pada jasa ekspedisi terdekat dan menyimpan nomor resi untuk diunggah<br>
                                4. Pendonasi mengisi form donasi pada website SandangQ<br>
                                5. Histori donasi akan diupdate melalui website SandangQ<br>
                                6. Jika ada pertanyaan, pendonasi bisa menghubungi email kami
                        </div>
                    </div>
                    <div class="col-lg-6 contact-right">
                        <form action="{{route('d.s')}}" method="POST" class="booking-form" id="myForm" action="donate.php">
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-12 d-flex flex-column">
                                        <select name="news" id="news" class="app-select form-control" required>
                                           <option data-display="Project you want to donate">Project you want to donate</option>
                                           <option value="Banjir NTT">Banjir NTT</option>
                                           <option value="Panti Asuhan A">Panti Asuhan A</option>
                                           <option value="Panti Asuhan B">Panti Asuhan B</option>
                                       </select>
                                    </div>
                                    <div class="col-lg-6 d-flex flex-column">
                                       <input name="name" id="name" placeholder="Nama Lengkap" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="form-control mt-20" required="" type="text" required>
                                   </div>
                                   <div class="col-lg-6 d-flex flex-column">
                                       <input name="phone" id="phone" placeholder="Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Phone Number'" class="form-control mt-20" required="" type="number">
                                   </div>
                                   <div class="col-lg-12 d-flex flex-column">
                                       <textarea class="form-control mt-20" name="address" id="address" placeholder="Alamat" required=""></textarea>
                                       <input name="resi" id="resi" placeholder="No. Resi" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No. Resi'" class="form-control mt-20" required="" type="text">
                                   </div>
                                                                     
                                   <div class="col-lg-12 d-flex justify-content-end send-btn">
                                        {{-- <a href="" type="sibmit" class="head-btn head-btn2 btn text-uppercase">DONATE</a> --}}
                                       <button type="submit" id="btnsave" onclick="alert('data berhasil tersimpan!')" class="submit-btn primary-btn mt-20 text-uppercase">DONATE<span class="lnr lnr-arrow-right"></span></button>
                                   </div>
                        
                                   <div class="alert-msg"></div>
                               </div>
                         </form>
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
                        <li><a href="#home">Home</a></li>
                        <li><a href="#project">Projects</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#donate">Donate</a></li>
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

        {{-- <script>
            $('#btnsave').on('click',function() {
                console.log("btn click")
            })
        </script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.18/sweetalert2.min.js "></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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