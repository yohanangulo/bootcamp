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
  <h1 class="text-center text-white mt-8 mb-14 text-3xl font-bold">Editar articulo</h1>

  <div class="flex gap-2 justify-center pt-4">

    <a class="py-2 px-3 bg-slate-800 hover:bg-slate-700 transition-colors font-semibold text-white text-sm rounded-lg"
      href="{{ route('home') }}">
      Inicio
    </a>

  </div>


  <div class="max-w-[500px] px-6 mx-auto mt-4">
    <form action="{{ route('articulos.actualizar', ['id' => $id]) }}" method="POST">
      @csrf
      @method('PUT')
      <input value="{{$articulo->nombre}}" class="block mb-2 w-full rounded-full pl-5" placeholder="Nombre" type="text" name="nombre">
      <input step="0.01" value="{{$articulo->precio}}" class="block mb-2 w-full rounded-full pl-5" placeholder="Precio" type="number" name="precio">
      <input value="{{$articulo->stock}}" class="block mb-2 w-full rounded-full pl-5" placeholder="Stock disponible" type="number"
        name="stock">
      <input value="{{$articulo->codigo}}" class="block mb-2 w-full rounded-full pl-5" placeholder="Codigo" type="text" name="codigo">
      <input value="{{$articulo->metodo_de_pago}}" class="block mb-8 w-full rounded-full pl-5" placeholder="metodo de pago" type="text"
        name="metodo_de_pago">
      <button
        class="px-3 bg-slate-800 hover:bg-slate-700 transition-colors font-semibold text-white text-sm rounded-full w-full py-3">Crear</button>
    </form>
  </div>


</body>

</html>