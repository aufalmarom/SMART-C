@extends('layouts.backend')

@section('content')

<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Data</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="{{route('dashboard')}}">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{route('users.read')}}">Pengguna</a>
            </li>
        </ul>
    </div>
    <div class="row">
        
    </div>
</div>

@endsection
