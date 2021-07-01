@extends('layouts.plantilla')

@section('title', $curso->name)

@section('content')

<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Bienvenido  {{$curso->name}}</h5>
      <p class="card-text"><strong>Categoria:</strong>{{$curso->categoria}}</p>
      <p class="card-text">{{$curso->descripcion}}</p>
      <a href="{{route('cursos.edit', $curso)}}" class="btn btn-primary">Editar pogo</a>
      <form action="{{route('cursos.destroy', $curso)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-outline-dark">Destruir</button>
    </form>
    </div>
  </div>

<a href="{{route('cursos.index')}}" class="btn btn-primary btn-sm">Volver al menú</a>
    
@endsection
