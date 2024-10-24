<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>


  <link rel="stylesheet" href="CSS/estilos.css">

  <!-- FontAwesome -->
  <script src="https://kit.fontawesome.com/99760cb516.js" crossorigin="anonymous"></script>

  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Custom JS -->
  <script src="JS/main.js"></script>
</head>

<body>
  <?php 
  session_start();
  ?>
  <div class="Barra">
    <nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar" style="z-index: 10;">
      <div class="container">
      <img src="./IMG/CAFELIZ.jpeg" alt="" width="50" height="50" style="border-radius: 50%;">
        <a class="navbar-brand" href="index.php">CAFELIZ</a>
        <script type="text/javascript">
        function makeArray() {
          for (i = 0; i < makeArray.arguments.length; i++) this[i + 1] = makeArray.arguments[i];
        }
        var months = new makeArray('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
        var date = new Date();
        var day = date.getDate();
        var month = date.getMonth() + 1;
        var yy = date.getYear();
        var year = (yy < 1000) ? yy + 1900 : yy;
        document.write(day + " de " + months[month] + " del " + year);
        </script>
        <button id="open_cart">
          <div class="cart">
            <div class="cart_container d-flex flex-row">
              <div class="cart_icon">
                <span class="fa-solid fa-cart-shopping"></span>
              </div>
              <div class="cart_count"><span>0</span></div>
              <div class="cart-content">
                <div class="cart_price">$0.00</div>
              </div>
            </div>
          </div>
        </button>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-bars"></span> Menu
        </button>

        <div id="sidecart" class="sidecart">
          <div class="cart-content">
            <div class="cart_header">
              <span class="fa-solid fa-universal-access"></span>
              <div class="header_title">
                <h2 id="username-title">
                  
                  <?php
                    if (isset($_SESSION['nombre_usuario'])) {
                      echo ($_SESSION['nombre_usuario']);
                    } else {
                      echo 'USER';
                    }
                  ?>
                </h2>
                <span id="close_btn" class="close_btn">&times;</span>
              </div>
            </div>
            <!-- ITEM 1 -->
            <div style="overflow-y:scroll ;  height: 370px">
              <div class="cart_items">
                <div class="cart_item"></div>
              </div>
              <!-- END ITEM 1 -->
            </div>
            <div class="cart_actions">
              <div class="subtotal">
                <p>SUBTOTAL</p>
                <p>$<span id="subtotal_price">0</span></p>
              </div>
              <button id="empty_cart" class="btn btn-secondary">Vaciar</button>
              <button id="sales_cart" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#checkoutModal">
                Comprar
              </button>
            </div>
          </div>
        </div>
        
        <div class="backdrop"></div>

        <div class="collapse navbar-collapse" id="navbarNav">  
          <ul class="navbar-nav ml-auto mr-md-3 align-items-center">
            <li class="nav-item"><a href="./index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="./menu.php" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="./login.php" class="nav-link">Sesion</a></li>
            <?php
           
            if (isset($_SESSION['user_Cargo']) && $_SESSION['user_Cargo'] == 'administrador') {
              echo '<li class="nav-item dropdown">';
              echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">BD</a>';
              echo '<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';
              echo '<li><a class="dropdown-item" href="./listProductos.php">Productos</a></li>';
              echo '<li><a class="dropdown-item" href="./listUsuarios.php">Usuarios</a></li>';
              echo '<li><a class="dropdown-item" href="./listPedidos.php">Pedidos</a></li>';
              echo '</ul>';
              echo '</li>';
            }
            ?>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  
  <?php include("./PHP/compra.php") ?>
  <script src="./JS/nabvar.js"></script>
  <!-- Custom JS -->
  <script src="./JS/ValidarUser.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
  
  <script type="text/javascript">
    emailjs.init('BY6oiqk8703EVLkwV')
  </script>
 
</body>
</html>
