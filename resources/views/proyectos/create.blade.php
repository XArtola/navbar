@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<h1 class="display-4 pb-4">Nuevo proyecto</h1>
<form action="{{route('proyectos.store')}}" method="post">
    @csrf
    <div class="form-group text-center">
        <label class="lead">Nombre</label><br>
        <input type="text" name="nombre" value="{{old('nombre')}}">
        @if ($errors->has('nombre'))
        <p class="text-danger lead font-weight-bold">{{ $errors->first('nombre') }}</p>
        @endif
    </div>

    <div class="form-group text-center">
        <label class="lead">Titulo</label><br>
        <input type="text" name="titulo" value="{{old('titulo')}}">
        @if ($errors->has('titulo'))
        <p class="text-danger lead font-weight-bold">{{ $errors->first('titulo') }}</p>
        @endif
    </div>

    <div class="form-group text-center">
        <label class="lead">Fecha inicio</label><br>
        <input type="date" name="fechaInicio" value="{{old('fechaInicio')}}">
        @if ($errors->has('fechaInicio'))
        <p class="text-danger lead font-weight-bold">{{ $errors->first('fechaInicio') }}</p>
        @endif
    </div>

    <div class="form-group text-center">
        <label class="lead">Fecha fin</label><br>
        <input type="date" name="fechaFin" value="{{old('fechaFin')}}">
        @if ($errors->has('fechaFin'))
        <p class="text-danger lead font-weight-bold">{{ $errors->first('fechaFin') }}</p>
        @endif
    </div>

    <div class="form-group text-center">
        <label class="lead">Horas estimadas</label><br>
        <input type="number" name="horasEstimadas" value="{{old('horasEstimadas')}}">
        @if ($errors->has('horasEstimadas'))
        <p class="text-danger lead font-weight-bold">{{ $errors->first('horasEstimadas') }}</p>
        @endif
    </div>
    
    <div class="form-group text-right">
        <button class="btn btn-primary text-white" type="submit">Insertar</button>
    </div>
</form>


@endsection