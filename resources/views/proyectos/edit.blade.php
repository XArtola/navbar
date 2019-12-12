@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h1 class="display-4 pb-4">Editar proyecto</h1>

<form action="{{route('proyectos.update', $proyecto->id)}}" method="post">
    @csrf
    @method('PUT')

    <div class="form-group text-center">
        <label class="lead">Titulo</label><br>
        <input type="text" name="titulo" value="{{$proyecto->titulo}}">
        @if ($errors->has('titulo'))
        <p class="text-danger lead font-weight-bold">{{ $errors->first('titulo') }}</p>
        @endif
    </div>

    <div class="form-group text-center">
        <label class="lead">Fecha inicio</label><br>
        <input type="date" name="fechaInicio" value="{{$proyecto->fechainicio}}">
        @if ($errors->has('fechaInicio'))
        <p class="text-danger lead font-weight-bold">{{ $errors->first('fechaInicio') }}</p>
        @endif
    </div>

    <div class="form-group text-center">
        <label class="lead">Fecha fin</label><br>
        <input type="date" name="fechaFin" value="{{$proyecto->fechafin}}">
        @if ($errors->has('fechaFin'))
        <p class="text-danger lead font-weight-bold">{{ $errors->first('fechaFin') }}</p>
        @endif
    </div>

    <div class="form-group text-center">
        <label class="lead">Horas estimadas</label><br>
        <input type="number" name="horasEstimadas" value="{{$proyecto->horasestimadas}}">
        @if ($errors->has('horasEstimadas'))
        <p class="text-danger lead font-weight-bold">{{ $errors->first('horasEstimadas') }}</p>
        @endif
    </div>

    <div class="form-group text-right">
        <button class="btn btn-primary text-white" type="submit">Actualizar datos</button>
    </div>
</form>


@endsection