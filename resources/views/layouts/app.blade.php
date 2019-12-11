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

            <div class="links bg-dark p-4 rounded-pill">
                <a class="text-light" href="{{route('proyectos.index')}}"><img class="navbar-brand" style="width: 50px; height:50px" src="{{asset('assets/img/logo2.jpg')}}"></a>
                <a class="text-light" href="{{route('proyectos.index')}}">INICIO</a>
                <a class="text-light" href="{{route('proyectos.index')}}">Proyectos</a>
                <a class="text-light" href="{{route('empleados.index')}}">Empleados</a>
                <a class="text-light" href="{{route('departamentos.index')}}">Departamentos</a>
                <a class="text-light" id="listados">Listados</a>
            </div>

            <div class="op">
                @yield('content')
            </div>
        </div>
    </div>

    <footer class="footer">
        @include('layouts.footer')
    </footer>
    <!--Barra de navegación lateral-->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="{{route('listados.index',[1])}}">Proyectos actuales</a>
        <a href="{{route('listados.index',[2])}}">Empleados que no son responsables de proyecto</a>
        <a href="{{route('listados.index',[3])}}">Empleados que colaboran en más de un proyecto</a>
    </div>

    <script>
        $(function() {
            closeNav();
            //Abrir barra lateral
            $('#listados').click(function() {
                document.getElementById("mySidenav").style.width = "250px";
            });
        });

        //Cerrar barra lateral
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>

</body>

</html>