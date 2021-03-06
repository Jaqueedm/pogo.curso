@extends('layouts.plantilla')

@section('title','Pokemones edit')

@section('content')
<h1>Editar pokemon</h1><br>

<div class="py-8 bg-gray-100">
    <div class="w-full max-w-6xl px-4 mx-auto sm:px-6 md:px-8">

        <h2 class="mt-1 text-2xl font-semibold tracking-tight">Actualizar datos</h2>

        <div class="mt-6 border-t"></div>

        <div class="grid md:grid-cols-[2fr,3fr] gap-6 md:gap-12 mt-6">
            <aside>
                <h2 class="text-xl font-semibold tracking-tight">Ingresa los datos que se te piden</h2>

                <p class="mt-1 text-gray-500">Todos los campos son obligatorios *</p>
            </aside>

            <form class="block p-2 space-y-2 bg-white shadow rounded-xl"
            action="{{route('pokemones.update', $pokemon)}}" method="post" enctype="multipart/form-data">

                @csrf {{-- directiva --}}

                @method('put')

                <div class="grid grid-cols-2 gap-6 px-4 py-4">
                    <div class="col-span-2 space-y-2 md:col-span-1">
                        <label class="inline-block text-sm font-medium text-gray-700"
                            for="">Nombre</label>

                        <input
                            class="block w-full h-10 transition duration-75 border-gray-300 rounded-lg shadow-sm focus:ring-1 focus:ring-inset focus:ring-blue-600 focus:border-blue-600"
                            id="first_name"
                            type="text" name="name" value="{{old('name', $pokemon->name)}}">

                            @error('name')
                            <small class="text-danger">*{{$message}}</small>
                            <br>
                            @enderror
                    </div>

                    <div class="col-span-2 space-y-2 md:col-span-1">
                        <label class="inline-block text-sm font-medium text-gray-700"
                            for="">Subir imagen</label>

                        <input
                            class="block w-full h-10 transition duration-75 border-gray-300 rounded-lg shadow-sm focus:ring-1 focus:ring-inset focus:ring-blue-600 focus:border-blue-600"
                            id="subir_imagen"
                            type="file" name="file" id="" accept="image/*" value="{{old('file', $pokemon->url)}}">

                            @error('file')
                            <small class="text-danger">*{{$message}}</small>
                            <br>
                            @enderror
                    </div>

                    <div class="col-span-2 space-y-2 md:col-span-1">
                        <label class="inline-block text-sm font-medium text-gray-700"
                            for="descripcion">Descripcion</label>

                        <textarea
                            class="block w-full transition duration-75 border-gray-300 rounded-lg shadow-sm focus:border-blue-600 focus:ring-1 focus:ring-inset focus:ring-blue-600"
                            id="descripcion" name="descripcion" id=""  rows="3">{{old('descripcion', $pokemon->descripcion)}}</textarea>
                                                
                            @error('descripcion')
                            <small class="text-danger">*{{$message}}</small>
                            <br>
                            @enderror
                    </div>

                    <div class="col-span-2 space-y-2 md:col-span-1">
                        <label class="inline-block text-sm font-medium text-gray-700"
                            for="tipo_poke">Tipo de pokemon </label>

                        <input
                            class="block w-full h-10 transition duration-75 border-gray-300 rounded-lg shadow-sm focus:ring-1 focus:ring-inset focus:ring-blue-600 focus:border-blue-600"
                            id="tipo_poke"
                            type="text" name="tipo_poke" value="{{old('tipo_poke', $pokemon->tipo_poke)}}">
                            
                            @error('tipo_poke')
                            <small class="text-danger">*{{$message}}</small>
                            <br>
                            @enderror
                    </div>

                    <div class="col-span-2 space-y-2 md:col-span-1">
                        <label class="inline-block text-sm font-medium text-gray-700"
                            for="region">Region</label><br>

                            <select name="region" >
                                <option value="">selecciona la region </option>
                                <option value="1">Kanto</option>
                                <option value="2">Johto</option>
                                <option value="3">Hoenn</option>
                            </select>

                            @error('region')
                            <br>
                            <small class="text-danger">*{{$message}}</small>
                            <br>
                            @enderror
                    </div>

                    <div class="col-span-2 space-y-2 md:col-span-1">
                        <label class="inline-block text-sm font-medium text-gray-700"
                            for="">??Hembra o Macho?</label>

                        <input
                            class="block w-full h-10 transition duration-75 border-gray-300 rounded-lg shadow-sm focus:ring-1 focus:ring-inset focus:ring-blue-600 focus:border-blue-600"
                            id="genero"
                            type="text" name="genero" value="{{old('genero', $pokemon->genero)}}">

                            @error('genero')
                            <small class="text-danger">*{{$message}}</small>
                            <br>
                            @enderror
                    </div>
                </div>

                <div class="border-t"></div>

                <footer class="flex items-center justify-end px-4 py-2 space-x-4">
                    <button
                        class="inline-flex items-center justify-center h-8 px-3 text-sm font-semibold tracking-tight text-white transition bg-blue-600 rounded-lg shadow hover:bg-blue-500 focus:bg-blue-700 focus:outline-none focus:ring-offset-2 focus:ring-offset-blue-700 focus:ring-2 focus:ring-white focus:ring-inset"
                        type="submit">Cambiar</button>
                        <a href="{{route('pokemones.show', $pokemon)}}"  class="btn btn-outline-secondary">Cancelar</a>
                </footer>
            </form>
            @endsection
        </div>
    </div>
</div>