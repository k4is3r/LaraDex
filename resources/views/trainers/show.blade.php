@extends('layouts.app')

@section('title','Trainer')
    
@section('content')
    @include('common.success')
    <img style="height: 200px; width:200px; margin:20px" src="/images/{{$trainer->avatar}}" class="card-img-top rounded-circle mx-auto d-block" alt="...">
        <div class="text-center">
        <h5 class="card-title">{{$trainer->name}}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">Editar</a>
            <br></br>
            {!! Form::open([ 'route' =>['trainers.destroy' , $trainer->slug],'method' =>'DELETE']) !!}
                {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
@endsection   
