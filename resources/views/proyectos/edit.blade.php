@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')


<form action="{{route('proyectos.update', $proyecto->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Nombre</label><br>
        <input type="disabled" name="nombre" value="{{$proyecto->nombre}}">
        @if ($errors->has('nombre'))
        <p>{{ $errors->first('nombre') }}</p>
        @endif
    </div>

    <div class="form-group">
        <label>Titulo</label><br>
        <input type="text" name="titulo" value="{{$proyecto->titulo}}">
        @if ($errors->has('titulo'))
        <p>{{ $errors->first('titulo') }}</p>
        @endif
    </div>

    <div class="form-group">
        <label>Fecha inicio</label><br>
        <input type="date" name="fechaInicio" value="{{$proyecto->fechainicio}}">
        @if ($errors->has('fechaInicio'))
        <p>{{ $errors->first('fechaInicio') }}</p>
        @endif
    </div>

    <div class="form-group">
        <label>Fecha fin</label><br>
        <input type="date" name="fechaFin" value="{{$proyecto->fechafin}}">
        @if ($errors->has('fechaFin'))
        <p>{{ $errors->first('fechaFin') }}</p>
        @endif
    </div>

    <div class="form-group">
        <label>Horas estimadas</label><br>
        <input type="number" name="horasEstimadas" value="{{$proyecto->horasestimadas}}">
        @if ($errors->has('horasEstimadas'))
        <p>{{ $errors->first('horasEstimadas') }}</p>
        @endif
    </div>

    <button type="submit">Actualizar datos</button>
</form>


@endsection