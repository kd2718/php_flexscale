@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h3>Weight: {{$checkIn->weight}}</h3>
        </div>
        <div class="col-6">
            <h3>Taken At: {{$checkIn->created_at}}</h3>
        </div>
    </div>
    <form action="/CheckIn/{{$checkIn->id}}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">Delete</button>
        <a href="/home">Cancel</a>
    </form>

</div>
