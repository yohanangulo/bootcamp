<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyecto</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- realizar un programa que permita guardar productos, un producto tiene nombre, precio, canitada categoria, tipo, fecha de vencimiento descripcion, fecha de creacion, fecho de modificiacion. -->
  <form action="guardar.php" method="POST">
    <div>
      <label for="">Nombre</label>
      <input required type="text" name="nombre" id="">
    </div>
    <div>
      <label for="">precio</label>
      <input required type="number" name="precio" id="">
    </div>
    <div>
      <label for="">Cantidad</label>
      <input required type="text" name="cantidad" id="">
    </div>
    <div>
      <label for="">categoria</label>
      <input required type="text" name="categoria" id="">
    </div>
    <div>
      <label for="">Tipo</label>
      <input required type="text" name="tipo" id="">
    </div>
    <div>
      <label for="">Fecha de vencimiento</label>
      <input type="date" name="vencimiento" id="">
    </div>
    <div>
      <label for="">Descripcion</label>
      <textarea name="descripcion" id="" cols="30" rows="7"></textarea>
    </div>
    <button >Guardar</button>
  </form>
</body>
</html>