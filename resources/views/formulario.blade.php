<html>

<form method="Post" action="{{ route('logout')}}">
    @csrf
    <button type="submit">Cerrar sesion</button>
</form>
@else
<a href="{{ route('login') }}">Iniciar sesion</a>
<a href="{{ route('register') }}">Registrarse</a>
@endauth
</html>