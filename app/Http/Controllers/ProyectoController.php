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

    public function show($id)
    {

        $infoProyecto = Proyecto::find($id);

        return view('proyectos.info', ['infoProyecto' => $infoProyecto]);
    }

    public function create()
    {

        return view('proyectos.create');
    }

    public function store(Request $request)
    {

        $proyecto = new Proyecto;
        $proyecto->nombre = $request->input('nombre');
        $proyecto->titulo = $request->input('titulo');
        $proyecto->fechainicio = $request->input('fechainicio');
        $proyecto->fechafin = $request->input('fechafin');
        $proyecto->horasestimadas = $request->input('horasestimadas');
        $proyecto->save();

        return redirect('/proyectos');
    }
}
