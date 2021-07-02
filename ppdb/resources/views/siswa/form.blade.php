<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Wilio Survey, Quotation, Review and Register form Wizard by Ansonika.">
    <meta name="author" content="Ansonika">
    <title>PPDB SMK Negeri 2 Kec.Guguak</title>

    <link rel="icon" href="{{ asset ('new/smk.png')}}" type="image/x-icon">
    <script src="{{asset ('wizard/js/jquery-3.4.1.min.js')}}"></script>
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('wizard/img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('wizard/img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('wizard/img/apple-touch-icon-144x144-precomposed.png')}}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ asset ('wizard/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{ asset ('wizard/css/menu.css')}}" rel="stylesheet">
    <link href="{{ asset ('wizard/css/style.css')}}" rel="stylesheet">
	<link href="{{ asset ('wizard/css/vendors.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset ('wizard/css/custom.css')}}" rel="stylesheet">
	
	<!-- MODERNIZR MENU -->
	<script src="{{asset ('wizard/js/modernizr.js')}}"></script>
    
</head>

<body>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->
	
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->
	

	<!-- /menu -->
	
	<div class="container-fluid full-height">
		<div class="row row-height">
			<div class="col-lg-6 content-left" style="background-image: url('{{ asset('new/smk2.png') }}'); background-size:cover;">
				<div class="content-left-wrapper">
					
					<div id="social">
						<ul>
							<li><a href="#0"><i class="icon-facebook"></i></a></li>
							<li><a href="#0"><i class="icon-twitter"></i></a></li>
							<li><a href="#0"><i class="icon-google"></i></a></li>
							<li><a href="#0"><i class="icon-linkedin"></i></a></li>
						</ul>
					</div>
					
					<div class="copy">© 2020 PPDB SMKN 2 Kec.Guguak</div>
				</div>
				<!-- /content-left-wrapper -->
			</div>
			<!-- /content-left -->

			<div class="col-lg-6 content-right" id="start">
				<div id="wizard_container">
					<div id="top-wizard">
							<div id="progressbar"></div>
						</div>
						<!-- /top-wizard -->
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
							<input id="website" name="website" type="text" value="">
							<!-- Leave for security protection, read docs for details -->
							<div id="middle-wizard">
								<div class="step">
                                    {{-- nama dan kode --}}
									<h3 class="main_question"><strong>1/5</strong>Lengkapi Data Berikut</h3>
									<div class="form-group">
										<input type="text" name="kode" class="form-control required" readonly value="<?php echo $hasil_2;  ?>" >
									</div>
									<div class="form-group">
                                        <input name="nama_lengkap" type="text" class="form-control" placeholder="Nama Lengkap">
                                    </div>
                                    <div class="form-group">
                                        <input name="nama_panggilan" type="text" class="form-control" placeholder="Nama Panggilan">
                                    </div>

                                    {{-- jenis Kelamin --}}
                                    
									<!-- /row -->
									<div class="form-group terms">
										<label class="container_check">Saya setuju dengan <a href="#" data-toggle="modal" data-target="#terms-txt">Peraturan  PPDB</a>
											<input type="checkbox" name="terms" value="Yes" class="required">
											<span class="checkmark"></span>
										</label>
									</div>
								</div>
								<!-- /step-->
								<div class="step">
                                    <h3 class="main_question"><strong>2/5</strong></h3>
                                    <div class="form-group">
										
										<textarea name="alamat" class="form-control required" style="height:100px;" placeholder="Alamat" onkeyup="getVals(this, 'additional_message');"></textarea>
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
                                    <div class="form-group data-custon-pick" id="data_2">
                                        
                                        <div class="input-group date date-picker-inner sparkline16-graph">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input class="form-control" type="date"name="tgl_lahir" >
                                        </div>
                                    </div>
                                   
									<div class="form-group">
										<div class="styled-select clearfix">
											<select class="wide required" name="agama">
												<option >Agama</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katholik">Katholik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Konguchu">Konguchu</option>                             
											</select>
										</div>
									</div>
									<div class="form-group">
										<input type="text" name="no_telepon" placeholder="Telepon/Hp" class="form-control required" >
                                    </div>
                                    <div class="form-group">
                                        <input name="image" type="file" id="input-file-now" class="file-upload required" />
                                    </div>
									
								</div>
								<!-- /step-->
								<div class="step">
									<h3 class="main_question"><strong>3/5</strong></h3>
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
                                                        

                                                        <div style="display:none;" class="form-group ayah" >
                                                            <input name="ayah" type="text" class="form-control" placeholder="Nama Ayah">
                                                        </div>
                                                        <div style="display:none;" class="form-group ayah">
                                                            <input name="pendidikan_ayah" type="text" class="form-control" placeholder="Pendidikan Terakhir Ayah">
                                                        </div>
                                                        <div style="display:none;" class="form-group ayah">
                                                            <input name="pekerjaan_ayah" type="text" class="form-control" placeholder="Pekerjaan Ayah">
                                                        </div>
                                                        
                                                        
                                                        <div class="form-group">
                                                            <input style="display:none;" name="ibu" type="text" class="form-control ibu" placeholder="Nama Ibu">
                                                        </div>
                                                        <div class="form-group">
                                                            <input style="display:none;" name="pendidikan_ibu" type="text" class="form-control ibu" placeholder="Pendidikan Terakhir Ibu">
                                                        </div>
                                                        <div class="form-group">
                                                            <input style="display:none;" name="pekerjaan_ibu" type="text" class="form-control ibu" placeholder="Pekerjaan Ibu">
                                                        </div>
                                                       
                                                      
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
								<!-- /step-->
								<div class="step">
									<h3 class="main_question"><strong>4/5</strong></h3>
									<div class="form-group">
                                        <input type="text" name="nisn" placeholder="NISN" class="form-control required" >
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="asal_sekolah" placeholder="Sekolah Asal" class="form-control required" >
                                    </div>
								</div>
								<!-- /step-->
								<div class="submit step">
									<h3 class="main_question"><strong>5/5</strong></h3>
									<div class="summary">
                                        <div class="form-group">
                                            <input name="rata" type="text" class="form-control" placeholder="Rata-Rata Ijazah Akhir">
                                        </div>
										<div class="form-group">
                                            <select name="pilihan1" class="form-control required">
                                                <option >Pilihan Jurusan "1"</option>
                                                <option value="RPL">RPL</option>
                                                <option value="Multimedia">Multimedia</option>
                                                <option value="TKJ">TKJ</option>
                                                <option value="OTKP">OTKP</option>
                                                <option value="AKT">AKT</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <select name="pilihan2" class="form-control required">
                                                <option >Pilihan Jurusan "2"</option>
                                                <option value="RPL">RPL</option>
                                                <option value="Multimedia">Multimedia</option>
                                                <option value="TKJ">TKJ</option>
                                                <option value="OTKP">OTKP</option>
                                                <option value="AKT">AKT</option>
                                            </select>
                                        </div>
									</div>
								</div>
								<!-- /step-->
							</div>
							<!-- /middle-wizard -->
							<div id="bottom-wizard">
                                @if (Route::has('login'))
                                    
                                
                                        @auth 
                                        
                                            <button type="button" name="backward" class="backward">Sebelumnya</button>
                                            <button type="button" name="forward" class="forward">Selanjutnya</button>
                                            <button type="submit" name="process" class="submit">Daftar</button>
                                            <a href="/" style=" position: absolute;
                                            left: 130px;
                                            top: 20px;" class="btn btn-danger">Batal</a>
                                @else
                                            <a href="{{ route('login') }}" style="color:white;" class="btn btn-primary" >
                                                {{-- <i class="flaticon-user"></i> --}}
                                                Login
                                            </a>
                                        
                                        @endauth

                               @endif
								
							</div>
							<!-- /bottom-wizard -->
						</form>
					</div>
					<!-- /Wizard container -->
			</div>
			<!-- /content-right-->
		</div>
		<!-- /row-->
	</div>
	<!-- /container-fluid -->


	
	<!-- /cd-overlay-content -->

	
	<!-- /menu button -->
	
	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Perhatian!</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
                    Hi!! Sebelum kamu mendaftar pastikan persyaratan berikut!! <br><br><br>
					<ul>
                        <li><i>~ Pendaftaran akan dibuka pada waktu yang telah ditentukan pihak  </i></li>
                        <li>  sekolah</li>
                        <li><i>~ Ketika melakukan finalisasi data tidak bisa diubah kembali </i></li>
                        <li><i>~ Hasil pendaftaran dapat dilihat dilihat di <strong>menu utama</strong> </i></li>
                    </ul>
                    <br>
                    <hr>
                    Persyaratan Umum <br><br><br>
					<ul>
                        <ul>
                            <li>(a). Fotocopy Nilai Rapor Terakhir atau Surat Keterangan Lulus (SKL) dari Kepala Sekolah 2 lembar</li>
                            <li>(b). Pas Foto 3X4 3 Lembar</li>
                            <li>(c). Foto copy KTP Berwarna dan Kartu Keluarga (KK)</li>
                        </ul>
                        
                    </ul>
        
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	
	<!-- COMMON SCRIPTS -->
	
    <script src="{{asset ('wizard/js/common_scripts.min.js')}}"></script>
	<script src="{{asset ('wizard/js/velocity.min.js')}}"></script>
	<script src="{{asset ('wizard/js/functions.js')}}"></script>
    
	<!-- Wizard script -->
    <script src="{{asset ('wizard/js/survey_func.js')}}"></script>
    @include('sweetalert::alert')

</body>
</html>