
    <aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>
    <section class="sidebar">
        <div class="w-200px mt-3 mb-3 ml-3">
            <img src="{{ asset ('new/ppdb1.png')}}" style="width:150px; height:80px;" alt="">
        </div>
        <div class="relative">
            
            <div class="user-panel p-3 light mb-2">
                <div>
                    <div class="float-left image">
                        {{-- <img class="user_avatar" src="{{ asset ('paper/assets/img/dummy/u2.png')}}" alt="User Image"> --}}
                        @if (Auth::user()->jenis_kelamin == 'Perempuan' && Auth::user()->image == null)
                            <img width="10%" height="10%"  class="user_avatar" src="{{asset ('new/woman.png')}}" alt=""  />
                        @elseif(Auth::user()->jenis_kelamin == 'Laki-Laki' && Auth::user()->image == null)
                            <img width="10%" height="10%"  class="user_avatar" src="{{asset ('new/man.png')}}" alt=""  />
                        @elseif(Auth::user()->image != null)
                            <img width="10%" height="10%"  class="user_avatar" src="{{url('images/user',Auth::user()->image)}}" alt="" />
                        @endif
                            
                        </div>
                    <div class="float-left info">
                        <h6 class="font-weight-light mt-2 mb-1">{{ Auth::user()->nama_lengkap }}</h6>
                        <a href="#"><i class="icon-circle text-primary blink"></i> Online</a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header"><strong>Navigasi Utama</strong></li>
            <li class="treeview"><a href="/dashboard">
                <i class="icon icon-sailing-boat-water purple-text s-18"></i> <span>Dashboard</span> 
            </a>
                
            </li>
           
                @php
                    $siswa =App\Daftar::all()->where('status','==','proses')->count();
                    
                @endphp
            <li class="header light mt-3"><strong>Aplikasi</strong></li>
            @if (Auth::user()->id == 1)
            <li class="treeview ">
                <a href="#">
                    <i class="icon icon-package text-lime s-18"></i> <span>Apps</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    
                    
                        <li><a href="/Admin/DataSiswa"><i class="icon icon-school"></i>Siswa</a>
                        </li>
                
                    
                    <li><a href="/Admin/DataAkun"><i class="icon icon-user"></i>Akun</a>
                    </li>
                    
                </ul>
            </li>
    
            <li class="treeview">
                <a href="#">
                    <i class="icon icon-widgets text-blue s-18"></i> <span>Kegiatan</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="/Admin/Sekolah"><i class="icon icon-building-o  s-14"></i>Profile Sekolah
                            </a>
                    </li>
                    <li><a href="/file-upload">
                        <i class="icon icon-bullhorn amber-text s-14"></i> <span>Promosi</span>
                    </a>
                    
                </ul>
            </li>
            
            @endif

            @if (Auth::user()->role == 'Petugas')
            <li class="treeview ">
                <a href="#">
                    <i class="icon icon-wpforms light-green-text s-18 "></i> <span>Data Siswa</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    @if ($siswa  == 0)
                        <li><a href="/Petugas/Pendaftarah/permintaan"><i class="icon icon-wpforms red-text s-14"></i>Data
                            Pendaftaran</a>
                        </li>
                    @else
                        <li><a href="/Petugas/Pendaftarah/permintaan"><i class="icon icon-wpforms red-text s-14"></i>Data
                            Pendaftaran<span class="badge r-3 badge-success pull-right">{{$siswa}}</span> </a>
                        </li>
                    @endif
                    
                </ul>
            </li>
            @endif
            @if (Auth::user()->role == 'Pengunjung' || Auth::user()->role == null && Auth::user()->id != 1)
                
           
            <li class="treeview"><a href="#">
                <i class="icon icon-bar-chart2 pink-text s-18"></i>
                <span>PPDB</span>
                <i class="icon icon-angle-left s-18 pull-right"></i>
            </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="/siswa"><i class="icon icon-school pink-text s-14"></i><span>Pendaftaran</span></a>
                    </li>
                    <li>
                        <a href="/siswa/cek"><i class="icon icon-note-checked pink-text s-14"></i>Hasil
                            </a>
                    </li>
                    <li>
                        <a href="panel-element-morris.html"><i class="icon icon-announcement pink-text s-14"></i>Pengumuman
                            </a>
                    </li>
                    <li>
                        <a href="/ProfileSekolah"><i class="icon icon-building-o pink-text s-14"></i>Profile Sekolah
                            </a>
                    </li>
                    <li>
                        <a href="/peta_sekolah"><i class="icon icon-map-marker pink-text s-14"></i>Peta
                            </a>
                    </li>
                    @endif
                </ul>
            </li>
        </ul>
    </section>
</aside>
