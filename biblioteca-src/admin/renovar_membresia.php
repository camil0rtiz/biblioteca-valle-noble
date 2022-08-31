<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('../includes/functions.php');
    if ( isset($_POST['id']) && isset($_POST['id_membresia'])){

        $id = $_POST['id'];
        $membresia = $_POST['id_membresia'];

        echo $id;
        echo $membresia;
        
        if (renovar_membresia($id,$membresia) == 1) {

            header('Location:dashboard.php');
        } else {
            header('Location:dashboard.php');
        }
    }
}

if (
    !empty($_GET['rut']) && !empty($_GET['id']) && !empty($_GET['nombre']) && !empty($_GET['ape_pa'])
    && !empty($_GET['ape_ma']) 
) {

    $rut = $_GET['rut'];
    $id = $_GET['id'];
    $nombre = $_GET['nombre'];
    $a_pa = $_GET['ape_pa'];
    $a_ma = $_GET['ape_ma'];
    $fecha = date("d-m-Y", strtotime($_GET['fecha']));

}else{
    header('Location:dashboard.php');
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
            
                <div class="card mt-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Renovar membresía vecino
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
                                <label for="">fecha vencimiento membresía</label>
                                <input type="text" name="fecha" id="fecha" class="form-control" disabled value="<?php echo $fecha ?>">
                                <p id="s_apellido" class="text-danger"> </p>
                            </div>
                            <p> Seleccione plan de membresía</p>
                            <select class="form-select" name="id_membresia" id="id_membresia" aria-label="Default select example">
                                <option selected value="">Ingrese membresía</option>
                                <option value="1">Semestral</option>
                                <option value="2">Anual</option>
                            </select>
                            <p id="mem" class="text-danger"> </p>
                            <button type="submit" name="renovar_membresia" class="w-100 btn btn-lg btn-outline-primary">Renovar membresía</button>
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
    <script src="../static/js/validar_renovar.js"></script>
</body>

</html>