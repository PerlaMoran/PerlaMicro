<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/create.css'])


        <title>Pagina inicio</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->

        <body>
            <h1>Almacen doña beti</h1>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLI2ZBsSsnMMW0FMom246k6HaYZ5cezm0NHg&s" alt="" id="Imghome">
            <br>
            <br>
            <a href="/producto" id="Primera1">Producto</a>
            <a href="/tipo" id="Primera2">Categoria</a>            
        </body>
</html>
