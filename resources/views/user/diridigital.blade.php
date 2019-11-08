@extends('layouts.frontend')
@section('content')

<link rel="stylesheet" href="{{asset('css/sesi.css')}}">

<div class="container">
    <div class="row">
        <div class="col-md"></div>
        <div class="col-md-8">
            <form id="regForm" action="" method="" class="shadow rounded">
                {{ csrf_field() }}
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

<script src="{{asset('js/sesi.js')}}"></script>

@endsection