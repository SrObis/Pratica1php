<?php
    require_once "../../clases/Conexion.php";
    require_once "../../clases/Usuarios.php";

    $obj=new usuarios();

   
    $pass=shal($_POST['password']);//encriptado de la contraseña
    
    $datos=array(
            $_POST['nombre'],
            $_POST['apellido'],
            $_POST['usuario'], 
            $pass//contraseña encriptada
        );
    echo $obj->registroUsuario($datos);
?>