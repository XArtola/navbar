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
  @isset($infoEmpleado->departamento)<li>Es jefe del dpt: {{$infoEmpleado->departamento->nombre}}</li>@endisset

</ul>
<h2>Proyectos adjudicados</h2>
<ul>
  @foreach( $proyectos as $proyecto)
  <li><a href="{{route('proyectos.show',[$proyecto->id])}}">{{$proyecto->nombre}}</a></li>
  @endforeach
</ul>
@endsection