@extends('layouts.dash')

@section('content')
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                               
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Beranda</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Formulir Pendaftaran</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.mobile_menu')
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Formulir Pendaftaran</a></li>
                        
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad">




                                            <form action="{{route('formulirt')}}" method="POST" enctype="multipart/form-data" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                                {{ csrf_field() }}
                                                <?php
                                                    function acak($panjang)
                                                    {
                                                        $karakter= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
                                                        $string = '';
                                                        for ($i = 0; $i < $panjang; $i++) {
                                                    $pos = rand(0, strlen($karakter)-1);
                                                    $string .= $karakter{$pos};
                                                        }
                                                        return $string;
                                                    }
                                                
                                                    $hasil_2= acak(7);
                                                ?>

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="kode" value="<?php echo $hasil_2;  ?>" style="color:red;" type="text" class="form-control" readonly>
                                                        </div>
                                                        <p><b>----------------------------------------------Data Pribadi-------------------------------------------</b></p>
                                                        <div class="form-group">
                                                            <input name="nama_lengkap" type="text" class="form-control" placeholder="Nama Lengkap">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="nama_panggilan" type="text" class="form-control" placeholder="Nama Panggilan">
                                                        </div>
                                                        <div class="form-group data-custon-pick" id="data_2">
                                                            
                                                            <div class="input-group date date-picker-inner sparkline16-graph">
                                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                <input class="form-control" type="date"name="tgl_lahir" >
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                                    <label class="login2 pull-right pull-right-pro">Jenis Kelamin</label>
                                                                </div>
                                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                                                    <div class="bt-df-checkbox">
                                                                        <input class="@error('jenis_kelamin') is-invalid @enderror pull-left radio-checked" type="radio" checked="" value="Laki-Laki" id="jenis_kelamin" name="jenis_kelamin">Laki-Laki <br>
                                                                        <input class="@error('jenis_kelamin') is-invalid @enderror pull-left" type="radio" value="Perempuan" id="jenis_kelamin" name="jenis_kelamin">Perempuan
                                                                        
                                                                        @error('jenis_kelamin')
                                                                            <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="nisn"><i class="zmdi zmdi-account-o"></i></label>
                                                            <input id="nisn" placeholder="NISN" type="text" class="form-control @error('nisn') is-invalid @enderror" name="nisn" value="{{ old('nisn') }}" required autocomplete="nisn" autofocus>
                            
                                                            @error('nisn')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <select name="agama" class="form-control">
                                                                <option >Agama</option>
                                                                <option value="Islam">Islam</option>
                                                                <option value="Kristen">Kristen</option>
                                                                <option value="Katholik">Katholik</option>
                                                                <option value="Hindu">Hindu</option>
                                                                <option value="Budha">Budha</option>
                                                                <option value="Konguchu">Konguchu</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="asal_sekolah" type="text" class="form-control" placeholder="Asal Sekolah">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="rata" type="text" class="form-control" placeholder="Rata-Rata Ijazah Akhir">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="no_telepon" type="text" class="form-control" placeholder="No Hp">
                                                        </div>
                                                        <div class="form-group">
                                                            <select name="pilihan1" class="form-control">
                                                                <option >Pilihan Jurusan "1"</option>
                                                                <option value="RPL">RPL</option>
                                                                <option value="Multimedia">Multimedia</option>
                                                                <option value="TKJ">TKJ</option>
                                                                <option value="OTKP">OTKP</option>
                                                                <option value="AKT">AKT</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <select name="pilihan2" class="form-control">
                                                                <option >Pilihan Jurusan "2"</option>
                                                                <option value="RPL">RPL</option>
                                                                <option value="Multimedia">Multimedia</option>
                                                                <option value="TKJ">TKJ</option>
                                                                <option value="OTKP">OTKP</option>
                                                                <option value="AKT">AKT</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group alert-up-pd">
                                                        
                                                            <div class="form-group res-mg-t-15">
                                                                <textarea name="alamat" placeholder="Alamat"></textarea>
                                                            </div>
                                                        
                                                        
                                                      
                                                    </div>
                                                        {{-- <div class="dz-message needsclick download-custom">
                                                            <i class="fa fa-download edudropnone" aria-hidden="true"></i>
                                                            <h2 class="edudropnone">Ambil gambar.</h2>
                                                            
                                                            <input name="image" class="hd-pro-img" type="file" />
                                                        </div> --}}
                                                        <div class="file-upload-wrapper form-group">
                                                            <input name="image" type="file" id="input-file-now" class="file-upload" />
                                                          </div>
                                                        {{-- <div class="form-group">
                                                            <input name="image" type="file" class="form-control" placeholder="Nama Panggilan">
                                                        </div> --}}
                                                     
                                                       
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label for="no_hp"><i class="zmdi zmdi-account-box-phone"></i></label>
                                                        <select id='box' class="form-control">
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
                                                    <script>
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
                                                        <p><b>------------------------------------------Data Orang Tua---------------------------------------</b></p>
                                                        <p style="display:none;" class="ayah"><b>A.Ayah</b></p>

                                                        <div style="display:none;" class="form-group ayah">
                                                            <input name="ayah" type="text" class="form-control" placeholder="Nama Ayah">
                                                        </div>
                                                        <div style="display:none;" class="form-group ayah">
                                                            <input name="pendidikan_ayah" type="text" class="form-control" placeholder="Pendidikan Terakhir Ayah">
                                                        </div>
                                                        <div style="display:none;" class="form-group ayah">
                                                            <input name="pekerjaan_ayah" type="text" class="form-control" placeholder="Pekerjaan Ayah">
                                                        </div>
                                                        
                                                        <p style="display:none;" class="ibu"><b>B.Ibu</b></p>
                                                        <div class="form-group">
                                                            <input style="display:none;" name="ibu" type="text" class="form-control ibu" placeholder="Nama Ibu">
                                                        </div>
                                                        <div class="form-group">
                                                            <input style="display:none;" name="pendidikan_ibu" type="text" class="form-control ibu" placeholder="Pendidikan Terakhir Ibu">
                                                        </div>
                                                        <div class="form-group">
                                                            <input style="display:none;" name="pekerjaan_ibu" type="text" class="form-control ibu" placeholder="Pekerjaan Ibu">
                                                        </div>
                                                       
                                                        <p style="display:none;" class="wali"><b>C.Wali</b></p>
                                                        <div class="form-group">
                                                            <input id="wali" style="display:none;" name="wali" type="text" class="form-control wali" placeholder="Nama Wali">
                                                        </div>
                                                        <div class="form-group">
                                                            <input id="wali" style="display:none;" name="pendidikan_wali" type="text" class="form-control wali" placeholder="Pendidikan Terakhir Wali">
                                                        </div>
                                                        <div class="form-group">
                                                            <input id="wali" style="display:none;" name="pekerjaan_wali" type="text" class="form-control wali" placeholder="Pekerjaan Wali">
                                                        </div>
                                                        
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="payment-adress">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Daftar</button>
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
@endsection