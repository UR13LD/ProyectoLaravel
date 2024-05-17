<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Enlazar el archivo CSS con una ruta relativa correcta -->
    <link rel="stylesheet" href="../css/estilos.css">
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

<div class="container">
    <h1 class="center-align">LISTA DE DISPOSITIVOS</h1>
    <table class="striped responsive-table centered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Dispositivo</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Categorias</th>
                <th>Detalles</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dispositivos as $dispositivo)
                <tr>
                    <td>{{$dispositivo->id}}</td>
                    <td>{{$dispositivo->nombre}}</td>
                    <td>{{$dispositivo->modelo}}</td>
                    <td>${{$dispositivo->precio}}</td>
                    <td>
                        @foreach ($dispositivo->categorias as $categoria)
                            {{$categoria->nombre}}<br>
                        @endforeach
                    </td>
                    <td><a href="/dispositivo/{{$dispositivo->id}}" class="waves-effect waves-light btn">VER</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
