<?php
if(isset($_COOKIE["C_nombre"]) && isset ($_COOKIE["C_clave"])){
    $autonombre = $_COOKIE["C_nombre"];
    $autopassword = $_COOKIE["C_clave"];
}else{
    $autonombre = "";
    $autopassword = "";
}
?>
<html>
    <head>
    </head>
    <body>
            <h1>Login de ejemplo</h1>
            <form action= "acceso.php" method= "POST">
                <fieldset>
                    Usuario <br>
                    <input type= "text" value="<?php echo $autonombre ?>" name = "nombre"> <br>
                    Clave <br>
                    <input type ="password" value="<?php echo $autopassword ?>" name ="clave"> <br>
                    <br>
                    <input type="checkbox" name="chkRecordarme"> Recordarme?
                    <br>
                    <br>
                    <input type = submit value = "Ingresar">
                </fieldset>
            </form>
    </body>
</html>