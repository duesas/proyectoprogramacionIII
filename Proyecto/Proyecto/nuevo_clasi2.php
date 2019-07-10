<?php

	

	NuevoClasificado($_POST['titulo'], $_POST['texto']);
	
	function NuevoClasificado($titulo, $texto)
	{
		include 'conexion.php';
		$sentencia= "INSERT INTO publicaciones (titulo, texto) VALUES ('".$titulo."', '".$texto."') ";
		$conexion->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("clasificado Ingresado Exitosamante!!");
	window.location.href='index.php';
</script>