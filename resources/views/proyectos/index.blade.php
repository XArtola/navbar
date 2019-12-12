@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2 class="display-4">Proyectos</h2>
<a class="btn border-secondary bg-white m-4" href="{{route('proyectos.create')}}">Añadir proyectos</a>
<table class="text-center">
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Titulo</th>
    <!--<th>Fecha Inicio</th>
    <th>Fecha fin</th>
    <th>Horas estimadas</th>-->
    <th>Empleado responsable</th>
    <th></th>
    <th></th>
  </tr>
  @foreach($listaProyectos as $proyecto)
  <tr>
    <td><a href="{{route('proyectos.show',$proyecto->id)}}">{{$proyecto->id}}</a></td>
    <td>{{$proyecto->nombre}}</td>
    <td>{{$proyecto->titulo}}</td>
    <!--<td>{{$proyecto->fechainicio}}</td>
    <td>{{$proyecto->fechafin}}</td>
    <td>{{$proyecto->horasestimadas}}</td>-->
    <td>@isset($proyecto->empleado)<a href="{{route('empleados.show',$proyecto->empleado->id)}}">{{$proyecto->empleado->nombre}}</a>@endisset</td>
    <td><a href="{{route('proyectos.edit', $proyecto->id)}}">Editar</a></td>
    <td>
      <form action="{{route('proyectos.destroy', $proyecto->id)}}" method="post">
        @method('DELETE')
        @csrf
        <input class="text-blue" type="submit" name="delete" value="Eliminar">
      </form>
    </td>
  </tr>
  @endforeach
</table>

@endsection