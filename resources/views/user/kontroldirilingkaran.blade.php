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

@php
    $array = explode(", ", @$data->answer);
@endphp

<body class="bg-sesi3">
    <audio id="audio" src="{{asset('music/the_entertainer.mp3')}}" autoplay loop></audio>

    <div class="row pull-right mt-5 mr-5">
    <form action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit" class="btn btn-simple btn-danger" style="border-radius: 15px">Keluar</button>
    </form>
</div>
<br><br><br><br>
<div class="container">
    <div class="row">
        {{-- <div class="col-md"></div> --}}
        <div class="col-md-12">
            <form class="animated fadeIn delay-1s" action="{{route('kontroldirilingkaran.post.user')}}" method="post">
                @csrf
                <div class="card shadow" style="border-radius: 15px">
                    <div class="card-header" style="text-align: center">
                        <h2 align="center">Hal yang tidak bisa ku kontrol</h2>
                    </div>
                    <div class="card-body" style="text-align: center">
                        <div class="row">
                            <div class="col-md">
                                <div class="selectgroup selectgroup-pills">
                                    <label class="selectgroup-item">
                                        <input type="checkbox" name="answer[]" value="Guru" class="selectgroup-input" @if (in_array("Guru", $array)) checked="true" @endif>
                                        <span class="selectgroup-button">Guru</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="checkbox" name="answer[]" value="Hal yang orang lain lakukan" class="selectgroup-input" @if (in_array("Hal yang orang lain lakukan", $array)) checked="true" @endif>
                                        <span class="selectgroup-button">Hal yang orang lain lakukan</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="checkbox" name="answer[]" value="Bagaimana Orang lain memandangku" class="selectgroup-input" @if (in_array("Bagaimana Orang lain memandangku", $array)) checked="true" @endif>
                                        <span class="selectgroup-button">Bagaimana Orang lain memandangku</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="checkbox" name="answer[]" value="Keluarga" class="selectgroup-input" @if (in_array("Keluarga", $array)) checked="true" @endif>
                                        <span class="selectgroup-button">Keluarga</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="checkbox" name="answer[]" value="Bersabar" class="selectgroup-input" @if (in_array("Bersabar", $array)) checked="true" @endif>
                                        <span class="selectgroup-button">Bersabar</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="checkbox" name="answer[]" value="Bekerja Keras" class="selectgroup-input" @if (in_array("Bekerja Keras", $array)) checked="true" @endif>
                                        <span class="selectgroup-button">Bekerja Keras</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md">
                                <img src="{{asset('img/circle.png')}}" width="500px">
                            </div>
                            <div class="col-md">
                                <div class="selectgroup selectgroup-pills">
                                    <label class="selectgroup-item">
                                        <input type="checkbox" name="answer[]" value="Mencintai Diri Sendiri" class="selectgroup-input" @if (in_array("Mencintai Diri Sendiri", $array)) checked="true" @endif>
                                        <span class="selectgroup-button">Mencintai Diri Sendiri</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="checkbox" name="answer[]" value="Belajar" class="selectgroup-input" @if (in_array("Belajar", $array)) checked="true" @endif>
                                        <span class="selectgroup-button">Belajar</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="checkbox" name="answer[]" value="Mendengarkan" class="selectgroup-input" @if (in_array("Mendengarkan", $array)) checked="true" @endif>
                                        <span class="selectgroup-button">Mendengarkan</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="checkbox" name="answer[]" value="Melaksanakan Tugas" class="selectgroup-input" @if (in_array("Melaksanakan Tugas", $array)) checked="true" @endif>
                                        <span class="selectgroup-button">Melaksanakan Tugas</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="checkbox" name="answer[]" value="Cuaca" class="selectgroup-input" @if (in_array("Cuaca", $array)) checked="true" @endif>
                                        <span class="selectgroup-button">Cuaca</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="checkbox" name="answer[]" value="Relaksasi" class="selectgroup-input" @if (in_array("Relaksasi", $array)) checked="true" @endif>
                                        <span class="selectgroup-button">Relaksasi</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" style="text-align: center">
                        <button type="submit" class="action-button">Lanjut</button>
                    </div>
                </div>
            </form>
        </div>
        {{-- <div class="col-md"></div> --}}
    </div>
</div>

	@include('sweetalert::alert')

	@yield('js')

</body>

@endsection
