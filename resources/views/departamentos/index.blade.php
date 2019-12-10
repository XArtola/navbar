@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Departamentos</h2>

<table>
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Jefe</th>
    <th>Empleado</th>

  </tr>

  @foreach($listaDepartamentos as $departamento)
  <tr>
    <td><a href="{{route('departamentos.show',[$departamento->id])}}">{{$departamento->id}}</a></td>
    <td>{{$departamento->nombre}}</td>
    <td><a href="{{route('empleados.show',[$departamento->empleado->id])}}">{{$departamento->empleado->nombre}}</a></td>
    @isset($departamento->empleados)
    @foreach($departamento->empleados as $empleado)
    <a>{{$empleado->nombre}}</a>
    @endforeach
    @endisset
  </tr>
  @endforeach
</table>

@endsection