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

    .pahlawan-img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 25%;
    }

    .pahlawan-kotak {
        width: auto;
        height: auto;
        padding: 10px;
        border-radius: 15px;
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

    .kotakkiri, .kotakkanan {
    width: auto;
    height: auto;
    padding: 10px;
    border: 1px solid black;
    border-radius: 15px;
    }
</style>


@section('body')

<body class="bg-sesi1-2">
    <audio id="audio" src="{{asset('music/Sugar-Katrina Stone.mp3')}}" autoplay loop>
    </audio>

    <div class="row pull-right mt-5 mr-5">
    <form action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit" class="btn btn-simple btn-danger" style="border-radius: 15px">Keluar</button>
    </form>
</div>
<br><br><br><br><br>
<div class="container">
    <div class="row mt-5">
        <div class="col-md"></div>
        <div class="col-md-10">
            <form class="animated fadeIn delay-1s" action="{{route('jejakdigital.post.user')}}" method="post">
                @csrf
                <div class="card shadow" style="border-radius: 15px">
                    <div class="card-header">
                        <h2 align="center">Media Sosial apa saja yang kamu punya?</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3" style="text-align:center">
                                <h2>aku ra nduwe</h2>
                                <div class="kotakkiri">
                                    <div id="left-facebook" class="selectgroup selectgroup-pills" style="display:block">
                                        <label class="selectgroup-item">
                                            <input id="left-cb-facebook" type="checkbox" class="selectgroup-input" onclick="LeftCBFacebook()">
                                            <span class="selectgroup-button">Facebook</span>
                                        </label>
                                    </div>
                                    <div id="left-twitter" class="selectgroup selectgroup-pills" style="display:block">
                                        <label class="selectgroup-item">
                                            <input id="left-cb-twitter" type="checkbox" class="selectgroup-input" onclick="LeftCBTwitter()">
                                            <span class="selectgroup-button">Twitter</span>
                                        </label>
                                    </div>
                                    <div id="left-whatsapp" class="selectgroup selectgroup-pills" style="display:block">
                                        <label class="selectgroup-item">
                                            <input id="left-cb-whatsapp" type="checkbox" class="selectgroup-input" onclick="LeftCBWhatsApp()">
                                            <span class="selectgroup-button">WhatsApp</span>
                                        </label>
                                    </div>
                                    <div id="left-line" class="selectgroup selectgroup-pills" style="display:block">
                                        <label class="selectgroup-item">
                                            <input id="left-cb-line" type="checkbox" class="selectgroup-input" onclick="LeftCBLINE()">
                                            <span class="selectgroup-button">LINE</span>
                                        </label>
                                    </div>
                                    <div id="left-instagram" class="selectgroup selectgroup-pills" style="display:block">
                                        <label class="selectgroup-item">
                                            <input id="left-cb-instagram" type="checkbox" class="selectgroup-input" onclick="LeftCBInstagram()">
                                            <span class="selectgroup-button">Instagram</span>
                                        </label>
                                    </div>
                                    <div id="left-telegram" class="selectgroup selectgroup-pills" style="display:block">
                                        <label class="selectgroup-item">
                                            <input id="left-cb-telegram" type="checkbox" class="selectgroup-input" onclick="LeftCBTelegram()">
                                            <span class="selectgroup-button">Telegram</span>
                                        </label>
                                    </div>
                                    <div id="left-youtube" class="selectgroup selectgroup-pills" style="display:block">
                                        <label class="selectgroup-item">
                                            <input id="left-cb-youtube" type="checkbox" class="selectgroup-input" onclick="LeftCBYouTube()">
                                            <span class="selectgroup-button">YouTube</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md pahlawan-kotak">
                                <img class="pahlawan-img" src="{{asset('img/boy_equipment.png')}}" alt="Pahlawan">
                            </div>
                            <div class="col-md-3" style="text-align:center">
                                <h2>aku nduwe</h2>
                                <form action="{{route('jejakdigital.post.user')}}" method="post">
                                    @csrf
                                    <div class="kotakkanan">
                                        <div id="right-facebook" class="selectgroup selectgroup-pills" style="display:none">
                                            <label class="selectgroup-item">
                                                <input id="right-cb-facebook" type="checkbox" name="socmed[]" value="Facebook" class="selectgroup-input" onclick="RightCBFacebook()">
                                                <span class="selectgroup-button">Facebook</span>
                                            </label>
                                        </div>
                                        <div id="right-twitter" class="selectgroup selectgroup-pills" style="display:none">
                                            <label class="selectgroup-item">
                                                <input id="right-cb-twitter" type="checkbox" name="socmed[]" value="Twitter" class="selectgroup-input" onclick="RightCBTwitter()">
                                                <span class="selectgroup-button">Twitter</span>
                                            </label>
                                        </div>
                                        <div id="right-whatsapp" class="selectgroup selectgroup-pills" style="display:none">
                                            <label class="selectgroup-item">
                                                <input id="right-cb-whatsapp" type="checkbox" name="socmed[]" value="WhatsApp" class="selectgroup-input" onclick="RightCBWhatsApp()">
                                                <span class="selectgroup-button">WhatsApp</span>
                                            </label>
                                        </div>
                                        <div id="right-line" class="selectgroup selectgroup-pills" style="display:none">
                                            <label class="selectgroup-item">
                                                <input id="right-cb-line" type="checkbox" name="socmed[]" value="LINE" class="selectgroup-input" onclick="RightCBLINE()">
                                                <span class="selectgroup-button">LINE</span>
                                            </label>
                                        </div>
                                        <div id="right-instagram" class="selectgroup selectgroup-pills" style="display:none">
                                            <label class="selectgroup-item">
                                                <input id="right-cb-instagram" type="checkbox" name="socmed[]" value="Instagram" class="selectgroup-input" onclick="RightCBInstagram()">
                                                <span class="selectgroup-button">Instagram</span>
                                            </label>
                                        </div>
                                        <div id="right-telegram" class="selectgroup selectgroup-pills" style="display:none">
                                            <label class="selectgroup-item">
                                                <input id="right-cb-telegram" type="checkbox" name="socmed[]" value="Telegram" class="selectgroup-input" onclick="RightCBTelegram()">
                                                <span class="selectgroup-button">Telegram</span>
                                            </label>
                                        </div>
                                        <div id="right-youtube" class="selectgroup selectgroup-pills" style="display:none">
                                            <label class="selectgroup-item">
                                                <input id="right-cb-youtube" type="checkbox" name="socmed[]" value="YouTube" class="selectgroup-input" onclick="RightCBYouTube()">
                                                <span class="selectgroup-button">YouTube</span>
                                            </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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

@include('sweetalert::alert')
@yield('js')

<script src="{{asset('js/jejakdigital.js')}}"></script>

</body>

@endsection
