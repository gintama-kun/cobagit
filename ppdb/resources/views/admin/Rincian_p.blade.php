<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>(PEKAK)PPDB SMK Negeri 2 Kec.Guguak</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
        {{-- <script src="{{ asset ('toggle/jquery.min.js')}}" ></script> --}}
        {{-- <link rel="stylesheet" href="{{ asset ('toggle/bootstrap.min.css')}}"  />
        <link href="{{ asset ('toggle/bootstrap-toggle.min.css')}}" rel="stylesheet">
        <script src="{{ asset ('toggle/bootstrap-toggle.min.js')}}"></script> --}}

        <link rel="shortcut icon" type="image/x-icon" href="{{ asset ('new/smk.png')}}">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />
        
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    {{-- <link rel="stylesheet" href="{{ asset ('kiaalap-master/css/bootstrap.min.css')}}"> --}}
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
    <!-- x-editor CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset ('kiaalap-master/css/editor/select2.css')}}">
    <link rel="stylesheet" href="{{ asset ('kiaalap-master/css/editor/datetimepicker.css')}}">
    <link rel="stylesheet" href="{{ asset ('kiaalap-master/css/editor/bootstrap-editable.css')}}">
    <link rel="stylesheet" href="{{ asset ('kiaalap-master/css/editor/x-editor-style.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset ('kiaalap-master/css/data-table/bootstrap-table.css')}}">
    <link rel="stylesheet" href="{{ asset ('kiaalap-master/css/data-table/bootstrap-editable.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset ('kiaalap-master/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset ('kiaalap-master/css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset ('kiaalap-master/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset ('sweetalert2/dist/sweetalert2.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('sweetalert2/dist/sweetalert2.min.css')}}">
    <script src="{{ asset ('sweetalert2/dist/sweetalert2.all.min.js')}}"></script>
     {{-- ===========================  Datatables =====================--}}

 


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
                                                    <span class="admin-name"> {{ Auth::user()->nama_lengkap }}</span>
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
        
    </div>

    <br><br><br><br>
            <!-- Static Table Start -->
            <div class="data-table-area mg-b-15">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="sparkline13-list">
                              <div class="sparkline13-hd">
                                
                                  <div class="main-sparkline13-hd">
                                      <h1> <span class="table-project-n">Rincian</span> Akun PPDB <img src="{{ asset ('new/smk.png')}}" style="width:5%; height:5%;" alt=""></h1>
                                  </div>
                                  </div>
                                  @if (session('success_message'))

                                  <div class="alert alert-success">
                                      {{session('success_message')}}
                                  </div>
                                  @endif
                              </div>
                              <div class="sparkline13-graph">
                                  <div class="datatable-dashv1-list custom-datatable-overright">
                                      <div id="toolbar">
                                          
                                      </div>
                                      <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId"  data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                
                                                <th data-field="id">No</th>
                                                <th data-field="name" data-editable="false">Nama</th>
                                                <th data-field="email" data-editable="false">Email</th>
                                                <th data-field="phone" data-editable="false">Alamat</th>
                                                
                                                <th data-field="task" data-editable="false">Role</th>
                                                <th data-field="status" data-editable="false">Status</th>
                                                <th data-field="keterangan" data-editable="false">Keterangan</th>
                                               
                                                <th data-field="action">Action</th>
                                                <th data-field="Status Akun"> Status Akun</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $db)
                                                
                                           
                                            <tr>
                                                
                                                <td>{{$db->id}}</td>
                                                <td>{{$db->nama_lengkap}}</td>
                                                <td>{{$db->email}}</td>
                                                <td>{{$db->alamat}}</td>
                                                <td>
                                                  @if ($db->role == null)
                                                    <p><i>belum ada role</i></p>
                                                  @elseif ($db->role == 'Pengunjung')
                                                    <p style="color:blueviolet"><i>Pengunjung</i></p>  
                                                  @elseif ($db->role == 'Petugas')
                                                    <p><i>Petugas</i></p>
                                                    
                                                  @endif
                                                </td>
                                                <td>
                                                    @if ($db->isOnline() )
                                                        <li class="text-success">
                                                            <b> Online </b>
                                                        </li>
                                                    @else
                                                    <li class="text-muted">
                                                            <b style="color:red;"> Offline </b>
                                                        </li>
                                                    @endif
                                                </td>
                                                
                                                <td>
                                                    @if ($db->status == 'a')
                                                      <p>User Aktif</p>
                                                    @elseif($db->status == 'b')
                                                      <p>User Diblokir</p>
                                                    @elseif ($db->status == Null)
                                                      <p>User Aktif</p>
                                                    @endif
                                                </td>
                                                
                                            <td> <a href="/admin/pengguna/edit/{{$db['id']}}" class="btn btn-warning"><i class="glyphicon glyphicon-edit "></i> Edit</a> <a href="/admin/pengguna/delete/{{$db['id']}}" class="btn btn-danger"><i class="glyphicon glyphicon-edit fa fa-trash"></i> Hapus </a> 
                                              

                                              
                                              <td>
                                                <input data-id="{{$db->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $db->status ? 'checked' : '' }}>
                                             </td>
                                            </tr>
                                            @endforeach
                                            
                                            
                                        </tbody>
                                    </table>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        
        <!-- Static Table End -->
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <script>
      $(function() {
        $('.toggle-class').change(function() {
            var status = $(this).prop('checked') == true ? 'a' : 'b'; 
            var user_id = $(this).data('id'); 
             
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/changeStatus',
                data: {'status': status, 'user_id': user_id},
                success: function(data){
                  console.log(data.success)
                }
            });
        })
      })
    </script>
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
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ asset ('kiaalap-master/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{ asset ('kiaalap-master/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{ asset ('kiaalap-master/js/metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{ asset ('kiaalap-master/js/metisMenu/metisMenu-active.js')}}"></script>
    <!-- data table JS
		============================================ -->
    <script src="{{ asset ('kiaalap-master/js/data-table/bootstrap-table.js')}}"></script>
    <script src="{{ asset ('kiaalap-master/js/data-table/tableExport.js')}}"></script>
    <script src="{{ asset ('kiaalap-master/js/data-table/data-table-active.js')}}"></script>
    <script src="{{ asset ('kiaalap-master/js/data-table/bootstrap-table-editable.js')}}"></script>
    <script src="{{ asset ('kiaalap-master/js/data-table/bootstrap-editable.js')}}"></script>
    <script src="{{ asset ('kiaalap-master/js/data-table/bootstrap-table-resizable.js')}}"></script>
    <script src="{{ asset ('kiaalap-master/js/data-table/colResizable-1.5.source.js')}}"></script>
    <script src="{{ asset ('kiaalap-master/js/data-table/bootstrap-table-export.js')}}"></script>
    <!--  editable JS
		============================================ -->
    <script src="{{ asset ('kiaalap-master/js/editable/jquery.mockjax.js')}}"></script>
    <script src="{{ asset ('kiaalap-master/js/editable/mock-active.js')}}"></script>
    <script src="{{ asset ('kiaalap-master/js/editable/select2.js')}}"></script>
    <script src="{{ asset ('kiaalap-master/js/editable/moment.min.js')}}"></script>
    <script src="{{ asset ('kiaalap-master/js/editable/bootstrap-datetimepicker.js')}}"></script>
    <script src="{{ asset ('kiaalap-master/js/editable/bootstrap-editable.js')}}"></script>
    <script src="{{ asset ('kiaalap-master/js/editable/xediable-active.js')}}"></script>
    <!-- Chart JS
		============================================ -->
    <script src="{{ asset ('kiaalap-master/js/chart/jquery.peity.min.js')}}"></script>
    <script src="{{ asset ('kiaalap-master/js/peity/peity-active.js')}}"></script>
    <!-- tab JS
		============================================ -->
    <script src="{{ asset ('kiaalap-master/js/tab.js')}}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset ('kiaalap-master/js/plugins.js')}}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ asset ('kiaalap-master/js/main.js')}}"></script>
    <!-- tawk chat JS
		============================================ -->

    <script type="text/javascript" src="{{ asset ('sweetalert2/dist/sweetalert2.all.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('sweetalert2/dist/sweetalert2.all.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('sweetalert2/dist/sweetalert2.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset ('sweetalert2/dist/sweetalert2.js')}}"></script>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet"/>
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    @endguest
    @include('sweetalert::alert')
</body>

</html>