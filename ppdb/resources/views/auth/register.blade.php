<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PPDB SMK Negeri 2 Kec.Guguak</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset ('new/smk.png')}}">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
    </script>
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset ('reg/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset ('reg/css/style.css')}}">
    <style>
        select
        {
            background-color: #AED6F1;
            border: none;
        }
    </style>
</head>
<body>

    <div class="main">
		<form method="POST" action="{{ route('register') }}">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
						<a id="links" href="#">#SMK Negeri 2 Kec.Guguak </a>
                        <h2 class="form-title">Pendaftraran Akun PPDB</h2>
						
							@csrf
                            <div class="form-group">
                                <label for="nama_lengkap"><i class="zmdi zmdi-account material-icons-name"></i></label>
								<input id="nama_lengkap" placeholder="Nama Lengkap" type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" value="{{ old('nama_lengkap') }}" required autocomplete="nama_lengkap" autofocus>

                                @error('nama_lengkap')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama_panggilan"><i class="zmdi zmdi-account-o"></i></label>
                                <input id="nama_panggilan" placeholder="Nama Panggilan" type="text" class="form-control @error('nama_panggilan') is-invalid @enderror" name="nama_panggilan" value="{{ old('nama_panggilan') }}" required autocomplete="nama_panggilan" autofocus>

                                @error('nama_panggilan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin"></label>
                                <input id="jenis_kelamin" type="radio" class="@error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" value="Laki-Laki" > Laki-Laki
								<input id="jenis_kelamin" type="radio" class="@error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" value="Perempuan" > Perempuan
                                @error('jenis_kelamin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<div class="form-group">
                                <label for="tgl_lahir"><i class="zmdi zmdi-calendar"></i></label>
									<input id="tgl_lahir" type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" value="{{ old('tgl_lahir') }}" required autocomplete="tgl_lahir" autofocus>
	
									@error('tgl_lahir')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
							</div>
							<div class="form-group">
							
								<textarea id="alamat" placeholder="Alamat Anda" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="name" autofocus cols="30" rows="10"></textarea>
									@error('alamat')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
							</div>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{ asset ('new/smk.png')}}" alt="sing up image"></figure>
                        <div class="form-group" style="display:none;" id="siswa">
							<label for="nisn"><i class="zmdi zmdi-accounts-list"></i></label>
							<input id="nisn" placeholder="NISN" type="text" class="form-control @error('nisn') is-invalid @enderror" name="nisn" value="{{ old('nisn') }}" autofocus>

							@error('nisn')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
                        </div>

                        <div class="form-group" style="display:none;" id="guru">
							<label for="nip"><i class="zmdi zmdi-accounts-list"></i></label>
							<input id="nip" placeholder="NIP" type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ old('nip') }}"  autofocus>

							@error('nip')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="no_hp"><i class="zmdi zmdi-account-box-phone"></i></label>
                        <select id='box'>
                                <option class="box @error('box') is-invalid @enderror" name="profesi"  value="0">.... Profesi Saat ini</option>
                                <option class="box @error('box') is-invalid @enderror" name="profesi" value="1">Siswa</option>
                                <option class="box @error('box') is-invalid @enderror" name="profesi" value="2">Guru</option>
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
                                 $("#siswa").show();
                                 $("#sekolah").show();
                                 $("#guru").hide();
                             }
                             else if ( this.value == '2')
                             {
                                 $("#guru").show();
                                 $("#siswa").hide();
                                 $("#sekolah").hide();
                             }
                             else
                             {
                                 $("#siswa").hide();
                                 $("#guru").hide();
                             }
                             });
                         });
                        </script>
						<div class="form-group" id="sekolah">
							<label for="asal_sekolah"><i class="zmdi zmdi-graduation-cap"></i></label>
							<input id="asal_sekolah" placeholder="Asal Sekolah" type="text" class="form-control @error('asal_sekolah') is-invalid @enderror" name="asal_sekolah" value="{{ old('asal_sekolah') }}" autofocus>

							@error('asal_sekolah')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="form-group">
							<label for="no_hp"><i class="zmdi zmdi-account-box-phone"></i></label>
							<input id="no_hp" placeholder="Nomor HP/Telephone" type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}" required autocomplete="no_hp" autofocus>

							@error('no_hp')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
                        </div>

                       

                        
                    </div>
                </div>
            </div>
        </section>

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{ asset ('reg/images/signin-image.jpg')}}" alt="sing up image"></figure>
					<a href="{{route('login')}}" class="signup-image-link">Sudah Punya Akun?</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title"></h2>
						
                        <div class="form-group">
							<label for="email"><i class="zmdi zmdi-email"></i></label>
							<input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

							@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="form-group">
							<label for="password"><i class="zmdi zmdi-lock"></i></label>
							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						</div>
						<div class="form-group">
							<label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
							<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
						</div> 
						<div class="form-group">
							  
							{!! NoCaptcha::renderJs() !!}
							{!! NoCaptcha::display() !!}
							<span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
						</div>   
						<div class="form-group form-button">
							<input type="submit" name="signin" id="signin" class="form-submit" value="Daftar"/>
						</div>
						
                    </div>
                </div>
            </div>
        </section>
	
    </div>
</form>
    <!-- JS -->
    
    <script src="{{ asset ('reg/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset ('reg/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>