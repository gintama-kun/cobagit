@extends('layouts.default')
@section('content')
<div class="page has-sidebar-left">
    <div>
        <header class="blue accent-3 relative">
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <div class="pb-3">
                            <div class="image mr-3  float-left">
                                
                                @if (Auth::user()->jenis_kelamin == 'Perempuan' && Auth::user()->image == null)
                                    <img width="10%" height="10%"  class="user_avatar" src="{{asset ('new/woman.png')}}" alt=""  />
                                @elseif(Auth::user()->jenis_kelamin == 'Laki-Laki' && Auth::user()->image == null)
                                    <img width="10%" height="10%"  class="user_avatar" src="{{asset ('new/man.png')}}" alt=""  />
                                @elseif(Auth::user()->image != null)
                                    <img width="10%" height="10%"  class="user_avatar" src="{{url('images/user',Auth::user()->image)}}" alt="" />
                                @endif
                              
                            </div>
                            <div>
                                <h6 class="p-t-10">{{ Auth::user()->nama_lengkap }}</h6>
                                {{ Auth::user()->email }}
                            </div>
                        </div>
                    </div>
                </div>

              <div class="row">
                  <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                      <li>
                          <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home"><i class="icon icon-home2"></i>Home</a>
                      </li>
                      <li>
                          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="icon icon-cog"></i>Edit Profile</a>
                      </li>
                  </ul>
              </div>

            </div>
        </header>
        @if (Auth::user()->role == null || Auth::user()->role == 'Pengunjung' && Auth::user()->id != 1)
        <div class="container-fluid animatedParent animateOnce my-3">
            <div class="animated fadeInUpShort">
           <div class="tab-content" id="v-pills-tabContent">
               <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                   <div class="row">
                       <div class="col-md-3">
                           <div class="card ">

                               <ul class="list-group list-group-flush">
                                   <li class="list-group-item"><i class="icon icon-mobile text-primary"></i><strong class="s-12">Telepon/Hp</strong> <span class="float-right s-12">{{ Auth::user()->no_hp }}</span></li>
                                   <li class="list-group-item"><i class="icon icon-mail text-success"></i><strong class="s-12">Email</strong> <span class="float-right s-12">{{ Auth::user()->email }}</span></li>
                                   @if (Auth::user()->nip != null || Auth::user()->nisn == null)

                                   <li class="list-group-item"><i class="icon icon-address-card-o text-warning"></i><strong class="s-12">NIP</strong> <span class="float-right s-12">{{ Auth::user()->nip }}</span></li>
                                   
                                   @elseif(Auth::user()->nip == null || Auth::user()->nisn != null)

                                   <li class="list-group-item"><i class="icon icon-address-card-o text-warning"></i><strong class="s-12">NISN</strong> <span class="float-right s-12">{{ Auth::user()->nisn }}</span></li>
                                   
                                   @endif
                                   <li class="list-group-item"><i class="icon icon-address-book text-dark"></i><strong class="s-12">Alamat</strong> <span class="float-right s-12">{{ Auth::user()->alamat }}</span></li>

                                   @if (Auth::user()->id == 1)
                                   <li class="list-group-item"><i class="icon icon-address-book pink-text"></i><strong class="s-12">Kedudukan</strong> <span class="float-right s-12">Admin</span></li>
                                   @elseif(Auth::user()->role == 'Petugas')
                                   <li class="list-group-item"><i class="icon icon-address-book pink-text"></i><strong class="s-12">Kedudukan</strong> <span class="float-right s-12">Panitia</span></li>
                                   @elseif(Auth::user()->role == 'Pengunjung' || Auth::user()->id != 1)
                                   <li class="list-group-item"><i class="icon icon-user pink-text"></i><strong class="s-12">Kedudukan</strong> <span class="float-right s-12">Pengunjung</span></li>
                                   @endif
                                   
                                
                               </ul>
                           </div>
                           @php
                               $users = DB::table('users')->count();
                           @endphp
                           <div class="card mt-3 mb-3">
                            <div class="card">
                                <div class="card-header white">Statistik </div>
                                <div class="card-body p-0">
                                    <div class="bg-primary text-white lighten-2">
                                        <div class="pt-5 pb-2 pl-5 pr-5">
                                            <h5 class="font-weight-normal s-14">Pengguna</h5>
                                            <span class="s-48 font-weight-lighter text-primary">
                                                <small></small> {{$users}}</span>
                                            <div class="float-right">
                                                <span class="icon icon-chart s-48"></span>
                                            </div>
                                        </div>
                                        <canvas width="378" height="94" data-chart="spark" data-chart-type="bar"
                                                data-dataset="[[28,68,41,43,96,45,100,28,68,41,43,96,45,100]]"
                                                data-labels="['a','b','c','d','e','f','g','h','i','j','k','l','m','n']">
                                        </canvas>
                                    </div>
                                </div>
                            </div>

                              

                           </div>

                       </div>
                       <div class="col-md-9">
                       

                           <div class="row my-3">
                               <!-- bar charts group -->
                               <div class="col-md-12">
                                   <div class="card">
                                       <div class="card-header white">
                                           
                                       </div>
                                       <div class="card-body">
                                       <img src="{{asset('new/ppdbs.jpg')}}" width="100%" alt="">
                                       </div>
                                   </div>
                               </div>
                           </div>
                           
                       </div>
                   </div>
               </div>
               
               <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <form method="POST" action="{{route('user.update')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="namalengkap" class="col-form-label">Nama Lengkap <sup>*</sup></label>
                            <input name="nama_lengkap" type="text" required value="{{$user['nama_lengkap']}}" class="form-control" id="namalengkap"
                                   placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4" class="col-form-label">Nama Panggilan<sup>*</sup></label>
                            <input name="nama_panggilan" type="text" required value="{{$user['nama_panggilan']}}" class="form-control" id="inputPassword4"
                                   placeholder="Password">
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <label for="jk">Jenis Kelamin<sup>*</sup></label>
                        <select class="form-control" id="jk">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                            
                        </select>
                    </div> --}}
                    <div class="form-group">
                        <label for="tanggal" class="col-form-label">Tanggal Lahir<sup>*</sup></label>
                        <input name="tgl_lahir" required type="date" value="{{$user['tgl_lahir']}}" class="form-control" id="tanggal"
                               placeholder="1234 Main St">
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="col-form-label">Alamat<sup>*</sup></label>
                        <input name="alamat" required type="text" value="{{$user['alamat']}}" class="form-control" id="alamat"
                               placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <label for="no_hp" class="col-form-label">Telepon/Hp<sup>*</sup></label>
                        <input name="no_hp" required type="text" value="{{$user['no_hp']}}" class="form-control" id="no_hp"
                               placeholder="Telepon/Hp">
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email<sup>*</sup></label>
                        <input name="email" required type="email" value="{{$user['email']}}" class="form-control" id="email"
                               placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label for="foto" class="col-form-label">foto</label>
                        <input name="image" value="{{$user['image']}}" type="file"class="form-control" id="foto"
                               placeholder="foto">
                    </div>
                    

                    <div class="form-group">
                        <label for="asal_sekolah" class="col-form-label">Sekolah Asal<sup>*</sup></label>
                        <input name="asal_sekolah" required type="text" value="{{$user['asal_sekolah']}}" class="form-control" id="asal_sekolah"
                               placeholder="Sekolah Asal">
                    </div>

                    
                    @if (Auth::user()->nip != null || Auth::user()->nisn == null)
                    <div class="form-group">
                        <label for="nip" class="col-form-label">NIP</label>
                        <input name="nip" type="text" value="{{$user['nip']}}" class="form-control" id="nip"
                               placeholder="NIP">
                    </div>
                    @elseif(Auth::user()->nip == null || Auth::user()->nisn != null)
                    <div class="form-group">
                        <label for="nisn" class="col-form-label">NISN</label>
                        <input name="nisn" type="text" value="{{$user['nisn']}}" class="form-control" id="nisn"
                               placeholder="NISN">
                    </div>
                    @endif
                    {{-- <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="col-form-label">City</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState" class="col-form-label">State</label>
                            <select id="inputState" class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip" class="col-form-label">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                    </div> --}}

                    {{-- <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox"> Check me out
                            </label>
                        </div>
                    </div> --}}
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
              
           </div>
       </div>
        @endif
        @if (Auth::user()->id == 1 || Auth::user()->role == 'Petugas')
        <div class="container-fluid animatedParent animateOnce my-3">
            <div class="animated fadeInUpShort">
           <div class="tab-content" id="v-pills-tabContent">
               <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                   <div class="row">
                       <div class="col-md-3">
                           <div class="card ">

                               <ul class="list-group list-group-flush">
                                   <li class="list-group-item"><i class="icon icon-mobile text-primary"></i><strong class="s-12">Telepon/Hp</strong> <span class="float-right s-12">{{ Auth::user()->no_hp }}</span></li>
                                   <li class="list-group-item"><i class="icon icon-mail text-success"></i><strong class="s-12">Email</strong> <span class="float-right s-12">{{ Auth::user()->email }}</span></li>
                                   @if (Auth::user()->nip != null || Auth::user()->nisn == null)

                                   <li class="list-group-item"><i class="icon icon-address-card-o text-warning"></i><strong class="s-12">NIP</strong> <span class="float-right s-12">{{ Auth::user()->nip }}</span></li>
                                   
                                   @elseif(Auth::user()->nip == null || Auth::user()->nisn != null)

                                   <li class="list-group-item"><i class="icon icon-address-card-o text-warning"></i><strong class="s-12">NISN</strong> <span class="float-right s-12">{{ Auth::user()->nisn }}</span></li>
                                   
                                   @endif
                                   <li class="list-group-item"><i class="icon icon-address-book text-dark"></i><strong class="s-12">Alamat</strong> <span class="float-right s-12">{{ Auth::user()->alamat }}</span></li>

                                   @if (Auth::user()->id == 1)
                                   <li class="list-group-item"><i class="icon icon-address-book pink-text"></i><strong class="s-12">Kedudukan</strong> <span class="float-right s-12">Admin</span></li>
                                   @elseif(Auth::user()->role == 'Petugas')
                                   <li class="list-group-item"><i class="icon icon-address-book pink-text"></i><strong class="s-12">Kedudukan</strong> <span class="float-right s-12">Panitia</span></li>
                                   @elseif(Auth::user()->role == 'Pengunjung' || Auth::user()->id != 1)
                                   <li class="list-group-item"><i class="icon icon-user pink-text"></i><strong class="s-12">Kedudukan</strong> <span class="float-right s-12">Pengunjung</span></li>
                                   @endif
                                   
                                
                               </ul>
                           </div>
                           @php
                               $users = DB::table('users')->count();
                           @endphp
                           <div class="card mt-3 mb-3">
                            <div class="card">
                                <div class="card-header white">Statistik </div>
                                <div class="card-body p-0">
                                    <div class="bg-primary text-white lighten-2">
                                        <div class="pt-5 pb-2 pl-5 pr-5">
                                            <h5 class="font-weight-normal s-14">Pengguna</h5>
                                            <span class="s-48 font-weight-lighter text-primary">
                                                <small></small> {{$users}}</span>
                                            <div class="float-right">
                                                <span class="icon icon-chart s-48"></span>
                                            </div>
                                        </div>
                                        <canvas width="378" height="94" data-chart="spark" data-chart-type="bar"
                                                data-dataset="[[28,68,41,43,96,45,100,28,68,41,43,96,45,100]]"
                                                data-labels="['a','b','c','d','e','f','g','h','i','j','k','l','m','n']">
                                        </canvas>
                                    </div>
                                </div>
                            </div>

                              

                           </div>

                       </div>
                       <div class="col-md-9">
                       

                           <div class="row my-3">
                               <!-- bar charts group -->
                               <div class="col-md-12">
                                   <div class="card">
                                       <div class="card-header white">
                                           
                                       </div>
                                       <div class="card-body">
                                        <canvas id="shadowChart" width="600" height="400" style="background-color:#fff"></canvas>
                    <script>
                        $(function(){
                            'use strict';
                            let draw = Chart.controllers.line.prototype.draw;
                            Chart.controllers.line = Chart.controllers.line.extend({
                                draw: function() {
                                    draw.apply(this, arguments);
                                    let ctx = this.chart.chart.ctx;
                                    let _stroke = ctx.stroke;
                                    ctx.stroke = function() {
                                        ctx.save();
                                        ctx.shadowColor = '#E56590';
                                        ctx.shadowBlur = 10;
                                        ctx.shadowOffsetX = 0;
                                        ctx.shadowOffsetY = 4;
                                        _stroke.apply(this, arguments)
                                        ctx.restore();
                                    }
                                }
                            });

                            let ctx = document.getElementById("shadowChart").getContext('2d');
                            let myChart = new Chart(ctx, {
                                type: 'line',
                                data: {
                                    labels: ["Diterima", "Proses", "Ditolak"],
                                    datasets: [{
                                        label: "PPDB SMKN 2 Kec.Guguak",
                                        data: [ <?php 
                                                                $Diterima = App\Daftar::whereIn('status', ['diterima'])->count();
                                                                echo $Diterima;
                                                                ?>,
                                                                 <?php 
                                                                $proses = App\Daftar::whereIn('status', ['proses'])->count();
                                                                echo $proses;
                                                                ?>,
                                                                 <?php 
                                                                $Ditolak = App\Daftar::whereIn('status', ['ditolak'])->count();
                                                                echo $Ditolak;
                                                                ?>],
                                        borderColor: '#ffb88c',
                                        pointBackgroundColor: "#fff",
                                        pointBorderColor: "#ffb88c",
                                        pointHoverBackgroundColor: "#ffb88c",
                                        pointHoverBorderColor: "#fff",
                                        pointRadius: 4,
                                        pointHoverRadius: 4,
                                        fill: false
                                    }]
                                }
                            });
                        });
                    </script>
                                       </div>
                                   </div>
                               </div>
                               <!-- /bar charts group -->


                           </div>
                           
                       </div>
                   </div>
               </div>
               
               <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <form method="POST" action="{{route('user.update')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="namalengkap" class="col-form-label">Nama Lengkap <sup>*</sup></label>
                            <input name="nama_lengkap" type="text" required value="{{$user['nama_lengkap']}}" class="form-control" id="namalengkap"
                                   placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4" class="col-form-label">Nama Panggilan<sup>*</sup></label>
                            <input name="nama_panggilan" type="text" required value="{{$user['nama_panggilan']}}" class="form-control" id="inputPassword4"
                                   placeholder="Password">
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <label for="jk">Jenis Kelamin<sup>*</sup></label>
                        <select class="form-control" id="jk">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                            
                        </select>
                    </div> --}}
                    <div class="form-group">
                        <label for="tanggal" class="col-form-label">Tanggal Lahir<sup>*</sup></label>
                        <input name="tgl_lahir" required type="date" value="{{$user['tgl_lahir']}}" class="form-control" id="tanggal"
                               placeholder="1234 Main St">
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="col-form-label">Alamat<sup>*</sup></label>
                        <input name="alamat" required type="text" value="{{$user['alamat']}}" class="form-control" id="alamat"
                               placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <label for="no_hp" class="col-form-label">Telepon/Hp<sup>*</sup></label>
                        <input name="no_hp" required type="text" value="{{$user['no_hp']}}" class="form-control" id="no_hp"
                               placeholder="Telepon/Hp">
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email<sup>*</sup></label>
                        <input name="email" required type="email" value="{{$user['email']}}" class="form-control" id="email"
                               placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label for="foto" class="col-form-label">foto</label>
                        <input name="image" value="{{$user['image']}}" type="file"class="form-control" id="foto"
                               placeholder="foto">
                    </div>
                    

                    <div class="form-group">
                        <label for="asal_sekolah" class="col-form-label">Sekolah Asal<sup>*</sup></label>
                        <input name="asal_sekolah" required type="text" value="{{$user['asal_sekolah']}}" class="form-control" id="asal_sekolah"
                               placeholder="Sekolah Asal">
                    </div>

                    
                    @if (Auth::user()->nip != null || Auth::user()->nisn == null)
                    <div class="form-group">
                        <label for="nip" class="col-form-label">NIP</label>
                        <input name="nip" type="text" value="{{$user['nip']}}" class="form-control" id="nip"
                               placeholder="NIP">
                    </div>
                    @elseif(Auth::user()->nip == null || Auth::user()->nisn != null)
                    <div class="form-group">
                        <label for="nisn" class="col-form-label">NISN</label>
                        <input name="nisn" type="text" value="{{$user['nisn']}}" class="form-control" id="nisn"
                               placeholder="NISN">
                    </div>
                    @endif
                    {{-- <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity" class="col-form-label">City</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState" class="col-form-label">State</label>
                            <select id="inputState" class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip" class="col-form-label">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                    </div> --}}

                    {{-- <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox"> Check me out
                            </label>
                        </div>
                    </div> --}}
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
              
           </div>
       </div>
        @endif
        
        </div>

    </div>
</div>
@endsection