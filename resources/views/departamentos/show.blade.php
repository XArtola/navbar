@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Departamentos</h2>

<ul>
  <li>Id: {{$departamento->id}}</li>
  <li>Nombre: {{$departamento->id}}</li>
  <li>Empleado: {{$departamento->nombre}}</li>
  <li><a href="{{route('empleados.show',[$departamento->empleado->id])}}">Jefe: {{$departamento->empleado->nombre}}</a></li>
</ul>

@endsection