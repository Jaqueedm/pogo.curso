@extends('layouts.plantilla')

@section('title','Pokemones edit')

@section('content')
<h1>Editar pogo</h1><br>

<form action="{{route('pokemones.update', $pokemon)}}" method="post" enctype="multipart/form-data">

    @csrf {{-- directiva --}}

    @method('put')

    <label for="">
        Nombre
        <br>
        <input type="text" name="name" value="{{old('name', $pokemon->name)}}">
    </label>

    @error('name')
    <br>
    <small>*{{$message}}</small>
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

    <br>
    <label for="">
        Descripcion
        <br>
        <textarea name="descripcion" id=""  rows="3">{{old('descripcion', $pokemon->descripcion)}}</textarea>
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
        <input type="text" name="tipo_poke" value="{{old('tipo_poke', $pokemon->tipo_poke)}}">
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
        <select name="region">
            <option value="1">Kanto</option>
            <option value="2">Johto</option>
            <option value="3">Hoenn</option>
        </select>
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
        <input type="text" name="genero" value="{{old('genero', $pokemon->genero)}}">
    </label>

    @error('genero')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br><br>
    <button type="submit" class="btn btn-primary">cambiar</button>
    <button href="{{route('pokemones.show', $pokemon)}}" class="btn btn-outline-secondary">Cancelar</button>
    
</form>
    
@endsection

