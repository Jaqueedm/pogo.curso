@extends('layouts.plantilla')

@section('title','Cursos create')

@section('content')
<h1>Creación de pokemon</h1>

<form action="{{route('cursos.store')}}" method="post">

    @csrf 

    <label for="">
        Nombre:
        <br>
        <input type="text" name=name value="{{old('name')}}">
    </label>

    @error('name')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror

    <br>
    <label for="">
        Descripcion:
        <br><br>
        <textarea name="descripcion" id="" cols="0" rows="3">{{old('descripcion')}}</textarea>
    </label>

    @error('descripcion')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br><br>
    <label for="">
        Categoria:
        <br><br>
        <input type="text" name=categoria value="{{old('categoria')}}">
    </label>

    @error('categoria')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
    <br><br>

    <button type="submit" class="btn btn-primary">Enviar</button>
    <a href="{{route('cursos.index')}}"  class="btn btn-outline-secondary">Cancelar</a>
</form>
    
@endsection

