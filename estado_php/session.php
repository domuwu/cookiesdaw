<?php
/*
ESTE ARCHIVO INICIA UNA SESION
El navegador no guarda el nombre
solo guarda el ID de sesion

*/
?>


<?php
session_start();
//GUARDAR DATO EN SESION
$_SESSION["usuario"] = "Domm";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear sesión</title>
</head>
<body>
    <h1>SESIÓN INICIADA</h1>
    <p>Se ha guardado el usuario en la sesión</p>

    <a href="ver_session.php">Ver sesión</a>

</body>
</html>