<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilos.css">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php include("includes/navbar.php");?>
<center>
    <!--FORMULARIO---->
    <strong> <h1 class="titulo">Regístrate</strong></h1> 
      <form action="PHP/FuncionesUsuario.php"form class="form" method="POST" name="frm"><br>  
      <input type="hidden" name="accion" value="BuscarUsuario">     
        <!--CAJAS-DE-ENTRADA-DE-DATOS------------------------------------------------>
        Iniciar Sesión<br>
        <br><input class="cajas" type="text" name="nombre" placeholder="Ingresa tu Usuario" required maxlength="30">
        <input class="cajas" type="password" name="contraseña" placeholder="Ingresa tu Password" required maxlength="30">
        <br>
        <!--BOTON-DE-INGRESAR-------------------------->
        <input type="submit" class="btnRegistro" value="Ingresar">
         <p class="nota">*Al registrarse agregamos un café gratis a tu pedido</p><br>
            <!--AÚN NO-TENGO-CUENTA----------------------------------------------------------->
        <p class="tengo-cuenta"><a href="registro.php" class="tengo-cuenta">Aún no tengo cuenta</a></p>
		<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>
</center>
</form><br>
<?php include("includes/footer.html");?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="JS/ValidarUser.js"></script>
</body>
</body>
</html>