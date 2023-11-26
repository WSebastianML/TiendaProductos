<?php 
    session_start();
    if($_POST["nombre"] != "" && $_POST["clave"] != ""){
        $_SESSION["nombre"] = $_POST["nombre"];
        $_SESSION["clave"] = $_POST["clave"];
        header("Location:panelPrincipal.php");
    }else {
        header("Location:index.php");
    }

    $nombre = $_POST["nombre"];
    $clave = $_POST["clave"];
    $recordarme = isset($_POST["chkRecordarme"]) ? $_POST["chkRecordarme"] :"";

    if ($recordarme != ""){
        setcookie("C_nombre", $nombre, 0);
        setcookie("C_clave", $clave, 0);
        setcookie("C_recordarme", $recordarme, 0);
    } else {
        if( isset($_COOKIE)){
            foreach( $_COOKIE as $name => $value)
            setcookie( $name, '', 1);
        }
    }
?>