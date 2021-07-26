<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->

<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
@extends('layouts.plantilla')

@section('title','Regiones')

@section('content')

<a href="{{route('regiones.create')}}" class="btn btn-outline-primary">Registar una region</a>

    <ul>
        <div class="px-3 px-lg-4 px-xl-5 pt-2">
            <div class="card-columns">
                @foreach ($regions as $region)
                    <div class="card" style="width: 18rem;" >
                        <div class="card-body"> 
                            <h2 class="text-xl font-semibold tracking-tight" style="text-align: center"> <strong>{{$region->nombre_r}}</strong></h2>
                            <b><p class="card-text"></b> {{$region->des_r}}</p>
                            
                                    <div class="p-2 overflow-hidden border rounded-xl">
                                        <ul class="-my-2 divide-y">
                                            <li class="py-1"
                                                x-data="{ open: false }">
                                                <button
                                                    class="flex items-center justify-between w-full px-4 py-1 text-sm font-semibold transition rounded-lg focus:ring-2 focus:ring-inset focus:ring-blue-500 focus:bg-white focus:outline-none"
                                                    x-bind:class="open ? 'bg-white shadow text-blue-600' : 'hover:bg-gray-500/5 focus:text-blue-600'"
                                                    x-on:click="open = !open"
                                                    type="button">
                                                    <span>Ver más...</span>
                            
                                                    <svg x-bind:class="open ? 'rotate-180 text-blue-500' : 'rotate-0 text-gray-400'" class="-mr-2 transition w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.25 10.75L12 14.25L8.75 10.75"/>
                                                    </svg></button>
                            
                                                <div class="px-4 py-2"
                                                    x-show="open">
                                                    <a href="{{route('regiones.show', $region->nombre_r)}}" class="btn btn-link">Ver</a>
                                                    <a href="{{route('regiones.edit', $region)}}" class="btn btn-light">Editar Region</a>
                                                    <form action="{{route('regiones.destroy', $region)}}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="inline-flex items-center justify-center h-7 px-3 text-sm font-semibold tracking-tight text-white transition bg-red-600 rounded-lg shadow hover:bg-red-500 focus:bg-red-700 focus:outline-none focus:ring-offset-2 focus:ring-offset-red-700 focus:ring-2 focus:ring-white focus:ring-inset">Destruir</button>
                                                    </form>
                                                </div>
                                            </li>  
                                        </ul>
                                    </div>
                               
                            
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </ul> 
    {{$regions->links()}} 

@endsection   