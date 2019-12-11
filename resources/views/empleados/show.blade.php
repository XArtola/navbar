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
  @isset($infoEmpleado->departamento)<li><a href="{{route('departamentos.show',[$infoEmpleado->departamento->id])}}">{{$infoEmpleado->departamento->nombre}}</a></li>@endisset
  @isset($infoEmpleado->jefeDepartamento)<li>Es jefe del dpt: {{$infoEmpleado->jefeDepartamento->nombre}}</li>@endisset


</ul>
<h2>Proyectos adjudicados (colaboración)</h2>
<ul>
  @foreach( $infoEmpleado->proyectos as $proyecto)
  <li>Proyecto: <a href="{{route('proyectos.show',[$proyecto->id])}}">{{$proyecto->nombre}}</a> | Inicio colaboración: {{$proyecto->pivot->fechainicio}} | Fin colaboración: {{$proyecto->pivot->fechafin}}</li>
  @endforeach
</ul>

<h2>Añadir a proyecto como colaborador</h2>

<form action="{{route('empleados.store')}}" method="POST">
  @csrf
  <div class="form-group">
    <label>Proyecto</label>

    <select name="proyecto_id">
      @foreach($proyectos as $proyecto)
      <option value="{{$proyecto->id}}">{{$proyecto->nombre}}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <label>Inicio colaboración</label>
    <input name="fechaInicio" type="date">
    @if ($errors->has('fechaInicio'))
    <p>{{ $errors->first('fechaInicio') }}</p>
    @endif
  </div>

  <div class="form-group">
    <label>Fin colaboración</label>
    <input name="fechaFin" type="date">
    @if ($errors->has('fechaFin'))
    <p>{{ $errors->first('fechaFin') }}</p>
    @endif
  </div>

  <input name="empleado_id" type="hidden" value="{{$infoEmpleado->id}}">
  <input type="submit" value="Añadir colaboración">
</form>
@endsection