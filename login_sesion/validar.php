<?php

session_start();
 
/*POST -> SERVIDOR: PHP RECIBE CON 4_POST
si esta bien: crea estado guardando $_session[usuario]




// recibir
$usuario = $_POST["usuario"] ?? "";
$clave = $_POST["clave"] ??"";

//creddenciales "quemadas" -> didactico
$usuario_correcto = "admin";
$clave_correcta = "1234";

//validacion basica
if ($usuario == $usuario_correcto && $clave == $clave_correcta) {

//guardar estado (sesion)
$_SESSION["usuario"] = $usuario;

//redirigir a pagina protegida 
header("Location: dashboard.php");
exit;
}
//si falla, volver al login con un mensaje
header("Location: login.php?msg=".urlencode("Usuario o contraseña incorrecta"));
exit;