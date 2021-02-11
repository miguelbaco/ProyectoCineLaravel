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
    <th>País</th>
    <th>Fecha nac.</th>
    <th>Edad</th>
  </tr>
  @foreach ($directores as $uno)
   <tr>
     <td><a href="{{ route('directores.show', $uno['nombre']) }}">  {{ $uno['nombre'] }}</a></td>
     <td> {{ $uno['pais'] }} </td>
     <td> {{ $uno['fnac'] }} </td>
     <td> {{ $uno['edad'] }} </td>
     <td class="vertd"><a href="{{ route('directores.show', $uno['nombre']) }}" class="ver"><input type="button" value="Ver peliculas de {{ $uno['nombre'] }}"></a></td>
     <td class="vertd">
        <form action="{{ route('directores.destroy', $uno) }}" method="POST">
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

<a href="{{ route('directores.create') }}"><input type="button" value="Añadir director"></a>
</body>
<html>
