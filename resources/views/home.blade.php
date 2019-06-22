@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h3>Welcome Cheri</h3>
        </div>
    </div>
    <div class="row mt-5 d-flex align-items-center">
        <div class="col-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h4>Last Checking: <span class="font-weight-bold">130</span></h4>
                <h6><span class="font-italic pl-5">taken 2018/12/25</span></h6>
            </div>
        </div>
        <div class="col-2"></div>
        <div class="col-5">
            <a href="#" class="btn btn-primary">Weight In!</a>
        </div>
    </div>
</div>

@endsection