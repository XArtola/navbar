<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Index</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->

</head>

<style>
    img {

        width: 50px;
        height: 50px;
        margin: 0;
        padding: 0;

    }

    header{

background-color: lightblue;

    }
</style>

<body>
    <header class="navbar bg-secondary">

        <a class="navbar-brand"><img src={{asset("assets/logo2.jpg")}} "></img></a>
            <a class=" navbar-link">Inicio</a>
    </header>
</body>

</html>