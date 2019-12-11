<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {
        $listaEmpleados = Empleado::All();

        return view('empleados.index', ['listaEmpleados' => $listaEmpleados]);
    }

    public function show($id)
    {
        $infoEmpleado = Empleado::find($id);
        $proyectos = Empleado::find($id)->proyectos;
        return view('empleados.show', ['infoEmpleado' => $infoEmpleado, 'proyectos' => $proyectos]);
    }
}
