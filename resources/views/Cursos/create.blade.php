@extends('layouts.plantilla')

@section('title','Cursos create')

@section('content')
<br>
<strong>Nuevo pokemon</strong><br>

<form action="{{route('cursos.store')}}" method="post">

    @csrf 

    <label for="">
        Nombre
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
        Descripcion
        <br>
        <textarea name="descripcion" id="" cols="0" rows="3">{{old('descripcion')}}</textarea>
    </label>

    @error('descripcion')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br><br>
    <label for="">
        Tipo de pokemon
        <br><br>
        <input type="text" name=categoria value="{{old('tipo_poke')}}">
    </label>

    @error('tipo_poke')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
    <br><br>

    <label for="">
        Región
        <br>
        <input type="text" name=name value="{{old('region')}}">
    </label>

    @error('region')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br><br>

    <label for="">
        Genero
        <br>
        <input type="text" name=name value="{{old('genero')}}">
    </label>

    @error('genero')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br><br>

    <button type="submit" class="btn btn-primary">Enviar</button>
    <a href="{{route('cursos.index')}}"  class="btn btn-outline-secondary">Cancelar</a>
</form>
    
@endsection

