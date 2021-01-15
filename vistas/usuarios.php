<?php

    session_start();
    if(isset($_SESSION['usuario'])){//que nos lo muestre si esta la secion avierta
            
?>

<!DOCTYPE html>

<html>
<head>
    <title>usuarios</title>
    <?php require_once "menu.php"; ?> <!-- Con esto ponenos la navbar-->

</head>
<body>

        <div class="container">
            <h1>Administrar usuarios</h1>
            <div class="row">
                <div class="col-sm-4">
                    <form id=frmRegistro>
                                <label>Nombre</label>
                                <input type="text" class="form-control input-sm" name="nombre" id="nombre">
                                
                                <label>Apellido</label>
                                <input type="text" class="form-control input-sm" name="apellido" id="apellido">

                                <label>Usuario</label>
                                <input type="text" class="form-control input-sm" name="usuario" id="usuario">

                                <label>Password</label>
                                <input type="text" class="form-control input-sm" name="password" id="password">
                                
                                <p></p>
                                <span class="btn btn-primary" id="registro">Registrar</span>
                    </form>
                </div>
                <div class="col-sm-7">
                    <div id="tablaUsuariosLoad"></div>
                </div>
                
            </div>
        </div>


</body>
</html>
<script type="text/java">
    $(document).ready(function(){
        $('#tablaUsuariosLoad').load('usuarios/tablaUsuarios.php');
        $('#registro').click(function(){
            //quanado de click que vaya a la funcion validar
                vacios=validarFormVacio('frmRegistro');
                if(vacios>0){//no puede haber ningun campo bacio
                    alertify.alert("Todos los campos tienes que estar llenos, no puede haber ninguno vacio");
                    return false;
                }
        datos=$('#frmRegistro').serialize();//serialize para crear tablas dinamicas
            $.ajax({
                type:"POST",
                data:datos,
                url:"../procesos/regLogin/registrarUsuario.php",
                success:function(r){
                    
                    if(r==1){
                        $('#tablaUsuariosLoad').load('usuarios/tablaUsuarios.php');//cada insert que se recarge la tabla
                        alertify.success("Agregado con exito");
                    }else{
                        alertify.error("Fallo al intentar agregar");
                    }
                }
            });
        });
    });
</script>
<?php 

    }else{//si no detecta secion que nos vaya a inicio
        header("location:../index.php");//nos cambiamos desde la ruta

    }

?>