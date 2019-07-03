@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h3>Howdy, {{auth()->user()->name}}</h3>
        </div>
    </div>
    <div class="row mt-5 d-flex align-items-baseline">
        <div class="col-5 align-items-center align-items-center">
            <div class="d-flex justify-content-between">
                @if (count($checkIns) >0)
                @foreach ($checkIns as $checkIn)
                @if ($loop->first)
                <h4>Last Checking: <span class="font-italic pl-1">{{$checkIn->created_at->format('Y-m-d') }}</span> at
                    {{$checkIn->created_at->format('H:i')}}</h4>
                @break;
                @endif
                @endforeach
                @else
                <h4>No Checkins Yet!</h4>
                @endif
            </div>
        </div>
        <div class="col-2 ">

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

    @if (count($checkIns) > 0)


    <div class="row mt-5 mb-5">
        <div class="col-12">

        <h5>See how you have been doing!</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-5 d-flex align-items-center">
            {{$checkIns->links()}}
        </div>
        <div class="col-1"></div>
        <div class="col-8">
            <table class="table table-sm table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Weight</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($checkIns as $checkIn)
                    <tr>
                        <td>{{$checkIn->created_at->format('Y-m-d')}}</td>
                        <td>{{$checkIn->created_at->format('H:i')}}</td>
                        <td>{{$checkIn->weight}}</td>
                        <td><a href="/CheckIn/{{$checkIn->id}}/edit" class="btn p-0 ml-2"><img
                                    src="/media/icons/006-pencil.16.png" alt="Edit Pencil"></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-3"></div>
    </div>
    @endif
</div>

@endsection
