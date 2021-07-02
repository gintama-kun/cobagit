@extends('layouts.default')
@section('content')
<div class="page has-sidebar-left bg-light height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row">
                <div class="col">
                    <h3 class="my-3">
                        <i class="icon icon-school"></i>
                        Calon Siswa <span class="s-14"> <a class="btn btn-outline-primary btn-xs"
                                                            href="#"
                                                            target="_blank"> Tp :2020/2021</a> </span>
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
                                <h3 class="box-title">Data Calon Siswa</h3>
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
                                <th colspan="27" style="background-color:#85C1E9; color:white;">Data Calon Siswa SMKN 2 Kec.Guguak</th>
                            </tr>
                            
                            <tr>
                                
                                <th>Nama Lengkap</th>
                                <th>Nama Pangilan</th>
                                <th>Kode Pendaftaran</th>
                                <th>Foto</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Asal Sekolah</th>
                                <th>Rata - Rata</th>
                                <th>Pilihan 1</th>
                                <th>Pilihan 2</th>
                                <th>No Telepon/Hp</th>
                                <th>Tindakan</th>
                                <th>Status Calon Siswa</th>
                                {{-- <th>
                                    Jurusan
                                </th> --}}
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $siswa)
                           
                                <tr>
                                    
                                    <td>{{$siswa['nama_lengkap']}}</td>
                                    <td>{{$siswa['nama_panggilan']}}</td>
                                    <td>{{$siswa['kode']}}</td>
                                    <td><img src="{{url('images/user',$siswa['image'])}}" alt="" style="width:60px;height:80px" ></td>
                                    <td>{{$siswa['tgl_lahir']}}</td>
                                    <td>{{$siswa['alamat']}}</td>
                                    <td>{{$siswa['asal_sekolah']}}</td>
                                    <td> @if ($siswa['rata'] >= 75.00)
                                        <p style="color:green"><b>{{$siswa['rata']}}</b></p>
                                    @elseif($siswa['rata'] <= 74.00)
                                    <p style="color:red"><b>{{$siswa['rata']}}</b></p>
                                    @endif</td>
                                    <td>{{$siswa['pilihan1']}}</td>
                                    <td>{{$siswa['pilihan2']}}</td>
                                    <td>{{$siswa['no_telepon']}}</td>
                                    <td align="center"> 
                                        <form action="/StatusCasis/{{ $siswa['id'] }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            {{ method_field('PUT') }}
                                        @if( $siswa['status'] == "diterima" )
                                        <a href="#" class="btn btn-primary disabled"><i class="glyphicon glyphicon-edit fa fa-check"></i> </a></td>
                                          @elseif($siswa['status'] == "ditolak")
                                          <a href="#" class="btn btn-danger disabled"><i class="glyphicon glyphicon-edit fa fa-times"></i> </a></td>
                                          @else
                                          @if ($siswa['jurusan'] != null)
                                          <br>
                                          <a href="#" class="btn btn-success disabled  test"><i class="glyphicon glyphicon-edit fa fa-check"></i> </a></td>
                                          @else
                                          <input type="submit" class="btn btn-success float-right" value="Terima">
                                          @endif
                                          <a href="/datas/tolak/{{ $siswa['id'] }}{{session()->forget('status')}}" class="btn btn-danger"><i class="glyphicon glyphicon-edit fa fa-times"></i> Tolak </a>
                                          @endif
                            
                                    </td>
                                    <td>
                                            
                                            @if ($siswa['rata'] >= 85.00 && $siswa['rata'] <= 95.00 )
                                            
                                                @if ($siswa['pilihan1']=='RPL')
                                                <input type="text" readonly name="jurusan"  value="RPL" >
                                                    
                                                @elseif ($siswa['pilihan1']=='TKJ')
                                                <input type="text" readonly name="jurusan"  value="TKJ" >
                                                    
                                                @elseif ($siswa['pilihan1']=='Multimedia')
                                                <input type="text" readonly name="jurusan"  value="Multimedia" >
                                                @elseif ($siswa['pilihan1']=='AKT')
                                                <input type="text" readonly name="jurusan"  value="Tidak memenuhi Kriteria Jurusan" >
                                                @elseif ($siswa['pilihan1']=='OTKP')
                                                <input type="text" readonly name="jurusan"  value="Tidak memenuhi Kriteria Jurusan" >
                                                @endif     
                                            @elseif ($siswa['rata'] >= 75.00 && $siswa['rata'] <= 84.00 )
                
                                                @if ($siswa['pilihan1']=='OTKP')
                                                <input type="text" readonly name="jurusan"  value="OTKP" >
                                                
                                                @elseif ($siswa['pilihan1']=='AKT')
                                                <input type="text" readonly name="jurusan"  value="AKT" >
                                                
            
                                            @elseif($siswa['rata'] >= 85.00 && $siswa['rata'] <= 95.00)
            
                                                @if ($siswa['pilihan2']=='RPL')
                                                <input type="text" readonly name="jurusan"  value="RPL" >
            
                                                @elseif ($siswa['pilihan2']=='TKJ')
                                                <input type="text" readonly name="jurusan"  value="TKJ" >
            
                                                @elseif ($siswa['pilihan2']=='Multimedia')
                                                <input type="text" readonly name="jurusan"  value="Multimedia" >
                                                @endif
            
                                            @elseif($siswa['rata'] >= 75.00 && $siswa['rata'] <= 84.00)
            
                                                @if ($siswa['pilihan2']=='OTKP')
                                                <input type="text" readonly name="jurusan"  value="OTKP" >
                                                @elseif ($siswa['pilihan2']=='AKT')
                                                <input type="text" readonly name="jurusan"  value="AKT" >
                                                @elseif ($siswa['pilihan2']=='TKJ' ||$siswa['pilihan2']=='RPL' || $siswa['pilihan2']=='Multimedia')
                                                <input type="text" readonly name="jurusan"  value="Tidak Memenuhi Kriteria Jurusan" >
                                                
                                                @endif    
            
                                            @endif
            
            
                                        @elseif($siswa['rata'] <= 74.00)
                                        <input type="text" readonly name="jurusan"  value="tidak Memenuhi Kriteria Sekolah" >
                                        <br><br>              
                                        @endif
        
                                
        
                                    
                            
                                    </td>
                                    {{-- <td>
                                        @if ($siswa['jurusan'] != null)
                                        <br>
                                        <a href="#" class="btn btn-success disabled  test"><i class="glyphicon glyphicon-edit fa fa-check"></i> </a></td>
                                        @else
                                        <input type="submit" class="btn btn-success float-right" value="Simpan">
                                        @endif
                                        
                                            
                                        </form>
                                    </td> --}}
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                
                                <th>Nama Lengkap</th>
                                <th>Nama Pangilan</th>
                                <th>Kode Pendaftaran</th>
                                <th>Foto</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Asal Sekolah</th>
                                <th>Rata - Rata</th>
                                <th>Pilihan 1</th>
                                <th>Pilihan 2</th>
                                <th>No Telepon/Hp</th>
                                <th>Tindakan</th>
                                <th>Status Calon Siswa</th>
                                {{-- <th>Jurusan</th> --}}
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