<?php
// punto de entrada de la aplicacion
?>

<?php
session_start();
if(isset($_SESSION["usuario"])){
    header("Location: dashboard.php");
    exit();
}
header("Location: login.php");
exit();


?>