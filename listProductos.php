<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="CSS/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css">
    <!-- Libreria para alertas ----->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
<?php include("includes/navbar.php");?>
<br><br><br><br><br><br>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-12">
            <h1 class="text-center">
                <span class="float-start">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#agregarProductModal">
                        <i class="bi bi-person-plus"></i> Registrar Producto
                    </button>
                </span>
                <span class="float-end">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#agregarCategoriaModal">
                        <i class="bi bi-person-plus"></i> Registrar Categoria
                    </button>
                </span>
                <hr>
            </h1>
            <?php include("PHP/MostrarProductos.php"); ?>
        </div>
    </div>
</div>
<br>
<?php include("includes/footer.html");?>
<?php  include("modales/modalAdd.php")?>
<?php  include("modales/modalEditar.php")?>
<?php  include("modales/modalCateg.php")?>
<?php  include("modales/modalDelete.php") ?>
<script>
    $(document).ready(function() {
        $("#table_Productos").DataTable({
            pageLength: 5,
            language: {
                url: "https://cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json",
            },
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!------------------------- Librería  datatable para la tabla -------------------------->
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>    
</body>
</html>
