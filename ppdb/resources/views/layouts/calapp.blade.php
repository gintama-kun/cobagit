<!doctype html>
<html class="no-js" lang="en">

<head>
  
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PPDB SMK Negeri 2 Kec.Guguak</title>
    
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
      
    ============================================ -->
    <link rel="stylesheet" href="{{ asset ('fonta/font-awesome-animation.min.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset ('new/smk.png')}}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS

    ============================================ -->
    
    <link rel="stylesheet" href="{{ asset ('kiaalap-master/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset ('kiaalap-master/css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset ('kiaalap-master/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset ('kiaalap-master/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{ asset ('kiaalap-master/css/owl.transitions.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset ('kiaalap-master/css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset ('kiaalap-master/css/normalize.css')}}">

    <!-- dropzone CSS
		============================================ -->
   
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset ('kiaalap-master/css/meanmenu.min.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset ('kiaalap-master/css/main.css')}}">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset ('kiaalap-master/css/educate-custon-icon.css')}}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset ('kiaalap-master/css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset ('kiaalap-master/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset ('kiaalap-master/css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('kiaalap-master/css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
    ============================================ -->
    
    
    <link rel="stylesheet" href="{{ asset ('kiaalap-master/css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('kiaalap-master/css/calendar/fullcalendar.print.min.css')}}">

    
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset ('kiaalap-master/style.css')}}">
    

    
    <!-- modals CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset ('kiaalap-master/css/modals.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset ('kiaalap-master/css/responsive.css')}}">
    <!-- modernizr JS
    ============================================ -->
   


    
   



    <link rel="stylesheet" type="text/css" href="{{ asset ('sweetalert2/dist/sweetalert2.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('sweetalert2/dist/sweetalert2.min.css')}}">
    <script src="{{ asset ('sweetalert2/dist/sweetalert2.all.min.js')}}"></script>
     {{-- ===========================  Datatables =====================--}}

     @yield('head')



    <link rel="stylesheet" href="{{ asset ('sweetalert/src/sweetalert2.scss')}}">
    <style>
    
    @font-face{
        font-family: trash;
        src:url({{ asset ('edumark/fonts/TrashHand.ttf')}});
    }
     @font-face{
        font-family: amatic;
        src:url({{ asset ('edumark/Amatic-Bold.ttf')}});
    }
    @font-face{
        font-family: kindergarten;
        src:url({{ asset ('edumark/fonts/kindergarten.ttf')}});
    }

    span,a,p,h5,h2,div,table
    {
      font-family: kindergarten;
    }
    

    </style>
    <style>
    
    * {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

body {
  padding: 0;
  margin: 0;
}

#notfound {
  position: relative;
  height: 100vh;
}

#notfound .notfound {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

.notfound {
  max-width: 520px;
  width: 100%;
  text-align: center;
  line-height: 1.4;
}

.notfound .notfound-404 {
  height: 190px;
}

.notfound .notfound-404 h1 {
  font-family: 'Montserrat', sans-serif;
  font-size: 146px;
  font-weight: 700;
  margin: 0px;
  color: #232323;
}

.notfound .notfound-404 h1>span {
  display: inline-block;
  width: 120px;
  height: 120px;
  background-image: url({{asset ('notfound/img/emoji.png')}});
  background-size: cover;
  -webkit-transform: scale(1.4);
      -ms-transform: scale(1.4);
          transform: scale(1.4);
  z-index: -1;
}

.notfound h2 {
  
  font-size: 22px;
  font-weight: 700;
  margin: 0;
  text-transform: uppercase;
  color: #232323;
}

.notfound p {
  
  color: #787878;
  font-weight: 300;
}

.notfound a {
 
  display: inline-block;
  padding: 12px 30px;
  font-weight: 700;
  background-color: #f99827;
  color: #fff;
  border-radius: 40px;
  text-decoration: none;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}

.notfound a:hover {
  opacity: 0.8;
}

@media only screen and (max-width: 767px) {
  .notfound .notfound-404 {
    height: 115px;
  }
  .notfound .notfound-404 h1 {
    font-size: 86px;
  }
  .notfound .notfound-404 h1>span {
    width: 86px;
    height: 86px;
  }
}


    </style>
</head>

<body>
  @guest
      @else
  
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    @include('layouts.sidebar')
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="/beranda"><img class="main-logo" src="{{ asset ('kiaalap-master/img/logo/new.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                               
                                                @if (Auth:: user()->role == 'Petugas')
                                                    
                                               
                                                @php
                                                $data =DB::table('formulirs')->where('status','proses')->count();
                                           @endphp
                                           @if ($data)
                                           <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-ms"></a>
                                            <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                <div class="notification-single-top">
                                                    <h1>Notifications</h1>
                                                </div>
                                                <ul class="notification-menu">
                                                    <li>
                                                        <a href="/datas/petugas/permintaan">
                                                            <div class="notification-icon">
                                                                <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="notification-content">
                                                                
                                                            <h2>Kamu memiliki {{$data}} data untuk dikonfirmasi</h2>
                                                                <p>Tolong Dilihat!!</p>
                                                            <audio src="{{ asset ('kiaalap-master/sound/1.mp3')}}" autoplay="autoplay" hidden="hidden" ></audio>
                                                            </div>
                                                        </a>
                                                    </li>
                                                   
                                                    
                                                </ul>
                                               
                                            </div>
                                        </li>
                                           @else
                                           <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i></a>
                                            <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                <div class="notification-single-top">
                                                    <h1>Notifications</h1>
                                                </div>
                                                <ul class="notification-menu">
                                                    <li>
                                                        <a href="#">
                                                            <div class="notification-icon">
                                                                <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="notification-content">
                                                               
                                                            <h2>Kamu memiliki {{$data}} notifikasi saat ini</h2>
                                                               
                                                            </div>
                                                        </a>
                                                    </li>
                                                   
                                                    
                                                </ul>
                                               
                                            </div>
                                        </li>
                                           @endif
                                           @elseif(Auth::user()->id == 1)
                                           
                                           @php
                                           $data =DB::table('users')->where([['role',null],['id','!=',1]])->count();
                                      @endphp
                                      @if ($data)
                                      <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-ms"></a>
                                       <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                           <div class="notification-single-top">
                                               <h1>Notifications</h1>
                                           </div>
                                           <ul class="notification-menu">
                                               <li>
                                               <a href="{{route('pengguna')}}">
                                                       <div class="notification-icon">
                                                           <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                       </div>
                                                       <div class="notification-content">
                                                           
                                                       <h2>Kamu memiliki {{$data}} user baru</h2>
                                                           <p>Tolong Dilihat!!</p>
                                                       <audio src="{{ asset ('kiaalap-master/sound/1.mp3')}}" autoplay="autoplay" hidden="hidden" ></audio>
                                                       </div>
                                                   </a>
                                               </li>
                                              
                                               
                                           </ul>
                                          
                                       </div>
                                   </li>
                                      @else
                                      <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i></a>
                                       <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                           <div class="notification-single-top">
                                               <h1>Notifications</h1>
                                           </div>
                                           <ul class="notification-menu">
                                               <li>
                                                   <a href="#">
                                                       <div class="notification-icon">
                                                           <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                       </div>
                                                       <div class="notification-content">
                                                          
                                                       <h2>Kamu memiliki {{$data}} notifikasi saat ini</h2>
                                                          
                                                       </div>
                                                   </a>
                                               </li>
                                              
                                               
                                           </ul>
                                          
                                       </div>
                                   </li>
                                   @endif    
                                           @endif
                                               
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                    <img src="{{url('images/user',Auth::user()->image)}}" alt="" />
                                                    <span class="admin-name"> {{ Auth::user()->name }}</span>
                                                    <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li> <a class="dropdown-item" style="color:red;" href="{{ route('logout') }}"
                                                          onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">
                                                           {{ __(' Logout') }}
                                                       </a>
                   
                                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                           @csrf
                                                       </form>
                                                        </li>
                                                      <li><a href="{{route('profile')}}" >{{ __(' My Profile')}}</a>
                                                        </li>
                                                       
                                                    </ul>
                                                </li>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endguest
            <!-- content -->


            @if (Auth:: user()->status == 'b')
            
            <div id="notfound">
              <div class="notfound">
                <div class="notfound-404">
                  <h1>4<span></span>4</h1>
                </div>
                <h2>Oops! Halaman Tidak Ditemukan</h2>
                <p>Akun Anda Diblokir Admin</p>
                <a class="dropdown-item"  href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      {{ __(' Logout') }}
                </a>
                   
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
               
              </div>
            </div>
          
            @elseif(Auth:: user()->status == null || Auth:: user()->status == 'a')
            @yield('content')
            @endif
    </div>

    
    <div> @include('layouts.footer')</div>
   
    <!-- jquery
		============================================ -->
    <script src="{{ asset ('kiaalap-master/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ asset ('kiaalap-master/js/bootstrap.min.js')}}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{ asset ('kiaalap-master/js/wow.min.js')}}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{ asset ('kiaalap-master/js/jquery-price-slider.js')}}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ asset ('kiaalap-master/js/jquery.meanmenu.js')}}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{ asset ('kiaalap-master/js/owl.carousel.min.js')}}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{ asset ('kiaalap-master/js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ asset ('kiaalap-master/js/jquery.scrollUp.min.js')}}"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{ asset ('kiaalap-master/js/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset ('kiaalap-master/js/counterup/waypoints.min.js')}}"></script>
    <script src="{{ asset ('kiaalap-master/js/counterup/counterup-active.js')}}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ asset ('kiaalap-master/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{ asset ('kiaalap-master/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{ asset ('kiaalap-master/js/metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{ asset ('kiaalap-master/js/metisMenu/metisMenu-active.js')}}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{ asset ('kiaalap-master/js/morrisjs/raphael-min.js')}}"></script>
    <script src="{{ asset ('kiaalap-master/js/morrisjs/morris.js')}}"></script>
    <script src="{{ asset ('kiaalap-master/js/morrisjs/home3-active.js')}}"></script>
    
    <!-- morrisjs JS
		============================================ -->
    <script src="{{ asset ('kiaalap-master/js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{ asset ('kiaalap-master/js/sparkline/jquery.charts-sparkline.js')}}"></script>
    <script src="{{ asset ('kiaalap-master/js/sparkline/sparkline-active.js')}}"></script>
     <!-- Charts JS
		============================================ -->
    <script src="{{ asset ('kiaalap-master/js/charts/Chart.js')}}"></script>
    <script src="{{ asset ('kiaalap-master/js/charts/rounded-chart.js')}}"></script>
    <!-- calendar JS
		============================================ -->
        <script src="{{ asset ('kiaalap-master/js/calendar/moment.min.js')}}"></script>
        <script src="{{ asset ('kiaalap-master/js/calendar/fullcalendar.min.js')}}"></script>
        <script src="{{ asset ('kiaalap-master/js/calendar/fullcalendar-active.js')}}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset ('kiaalap-master/js/plugins.js')}}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ asset ('kiaalap-master/js/main.js')}}"></script>
   
    {{-- ========================= sweetalert ======================= --}}
    <script type="text/javascript" src="{{ asset ('sweetalert2/dist/sweetalert2.all.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('sweetalert2/dist/sweetalert2.all.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('sweetalert2/dist/sweetalert2.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('sweetalert2/dist/sweetalert2.js')}}"></script>
    
    @yield('js')
    @include('sweetalert::alert')
</body>

</html>