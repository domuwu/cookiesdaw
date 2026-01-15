<?php
/*
(pagina protegida por sesion)
esta pag no depende de posty
*/
?>

<?php
session_start();
//si no existe la sesion, no se puede
if (isset($_SESSION["usuario"])) {
    header("Location: login.php?msg=".urlencode("Debes iniciar sesion primero"));
    exit;
}

$usuario = $_SESSION["usuario"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard (pagina protegida)</h1>
    <p>Bienvenido, <strong><?= htmlspecialchars($usuario) ?></strong></p>
    <p>Si estas aqui, significa que iniciaste sesion xdxd esta activa</p>
    <a href="logout.php"></a>
</body>
</html>