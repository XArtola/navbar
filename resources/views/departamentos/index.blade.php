@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Departamentos</h2>

<table>
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Empleado</th>

  </tr>

  @foreach($listaDepartamentos as $departamento)
  <tr>
    <td>{{$departamento->id}}</td>
    <td>{{$departamento->nombre}}</td>
    @isset($departamento->empleados)
    @foreach($departamento->empleados as $empleado)
    <a>{{$empleado->nombre}}</a>
    @endforeach
    @endisset
  </tr>
  @endforeach
</table>

@endsection