@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Proyecto: {{$infoProyecto->nombre}}</h2>

<table>
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Titulo</th>
    <th>Fecha Inicio</th>
    <th>Fecha fin</th>
    <th>Horas estimadas</th>
    <th>Empleado asignado</th>
  </tr>
 
  <tr>
    <td>{{$infoProyecto->id}}</td>
    <td>{{$infoProyecto->nombre}}</td>
    <td>{{$infoProyecto->titulo}}</td>
    <td>{{$infoProyecto->fechainicio}}</td>
    <td>{{$infoProyecto->fechafin}}</td>
    <td>{{$infoProyecto->horasestimadas}}</td>
    @isset($infoProyecto->empleado)<td>{{$infoProyecto->empleado->nombre}}</td>@endisset
  </tr>
 
</table>

@endsection