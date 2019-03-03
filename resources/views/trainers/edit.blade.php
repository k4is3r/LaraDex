@extends('layouts.app')

@section('title','Trainers Edit')
    
@section('content')
{!! Form::model($trainer,['route' => ['trainers.update', $trainer],'method'=>'PUT', 'files'=>true]) !!}
        @include('trainers.form')
        <img style="height: 200px; width:200px; margin:20px" src="/images/{{$trainer->avatar}}" class="card-img-top rounded-circle mx-auto d-block" alt="...">
        {!! Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
    {!! Form::close() !!}
    
@endsection   
