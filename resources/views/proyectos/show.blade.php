@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Proyecto: {{$infoProyecto->nombre}}</h2>

<ul>

  <li></li>
  <li>Id: {{$infoProyecto->id}}</li>
  <li>Nombre: {{$infoProyecto->nombre}}</li>
  <li>Titulo: {{$infoProyecto->titulo}}</li>
  <li>Fecha Inicio: {{$infoProyecto->fechainicio}}</li>
  <li>Fecha fin: {{$infoProyecto->fechafin}}</li>
  <li>Horas estimadas: {{$infoProyecto->horasestimadas}}</li>
  @isset($infoProyecto->empleado)<li>Empleado asignado: {{$infoProyecto->empleado->nombre}}</li>@endisset

</ul>



@endsection