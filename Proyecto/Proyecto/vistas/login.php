<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="icon" href="img/logo.ico"> <!-- este codigo es para el favico de la pagina-->
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <form action="" method="POST">
        <div class="pro">
        <?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }
        ?>
        <h2>Iniciar sesión</h2>
        <p><b>correo:</b> <br>
        <input type="text" name="email"></p>
        <p><b>Password:</b> <br>
        <input type="password" name="password"></p>
        <p class="center"><input type="submit" value="Iniciar Sesión"></p>
            <nav class="irR"></nav>
    <a href="Registro.php">Ir a Registro</a>
</nav>  
</div>
    </form>
</body>
</html>