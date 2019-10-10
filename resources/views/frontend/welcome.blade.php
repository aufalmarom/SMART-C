@extends('layouts.frontend')
@section('content')
<div class="row">
    <div class="col text-center">
        {{-- <img src="../assets/img/girl_equipment.png" style="margin-top:130px;" alt="girl"> --}}
    </div>
    <div class="col-md-auto">
        <div class="row justify-content-center text-white" style="margin-top:310px">
            <h1>Selamat Datang, Superhero!</h1>
        </div>
        <div class="row justify-content-center text-white" style="margin-bottom:10px">
            <h1 style="font-size:90px;">SMART-C</h1>
        </div>
        {{-- <div class="row justify-content-center text-white" style="margin-bottom:10px">
            <p style="font-size:20px;">Membentuk Resiliensi Digital pada Anak</p>
        </div> --}}
        <div class="row justify-content-center">
            <div class="col-md-auto">
                <a href="{{route('register')}}" class="btn btn-lg btn-success">Yuk Mulai Mainkan  <i class="fas fa-gamepad fa-lg"></i></a>
            </div>
            <div class="col-md-auto">
                <a data-toggle="modal" data-target="#response" class="text-white btn btn-lg btn-success">Kamu suka kan sama Game ini? <i class="fas fa-star-half-alt fa-lg"></i></a>
            </div>
        </div>
    </div>
    <div class="col text-center" style="margin-top:70px;">
        {{-- <img src="../assets/img/boy_equipment.png" alt=""> --}}
    </div>
</div>
<form action="{{route('response.post.user')}}" method="post">
    @csrf
    <div class="modal fade" id="response" tabindex="-1" role="dialog" aria-hidden="true">
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
                            {{-- //star review --}}
                            <div class="col-md-12">
                                <div class="form-group form-group-default">
                                    <label>Tanggapanmu</label>
                                    <textarea id="review" type="text" name="review" rows="10" class="form-control" placeholder="gimana sih menurutmu aplikasi ini?" required></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="submi" class="btn btn-success">Kirim</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
