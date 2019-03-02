@extends('layouts.app')

@section('title','Trainer')
    
@section('content')
    
<img style="height: 200px; width:200px; margin:20px" src="/images/{{$trainer->avatar}}" class="card-img-top rounded-circle mx-auto d-block" alt="...">
    <div class="text-center">
    <h5 class="card-title">{{$trainer->name}}</h5>
    <h1>{{$trainer->slug}}</h1>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>

@endsection   
