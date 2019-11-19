@extends('layouts.frontend')
<link rel="stylesheet" href="{{asset('css/sesi.css')}}">
<style>
    .bg-sesi2{
        background-image: url("../img/page-2.png");
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>

@section('body')

<body class="bg-sesi2">
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
        <div class="col-md"></div>
            <div class="col-md-8">
                <form class="animated fadeInUp delay-1s" id="msform" action="{{route('emosivirtual.post.user')}}" method="POST">
                    @csrf
                    <ul id="progressbar">
                        <li class="active" style="width: 50%;">Like</li>
                        <li style="width: 50%;">Don't Like</li>
                    </ul>
                    <h2 class="text-white">Gimana videonya? keren kan.</h2>
                    <h2 class="text-white">Pahlawan ini butuh kondisi perasaanmu loh!</h2>
                    <fieldset class="shadow">
                        <h6 class="label-control">Sekarang kamu ga suka digimanain sih pas di sosial media?</h6>
                        <input class="form-control" type="text" name="negative" placeholder="yang panjang gapapa kok"
                            oninput="this.className = ''" required autofocus @if ($data != NULL) value="{{$data->negative}}" @endif>
                        <input type="button" name="next" class="next action-button" value="Lanjut" />
                    </fieldset>

                    <fieldset class="shadow">
                        <h6 class="label-control">Sukanya kamu digiminain di sosial media?</h6>
                        <input class="form-control" type="text" name="positive" placeholder="senang / sedih, kasih alasannya ya"
                            oninput="this.className = ''" required autofocus @if ($data != NULL) value="{{$data->positive}}" @endif>
                        <input type="button" name="previous" class="previous action-button" value="Kembali" />
                        <input type="submit" name="submit" class="submit action-button" value="Simpan" />
                    </fieldset>
                </form>
            </div>
        <div class="col-md"></div>
    </div>
</div>
    <script src="{{asset('js/sesi.js')}}"></script>
	@include('sweetalert::alert')
</body>

@endsection
