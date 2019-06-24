@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h3>Welcome Cheri</h3>
        </div>
    </div>
    <div class="row mt-5 d-flex align-items-baseline">
        <div class="col-5 align-items-center align-items-center">
            <div class="d-flex justify-content-between">
                <h4>Last Checking: <span class="font-italic pl-1">2018/12/25</span>
            </div>
        </div>
        <div class="col-2"></div>
        <div class="col-5">
            <a href="#" class="btn btn-primary">Weight In!</a>
        </div>
    </div>
</div>

@endsection