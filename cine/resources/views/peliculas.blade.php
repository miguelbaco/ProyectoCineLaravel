<html>
<head>
    <title>Cine</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    </style>
</head>
<body>
<table style="width:100%">
  <tr>
    <th>Título</th>
    <th>Director</th>
    <th>Año</th>
    <th>Genero</th>
  </tr>
  @foreach ($peliculas as $uno)
   <tr>
     <td><a href="{{ route('peliculas.show', $uno['titulo']) }}"> {{ $uno['titulo'] }}</a></td>
     <td><a href="{{ route('directores.show', $uno['nombre_director']) }}"> {{ $uno['nombre_director'] }} </a></td>
     <td> {{ $uno['ano'] }} </td>
     <td><a href="{{ route('generos.show', $uno['nombre_genero']) }}"> {{ $uno['nombre_genero'] }} </a></td>
   </tr>
  @endforeach
</table>
<br>
<a href="/" class="volver"><input type="button" value="volver"></a>
<br>

<a href="{{ route('peliculas.create') }}"><input type="button" value="Añadir película"></a>

</body>
<html>
