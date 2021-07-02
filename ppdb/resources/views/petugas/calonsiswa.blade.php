@extends('layouts.dash')

@section('content')
<style>

input{
    background: transparent;
    border:none;
}

</style>
@include('layouts.mobile_menu')
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Data Pendaftaran Siswa</h4>
                    <div class="add-product">
                        <a href="#">Add Library</a>
                    </div>
                    <div class="asset-inner">
                        <table>
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
                            </tr>
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
                            
                                    @if( $siswa['status'] == "diterima" )
                                    <a href="#" class="btn btn-primary disabled"><i class="glyphicon glyphicon-edit fa fa-check"></i> </a></td>
                                      @elseif($siswa['status'] == "ditolak")
                                      <a href="#" class="btn btn-danger disabled"><i class="glyphicon glyphicon-edit fa fa-times"></i> </a></td>
                                      @else
                                      <a href="/datas/petugas/konfirmasi/{{ $siswa['id'] }}{{session()->forget('status')}}"  class="btn btn-primary"><i class="glyphicon glyphicon-edit fa fa-check" ></i> Terima </a>
                                      <a href="/datas/tolak/{{ $siswa['id'] }}{{session()->forget('status')}}" class="btn btn-danger"><i class="glyphicon glyphicon-edit fa fa-times"></i> Tolak </a>
                                      @endif
                        
                            </td>
                            <td>
                                <form action="/StatusCasis/{{ $siswa['id'] }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    {{ method_field('PUT') }}
                                    @if ($siswa['rata'] >= 85.00 && $siswa['rata'] <= 95.00 )
                                
                                    @if ($siswa['pilihan1']=='RPL')
                                    <input type="text" readonly name="jurusan"  value="RPL" >
                                        
                                    @elseif ($siswa['pilihan1']=='TKJ')
                                    <input type="text" readonly name="jurusan"  value="TKJ" >
                                        
                                    @elseif ($siswa['pilihan1']=='Multimedia')
                                    <input type="text" readonly name="jurusan"  value="Multimedia" >
                                           
                                    @endif     
                                @elseif ($siswa['rata'] >= 75.00 && $siswa['rata'] <= 84.00 )
    
                                    @if ($siswa['pilihan1']=='OTKP')
                                    <input type="text" readonly name="jurusan"  value="OTKP" >
                                    
                                    @elseif ($siswa['pilihan1']=='AKT')
                                    <input type="text" readonly name="jurusan"  value="AKT" >
                                    
                                        <p> AKT </p>

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
                        <td>
                            @if ($siswa['jurusan'] != null)
                        <br>
                        <a href="#" class="btn btn-success disabled  test"><i class="glyphicon glyphicon-edit fa fa-check"></i> </a></td>
                        @else
                        <input type="submit" class="btn btn-success float-right" value="Simpan">
                        @endif
                        
                        
                    </form>
                            </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="custom-pagination">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection