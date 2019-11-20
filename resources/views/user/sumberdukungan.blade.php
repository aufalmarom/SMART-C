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
                        <h2 align="center">Teman atau Lawan?</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="form-label d-block">Peduli dengan perasaan orang lain.</h4>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ans1" value="Bahagia" required @if (@$data->ans1 == 'Bahagia')
                                        checked="true"
                                    @endif>
                                    <img src="{{asset('img/emot/suka.png')}}" width="45px">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ans1" value="Sedih" required @if (@$data->ans1 == 'Sedih')
                                    checked="true"
                                @endif>
                                    <img src="{{asset('img/emot/sedih.png')}}" width="45px">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="form-label d-block">Bahagia saat orang lain berantakan.</h4>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ans2" value="Bahagia" required @if (@$data->ans2 == 'Bahagia')
                                        checked="true"
                                    @endif>
                                    <img src="{{asset('img/emot/suka.png')}}" width="45px">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ans2" value="Sedih" required @if (@$data->ans2 == 'Sedih')
                                    checked="true"
                                @endif>
                                    <img src="{{asset('img/emot/sedih.png')}}" width="45px">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="form-label d-block">Bergiliran dan berbagi.</h4>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ans3" value="Bahagia" required @if (@$data->ans3 == 'Bahagia')
                                        checked="true"
                                    @endif>
                                    <img src="{{asset('img/emot/suka.png')}}" width="45px">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ans3" value="Sedih" required @if (@$data->ans3 == 'Sedih')
                                    checked="true"
                                @endif>
                                    <img src="{{asset('img/emot/sedih.png')}}" width="45px">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="form-label d-block">Bermain dengan siapa saja.</h4>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ans4" value="Bahagia" required @if (@$data->ans4 == 'Bahagia')
                                        checked="true"
                                    @endif>
                                    <img src="{{asset('img/emot/suka.png')}}" width="45px">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ans4" value="Sedih" required @if (@$data->ans4 == 'Sedih')
                                    checked="true"
                                @endif>
                                    <img src="{{asset('img/emot/sedih.png')}}" width="45px">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="form-label d-block">Baik dan menghormati.</h4>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ans5" value="Bahagia" required @if (@$data->ans5 == 'Bahagia')
                                        checked="true"
                                    @endif>
                                    <img src="{{asset('img/emot/suka.png')}}" width="45px">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ans5" value="Sedih" required @if (@$data->ans5 == 'Sedih')
                                    checked="true"
                                @endif>
                                    <img src="{{asset('img/emot/sedih.png')}}" width="45px">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="form-label d-block">Membuat orang lain terlihat bodoh atau tidak keren.</h4>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ans6" value="Bahagia" required @if (@$data->ans6 == 'Bahagia')
                                        checked="true"
                                    @endif>
                                    <img src="{{asset('img/emot/suka.png')}}" width="45px">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ans6" value="Sedih" required @if (@$data->ans6 == 'Sedih')
                                    checked="true"
                                @endif>
                                    <img src="{{asset('img/emot/sedih.png')}}" width="45px">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="form-label d-block">Menggunakan kata-kata yang sopan dan baik.</h4>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ans7" value="Bahagia" required @if (@$data->ans7 == 'Bahagia')
                                        checked="true"
                                    @endif>
                                    <img src="{{asset('img/emot/suka.png')}}" width="45px">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ans7" value="Sedih" required @if (@$data->ans7 == 'Sedih')
                                    checked="true"
                                @endif>
                                    <img src="{{asset('img/emot/sedih.png')}}" width="45px">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="form-label d-block">Mendorong atau memukul orang lain.</h4>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ans8" value="Bahagia" required @if (@$data->ans8 == 'Bahagia')
                                        checked="true"
                                    @endif>
                                    <img src="{{asset('img/emot/suka.png')}}" width="45px">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ans8" value="Sedih" required @if (@$data->ans8 == 'Sedih')
                                    checked="true"
                                @endif>
                                    <img src="{{asset('img/emot/sedih.png')}}" width="45px">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="form-label d-block">Memanggil orang lain dengan panggilan yang tidak baik.</h4>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ans9" value="Bahagia" required @if (@$data->ans9 == 'Bahagia')
                                        checked="true"
                                    @endif>
                                    <img src="{{asset('img/emot/suka.png')}}" width="45px">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ans9" value="Sedih" required @if (@$data->ans9 == 'Sedih')
                                    checked="true"
                                @endif>
                                    <img src="{{asset('img/emot/sedih.png')}}" width="45px">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="form-label d-block">Membantu orang lain.</h4>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ans10" value="Bahagia" required @if (@$data->ans10 == 'Bahagia')
                                        checked="true"
                                    @endif>
                                    <img src="{{asset('img/emot/suka.png')}}" width="45px">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="ans10" value="Sedih" required @if (@$data->ans10 == 'Sedih')
                                    checked="true"
                                @endif>
                                    <img src="{{asset('img/emot/sedih.png')}}" width="45px">
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
