@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Proyecto: {{$infoProyecto->nombre}}</h2>

<ul>

  <li>Id: {{$infoProyecto->id}}</li>
  <li>Nombre: {{$infoProyecto->nombre}}</li>
  <li>Titulo: {{$infoProyecto->titulo}}</li>
  <li>Fecha Inicio: {{$infoProyecto->fechainicio}}</li>
  <li>Fecha fin: {{$infoProyecto->fechafin}}</li>
  <li>Horas estimadas: {{$infoProyecto->horasestimadas}}</li>
  @isset($infoProyecto->empleado)<li>Empleado responsable: <a href="{{route('empleados.show',$infoProyecto->empleado->id)}}">{{$infoProyecto->empleado->nombre}}</a></li>@endisset

</ul>
<h2>Empleados colaboradores</h2>
<ul>
@foreach($infoProyecto->empleados as $empleado)
<li><a href="{{route('empleados.show',[$empleado->id])}}">{{$empleado->nombre}}</a></li>
@endforeach
</ul>

@endsection