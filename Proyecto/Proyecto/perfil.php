<!DOCTYPE html>
<html>
<head>
	<title>perfil</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style_home.css">
    <link rel="icon" href="img/logo.ico"> <!-- este codigo es para el favico de la pagina-->
</head>
<body>
  <div class="todo">

  <div id="cabecera">
    <img src="img/swirl.png" width="1188" id="img1">
  </div>

<div id="contenido">
    <table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
      
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>email</th>
            <th>accion</th>
           
   
       
              <a href="includes/logout.php"><button type="button" class="btn-cerrar">Cerrar sesión</button></a>
              <a href="index.php"> <button type="button" class="btn-ir">Regresar</button> </a>
        
    
<?php
        include "conexion.php";
       
        $sentecia="SELECT * FROM Registro   ";
        $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
        while($fila=$resultado->fetch_assoc())
        {
          echo "<tr>";
            echo "<td>"; echo $fila['Nombres']; echo "</td>";
            echo "<td>"; echo $fila['Apellidos']; echo "</td>";
            echo "<td>"; echo $fila['email']; echo "</td>";
          
             echo "<td>";
            echo "<a href='modif_perfil.php?id=".$fila['id']."'> <button type='button' class=' btn-modi'>Modificar</button> </a>";
            echo "</td>";
          echo "</tr>";
     }
      ?>
     
       </table>
        </div>
      <div id="footer">
        <img src="img/swirl2.png" id="img2">

    </div>

</div>
</body>
</html>