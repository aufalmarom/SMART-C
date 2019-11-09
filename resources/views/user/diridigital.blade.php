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
<div class="container">
    <div class="row">
        <div class="col-md"></div>
            <div class="col-md-8">
                <form id="regForm" action="" method="post" class="shadow rounded">
                    @csrf
                    <h2>Yuk isi data mu</h2>
                    <div class="tab">
                        <div class="form-group">
                            <h6 class="label-control">Siapa Namamu?</h6>
                            <input class="form-control" type="text" name="nama" placeholder="Nama..."
                                oninput="this.className = ''" required autofocus>
                        </div>
                    </div>

                    <div class="tab">
                        <div class="form-group">
                            <h6 class="label-control">Dimana dan Kapan Kamu Lahir?</h6>
                            <input class="form-control" type="text" name="tempat" placeholder="Dimana ya..."
                                oninput="this.className = ''" required>
                            <input class="form-control" type="date" name="bday" min="1995-01-01">
                        </div>
                    </div>

                    <div class="tab">
                        <div class="form-group">
                            <h6 class="label-control">Dimana Sekolahmu?</h6>
                            <input class="form-control" type="text" name="sekolah" placeholder="Sekolahku di..."
                                oninput="this.className = ''" required>
                        </div>
                    </div>

                    <div class="tab">
                        <div class="form-group">
                            <h6 class="label-control">Siapa nama Ayah dan Ibumu?</h6>
                            <input class="form-control" type="text" name="ayah" placeholder="Nama Ayah..." required>
                            <input class="form-control" type="text" name="ibu" placeholder="Nama Ibu..."
                                oninput="this.className = ''" required>
                        </div>
                    </div>

                    <div class="tab">
                        <div class="form-group">
                            <h6 class="label-control">Apa Kesenanganmu?</h6>
                            <input class="form-control" type="text" name="hobby" placeholder="Aku senang ketika..."
                                required>
                        </div>
                    </div>

                    <div style="overflow:auto;" class="mr-2">
                        <div style="float:right;">
                            <button type="button" class="btn btn-sm btn-warning" id="prevBtn"
                                onclick="nextPrev(-1)">Previous</button>
                            <button type="button" class="btn btn-sm btn-success" id="nextBtn"
                                onclick="nextPrev(1)">Next</button>
                        </div>
                    </div>

                    <div style="text-align:center;margin-top:10px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
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
