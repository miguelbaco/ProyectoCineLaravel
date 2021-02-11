<html>
<head>
    <title>Cine</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
<table style="width:100%">
  <tr>
    <th>Nombre</th>
    <th>Descripción</th>
  </tr>
  @foreach ($generos as $uno)
   <tr>
     <td><a href="{{ route('generos.show', $uno['nombre']) }}">{{ $uno['nombre'] }}</a></td>
     <td> {{ $uno['descripcion'] }} </td>
     <td class="vertd"><a href="{{ route('generos.show', $uno['nombre']) }}" class="ver"><input type="button" value="Ver peliculas de {{ $uno['nombre'] }}"></a></td>
     <td class="vertd">
        <form action="{{ route('generos.destroy', $uno) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" title="delete" class="ver">eliminar</button>
       </form>
      </td> 
   </tr>
  @endforeach
</table>
<br>
<a href="/" class="volver"><input type="button" value="volver"></a>
<br>

<a href="{{ route('generos.create') }}"><input type="button" value="Añadir género"></a>

</body>
<html>
