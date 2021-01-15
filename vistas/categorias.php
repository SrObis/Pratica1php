<?php

    session_start();
    if(isset($_SESSION['usuario'])){//que nos lo muestre si esta la secion avierta
            
?>

<!DOCTYPE html>

<html>
<head>
    <title>categorias</title>
    <?php require_once "menu.php"; ?> <!-- Con esto ponenos la navbar-->

</head>
<body>
        <div class="container">
            <h1>CATEGORIAS</h1>
            <div class="row">
                <div class="col-sm-4">
                    <form>
                        <label>Categorias</label>
                        <input type="text" class="form-control input-sm" name="categoria" id="categoria">
                        <p></p>
                        <span class="btn btn-primary" id="btnAgregaCategoria">Agregar</span>
                    </form>
                </div>
                <div class="col-sm-6">
                    <div id="tablaCategoriaLoad"></div>
                </div>
            </div>
        </div>

</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $('tablaCategoriaLoad').load("categorias/tablaCategoria.php");
       //script para evento click y ajax 
        $('#btnAgregaCategoria').click(function(){
             //quanado de click que vaya a la funcion validar
             vacios=validarFormVacio('frmCategorias');
                if(vacios>0){//no puede haber ningun campo bacio
                    alertify.alert("Todos los campos tienes que estar llenos, no puede haber ninguno vacio");
                    return false;
                }

            datos=$('#frmCategorias').serialize();
            $.ajax({
                type:"POST",
                data:datos,
                url:"../procesos/categorias/agregarCategoria.php",
                success:function(r){
                    if(r==1){
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