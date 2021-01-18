<?php
    require_once "../../clases/Conexion.php";
    require_once "../../clases/Usuarios.php";

    $obj=new usuarios();

   
    $pass=sha1($_POST['password']);//encriptado de la contraseña https://md5decrypt.net/en/Sha1/
    
    $datos=array(
            $_POST['nombre'],
            $_POST['apellido'],
            $_POST['usuario'], 
            $pass//contraseña encriptada
        );
    echo $obj->registroUsuario($datos);
?>