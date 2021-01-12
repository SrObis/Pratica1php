<!DOCTYPE html>
<html> 
<head>
    <title>Login usuario</title>
    <link rel="stlesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
    <script src="librerias/jquery-3.2.1.min.js"></script>
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
                            <span class="btn btn-primary btn-sm">Entrar</span>
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