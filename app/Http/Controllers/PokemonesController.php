<?php

namespace App\Http\Controllers;

use App\Models\Pokemone;
use Illuminate\Http\Request;
use App\Http\Requests\StorePokemon;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Storage;

class PokemonesController extends Controller
{
    //creamos 3 metodos
    public function index()
    {
        //usamos la variable curso y mandamos a llamar el modelo curso
        $pokemones = Pokemone::orderBy('id', 'desc')->paginate(15);

        //return "Bienvenido a la pagina principal de cursos"; esta es otra forma de mostrar al usua
        return view('pokemones.index', compact('pokemones'));
    }

    public function create()
    {
        return view('pokemones.create');
    }

    public function store(StorePokemon $request, Pokemone $pokemon)
    {
        $p1=$pokemon->imagen = $request->file('file')->store('public/imagenes');
        $url = Storage::url($p1);

        $pokemon = Pokemone::create([
            'name' => $pokemon->name = $request->name,
            'url' =>$url,
            'descripcion' =>   $pokemon->descripcion = $request->descripcion,
            'tipo_poke' => $pokemon->tipo_poke = $request->tipo_poke,
            'genero' => $pokemon->genero = $request->genero,
            'slug' =>  $pokemon->slug = Str::slug($request->name, '-'),
            'region' => $pokemon->region = $request->region
        ]);
        return redirect()->route('pokemones.show', $pokemon);
    }

    public function show(Pokemone $pokemon)
    {
        return view('pokemones.show', compact('pokemon'));
    }
    
    public function edit(Pokemone $pokemon)
    {
        return view('pokemones.edit', compact('pokemon'));
    }

    public function update(Request $request, Pokemone $pokemon)
    {
        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'tipo_poke' => 'required',
            'region' => 'required',
            'genero' => 'required'

        ]);
        
        $pokemon->name = $request->name;
        $pokemon->descripcion = $request->descripcion;
        $pokemon->tipo_poke = $request->tipo_poke;
        $pokemon->region = $request->region;
        $pokemon->genero = $request->genero;

        $pokemon->slug = Str::slug($request->name, '-');

        $pokemon->save();

        $pokemon->update($request->all()); //asignacion masiva
        return redirect()->route('pokemones.show', $pokemon);
    }

    public function destroy(Pokemone $pokemon)
    {
        $pokemon->delete();

        return redirect()->route('pokemones.index');
    }
}
