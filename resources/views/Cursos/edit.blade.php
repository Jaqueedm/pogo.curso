@extends('layouts.plantilla')

@section('title','Cursos edit')

@section('content')
<h1>Editar poke</h1><br>

<form action="{{route('cursos.update', $curso)}}" method="post">

    @csrf {{-- directiva --}}

    @method('put')

    <label for="">
        Nombre
        <br>
        <input type="text" name=name value="{{old('name', $curso->name)}}">
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
        <textarea name="descripcion" id=""  rows="3">{{old('descripcion', $curso->descripcion)}}</textarea>
    </label>

    @error('descripcion')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br><br>
    <label for="">
        Tipo de pokemon
        <br>
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
        Género
        <br>
        <input type="text" name=name value="{{old('genero')}}">
    </label>

    @error('genero')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br><br>
    <button type="submit" class="btn btn-primary">cambiar</button>
    <button href="{{route('cursos.index')}}" class="btn btn-outline-secondary">Cancelar</button>
    
</form>
    
@endsection

