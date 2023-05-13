<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Get method</title>
</head>
<body>
  <h1>Bienvenido <?=$_GET['nombre']?> <?=$_GET['apellido']?></h1>
  <?php
  session_start();
  echo $_SESSION['apellido'];
  
  ?>
</body>
</html>