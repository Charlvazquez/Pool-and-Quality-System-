<?php
  /*$conn = mysqli_connect("localhost", "root", "", "rdoro",);*/
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'sistema_encuestas';

try {
  $conexion = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>