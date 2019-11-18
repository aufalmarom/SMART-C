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
    <audio id="audio" src="{{asset('the_entertainer.mp3')}}" autoplay loop>
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
            <form class="animated fadeInUp delay-1s" id="msform" action="{{route('diridigital.post.user')}}" method="post">
                @csrf
                <ul id="progressbar">
                    <li class="active">Namamu</li>
                    <li>Jenis Kelaminmu</li>
                    <li>Hobimu</li>
                    <li>Tentang Harimu</li>
                </ul>
                <h2>Pahlawan ini butuh data dirimu loh!</h2>
                <fieldset class="shadow">
                    <h6 class="label-control">Siapa Namamu?</h6>
                    <input class="form-control" type="text" name="name" placeholder="isikan namamu ya"
                        oninput="this.className = ''" required autofocus @if ($data !=NULL) value="{{$data->name}}"
                        @endif>
                    <input type="button" name="next" class="next action-button" value="Lanjut" />
                </fieldset>

                <fieldset class="shadow">
                    <h6 class="label-control">Kamu perempuan atau laki-laki?</h6>
                    <input class="form-control" type="text" name="sex" placeholder="perempuan / laki-laki"
                        oninput="this.className = ''" required @if ($data !=NULL) value="{{$data->sex}}" @endif>
                    <input type="button" name="previous" class="previous action-button" value="Kembali" />
                    <input type="button" name="next" class="next action-button" value="Lanjut" />
                </fieldset>

                <fieldset class="shadow">
                    <h6 class="label-control">Hobimu apa?</h6>
                    <input class="form-control" type="text" name="hobi" placeholder="isi hobimu"
                        oninput="this.className = ''" required @if ($data !=NULL) value="{{$data->hobi}}" @endif>
                    <input type="button" name="previous" class="previous action-button" value="Kembali" />
                    <input type="button" name="next" class="next action-button" value="Lanjut" />
                </fieldset>

                <fieldset class="shadow">
                    <h6 class="label-control">Gimana harimu hari ini? Senang atau sedih? Kenapa gitu?</h6>
                    <input class="form-control" type="text" name="feel" placeholder="senang / sedih, kasih alasannya ya"
                        oninput="this.className = ''" required @if ($data !=NULL) value="{{$data->feel}}" @endif>
                    <input type="button" name="previous" class="previous action-button" value="Kembali" />
                    <input type="submit" name="submit" class="submit action-button" value="Simpan" />
                </fieldset>
            </form>
        </div>
        <div class="col-md"></div>
    </div>
</div>

@include('sweetalert::alert')

<script id="rendered-js" type="text/javascript" src="{{asset('js/sesi.js')}}"></script>

</body>
@endsection
