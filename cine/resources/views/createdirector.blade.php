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
    <h2>Añade un director</h2>
      <div>
        <form action="{{ route('directores.store') }}" method="POST">
          @csrf
          <label for="nombre">Nombre:</label><br>
          <input type="text" id="nombre" name="nombre"><br>
          <label for="pais">País:</label><br>
          <input type="text" id="pais" name="pais"><br>
          <label for="fnac">Fecha nacimiento:</label><br>
          <input type="text" id="fnac" name="fnac"><br>
          <label for="edad">Edad:</label><br>
          <input type="text" id="edad" name="edad"><br><br>
          <input type="submit" value="Enviar">
        </form>
      </div>     

    </body>
</html>
