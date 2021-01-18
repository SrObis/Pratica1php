<?php 
	session_start();
    if(isset($_SESSION['usuario'])){//que nos lo muestre si esta la secion avierta
		
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>inicio</title>
    <?php require_once "menu.php"; ?> <!-- Con esto ponenos la navbar-->
</head>
<body>


</body>
</html>
<?php 
	  }else{//si no detecta secion que nos vaya a inicio
        header("location:../index.php");//nos cambiamos desde la ruta

    }
 ?>