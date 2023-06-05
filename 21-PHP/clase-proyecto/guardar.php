<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guardar producto</title>
</head>
<body>
  <!-- guardar producto -->
  <?php
  // conectar a la base de datos
  require "./db.php";

  // extracer datos
  $nombre = $_POST['nombre'];
  $precio = $_POST['precio'];
  $cantidad = $_POST['cantidad'];
  $categoria = $_POST['categoria'];
  $tipo = $_POST['tipo'];
  $fecha_vencimiento = $_POST['vencimiento'];
  $descripcion = $_POST['descripcion'];

  // crear consulta
  $query = "INSERT INTO producto
    (`nombre`,
    `precio`,
    `cantidad`,
    `categoria`,
    `tipo`,
    `fecha_vencimiento`,
    `descripcion`)
      VALUES
    ('$nombre',
    '$precio',
    '$cantidad',
    '$categoria',
    '$tipo',
    '$fecha_vencimiento',
    '$fecha_vencimiento')";

  // ejecutar consulta
  $resultado = mysqli_query($conn, $query);

  // validar resultado
  if ($resultado) {
    echo "Se guardaron los registros correctamente";
  } else {
    echo "Ocurrio un error al intentar guardar los datos";
  }

  $conn->close();

  ?>
</body>
</html>