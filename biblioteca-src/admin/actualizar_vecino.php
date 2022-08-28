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
                <?php
                    $id = $_GET['id'];
                    $nombre = $_GET['nombre'];
                    $a_pa = $_GET['ape_pa'];
                    $a_ma = $_GET['ape_ma'];
                    $direccion = $_GET['direc'];
                    $fono = $_GET['fono'];
                    $correo = $_GET['correo'];

                ?>
                <div class="card mt-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Actualizar registro vecino
                    </div>
                    <div class="card-body">
                        <form action="" method="post" id="form">
                            <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $id ?>"> 
                            <div class="mb-3 form-group">
                                <label for="">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $nombre ?>">
                                <p id="nom" class="text-danger"> </p>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Apellido Paterno</label>
                                <input type="text" name="a_paterno" id="a_paterno" class="form-control" value="<?php echo $a_pa ?>">
                                <p id="p_apellido" class="text-danger"> </p>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Apellido Materno</label>
                                <input type="text" name="a_materno" id="a_materno" class="form-control" value="<?php echo $a_ma ?>">
                                <p id="s_apellido" class="text-danger"> </p>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Correo</label>
                                <input type="email" name="correo" id="correo" class="form-control" value="<?php echo $correo ?>">
                                <p id="email" class="text-danger"> </p>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Dirección</label>
                                <input type="text" name="direccion" id="direccion" class="form-control" value="<?php echo $direccion ?>">
                                <p id="direc" class="text-danger"> </p>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Fono</label>
                                <input type="text" name="fono" id="fono" class="form-control" min="1" value="<?php echo $fono ?>">
                                <p id="fon" class="text-danger"> </p>
                            </div>
                            <button type="submit" name="registro" class="w-100 btn btn-lg btn-outline-primary">Actualizar registro</button>
                            <a type="button" href="listar_vecinos.php" name="registro" class="w-100 btn btn-lg btn-outline-danger mt-2">Atrás</a>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
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
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="../static/js/datatables-simple-demo.js"></script>
    <script src="../static/js//validar_editar.js"></script>
</body>

</html>