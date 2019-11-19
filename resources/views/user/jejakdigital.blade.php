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

    #kotakkiri, #kotakkanan {
    width: auto;
    height: auto;
    padding: 10px;
    border: 1px solid black;
    border-radius: 15px;
    }
</style>

<script>
    function allowDrop(ev) {
          ev.preventDefault();
        }
        
        function drag(ev) {
          ev.dataTransfer.setData("text", ev.target.id);
        }
        
        function drop(ev) {
          ev.preventDefault();
          var data = ev.dataTransfer.getData("text");
          ev.target.appendChild(document.getElementById(data));
        }
</script>

@section('body')

<body class="bg-sesi1-2">
    <audio id="audio" src="{{asset('the_entertainer.mp3')}}" autoplay loop>
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
                                <div id="kotakkiri" ondrop="drop(event)" ondragover="allowDrop(event)">
                                    <a class="btn btn-primary btn-border btn-round mt-2 mb-2" draggable="true"
                                        ondragstart="drag(event)" name="socmed[]" value="Facebook" id="drag1">Facebook</a>
                                    <a class="btn btn-primary btn-border btn-round mt-2 mb-2" draggable="true"
                                        ondragstart="drag(event)" name="socmed[]" value="Instagram" id="drag2">Instagram</a>
                                    <a class="btn btn-primary btn-border btn-round mt-2 mb-2" draggable="true"
                                        ondragstart="drag(event)" name="socmed[]" value="LINE" id="drag3">LINE</a>
                                    <a class="btn btn-primary btn-border btn-round mt-2 mb-2" draggable="true"
                                        ondragstart="drag(event)" name="socmed[]" value="WhatsApp" id="drag4">WhatsApp</a>
                                </div>
                            </div>
                            <div class="col-md pahlawan-kotak">
                                <img class="pahlawan-img" src="{{asset('img/boy_equipment.png')}}" alt="Pahlawan">
                            </div>
                            <div class="col-md-3" style="text-align:center">
                                <h2>aku nduwe</h2>
                                <div id="kotakkanan" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
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

{{-- Jaga Jaga Kalo Nanti Bakal Kenapa Kenapa. Jangan di Delete Dulu
<div class="form-group">
    <div class="selectgroup selectgroup-pills">
        @php
        $array = explode(", ", $data->socmed);
        @endphp
        <label class="selectgroup-item">
            <input type="checkbox" name="socmed[]" value="Facebook" class="selectgroup-input" @if (in_array("Facebook", $array)) checked="true" @endif>
            <span class="selectgroup-button">Facebook</span>
        </label>
        <label class="selectgroup-item">
            <input type="checkbox" name="socmed[]" value="Instagram" class="selectgroup-input" @if (in_array("Instagram", $array)) checked="true" @endif>
            <span class="selectgroup-button">Instagram</span>
        </label>
        <label class="selectgroup-item">
            <input type="checkbox" name="socmed[]" value="WhatsApp" class="selectgroup-input" @if (in_array("WhatsApp", $array)) checked="true" @endif>
            <span class="selectgroup-button">WhatsApp</span>
        </label>
        <label class="selectgroup-item">
            <input type="checkbox" name="socmed[]" value="LINE" class="selectgroup-input" @if (in_array("LINE", $array)) checked="true" @endif>
            <span class="selectgroup-button">LINE</span>
        </label>
    </div>
</div> --}}

</body>

@endsection
