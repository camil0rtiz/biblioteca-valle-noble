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

        if (registrar_vecino($rut, $nombre, $a_paterno, $a_materno, $correo, $direccion, $fono, $contrasena, $id_membresia, $estado, null, null)  == 1) {
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
                                <input type="text" name="rut" id="rut" placeholder="Ingrese su rut sin puntos y sin guión" class="form-control" maxlength="10">
                                <p id="respuesta" class="text-danger"> </p>
                                <p id="cedula" class="text-danger"> </p>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Nombre</label>
                                <input type="text" name="nombre" id="nombre" placeholder="Ingrese nombre" class="form-control">
                                <p id="nom" class="text-danger"> </p>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Apellido Paterno</label>
                                <input type="text" name="a_paterno" id="a_paterno" placeholder="Ingrese primer apellido" class="form-control">
                                <p id="p_apellido" class="text-danger"> </p>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Apellido Materno</label>
                                <input type="text" name="a_materno" id="a_materno" placeholder="Ingrese segundo apellido" class="form-control">
                                <p id="s_apellido" class="text-danger"> </p>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Correo</label>
                                <input type="email" name="correo" id="correo" class="form-control" placeholder="example@gmail.com">
                                <p id="email" class="text-danger"> </p>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Dirección</label>
                                <input type="text" name="direccion" id="direccion" placeholder="Ejem: dirección #xxxx " class="form-control">
                                <p id="direc" class="text-danger"> </p>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Fono</label>
                                <input type="number" name="fono" id="fono" placeholder="Ingrese número con 9 dígitos" class="form-control" min="1">
                                <p id="fon" class="text-danger"> </p>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Contraseña</label>
                                <input type="password" name="contrasena" id="contrasena" placeholder="Ingrese contraseña con mínimo 8 caracteres" class="form-control">
                                <p id="contra" class="text-danger"> </p>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Confirmar contraseña</label>
                                <input type="password" id="confirmar_contrasena" placeholder="Confirme contraseña" class="form-control">
                                <p id="err" class="text-danger"> </p>
                            </div>
                            <p> Seleccione plan de membresía</p>
                            <select class="form-select" name="id_membresia" id="id_membresia" aria-label="Default select example">
                                <option selected value="">Ingrese membresía</option>
                                <option value="1">Semestral</option>
                                <option value="2">Anual</option>
                            </select>
                            <p id="mem" class="text-danger"> </p>
                            <input type="hidden" value="habilitado" name="estado">
                            <button type="submit" name="registro" id="registro" class="w-100 btn btn-lg btn-outline-primary">Registrar</button>
                            <a type="button" href="dashboard.php" name="registro" class="w-100 btn btn-lg btn-outline-danger mt-2">Volver a menú</a>
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
    <script src="../static/js/validar_formulario_admin.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $("#rut").on("keyup", function() {
            var cedula = $("#rut").val(); //CAPTURANDO EL VALOR DE INPUT CON ID CEDULA
            var longitudCedula = $("#rut").val().length; //CUENTO LONGITUD
            //Valido la longitud 
            if (longitudCedula >= 5) {
                var dataString = 'cedula=' + cedula;

                $.ajax({
                    url: '../buscar_rut.php',
                    type: "GET",
                    data: dataString,
                    dataType: "JSON",

                    success: function(datos) {

                        if (datos.success == 0) {

                            $("#respuesta").html(datos.message);
                            $("#nombre").attr("disabled", false);
                            $("#a_paterno").attr("disabled", false);
                            $("#a_materno").attr("disabled", false);
                            $("#correo").attr("disabled", false);
                            $("#direccion").attr("disabled", false);
                            $("#fono").attr("disabled", false);
                            $("#contrasena").attr("disabled", false);
                            $("#confirmar_contrasena").attr("disabled", false);
                            $("#imagen").attr("disabled", false);
                            $("#registro").attr("disabled", false);
                            $("#id_membresia").attr("disabled", false);
                            $("#registro").attr("disabled", false);

                        } else if (datos.success == 1) {

                            $("#respuesta").html(datos.message);
                            $("#nombre").attr("disabled", true);
                            $("#a_paterno").attr("disabled", true);
                            $("#a_materno").attr("disabled", true);
                            $("#correo").attr("disabled", true);
                            $("#direccion").attr("disabled", true);
                            $("#fono").attr("disabled", true);
                            $("#contrasena").attr("disabled", true);
                            $("#confirmar_contrasena").attr("disabled", true);
                            $("#imagen").attr("disabled", true);
                            $("#registro").attr("disabled", true);
                            $("#id_membresia").attr("disabled", true);
                            $("#registro").attr("disabled", true);

                        } else if (datos.success == 2) {
                            $("#respuesta").html(datos.message);
                            $("#nombre").attr("disabled", true);
                            $("#a_paterno").attr("disabled", true);
                            $("#a_materno").attr("disabled", true);
                            $("#correo").attr("disabled", true);
                            $("#direccion").attr("disabled", true);
                            $("#fono").attr("disabled", true);
                            $("#contrasena").attr("disabled", true);
                            $("#confirmar_contrasena").attr("disabled", true);
                            $("#imagen").attr("disabled", true);
                            $("#registro").attr("disabled", true);
                            $("#id_membresia").attr("disabled", true);
                            $("#registro").attr("disabled", true);
                        } else if (datos.success == 3) {
                            $("#respuesta").html(datos.message);
                            $("#nombre").attr("disabled", true);
                            $("#a_paterno").attr("disabled", true);
                            $("#a_materno").attr("disabled", true);
                            $("#correo").attr("disabled", true);
                            $("#direccion").attr("disabled", true);
                            $("#fono").attr("disabled", true);
                            $("#contrasena").attr("disabled", true);
                            $("#confirmar_contrasena").attr("disabled", true);
                            $("#imagen").attr("disabled", true);
                            $("#registro").attr("disabled", true);
                            $("#id_membresia").attr("disabled", true);
                            $("#registro").attr("disabled", true);
                        }
                    }
                });
            }
        });
    </script>
</body>

</html>