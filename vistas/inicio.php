<?php
    session_start();
    if(isset($_SESSION['usuario'])){//que nos lo muestre si esta la secion avierta
            


<!DOCTYPE html>

<html>
<head>
    <title></title>

</head>
<body>


</body>
</html>

}else{//si no detecta secion que nos vaya a inicio
    header("../index.php");//nos cambiamos desde la ruta

}


?>