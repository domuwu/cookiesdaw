<?php
/*
    Este archivo lee la cookie
    servidor -> crea cookie -> navegador
    navegador -> envia cookie -> servidor



*/

?>

<?php 
    $usuario = $_COOKIE["usuario"] ?? "No hay cookie";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver cookie</title>
</head>
<body>
    <h1>LECTURA DE COOKIE</h1>
    <p>Usuario guardado en cookie: <strong><?= $usuario ?></strong></p>
    <a href="index3.php">Volver</a>


</body>
</html>