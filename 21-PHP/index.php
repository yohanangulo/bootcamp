<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      background: #0f0f0f;
      color: white;
    }
  </style>
</head>

<body>
  <?php
  # esto es php
  // variables
  $saludo = '<h2>Hola mundo desde php</h2>';
  // imprimir una variable o mensaje
  echo ($saludo);

  $string = 'hola mundo';
  $integer = 1;
  $float = 235.5;
  $boolean = true;
  $array = ['el1', 'el2', 'el3'];
  $null = null;

  echo $saludo;

  /**
   * Los objetos son siempre creados a partir de una clase
   */

  # clases
  class Carro
  {
    public $color;
    public $model;

    public function __construct($color, $model)
    {
      $this->color = $color;
      $this->model = $model;
    }

    public function details()
    {
      return "Mi carro es un $this->model $this->color";
    }
  }

  $miCarrito = new Carro('Blanco', 'spark');
  echo ($miCarrito->details());

  # constantes
  define('PI', 3.1415);
  echo ("<h2>" . PI . "</h2>");

  # condicionales
  $dia = 'viernes';
  $dinero = true;
  $tiempo = true;

  if ($dia == 'viernes' && $dinero && $tiempo) :
    echo "<p>Hoy se sale</p>";
  elseif ($dia == 'sabado' || $dinero) :
    echo "<p>Hoy sabado se sale</p>";
  else :
    echo "<p>No se sale</p>";
  endif;

  # switch

  $favColor = "rojo";

  switch ($favColor) {
    case 'rojo':
      echo 'el color es rojo';
      break;

    case 'verde':
      echo 'el color favorito es verde';
      break;

    default:
      echo "El color el $favColodr";
      break;
  }



  # loops
  # loop for

  $cars = ['Chevrolet', 'Nissan', 'Audi'];

  echo "<h2>Mis carros favoritos son:</h2>";

  echo "con for";
  for ($i = 0; $i < count($cars); $i++) :
    echo "<p>$cars[$i]</p>";
  endfor;

  # foreach
  echo "<br> con foreach";
  foreach ($cars as $car) :
    echo "<p>$car</p>";
  endforeach;

  # loop while
  echo "<br>con while";
  $i = 0;
  while ($i < count($cars)) :
    echo "<p>$cars[$i]</p>";
    $i++;
  endwhile;

  # loop do while
  echo "<br><p>con do while</p>";
  $i = 0;
  do {
    echo "<p>$cars[$i]</p>";
    $i++;
  } while ($i < count($cars));

  # tambien se puede hacer uso del break como en otros lenguages de programaciion
  # tambien es puede hacer uso del continue para saltar a la otra iteracion cuando se utiliza con el ciclo for

  # funciones
  # las funciones son bloque de codigo aislados que se ejecutan cuando son llamadas
  function saludar($nombre) {
    echo "<p>Hola, $nombre</p>";
  }

  saludar('Yohan');

  function saludar_en_base_hora($tiempo = "noche") { # de esta manera se estrablecen parametros por defecto

    if ($tiempo == 'manana') :
      echo "Buenos dias";
    elseif ($tiempo == 'tarde') :
      echo "Buenas tardes";
    elseif ($tiempo == 'noche') :
      echo "Buenas noches";
    endif;

  }
  
  saludar_en_base_hora('noche');
  
  echo '<br>';
  # funciones con retorno
  # Las funciones con retorno son aquellas que retornan un valor

  function suma($a, $b) {
    return $a + $b;
  }

  echo "La suma es " . suma(2, 2);

  # funciones rucursivas
  # las funciones recursivas son aquellas que se llaman a si mismas

  function recursiva($a) {
    if ($a < 21) :
      echo "<p>$a</p>";
      recursiva($a + 1);
    endif;
  }

  recursiva(1);

  

  ?>
</body>
</html>