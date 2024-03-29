<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home page</title>
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
  <h1 class="text-center text-white mt-8 mb-14 text-3xl font-bold">Pagina de articulos</h1>

  <div class="flex gap-2 justify-center pt-4">
    <a class="py-2 px-3 bg-slate-800 hover:bg-slate-700 transition-colors font-semibold text-white text-sm rounded-lg"
      href="{{ route('articulos.crear') }}">
      Crear articulo
    </a>
    <a class="py-2 px-3 bg-slate-800 hover:bg-slate-700 transition-colors font-semibold text-white text-sm rounded-lg"
      href="{{ route('home') }}">
      Inicio
    </a>

  </div>

  <table class="text-center mx-auto mt-10 bg-slate-300 text-slate-600">

    <thead>
      <tr class="">
        <th class="">Name</th>
        <th class="">Price</th>
        {{-- <th class="">Image</th> --}}
        <th class="">Stock</th>
        <th class="">Code</th>
        <th class="">Payment Method</th>
        <th class="">Actions</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($articles as $el)
        <tr>
          <td class="px-2">{{ $el['nombre'] }}</td>
          <td class="px-2">{{ $el['precio'] }}</td>
          {{-- <td class="px-2"><img width="60px" src="{{ $el['imagen'] }}" alt=""></td> --}}
          <td class="px-2">{{ $el['stock'] }}</td>
          <td class="px-2">{{ $el['codigo'] }}</td>
          <td class="px-2">{{ $el['metodo_de_pago'] }}</td>
          <td style="padding-inline: 10px;">
            <div class="flex gap-2 py-3">
              {{-- editar --}}
              <a href="{{ route('articulos.editar', ['id' => $el->id]) }}"
                class="bg-yellow-600 py-1 px-3 text-sm text-white font-semibold rounded-lg">Editar</a>
              {{-- borrar --}}
              <a href="{{ route('articulos.eliminar', ['id' => $el->id]) }}"
                class="bg-red-500 py-1 px-3 text-sm text-white font-semibold rounded-lg">Borrar</a>
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

</body>

</html>
