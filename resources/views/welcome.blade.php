<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Warkop 96</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('landing/img/core-img/favicon.ico')}}">

    <!-- Core Stylesheet -->
    <link href="{{asset('landing/style.css')}}" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="{{asset('landing/css/responsive/responsive.css')}}" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="caviar-load"></div>
        <div class="preload-icons">
            <img class="preload-1" src="{{asset('landing/img/core-img/preload-1.png')}}" alt="">
            <img class="preload-2" src="{{asset('landing/img/core-img/preload-2.png')}}" alt="">
            <img class="preload-3" src="{{asset('landing/img/core-img/preload-3.png')}}" alt="">
        </div>
    </div>
    
    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg align-items-center">
                        <a class="navbar-brand" href="">Warkop 96</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#caviarNav" aria-controls="caviarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <div class="collapse navbar-collapse" id="caviarNav">
                            <ul class="navbar-nav ml-auto" id="caviarMenu">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#menu">Menu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#testimonial">Testimonials</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact</a>
                                </li>
                                @auth
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('dashboard') }}"><i class="fa-solid fa-user"></i></a>
                                </li>
                                @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}"><i class="fa-solid fa-user"></i></a>
                                </li>
                                @endauth
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ****** Welcome Area Start ****** -->
    <section class="caviar-hero-area" id="home">
        <!-- Welcome Social Info -->
        <div class="welcome-social-info">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div>
        <!-- Welcome Slides -->
        <div class="caviar-hero-slides owl-carousel">
            <!-- Single Slides -->
            <div class="single-hero-slides bg-img" style="background-image: url{{'(landing/img/bg-img/hero-1.jpg)'}};">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-11 col-md-6 col-lg-4">
                            <div class="hero-content">
                                <h2>Warkop 96</h2>
                                <p>Makan enak dan kekinian ala @warkop.96 dengan konsep harga makanan ala warung tetapi penyajian ala cafe. Nikmati kelezatan spesial dengan harga terjangkau!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Nav -->
                <div class="hero-slides-nav bg-img" style="background-image: url{{'(landing/img/bg-img/hero-2.jpg)'}};"></div>
            </div>
            <!-- Single Slides -->
            <div class="single-hero-slides bg-img" style="background-image: url{{'(landing/img/bg-img/hero-2.jpg)'}};">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-11 col-md-6 col-lg-4">
                            <div class="hero-content">
                                <h2>Warkop 96</h2>
                                <p>Makan enak dan kekinian ala @warkop.96 dengan konsep harga makanan ala warung tetapi penyajian ala cafe. Nikmati kelezatan spesial dengan harga terjangkau!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Nav -->
                <div class="hero-slides-nav bg-img" style="background-image: url{{'(landing/img/bg-img/hero-1.jpg)'}};"></div>
            </div>
        </div>
    </section>
    <!-- ****** Welcome Area End ****** -->

    <!-- ****** About Us Area Start ****** -->
    <section class="caviar-about-us-area section-padding-150" id="about">
        <div class="container">
            <!-- About Us Single Area -->
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="about-us-thumbnail wow fadeInUp" data-wow-delay="0.5s">
                        <img src="{{('landing/img/bg-img/frontview.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 ml-md-auto">
                    <div class="section-heading">
                        <h2>About Us</h2>
                    </div>
                    <div class="about-us-content">
                        <span>Our History</span>
                        <p style="text-align: justify">Pada tahun 2017, Warkop 96 didirikan di Batam, Indonesia. Warkop 96 merupakan tempat makan dengan skala operasi cukup besar di Batam, terutama di daerah taman kota yang menjadi incaran para anak kos maupun warga masyarakat kota Batam dikarenakan harganya yang terjangkau dan menunya yang bervariasi.</p>
                    </div>
                </div>
            </div>
            <!-- About Us Single Area -->
            {{-- <div class="about-us-second-part">
                <div class="row align-items-center pt-200">
                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="about-us-content">
                            <span>our chef</span>
                            <p style="text-align: justify">Sed commodo augue eu diam tincidunt, sit amet auctor lectus semper. Mauris porttitor diam at fringilla tempor. Integer molestie rhoncus nisi a euismod. Etiam scelerisque eu enim et vestibulum. Mauris finibus, eros a faucibus varius, dui risus mattis massa, sed lobortis ante ante eget justo.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 ml-md-auto">
                        <div class="about-us-thumbnail wow fadeInUp" data-wow-delay="0.5s">
                            <img src="{{('landing/img/bg-img/about-2.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- ****** About Us Area End ****** -->

    <!-- ****** Dish Menu Area Start ****** -->
    <section class="caviar-dish-menu" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-12 menu-heading">
                    <div class="section-heading text-center">
                        <h2>Best Seller</h2>
                    </div>
                    <!-- btn -->
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay="0.5s">
                        <img src="{{('landing/img/menu-img/nasigorengkampung.png')}}" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">Nasi Goreng Kampung</h6>
                            <p class="dish-price"> Rp 24.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay="1s">
                        <img src="{{('landing/img/menu-img/telurdadarbombay.png')}}" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">Telur Dadar Bombai</h6>
                            <p class="dish-price">Rp 16.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay="1.5s">
                        <img src="{{('landing/img/menu-img/nasiayamanakkos.png')}}" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">Nasi Ayam Anak Kos</h6>
                            <p class="dish-price">Rp 27.000</p>
                        </div>
                    </div>
                </div>
            </div>
            @auth
            <p class="order-link"><a href="{{ route('dashboard') }}"><i class="fa-solid fa-circle-arrow-right"></i> Click here to Order!</a></p>
            @else
            <p class="order-link"><a href="{{ route('login') }}"><i class="fa-solid fa-circle-arrow-right"></i> Click here to Order!</a></p>
            @endauth
        </div>
    </section>
    <!-- ****** Dish Menu Area End ****** -->

    <!-- ****** Testimonials Area Start ****** -->
    <section class="caviar-testimonials-area" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonials-content">
                        <div class="section-heading text-center">
                            <h2>Testimonials</h2>
                        </div>
                        <div class="caviar-testimonials-slides owl-carousel">
                            <!-- Single Testimonial Area -->
                            <div class="single-testimonial">
                                <div class="testimonial-thumb-name d-flex align-items-center">
                                    <img src="{{('landing/img/testimonial-img/jo2.jpg')}}" alt="">
                                    <div class="tes-name">
                                        <h5>Joanne Seveny</h5>
                                    </div>
                                </div>
                                <p>Disini tersedia banyak pilihan menu makanan. Staff juga tergolong ramah. Kualitas makanan dan minuman standart, sebanding dengan harganya.</p>
                            </div>
                            <!-- Single Testimonial Area -->
                            <div class="single-testimonial">
                                <div class="testimonial-thumb-name d-flex align-items-center">
                                    <img src="{{('landing/img/testimonial-img/may2.jpg')}}" alt="">
                                    <div class="tes-name">
                                        <h5>May Delynn</h5>
                                    </div>
                                </div>
                                <p>Porsinya mantap buat indomienya. Sambel bawang ayam gorengnya juga enak. Milo dinosaurusnya beneran berasa, ngga encer. Banyak variasi pilihan buat sarapan.</p>
                            </div>
                            <!-- Single Testimonial Area -->
                            <div class="single-testimonial">
                                <div class="testimonial-thumb-name d-flex align-items-center">
                                    <img src="{{('landing/img/testimonial-img/nat2.jpg')}}" alt="">
                                    <div class="tes-name">
                                        <h5>Natasia</h5>
                                    </div>
                                </div>
                                <p>Nasi ramesnya enaaakkk, harga bersahabat. Mie2annya yg paling enak yg goreng sama kuah spesial sih, klo yg kuah biasa kadang suka hambar. Coba yg porsi big ada pilihan cornet juga pasti lebih hore</p>
                            </div>
                            <!-- Single Testimonial Area -->
                            <div class="single-testimonial">
                                <div class="testimonial-thumb-name d-flex align-items-center">
                                    <img src="{{('landing/img/testimonial-img/kep2.jpg')}}" alt="">
                                    <div class="tes-name">
                                        <h5>Kevin Hendarso</h5>
                                    </div>
                                </div>
                                <p>Sering nongkrong disini pas masih kuliah, tempatnya enak apalagi pas malam. Sisa pake kursi diluar sama temen nongkrong. Makanannya juga enak, nasi goreng kampungnya favorit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Testimonials Area End ****** -->

    <section class="caviar-reservation-area d-md-flex align-items-center" id="contact">
        <div class="reservation-form-area d-flex justify-content-end">
            <div class="reservation-form">
                <div class="section-heading">
                    <h2>Contact Us</h2>
                </div>
                <p>Feel free to Contact us down below</p>
                <ul>
                    <li><i class="fa-solid fa-phone mr-2 mb-2"></i> <strong>0778-408-8996</strong></li>
                    <li><i class="fa-brands fa-whatsapp mr-2 mb-2"></i> <strong>0895-7069-26969</strong></li>
                    <li><i class="fa-solid fa-map-location-dot mr-1 mb-2"></i> <strong>Komp Ruko Taman Kota Mas A1/1 Baloi Seiladi (Seberang SPBU)</strong></li>
                    <li><i class="fa-solid fa-calendar-week mr-2 mb-2"></i> <strong>Senin-Minggu</strong></li>
                    <li><i class="fa-regular fa-clock mr-1 mb-2"></i> <strong>07:00 - 22:00</strong></li>
                </ul>
            </div>
        </div>
        <div class="reservation-side-thumb wow fadeInRightBig" data-wow-delay="0.5s">
            <img src="{{("landing/img/bg-img/insideview.jpg")}}" alt="">
        </div>
    </section>

    <!-- ****** Footer Area Start ****** -->
    <footer class="caviar-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-text">
                        <a href="#" class="navbar-brand">Warkop 96</a>
                        <p>Made by ES KA ES</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Area End ****** -->

    <!-- Jquery-2.2.4 js -->
    <script src="{{asset('landing/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('landing/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap-4 js -->
    <script src="{{asset('landing/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('landing/js/others/plugins.js')}}"></script>
    <!-- Active JS -->
    <script src="{{asset('landing/js/active.js')}}"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/877d2cecdc.js" crossorigin="anonymous"></script>
</body>