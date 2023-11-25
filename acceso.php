<?php 
    session_start();
    if($_POST["nombre"] != "" && $_POST["clave"] != ""){
        $_SESSION["nombre"] = $_POST["nombre"];
        $_SESSION["clave"] = $_POST["clave"];
        header("Location:panelPrincipal.php");
    }else {
        header("Location:index.php");
    }

?>