<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index()
    {
        $listaProyectos = Proyecto::All();

        return view('proyectos.index', ['listaProyectos' => $listaProyectos]);
    }

    public function create()
    {
        return view('proyectos.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'nombre' => 'required|string|max:255',
            'titulo' => 'required|string|max:255',
            'fechaInicio' => 'required|date|after:fechaFin',
            'fechaFin' => 'required|date',
            'horasEstimadas' => 'required|numeric',

        ]);

        $proyecto = new Proyecto;
        $proyecto->nombre = $request->nombre;
        $proyecto->titulo = $request->titulo;
        $proyecto->fechaInicio = $request->fechaInicio;
        $proyecto->fechaFin = $request->fechaFin;
        $proyecto->horasEstimadas = $request->horasEstimadas;
        $proyecto->save();
        //completar
        return redirect('proyectos');
    }

    public function show($id)
    {
        $infoProyecto = Proyecto::find($id);

        return view('proyectos.show', ['infoProyecto' => $infoProyecto]);
    }

    public function edit($id)
    {
        //$user = User::where('username', $username)->first();
        $proyecto = Proyecto::find($id)->first();
        return view('proyectos.edit', compact('id', 'proyecto'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'nombre' => 'same:old_nombre',
            'titulo' => 'required|string|max:255',
            'fechaInicio' => 'required|date',
            'fechaFin' => 'required|date|after:fechaInicio',
            'horasEstimadas' => 'required|numeric',

        ]);

        $proyecto = Proyecto::find($id)->first();
        $proyecto->nombre = $request->nombre;
        $proyecto->titulo = $request->titulo;
        $proyecto->fechaInicio = $request->fechaInicio;
        $proyecto->fechaFin = $request->fechaFin;
        $proyecto->horasEstimadas = $request->horasEstimadas;
        $proyecto->update();

        return back();
    }

    public function destroy($id)
    {
        Proyecto::find($id)->delete();
    }
}
