@extends('layouts.default')
@section('content')
<div class="page has-sidebar-left bg-light height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row">
                <div class="col">
                    <h3 class="my-3">
                        <i class="icon icon icon-user"></i>
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
                                <table id="example2" class="table table-bordered table-hover data-tables"
                               data-options='{
                                    "scrollY": true,
                                    "scrollX": true
                                }'>
                            <thead>
                            <tr>
                                <th colspan="27" style="background-color:#85C1E9; color:white;">Data Akun PPDB SMKN 2 Kec.Guguak</th>
                            </tr>
                            
                            <tr>
                                
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                                <th>Action Akun</th>
                                
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
                                                
                                            <td> <a href="/Admin/{{$db['id']}}/edit">
                                                <i class="icon-eye"></i>
                                                </a> &nbsp;
                                                <a href="/Admin/{{$db['id']}}/delete">
                                                    <i class="icon-close2 text-danger-o text-danger"></i>
                                                </a>
                                            </td>

                                              
                                              <td>
                                                <input type="checkbox" data-id="{{ $db->id }}" name="status" class="js-switch" {{ $db->status == 'a' ? 'checked' : '' }}>
                                                
                                             </td>
                                            </tr>
                                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                                <th>Action Akun</th>
                            </tr>
                            </tfoot>
                        </table>
                        {{-- <div class="card-footer white">
                            <a href="#" class="btn btn-outline-primary btn-xs">Tambah Data</a>
                            <a href="#" class="btn btn-outline-danger btn-xs">Delete All</a>
                        </div> --}}
                            </div>
                           </div>
                      </div>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection