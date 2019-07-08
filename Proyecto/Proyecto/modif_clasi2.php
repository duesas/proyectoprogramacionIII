<?php
	
	ModificarClasificado( $_POST['titulo'], $_POST['texto'] );

	function ModificarClasificado( $titulo, $texto)
	{
		include 'conexion.php';
		echo $sentencia="UPDATE publicaciones SET titulo='".$titulo."', texto='".$texto."' ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Datos Actualizados Exitosamante!!");
	window.location.href='index.php';
</script>