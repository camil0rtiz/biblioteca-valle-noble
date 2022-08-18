<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('../includes/functions.php');
    if (
        isset($_POST['nombre']) && isset($_POST['a_paterno']) && isset($_POST['a_materno']) && isset($_POST['correo'])
        && isset($_POST['direccion']) && isset($_POST['fono'])
    ) {

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $a_paterno = $_POST['a_paterno'];
        $a_materno = $_POST['a_materno'];
        $correo = $_POST['correo'];
        $direccion = $_POST['direccion'];
        $fono = $_POST['fono'];

        if (editar_vecino($id, $nombre, $a_paterno, $a_materno, $correo, $direccion, $fono) == 1) {

            header('Location:listar_vecinos.php?msg=1');
        } else {
            header('Location:listar_vecinos.php?msg=2');
        }
    }
}

?>
<?php include('partes/head.php') ?>

<body class="sb-nav-fixed">
    <?php include('partes/nav.php') ?>
    <?php include('partes/sidebar.php') ?>
    <!-- body content -->
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <?php if (isset($_GET['msg']) == '1') { ?>
                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </symbol>
                    </svg>

                    <div class="alert alert-success d-flex align-items-center alert-dismissible fade show mt-4" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                            <use xlink:href="#check-circle-fill" />
                        </svg>
                        <div>
                            Vecino editado con éxito
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php
                } ?>
                <div>
                    <a type="button" href="guardar_vecino.php" class="btn btn-primary mt-4">Agregar Vecino</a>
                </div>
                <div class="card mt-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Listado de vecinos habilitados
                    </div>

                    <div class="card-body">
                        <table id="datatablesSimple" class="table">
                            <thead>
                                <tr>
                                    <th>Rut</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Dirección</th>
                                    <th>Teléfono</th>
                                    <th>Email</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include '../includes/functions.php';
                                $vecinos = listar_vecinos();

                                foreach ($vecinos as $vecino) {
                                ?>

                                    <tr>
                                        <td><?php echo $vecino['rut']; ?></td>
                                        <td><?php echo $vecino['nombre']; ?></td>
                                        <td><?php echo $vecino['apellido_paterno'] . ' ' . $vecino['apellido_materno']; ?></td>
                                        <td><?php echo $vecino['direccion']; ?></td>
                                        <td><?php echo $vecino['telefono']; ?></td>
                                        <td><?php echo $vecino['correo']; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $vecino['id_usuario']; ?>">
                                                Editar
                                            </button>
                                            <div class="modal fade" id="exampleModal<?php echo $vecino['id_usuario']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                    <form action="" method="post">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Editar Vecino</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $vecino['id_usuario']; ?>" required>
                                                            <div class="mb-3 form-group">
                                                                <label for="">Nombre</label>
                                                                <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $vecino['nombre']; ?>" required>
                                                            </div>
                                                            <div class="mb-3 form-group">
                                                                <label for="">Apellido Paterno</label>
                                                                <input type="text" name="a_paterno" id="a_paterno" class="form-control" value="<?php echo $vecino['apellido_paterno'] ?>" required>
                                                            </div>
                                                            <div class="mb-3 form-group">
                                                                <label for="">Apellido Materno</label>
                                                                <input type="text" name="a_materno" id="a_materno" class="form-control" value="<?php echo $vecino['apellido_materno'] ?>" required>
                                                            </div>
                                                            <div class="mb-3 form-group">
                                                                <label for="">Correo</label>
                                                                <input type="email" name="correo" id="correo" class="form-control" value="<?php echo $vecino['correo']; ?>" required>
                                                            </div>
                                                            <div class="mb-3 form-group">
                                                                <label for="">Dirección</label>
                                                                <input type="text" name="direccion" id="direccion" class="form-control" value="<?php echo $vecino['direccion']; ?>" required>
                                                            </div>
                                                            <div class="mb-3 form-group">
                                                                <label for="">Fono</label>
                                                                <input type="number" name="fono" id="fono" class="form-control" value="<?php echo $vecino['telefono']; ?>" min="1" required>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer"> 
                                                            <input type="submit" class="btn btn-primary" value="Guardar">
                                                            <!-- <button type=" button" class="btn btn-secondary" data-bs-dismiss="modal"">Cerrar</button> -->
                                                        </div>
                                                    </form>       
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </main>
            <footer class=" py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
                </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../static/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../static/assets/demo/chart-area-demo.js"></script>
    <script src="../assets/demo/chart-bar-demo.js"></script>  
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script> 
    <script type="text/javascript">
        $(document).ready( function () {
            $('#datatablesSimple').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "lengthMenu": [ [5, 10], [5, 10] ],
                "language": { "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"},
            });
        });
    </script>
</body>
</html>