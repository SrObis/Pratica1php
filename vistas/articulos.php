<?php

    session_start();
    if(isset($_SESSION['usuario'])){//que nos lo muestre si esta la secion avierta
            
?>

<!DOCTYPE html>

<html>
<head>
    <title>articulos</title>
    <?php require_once "menu.php"; ?> <!-- Con esto ponenos la navbar-->

</head>
<body>
        <div>
            <h1>ARTICULOS</h1>
            <div class="row">
                <div class="col-sm-4">
                    <form id="frmArticulos" enctype="multipart/form-data"><!-- enctype para mandar archivos -->
                        <label>Categoria</label>
                        <select class="form-control input-sm" id="categoriaSelect" name="categoriaSelect">
                            <option value="A">Seleciona la Categoria</option>
                        </select>
                        <label>Nombre</label>
                        <input type="text" class="form-control input-sm" id="nombre" name="nombre">
                        <label>Descripcion</label>
                        <input type="text" class="form-control input-sm" id="descripcion" name="descripcion">
                        <label>Cantidad</label>
                        <input type="text" class="form-control input-sm" id="cantidad" name="cantidad">
                        <label>Precio</label>
                        <input type="text" class="form-control input-sm" id="precio" name="precio">
                        <label>Imagen</label>
                        <input type="file" id="imagen" name="imagen">
                        <p></p>
                        <span id="btnAgregarArticulo" class="btn btn-primary">Agregar</span>
                    </form>
                </div>
                <div class="col-sm-8">
                    <div id="tablaArticulosLoad"></div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#tablaArticulosLoad').load("articulos/tablaArticulos.php");
                $('#btnAgregarArticulo').click(function(){
                     //quanado de click que vaya a la funcion validar
                    vacios=validarFormVacio('frmArticulos');
                    if(vacios>0){//no puede haber ningun campo bacio
                        alertify.alert("Todos los campos tienes que estar llenos, no puede haber ninguno vacio");
                        return false;
                    }
                    datos=$('#frmArticulos').serialize();
                    $.ajax({
                        type:"POST",
                        data:datos,
                        url:"../procesos/articulos/agregaArticulos.php",
                        success:function(r){
                            if(r==1){
                                alerify.success("Agregado con exito");
                            }else{
                                alerify.error("No se pudo agregar");
                            }
                        }
                    });
                });

            });
        </script>

</body>
</html>

<?php 

    }else{//si no detecta secion que nos vaya a inicio
        header("location:../index.php");//nos cambiamos desde la ruta

    }

?>