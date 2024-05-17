<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categoría</title>
    @vite(['resources/css/estilos.css'])
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
    <div class="container" style="margin-top:10%;">
        <h1 class="center-align">Modificar Categoría</h1>
        <form method="POST" action="{{ route('categorias.update', $categoria->id) }}" id="formulario">
            @csrf
            @method('PATCH')
        
            <div class="container">
                <label for="nombre">Nombre de la Categoría:</label>
                <input type="text" name="nombre" id="nombre" value="{{ $categoria->nombre }}"/>
            </div>
            <div class="container">
                <label for="tipo">Tipo:</label>
                <input type="text" name="tipo" id="tipo" value="{{ $categoria->tipo }}"/>
            </div>
            <div class="center-align" style="margin-top: 30px;">
                <input type="submit" name="action" value="Enviar" class="btn waves-effect waves-light btn-large">
            </div>

        </form>
    </div>
</body>
</html>
