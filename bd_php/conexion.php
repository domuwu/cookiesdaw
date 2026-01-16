<?php

?>

<?php
$host = "localhost";
$user = "root";
//$bd = "bd_proyecto";
$password = "";

$conn = new mysqli($host, $user, $password);
if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}
$conn->set_charset("utf8");
//Seleccionar la base de datos