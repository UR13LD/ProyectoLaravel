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


<h1 class="center-align">MODIFICAR "{{$dispositivo->nombre}}"</h1>
<form method="POST" action="/dispositivo/{{$dispositivo->id}}" id="formulario" class="container">
	@csrf
	@method('patch')

	<div class="input-field">
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" id="nombre" value="{{$dispositivo->nombre}}">
	</div>
	<div class="input-field">
		<label for="modelo">Modelo</label>
		<input type="text" name="modelo" id="modelo" value="{{$dispositivo->modelo}}">
	</div>
	<div class="input-field">
		<label for="marca">Precio</label>
		<input type="text" name="precio" id="precio" value="{{$dispositivo->precio}}">
	</div>
	<div class="">
		<label for="categorias">Categorías</label>
		<select name="categorias[]" id="categorias" multiple>
			@foreach($categorias as $categoria)
				<option value="{{ $categoria->id }}"
					@if($dispositivo->categorias->contains($categoria->id)) selected @endif>
					{{ $categoria->nombre }}
				</option>
			@endforeach
		</select>
	</div>
	<div class="center-align">
		<input type="submit"  class="btn center btn-large" name="action" value="Enviar">
	</div>
	
</form>
</body>
</html>