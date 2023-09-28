<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Crear articulo</title>
  @vite('resources/css/app.css')
  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      font-family: sans-serif;
    }

    body {
      min-height: 100vh;
      background: linear-gradient(45deg, #f7a224, #c513a7);
    }
  </style>
</head>

<body class="py-20">
  <h1 class="text-center text-white mt-8 mb-14 text-3xl font-bold">Crea un articulo</h1>

  <div class="flex gap-2 justify-center pt-4">
    
    <a
      class="py-2 px-3 bg-slate-800 hover:bg-slate-700 transition-colors font-semibold text-white text-sm rounded-lg"
      href="{{ route('home') }}"
    >
      Inicio
    </a>

  </div>

  <form action="">
    <div>
      <label for="">Nombre</label>
    </div>
  </form>
  

</body>

</html>