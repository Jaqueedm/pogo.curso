<?php

namespace App\Http\Controllers;

use App\Models\Pokemone;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Region;


class RegionesController extends Controller
{
    public function index()
    {
        $regions = Region::orderBy('id')->paginate();

        return view('regiones.index', compact('regions'));
    }

    public function create()
    {
        return view('regiones.create');
    }

    public function store(Request $request)
    {
        $region =new Region();

        $region->nombre_r = $request->nombre_r;
        $region->des_r = $request->des_r;
        $region->slug = Str::slug($request->nombre_r, '-');

        $region->save();

        return redirect()->route('regiones.index');
    }

    public function show(Region $region)
    {
        $pokemones = $region->pokemones;
        return view('regiones.show', compact('pokemones'));
    }

    public function edit(Region $region)
    {
        return view('regiones.edit', compact('region'));
    }

    public function update(Request $request, Region $region)
    {
        $request->validate([
            'nombre_r' => 'required',
            'des_r' => 'required',
        ]);
        
        $region->nombre_r = $request->nombre_r;
        $region->des_r = $request->des_r;

        $region->slug = Str::slug($request->nombre_r, '-');

        $region->save();
        //asignacion masiva
        return redirect()->route('regiones.index', $region);
    }

    public function destroy(Region $region)
    {
        $region->delete();

        return redirect()->route('regiones.index');
    }
}
