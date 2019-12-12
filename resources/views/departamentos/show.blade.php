@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Departamento {{$departamento->nombre}}</h2>

<ul>
  <li>Id: {{$departamento->id}}</li>
  <li>Nombre: {{$departamento->nombre}}</li>
 <!-- <li>Empleado: {{$departamento->nombre}}</li>-->
  <li>Jefe: <a href="{{route('empleados.show',[$departamento->empleado->id])}}">{{$departamento->empleado->nombre}}</a></li>
</ul>

<h3>Empleados que pertenecen al departamento</h3>
<ul>
  @foreach($departamento->empleados as $empleado)
  <li><a href="{{route('empleados.show',[$empleado->id])}}">{{$empleado->nombre}}</a></li>

  @endforeach
</ul>
@endsection