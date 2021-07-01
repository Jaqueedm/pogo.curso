<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;
use Illuminate\Support\Facades\Redirect;

class CursosController extends Controller
{
    //creamos 3 metodos
    public function index()
    {
        //usamos la variable curso y mandamos a llamar el modelo curso
        $cursos = Curso::orderBy('id', 'desc')->paginate();

        //return "Bienvenido a la pagina principal de cursos"; esta es otra forma de mostrar al usua
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(StoreCurso $request)
    {
        //return $request->all(); le digo al objeto que me  muestre todo lo que se agrego
       
        $curso= Curso::create($request->all());

        return redirect()->route('cursos.show', $curso);
    }

    public function show(Curso $curso)
    {
        return view('cursos.show', compact('curso'));
    }

    public function edit(curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, curso $curso)
    {
        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'

        ]);
        
        $curso->update($request->all()); //asignacion masiva
        return redirect()->route('cursos.show', $curso);
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect()->route('cursos.index');
    }
}
