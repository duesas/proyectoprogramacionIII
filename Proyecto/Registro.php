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
			$nombre = "";
			$apellido="";
			$dirección="";
			$password = "";
			$email = "";
			$pais = "";
			
			if(isset($_POST['nombre'])){
				$nombre = $_POST['nombre'];
				$apellido = $_POST['apellido'];
				$dirección = $_POST['dirección'];
				$password = $_POST['password'];
				$email = $_POST['email'];
				$pais = $_POST['pais'];

				//Validar que los campo no estén vacíos
				$campos = array();
				if($nombre == ""){
					array_push($campos, "El campo Nombres no pude estar vacío");
				}
				if($apellido == ""){
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
				if($pais == ""){
					array_push($campos, "Selecciona un país de origen.");
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
			}
		?>
		<p>
		<b>Nombres:</b><br/>
		<input type="text" name="nombre" value="<?php echo $nombre; ?>">
		</p>

		<p>
		<b>Apellidos:</b><br/>
		<input type="text" name="apellido" value="<?php echo $apellido; ?>">
		</p>

		<p>
		<b>Dirección:</b><br/>
		<input type="text" name="dirección" value="<?php echo $dirección; ?>">
		</p>

		<p>
		<b>Password:</b><br/>
		<input type="password" name="password" value="<?php echo $password; ?>">
		</p>

		<p>
		<b>correo electrónico:</b><br/>
		<input type="text" name="email" value="<?php echo $email; ?>">
		</p>

		<p>
			<b>País de origen:</b> <br>	
			<select name="pais" id="">
				<option value="">Selecciona un país</option>
				<option value="mx" <?php if($pais == "mx") echo "selected" ?> >México</option>
				<option value="eu" <?php if($pais == "eu") echo "selected" ?>>Estados Unidos</option>
				<option value="es" <?php if($pais == "es") echo "selected" ?>>España</option>
				<option value="ar" <?php if($pais == "ar") echo "selected" ?>>argentina</option>
				<option value="ch" <?php if($pais == "ch") echo "selected" ?>>China</option>
				<option value="ve" <?php if($pais == "ve") echo "selected" ?>>Venezuela</option>
				<option value="co" <?php if($pais == "co") echo "selected" ?>>Colombia</option>
				<option value="ec" <?php if($pais == "ec") echo "selected" ?>>Ecuador</option>
				<option value="pe" <?php if($pais == "pe") echo "selected" ?>>Peru</option>
				<option value="bo" <?php if($pais == "bo") echo "selected" ?>>Bolivia</option>
				<option value="chi" <?php if($pais == "chi") echo "selected" ?>>Chile</option>
				<option value="pa" <?php if($pais == "pa") echo "selected" ?>>Panama</option>
				<option value="bra" <?php if($pais == "bra") echo "selected" ?>>Brasil</option>
			</select>
		</p>
		
		

		<p><input type="submit" value="enviar datos"></p> 
	</div>
	</form>
</body>
</html>