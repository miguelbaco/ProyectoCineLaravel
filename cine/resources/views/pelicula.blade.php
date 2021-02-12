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

    <h1>{{ $pelicula['titulo'] }}</h1>
    <ul>
      <li>{{ $pelicula['nombre_director'] }}</li>
      <li>{{ $pelicula['ano'] }}</li>
      <li>{{ $pelicula['nombre_genero'] }}</li>
    </ul>

  <a href="/" class="volver"><input type="button" value="volver"></a>
</body>
<html>
