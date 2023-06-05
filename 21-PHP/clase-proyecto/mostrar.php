<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mostrar productos</title>
</head>
<body>
  <?php
  # conexion a la base de datos
  require "./db.php";

  # crear la consulta
  $query = 'SELECT * FROM producto';

  # ejecutar la consulta
  $resultado = mysqli_query($conn, $query);

  # validar resultado
  if (!($resultado && $resultado->num_rows > 0)) {
    echo "no se encontraron registros";
  }

  while ($row = $resultado->fetch_assoc()) :
    echo $row['nombre'] . ' ' . $row['precio'] . ' ' . $row['cantidad'] . ' ' . $row['tipo'] . ' ' . $row['categoria'] . ' ' . $row['fecha_vencimiento'] . '<br>';
  endwhile;
  ?>
</body>
</html>