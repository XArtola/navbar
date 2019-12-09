<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
    <title>@yield('title')</title>
</head>

<body class="bg-primary">

    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md text-light">
                Relations
            </div>

            <div class="links bg-dark p-4">
                <a class="text-light" href="{{route('proyectos.index')}}"><img class="navbar-brand" style="width: 50px; height:50px" src="{{asset('assets/img/logo2.jpg')}}"></a>
                <a class="text-light" href="{{route('proyectos.index')}}">Proyectos</a>
                <a class="text-light" href="{{route('empleados.index')}}">Empleados</a>
                <a class="text-light" href="{{route('departamentos.index')}}">Departamentos</a>
            </div>

            <div class="op">
                @yield('content')
            </div>
        </div>
    </div>

    <footer class="footer">
        @include('layouts.footer')
    </footer>

</body>

</html>