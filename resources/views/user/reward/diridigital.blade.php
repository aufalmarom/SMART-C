@extends('layouts.frontend')
<link rel="stylesheet" href="{{asset('css/sesi.css')}}">
<style>
    .bg-sesi1-2 {
        background-image: url("../img/page-1.png");
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>

@section('body')

<body class="bg-sesi1-2">
    <audio id="audio" src="{{asset('music/epicwin.mp3')}}" autoplay loop>
    </audio>

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
                        <h2 align="center">Selamat {{$data->name}}! Kamu mendapatkan hadiah hero!</h2>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-8 text-center">
                                @if ($data->sex == "Laki-Laki")
                                    <img src="{{asset('img/reward/1_hero_pria.png')}}" alt="hero">
                                @elseif($data->sex == "Perempuan")
                                    <img src="{{asset('img/reward/1_hero_wanita.png')}}" alt="hero">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" style="text-align: center">
                        <form action="{{route('edukasismart.read.user')}}" method="get">
                        <button type="submit" class="btn btn-simple btn-danger" style="border-radius:15px">Ayo Lanjutkan!</button>
                        </form>
                    </div>
                </div>

            </div>
        <div class="col-md"></div>
    </div>
</div>

@include('sweetalert::alert')

<script id="rendered-js" type="text/javascript" src="{{asset('js/sesi.js')}}"></script>
<script>
    $("document").ready(function() {
        confetti.start()
    });
</script>

</body>
@endsection
