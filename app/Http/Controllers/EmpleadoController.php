<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Proyecto;

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
        $proyectos = Proyecto::All();
        return view('empleados.show', ['infoEmpleado' => $infoEmpleado, 'proyectos' => $proyectos]);
    }
    //Método para insertar en la tabla intermedia
    public function store(Request $request)
    {
        $request->validate([

            'fechaInicio' => 'required|date|after:fechaFin',
            'fechaFin' => 'required|date',

        ]);

        //Inserción a traves de relación M:N
        Empleado::find($request->empleado_id)->proyectos()->attach($request->proyecto_id, array('fechainicio' => $request->fechaInicio, 'fechafin' => $request->fechaFin));
        return back();
    }
}
