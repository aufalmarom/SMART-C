@extends('layouts.frontend')
<link rel="stylesheet" href="{{asset('css/sesi.css')}}">
<style>
    .bg-sesi3-5{
        background-image: url("../img/page-2.png");
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

<body class="bg-sesi3-5">
    <audio id="audio" src="{{asset('the_entertainer.mp3')}}" autoplay loop></audio>

    <div class="row pull-right mt-5 mr-5">
    <form action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit" class="btn btn-simple btn-danger">Keluar</button>
    </form>
</div>
<br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form class="animated fadeInUp delay-2s" action="{{route('jejakdigital.post.user')}}" method="post">
                @csrf
                <div class="card shadow" style="border-radius: 15px">
                    <div class="card-header">
                        <h2 align="center">Gimana? Udah nonton filmnya?</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md pahlawan-kotak">
                                <img class="pahlawan-img" src="{{asset('img/boy_equipment.png')}}" alt="Pahlawan">
                            </div>
                            <div class="col-md-6">
                                <h2 align="left">apa yang kamu rasakan setelah menonton film nya?</h2>
                                <div class="row">
                                    <div class="form-group">
                                        <h4 class="form-label d-block">Mulut</h4>
                                        <div class="selecgroup selectgroup-secondary selectgroup-pills">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="socmed[]" value="suka" class="selectgroup-input"
                                                    checked="">
                                                <img src="{{asset('img/emot/suka.png')}}" width="25%"
                                                    class="selectgroup-button selectgroup-button-icon">
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="socmed[]" value="tertawa"
                                                    class="selectgroup-input">
                                                <img src="{{asset('img/emot/tertawa.png')}}" width="25%"
                                                    class="selectgroup-button selectgroup-button-icon">
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="socmed[]" value="kaget" class="selectgroup-input">
                                                <img src="{{asset('img/emot/kaget.png')}}" width="25%"
                                                    class="selectgroup-button selectgroup-button-icon">
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="socmed[]" value="sedih" class="selectgroup-input">
                                                <img src="{{asset('img/emot/sedih.png')}}" width="25%"
                                                    class="selectgroup-button selectgroup-button-icon">
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="socmed[]" value="marah" class="selectgroup-input">
                                                <img src="{{asset('img/emot/marah.png')}}" width="25%"
                                                    class="selectgroup-button selectgroup-button-icon">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <h4 class="form-label d-block">Wajah</h4>
                                        <div class="selecgroup selectgroup-secondary selectgroup-pills">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="socmed[]" value="suka" class="selectgroup-input"
                                                    checked="">
                                                <img src="{{asset('img/emot/suka.png')}}" width="25%"
                                                    class="selectgroup-button selectgroup-button-icon">
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="socmed[]" value="tertawa"
                                                    class="selectgroup-input">
                                                <img src="{{asset('img/emot/tertawa.png')}}" width="25%"
                                                    class="selectgroup-button selectgroup-button-icon">
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="socmed[]" value="kaget" class="selectgroup-input">
                                                <img src="{{asset('img/emot/kaget.png')}}" width="25%"
                                                    class="selectgroup-button selectgroup-button-icon">
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="socmed[]" value="sedih" class="selectgroup-input">
                                                <img src="{{asset('img/emot/sedih.png')}}" width="25%"
                                                    class="selectgroup-button selectgroup-button-icon">
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="socmed[]" value="marah" class="selectgroup-input">
                                                <img src="{{asset('img/emot/marah.png')}}" width="25%"
                                                    class="selectgroup-button selectgroup-button-icon">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <h4 class="form-label d-block">Tangan</h4>
                                        <div class="selecgroup selectgroup-secondary selectgroup-pills">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="socmed[]" value="suka" class="selectgroup-input"
                                                    checked="">
                                                <img src="{{asset('img/emot/suka.png')}}" width="25%"
                                                    class="selectgroup-button selectgroup-button-icon">
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="socmed[]" value="tertawa"
                                                    class="selectgroup-input">
                                                <img src="{{asset('img/emot/tertawa.png')}}" width="25%"
                                                    class="selectgroup-button selectgroup-button-icon">
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="socmed[]" value="kaget" class="selectgroup-input">
                                                <img src="{{asset('img/emot/kaget.png')}}" width="25%"
                                                    class="selectgroup-button selectgroup-button-icon">
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="socmed[]" value="sedih" class="selectgroup-input">
                                                <img src="{{asset('img/emot/sedih.png')}}" width="25%"
                                                    class="selectgroup-button selectgroup-button-icon">
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="socmed[]" value="marah" class="selectgroup-input">
                                                <img src="{{asset('img/emot/marah.png')}}" width="25%"
                                                    class="selectgroup-button selectgroup-button-icon">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <h4 class="form-label d-block">Kaki</h4>
                                        <div class="selecgroup selectgroup-secondary selectgroup-pills">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="socmed[]" value="suka" class="selectgroup-input"
                                                    checked="">
                                                <img src="{{asset('img/emot/suka.png')}}" width="25%"
                                                    class="selectgroup-button selectgroup-button-icon">
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="socmed[]" value="tertawa"
                                                    class="selectgroup-input">
                                                <img src="{{asset('img/emot/tertawa.png')}}" width="25%"
                                                    class="selectgroup-button selectgroup-button-icon">
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="socmed[]" value="kaget" class="selectgroup-input">
                                                <img src="{{asset('img/emot/kaget.png')}}" width="25%"
                                                    class="selectgroup-button selectgroup-button-icon">
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="socmed[]" value="sedih" class="selectgroup-input">
                                                <img src="{{asset('img/emot/sedih.png')}}" width="25%"
                                                    class="selectgroup-button selectgroup-button-icon">
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="socmed[]" value="marah" class="selectgroup-input">
                                                <img src="{{asset('img/emot/marah.png')}}" width="25%"
                                                    class="selectgroup-button selectgroup-button-icon">
                                            </label>
                                        </div>
                                    </div>
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
    </div>
</div>

@include('sweetalert::alert')

@yield('js')

</body>

@endsection
