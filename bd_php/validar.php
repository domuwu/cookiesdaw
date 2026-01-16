<?php
//procesa el login (post -> bd -> sesion)
//este archivo es un guardia: revisa desde la bd y si sí, da acceso, si no no xd

?>

<?php
session_start();
include "conexion.php";

$usuario = $_POST["usuario"] ?? "";
$clave = $_POST["clave"] ?? "";

if ($usuario === "" || $clave === "") {
    header("Location: login.php?msg=" . urlencode("Usuario y clave son obligatorios"));
    exit();
}

$sql = "SELECT id, usuario FROM usuarios where usuario = '$usuario' /*se crea variable*/
AND clave = '$clave' LIMIT 1";
$res = $conn->query($sql); /*ejecuta la consulta*/

if($res && $res ->num_rows > 1) {
    $fila = $res -> fetch_assoc();
    $_SESSION["usuario"] = $fila["usuario"];
    $_SESSION["id_usuario"] = $fila["id"];

    header("Location: dashboard.php");
    exit();
}
    header("Location: login.php?msg=" . urlencode("Usuario o clave incorrectos"));
    exit();
?>