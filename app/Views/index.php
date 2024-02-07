<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Examen Fina Joel Sánchez</h1>
        <button data-bs-toggle="modal" data-bs-target="#insertarModal">Insertar Dato</button>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>PROV_NOMBRE</th>
                    <th>CAT_NOMBRE</th>
                    <th>PROD_NOMBRE</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $dato): ?>
                <tr>
                    <td>
                        <?php echo $dato['PROD_ID']; ?>
                    </td>
                    <td>
                        <?php echo $dato['PROV_NOMBRE']; ?>
                    </td>
                    <td>
                        <?php echo $dato['CAT_NOMBRE']; ?>
                    </td>
                    <td>
                        <?php echo $dato['PROD_NOMBRE']; ?>
                    </td>
                    <td>
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editarModal"
                            onclick="llenarModal('<?php echo $dato['PROD_ID'] ?>', '<?php echo $dato['PROV_NOMBRE'] ?>')">Editar</button>
                        <a href="<?php echo base_url() ?>eliminarProducto/<?php echo $dato['PROD_ID'] ?>"
                            class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>


        <!-- Modal -->
        <div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Proveedor Editar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url() ?>actualizarDatos" method="post">
                            <label>Nombre del Proveedor</label>
                            <input type="text" id="editNombre" name="editNombre">
                            <input type="hidden" id="editId" name="editId" name="editId">


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="insertarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Proveedor Editar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url() ?>insertarDatos" method="post">
                            <label>Nombre del Producto</label>
                            <input type="text" name="insertNombre"> <br><br>
                            <label>Codigo Producto</label>
                            <input type="text" name="insertCodigo"> <br><br>
                            <label>Categoria</label>
                            <input type="text" name="insertCategoria"> <br><br>
                            <label>Proveedor</label>
                            <input type="text" name="insertProveedor"> <br><br>
                            <label>Estado</label>
                            <input type="text" name="insertEstado"> <br><br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Insertar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

<footer>
    <script>
    function llenarModal(id, nombre) {
        $("#editId").val(id);
        $("#editNombre").val(nombre);
    }
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</footer>

</html>