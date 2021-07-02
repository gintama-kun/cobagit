@extends('layouts.dash')

@section('content')
    
<div class="col-lg-12">
    <div class="card">
        <br>
        <div class="card-header" align="center">
            <strong class="card-title" > Data Pendaftaran Casis</strong>
        </div>
        <br><br>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
               
                <br><br>
            </div>
            <br><br>
        <div class="table-stats order-table ov-h">
            <table class="table ">
                <thead>
                    <tr>
                        <th align="center">Nama Lengkap</th>
                        <th align="center">Nama Pangilan</th>
                        <th align="center">Kode Pendaftaran</th>
                        <th align="center">Foto</th>
                        <th align="center">Tanggal Lahir</th>
                        <th align="center">Alamat</th>
                        <th align="center">Asal Sekolah</th>
                        <th align="center">Rata - Rata</th>
                        <th align="center">Pilihan 1</th>
                        <th align="center">Pilihan 2</th>
                        <th align="center">No Telepon/Hp</th>
                        <th align="center">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $siswa)
                        
                   
                    <tr>
                        <td>{{$siswa['nama_lengkap']}}</td>
                        <td>{{$siswa['nama_panggilan']}}</td>
                        <td>{{$siswa['kode']}}</td>
                        <td> <img src="{{url('images/user',$siswa['image'])}}" alt="" style="width:60px;height:80px" ></td>
                        <td>{{$siswa['tgl_lahir']}}</td>
                        <td>{{$siswa['alamat']}}</td>
                        <td>{{$siswa['asal_sekolah']}}</td>
                        <td>{{$siswa['rata']}}</td>
                        <td>{{$siswa['pilihan1']}}</td>
                        <td>{{$siswa['pilihan2']}}</td>
                        <td>{{$siswa['no_telepon']}}</td>
                        <td align="center"> 
                            
                                @if( $siswa['status'] == "diterima" )
                                <a href="#" class="btn btn-primary disabled"><i class="glyphicon glyphicon-edit fa fa-check"></i> </a></td>
                                  @elseif($siswa['status'] == "ditolak")
                                  <a href="#" class="btn btn-danger disabled"><i class="glyphicon glyphicon-edit fa fa-times"></i> </a></td>
                                  @else
                                  <a href="/datas/petugas/konfirmasi/{{ $siswa['id'] }}{{session()->forget('status')}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit fa fa-check"></i> Terima </a>
                                  <a href="/datas/tolak/{{ $siswa['id'] }}{{session()->forget('status')}}" class="btn btn-danger"><i class="glyphicon glyphicon-edit fa fa-times"></i> Tolak </a></td>
                                  @endif

                             
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div> 
    </div>
</div>

@endsection