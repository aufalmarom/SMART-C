<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page | Sistem Informasi Geografis Jurnal Geodesi</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport">

    <!-- Fonts and icons -->
	<script src="{{asset('js/plugin/webfont/webfont.min.js')}}"></script>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900" media="all">
    <link rel="stylesheet" href="{{asset('assets/css/fonts.min.css')}}" media="all"><script>
        WebFont.load({
            google: {"families":["Lato:300,400,700,900"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <link rel="icon" href="{{asset('img/icon_web.ico')}}" type="image/x-icon"/>
	<!-- CSS Files -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/atlantis.css')}}">
    <style>
        #bg{
            background-image: url("../img/homepage.png") center center cover no-repeat fixed !important; 
        }
    </style>
</head>
<body id="bg">
    <br><br><br><br>
    <div class="content">
        <div class="page-inner">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <form action="{{route('login')}}" method="POST">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title text-center">Form Login</div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="email2">Email Address</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12 text-center">
                                         <p>belum punya akun?<a href="{{route('register')}}"> daftar di sini!</a></p> 
                                    </div>
                                </div>
                            </div>
                            <div class="card-action text-center">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
