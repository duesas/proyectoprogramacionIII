<?php
  include "conexion.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Crear Clasificado</title>
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
  		<span> <h1>Crear Clasificado</h1> </span>
  		<br>
	  <form action="nuevo_clasi2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
     
  		<label>titulo: </label>
  		<input type="text" id="titulo" name="titulo" ><br>
  		
  		<label>texto: </label>
  		<textarea style="border-radius: 10px;" rows="3" cols="50" name="texto" ></textarea><br>
  		
  		<br>
  		<button type="submit" class="btn-success">Guardar</button>
       <nav class="irR">
      <a href="index.php"> <button type="button" class="btn-info">Regresar</button> </a> 
       </nav> 
     </form>
  	</div>
  	
  </div>
  
</div>


</body>
</html>