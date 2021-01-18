<?php 
	session_start();
	require_once "../../clases/Conexion.php";
	require_once "../../clases/Categorias.php";
	$fecha=date("Y-m-d");
	$idusuario=$_SESSION['iduser'];
	$categoria=$_POST['categoria'];

	$datos=array(//mandaos los datos desde una attay
		$idusuario,
		$categoria,
		$fecha
				);

	$obj= new categorias();

	echo $obj->agregaCategoria($datos);//llammamos al metodo cagregaCategoria



 ?>