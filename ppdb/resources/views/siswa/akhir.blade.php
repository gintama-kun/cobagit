@extends('layouts.default')
@section('content')
@foreach ($formulirs as $p)
<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-box"></i>
                        Hasil
                    </h4>
                </div>
            </div>
            <div class="row">
                <ul class="nav responsive-tab nav-material nav-material-white" id="v-pills-tab">
                    <li>
                        <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1">
                            <i class="icon icon-home2"></i>Home</a>
                    </li>
                    
                </ul>
                
            </div>
        </div>
    </header>
    <div class="container-fluid relative animatedParent animateOnce">
        <div class="tab-content pb-3" id="v-pills-tabContent">
            <!--Today Tab Start-->
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-1">
                <div class="row my-3">
                    <div class="col-md-3">
                        
                    </div>
                      <div class="col-md-3">
                        
                    </div>
                    <div class="col-md-3">
                        
                    </div>
                    <div class="col-md-3">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white p-5 r-5">
                            <div class="card-title">
                                
                            </div>
                            

                                <div class="box-body">
                                    <table id="example2" class="table table-bordered table-hover "
                                   data-options='{
                                        "scrollY": true,
                                        "scrollX": true
                                    }'>
                                    <tr>
                                        <th colspan="27"><img src="{{asset ('new/cop.png')}}" width="100%" alt=""></th>
                                    </tr>
                                    @if ($p['status']== 'diterima')
                                    <tr>
                                        <th colspan="27"><h2 align="center"><b style="color:red;">Saudara : {{$p['nama_lengkap']}} telah terdaftar sebagai calon
                                            Siswa</b></h2>
                                            <h3 style="color:red;" align="center"></b>SMKN 2 Kec.Guguak</b></h3>
                                            <h5>Cetak Bukti Pendaftaran Ini sebagai syarat untuk daftar ulang <br>
                                            <ol>
                                                <li> Silahkan Melengkapi Syarat-Syarat Berikut :</li>
                                                <ul>
                                                    <li>(a). Fotocopy Nilai Rapor Terakhir atau Surat Keterangan Lulus (SKL) dari Kepala Sekolah 2 lembar</li>
                                                    <li>(b). Pas Foto 3X4 3 Lembar</li>
                                                    <li>(c). Foto copy KTP Berwarna dan Kartu Keluarga (KK)</li>
                                                </ul>
                                                <li>Menunjukkan Bukti Pendaftaran yang telah dicetak</li>
                                                <li> Semua Persyaratan diatas diserahkan paling lambat Hari/Tanggal : Rabu / 5 Agustus 2020</li>
                                            </ol>
                                            
                                            <i style="color:orange">Alamat Sekolah : Jl. Tuanku Nan Biru - Ampang Gadang , VII Koto Talago Kec. Guguak, Vii Koto Talago, Guguak, Kabupaten Lima Puluh Kota, Sumatera Barat 26253, Telp. (0752) 97318, Email: info@smkn2guguak.sch.id</i>
                                            <br>Informasi : Waktu pengantaran berkas persyaratan tunggu informasi resmi pada Website atau Media Sosial
                                            Resmi dari SMKN 2 Kec.Guguak </h5>
                                           
                                            </th>
                                    </tr>
                                    <tr><th>
                                        
                                            
                                            <h2 align="center"> Hasil Penerimaan Peserta Didik Baru <br> SMKN 2 Kec.Guguak</h2>
                                        <h5  style="margin: 6%"> Berdasarkan Seleksi yang saudara lakukan pada tanggal {{$p['updated_at']}} WIB. Kami panitia Penerimaan Peserta Didik Baru Tahun Pelajaran 2020/2021
                                            Saudara yang bertanda tangan dibawah ini:<br>
                                               <table width="70%">
                                                <tr>
                                                    <td>Nama Lengkap</td>
                                                    <td>{{$p['nama_lengkap']}}</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Nama Panggilan</td>
                                                    <td>{{$p['nama_panggilan']}}</td>
                                                  </tr>
                                                  <tr>
                                                      <td>NISN</td>
                                                      <td>{{$p['nisn']}}</td>
                                                  </tr>
                                                  <tr>
                                                      <td>Sekolah Asal</td>
                                                      <td>{{$p['asal_sekolah']}}</td>
                                                  </tr>
                                                  <tr>
                                                      <td>Rata - Rata UN</td>
                                                      <td>{{$p['rata']}}</td>
                                                  </tr>
                                                  <tr>
                                                      <td>Pilihan Pertama</td>
                                                      <td>{{$p['pilihan1']}}</td>
                                                  </tr>
                                                  <tr>
                                                      <td>Pilihan Kedua</td>
                                                      <td>{{$p['pilihan2']}}</td>
                                                  </tr>
                                                  
                                               </table>
                                               
                                               Maka dengan ini bagi nama yang telah tercantum diatas, kami menyatakan bahwa saudara <p style="color:green"><b> {{$p['status']}}</b>.</p>Dengan penempatan jurusan <i>{{$p['jurusan']}}</i></h5>
                                               @elseif ($p['status']== 'ditolak')
                                               <tr>
                                                <th colspan="27"><h2 align="center"><b style="color:red;">Saudara : {{$p['nama_lengkap']}} telah terdaftar sebagai calon
                                                    Siswa</b></h2>
                                                    <h3 style="color:red;" align="center"></b>SMKN 2 Kec.Guguak</b></h3>
                                                    <h5>Cetak Bukti Pendaftaran Ini sebagai syarat untuk daftar ulang <br>
                                                    <ol>
                                                        <li> Silahkan Melengkapi Syarat-Syarat Berikut :</li>
                                                        <ul>
                                                            <li>(a). Fotocopy Nilai Rapor Terakhir atau Surat Keterangan Lulus (SKL) dari Kepala Sekolah 2 lembar</li>
                                                            <li>(b). Pas Foto 3X4 3 Lembar</li>
                                                            <li>(c). Foto copy KTP Berwarna dan Kartu Keluarga (KK)</li>
                                                        </ul>
                                                        <li>Menunjukkan Bukti Pendaftaran yang telah dicetak</li>
                                                        <li> Semua Persyaratan diatas diserahkan paling lambat Hari/Tanggal : Rabu / 5 Agustus 2020</li>
                                                    </ol>
                                                    
                                                    <i style="color:orange">Alamat Sekolah : Jl. Tuanku Nan Biru - Ampang Gadang , VII Koto Talago Kec. Guguak, Vii Koto Talago, Guguak, Kabupaten Lima Puluh Kota, Sumatera Barat 26253, Telp. (0752) 97318, Email: info@smkn2guguak.sch.id</i>
                                                    <br>Informasi : Waktu pengantaran berkas persyaratan tunggu informasi resmi pada Website atau Media Sosial
                                                    Resmi dari SMKN 2 Kec.Guguak </h5>
                                                   
                                                    </th>
                                            </tr>
                                            <tr><th>
                                                
                                                    
                                                    <h2 align="center"> Hasil Penerimaan Peserta Didik Baru <br> SMKN 2 Kec.Guguak</h2>
                                                <h5  style="margin: 6%"> Berdasarkan Seleksi yang saudara lakukan pada tanggal {{$p['updated_at']}} WIB. Kami panitia Penerimaan Peserta Didik Baru Tahun Pelajaran 2020/2021
                                                    Saudara yang bertanda tangan dibawah ini:<br>
                                               <table width="70%">
                                                <tr>
                                                    <td>Nama Lengkap</td>
                                                    <td>{{$p['nama_lengkap']}}</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Nama Panggilan</td>
                                                    <td>{{$p['nama_panggilan']}}</td>
                                                  </tr>
                                                  <tr>
                                                      <td>NISN</td>
                                                      <td>{{$p['nisn']}}</td>
                                                  </tr>
                                                  <tr>
                                                      <td>Sekolah Asal</td>
                                                      <td>{{$p['asal_sekolah']}}</td>
                                                  </tr>
                                                  <tr>
                                                      <td>Rata - Rata UN</td>
                                                      <td>{{$p['rata']}}</td>
                                                  </tr>
                                                  <tr>
                                                      <td>Pilihan Pertama</td>
                                                      <td>{{$p['pilihan1']}}</td>
                                                  </tr>
                                                  <tr>
                                                      <td>Pilihan Kedua</td>
                                                      <td>{{$p['pilihan2']}}</td>
                                                  </tr>
                                                  
                                               </table>
                                               Mohon maaf dengan ini bagi nama yang telah tercantum diatas,kami menyatakan bahwa saudara <p style="color:red"><b> {{$p['status']}}</b>.</p> Semangat!!</h5>
                                               @elseif ($p['status']== 'proses')
                                               <tr>
                                                <th colspan="27"><h2 align="center"><b style="color:red;">Saudara : {{$p['nama_lengkap']}} telah terdaftar sebagai calon
                                                    Siswa</b></h2>
                                                    <h3 style="color:red;" align="center"></b>SMKN 2 Kec.Guguak</b></h3>
                                                    <h5>Cetak Bukti Pendaftaran Ini sebagai syarat untuk daftar ulang <br>
                                                    <ol>
                                                        <li> Silahkan Melengkapi Syarat-Syarat Berikut :</li>
                                                        <ul>
                                                            <li>(a). Fotocopy Nilai Rapor Terakhir atau Surat Keterangan Lulus (SKL) dari Kepala Sekolah 2 lembar</li>
                                                            <li>(b). Pas Foto 3X4 3 Lembar</li>
                                                            <li>(c). Foto copy KTP Berwarna dan Kartu Keluarga (KK)</li>
                                                        </ul>
                                                        <li>Menunjukkan Bukti Pendaftaran yang telah dicetak</li>
                                                        <li> Semua Persyaratan diatas diserahkan paling lambat Hari/Tanggal : Rabu / 5 Agustus 2020</li>
                                                    </ol>
                                                    
                                                    <i style="color:orange">Alamat Sekolah : Jl. Tuanku Nan Biru - Ampang Gadang , VII Koto Talago Kec. Guguak, Vii Koto Talago, Guguak, Kabupaten Lima Puluh Kota, Sumatera Barat 26253, Telp. (0752) 97318, Email: info@smkn2guguak.sch.id</i>
                                                    <br>Informasi : Waktu pengantaran berkas persyaratan tunggu informasi resmi pada Website atau Media Sosial
                                                    Resmi dari SMKN 2 Kec.Guguak </h5>
                                                   
                                                    </th>
                                            </tr>
                                            <tr><th>
                                                
                                                    
                                                    <h2 align="center"> Hasil Penerimaan Peserta Didik Baru <br> SMKN 2 Kec.Guguak</h2>
                                                <h5  style="margin: 6%"> Berdasarkan Seleksi yang saudara lakukan pada tanggal {{$p['updated_at']}} WIB. Kami panitia Penerimaan Peserta Didik Baru Tahun Pelajaran 2020/2021
                                                    Saudara yang bertanda tangan dibawah ini:<br>
                                               <table width="70%">
                                                <tr>
                                                    <td>Nama Lengkap</td>
                                                    <td>{{$p['nama_lengkap']}}</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Nama Panggilan</td>
                                                    <td>{{$p['nama_panggilan']}}</td>
                                                  </tr>
                                                  <tr>
                                                      <td>NISN</td>
                                                      <td>{{$p['nisn']}}</td>
                                                  </tr>
                                                  <tr>
                                                      <td>Sekolah Asal</td>
                                                      <td>{{$p['asal_sekolah']}}</td>
                                                  </tr>
                                                  <tr>
                                                      <td>Rata - Rata UN</td>
                                                      <td>{{$p['rata']}}</td>
                                                  </tr>
                                                  <tr>
                                                      <td>Pilihan Pertama</td>
                                                      <td>{{$p['pilihan1']}}</td>
                                                  </tr>
                                                  <tr>
                                                      <td>Pilihan Kedua</td>
                                                      <td>{{$p['pilihan2']}}</td>
                                                  </tr>
                                                  
                                               </table>
                                               Maka dengan ini kami menyatakan bahwa data tersebut masih di<p style="color:orange"><b> {{$p['status']}}</b>.</p> Mohon bersabar</h5>
                                             @endif
                                             <form action="/hasil/cetak_pdf" method="GET"><div class="form-group-inner input-with-success">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin:6%">
                                                        <div class="form-select-list">
                                                            <label for="cari">Kode Pendaftaran</label>
                                                        <input type="text" name="cari" required class="form-control" placeholder="Cek Hasil .." value="{{$p['kode']}}">
                                                           <br>
                                                            <input type="submit" class="btn btn-primary fa fa-file-pdf-o" value="cetak">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                            
                                        </th>
                                    </tr>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection