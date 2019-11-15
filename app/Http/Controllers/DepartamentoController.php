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
}
