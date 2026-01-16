<?php
//formulario de acceso(post)
?>

<?php
session_start();
if (isset($_SESSION["usuario"])) {
    header("Location: dashboard.php");
    exit();
}

$msg = $_GET["msg"] ?? "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if ($msg !== ""): ?>
        <p><strong><?= htmlspecialchars($msg) ?></strong></p>
       <?php endif; ?>

       <form method="POST" action="validar.php">
        <label>Usuario:</label><br>
        <input type="text" name="usuario" required>
        
        <label>Contraseña:</label><br>
        <input type="password" name="clave" required><br><br>

        <button type="submit">Ingresar</button>
       </form>

        <p><a href="registro.php">Registrarse</a></p>
</body>
</html>