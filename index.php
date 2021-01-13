<!DOCTYPE html>
<html> 
<head>
    <title>Login usuario</title>
    <link rel="stlesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
    <script src="librerias/jquery-3.2.1.min.js"></script>
    <script src="js/funciones.js"></script>

</head>
<body style="background-color: gray;">
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">
                        Pagina de venta por Jordi Obis
                    </div>
                    <div>
                        <p>
                        <img src="img/ventas.jpg" width="150px" height="190px">
                        </p>
                        <form id="frmLogin">
                            <label>Usuario</label>
                            <input type="text" class="form-control input-sm" name="usuario" id=usuario>
                            <label>Password</label>
                            <input type="password" class="form-control input-sm" name="password" id="password"></input>
                            <p></p>
                            <span class="btn btn-primary btn-sm" id="entrarSistema">Entrar</span>
                            <a href="registro.php" class="btn btn-danger btn-sm">Registrar</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">            </div>

        </div>
    </div>

</body>
</html>


<script type="text/javascript">

    $(document).ready(function(){
       	//script para evento click y ajax 
        $('#entrarSistema').click(function(){

            vacios=validarFormVacio('frmLogin');
            if(vacios>0){//no puede haber ningun campo bacio
                    alert("Todos los campos tienes que estar llenos, no puede haber ninguno vacio");
                    return false;
                }                       
        datos=$('#frmLogin').serialize();
        $.ajax({
            type:"POST",
            data:datos,
            url:"procesos/regLogin/login.php",
            success:function(r){
                if(r==1){
                    window.location="vistas/inicio.php":

                }else{
                    alert("No se puede aceder")
                }
            }
        });
        });
    });

</script>
