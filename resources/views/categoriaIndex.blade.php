<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    @if (session()->has('success'))
        <p>SI SE BORRO</p>
    @endif

    {{-- Este es un ejemplo de cómo debería ser el código si estás listando categorías --}}
    <h1>CATEGORÍAS</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Tipo</th>

                
                <!-- <th>Acciones</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->id }}</td>
                    <td>{{ $categoria->nombre }}</td>
                    <td>{{ $categoria->tipo }}</td>
                    <!-- <td><a href="/categorias/{{$categoria->id}}" class="waves-effect waves-light btn">Editar</a></td> -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>