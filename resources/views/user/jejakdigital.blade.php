@extends('layouts.frontend')
@section('content')

{{-- <audio id="audio" src="{{asset('the_entertainer.mp3')}}" autoplay loop></audio> --}}

<div class="container">
    <div class="row mt-5">
        <div class="col-md"></div>
        <div class="col-md-8">
            <form action="" method="" class="shadow rounded">
                <div class="card card-white shadow rounded">
                    <div class="card-header">
                        <h2>Media Sosial Apa Saja Yang Kamu Pakai?</h2>
                    </div>
                    <div class="card-body">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="selectgroup selectgroup-pills">
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="value" value="Facebook" class="selectgroup-input"
                                        checked="">
                                    <span class="selectgroup-button">Facebook</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="value" value="Instagram" class="selectgroup-input">
                                    <span class="selectgroup-button">Instagram</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="value" value="WhatsApp" class="selectgroup-input">
                                    <span class="selectgroup-button">WhatsApp</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="value" value="LINE" class="selectgroup-input">
                                    <span class="selectgroup-button">LINE</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="value" value="Twitter" class="selectgroup-input">
                                    <span class="selectgroup-button">Twitter</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="value" value="Telegram" class="selectgroup-input">
                                    <span class="selectgroup-button">Telegram</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="checkbox" name="value" value="YouTube" class="selectgroup-input">
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

@endsection