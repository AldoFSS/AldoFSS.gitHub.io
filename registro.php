<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>
<?php include("includes/navbar.php");?>
<center>
    <!--FORMULARIO---->
    <strong> <h1 class="titulo">Regístrate</strong></h1> 
      <form action="PHP/FuncionesUsuario.php"form class="form" method="POST" name="frm"><br>
      <input type="hidden" name="accion" value="InsertarUsuario">
      <!--CAJAS-DE-ENTRADA-DE-DATOS------------------------------------------------>
         Regístrate<br>
        <br><input class="cajas" type="text" name="nombre" placeholder="Ingresa tu nombre" required maxlength="30">
        <input class="cajas" type="password" name="contraseña" placeholder="Ingresa tu Password" required maxlength="30">
        <!--BOTON-DE-REGISTRARSE-------------------------->
        <input type="submit" class="btnRegistro" value="Registrarme">

        <p class="tengo-cuenta"><a href="login.php" class="tengo-cuenta">Regresar</a></p>
</center>
</form><br><br>
<?php include("includes/footer.html");?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>