<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    # esto es php
    // variables
    $saludo = '<p>Hola mundo desde php</p>';
    // imprimir una variable o mensaje
    echo($saludo);

    $string = 'hola mundo';
    $integer = 1;
    $float = 235.5;
    $boolean = true;
    $array = ['el1', 'el2', 'el3'];
    $null = null;

    /**
     * Los objetos son siempre creados a partir de una clase
     */

    class Carro {
      public $color;
      public $model;

      public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
      }

      public function details() {
        return "Mi carro es un $this->model $this->color";
      }
    }

    $miCarrito = new Carro('Blanco', 'spark');

    echo $miCarrito -> details()
     
  ?>
    <h1><?=$saludo?></h1>
</body>
</html>

