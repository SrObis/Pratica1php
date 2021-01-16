<?php

    session_start();
    if(isset($_SESSION['usuario'])){//que nos lo muestre si esta la secion avierta
            
?>

<!DOCTYPE html>

<html>
<head>
    <title>clientes</title>
    <?php require_once "menu.php"; ?> <!-- Con esto ponenos la navbar-->

</head>
<body>
        <div class="container">
            <h1>Clientes</h1>
            <div class="row">
                <div class="col-sm-4">
                   <form id="frmClientes">
                        <label>Nombre</label>
                        <input type="text" class="form-control input-sm" id="nombre" name="nombre">
                        <label>Apellido</label>
                        <input type="text" class="form-control input-sm" id="apellido" name="apellido">
                        <label>Direccion</label>
                        <input type="text" class="form-control input-sm" id="direccion" name="direccion">
                        <label>Email</label>
                        <input type="text" class="form-control input-sm" id="email" name="email">
                        <label>Telefono</label>
                        <input type="text" class="form-control input-sm" id="telefono" name="telefono">
                        <label>DNI</label>
                        <input type="text" class="form-control input-sm" id="dni" name="dni">
                        <p></p>
                        <span class="btn btn-primary" id="btnAfregarCliente">Agregar</span>

                   </form>
                </div>
                <div class="col-sm-8">
                    <div id="tablaClientesLoad"></div>
                </div>

            </div>
        </div>

</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $('tablaClientesLoad').load("clientes/tablaClientes.php");
       //script para evento click y ajax 
        $('#btnAgregaCliente').click(function(){
             //quanado de click que vaya a la funcion validar
             vacios=validarFormVacio('frmClientes');
                if(vacios>0){//no puede haber ningun campo bacio
                    alertify.alert("Todos los campos tienes que estar llenos, no puede haber ninguno vacio");
                    return false;
                }

            datos=$('#frmClientes').serialize();
            $.ajax({
                type:"POST",
                data:datos,
                url:"../procesos/clientes/agregarCliente.php",
                success:function(r){
                    if(r==1){
                        $('tablaClientesLoad').load("clientes/tablaClientes.php");//cundo se inserte algo deve de cargar automaticamente

                        alertify.success("Categoria agregada con exito");
                    }else{
                        alertify.error("No se pudo agregar la categoria");
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