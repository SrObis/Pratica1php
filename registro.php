!DOCTYPE html>
<html> 
<head>
    <title>registro</title>
    <link rel="stlesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
    <script src="librerias/jquery-3.2.1.min.js"></script>
</head>
<body style="background-color: gray;">
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">            </div>
            <div class="col-sm-4">
                <div class="pane panel-danger">
                    <div class="panel panel-heading">Registrar</div>
                    <div class="panel panel-body">
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
                        <span class="btn btn-primary">Registrar</span>
                        <a href="index.php" class="btn btn-default">Regresar Login</a>


                        </form>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-4">            </div>


        </div>
    </div>

</body>
</html>