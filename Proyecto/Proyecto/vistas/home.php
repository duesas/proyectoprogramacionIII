<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
        <thead>
            <th>titulo</th>
            <th>texto</th>
            <th>fecha</th>
            <th>Acciones</th>
</head>
<body>
    <div id="menu">
        <ul>
            <li class="cerrar-sesion"><a href="includes/logout.php">Cerrar sesión</a></li>
        </ul>
    </div>

     <a href="nuevo_clasi1.php"> <button type="button" class="btn-info">Nuevo</button> </a> 
        </thead>

      <?php
        include "conexion.php";

        $sentecia="SELECT * FROM publicaciones";
        $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
        while($fila=$resultado->fetch_assoc())
        {
          echo "<tr>";
            echo "<td>"; echo $fila['titulo']; echo "</td>";
            echo "<td>"; echo $fila['texto']; echo "</td>";
            echo "<td>"; echo $fila['fecha']; echo "</td>";
             echo "<td>";
            echo "<a href='modif_clasi1.php?id=".$fila['id']."'> <button type='button' class=' btn-modi'>Modificar</button> </a>";
            echo " <a href='eliminar_clasi.php?id=".$fila['id']."'> <button type='button' class=' btn-danger'>Eliminar</button> </a>";
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