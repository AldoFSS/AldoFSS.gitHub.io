<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="CSS/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
<?php include("includes/navbar.php"); ?>
<br><br><br><br><br>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-12">
            <h3>Filtrar Productos por</h3>
            <select id="productFilter" class="form-select">
                <option value="mas_vendidos">Productos Más Vendidos</option>
                <option value="total_mes">Total Vendido por Mes</option>
            </select>
            <br>
            <h1 class="text-center">
                <span class="float-start">
                    <button type="button" id="btnShowGraph" class="btn btn-success">
                        <i class="bi bi-bar-chart"></i> Mostrar Gráfica
                    </button>
                </span>
                <hr>
            </h1>

            <!-- Tabla de Pedidos -->
            <?php include("PHP/MostrarPedidos.php"); ?>

            <!-- Div para la Gráfica -->
            <div id="salesChartContainer" class="mt-5">
                <canvas id="salesChart"></canvas>
            </div>
        </div>
    </div>
</div>
<br>
<script>
    $(document).ready(function() {
        // Inicializar DataTables
        $("#table_User").DataTable({
            pageLength: 5,
            language: {
                url: "https://cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json",
            },
        });

        var productos = <?php echo $productos_json; ?>; // Productos y cantidades
        var ventasPorMes = <?php echo json_encode($ventasPorMes); ?>; // Ventas totales por mes
        var salesChart; // Variable para almacenar la instancia de la gráfica

        // Mostrar la gráfica al hacer clic en el botón
        $('#btnShowGraph').click(function() {
            var ctx = document.getElementById('salesChart').getContext('2d');

            // Destruir la gráfica anterior si existe
            if (salesChart) {
                salesChart.destroy();
            }

            var selectedFilter = $('#productFilter').val();
            var data, labels, label;

            if (selectedFilter === 'mas_vendidos') {
                labels = Object.keys(productos);
                data = Object.values(productos);
                label = 'Cantidad Vendida';
            } else if (selectedFilter === 'total_mes') {
                labels = Object.keys(ventasPorMes);
                data = Object.values(ventasPorMes);
                label = 'Total Vendido ($)';
            }

            // Crear una nueva gráfica
            salesChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: label,
                        data: data,
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>
</body>
</html>