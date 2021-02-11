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
    <h2>Añade un género</h2>
      <div>
        <form action="{{ route('generos.store') }}" method="POST">
          @csrf
          <label for="nombre">Nombre del género:</label><br>
          <input type="text" id="nombre" name="nombre"><br>
          <label for="descripcion">Descripción:</label><br>
          <input type="text" id="descripcion" name="descripcion"><br>
          <input type="submit" value="Enviar">
        </form>
      </div>     

    </body>
</html>
