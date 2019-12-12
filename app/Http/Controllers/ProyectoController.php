<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
            'fechaInicio' => 'required|date',
            'fechaFin' => 'required|date|after:fechaFin',
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
        $proyecto = Proyecto::where('id', $id)->first();
        return view('proyectos.edit', ['proyecto' => $proyecto]);
    }

    public function update(Request $request, $id)
    {

        $request->validate([

            'titulo' => 'required|string|max:255',
            'fechaInicio' => 'required|date',
            'fechaFin' => 'required|date|after:fechaInicio',
            'horasEstimadas' => 'required|numeric',
        ]);

        $proyecto = Proyecto::find($id);

        $proyecto->titulo = $request->titulo;
        $proyecto->fechainicio = $request->fechaInicio;
        $proyecto->fechafin = $request->fechaFin;
        $proyecto->horasestimadas = $request->horasEstimadas;
        $proyecto->save();
        return redirect()->route('proyectos.show', ['id' => $request->id]);
    }

    public function destroy($id)
    {
        Proyecto::find($id)->delete();
        return back();
    }
}
