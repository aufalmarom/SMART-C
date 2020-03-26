@extends('layouts.frontend')
<link rel="stylesheet" href="{{asset('css/sesi.css')}}">
<style>
    .bg-sesi3{
        background-image: url("../img/page-3.png");
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    .action-button {
        width: 100px;
        background: #27AE60;
        color: white;
        border: 0 none;
        border-radius: 15px;
        cursor: pointer;
        padding: 5px 5px;
        margin: 5px 5px;
    }

    .action-button:hover,
    .action-button:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
    }
</style>



@section('body')

<body class="bg-sesi3">
    <audio id="audio" src="{{asset('music/epicwin.mp3')}}" autoplay loop></audio>

    <div class="row pull-right mt-5 mr-5">
    <form action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit" class="btn btn-simple btn-danger" style="border-radius: 15px">Keluar</button>
    </form>
</div>
<br><br><br><br>

<div class="container">
    <div class="row">
        <div class="col-md"></div>
            <div class="col-md-8">

                <div class="card shadow">
                    <div class="card-header">
                        <h2 align="center">Selamat! Ini adalah semua hadiahmu!</h2>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-8 text-center">
                                @if ($data->sex == "Laki-Laki")
                                    <img src="{{asset('img/reward/7_kucing.png')}}" alt="hero">
                                    <img src="{{asset('img/reward/8_pria_muslim.png')}}" alt="hero">
                                    <img src="{{asset('img/reward/6_pria_bersayap.png')}}" alt="hero">
                                @elseif($data->sex == "Perempuan")
                                    <img src="{{asset('img/reward/7_kucing.png')}}" alt="hero">
                                    <img src="{{asset('img/reward/8_wanita_muslim.png')}}" alt="hero">
                                    <img src="{{asset('img/reward/6_wanita_bersayap.png')}}" alt="hero">
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="card-footer" style="text-align: center">
                        <form action="{{route('feedback.read.user')}}" method="get">
                        <button type="submit" class="btn btn-simple btn-danger" style="border-radius:15px">Ayo Lanjutkan!</button>
                        </form>
                    </div>
                </div>

            </div>
        <div class="col-md"></div>
    </div>
</div>

<script src="{{asset('js/sesi-spinner.js')}}"></script>

<script>
    $("document").ready(function() {
        confetti.start()
    });
</script>

@include('sweetalert::alert')

@yield('js')

</body>

@endsection
