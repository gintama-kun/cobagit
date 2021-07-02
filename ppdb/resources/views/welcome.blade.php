<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PPDB SMK Negeri 2 Kec.Guguak</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset ('new/smk.png')}}">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
  
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset ('edumark/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('edumark/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('edumark/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset ('edumark/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('edumark/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset ('edumark/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset ('edumark/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset ('edumark/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{ asset ('edumark/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset ('edumark/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{ asset ('edumark/css/style.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>
<style type="text/css">
    @font-face{
        font-family: trash;
        src:url({{ asset ('edumark/fonts/TrashHand.ttf')}});
    }
     @font-face{
        font-family: amatic;
        src:url({{ asset ('edumark/Amatic-Bold.ttf')}});
    }
    h3,a{
        font-family: trash;

    }
    #it{
         font-family: amatic;
    }



    /* slide */

    * {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="{{ asset ('new/ppdb.png')}}" style="width:180px" height="100px" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                           
                        </div>
                        
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-center">
                                <div class="live_chat_btn">
                                    <a class="boxed_btn_orange" href="/about">
                                        <i class="fa fa-users"></i>
                                        <span>Tentang Developer</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area ">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-6 col-md-6">
                        <div class="illastrator_png">
                            <img src="{{ asset ('edumark/img/banner/edu_ilastration.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_info">
                            <h3>
                                P P D B <br>
                                SMK Negeri 2 Kec.Guguak</h3>
                            @if (Route::has('login'))
                                    
                                    @auth
									<a href="{{ url('/dashboard') }}" style="color:white;" >
										<i class="flaticon-user"></i>
										Beranda
									</a>
								@else
								<a href="{{ route('login') }}" style="color:white;" class="flaticon-user boxed-btn2" >
									{{-- <i class="flaticon-user"></i> --}}
									Login
								</a>
								 @endauth
                                  
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- about_area_start -->
    <div class="popular_courses">
        <div class="container">
            <div class="row">
               
            </div>
          

        </div>
        
    </div>
    <!-- about_area_end -->
    

    <div class="slideshow-container">
    
    <div class="mySlides fade">
      
      <img src="{{'new/slide.jpg'}}" style="width:100%">
      
    </div>
    
    <div class="mySlides fade">
      
      <img src="{{'new/slide1.jpg'}}" style="width:100%">
      
    </div>
    
    <div class="mySlides fade">
      
      <img src="{{'new/slide2.jpg'}}" style="width:100%">
      
    </div>
    
    
    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
    </div>
    <!-- popular_courses_start -->
    <div class="popular_courses">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3 id="it">IT Solution</h3>
                        <p>Your domain control panel is designed for ease-of-use and <br> allows for all aspects of your
                            domains.</p>
                        <a href="/siswa" class="boxed boxed_btn_orange2"><i class="flaticon-user"> Ajukan Pendaftaran</i></a>
                    </div>
                </div>
            </div>
          

        </div>
        
    </div>
    <!-- popular_courses_end-->


    <!-- testimonial_area_start -->
    <div class="testimonial_area testimonial_bg_1 overlay">
        <div class="testmonial_active owl-carousel">
            <div class="single_testmoial">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="testmonial_text text-center">
                                <div class="author_img">
                                    <img src="{{ asset ('edumark/img/testmonial/author_img.png')}}" alt="">
                                </div>
                                <p>
                                    "Sebaik-baik tempat hubungan <br> Antara kaum itu
                                    dapat dijalinkan <br>
                                    adalah 
                                    di alam persekolahan.

                                </p>
                                <span>- unknown</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_testmoial">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="testmonial_text text-center">
                                <div class="author_img">
                                    <img src="{{ asset ('edumark/img/testmonial/author_img.png')}}" alt="">
                                </div>
                                <p>
                                    "Semakin tinggi sekolah bukan berarti<br> semakin menghabiskan 
                                    makanan orang lain. <br>
                                   Harus
                                    mengenal batas.

                                </p>
                                <span>- Bumi Manusia</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial_area_end -->

    <!-- our_courses_start -->
    <div class="our_courses">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>Jurusan teratas</h3>
                        <p>RPL,Multimedia, Dan OTKP 
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon gradient">
                            <i class="fa fa-group"></i>
                        </div>
                        <h3>Anggota Group</h3>
                        <p>
                        
                            Syukriatul Zandri<br>
                            Riana Fitri<br>
                            Izzatul Yazidah<br>
                            Widhian Sandiki<br>
                            <br>
                            
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon blue">
                            <i class="fa fa-university"></i>
                        </div>
                        <h3>SMKN 2 Kec.Guguak</h3>
                        <p>
                          Sekolah IT terbaik se-kab.50 Kota <br> dan <br>
                            Dikepalai: Drs.H Deri Nofia <br><br>
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon blue">
                            <i class="fa fa-certificate"></i>
                        </div>
                        <h3>Akreditasi Sekolah</h3>
                        <p>
                           B <br><br><br><br><br>
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon gradient">
                            <i class="flaticon-crown"></i>
                        </div>
                        <h3>Jurusan</h3>
                        <p>
                            <h2>TI</h2><br>,
                           <h2>Bismen</h2>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our_courses_end -->

    

    <!-- our_latest_blog_start -->
    <div class="our_latest_blog">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>Blog Kami</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_latest_blog">
                        <div class="thumb">
                            <img src="{{ asset ('edumark/img/latest_blog/1.png')}}" alt="">
                        </div>
                        <div class="content_blog">
                           
                           
                           
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_latest_blog">
                        <div class="thumb">
                            <img src="{{ asset ('edumark/img/latest_blog/2.png')}}" alt="">
                        </div>
                        
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_latest_blog">
                        <div class="thumb">
                            <img src="{{ asset ('edumark/img/latest_blog/3.png')}}" alt="">
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our_latest_blog_end -->


    <!-- footer -->
    <footer class="footer footer_bg_1">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img  src="{{ asset ('new/ppdb.png')}}" style="width:180px" height="100px" alt="">
                                </a>
                            </div>
                            <p>
                                Pilihlah Jurusan yang kamu sukai dan sesuai dengan minat dan bakatmu, <br>
                                Jangan dengarkan kata orang lain dan ikuti kata hatimu!!
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="https://mobile.facebook.com/profile.php?id=100025985352169&_rdc=1&_rdr">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/riana_ftri">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/izzatul______/?hl=en">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCcie4VEPRMkS2I3xT_HxpqA/featured?view_as=subscriber">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Terima Kasih!!
                            </h3>
                            <ul>
                                
                                <li><a href="#"> Photoshop</a></li>
                                <li><a href="#">Illustrator</a></li>
                                <li><a href="#">UI/UX</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Informasi Lebih Lanjut
                            </h3>
                            <ul>
                                
                                <li><a href="#"> Tentang Kami</a></li>
                                <li><a href="#"> Kontak</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Alamat
                            </h3>
                            <p>
                                Jl.Tuanku Nan Biru-Ampang Gadang,VII Koto Talago <br>
                                Kec.Guguak,Kab.Lima Puluh Kota,Sumatera Barat 26253
                                (0752)97318<br>
                               Zandri081@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Dibuat  <i class="fa fa-heart-o" aria-hidden="true"></i> Oleh <a href="#" target="_blank">Kelompok 4 (Lollipop)</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer -->


    <!-- form itself end-->
    <form id="test-form" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="#">
                        <img src="{{ asset ('edumark/img/form-logo.png')}}" alt="">
                    </a>
                </div>
                <h3>Sign in</h3>
                <form action="#">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <input type="email" placeholder="Enter email">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="password" placeholder="Password">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed_btn_orange">Sign in</button>
                        </div>
                    </div>
                </form>
                <p class="doen_have_acc">Don’t have an account? <a class="dont-hav-acc" href="#test-form2">Sign Up</a>
                </p>
            </div>
        </div>
    </form>
    <!-- form itself end -->

    <!-- form itself end-->
    <form id="test-form2" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="#">
                        <img src="{{ asset ('edumark/img/form-logo.png')}}" alt="">
                    </a>
                </div>
                <h3>Resistration</h3>
                <form action="#">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <input type="email" placeholder="Enter email">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="password" placeholder="Password">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="Password" placeholder="Confirm password">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed_btn_orange">Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
    <!-- form itself end -->
    <script>
        var slideIndex = 0;
        showSlides();
        
        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
        </script>
        

    <!-- JS here -->
    <script src="{{ asset ('edumark/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{ asset ('edumark/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ asset ('edumark/js/popper.min.js')}}"></script>
    <script src="{{ asset ('edumark/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset ('edumark/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset ('edumark/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset ('edumark/js/ajax-form.js')}}"></script>
    <script src="{{ asset ('edumark/js/waypoints.min.js')}}"></script>
    <script src="{{ asset ('edumark/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset ('edumark/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset ('edumark/js/scrollIt.js')}}"></script>
    <script src="{{ asset ('edumark/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{ asset ('edumark/js/wow.min.js')}}"></script>
    <script src="{{ asset ('edumark/js/nice-select.min.js')}}"></script>
    <script src="{{ asset ('edumark/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{ asset ('edumark/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset ('edumark/js/plugins.js')}}"></script>
    <script src="{{ asset ('edumark/js/gijgo.min.js')}}"></script>

    <!--contact js-->
    <script src="{{ asset ('edumark/js/contact.js')}}"></script>
    <script src="{{ asset ('edumark/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset ('edumark/js/jquery.form.js')}}"></script>
    <script src="{{ asset ('edumark/js/jquery.validate.min.js')}}"></script>
    <script src="{{ asset ('edumark/js/mail-script.js')}}"></script>

    <script src="{{ asset ('edumark/js/main.js')}}"></script>
    @include('sweetalert::alert')
</body>

</html>