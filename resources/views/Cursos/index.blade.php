<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="{{url('/css/css.css')}}">

@extends('layouts.plantilla')

@section('title','Pokédex')

@section('content')

<a href="{{route('cursos.create')}}" class="btn btn-outline-primary">Registar un nuevo pogo</a>

<ul>
    @foreach ($cursos as $curso)
        <div class="container">
            <div class="row">
         
                <div class="pinWrapper">
                    <a href="{{route('cursos.show', $curso)}}">{{$curso->name}}</a>
                    {{-- {{dd($curso, $curso->id)}} --}}
                    <p class="card-text">{{$curso->tipo_poke}}</p> 
                </div>
        
            </div>
        </div>
        <br>
        
    @endforeach
</ul>

{{$cursos->links()}} 

@endsection