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

    public function show($id){

        $infoProyecto = Proyecto::find($id);

        return view('proyectos.info', ['infoProyecto' => $infoProyecto]);

    }
}
