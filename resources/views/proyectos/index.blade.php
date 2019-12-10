@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Proyectos</h2>
<a href="{{route('proyectos.create')}}">Añadir proyectos</a>
<table>
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Titulo</th>
    <th>Fecha Inicio</th>
    <th>Fecha fin</th>
    <th>Horas estimadas</th>
    <th>Empleado asignado</th>
    <th>Editar</th>
    <th>Eliminar</th>
  </tr>
  @foreach($listaProyectos as $proyecto)
  <tr>
    <td><a href="{{route('empleados.show',$proyecto->id)}}">{{$proyecto->id}}</a></td>
    <td>{{$proyecto->nombre}}</td>
    <td>{{$proyecto->titulo}}</td>
    <td>{{$proyecto->fechainicio}}</td>
    <td>{{$proyecto->fechafin}}</td>
    <td>{{$proyecto->horasestimadas}}</td>
    @isset($proyecto->empleado)<td><a href="{{route('empleados.show',$proyecto->empleado->id)}}">{{$proyecto->empleado->nombre}}</a></td>@endisset
    <td><a href="{{route('proyectos.edit', $proyecto->id)}}">Editar</a></td>
    <td><a href="{{route('proyectos.destroy', $proyecto->id)}}">Eliminar</a></td>
    <td>
      <form action="{{route('proyectos.destroy', $proyecto->id)}}" method="post">
        @method('DELETE')
        @csrf
        <input type="submit" name="delete" value="delete">
      </form>
    </td>
  </tr>
  @endforeach
</table>

@endsection