<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Index</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  
</head>

<body>
    <header class="navbar bg-secondary">

        <a class="navbar-brand">
        <img src='{{asset("assets/img/logo2.jpg")}}'></img>
        </a>
        <a class="navbar-link">Empleados</a>
        <a class="navbar-link">Proyectos</a>
        <a class="navbar-link">Departamentos</a>
    </header>
</body>

</html>