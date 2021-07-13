@extends('layouts.plantilla')

@section('title','Pogo create')

@section('content')
<br>
<strong>Nuevo pokemon</strong><br>

<form action="{{route('pokemones.store')}}" method="POST" enctype="multipart/form-data">

    @csrf 

    <label for="">
        Nombre
        <br>
        <input type="text" name="name" value="{{old('name')}}">
    </label>

    @error('name')
        <br>
        <small class="text-danger">*{{$message}}</small>
        <br>
    @enderror
    <br><br>

   <label for="" method="POST">Subir imagen
        @csrf
        <br>
        <input type="file" name="file" id="" accept="image/*">
        
    </label>
    
    @error('file') 
        <br>
        <small class="text-danger">*{{$message}}</small>
        <br>
    @enderror

    <br><br>
    <label for="">
        Descripcion
        <br>
        <textarea name="descripcion" id="" cols="0" rows="3">{{old('descripcion')}}</textarea>
    </label>

    @error('descripcion')
    <br>
    <small class="text-danger">*{{$message}}</small>
    <br>
    @enderror

    <br><br>
    <label for="">
        Tipo de pokemon
        <br>
        <input type="text" name="tipo_poke" value="{{old('tipo_poke')}}">
    </label>

    @error('tipo_poke')
    <br>
    <small class="text-danger">*{{$message}}</small>
    <br>
    @enderror
    <br><br>

    

    <label for="">
        Región
        <br>
        <select name="region" >
            <option value="">selecciona la region </option>
            <option value="1">Kanto</option>
            <option value="2">Johto</option>
            <option value="3">Hoenn</option>
        </select>
    </label>

    @error('region')
        <br>
        <small class="text-danger">*{{$message}}</small>
        <br>
    @enderror
    <br><br>

    <label for="">
        Genero
        <br>
        <input type="text" name="genero" value="{{old('genero')}}">
    </label>

    @error('genero')
        <br>
        <small class="text-danger">*{{$message}}</small>
        <br>
    @enderror
    <br><br>

    <button type="submit" class="btn btn-primary">Enviar</button>
    <a href="{{route('pokemones.index')}}"  class="btn btn-outline-secondary">Cancelar</a>
</form>
    
@endsection

