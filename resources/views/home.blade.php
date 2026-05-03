<!DOCTYPE html>
<html>
    <head>
    <title>inicio</title>
    </head>
<body>
    <h1>bienvenido</h1>
@auth //--- esta directiva de blade se utiliza para verificar si el usuario esta autenticado, si es asi se muestra el mensaje de bienvenida y la opcion de cerrar sesion, si no esta autenticado se muestra la opcion de iniciar sesion o registrarse---
<p>hola {{ auth()->user()->name }}</p>
<form action="{{ route('logout') }}" method="POST">
    @csrf//--- esta directiva de blade se utiliza para generar un token de seguridad para evitar ataques de tipo CSRF, es necesario incluirla en los formularios que realizan acciones que modifican datos, como cerrar sesion---   
    <button type="submit">cerrar sesion</button>
</form>
@else //--- esta directiva de blade se utiliza para mostrar el contenido si el usuario no esta autenticado, en este caso se muestra la opcion de iniciar sesion o registrarse---
<a href="{{ route('login') }}">iniciar sesion</a>
<a href="{{ route('register') }}">registrarse</a>
@endauth//--- esta directiva de blade se utiliza para cerrar la condicion de autenticacion---
</body>
</html>
//---en este archivo blade se muestra un mensaje de bienvenida al usuario autenticado, y se le da la opcion de cerrar sesion, si el usuario no esta autenticado se le da la opcion de iniciar sesion o registrarse---