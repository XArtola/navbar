@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Departamento {{$departamento->nombre}}</h2>

<ul class="list-unstyled pl-4">
  <li><span class="font-weight-bold text-uppercase">Id</span> {{$departamento->id}}</li>
  <li><span class="font-weight-bold text-uppercase">Nombre:</span> {{$departamento->nombre}}</li>
 <!-- <li>Empleado: {{$departamento->nombre}}</li>-->
  <li><span class="font-weight-bold text-uppercase">Jefe:</span> <a href="{{route('empleados.show',[$departamento->empleado->id])}}">{{$departamento->empleado->nombre}}</a></li>
</ul>

<h3>Empleados que pertenecen al departamento</h3>
<ul>
  @foreach($departamento->empleados as $empleado)
  <li><a href="{{route('empleados.show',[$empleado->id])}}">{{$empleado->nombre}}</a></li>

  @endforeach
</ul>
@endsection