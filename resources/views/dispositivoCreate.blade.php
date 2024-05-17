<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/estilos.css',])
</head>
<body>
    <!-- Header -->
    <div class="navbar">
        <nav>
            <ul>
                <li><a href="/dispositivo">Dispositivos</a></li>
                <li><a href="/dispositivo/create">Crear Dispositivo</a></li>
                <li><a href="/categorias/create">Crear Categoría</a></li>
                <li><a href="/categorias">Ver Categorías</a></li>
            </ul>
        </nav>
    </div>

<h1 class="center-align">CREAR DISPOSITIVO</h1>
<form method="POST" action="/dispositivo" id="formulario" class="container">
    @csrf
    
    <div class="input-field">
        <label for="nombre">Nombre</label>
        <input id="nombre" type="text" name="nombre" class="validate">
    </div>
    <div class="input-field">
        <label for="modelo">Modelo</label>
        <input id="modelo" type="text" name="modelo" class="validate">
    </div>
    <div class="input-field">
        <label for="precio">Precio</label>
        <input id="precio" type="text" name="precio" class="validate">
    </div>

    {{-- APARTADO DE INSERCIÓN --}}
        <div class="input-field">
            <label for="categorias">Categorías</label>
            <select id="categorias" name="categorias[]" multiple>
                <option value="" disabled>Selecciona una o más categorías</option> <!-- "selected" removido porque no es adecuado en múltiples selects si se desea que el usuario elija. -->
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                @endforeach
            </select>
        </div>
    
    <div class="center-align">
        <button class="btn waves-effect waves-light btn-large" type="submit" name="action">Enviar</button>
    </div>
</form>

</body>
</html>