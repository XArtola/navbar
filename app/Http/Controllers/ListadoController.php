<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;
use App\Models\Empleado;

class ListadoController extends Controller
{
    public function index($tipo)
    {
        if ($tipo == 1) {
            $listaProyectos = Proyecto::where('fechafin', '>', now())->get();
            return view('proyectos.index', compact('listaProyectos'));
        }

        if ($tipo == 2) {
            $listaEmpleados = Empleado::doesntHave('proyecto')->get();
            return view('empleados.index', compact('listaEmpleados'));
        }
        
        if ($tipo == 3) {
            $listaEmpleados = Empleado::whereHas('proyectos', function ($query) {

                $query->havingRaw('Count(*) > 1');

            })->whereHas('proyectos', function ($query) {

                $query->whereDate('empleado_proyecto.fechafin', '>', now());
                
            })->get();

            return view('empleados.index', compact('listaEmpleados'));
        }
    }
}
