@extends('layouts.default')
@section('content')
<div class="page has-sidebar-left bg-light height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row">
                <div class="col">
                    <h3 class="my-3">
                        <i class="icon icon-notifications_active"></i>
                        Akun PPDB SMKN 2 Kec.Guguak <span class="s-14"></span>
                    </h3>
                </div>
            </div>
        </div>
    </header>

    <div class="content-wrapper animatedParent animateOnce">
        <div class="container">
            <section class="paper-card">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Data User</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="card">
                                    <div class="card-body b-b">
                                       
                                        
                                        <form action="/Admin/pengguna/update/{{ $pengguna->id }}" method="post" class="form-material">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}
                                            <div class="body">
                                                
                                               
                                                
                                                
                                                <div class="row clearfix">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                           
                                                            @if ($pengguna->jenis_kelamin == 'Perempuan' && $pengguna->image == null)
                                                                <img width="10%" height="10%"  class="user_avatar" src="{{asset ('new/woman.png')}}" alt=""  />
                                                            @elseif($pengguna->jenis_kelamin == 'Laki-Laki' && $pengguna->image == null)
                                                                <img width="10%" height="10%"  class="user_avatar" src="{{asset ('new/man.png')}}" alt=""  />
                                                            @elseif($pengguna->image != null)
                                                                <img width="10%" height="10%"  class="user_avatar" src="{{url('images/user',$pengguna->image)}}" alt="" />
                                                            @endif
                                                              
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                         
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                           
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                                <input type="text" class="form-control" value="{{ $pengguna->nama_lengkap}}" placeholder="col-sm-4"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" value="{{ $pengguna->nama_panggilan}}" placeholder="col-sm-4"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                                
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" value="{{ $pengguna->tgl_lahir}}" placeholder="col-sm-4"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" value="{{ $pengguna->jenis_kelamin}}" placeholder="col-sm-4"/>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <div class="card-body b-b">
                                                                <div class="card-title">Role</div>
                                                                <select name="role" class="custom-select select2" required>
                                                                    <option value="">Pilih</option>
                                                                    <option value="Petugas" @if ( $pengguna->role == 'Petugas' )selected='selected' @endif>Petugas</option>
                                                                    <option value="Pengunjung" @if ( $pengguna->role == 'Pengunjung' )selected='selected' @endif>Pengunjung</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <a href="/Admin/DataAkun">
                                                                    <i class="icon-arrow_back text-danger-o text-danger"></i>
                                                                   
                                                                </a>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                           
                                                            <input type="submit" class="btn btn-success" value="Simpan">
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                            <!-- #END# Input -->
                                        </form>
                                    </div>
                                </div>
                            
                            </div>
                           </div>
                      </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection