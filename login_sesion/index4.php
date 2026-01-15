<?php
session_start();

//si hay sesion, ir al dashboard

if(isset($_SESSION["usuario"])){
    header("Location: dashboard.php");
    exit;
}

//si no hay sesion, ir al login
header("Location: login.php");
exit;