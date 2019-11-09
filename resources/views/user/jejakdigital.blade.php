@extends('layouts.frontend')
<link rel="stylesheet" href="{{asset('css/sesi.css')}}">
<style>
    .bg-sesi1{
        background-image: url("../img/page-1.png");
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>

@section('body')

<body class="bg-sesi1">
    <audio id="audio" src="{{asset('the_entertainer.mp3')}}" autoplay loop>
    </audio>

    <div class="row pull-right mt-5 mr-5">
    <form action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit" class="btn btn-simple btn-danger">Keluar</button>
    </form>
</div>
<br><br><br><br><br>
<div class="container">
    <div class="row mt-5">
        <div class="col-md"></div>
        <div class="col-md-8">
            <form action="{{route('jejakdigital.post.user')}}" method="post" class="shadow rounded">
                @csrf
                <div class="card card-white shadow rounded">
                    <div class="card-header">
                        <h2>Media Sosial Apa Saja Yang Kamu Pakai?</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="selectgroup selectgroup-pills">
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="socmed[]" value="Facebook" class="selectgroup-input">
                                    <span class="selectgroup-button">Facebook</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="socmed[]" value="Instagram" class="selectgroup-input">
                                    <span class="selectgroup-button">Instagram</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="socmed[]" value="WhatsApp" class="selectgroup-input">
                                    <span class="selectgroup-button">WhatsApp</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="socmed[]" value="LINE" class="selectgroup-input">
                                    <span class="selectgroup-button">LINE</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="socmed[]" value="Twitter" class="selectgroup-input">
                                    <span class="selectgroup-button">Twitter</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="socmed[]" value="Telegram" class="selectgroup-input">
                                    <span class="selectgroup-button">Telegram</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="socmed[]" value="YouTube" class="selectgroup-input">
                                    <span class="selectgroup-button">Youtube</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-sm btn-success">Lanjut</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md"></div>
    </div>
</div>
	<script src="{{asset('js/core/jquery.3.2.1.min.js')}}"></script>
	<script src="{{asset('js/core/popper.min.js')}}"></script>
	<script src="{{asset('js/core/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
	<script src="{{asset('js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>
	<script src="{{asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
	<script src="{{asset('js/plugin/chart.js/chart.min.js')}}"></script>
	<script src="{{asset('js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>
	<script src="{{asset('js/plugin/chart-circle/circles.min.js')}}"></script>
	<script src="{{asset('js/plugin/datatables/datatables.min.js')}}"></script>
	<script src="{{asset('js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
	<script src="{{asset('js/plugin/sweetalert/sweetalert.min.js')}}"></script>
	<script src="{{asset('js/plugin/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('js/atlantis.js')}}"></script>
    <script src="{{asset('js/sesi.js')}}"></script>
	@include('sweetalert::alert')

	@yield('js')

</body>

@endsection

