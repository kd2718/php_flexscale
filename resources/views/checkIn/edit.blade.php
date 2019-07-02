@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Edit Your CheckIn</h3>
    <div class="row">
        <form action="/CheckIn/{{$checkIn->id}}" method="POST">
            @method('PUT')
            @csrf
            .<div class="form-group">
                <label for="CheckIn">Check In Weight</label>
                <input type="number" name="weight" id="weight"
                    class="form-control @error('weight') is-invalid  @enderror" placeholder="Enter Weight"
                    aria-describedby="helpId" value="{{old('weight', $checkIn->weight)}}" autofocus>
                @error('weight')
                <span class="invalid-feedback " role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <small id="helpId" class="text-muted">Enter a value between 50 and 1000</small>
                <br>
                <label for="created_at">Created At Date</label>
                <input type="date" name="created_at" id="created_at"
                    class="form-control @error('created_at') is-invalid  @enderror" placeholder="Enter Weight"
                    aria-describedby="helpId" value="{{old('created_at', $checkIn->created_at->format('Y-m-d'))}}"
                    autofocus>
                @error('created_at')
                <span class="invalid-feedback " role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <small id="helpId" class="text-muted">Date of Check In</small>
                <br>
                <label for="time_at">Time Created At Date</label>
                <input type="time" name="time_at" id="time_at"
                    class="form-control @error('time_at') is-invalid  @enderror" placeholder="Enter Time"
                    aria-describedby="helpId" value="{{old('time_at', $checkIn->created_at->format('H:i'))}}" autofocus>
                @error('time_at')
                <span class="invalid-feedback " role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <small id="helpId" class="text-muted">Time of Weight</small>
            </div>
            <button class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="row mt-5">
        <form action="/CheckIn/{{$checkIn->id}}" method="POST">
            @method('DELETE')
            @csrf
            <div class="form-group">
                <button type="submit" class="btn btn-danger">Delete</button>
                <a href="/home">Cancel</a>
            </div>
        </form>
    </div>
</div>

@endsection
