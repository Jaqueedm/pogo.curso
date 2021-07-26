@extends('layouts.plantilla')

@section('title','Region create')

@section('content')
<br>

    <div class="w-full max-w-6xl px-5 mx-auto sm:px-6 md:px-10">

        <h2 class="mt-1 text-2xl font-semibold tracking-tight">Nueva Region </h2>

        <div class="mt-6 border-t"></div>

        <div class="grid md:grid-cols-[2fr,3fr] gap-6 md:gap-12 mt-6">
            <aside>
                <h2 class="text-xl font-semibold tracking-tight">Ingresa los datos que se te piden</h2>
            </aside>

            <form class="block p-2 space-y-2 bg-white shadow rounded-xl"
                action="{{route('regiones.store')}}" method="POST">

                @csrf 

                <div class="grid grid-cols-2 gap-1">
                    <div class="col-span-2 space-y-1 md:col-span-1">
                        <label class="inline-block text-sm font-medium text-gray-900"
                            for="">Nombre</label>
                        
                            <input
                            class="block w-full h-10 transition duration-75 border-gray-300 rounded-lg shadow-sm focus:ring-1 focus:ring-inset focus:ring-blue-600 focus:border-blue-600"
                            id=""
                            type="text" name="nombre_r" value="{{old('nombre_r')}}">

                            @error('nombre_r')
                            <small class="text-danger">*{{$message}}</small>
                            <br>
                            @enderror
                    </div>

                    <div class="col-span-2 space-y-2 md:col-span-1">
                        <label class="inline-block text-sm font-medium text-gray-700"
                            for="des_r">Descripcion</label>

                        <textarea
                            class="block w-full transition duration-75 border-gray-300 rounded-lg shadow-sm focus:border-blue-600 focus:ring-1 focus:ring-inset focus:ring-blue-600"
                            id="des_r" name="des_r">{{old('des_r')}}</textarea>

                            @error('des_r')
                            <small class="text-danger">*{{$message}}</small>
                            <br>
                            @enderror
                    </div>
                </div>

                <div class="border-t"></div>

                <footer class="flex items-center justify-end px-4 py-2 space-x-4">
                    <button
                        class="inline-flex items-center justify-center h-8 px-3 text-sm font-semibold tracking-tight text-white transition bg-blue-600 rounded-lg shadow hover:bg-blue-500 focus:bg-blue-700 focus:outline-none focus:ring-offset-2 focus:ring-offset-blue-700 focus:ring-2 focus:ring-white focus:ring-inset"
                        type="submit">Enviar</button>
                        <a href="{{route('regiones.index')}}" class="btn btn-outline-secondary">Cancelar</a>
                </footer>
            </form>
            @endsection
        </div>
    </div>

    


