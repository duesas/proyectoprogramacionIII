<?php
	
	ModificarUsuario( $_POST['Nombres'], $_POST['Apellidos'] );

	function ModificarUsuario( $Nombres, $Apellidos)
	{
		include 'conexion.php';
		echo $sentencia="UPDATE Registro SET Nombres='".$Nombres."', Apellidos='".$Apellidos."'  ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Datos Actualizados Exitosamante!!");
	window.location.href='index.php';
</script>