<?php
/*
este arhivo lee la sesión
servidor -> crea sesion -> id
navegador -> guarda id -> cookie
navegador -> envia id -> servidor
PHP busca los datos en el servidor, no en el navegador

*/
?>

<?php
session_start();

$usuario = $_SESSION["usuario"] ?? "No hay sesión";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver sesión</title>

</head>
<body>
    <h1>LECTURA DE SESIÓN</h1>
    <p>Usuario guardado en sesión: <strong><?= $usuario ?></strong></p>

    <a href="cerrar_sesion.php">Cerrar sesion</a>
    <a href="index3.php">Volver</a>
</body>
</html>