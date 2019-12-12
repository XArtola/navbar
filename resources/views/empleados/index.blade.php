@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2 class="display-4 pb-4">Empleados</h2>

<table class="text-center">
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <!--<th>Email</th>
    <th>Telefono</th>-->
    <th>Responsable de proyecto</th>
   <!-- <th>Departamento que dirige</th>-->
  </tr>
  @foreach($listaEmpleados as $empleado)
  <tr>
    <td><a href="{{route('empleados.show',$empleado->id)}}">{{$empleado->id}}</a></td>
    <td>{{$empleado->nombre}}</td>
    <td>{{$empleado->apellido}}</td>
    <!--<td>{{$empleado->email}}</td>
    <td>{{$empleado->telefono}}</td>-->
    <td>@isset($empleado->proyecto)<a href="{{route('proyectos.show',$empleado->proyecto->id)}}">{{$empleado->proyecto->nombre}}</a>@endisset</td>
    <!--<td>@isset($empleado->jefeDepartamento)<a>{{$empleado->jefeDepartamento->id}}</a>@endisset</td>-->
  </tr>
  @endforeach
</table>

@endsection