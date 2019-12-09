@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Nombre de empleado: {{$infoEmpleado->nombre}}</h2>

<ul>
  <li>Id: {{$infoEmpleado->id}}</li>
  <li>Nombre: {{$infoEmpleado->nombre}}</li>
  <li>Apellido: {{$infoEmpleado->apellido}}</li>
  <li>Email: {{$infoEmpleado->email}}</li>
  <li>Telefono: {{$infoEmpleado->telefono}}</li>
  @isset($infoEmpleado->proyecto)<li>Proyecto asignado: {{$infoEmpleado->proyecto->nombre}}</li>@endisset
</ul>
@endsection