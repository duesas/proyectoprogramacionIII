<?php
  include_once 'config/constantes.php';
  $consulta=ConsultarUsuario($_GET['id']);

  function ConsultarUsuario( $id )
  {
   include 'conexion.php';
   
   $sentencia="SELECT * FROM Registro WHERE id='".$id."' ";
   $resultado= $conexion->query($sentencia) or die ("Error al consultar producto".mysqli_error($conexion)); 
   $fila=$resultado->fetch_assoc();

   return [
    $fila['Nombres'],
    $fila['Apellidos'],
  

   ];
  }

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar Usuario</title>
<link rel="stylesheet" href="style_home.css">
    <link rel="icon" href="img/logo.ico"> <!-- este codigo es para el favico de la pagina-->
</head>
<body>
<div class="todo">
  
  <div id="cabecera">
  	<img src="img/swirl.png" width="1188" id="img1">
  </div>
  
  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Modificar Usuario</h1> </span>
  		<br>
	  <form action="modif_perfil2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
      <input type="hidden" name="id"  value="<?php echo $_GET['id']?>">
  		<label>Nombres: </label>
  		<input type="text" id="Nombres" name="Nombres" value="<?php echo $consulta[0] ?>" ><br>

  		<label>Apellidos: </label>
  		<input type="text" id="Apellidos" name="Apellidos" value="<?php echo $consulta[1] ?>"><br>

    
      
  		<br>
  		<button type="submit" class="btn-success">Guardar</button>
      <nav class="irR">
       <a href="index.php"> <button type="button" class="btn-ir">Regresar</button> </a>
       </nav> 
     </form>
  	</div>
  	
  </div>
  
	<div id="footer">
  		<img src="img/swirl2.png" id="img2">
  	</div>

</div>


</body>
</html>