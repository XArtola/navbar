@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')


<form action="{{route('proyectos.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label>Nombre</label><br>
        <input type="text" name="nombre" value="{{old('nombre')}}">
        @if ($errors->has('nombre'))
        <p>{{ $errors->first('nombre') }}</p>
        @endif
    </div>

    <div class="form-group">
        <label>Titulo</label><br>
        <input type="text" name="titulo" value="{{old('titulo')}}">
        @if ($errors->has('titulo'))
        <p>{{ $errors->first('titulo') }}</p>
        @endif
    </div>

    <div class="form-group">
        <label>Fecha inicio</label><br>
        <input type="date" name="fechaInicio" value="{{old('fechaInicio')}}">
        @if ($errors->has('fechaInicio'))
        <p>{{ $errors->first('fechaInicio') }}</p>
        @endif
    </div>

    <div class="form-group">
        <label>Fecha fin</label><br>
        <input type="date" name="fechaFin" value="{{old('fechaFin')}}">
        @if ($errors->has('fechaFin'))
        <p>{{ $errors->first('fechaFin') }}</p>
        @endif
    </div>

    <div class="form-group">
        <label>Horas estimadas</label><br>
        <input type="number" name="horasEstimadas" value="{{old('horasEstimadas')}}">
        @if ($errors->has('horasEstimadas'))
        <p>{{ $errors->first('horasEstimadas') }}</p>
        @endif
    </div>

    <button type="submit">Insertar</button>
</form>


@endsection