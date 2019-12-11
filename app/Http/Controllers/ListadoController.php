<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;
use App\Models\Empleado;

class ListadoController extends Controller
{
    public function index($tipo)
    {
        $listado = "";
        if ($tipo == 1) {
            $listado = Proyecto::where('fechafin', '>', now())->get();
        }
        if ($tipo == 2) {
            $listado = Empleado::doesntHave('proyecto')->get();
        }
        if ($tipo == 3) {
            /* TERMINAR
            $listado = Empleado::where('proyecto');
            $empleados = Empleado::All();
            $listado = $empleados->pivot->;

            ->whereBetween('votes', [1, 100])->get();
            */
        }
        return view('listados.index', compact('listado'));
    }
}
