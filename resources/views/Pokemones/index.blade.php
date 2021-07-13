<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="{{url('/css/css.css')}}">

@extends('layouts.plantilla')

@section('title','Pokédex')

@section('content')

<a href="{{route('pokemones.create')}}" class="btn btn-outline-primary">Registar un nuevo pogo</a>

<ul>
    <div class="px-3 px-lg-4 px-xl-5 pt-3">
        <div class="card-columns">
    @foreach ($pokemones as $pokemon)
    <div class="card" style="width: 18rem;">
        {{-- <img src="{{url($pokemon->imagen)}}" class="card-img-top" width="210" height="270" alt="Pokemon"> --}}
        <div class="card-body">
          <h5 class="card-title">{{$pokemon->name}} </h5>
          <b><p class="card-text">Tipo:</b> {{$pokemon->tipo_poke}}</p>
          <a href="{{route('pokemones.show', $pokemon)}}" class="btn btn-primary">Ver</a>
        </div>
      </div>
        
    @endforeach
    </div>
        </div>

</ul>

{{$pokemones->links()}} 

@endsection