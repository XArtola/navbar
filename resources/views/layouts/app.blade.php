<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.head')
	<title>@yield('title')</title>
</head>
<body>

    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Relations
            </div>

            <div class="links">
                <a href="">Proyectos</a>
                <a href="">Empleados</a>
                <a href="">Departamentos</a>
            </div>
            <hr><br><br>
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
