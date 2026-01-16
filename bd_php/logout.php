<?php
//cierra la sesion y vuelve al login
?>

<?php
session_start();
session_destroy();

header("Location: login.php?msg=" .
    urlencode("Sesion cerrada correctamente"));
    exit();
?>