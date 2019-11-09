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
    <audio id="audio" src="{{asset('the_entertainer.mp3')}}" autoplay loop>
    </audio>
    <div class="row">
        <div class="col text-center">
            {{-- <img src="../assets/img/girl_equipment.png" style="margin-top:130px;" alt="girl"> --}}
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
                    <a data-toggle="modal" data-target="#register" class="text-white btn btn-lg btn-success">Yuk Mulai Mainkan<i class="ml-2 fas fa-gamepad fa-lg"></i></a>
                </div>
                <div class="col-md-auto">
                    <a data-toggle="modal" data-target="#feedback" class="text-white btn btn-lg btn-success">Kamu suka kan sama Game ini? <i class=" ml-2 fas fa-star-half-alt fa-lg"></i></a>
                </div>
            </div>
        </div>
        <div class="col text-center" style="margin-top:70px;">
            {{-- <img src="../assets/img/boy_equipment.png" alt=""> --}}
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
                        <button type="submit" class="btn btn-success">Daftar</button>
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
                        <button type="submit" class="btn btn-success">Masuk</button>
                    </div>
                </div>
            </div>
        </div>

    </form>

    <form action="{{route('feedback.post.user')}}" method="post">
        @csrf
        <div class="modal fade" id="feedback" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header no-bd">
                        <h2 class="col-12 modal-title text-center">
                            Tanggapi Aplikasi ini ya ;)
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </h2>
                    </div>
                    <div class="modal-body">
                        <p class="small ml-3">Isi beberapa pertanyaan di bawah ya!</p>
                        <form>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-default">
                                        <label>Namamu</label>
                                        <input id="name" type="text" name="name" class="form-control" placeholder="siapa namamu?" required>
                                    </div>
                                </div>
                                <div class="col-sm-12" style="text-align:center;">
                                    <div class="form-check">
                                        <label>Beri Nilai</label><br/>
                                        <label class="form-radio-label">
                                            <input class="form-radio-input" type="radio" name="rating" value="1">
                                            <span class="form-radio-sign">1</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="rating" value="2">
                                            <span class="form-radio-sign">2</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="rating" value="3" checked="">
                                            <span class="form-radio-sign">3</span>
                                        </label>
                                        <label class="form-radio-label">
                                            <input class="form-radio-input" type="radio" name="rating" value="4">
                                            <span class="form-radio-sign">4</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="rating" value="5">
                                            <span class="form-radio-sign">5</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-group-default">
                                        <label>Tanggapanmu</label>
                                        <textarea id="review" type="text" name="review" rows="9" class="form-control" placeholder="gimana sih menurutmu aplikasi ini?" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="submit" class="btn btn-success">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
	<script src="{{asset('js/core/jquery.3.2.1.min.js')}}"></script>
	<script src="{{asset('js/core/popper.min.js')}}"></script>
	<script src="{{asset('js/core/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
	<script src="{{asset('js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>
	<script src="{{asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
	<script src="{{asset('js/plugin/chart.js/chart.min.js')}}"></script>
	<script src="{{asset('js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>
	<script src="{{asset('js/plugin/chart-circle/circles.min.js')}}"></script>
	<script src="{{asset('js/plugin/datatables/datatables.min.js')}}"></script>
	<script src="{{asset('js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
	<script src="{{asset('js/plugin/sweetalert/sweetalert.min.js')}}"></script>
	<script src="{{asset('js/plugin/select2/select2.full.min.js')}}"></script>
	<script src="{{asset('js/atlantis.js')}}"></script>
	@include('sweetalert::alert')

	@yield('js')

</body>

@endsection
