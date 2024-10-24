<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script>
        emailjs.init('g-LYD0idyVihTx0P3');
    </script>
    <style>
        .text {
            font-weight: bold;
        }
        .modal-content {
            border-radius: 0.5rem;
        }
        .btn-group-vertical {
            display: flex;
            flex-direction: column;
            gap: 0.5rem; /* Ajuste de espacio entre botones */
        }
    </style>
</head>
<body>

<!-- Carrito de compras simulado -->
<h2>Carrito de Compras</h2>
<!-- Modal de pago -->
<div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paymentModalLabel">Detalles del Pago</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row gx-3">
                    <div class="col-12">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">Nombre:</p>
                            <input class="form-control mb-3" id="personName" type="text" placeholder="Nombre" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">Correo:</p>
                            <input class="form-control mb-3" id="email" type="email" placeholder="Correo" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">Número de la Tarjeta:</p>
                            <input class="form-control mb-3" id="cardNumber" type="text" placeholder="1234 5678 4356 7890" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">Expiración:</p>
                            <input class="form-control mb-3" id="expiryDate" type="text" placeholder="MM/YYYY" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">CVV/CVC:</p>
                            <input class="form-control mb-3 pt-2" id="cvv" type="password" placeholder="***" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="btn-group-vertical w-100">
                    <button type="button" class="btn btn-primary" id="payButton">
                        <span class="ps-3" id="totalAmount"> Pagar $0.00</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Loader Section -->
<div class="row justify-content-center" id="loaders" style="display:none;">
    <img id="cargando" src="./IMG/cargando.gif" width="220">
</div>

<!-- SweetAlert2 Script -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Tu script de lógica de compra -->
<script src="path/to/your/script.js"></script> <!-- Asegúrate de enlazar tu archivo de JavaScript -->

</body>
</html>

