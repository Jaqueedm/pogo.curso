@extends('layouts.plantilla')

@section('title', $pokemon->name)

@section('content')

<a href="{{route('pokemones.index')}}" class="btn btn-primary btn-sm">Volver al menú</a>

<div class="bg-gray-100">
  <div class="max-w-sm p-8 mx-auto">
          <figure class="overflow-hidden rounded-lg aspect-w-16 aspect-h-9">
            

              <h2 class="text-xl font-semibold tracking-tight" style="text-align: center"> <strong>{{$pokemon->name}}</strong></h2>

              <img class="object-cover"
              src="{{asset($pokemon->url)}}"
                  alt="Big Sur">
          </figure>

          <header class="p-4 space-y-1">
              <h5 class="card-title">Tipo: {{$pokemon->tipo_poke}}</h5>

              <p class="text-gray-500">
                {{$pokemon->descripcion}} Pertenece a la región {{$pokemon->region}}
              </p>
              <h1 class="card-text">{{$pokemon->genero}}</h1>
          </header>
          <a href="{{route('pokemones.edit', $pokemon)}}" class="btn btn-primary">Editar pogo</a>
          <form action="{{route('pokemones.destroy', $pokemon)}}" method="POST">
            @csrf
            @method('delete')
            <br><button type="submit" class="btn btn-outline-dark">Destruir</button>
        </form>
  </div>
</div>
    
@endsection
