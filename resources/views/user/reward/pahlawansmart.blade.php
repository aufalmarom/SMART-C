@extends('layouts.frontend')
<link rel="stylesheet" href="{{asset('css/pahlawansmart.css')}}">
<style>
    .bg-sesi3 {
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
    <audio id="audio" src="{{asset('music/Likes-Master.mp3')}}" autoplay loop></audio>

    <div class="row pull-right mt-5 mr-5">
    <form action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit" class="btn btn-simple btn-danger" style="border-radius: 15px">Keluar</button>
    </form>
</div>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" style="margin-left: 5em;">
            <form class="animated fadeIn delay-1s" id="msform" action="{{route('pahlawansmart.post.user')}}"
                method="post">
                @csrf
                <ul id="progressbar">
                    <li class="active" style="width: 33%;">Pahlawan Smart</li>
                    <li style="width: 33%;">Sifat</li>
                    <li style="width: 33%;">Alasanmu</li>
                </ul>
                <h2 class="text-black">Pilih pahlawan kesukaanmu</h2>
                <fieldset class="shadow">
                    <div class="form-group">
                        <div class="row mt-3 mb-3" align="center">
                            <div class="col-md">
                                <input type="radio" name="hero" value="Imam Bonjol" id="imambonjol"
                                    class="input-hidden" required @if (@$data->hero == 'Imam Bonjol') checked="true"
                                @endif />
                                <label for="imambonjol">
                                    <img src="{{asset('img/pahlawan/imambonjol.jpg')}}" />
                                </label>
                            </div>
                            <div class="col-md">
                                <input type="radio" name="hero" value="R.A. Kartini" id="kartini" class="input-hidden"
                                    required @if (@$data->hero == 'R.A. Kartini') checked="true" @endif />
                                <label for="kartini">
                                    <img src="{{asset('img/pahlawan/kartini.jpg')}}" />
                                </label>
                            </div>
                            <div class="col-md">
                                <input type="radio" name="hero" value="Sultan Hasanudin" id="hasanudin"
                                    class="input-hidden" required @if (@$data->hero == 'Sultan Hasanudin')
                                checked="true" @endif />
                                <label for="hasanudin">
                                    <img src="{{asset('img/pahlawan/hasanudin.jpg')}}" />
                                </label>
                            </div>
                            <div class="col-md">
                                <input type="radio" name="hero" value="Ki Hajar Dewantara" id="dewantara"
                                    class="input-hidden" required @if (@$data->hero == 'Ki Hajar Dewantara')
                                checked="true" @endif />
                                <label for="dewantara">
                                    <img src="{{asset('img/pahlawan/dewantara.jpg')}}" />
                                </label>
                            </div>
                            <div class="col-md">
                                <input type="radio" name="hero" value="Pattimura" id="pattimura" class="input-hidden"
                                    required @if (@$data->hero == 'Pattimura') checked="true" @endif />
                                <label for="pattimura">
                                    <img src="{{asset('img/pahlawan/pattimura.jpg')}}" />
                                </label>
                            </div>
                        </div>
                        <div class="row mt-3 mb-3" align="center">
                            <div class="col-md">
                                <input type="radio" name="hero" value="Dr. Sutomo" id="sutomo" class="input-hidden"
                                    required @if (@$data->hero == 'Dr. Sutomo') checked="true" @endif />
                                <label for="sutomo">
                                    <img src="{{asset('img/pahlawan/sutomo.jpg')}}" alt="Dr. Sutomo" />
                                </label>
                            </div>
                            <div class="col-md">
                                <input type="radio" name="hero" value="Cut Nyak Dien" id="dien" class="input-hidden"
                                    required @if (@$data->hero == 'Cut Nyak Dien') checked="true" @endif />
                                <label for="dien">
                                    <img src="{{asset('img/pahlawan/cutnyakdien.jpg')}}" />
                                </label>
                            </div>
                            <div class="col-md">
                                <input type="radio" name="hero" value="Jendral Sudirman" id="sudirman"
                                    class="input-hidden" required @if (@$data->hero == 'Jendral Sudirman')
                                checked="true" @endif />
                                <label for="sudirman">
                                    <img src="{{asset('img/pahlawan/sudirman.jpg')}}" alt="Jendral Sudirman" />
                                </label>
                            </div>
                            <div class="col-md">
                                <input type="radio" name="hero" value="Sisingamangaraja" id="sisingamangaraja"
                                    class="input-hidden" required @if (@$data->hero == 'Sisingamangaraja')
                                checked="true" @endif />
                                <label for="sisingamangaraja">
                                    <img src="{{asset('img/pahlawan/sisingamangaraja.jpg')}}" />
                                </label>
                            </div>
                            <div class="col-md">
                                <input type="radio" name="hero" value="Pangeran Diponegoro" id="diponegoro"
                                    class="input-hidden" required @if (@$data->hero == 'Pangeran Diponegoro')
                                checked="true" @endif />
                                <label for="diponegoro">
                                    <img src="{{asset('img/pahlawan/diponegoro.jpg')}}" />
                                </label>
                            </div>
                        </div>
                    </div>
                    <input type="button" name="next" class="next action-button" value="Lanjut" />
                </fieldset>

                <fieldset class="shadow">
                    <h6 class="label-control">Seperti apa sifat pahlawanmu?</h6>
                    <textarea rows="4" class="form-control" type="text" name="personality"
                        placeholder="kepribadian pahlawanku" required autofocus @if (@$data !=NULL)
                        value="{{@$data->personality}}"
                        @endif>@if (@$data != NULL) {{@$data->personality}} @endif</textarea>
                    <input type="button" name="previous" class="previous action-button" value="Kembali" />
                    <input type="button" name="next" class="next action-button" value="Lanjut" />
                </fieldset>

                <fieldset class="shadow">
                    <h6 class="label-control">Apa alasanmu memilih pahlawan tersebut?</h6>
                    <textarea rows="4" class="form-control" type="text" name="reason" placeholder="alasanku memilih.."
                        required autofocus @if (@$data !=NULL) value="{{@$data->reason}}"
                        @endif>@if (@$data != NULL) {{@$data->reason}} @endif</textarea>
                    <input type="button" name="previous" class="previous action-button" value="Kembali" />
                    <input type="submit" name="submit" class="submit action-button" value="Simpan" />
                </fieldset>
            </form>
        </div>
    </div>
</div>

<script src="{{asset('js/sesi.js')}}"></script>
@include('sweetalert::alert')

@yield('js')

</body>

@endsection
