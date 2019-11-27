@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h2>Proyectos</h2>

<form action="{{route('proyectos.store')}}" method="Post">
  @csfr

  <label>Nombre</label>
  <input type="text" name="nombre" id="nombre">
  <label>Titulo</label>
  <input type="text" name="titulo" id="titulo">
  <label>Fecha Inicio</label>
  <input type="date" name="fechainicio" id="fechainicio">
  <label>Fecha fin</label>
  <input type="date" name="fechafin" id="fechafin">
  <label>Horas estimadas</label>
  <input type="number" name="horasestimadas" id="horasestimadas">
  <label>Empleado asignado</label>
  <input type="select" name="empleado_id" id="empleado_id">
</form>

@endsection