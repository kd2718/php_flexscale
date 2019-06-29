@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h3>Hello there, {{auth()->user()->name}}</h3>
        </div>
    </div>
    <div class="row mt-5 d-flex align-items-baseline">
        <div class="col-5 align-items-center align-items-center">
            <div class="d-flex justify-content-between">
                @if ($checkIns)
                @foreach ($checkIns as $checkIn)
                @if ($loop->first)
                <h4>Last Checking: <span class="font-italic pl-1">{{$checkIn->created_at->format('Y-m-d') }}</span> at
                    {{$checkIn->created_at->format('H:i')}}</h4>
                @break;
                @endif
                @endforeach
                @else

                <h4>No Checkins Yet!</h4>
                <p>not ok</p>
                @endif
            </div>
        </div>
        <div class="zol-2"></div>
        <div class="col-6 ">

            <form action="/CheckIn" method="POST" class="form-inline">
                @csrf
                <div class="form-group row d-flex align-items-start">
                    <div class="">
                        <!--<label for="weight col-form-label">Check In</label>-->
                        <input type="number" name="weight" id="weight"
                            class="form-control @error('weight') is-invalid  @enderror" value="{{old('weight')}}"
                            autocomplete="weight" autofocus placeholder="Enter your Check-in">
                        @error('weight')
                        <span class="invalid-feedback " role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                    <button class="btn btn-primary ">Submit</button>
                </div>

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
