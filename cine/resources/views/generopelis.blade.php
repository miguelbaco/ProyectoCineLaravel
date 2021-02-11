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
<h1>Películas de {{$peliculas[0]->nombre_genero}}</h1>
  @foreach ($peliculas as $pelicula)
    <br>
    <ul>
      <li><b>{{ $pelicula->titulo }}</b></li>
      <li>{{ $pelicula->nombre_director }}</li>
      <li>{{ $pelicula->ano }}</li>
    </ul>
  @endforeach

  <a href="/" class="volver"><input type="button" value="volver"></a>
</body>
<html>
