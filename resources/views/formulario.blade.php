<html>

<form method="Post" action="{{ route('logout')}}">
    @csrf
    <input type="text" name="nombre" placeholder="nombre">
    <button type="submit">enviar</button>
</form>

</html>