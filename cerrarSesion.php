<?php
    session_start();
    if(!isset($_SESSION["nombre"]) && !isset($_SESSION["clave"])){
        header("location:index.php");
    }
    session_destroy();
    header("location:index.php")
?>