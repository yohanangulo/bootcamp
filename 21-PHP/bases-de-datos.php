<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bases de datos con php</title>
</head>
<body>
  <?php
  require "./conn.php";

  // $sql = "INSERT INTO user (nombre, email) VALUES ('Jose', 'anguloyohan98@gmail.com');";

  // echo $conn->query($sql) ? "Se ejecuto la consulta correctamente" : "Ocurrio un error ejecutando la consulta" ;

  $sql = "SELECT * FROM user";

  $reuslt = $conn->query($sql);

  if (! $reuslt->num_rows > 0) {
    echo "No hay registros";
    return;
  }
  
  while ($row = $reuslt->fetch_assoc()) : ?>
    <div>
      <span><b>Nombre:</b> <?=$row['nombre']?></span>
      <span><b>Email:</b> <?=$row['email']?></span>
    </div>
  <?php endwhile;
  # cerrar conexion
  $conn->close();
  ?>
</body>
</html>