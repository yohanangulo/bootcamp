<?php
session_start(); # para iniciar una sesion
?>

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
    a {
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

  # arrays, son un lista de elementos
  # y esto es puede guaradar en usa sola variable
  # NOTA: los arrays pueden ser de tipo numerico, asociativo, multidimensional

  $carros = ["Chevrolte", "Nissan", "audi"];
  $numeros = [1, 2, 3, 4, 5];
  $asociativo = ["nombre" => "yohan", "apellido" => "Angulo"];

  $multidimensional = [
    ["Chevrolte", "Nissan", "audi"],
    ["nombre" => "yohan", "apellido" => "Angulo"],
    [1, 2, 3, 4, 5]
  ];

  echo "<p>$carros[1]</p>";
  echo "<p>$numeros[2]</p>";
  echo "<p>" . $asociativo['nombre'] . "</p>";
  echo "<p>" . $multidimensional[1]['apellido'] . "</p>";

  # variables globales
  # las variables globales son aquellas que pueden ser accedidas desde cualquier parte del codigo

  $x = 5;
  $y = 10;

  function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; # GLOBLAS es como una especio de variables asociativa donde se guardan todas las variables del codigo
  }

  addition();

  echo $z; ?>

<!-- con post -->
  <form action="bienvenida.php" method="post">
    <label for="nombre">Nombre: </label>
    <input type="text" id="nombre" autocomplete="off" required name="nombre">
    <button>Enviar</button>
  </form>
  <!-- con get -->
  <a href="get.php?nombre=Yohan&apellido=Angulo" style="margin-right: 30px;">Click me!</a>
  <?php

  $nombre = "Jose";
  $apellido = "Angulo";
  // echo "<a href='get.php?nombre=$nombre&apellido=$apellido'>Probar con otra ruta GET</a>";

  # variable de sision, se debe ejecutar la funcion de sision antes...
  # almacenan la informacion en el servidor

  $_SESSION = ["nombre" => $nombre, 'apellido' => $apellido];
  // se usa session_destroy(); para 'cerrar la sesion'

  echo "<p>Desde una variable de sesion: " . $_SESSION['apellido'] . "</p>";

  # expresiones regulares
  # las expresiones regurales son patrones que se utilizan para encontrar
  # una cadena de caractere dentro de otra cadena de caracteres

  $exp = "/Yohan/i";

  if ( preg_match($exp, "Mi nombre es Jose") ) {
    echo "Se encontro la cadena";
  } else {
    echo "No se encontro la cadena";
  }

  echo "<br>" ;

  # validacion de nombre

  $exp = "/^[a-zA-Z0-9 ]*$/";
  
  if (preg_match($exp, "Yohan")):
    echo "si cumple";
  else:
    echo "no cumple";
  endif;
  echo "<br>";

  #validacion de contrasena
  $regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';
  if (preg_match($regex, "miContrasena123@")) {
    echo "La clave si cumple";
  } else {
    echo "La clave no cumple";
  }
  echo "<br>";


  # validacion de correo electronico
  $exp = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,8})$/";

  # crea una expresion regular que valide nombre completo, cedula, numero de telf.

  ?>

</body>
</html>