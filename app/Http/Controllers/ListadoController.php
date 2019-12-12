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
            return view('proyectos.index',compact('listaProyectos'));
        }
        if ($tipo == 2) {
            $listaEmpleados = Empleado::doesntHave('proyecto')->get();
            return view('empleados.index',compact('listaEmpleados'));

        }
        if ($tipo == 3) {
            /* TERMINAR
            $listado = Empleado::where('proyecto');
            $empleados = Empleado::All();
            $listado = $empleados->pivot->;

            ->whereBetween('votes', [1, 100])->get();
            */
        }
        //return view('listados.index', compact('listado'));
    }
}
