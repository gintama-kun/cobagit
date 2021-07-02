@extends('layouts.default')
@section('content')
<div class="page has-sidebar-left bg-light height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row">
                <div class="col">
                    <h3 class="my-3">
                        <i class="icon icon-school"></i>
                        Siswa <span class="s-14"> <a class="btn btn-outline-primary btn-xs"
                                                            href="#"
                                                            target="_blank"> Tp :2020/2021</a> </span>
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            
            <a class="btn-fab absolute fab-right-bottom btn-primary" href="/Admin/TambahSiswa">
                <i class="icon icon-person_add"></i>
            </a>
        </div>
    </header>

    <div class="content-wrapper animatedParent animateOnce">
        <div class="container">
            <section class="paper-card">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Data Siswa</h3>
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
                                <th colspan="27" style="background-color:#85C1E9; color:white;">Data Siswa SMKN 2 Kec.Guguak</th>
                            </tr>
                            
                            <tr>
                                
                                <th>No</th>
                                <th>Kode Pendaftaran</th>
                                <th>Nama Lengkap</th>
                                <th>Nama Panggilan</th>
                                <th>Jenis Kelamin</th>
                                <th>NISN</th>
                                <th>Agama</th>
                                <th>Ayah</th>
                                <th>Pendidikan Ayah</th>
                                <th>Pekerjaan Ayah</th>
                                <th>Ibu</th>
                                <th>Pendidikan Ibu</th>
                                <th>Pekerjaan Ibu</th>
                                <th>Wali</th>
                                <th>Pendidikan Wali</th>
                                <th>Pekerjaan Wali</th>
                                <th>Foto</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Sekolah Asal</th>
                                <th>Rata-rata</th>
                                <th>Pilihan 1</th>
                                <th>Pilihan 2</th>
                                <th>Jurusan</th>
                                <th>Telepon/Hp</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($formulirs as $siswa)
                                                
                                <tr>
                                    <td>{{$siswa->id}}</td>
                                    <td>{{$siswa->kode}}</td>
                                    <td>{{$siswa->nama_lengkap}}</td>
                                    <td>{{$siswa->nama_panggilan}}</td>
                                    <td>{{$siswa->jenis_kelamin}}</td>
                                    <td>{{$siswa->nisn}}</td>
                                    <td>{{$siswa->agama}}</td>

                                    <td>{{$siswa->ayah}}</td>
                                    <td>{{$siswa->pendidikan_ayah}}</td>
                                    <td>{{$siswa->Pekerjaan_ayah}}</td>

                                    <td>{{$siswa->ibu}}</td>
                                    <td>{{$siswa->pendidikan_ibu}}</td>
                                    <td>{{$siswa->Pekerjaan_ibu}}</td>

                                    <td>{{$siswa->wali}}</td>
                                    <td>{{$siswa->pendidikan_wali}}</td>
                                    <td>{{$siswa->Pekerjaan_wali}}</td>
                                   
                                    <td> <img src="{{url('images/user',$siswa->image)}}" alt="" style="width:60px;height:80px" ></td>
                                    <td>{{$siswa->tgl_lahir}}</td>
                                    <td>{{$siswa->alamat}}</td>
                                    <td>{{$siswa->asal_sekolah}}</td>
                                    <td>{{$siswa->rata}}</td>
                                    <td>{{$siswa->pilihan1}}</td>
                                    <td>{{$siswa->pilihan2}}</td>
                                    <td>{{$siswa->jurusan}}</td>
                                    <td>{{$siswa->no_telepon}}</td>
                                    <td>{{$siswa->status}}</td>
                                    <td> 
                                    
                
                                        <a href="/admin/datasis/delete/{{$siswa['id']}}">
                                            <i class="icon-close2 text-danger-o text-danger"></i>
                                        </a>
                                   
                                    
                                     </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Kode Pendaftaran</th>
                                <th>Nama Lengkap</th>
                                <th>Nama Panggilan</th>
                                <th>Jenis Kelamin</th>
                                <th>NISN</th>
                                <th>Agama</th>
                                <th>Ayah</th>
                                <th>Pendidikan Ayah</th>
                                <th>Pekerjaan Ayah</th>
                                <th>Ibu</th>
                                <th>Pendidikan Ibu</th>
                                <th>Pekerjaan Ibu</th>
                                <th>Wali</th>
                                <th>Pendidikan Wali</th>
                                <th>Pekerjaan Wali</th>
                                <th>Fo0to</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Sekolah Asal</th>
                                <th>Rata-rata</th>
                                <th>Pilihan 1</th>
                                <th>Pilihan 2</th>
                                <th>Jurusan</th>
                                <th>Telepon/Hp</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                        <div class="card-footer white">
                            <a href="/data/export_excel" class="btn btn-outline-primary btn-xs">Export Data</a>
                            
                            <button type="button" class="btn btn-outline-danger btn-xs" data-toggle="modal" data-target="#importExcel">
                                IMPORT Data
                              </button>
                        </div>
                        <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <form method="post" action="/data/import_excel" enctype="multipart/form-data">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                                  </div>
                                  <div class="modal-body">
                      
                                    {{ csrf_field() }}
                      
                                    <label>Pilih file excel</label>
                                    <div class="form-group">
                                      <input type="file" name="file" required="required">
                                    </div>
                      
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Import</button>
                                  </div>
                                </div>
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