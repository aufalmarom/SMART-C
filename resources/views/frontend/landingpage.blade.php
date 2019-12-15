@extends('layouts.frontend')

<style>
    .bg-welcome{
        background-image: url("../img/homepage.png");
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>

@section('body')

<body class="bg-welcome">
    <audio id="audio" src="{{asset('music/the_entertainer.mp3')}}" autoplay loop>
    </audio>
    <div class="row">
        <div class="col text-center">
        </div>
        <div class="col-md-auto">
            <div class="row justify-content-center text-white" style="margin-top:300px">
                <h1>Selamat Datang, Superhero!</h1>
            </div>
            <div class="row justify-content-center text-white">
                <h1 style="font-size:90px;">SMART-C</h1>
                <br>
            </div>
            <div class="row justify-content-center text-white">
                <p style="font-size:18px;">Membentuk Resiliensi Digital pada Anak</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-auto">
                    <a data-toggle="modal" data-target="#register" class="text-white btn btn-lg btn-success" style="border-radius:15px">Yuk Mulai Mainkan<i class="ml-2 fas fa-gamepad fa-lg"></i></a>
                </div>
            </div>
        </div>
        <div class="col text-center" style="margin-top:70px;">
        </div>
    </div>

    <form action="{{route('register')}}" method="post">
        @csrf
        <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header no-bd">
                        <h2 class="col-12 modal-title text-center">
                            Daftar Di Sini!
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </h2>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-lg-8">
                                    <div class="form-group">
                                        <label for="email2">Emailmu apa nih?</label>
                                        <input type="hidden" name="role" value="user">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Bikin Passwordmu ya</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" rmasihle="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password_confirmation">Tulis sekali lagi Passwordmu ya</label>
                                        <input id="password_confirmation" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                            <div class="row mt-4">
                                <div class="col-md-12 text-center">
                                    <p>sudah punya akun?<a href="" data-dismiss="modal" data-toggle="modal" data-target="#login"> masuk di sini!</a></p>
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="submit" class="btn btn-success" style="border-radius:15px">Daftar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form action="{{route('login')}}" method="post">
        @csrf
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header no-bd">
                        <h2 class="col-12 modal-title text-center">
                            Silahkan Masuk!
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </h2>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-lg-8">
                                    <div class="form-group">
                                        <label for="email2">Masukin E-mailmu</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Passwordmu juga ya</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            <div class="row mt-4">
                                <div class="col-md-12 text-center">
                                    <p>belum punya akun?<a href="" data-dismiss="modal" data-toggle="modal" data-target="#register"> daftar di sini!</a></p>
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="submit" class="btn btn-success" style="border-radius:15px">Masuk</button>
                    </div>
                </div>
            </div>
        </div>

    </form>

	@include('sweetalert::alert')

	@yield('js')

</body>

@endsection
