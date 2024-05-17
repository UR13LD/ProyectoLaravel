<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CategoriaCreate</title>
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
    <div class="container">
        <h1 class="center-align">CREAR CATEGORIA</h1>
        <form method="POST" action="/categorias" id="formulario">
            @csrf
            <div class="container">
                <div class="input-field">
                    <label for="nombre">Nombre de la Categoría:</label>
                    <input type="text" name="nombre" id="nombre"/>
                </div>
                <div class="input-field">
                    <label for="tipo">Tipo:</label>
                    <input type="text" name="tipo" id="tipo"/>
                </div>
                <div class="center-align" style="margin-top: 30px;">
                    <input type="submit" name="action" value="Enviar" class="btn waves-effect waves-light btn-large">
                </div>
            </div>
            
        </form>
    </div>
</body>
</html>
