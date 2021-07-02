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
                  </ul>
              </div>

            </div>
        </header>

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
                                
                               </ul>
                           </div>
                         

                       </div>
                       <div class="col-md-9">
                        
                           <div class="row">
                               
                           </div>

                           <div class="row my-3">
                               <!-- bar charts group -->
                               <div class="col-md-12">
                                   <div class="card">
                                       <div class="card-header white">
                                           <h6>Penerimaan Peserta Didik Baru SMKN2 Kec.Guguak <small>Sessions</small></h6>
                                       </div>
                                       <div class="card my-3 no-b">
                                        <div class="card-header white m-3">
                                            <h6>Data Penerimaan Peserta Didik Baru</h6>
                                             SMKN 2 Kec.Guguak
                                        </div>
                                        <div class="card-body">
                                            <div class="card-title">Tabel</div>
                                           
                                                
                                            
                                            <form action="/siswa/cari/nama" method="GET">
                               
                               

                                                <div class="form-group-inner input-with-success">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                            <label class="login2 pull-right pull-right-pro">Temukan Nama</label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-select-list">
                                                                <input type="text" name="cari" required class="form-control" placeholder="cari .." value="{{ old('cari') }}">
                                                               <br>
                                                                <input type="submit" class="btn btn-primary" value="Lihat">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            
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
</div
@endsection