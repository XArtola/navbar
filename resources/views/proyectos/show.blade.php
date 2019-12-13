@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Proyecto {{$infoProyecto->nombre}}</h2>

<ul class="list-unstyled pl-4">

  <li><span class="font-weight-bold text-uppercase">Id:</span> {{$infoProyecto->id}}</li>
  <li><span class="font-weight-bold text-uppercase">Nombre:</span> {{$infoProyecto->nombre}}</li>
  <li><span class="font-weight-bold text-uppercase">Titulo:</span> {{$infoProyecto->titulo}}</li>
  <li><span class="font-weight-bold text-uppercase">Fecha Inicio:</span> {{$infoProyecto->fechainicio}}</li>
  <li><span class="font-weight-bold text-uppercase">Fecha fin:</span> {{$infoProyecto->fechafin}}</li>
  <li><span class="font-weight-bold text-uppercase">Horas estimadas:</span> {{$infoProyecto->horasestimadas}}</li>
  @isset($infoProyecto->empleado)<li><span class="font-weight-bold text-uppercase">Empleado responsable:</span> <a href="{{route('empleados.show',$infoProyecto->empleado->id)}}">{{$infoProyecto->empleado->nombre}}</a></li>@endisset

</ul>
<h2>Empleados colaboradores</h2>
<ul>
@foreach($infoProyecto->empleados as $empleado)
<li><a href="{{route('empleados.show',[$empleado->id])}}">{{$empleado->nombre}}</a></li>
@endforeach
</ul>

@endsection