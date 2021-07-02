<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PPDB SMK Negeri 2 Kec.Guguak</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset ('new/smk.png')}}">
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset ('reg/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset ('reg/css/style.css')}}">
</head>
<body>
    <br><br><br>
   <div class="container"> 
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{ asset ('new/smk.png')}}" alt="sing up image"></figure>
                    <a href="{{route('register')}}" class="signup-image-link">Belum Punya Akun?</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Ayo Masuk!!</h2>
                    
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Masuk"/>
                            </div>
                    
                    </div>
                </div>
            </div>
        </section>
    </form>
   </div>
    <!-- JS -->
    <script src="{{ asset ('reg/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset ('reg/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>