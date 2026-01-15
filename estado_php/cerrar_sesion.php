<?php
/*
ESTE ARCHIVO CIERRA LA SESION

*/
?>

<?php
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerrar sesión</title>
</head>
<body>
    <h1>SESIÓN CERRADA</h1>
    <p>La sesion ha sido eliminada</p>

    <a href="index3.php">Volver</a>
    
</body>
</html>