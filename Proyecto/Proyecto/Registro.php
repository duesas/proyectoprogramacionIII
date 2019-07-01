<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- para mantener un buen tamaño deacuerdo al dispositivo que se utilice-->
	<title>Registro de Usuarios</title>
	<link rel="stylesheet" type="text/css" href="style_registro.css">
	<link rel="icon" href="img/logo.ico"> <!-- este codigo es para el favico de la pagina-->
</head>
<body>
	
	<form action="#" method="POST">
	<div id="proyect">
	
	<?php
		//Declarar todas las variables 
			$Nombres = "";
			$Apellidos="";
			$dirección="";
			$password = "";
			$email = "";
			
			if(isset($_POST['Nombres'])){
				$Nombres = $_POST['Nombres'];
				$Apellidos = $_POST['Apellidos'];
				$dirección = $_POST['dirección'];
				$password = $_POST['password'];
				$email = $_POST['email'];
				
			}
				
				//Validar que los campo no estén vacíos
				$campos = array();
				if($Nombres == ""){
					array_push($campos, "El campo Nombres no pude estar vacío");
				}
				if($Apellidos == ""){
					array_push($campos, "El campo Apellidos no pude estar vacío");
				}
				if($dirección == ""){
					array_push($campos, "El campo Dirección no pude estar vacío");
				}
				if($password == "" || strlen($password) < 6){
					array_push($campos, "El campo Password no puede estar vacío, ni tener menos de 6 caracteres.");
				}
				if($email == "" || strpos($email, "@") === false){
					array_push($campos, "Ingresa un correo electrónico válido.");
				}
				
				if(count($campos) > 0){
					echo "<div class='error'>";
					for($i = 0; $i < count($campos); $i++){
						echo "<li>".$campos[$i]."</i>";
					}
				}else{
					echo "<div class='correcto'>
							Datos correctos";
				}
				echo "</div>";
			
		?>
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
		<input type="password" name="password"  value="<?php if(isset($password)) echo $password; ?>" required >
		</p>

		<p>
		<b>correo electrónico:</b><br/>
		<input type="text" name="email" value="<?php if(isset($email)) echo $email; ?>" required>
		</p>

		
		
		<nav>
		<a href="index.php">Ir a login</a>
</nav>	

		<p><input type="submit" value="enviar datos"></p> 
	</div>
	</form>
</body>
</html>