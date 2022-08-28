<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('../includes/functions.php');
    if (
        isset($_POST['rut']) && isset($_POST['nombre']) && isset($_POST['a_paterno']) && isset($_POST['a_materno']) && isset($_POST['correo'])
        && isset($_POST['direccion']) && isset($_POST['fono']) && isset($_POST['contrasena']) && isset($_POST['id_membresia']) && isset($_POST['estado'])
    ) {

        $rut = $_POST['rut'];
        $nombre = $_POST['nombre'];
        $a_paterno = $_POST['a_paterno'];
        $a_materno = $_POST['a_materno'];
        $correo = $_POST['correo'];
        $direccion = $_POST['direccion'];
        $fono = $_POST['fono'];
        $contrasena = $_POST['contrasena'];
        $id_membresia = $_POST['id_membresia'];
        $estado = $_POST['estado'];

        if (registrar_vecino($rut, $nombre, $a_paterno, $a_materno, $correo, $direccion, $fono, $contrasena, $id_membresia, $estado,null,null)  == 1) {
            header('Location: guardar_vecino.php?msg=1');
        } else {
            //header('Location:guardar_vecino.php');
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
                            Vecino registrado con éxito
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php
                } ?>
                <div class="card mt-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Registrar vecino
                    </div>
                    <div class="card-body">
                        <form action="" method="post" id="form">
                            <div class="mb-3 form-group">
                                <label for="">Rut</label>
                                <input type="text" name="rut" id="rut" oninput="checkRut(this)" class="form-control" maxlength="10">
                                <p id="respuesta" class="text-danger"> </p>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control">
                                <p id="nom" class="text-danger"> </p>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Apellido Paterno</label>
                                <input type="text" name="a_paterno" id="a_paterno" class="form-control">
                                <p id="p_apellido" class="text-danger"> </p>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Apellido Materno</label>
                                <input type="text" name="a_materno" id="a_materno" class="form-control">
                                <p id="s_apellido" class="text-danger"> </p>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Correo</label>
                                <input type="email" name="correo" id="correo" class="form-control">
                                <p id="email" class="text-danger"> </p>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Dirección</label>
                                <input type="text" name="direccion" id="direccion" class="form-control">
                                <p id="direc" class="text-danger"> </p>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Fono</label>
                                <input type="number" name="fono" id="fono" class="form-control" min="1">
                                <p id="fon" class="text-danger"> </p>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Contraseña</label>
                                <input type="password" name="contrasena" id="contrasena" class="form-control">
                                <p id="contra" class="text-danger"> </p>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Confirmar contraseña</label>
                                <input type="password" id="confirmar_contrasena" class="form-control">
                                <p id="err" class="text-danger"> </p>
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
                            <input type="hidden" value="habilitado" name="estado">
                            <button type="submit" name="registro" class="w-100 btn btn-lg btn-outline-primary">Registrar</button>
                            <a type="button" href="dashboard.php" name="registro" class="w-100 btn btn-lg btn-outline-danger mt-2">Atrás</a>
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
    <!-- <script src="../static/js/rut.js"></script> -->
    <script src="../static/js/validar_formulario_admin.js"></script>
</body>

</html>