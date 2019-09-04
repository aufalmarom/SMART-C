@extends('layouts.frontend')
@section('content')
<div class="row">
    <div class="col text-center">
        <img src="../assets/img/girl_equipment.png" style="margin-top:130px;" alt="girl">
    </div>
    <div class="col-md-auto">
        <div class="row justify-content-center" style="margin-top:150px">
            <h1>Selamat Datang, Superhero!</h1>
        </div>
        <div class="row justify-content-center">
            <h1 style="font-size:110px;">SMART-C</h1>
        </div>
        <div class="row justify-content-center" style="margin-bottom:60px">
            <p style="font-size:20px;">Membentuk Resiliensi Digital pada Anak</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-auto">
                <button type="submit" class="btn btn-lg btn-success">Yuk Mulai Mainkan  <i class="fas fa-gamepad fa-lg"></i></button>
            </div>
            <div class="col-md-auto">
                <button type="submit" class="btn btn-lg btn-success">Kamu suka kan sama Game ini? <i class="fas fa-star-half-alt fa-lg"></i></button>
            </div>
        </div>
    </div>
    <div class="col text-center" style="margin-top:70px;">
        <img src="../assets/img/boy_equipment.png" alt="">
    </div>
</div>

@endsection
