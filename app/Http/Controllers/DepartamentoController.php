<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Empleado;

use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index()
    {
        $listaDepartamentos = Departamento::All();
        return view('departamentos.index', ['listaDepartamentos' => $listaDepartamentos]);
    }

    public function show($id)
    {
        $departamento = Departamento::find($id);
        $jefe = Departamento::find($id)->jefe;

        return view('departamentos.show', compact('departamento', 'jefe'));
    }
    public function manage($id)
    {
        $empleados = Empleado::All();
        $departamento = Departamento::find($id);
        return view('departamentos.manage', compact('departamento', 'empleados'));
    }

    //Insertar empleado a departamento como jefe o empleado
    public function setEmpleado(Request $request)
    {

        if ($request->rol == "jefe")

            Departamento::where('id', $request->departamento_id)->update(['jefe_id' => $request->empleado_id]);

        if ($request->rol == "miembro")

            Empleado::where('id', $request->empleado_id)->update(['departamento_id' => $request->departamento_id]);

        return redirect()->route('departamentos.index');
    }
}
