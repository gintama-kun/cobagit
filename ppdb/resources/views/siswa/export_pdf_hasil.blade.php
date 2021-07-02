<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 8pt;
		}
    </style>
    
    <center>
        
    </center>
    <div class="container">
        @foreach($formulirs as $p)
            <table>
                @if ($p['status']== 'diterima')
                    <tr>
                        <th><img src="{{ base_path() . '/public/new/cop.png' }}" style="width:100%;">
                            <h5 align="center"><b style="color:red;">Saudara : <i>{{$p['nama_lengkap']}}</i> telah terdaftar sebagai calon
                            Siswa</b></h5>
                            <h6 style="color:red;" align="center"></b>SMKN 2 Kec.Guguak</b></h6>
                                <p>Cetak Bukti Pendaftaran Ini sebagai syarat untuk daftar ulang <br></p>
                                <ol>
                                        <li>Membawa Bukti Pendaftaran telah dicetak</li>
                                        <li>Silahkan Melengkapi Syarat-Syarat Berikut :</li>
                                            <ul>
                                                <ul>
                                                    <li>Fotocopy Nilai Rapor Terakhir atau Surat Keterangan Lulus (SKL) dari Kepala Sekolah 2 lembar</li>
                                                    <li>Pas Foto 3X4 3 Lembar</li>
                                                    <li> Foto copy Kartu Keluarga (KK)</li>
                                                </ul>
                                            </ul>
                                        
                                        <p>3. Semua Persyaratan diatas diserahkan paling lambat Hari/Tanggal : Rabu / 5 Agustus 2020</p>
                                        
                                    </ol>
                                <p><i style="color:orange">Alamat Sekolah : Jl. Tuanku Nan Biru - Ampang Gadang , VII Koto Talago Kec. Guguak, Vii Koto Talago, Guguak, Kabupaten Lima Puluh Kota, Sumatera Barat 26253, Telp. (0752) 97318, Email: info@smkn2guguak.sch.id</i>
                                <br>Informasi : Waktu pengantaran berkas persyaratan tunggu informasi resmi pada Website atau Media Sosial
                                Resmi dari SMKN 2 Kec.Guguak </p>    
                                <hr>
                                <h5 align="center"> Hasil Penerimaan Peserta Didik Baru <br> SMKN 2 Kec.Guguak</h5>
                                <p> Berdasarkan Seleksi yang saudara lakukan pada tanggal {{$p['updated_at']}} WIB. Kami panitia Penerimaan Peserta Didik Baru Tahun Pelajaran 2020/2021 <i>MEMUTUSKAN</i><br><br>
                                Saudara yang bertanda tangan dibawah ini:<br></p>
                                <table width="70%">
                                    <tr>
                                        <td>Nama Lengkap</td>
                                        <td>{{$p['nama_lengkap']}}</td>
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
                                
                                <p>Maka dengan ini bagi saudara yang namanya telah tercantum diatas, kami menyatakan bahwa saudara <p style="color:green"><b> {{$p['status']}}</b>.</p>Dengan penempatan jurusan <i>{{$p['jurusan']}}</i></p>
                                @php
                                   $waktu = date("Y-m-d");
                               @endphp
                               <p align="right">Ampang Gadang,{{$waktu}}</p>
                               <p align="right">Panitia PPDB SMKN 2 Kec.Guguak</p>
                               <p align="right">Syukriatul Zandri</p><br><br>
                               <p align="right">NIS: 170700806</p>
                        </th>
                    </tr>
                @elseif($p['status']== 'ditolak')
                    <tr>
                        <th><img src="{{ base_path() . '/public/new/cop.png' }}" style="width:100%;">
                            <h5 align="center"><b style="color:red;">Saudara : <i>{{$p['nama_lengkap']}}</i> telah terdaftar sebagai calon
                            Siswa</b></h5>
                            <h6 style="color:red;" align="center"></b>SMKN 2 Kec.Guguak</b></h6>
                                <p>Cetak Bukti Pendaftaran Ini sebagai syarat untuk daftar ulang <br></p>
                                <ol>
                                        <li>Membawa Bukti Pendaftaran telah dicetak</li>
                                        <li>Silahkan Melengkapi Syarat-Syarat Berikut :</li>
                                            <ul>
                                                <ul>
                                                    <li>Fotocopy Nilai Rapor Terakhir atau Surat Keterangan Lulus (SKL) dari Kepala Sekolah 2 lembar</li>
                                                    <li>Pas Foto 3X4 3 Lembar</li>
                                                    <li> Foto copy Kartu Keluarga (KK)</li>
                                                </ul>
                                            </ul>
                                        
                                        <p>3. Semua Persyaratan diatas diserahkan paling lambat Hari/Tanggal : Rabu / 5 Agustus 2020</p>
                                        
                                    </ol>
                                <p><i style="color:orange">Alamat Sekolah : Jl. Tuanku Nan Biru - Ampang Gadang , VII Koto Talago Kec. Guguak, Vii Koto Talago, Guguak, Kabupaten Lima Puluh Kota, Sumatera Barat 26253, Telp. (0752) 97318, Email: info@smkn2guguak.sch.id</i>
                                <br>Informasi : Waktu pengantaran berkas persyaratan tunggu informasi resmi pada Website atau Media Sosial
                                Resmi dari SMKN 2 Kec.Guguak </p>    
                                <hr>
                                <h5 align="center"> Hasil Penerimaan Peserta Didik Baru <br> SMKN 2 Kec.Guguak</h5>
                                <p> Berdasarkan Seleksi yang saudara lakukan pada tanggal {{$p['updated_at']}} WIB. Kami panitia Penerimaan Peserta Didik Baru Tahun Pelajaran 2020/2021 <i>MEMUTUSKAN</i><br><br>
                                Saudara yang bertanda tangan dibawah ini:<br></p>
                                <table width="70%">
                                    <tr>
                                        <td>Nama Lengkap</td>
                                        <td>{{$p['nama_lengkap']}}</td>
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
                                
                                <p><i>Mohon maaf,bagi nama yang telah tercantum diatas,kami menyatakan bahwa saudara <p style="color:red"><b> {{$p['status']}}</b></i>.
                                    @php
                                   $waktu = date("Y-m-d");
                               @endphp
                               <p align="right">Ampang Gadang,{{$waktu}}</p>
                               <p align="right">Panitia PPDB SMKN 2 Kec.Guguak</p>
                               <p align="right">Syukriatul Zandri</p><br><br>
                               <p align="right">NIS: 170700806</p>
                        </th>
                    </tr>
                @elseif($p['status']== 'proses')
                    <tr>
                        <th><img src="{{ base_path() . '/public/new/cop.png' }}" style="width:100%;">
                            <h5 align="center"><b style="color:red;">Saudara : <i>{{$p['nama_lengkap']}}</i> telah terdaftar sebagai calon
                            Siswa</b></h5>
                            <h6 style="color:red;" align="center"></b>SMKN 2 Kec.Guguak</b></h6>
                                <p>Cetak Bukti Pendaftaran Ini sebagai syarat untuk daftar ulang <br></p>
                                <ol>
                                        <li>Membawa Bukti Pendaftaran telah dicetak</li>
                                        <li>Silahkan Melengkapi Syarat-Syarat Berikut :</li>
                                            <ul>
                                                <ul>
                                                    <li>Fotocopy Nilai Rapor Terakhir atau Surat Keterangan Lulus (SKL) dari Kepala Sekolah 2 lembar</li>
                                                    <li>Pas Foto 3X4 3 Lembar</li>
                                                    <li> Foto copy Kartu Keluarga (KK)</li>
                                                </ul>
                                            </ul>
                                        
                                        <p>3. Semua Persyaratan diatas diserahkan paling lambat Hari/Tanggal : Rabu / 5 Agustus 2020</p>
                                        
                                    </ol>
                                <p><i style="color:orange">Alamat Sekolah : Jl. Tuanku Nan Biru - Ampang Gadang , VII Koto Talago Kec. Guguak, Vii Koto Talago, Guguak, Kabupaten Lima Puluh Kota, Sumatera Barat 26253, Telp. (0752) 97318, Email: info@smkn2guguak.sch.id</i>
                                <br>Informasi : Waktu pengantaran berkas persyaratan tunggu informasi resmi pada Website atau Media Sosial
                                Resmi dari SMKN 2 Kec.Guguak </p>    
                                <hr>
                                <h5 align="center"> Hasil Penerimaan Peserta Didik Baru <br> SMKN 2 Kec.Guguak</h5>
                                <p> Berdasarkan Seleksi yang saudara lakukan pada tanggal {{$p['updated_at']}} WIB. Kami panitia Penerimaan Peserta Didik Baru Tahun Pelajaran 2020/2021 <i>MEMUTUSKAN</i><br><br>
                                Saudara yang bertanda tangan dibawah ini:<br></p>
                                <table width="70%">
                                    <tr>
                                        <td>Nama Lengkap</td>
                                        <td>{{$p['nama_lengkap']}}</td>
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
                               
                               <p><i>Maka dengan ini kami menyatakan bahwa data tersebut masih<p style="color:orange"><b> di{{$p['status']}}</b></i>.
                               @php
                                   $waktu = date("Y-m-d");
                               @endphp
                               <p align="right">Ampang Gadang,{{$waktu}}</p>
                               <p align="right">Panitia PPDB SMKN 2 Kec.Guguak</p>
                               <p align="right">Syukriatul Zandri</p><br><br>
                               <p align="right">NIS: 170700806</p>
                              
                       </table>
                       
                        </th>
                    </tr>
                @endif
              
        @endforeach
    </div>
</body>
</html>