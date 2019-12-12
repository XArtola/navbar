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
  @isset($infoEmpleado->proyecto)<li>Responsable del proyecto: <a href="{{route('proyectos.show',[$infoEmpleado->proyecto->id])}}">{{$infoEmpleado->proyecto->nombre}}</a></li>@endisset
  @isset($infoEmpleado->departamento)<li>Pertenece al departamento: <a href="{{route('departamentos.show',[$infoEmpleado->departamento->id])}}">{{$infoEmpleado->departamento->nombre}}</a></li>@endisset
  @isset($infoEmpleado->jefeDepartamento)<li>Dirige el departamento: <a href="{{route('departamentos.show',[$infoEmpleado->jefeDepartamento->id])}}">{{$infoEmpleado->jefeDepartamento->nombre}}</a></li>@endisset


</ul>
<h2>Proyectos en los que colabora</h2>
<ul>
  @foreach( $infoEmpleado->proyectos as $proyecto)
  <li>Proyecto: <a href="{{route('proyectos.show',[$proyecto->id])}}">{{$proyecto->nombre}}</a> | Inicio colaboración: {{$proyecto->pivot->fechainicio}} | Fin colaboración: {{$proyecto->pivot->fechafin}}</li>
  @endforeach
</ul>

<h2 class="text-center">Añadir a proyecto como colaborador</h2>

<form action="{{route('empleados.store')}}" method="POST">
  @csrf
  <div class="form-group text-center">
    <label class="lead">Proyecto</label><br>
    <select name="proyecto_id">
      @foreach($proyectos as $proyecto)
      <option value="{{$proyecto->id}}">{{$proyecto->nombre}}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group text-center">
    <label class="lead">Inicio colaboración</label><br>
    <input name="fechaInicio" type="date">
    @if ($errors->has('fechaInicio'))
    <p class="text-danger lead font-weight-bold">{{ $errors->first('fechaInicio') }}</p>
    @endif
  </div>

  <div class="form-group text-center">
    <label class="lead">Fin colaboración</label><br>
    <input name="fechaFin" type="date">
    @if ($errors->has('fechaFin'))
    <p class="text-danger lead font-weight-bold">{{ $errors->first('fechaFin') }}</p>
    @endif
  </div>
  <div class="form-group text-center">
    <input name="empleado_id" type="hidden" value="{{$infoEmpleado->id}}">
    <input class="btn btn-primary" type="submit" value="Añadir colaboración">
  </div>
</form>
@endsection