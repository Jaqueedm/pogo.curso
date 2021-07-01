@extends('layouts.plantilla')

@section('title','Cursos edit')

@section('content')
<h1>En esta pagina podras editar un curso</h1>

<form action="{{route('cursos.update', $curso)}}" method="post">

    @csrf {{-- directiva --}}

    @method('put')

    <label for="">
        Nombre:
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
        Descripcion:
        <br>
        <textarea name="descripcion" id=""  rows="3">{{old('descripcion', $curso->descripcion)}}</textarea>
    </label>

    @error('descripcion')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br>
    <label for="">
        Categoria:
        <br>
        <input type="text" name=categoria value="{{old('categoria', $curso->categoria)}}">
    </label>

    @error('categoria')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
    <br><br>
    <button type="submit" class="btn btn-primary">cambiar</button>
    <button href="{{route('cursos.index')}}" class="btn btn-outline-secondary">Cancelar</button>
    
</form>
    
@endsection

