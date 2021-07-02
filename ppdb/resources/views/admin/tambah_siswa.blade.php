@extends('layouts.default')
@section('content')
<div class="page has-sidebar-left">
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-package"></i>
                        Tambah Siswa
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="animatedParent animateOnce">
        <div class="container-fluid my-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body b-b">
                            <h4>Siswa SMKN 2 Kec.Guguak</h4>
                            <form class="form-material"action="/Admin/TambahDataSiswa" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <!-- Input -->
                                <div class="body">
                                    <h6>Data Diri</h6>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="nama_lengkap" type="text" class="form-control" placeholder="Nama Lengkap">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="nama_panggilan" type="text" class="form-control" placeholder="Nama Panggilan">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <textarea name="alamat" class="form-control required" style="height:100px;" placeholder="Alamat" onkeyup="getVals(this, 'additional_message');"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="form-group radio_input">
                                            <label class="container_radio">Laki-Laki
                                                <input type="radio" name="jenis_kelamin" value="Laki-Laki" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container_radio">Perempuan
                                                <input type="radio" name="jenis_kelamin" value="Perempuan" class="required">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="card-body b-b">
                                        <div class="card-title">Tanggal Lahir</div>
                                        <div class="form-line">
                                            <input name="tgl_lahir" type="text" class="date-time-picker form-control"
                                                   data-options='{"timepicker":false, "format":"Y-m-d"}'>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row clearfix">
                                        <div class="col-sm-4">
                                            <div class="card-title">Agama</div>
                                            <select class="custom-select select2" name="agama" required>
                                                <option value="">Pilih</option>
                                                <option value="Islam">Islam</option>
                                                    <option value="Kristen">Kristen</option>
                                                    <option value="Katholik">Katholik</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Budha">Budha</option>
                                                    <option value="Konguchu">Konguchu</option> 
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="no_telepon" placeholder="Telepon/Hp" class="form-control required" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="image" type="file" id="input-file-now" class="file-upload required" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="no_hp"><i class="zmdi zmdi-account-box-phone"></i></label>
                                                <select id='box' class="form-control required">
                                                    <option class="box @error('box') is-invalid @enderror" name="tinggal"  value="0">.... Tinggal Bersama</option>
                                                    <option class="box @error('box') is-invalid @enderror" name="tinggal" value="1">.Orang Tua Kandung</option>
                                                    <option class="box @error('box') is-invalid @enderror" name="tinggal" value="2">Wali</option>
                                                </select>
                                                                        
                                                 @error('box')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>  
                                            <script  type="text/javascript">
                                                            
                                                $(document).ready(function(){
                                                $('#box').on('change', function() {
                                                    if ( this.value == '1')
                                                        {
                                                            $(".ayah").show();
                                                            $(".ibu").show();
                                                            $(".wali").hide();
                                                        }
                                                    else if ( this.value == '2')
                                                        {
                                                            $(".wali").show();
                                                            $(".ayah").hide();
                                                            $(".ibu").hide();
                                                        }
                                                    else
                                                        {
                                                            $(".ayah").hide();
                                                            $(".ibu").hide();
                                                            $(".wali").hide();
                                                        }
                                                    });
                                                     });
                                            </script>
                                            <div style="display:none;" class="form-group ayah">
                                                <div class="form-line">
                                                <input name="ayah" type="text" class="form-control" placeholder="Nama Ayah">
                                                </div>
                                            </div>
                                            <div style="display:none;" class="form-group ayah">
                                                <div class="form-line">
                                                <input name="pendidikan_ayah" type="text" class="form-control" placeholder="Pendidikan Terakhir Ayah">
                                                </div>
                                            </div>
                                            <div style="display:none;" class="form-group ayah">
                                                <div class="form-line">
                                                <input name="pekerjaan_ayah" type="text" class="form-control" placeholder="Pekerjaan Ayah">
                                                </div>
                                            </div>
                                            
                                            
                                            <div style="display:none;" class="form-group ibu">
                                                <div class="form-line">
                                                <input name="ibu" type="text" class="form-control ibu" placeholder="Nama Ibu">
                                                </div>
                                            </div>
                                            <div style="display:none;" class="form-group ibu">
                                                <div class="form-line">
                                                <input name="pendidikan_ibu" type="text" class="form-control ibu" placeholder="Pendidikan Terakhir Ibu">
                                                </div>
                                            </div>
                                            <div style="display:none;" class="form-group ibu">
                                                <div class="form-line">
                                                <input name="pekerjaan_ibu" type="text" class="form-control ibu" placeholder="Pekerjaan Ibu">
                                                </div>
                                            </div>
                                           
                                          
                                            <div style="display:none;" class="form-group wali">
                                                <div class="form-line">
                                                <input id="wali" name="wali" type="text" class="form-control wali" placeholder="Nama Wali">
                                                </div>
                                            </div>
                                            <div style="display:none;" class="form-group wali">
                                                <div class="form-line">
                                                <input id="wali" name="pendidikan_wali" type="text" class="form-control wali" placeholder="Pendidikan Terakhir Wali">
                                                </div>
                                            </div>
                                            <div style="display:none;" class="form-group wali">
                                                <div class="form-line">
                                                <input id="wali" name="pekerjaan_wali" type="text" class="form-control wali" placeholder="Pekerjaan Wali">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="nisn" placeholder="NISN" class="form-control required" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="asal_sekolah" placeholder="Sekolah Asal" class="form-control required" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input name="rata" type="text" class="form-control" placeholder="Rata-Rata Ijazah Akhir">
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-sm-4">
                                                    <div class="card-title">Jurusan"</div>
                                                    <select class="custom-select select2" name="jurusan" required>
                                                        
                                                        <option aria-readonly="true" >Jurusan</option>
                                                        <option value="RPL">RPL</option>
                                                        <option value="Multimedia">Multimedia</option>
                                                        <option value="TKJ">TKJ</option>
                                                        <option value="OTKP">OTKP</option>
                                                        <option value="AKT">AKT</option> 
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <br><br>
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            
                                                <a href="/Admin/DataSiswa">
                                                    <i class="icon-arrow_back text-danger"></i>
                                                </a> &nbsp;
                                            
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                           
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                           
                                                <button type="submit" class="btn btn-primary"> Simpan <i class="icon-save"></i></button>
                                            
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
@endsection