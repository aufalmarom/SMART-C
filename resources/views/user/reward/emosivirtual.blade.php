@extends('layouts.frontend')
<link rel="stylesheet" href="{{asset('css/sesi.css')}}">
<style>
    .bg-sesi2{
        background-image: url("../img/page-2.png");
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>

@section('body')

<body class="bg-sesi2">
    <audio id="audio" src="{{asset('music/epicwin.mp3')}}" autoplay loop></audio>

    <div class="row pull-right mt-5 mr-5">
    <form action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit" class="btn btn-simple btn-danger" style="border-radius:15px">Keluar</button>
    </form>
</div>
<br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md"></div>
            <div class="col-md-8">

                <div class="card shadow">
                    <div class="card-header">
                        <h2 align="center">Selamat! Kamu mendapatkan hadiah hero dengan kostum baru!</h2>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-8 text-center">
                                @if ($data->sex == "Laki-Laki")
                                    <img src="{{asset('img/reward/4_kostum_pria.png')}}" alt="hero">
                                @elseif($data->sex == "Perempuan")
                                    <img src="{{asset('img/reward/4_kostum_wanita.png')}}" alt="hero">
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="card-footer" style="text-align: center">
                        <form action="{{route('introcyberbullying.read.user')}}" method="get">
                        <button type="submit" class="btn btn-simple btn-danger" style="border-radius:15px">Ayo Lanjutkan!</button>
                        </form>
                    </div>
                </div>

            </div>
        <div class="col-md"></div>
    </div>
</div>
    <script src="{{asset('js/sesi.js')}}"></script>

    <script>
        $("document").ready(function() {
            confetti.start()
        });
    </script>
	@include('sweetalert::alert')
</body>

@endsection
