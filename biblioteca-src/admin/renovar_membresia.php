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

        if (renovar_membresia() == 1) {

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
                    $rut = $_GET['rut'];
                    $id = $_GET['id'];
                    $nombre = $_GET['nombre'];
                    $a_pa = $_GET['ape_pa'];
                    $a_ma = $_GET['ape_ma'];
                    $fecha = date("d-m-Y", strtotime($_GET['fecha']))
                ?>
                <div class="card mt-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Renovar membresia vecino
                    </div>
                    <div class="card-body">
                        <form action="" method="post" id="form">
                            <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $id ?>">
                            <div class="mb-3 form-group">
                                <label for="">Rut</label>
                                <input type="text" name="rut" id="nombre" class="form-control" disabled value="<?php echo $rut ?>">
                                <p id="nom" class="text-danger"> </p>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" disabled value="<?php echo $nombre ?>">
                                <p id="nom" class="text-danger"> </p>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Apellido Paterno</label>
                                <input type="text" name="a_paterno" id="a_paterno" class="form-control" disabled value="<?php echo $a_pa ?>">
                                <p id="p_apellido" class="text-danger"> </p>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Apellido Materno</label>
                                <input type="text" name="a_materno" id="a_materno" class="form-control" disabled value="<?php echo $a_ma ?>">
                                <p id="s_apellido" class="text-danger"> </p>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">fecha vencimiento membresia</label>
                                <input type="text" name="fecha" id="fecha" class="form-control" disabled value="<?php echo $fecha ?>">
                                <p id="s_apellido" class="text-danger"> </p>
                            </div>
                            <p> Seleccione plan de membresía</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="id_membresia" id="inlineRadio1" value=1>
                                <label class="form-check-label" for="inlineRadio1">Semestral</label>
                            </div>
                            <div class="form-check form-check-inline mb-3 form-group">
                                <input class="form-check-input" type="radio" name="id_membresia" id="inlineRadio2" value=2>
                                <label class="form-check-label" for="inlineRadio2">Anual</label>
                            </div>

                            <!-- <button type="submit" name="renovar_membresia" class="w-100 btn btn-lg btn-outline-primary">Renovar membresia</button>
                            <a type="button" href="listar_vecinos.php" name="registro" class="w-100 btn btn-lg btn-outline-danger mt-2">Atrás</a> -->
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
</body>

</html>