@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2 class="display-4 pb-4">Gestión del departamento {{$departamento->nombre}}</h2>
<form action="{{route('departamentos.setEmpleado')}}" method="post">
  @csrf

  <div class="form-group text-center">
    <label>Elige un empleado</label>
    <select name="empleado_id">
      @foreach($empleados as $empleado)
      <option value="{{$empleado->id}}">{{$empleado->nombre}}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group text-center">
    <label>Elige un rol</label>
    <select name="rol">
      <option value="jefe">Jefe</option>
      <option value="miembro">Miembro</option>
    </select>
  </div>

  <div class="form-group text-center">
    <input name="departamento_id" type="hidden" value="{{$departamento->id}}">
    <input class="btn btn-primary" type="submit" value="Guardar cambios">
  </div>


</form>

@endsection