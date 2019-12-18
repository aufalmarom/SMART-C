@extends('layouts.frontend')

<style>
    .bg-welcome{
        background-image: url("../img/homepage.png");
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>

@section('body')

<body class="bg-welcome">
    <audio id="audio" src="{{asset('music/the_entertainer.mp3')}}" autoplay loop>
    </audio>
    <div class="row pull-right mt-5 mr-5">
        <form action="{{route('logout')}}" method="post">
            @csrf
            <button type="submit" class="btn btn-simple btn-danger" style="border-radius: 15px">Keluar</button>
        </form>
    </div>
    <div class="container">
        <div class="row">
            <div class="col text-center">
            </div>
            <div class="col-md-auto">
                <div class="row justify-content-center text-white" style="margin-top:300px; margin-bottom:20px;">
                    <h1>Terimakasih sudah memainkan game ini, Superhero!</h1>
                </div>
                <div class="row justify-content-center" style="margin-bottom:10px;">
                    <div class="col-md-auto">
                        <a data-toggle="modal" data-target="#feedback" class="text-white btn btn-lg btn-success" style="border-radius:15px">Kamu suka kan sama Game ini? <i class=" ml-2 fas fa-star-half-alt fa-lg"></i></a>
                    </div>
                </div>
                <div class="row justify-content-center text-white">
                    <h1 style="font-size:90px;">SMART-C</h1>
                    <br>
                </div>
                <div class="row justify-content-center text-white">
                    <p style="font-size:18px;">Membentuk Resiliensi Digital pada Anak</p>
                </div>
            </div>
            <div class="col text-center" style="margin-top:70px;">
            </div>
        </div>

    </div>


    <form action="{{route('feedback.post.user')}}" method="post">
        @csrf
        <div class="modal fade" id="feedback" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header no-bd">
                        <h2 class="col-12 modal-title text-center">
                            Tanggapi Aplikasi ini ya ;)
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </h2>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-12" style="text-align:center;">
                                    <div class="form-check">
                                        <label>Beri Nilai</label><br/>
                                        <label class="form-radio-label">
                                            <input class="form-radio-input" type="radio" name="rating" value="1">
                                            <span class="form-radio-sign">1</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="rating" value="2">
                                            <span class="form-radio-sign">2</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="rating" value="3" checked="">
                                            <span class="form-radio-sign">3</span>
                                        </label>
                                        <label class="form-radio-label">
                                            <input class="form-radio-input" type="radio" name="rating" value="4">
                                            <span class="form-radio-sign">4</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="rating" value="5">
                                            <span class="form-radio-sign">5</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-group-default">
                                        <label>Tanggapanmu</label>
                                        <textarea id="review" type="text" name="review" rows="9" class="form-control" placeholder="gimana sih menurutmu aplikasi ini?" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="submit" class="btn btn-success" style="border-radius:15px">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
	@include('sweetalert::alert')

	@yield('js')

</body>

@endsection
