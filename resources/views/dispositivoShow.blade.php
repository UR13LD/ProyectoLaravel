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

<div class="container center-align" style="margin-top: 10%;;">
    <h1 class="header">{{$dispositivo->nombre}}</h1>
    <h4 class="blue-text text-darken-2">Precio: ${{$dispositivo->precio}}</h4>

    @foreach ($dispositivo->categorias as $categoria)
        <h5>{{$categoria->categoria}}</h5>
    @endforeach
    
    <div class="row container">
        <div class="col s6">
            <a href="/dispositivo/{{$dispositivo->id}}/edit" class="btn waves-effect waves-light btn-large">Modificar</a>
        </div>
        <div class="col s6">
            <form method="POST" action="/dispositivo/{{$dispositivo->id}}" id="formulario">
                @csrf
                @method('DELETE')     
                <button type="submit" class="btn waves-effect waves-light red darken-2 btn-large">Eliminar</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>