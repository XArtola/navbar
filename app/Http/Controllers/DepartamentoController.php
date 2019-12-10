<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
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

        return view('departamentos.show', compact('departamento','jefe'));
    }
}
