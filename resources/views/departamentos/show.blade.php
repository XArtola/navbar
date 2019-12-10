@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Departamento</h2>

<ul>
  <li>Id: {{$departamento->id}}</li>
  <li>Nombre: {{$departamento->id}}</li>
  <li>Empleado: {{$departamento->nombre}}</li>
  <li><a href="{{route('empleados.show',[$departamento->empleado->id])}}">Jefe: {{$departamento->empleado->nombre}}</a></li>
</ul>

<h3>Empleados que pertenecen al departamento</h3>
<ul>
  @foreach($departamento->empleados as $empleado)
  <li><a href="{{route('empleados.show',[$empleado->id])}}">{{$empleado->nombre}}</a></li>

  @endforeach
</ul>
@endsection