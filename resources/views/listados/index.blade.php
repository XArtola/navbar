@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

<ul>
  @foreach($listado as $linea)
  <li>{{$linea->nombre}}</li>
</ul>
@endforeach
@endsection