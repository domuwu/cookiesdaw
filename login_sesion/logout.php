<?php
session_start();


//borra todo lo guardado  en la sesion

//vovler al login
header("Location:login.php?msg=".
    urlencode("Sesion cerrada correctamente"));
    exit();

?>