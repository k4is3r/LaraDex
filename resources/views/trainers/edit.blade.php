@extends('layouts.app')

@section('title','Trainers Edit')
    
@section('content')
<form class="form-group" method="POST" action="/trainers/{{$trainer->slug}}" enctype="multipart/form-data">
    @method('PUT')    
    @csrf
        <div class="form group">
            <label for="">Nombre</label>
        <input type="text" name="name" value="{{$trainer->name}}" class="form-control">
        </div>
        <br>
        <div class="form group">
                <img style="height: 200px; width:200px; margin:20px" src="/images/{{$trainer->avatar}}" class="card-img-top rounded-circle mx-auto d-block" alt="...">
                <label for="">Avatar</label>
                <input type="file" name="avatar">
            </div>
        <br>
        <button type="submit" class="btn btn-primary">Actualizar </button>        
    </form>
@endsection   
