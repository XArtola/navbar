@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')


<form action="{{route('proyectos.store')}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Nombre</label><br>
        <input type="disabled" name="nombre" value="{{$proyecto->nombre}}">
    </div>

    <div class="form-group">
        <label>Titulo</label><br>
        <input type="text" name="titulo" value="{{$proyecto->titulo}}">
    </div>

    <div class="form-group">
        <label>Fecha inicio</label><br>
        <input type="date" name="fechaInicio" value="{{$proyecto->fechaInicio}}">
    </div>

    <div class="form-group">
        <label>Fecha fin</label><br>
        <input type="date" name="fechaFin" value="{{$proyecto->fechaFin}}">
    </div>

    <div class="form-group">
        <label>Horas estimadas</label><br>
        <input type="number" name="horasEstimadas" value="{{$proyecto->horasEstimadas}}">
    </div>

    <button type="submit">Insertar</button>
</form>


@endsection