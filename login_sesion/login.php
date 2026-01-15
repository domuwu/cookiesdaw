<?php
/*
(Formulario que envia por POST)


*/
?>

<?php 
//Si ya esta logeado, lo mandamos al dashboard
session_start();
if (isset($_SESSION["usuario"])) {
    header("Location: dashboard.php");
    exit;
}
//Mensaje opcional (viene por GET desde validar.php u logout.php)
$mensaje = $_GET["msg"] ?? "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login (POST + SESSION)</h1>
    <?php if ($mensaje !== ""): ?>
        <p><strong><?= htmlspecialchars($mensaje) ?></strong></p>
    <?php endif;?>

    <form method="POST" action="validar.php">
        <label>Usuario:</label><br>
        <input type="text" name="usuario" required><br><br>

        <label>Contraseña:</label><br>
        <input type="password" name="clave" required><br><br>

        <button type="submit">Volver</button>

        <p><em>Credenciales de prueba admin : 1234</em></p>
    </form>    

</body>
</html>