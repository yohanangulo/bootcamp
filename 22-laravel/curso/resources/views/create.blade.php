<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create an article</title>
</head>

<body>
  <h1>Create an article</h1>

  {{-- formulario para crear un nuevo articulo --}}
  <form action="{{ route('articulos.store') }}" method="POST">
    @csrf

    {{-- nombre --}}
    <label for="nombre_id">Nombre</label>
    <input type="text" name="nombre" id="nombre_id">

    {{-- precio --}}
    <label for="precio_id">Precio</label>
    <input type="number" name="precio" id="precio_id">

    {{-- stock disponible --}}
    <label for="stock_disponible_id">Stock disponible</label>
    <input type="number" name="stockDisponible" id="stock_disponible_id">

    {{-- codigo --}}
    <label for="codig_id">Codigo</label>
    <input type="text" name="codigo" id="codig_id">

    {{-- metodo de pago --}}
    <label for="metodo_de_pago_id">Metodo de pago</label>
    <input type="text" name="metodoDePago" id="metodo_de_pago_id">

    <button>Guardar</button>

  </form>

</body>

</html>
