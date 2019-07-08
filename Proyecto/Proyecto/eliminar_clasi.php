<?php
	EliminarClasificado($_GET['id']);

	function EliminarClasificado($id)
	{
		include 'conexion.php';
		$sentencia="DELETE FROM publicaciones WHERE id='".$id."' ";
		$conexion->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));

	}
?>

<script type="text/javascript">
	alert("Clasificado Eliminado!!");
	window.location.href='index.php';
</script>