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
                            <a href="/home" ><img src="img/logo.png" alt="" style="width:120px;height:50px align=left;"></a>
                        </div>
                        <div class="main-menubar d-flex align-items-center">
                            <nav class="hide">
                                <a href="home">Home</a>
                                <a href="#project">Projects</a>
                                <a href="#about">About</a>
                                <a href="#donate">Donate</a>
                                <a href="user.history">History</a>
                            </nav>
                            <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header Area -->

       <!-- Start History Area -->
       <section class="project-area section-gap" id="project">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 pb-80 header-text">
                    <h1>History Project</h1>
                    <p>
                       Berikut ini merupakan transparasi project yang donasinya sudah kami antarkan!
                    </p>
                </div>
            </div>
            <div class="row">
                {{-- @foreach ($khome['konten'] as $k) --}}
                <div class="col-lg-4 col-md-4 project-wrap" style="margin-bottom: 50px">
                    <div class="single-project">
                        <div class="content">
                              {{-- <img class="content-image img-fluid d-block mx-auto" src="{{ asset ('img/' . $k->gmbr) }}" alt=""> --}}
                              <img class="content-image img-fluid d-block mx-auto" src="img/1.jpg" alt="">
                         </div>
                    </div>
                    <div class="details">
                        {{-- <a href="#"><h2>{{ $k->title}}</h2></a> --}}
                    <h2>penjelasan</h2>
                    </div>
                </div>
                {{-- @endforeach --}}
            </div>
        </div>
    </section>
    <!-- End History Area -->


        <!-- start footer Area -->
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row d-flex flex-column justify-content-center">
                    <ul class="footer-menu">
                        <li><a href="home">Home</a></li>
                        <li><a href="#project">Projects</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#donate">Donate</a></li>
                        <li><a href="history">History</a></li>
                    </ul>
                    <div class="footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
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