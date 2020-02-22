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
</style>

@section('body')

<body class="bg-sesi3">

    <div class="row pull-right mt-5 mr-5">
        <form action="{{route('logout')}}" method="post">
            @csrf
            <button type="submit" class="btn btn-simple btn-danger" style="border-radius:15px">Keluar</button>
        </form>
    </div>
<br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-bottom:10px;">
            <video width="1070" height="600" autoplay>
                <source src="{{asset('video/bully.mp4')}}" type="video/mp4">
              </video>
        </div>
        <div class="col-md-12" style="text-align: center">
            <form action="{{route('cyberbullying.read.user')}}" method="get">
            <button type="submit" class="btn btn-simple btn-danger" style="border-radius:15px">Ayo Lanjutkan!</button>
            </form>
        </div>
    </div>

</div>

@include('sweetalert::alert')

<script id="rendered-js" type="text/javascript" src="{{asset('js/sesi.js')}}"></script>

</body>
@endsection
