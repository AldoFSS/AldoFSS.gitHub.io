<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/form.css">
    <script src="https://kit.fontawesome.com/99760cb516.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>DATOS DE CONTACTO</title>
</head>
<body>
    <header class="header">
    <?php include("includes/navbar.php");?>
    </header>

    <div class="contacto">
        <div class="titulo">
            <h2>CONTACTANOS</h2>
        </div>
        <hr>
        <div class="box">
            <!-- FORM -->
            <div class="contact form">
                <h3>Rellena el siguiente formulario:</h3>
                <form>
                    <div class="formbox">
                        <div class="row50">
                            <div class="inputbox">
                                <span for="name">Nombre(s):</span>
                                <input id="name" type="text" placeholder="Jesus">
                            </div>
                            <div class="inputbox">
                                <span for="apell">Apellido(s):</span>
                                <input id="apell" type="text" placeholder="Gaspariano">
                            </div>
                        </div>

                        <div class="row50">
                            <div class="inputbox">
                                <span for="gmail">Correo:</span>
                                <input id="gmail" type="email" placeholder="Jesus@gmail.com">
                            </div>
                            <div class="inputbox">
                                <span for="tel">Telefono:</span>
                                <input id="tel" type="cel" placeholder="+52 222 333 4444">
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputbox">
                                <span>Mensaje:</span>
                                <textarea  id="coment" placeholder="Escribe un mensaje aqui... "></textarea>
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputbox">
                                <input class="subir" type="submit" value="Enviar" onclick="validar()">
                            </div>
                            <div class="inputbox">
                                <input class="reiniciar" type="reset" value="Reset">
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- INFO BOX -->
            <div class="contact info">
                <h3>Informacion de contacto</h3>
                <div class="infobox">
                    <div>
                        <span><ion-icon name="location"></ion-icon></span>
                        <p>Antiguo Camino a la Resurrección No. 1002-A
                        Zona Industrial Puebla Oriente, <br>Pue. México CP.72300</p>
                    </div>
                    <div>
                        <span><ion-icon name="mail"></ion-icon></span>
                        <a href="mailto:2311080555@alumno.utpuebla.edu.mx">2311080555@alumno.utpuebla.edu.mx</a>
                    </div>
                    <div>
                        <span><ion-icon name="call"></ion-icon></span>
                        <a href="tel:222-309-88-56">+52 222-309-88-56</a>
                    </div>
                    <!--REDES SOCIALES-->
                    <ul class="sci">
                        <li><a href="#"><ion-icon name="logo-facebook"></a></ion-icon></li>
                        <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-youtube"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                    </ul>
                </div>
            </div>

            <!-- MAPA -->
            <div class="contact mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.121681953122!2d-98.15195089999999!3d19.0583869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc1c9a30530ab%3A0xefd33e2f1a6ca5a2!2sUniversidad%20Tecnol%C3%B3gica%20de%20Puebla!5e0!3m2!1sen!2smx!4v1718664684695!5m2!1sen!2smx"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <?php include("includes/footer.html");?>
    <script  type = "module"  src = "https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js" > </script> 
    <script  nomodule  src = "https://unpkg .com/ionicons@7.1.0/dist/ionicons/ionicons.js" > </script>
</body>
</html>