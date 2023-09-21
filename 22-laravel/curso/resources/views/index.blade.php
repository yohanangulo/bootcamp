<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Articles view</title>
</head>

<body>
  <h1>Articles List</h1>
  <a href="{{ route('articulo.create') }}">Create article</a>

  <table>
    <thead>
      <tr>
        <th>id</th>
        <th>nombre</th>
        <th>precio</th>
        <th>imagen</th>
        <th>qty</th>
        <th>codigo</th>
        <th>metodo de pago</th>
        <th>acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($articles as $article)
        <tr>
          <td>{{ $article->id }}</td>
          <td>{{ $article->nombre }}</td>
          <td>{{ $article->precio }}</td>
          <td>{{ $article->imagen }}</td>
          <td>{{ $article->qty }}</td>
          <td>{{ $article->codigo }}</td>
          <td>{{ $article->metodo_de_pago }}</td>
          <td>{{ $article->acciones }}</td>

          <td>
            <a href="{{ route('articulos.edit', $articulo->id) }}"></a>
            <form action="">{{ route('articulos.delete') }}
              @csrf
              @method('delete')
              <button>delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

</body>

</html>
