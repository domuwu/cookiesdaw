<?php
//registra un nuevo usuario en la bd (post -> insert)
//aqui lo mantenemos simple xd(sin hash ni nada)
//registro = POST + INSERT en la bd
?>

<?php
session_start();
include "conexion.php";

$msg = "";
if ($_SERVER["REQUEST_METHOD"]=== "POST"){
    $usuario = $_POST["usuario"] ?? "";
    $correo = $_POST["correo"] ??"";
    $clave = $_POST["clave"] ??"";

    if($usuario === "" || $correo === "" || $clave ===""){
        $msg = "Todos los campos son obligatorios";
    } else {
        //verificar si el usuario ya existe
        $sql_check = "SELECT id FROM usuarios WHERE usuario = '$usuario' LIMIT 1";
        $check = $conn->query($sql_check);

        if($check && $check->num_rows > 0){
            $msg = "El usuario ya existe, elige otro";
        } else {
            //insertar nuevo usuario
            $sql = "INSERT INTO usuarios (usuario, correo, clave) VALUES ('$usuario', '$correo', '$clave')";
            if($conn->query($sql) === TRUE){
                header("Location: login.php?msg=" . urlencode("Registro exitoso, ya puedes ingresar"));
                exit();
            } else {
                $msg = "Error al registrar el usuario: " . $conn->error;
            }
        }
    }   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>Registro de Usuario</h1>
    <?php if ($msg !== ""): ?>
        <p><strong><?= htmlspecialchars($msg) ?></strong></p>
        <?php endif; ?>

        <form method="POST" action ="">
             <label>Usuario:</label><br>
        <input type="text" name="usuario" required><br><br>

        <label>Correo:</label><br>
        <input type="email" name="correo" required><br><br>

        <label>Contraseña:</label><br>
        <input type="password" name="clave" required><br><br>

        <button type="submit">Ingresar</button>
       </form>

        <p><a href="login.php">Volver al Login</a></p>
        
</body>
</html>