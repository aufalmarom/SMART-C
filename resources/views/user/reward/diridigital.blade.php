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
    <audio id="audio" src="{{asset('music/Countdown-Starlight.mp3')}}" autoplay loop>
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

        </div>
        <div class="col-md"></div>
    </div>
</div>

@include('sweetalert::alert')

<script id="rendered-js" type="text/javascript" src="{{asset('js/sesi.js')}}"></script>

</body>
@endsection
