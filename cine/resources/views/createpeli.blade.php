<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cine</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
        </style>
    </head>
    <body>
    <h2>Añade una película</h2>
      <div>
        <form action="{{ route('peliculas.store') }}" method="POST">
          @csrf
          <label for="titulo">Título:</label><br>
          <input type="text" id="titulo" name="titulo"><br>
          <label for="nombre_director">Nombre del director:</label><br>
          <input type="text" id="nombre_director" name="nombre_director"><br>
          <label for="ano">Año:</label><br>
          <input type="text" id="ano" name="ano"><br>
          <label for="nombre_genero">Género:</label><br>
          <input type="text" id="nombre_genero" name="nombre_genero"><br><br>
          <input type="submit" value="Enviar">
        </form>
      </div>     

    </body>
</html>
