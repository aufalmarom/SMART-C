@extends('layouts.frontend')
@section('content')
<audio id="audio" src="{{asset('the_entertainer.mp3')}}" autoplay loop>
</audio> 
<div class="row">
    <div class="col text-center">
        {{-- <img src="../assets/img/girl_equipment.png" style="margin-top:130px;" alt="girl"> --}}
    </div>
    <div class="col-md-auto">
        <div class="row justify-content-center text-white" style="margin-top:300px">
            <h1>Selamat Datang, Superhero!</h1>
        </div>
        <div class="row justify-content-center text-white">
            <h1 style="font-size:90px;">SMART-C</h1>
            <br>
        </div>
        <div class="row justify-content-center text-white">
            <p style="font-size:18px;">Membentuk Resiliensi Digital pada Anak</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-auto">
                <a href="{{route('register')}}" class="btn btn-lg btn-success">Yuk Mulai Mainkan  <i class="fas fa-gamepad fa-lg"></i></a>
            </div>
            <div class="col-md-auto">
                <a data-toggle="modal" data-target="#feedback" class="text-white btn btn-lg btn-success">Kamu suka kan sama Game ini? <i class="fas fa-star-half-alt fa-lg"></i></a>
            </div>
        </div>
    </div>
    <div class="col text-center" style="margin-top:70px;">
        {{-- <img src="../assets/img/boy_equipment.png" alt=""> --}}
    </div>
</div>
<form action="{{route('feedback.post.user')}}" method="post">
    @csrf
    <div class="modal fade" id="feedback" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header no-bd">
                    <h2 class="modal-title" style="margin-left:110px;">
                        Tanggapi Aplikasi ini ya ;)
                    </h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="small ml-3">Isi beberapa pertanyaan di bawah ya!</p>
                    <form>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                    <label>Namamu</label>
                                    <input id="name" type="text" name="name" class="form-control" placeholder="siapa namamu?" required>
                                </div>
                            </div>
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
                    <button type="submit" class="btn btn-success">Kirim</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
