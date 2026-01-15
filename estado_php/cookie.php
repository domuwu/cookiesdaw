<?php
//este archivo crea una cookie
?>

<?php
//crear una cookie usuario
setcookie("usuario", "Dom", time() +60) //expira en 60 segundos
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cookie</title>
</head>
<body>
    <h1>COOKIE CREADA</h1>
    <p>Se ha guardado una cooklie con el user</p>

    <a href="ver_cookie.php">VER COOKIE</a>
</body>
</html>
