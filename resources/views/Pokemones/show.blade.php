@extends('layouts.plantilla')

@section('title', $pokemon->name)

@section('content')

<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"> {{$pokemon->name}}</h5>
      <h1 class="card-text">{{$pokemon->genero}}</h1>
      <p class="card-text"><strong>Tipo:</strong>{{$pokemon->tipo_poke}}</p>
      <p class="card-text">{{$pokemon->descripcion}}</p>
      
      <p class="card-text"><strong>Región </strong>{{$pokemon->region}}</p>

      <a href="{{route('pokemones.edit', $pokemon)}}" class="btn btn-primary">Editar pogo</a>
      <form action="{{route('pokemones.destroy', $pokemon)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-outline-dark">Destruir</button>
    </form>
    </div>
  </div>

<a href="{{route('pokemones.index')}}" class="btn btn-primary btn-sm">Volver al menú</a>
    
@endsection
