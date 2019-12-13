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
    <audio id="audio" src="{{asse t('music/Honey drops-Chinook.mp3')}}" autoplay loop></audio>

    <div class="row pull-right mt-5 mr-5">
    <form action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit" class="btn btn-simple btn-danger" style="border-radius: 15px">Keluar</button>
    </form>
</div>
<br><br>
@php
$array_controlled = explode(", ", @$data->controlled);
$array_uncontrolled = explode(", ", @$data->uncontrolled);
@endphp
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form class="animated fadeIn delay-1s" action="{{route('kontroldirilingkaran.post.user')}}" method="post">
                @csrf
                <div class="card shadow" style="border-radius: 15px">
                        <img class="card-img" src="{{asset('img/circle_bg.png')}}" alt="Card Image">
                        <div class="card-img-overlay">
                    <div class="card-body mb-5 pb-5" style="text-align: center">
                            <div class="row mt-5 pt-5 mb-4">
                                <div class="col-md mt-5 pt-5">
                                    <div id="kiri" class="selectgroup selectgroup-pills mt-5" style="display:block">
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="uncontrolled[]" value="Guru" class="selectgroup-input"  @if (in_array("Guru", $array_uncontrolled)) checked="true" @endif>
                                            <span class="selectgroup-button">Guru</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="uncontrolled[]" value="Hal yang orang lain lakukan" class="selectgroup-input" @if (in_array("Hal yang orang lain lakukan", $array_uncontrolled)) checked="true" @endif>
                                            <span class="selectgroup-button">Hal yang orang lain lakukan</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="uncontrolled[]" value="Bagaimana Orang lain memandangku" class="selectgroup-input" @if (in_array("Bagaimana Orang lain memandangku", $array_uncontrolled)) checked="true" @endif>
                                            <span class="selectgroup-button">Bagaimana Orang lain memandangku</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="uncontrolled[]" value="Keluarga" class="selectgroup-input" @if (in_array("Keluarga", $array_uncontrolled)) checked="true" @endif>
                                            <span class="selectgroup-button">Keluarga</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="uncontrolled[]" value="Bersabar" class="selectgroup-input" @if (in_array("Bersabar", $array_uncontrolled)) checked="true" @endif>
                                            <span class="selectgroup-button">Bersabar</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="uncontrolled[]" value="Bekerja Keras" class="selectgroup-input" @if (in_array("Bekerja Keras", $array_uncontrolled)) checked="true" @endif>
                                            <span class="selectgroup-button">Bekerja Keras</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-8 mt-5 pt-5">
                                    <div id="tengah" class="selectgroup selectgroup-pills mt-5 pl-5 pr-5" style="display:block">
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="controlled[]" value="Mencintai Diri Sendiri" class="selectgroup-input" @if (in_array("Mencintai Diri Sendiri", $array_controlled)) checked="true" @endif>
                                            <span class="selectgroup-button">Mencintai Diri Sendiri</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="controlled[]" value="Belajar" class="selectgroup-input" @if (in_array("Belajar", $array_controlled)) checked="true" @endif>
                                            <span class="selectgroup-button">Belajar</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="controlled[]" value="Mendengarkan" class="selectgroup-input" @if (in_array("Mendengarkan", $array_controlled)) checked="true" @endif>
                                            <span class="selectgroup-button">Mendengarkan</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="controlled[]" value="Melaksanakan Tugas" class="selectgroup-input" @if (in_array("Melaksanakan Tugas", $array_controlled)) checked="true" @endif>
                                            <span class="selectgroup-button">Melaksanakan Tugas</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="controlled[]" value="Cuaca" class="selectgroup-input" @if (in_array("Cuaca", $array_controlled)) checked="true" @endif>
                                            <span class="selectgroup-button">Cuaca</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="controlled[]" value="Relaksasi" class="selectgroup-input" @if (in_array("Relaksasi", $array_controlled)) checked="true" @endif>
                                            <span class="selectgroup-button">Relaksasi</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="controlled[]" value="Guru" class="selectgroup-input" @if (in_array("Guru", $array_controlled)) checked="true" @endif>
                                            <span class="selectgroup-button">Guru</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="controlled[]" value="Hal yang orang lain lakukan" class="selectgroup-input" @if (in_array("Hal yang orang lain lakukan", $array_controlled)) checked="true" @endif>
                                            <span class="selectgroup-button">Hal yang orang lain lakukan</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="controlled[]" value="Bagaimana Orang lain memandangku" class="selectgroup-input" @if (in_array("Bagaimana Orang lain memandangku", $array_controlled)) checked="true" @endif>
                                            <span class="selectgroup-button">Bagaimana Orang lain memandangku</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="controlled[]" value="Keluarga" class="selectgroup-input" @if (in_array("Keluarga", $array_controlled)) checked="true" @endif>
                                            <span class="selectgroup-button">Keluarga</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="controlled[]" value="Bersabar" class="selectgroup-input" @if (in_array("Bersabar", $array_controlled)) checked="true" @endif>
                                            <span class="selectgroup-button">Bersabar</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="controlled[]" value="Bekerja Keras" class="selectgroup-input" @if (in_array("Bekerja Keras", $array_controlled)) checked="true" @endif>
                                            <span class="selectgroup-button">Bekerja Keras</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md mt-5 pt-5">
                                    <div id="kanan" class="selectgroup selectgroup-pills mt-5" style="display:block">
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="uncontrolled[]" value="Mencintai Diri Sendiri" class="selectgroup-input" @if (in_array("Mencintai Diri Sendiri", $array_uncontrolled)) checked="true" @endif>
                                            <span class="selectgroup-button">Mencintai Diri Sendiri</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="uncontrolled[]" value="Belajar" class="selectgroup-input" @if (in_array("Belajar", $array_uncontrolled)) checked="true" @endif>
                                            <span class="selectgroup-button">Belajar</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="uncontrolled[]" value="Mendengarkan" class="selectgroup-input" @if (in_array("Mendengarkan", $array_uncontrolled)) checked="true" @endif>
                                            <span class="selectgroup-button">Mendengarkan</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="uncontrolled[]" value="Melaksanakan Tugas" class="selectgroup-input" @if (in_array("Melaksanakan Tugas", $array_uncontrolled)) checked="true" @endif>
                                            <span class="selectgroup-button">Melaksanakan Tugas</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="uncontrolled[]" value="Cuaca" class="selectgroup-input" @if (in_array("Cuaca", $array_uncontrolled)) checked="true" @endif>
                                            <span class="selectgroup-button">Cuaca</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="uncontrolled[]" value="Relaksasi" class="selectgroup-input" @if (in_array("Relaksasi", $array_uncontrolled)) checked="true" @endif>
                                            <span class="selectgroup-button">Relaksasi</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer mt-5 pt-5" style="text-align: center">
                                <button type="submit" class="action-button">Lanjut</button>
                            </div>
                        </div>
                </div>
            </form>
        </div>
    </div>
</div>

	@include('sweetalert::alert')

	@yield('js')

</body>

@endsection
