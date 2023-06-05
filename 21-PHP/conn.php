<?php

$server_name = 'localhost';
$username = 'root';
$password = '';
$db = 'php';

$conn = new mysqli($server_name, $username, $password, $db);

# verificar conx
if ($conn->connect_error) {
  die("Connexion fallida: " . $conn->connect_error);
} else {
  echo "<p>Conexion exitosa</p>";
}