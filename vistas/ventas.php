<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
		
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>ventas</title>
	<?php require_once "menu.php"; ?>
</head>
<body>

	<div class="container">
		 <h1>Venta de productos</h1>
		 <div class="row">
		 	<div class="col-sm-12">
		 		<span class="btn btn-default" id="ventaProductosBtn">Vender producto</span>
		 		<span class="btn btn-default" id="ventasHechasBtn">Ventas Realizadas</span>
		 	</div>
		 </div>
		 <div class="row">
		 	<div class="col-sm-12">
		 		<div id="ventaProductos"></div>
		 		<div id="ventasHechas"></div>
		 	</div>
		 </div>
	</div>
</body>
</html>
	
    <script type="text/javascript">
    //quando se clicke en alguna secion lo que va ha cer es:
    //esconder las seciones -->esconderSeccionVenta();
    //la va a cargar -->$('#ventaProductos').load(...
    //y por ultimo mostrara la parte que nos interesa $('#ventaProductos').show();/$('#ventasHechas').show();
		$(document).ready(function(){
			$('#ventaProductosBtn').click(function(){//Click venta prductos
				esconderSeccionVenta();
				$('#ventaProductos').load('ventas/ventasDeProductos.php');
				$('#ventaProductos').show();
			});
			$('#ventasHechasBtn').click(function(){//clickventas hecahas
				esconderSeccionVenta();
				$('#ventasHechas').load('ventas/ventasyReportes.php');
				$('#ventasHechas').show();
			});
		});

		function esconderSeccionVenta(){//para que quando muestre uno se esconda el otro
			$('#ventaProductos').hide();
			$('#ventasHechas').hide();
		}

	</script>

<?php 
	}else{
		header("location:../index.php");
	}
 ?>