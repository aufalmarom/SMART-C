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
    <audio id="audio" src="{{asset('the_entertainer.mp3')}}" autoplay loop></audio>

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
                <form id="regForm" action="{{route('emosivirtual.post.user')}}" method="post" class="shadow rounded">
                    @csrf
                    <h2>Gimana videonya? keren kan.</h2>
                    <div class="tab">
                        <div class="form-group">
                            <h6 class="label-control">Sekarang kamu ga suka digimanain sih pas di sosial media?</h6>
                            <input class="form-control" type="text" name="negative" placeholder="yang panjang gapapa kok"
                                oninput="this.className = ''" required autofocus @if ($data != NULL) value="{{$data->negative}}" @endif>
                        </div>
                    </div>

                    <div class="tab">
                        <div class="form-group">
                            <h6 class="label-control">Sukanya kamu digiminain di sosial media?</h6>
                            <input class="form-control" type="text" name="positive" placeholder="yang panjang gapapa kok"
                                oninput="this.className = ''" required @if ($data != NULL) value="{{$data->positve}}" @endif>
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
