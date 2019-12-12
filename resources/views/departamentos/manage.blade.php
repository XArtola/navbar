@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Gestión del departamento {{$departamento->nombre}}</h2>
<form action="{{route('departamentos.setEmpleado')}}" method="post">
  @csrf
  
  <div class="form-group">
    <label>Elige un empleado</label>
    <select name="empleado_id">
      @foreach($empleados as $empleado)
      <option value="{{$empleado->id}}">{{$empleado->nombre}}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <label>Elige un rol</label>
    <select name="rol">
    <option value="jefe">Jefe</option>
    <option value="miembro">Miembro</option>
    </select>
  </div>

  <input name="departamento_id" type="hidden" value="{{$departamento->id}}">
    <input type="submit" value="Guardar cambios">
 

</form>

@endsection