<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Lightbox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="CSS/estilos.css">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!----------------------------------------------------------------------------------------------->
  
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 700px;
    
  }
  .carousel-caption 
  {
    top: 50%;
    font-size: 30px;
  }
  .carousel-caption h3
  {
    font-size: 40px;
  }
  </style>

</head>
<body>
  <header>
    <?php include("includes/navbar.php");?>
  </header>
  <!------------------------------------------------------------------->
  <div id="carouselExample" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="IMG/f1.jpeg" class="d-block w-100" alt="Los Angeles" width="1100" height="500">
        <div class="carousel-caption d-none d-md-block">
          <h3>CAFELIZ</h3>
          <p>Que su experiencia en este sitio sea agradable</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="IMG/f5.jpg" class="d-block w-100" alt="Chicago" width="1100" height="500">
        <div class="carousel-caption d-none d-md-block">
          <h3>BIENVENIDO</h3>
          <p>Desayuno, Bebidas, Antojitos, Postres y mas
            Un sitio donde encontraras una variedad para tu paladar
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="IMG/f2.jpg" class="d-block w-100" alt="New York" width="1100" height="500">
        <div class="carousel-caption d-none d-md-block">
          <h3>CAFELIZ</h3>
          <p>Eli dia comienza despues de una buena taza de café</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!------------------------------------------------------------------->
  <div class="photo-gallery">
    <div class="container">
      <div class="intro">
        <h2 class="text-center">Galeria</h2>
        <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
      </div>
      <div class="row photos">
        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="IMG/blog-img-01.jpg" data-lightbox="photos"><img class="img-fluid" src="IMG/blog-img-01.jpg" alt="..."></a></div>
        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="IMG/blog-img-02.jpg" data-lightbox="photos"><img class="img-fluid" src="IMG/blog-img-02.jpg" alt="..."></a></div>
        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="IMG/blog-img-03.jpg" data-lightbox="photos"><img class="img-fluid" src="IMG/blog-img-03.jpg" alt="..."></a></div>
        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="IMG/blog-img-04.jpg" data-lightbox="photos"><img class="img-fluid" src="IMG/blog-img-04.jpg" alt="..."></a></div>
        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="IMG/blog-img-05.jpg" data-lightbox="photos"><img class="img-fluid" src="IMG/blog-img-05.jpg" alt="..."></a></div>
        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="IMG/blog-img-06.jpg" data-lightbox="photos"><img class="img-fluid" src="IMG/blog-img-06.jpg" alt="..."></a></div>
        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="IMG/blog-img-07.jpg" data-lightbox="photos"><img class="img-fluid" src="IMG/blog-img-07.jpg" alt="..."></a></div>
        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="IMG/blog-img-08.jpg" data-lightbox="photos"><img class="img-fluid" src="IMG/blog-img-08.jpg" alt="..."></a></div>
      </div>
    </div>
  </div>

  <?php include("includes/footer.html");?>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
  <!-- Lightbox JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
  <!-- Custom JS -->
  <script src="JS/ValidarUser.js"></script>
  <!-- FontAwesome -->
  <script src="https://kit.fontawesome.com/99760cb516.js" crossorigin="anonymous"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
