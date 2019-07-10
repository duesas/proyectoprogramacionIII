<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- para mantener un buen tamaño deacuerdo al dispositivo que se utilice-->
	<title>Registro de Usuarios</title>
	<link rel="stylesheet" type="text/css" href="style_registro.css">
	<link rel="icon" href="img/logo.ico"> <!-- este codigo es para el favico de la pagina-->
</head>
<body background="img/swirl4.jpg" style="background-attachment: fixed">
	
	<form action="GuardarR.php" method="POST">
	<div id="proyect">
	
	<?php
	include_once 'config/constantes.php';	
		?>
		<h2 class="center"><b>Registro de Usuarios</b></h2>
		<p>
		<b>Nombres:</b><br/>
		<input type="text" name="Nombres" value="<?php if(isset($Nombres)) echo $Nombres; ?>" required >
		</p>

		<p>
		<b>Apellidos:</b><br/>
		<input type="text" name="Apellidos" value="<?php if(isset($Apellidos)) echo $Apellidos; ?>" required >
		</p>

		<p>
		<b>Dirección:</b><br/>
		<input type="text" name="dirección"  value="<?php if(isset($dirección)) echo $dirección; ?>" required >
		</p>

		<p>
		<b>Password:</b><br/>
		<input type="password" name="password"  value="<?php if(isset($password)) echo $password; ?>" required>

		</p>

		<p>
		<b>correo electrónico:</b><br/>
		<input type="text" name="email" value="<?php if(isset($email)) echo $email; ?>" required>
		</p>
		
		 <a href="index.php"> <button type="button" class="btn-ir">ir a login</button> </a>
	

		<button type="submit" class="btn-success">Guardar</button>
	</div>
	</form>
</body>
</html>