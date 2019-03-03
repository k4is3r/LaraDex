@extends('layouts.app')

@section('title','Trainers Edit')
    
@section('content')
{!! Form::model($trainer,['route' => ['trainers.update', $trainer],'method'=>'PUT', 'files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class'=> 'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('slug', 'Slug') !!}
            {!! Form::text('slug', null, ['class'=> 'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('avatar', 'Avatar') !!}
            {!! Form::file('avatar')!!}
            <img style="height: 200px; width:200px; margin:20px" src="/images/{{$trainer->avatar}}" class="card-img-top rounded-circle mx-auto d-block" alt="...">
        </div>
        {!! Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
    {!! Form::close() !!}
    
@endsection   
