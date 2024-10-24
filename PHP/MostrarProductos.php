
<div class="table-responsive">
    <table class="table table-hover" id="table_Productos">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Producto</th>
                <th scope="col">Costo</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Categoria</th>
                <th scope="col">Imagen</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include('./BD/conexion.php');
            $consulta = "SELECT * FROM menuproductos inner join menucategoria
            on id_categoria = ID_Cat";
            $resultado = mysqli_query($connection,$consulta);

            while($fila = mysqli_fetch_array($resultado)){
            $ImgRuta = substr($fila['Imagen'],1);
            echo "<tr>";
            echo "<th scope='row'>{$fila['id']}</th>";
            echo "<td>{$fila['Product_Nombre']}</td>";
            echo "<td>{$fila['Costo']}</td>";
            echo "<td>{$fila['Descripcion']}</td>";
            echo "<td>{$fila['Categoria']}</td>";
            echo "<td> <img class='rounded-circle' src='{$ImgRuta}' class='img-fluid' width='50' height='50' ></td>";
            echo "<td>
                    <a href='#' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#EditarProductoModal' 
                    data-id='{$fila['id']}' data-nombre='{$fila['Product_Nombre']}' data-descripcion='{$fila['Descripcion']}' 
                    data-costo='{$fila['Costo']}' data-categoria='{$fila['id_categoria']}' data-imagen='{$fila['Imagen']}'>
                        <i class='bi bi-pencil-square'></i>
                    </a>
                    <a href='#'class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#DeleteModal' data-id='{$fila['id']}'>
                        <i class='bi bi-trash'></i>
                    </a>
                </td>";
            echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var editarProductoModal = document.getElementById('EditarProductoModal');

        editarProductoModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget; // Botón que abrió el modal
            var id = button.getAttribute('data-id');
            var nombre = button.getAttribute('data-nombre');
            var descripcion = button.getAttribute('data-descripcion');
            var costo = button.getAttribute('data-costo');
            var categoria = button.getAttribute('data-categoria');
            var imagen = button.getAttribute('data-imagen');

            var modalTitle = editarProductoModal.querySelector('.modal-title');
            var form = document.getElementById('formularioEditarProducto');

            form.querySelector('#EditID').value = id;
            form.querySelector('#EditNombre').value = nombre;
            form.querySelector('#EditDescrip').value = descripcion;
            form.querySelector('#EditCosto').value = costo;
            form.querySelector('#EditCategoria').value = categoria;
            form.querySelector('#EditImagenActual').value=imagen;
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var deleteModal = document.getElementById('DeleteModal');

        deleteModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget; // Botón que abrió el modal
            var id = button.getAttribute('data-id');

            var form = deleteModal.querySelector('form');
            form.querySelector('#DeleteID').value = id;
        });
    });
</script>
