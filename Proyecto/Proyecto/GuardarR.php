<?php

	
	NuevoRegistro($_POST['Nombres'],$_POST['Apellidos'],$_POST['password'],$_POST['email']);
	
	function NuevoRegistro($Nombres, $Apellidos,$password, $email)
	{
		include 'conexion.php';
		$sentencia= "INSERT INTO Registro (Nombres,Apellidos,password,email) VALUES ('".$Nombres."','".$Apellidos."','".$password."','".$email."') ";
		$conexion->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Registro Ingresado Exitosamante!!");
	window.location.href='index.php';
</script>