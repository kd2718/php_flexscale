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
        <div class="col-4 ">
           <form action="/CheckIn" method="post" class="d-flex">

            @csrf
            <div class="row form-group">
                <label for="weight col-form-label">Check In</label>
                <input type="number" name="weight" id="weight" class="form-control @error('weight') is-invalid @enderror" value="{{old('weight')}}" autocomplete="weight" autofocus>
                @error('weight')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>

                <button class="btn btn-primary ">Submit Check In</button>
        </form>
        </div>
    </div>

    <div class="row mt-5 mb-5"></div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-8">
            <table class="table table-sm table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Weight</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2018-12-12</td>
                        <td>12:21</td>
                        <td>123</td>
                        <td><a href="#">Edit Me</a></td>
                        <td><a href="#">Delete Me</a></td>
                    </tr>
                    <tr>
                        <td>2018-12-11</td>
                        <td>10:21</td>
                        <td>125</td>
                        <td><a href="#">Edit Me</a></td>
                        <td><a href="#">Delete Me</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-3"></div>
    </div>
</div>

@endsection
