@extends('layouts.app')

@section('title','Trainers Create')
    
@section('content')
        <div class="form group">
            <label for="">Nombre</label>
            <input type="text" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
@endsection   

{{--
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="container">
        <div class="form group">
            <label for="">Nombre</label>
            <input type="text" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</body>
</html>
--}}
