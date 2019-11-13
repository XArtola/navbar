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
}
