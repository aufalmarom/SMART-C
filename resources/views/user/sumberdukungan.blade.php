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
    <audio id="audio" src="{{asset('music/the_entertainer.mp3')}}" autoplay loop></audio>

    <div class="row pull-right mt-5 mr-5">
    <form action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit" class="btn btn-simple btn-danger">Keluar</button>
    </form>
</div>
<br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md">
        </div>
        <div class="col-md-9">
            <form class="animated fadeIn delay-1s" action="{{route('sumberdukungan.post.user')}}" method="post">
                @csrf
                <div class="card shadow" style="border-radius: 15px">
                    <div class="card-header">
                        <h2 align="center">Sumber Dukungan</h2>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <h4 class="form-label d-block text-center">Apa yang kamu rasakan jika terkena cyberbullying?</h4>
                                <fieldset class="shadow">
                                    <textarea rows="4" class="form-control" type="text" name="feel" placeholder="ceritakan yang kamu rasakan ya" required autofocus @if (@$data !=NULL) value="{{@$data->feel}}"
                                        @endif>@if ($data !=NULL) {{$data->feel}}
                                        @endif</textarea>
                                </fieldset>
                            </div>
                        </div>

                        @php
                        $array = explode(", ", @$data->doin);
                        @endphp

                        <div class="row justify-content-center mt-5">
                            <div class="form-group">
                                <h4 class="form-label d-block text-center">Apa yang kamu lakukan jika terkena cyberbullying?</h4>
                                <p class="text-center small">kamu bisa milih lebih dari satu loh!</p>
                                <div class="selectgroup selectgroup-pills">
                                    <label class="selectgroup-item">
                                        <input type="checkbox" name="doin[]" value="Cerita sama Ibu" class="selectgroup-input" @if (in_array("Cerita sama Ibu", $array)) checked="true" @endif>
                                        <span class="selectgroup-button">Cerita sama Ibu</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="checkbox" name="doin[]" value="Cerita sama Kakak Kelas" class="selectgroup-input" @if (in_array("Cerita sama Kakak Kelas", $array)) checked="true" @endif>
                                        <span class="selectgroup-button">Cerita sama Kakak Kelas</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="checkbox" name="doin[]" value="Cerita sama Saudara" class="selectgroup-input" @if (in_array("Cerita sama Saudara", $array)) checked="true" @endif>
                                        <span class="selectgroup-button">Cerita sama Saudara</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="checkbox" name="doin[]" value="Cerita sama Teman" class="selectgroup-input" @if (in_array("Cerita sama Teman", $array)) checked="true" @endif>
                                        <span class="selectgroup-button">Cerita sama Teman</span>
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
        <div class="col-md">
        </div>
    </div>
</div>

    @yield('js')

</body>

@endsection
