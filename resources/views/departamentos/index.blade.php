@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2 class="display-4 pb-4">Departamentos</h2>

<table class="text-center">
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Jefe</th>
    <th>Gestión</th>
  </tr>

  @foreach($listaDepartamentos as $departamento)
  <tr>
    <td><a href="{{route('departamentos.show',[$departamento->id])}}">{{$departamento->id}}</a></td>
    <td>{{$departamento->nombre}}</td>
    <td><a href="{{route('empleados.show',[$departamento->empleado->id])}}">{{$departamento->empleado->nombre}}</a></td>
    <td><a href="{{route('departamentos.manage',$departamento->id)}}">Gestión</a></td>
  </tr>
  @endforeach
</table>

@endsection