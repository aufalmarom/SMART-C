@extends('layouts.frontend')
@section('content')
{{-- <audio id="audio" src="{{asset('the_entertainer.mp3')}}" autoplay loop></audio> --}}
<div class="container">
    <form action="#" method="POST" class="form">
        {{ csrf_field() }}
        <div class="row mt-5 mb-5">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card card-white shadow rounded" id="awal">
                    <div class="card-header">
                        <h2>Yuk isi data mu</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <h6 class="label-control">Siapa Namamu?</h6>
                            <input class="form-control" type="text" name="nama" placeholder="Nama..." required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-warning btn-sm" href="#dua">Lanjut</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

        <div class="row mt-5 mb-5">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card card-white shadow rounded" id="dua">
                    <div class="card-body">
                        <div class="form-group">
                            <h6 class="label-control">Dimana dan Kapan Kamu Lahir?</h6>
                            <input class="form-control" type="text" name="tempat" placeholder="Dimana ya..." required>
                            <input class="form-control" type="date" name="bday" min="1995-01-01">
                        </div>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-warning btn-sm" href="#tiga">Lanjut</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

        <div class="row mt-5 mb-5">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card card-white shadow rounded" id="tiga">
                    <div class="card-body">
                        <div class="form-group">
                            <h6 class="label-control">Dimana Sekolahmu?</h6>
                            <input class="form-control" type="text" name="sekolah" placeholder="Sekolahku di..."
                                required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-warning btn-sm" href="#empat">Lanjut</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

        <div class="row mt-5 mb-5">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card card-white shadow rounded" id="empat">
                    <div class="card-body">
                        <div class="form-group">
                            <h6 class="label-control">Siapa nama Ayah dan Ibumu?</h6>
                            <input class="form-control" type="text" name="ayah" placeholder="Nama Ayah..." required>
                            <input class="form-control" type="text" name="ibu" placeholder="Nama Ibu..." required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-warning btn-sm" href="#lima">Lanjut</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

        <div class="row mt-5 mb-5">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card card-white shadow rounded" id="lima">
                    <div class="card-body">
                        <div class="form-group">
                            <h6 class="label-control">Apa Kesenanganmu?</h6>
                            <input class="form-control" type="text" name="hobby" placeholder="Aku senang ketika..."
                                required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-warning btn-sm" href="#awal">Awal</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </form>
</div>

@endsection