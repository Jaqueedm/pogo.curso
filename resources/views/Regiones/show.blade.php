<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

@extends('layouts.plantilla')

@section('title')

@section('content')

Aquí es donde se me van a mostar los pokemones de la respectiva region 
@if ('{{$region->id}}')
<ul>
    <div class="px-3 px-lg-4 px-xl-5 pt-2">
        <div class="card-columns">
            @foreach ($pokemones as $pokemon)
                <div class="card" style="width: 18rem;">
                    <img src="{{asset($pokemon->url)}}" class="card-img-top" width="200" height="260" alt="Pokemon">
                    <div class="card-body">
                        <h5 class="card-title">{{$pokemon->name}} </h5>
                        <b><p class="card-text">Tipo:</b> {{$pokemon->tipo_poke}}</p>
                        <a href="{{route('pokemones.show', $pokemon)}}" class="btn btn-primary btn-sm">Ver</a>
                    </div>
                </div>   
            @endforeach
         </div>
    </div>
</ul>
@else
    no hay
@endif


@endsection