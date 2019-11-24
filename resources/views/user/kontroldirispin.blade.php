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
    <audio id="audio" src="{{asset('music/Countdown-Starlight.mp3')}}" autoplay loop></audio>

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
            <form class="animated fadeIn delay-1s" action="{{route('kontroldirispin.post.user')}}" method="post">
                @csrf
                <div class="card shadow" style="border-radius: 15px">
                    <div class="card-header" style="text-align: center">
                        <h2 align="center">Mau tau solusinya? Tekan tombol Putar</h2>
                        <input type="button" class="action-button" value="Putar" id="spin" />
                    </div>
                    <div class="card-body" style="text-align: center">
                        <input type="hidden" name="answer" id="Hasil" value="" />
                        <canvas id="canvas" width="500" height="500"></canvas>
                    </div>
                    <div class="card-footer" style="text-align: center">
                        <button type="submit" class="action-button">Lanjut</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md"></div>
    </div>
</div>

<script src="{{asset('js/sesi-spinner.js')}}"></script>

@include('sweetalert::alert')

@yield('js')

</body>

@endsection
