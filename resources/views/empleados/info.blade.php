@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Nombre de empleado: {{$infoEmpleado->nombre}}</h2>

<table>
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Email</th>
    <th>Telefono</th>
    <th>Proyecto asignado</th>
  </tr>

  <tr>
    <td>{{$infoEmpleado->id}}</td>
    <td>{{$infoEmpleado->nombre}}</td>
    <td>{{$infoEmpleado->apellido}}</td>
    <td>{{$infoEmpleado->email}}</td>
    <td>{{$infoEmpleado->telefono}}</td>
    @isset($infoEmpleado->proyecto)<td>{{$infoEmpleado->proyecto->nombre}}</td>@endisset
  </tr>
</table>

@endsection