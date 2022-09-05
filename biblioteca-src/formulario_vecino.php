<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Registro - Biblioteca PHP</title>
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="static/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <style type="text/css">
        .blanco {
            color: white;
        }

        body {

            padding-top: 4.5rem;
        }
    </style>
</head>

<body class="sb-nav-fixed">
    <!-- menu -->
    <?php include 'menu.php'; ?>
    <!-- endmenu -->

    <?php

    if (isset($_GET['membresia'])) {

        if (!empty($_GET['membresia'])) {
            $membresia = $_GET['membresia'];
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        require_once('includes/functions.php');

        if ((isset($_POST['rut']) && isset($_POST['nombre']) && isset($_POST['a_paterno']) && isset($_POST['a_materno']) && isset($_POST['correo'])
            && isset($_POST['direccion']) && isset($_POST['fono']) && isset($_POST['contrasena']) && isset($_POST['id_membresia']) && isset($_POST['estado']) && isset($_FILES['imagen']['name'])) && ($_POST['estado'] == 'pendiente')) {

            $DateAndTime = date('m-d-Y h:i:s', time()); 
            $rut = $_POST['rut'];
            $nombre = $_POST['nombre'];
            $a_paterno = $_POST['a_paterno'];
            $a_materno = $_POST['a_materno'];
            $correo = $_POST['correo'];
            $direccion = $_POST['direccion'];
            $fono = $_POST['fono'];
            $contrasena = $_POST['contrasena'];
            $nombre_imagen = $_FILES['imagen']['name'];
            $tipo_imagen = $_FILES['imagen']['type'];
            $tamano_imagen = $_FILES['imagen']['size'];
            $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/static/img/';
            $id_membresia = $_POST['id_membresia'];
            $estado = $_POST['estado'];
            $nombre_img = str_replace(' ', '-', $DateAndTime . $nombre_imagen);

            echo $nombre_img;

            if (!(strpos($tipo_imagen, "jpeg")) || !(strpos($tipo_imagen, "pdf"))) {
                header('Location: index.php?msg=3');
            }

            if (registrar_vecino($rut, $nombre, $a_paterno, $a_materno, $correo, $direccion, $fono, $contrasena, $id_membresia, $estado, $carpeta_destino, $nombre_img)  == 1) {

                header('Location: index.php?msg=1');
            } else {
                header('Location: index.php?msg=2');
            }
        } else {
            echo 'holi';
        }
    }

    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="row row-cols-1 row-cols-md-2 mb-3 text justify-content-center">
                    <div class="col-lg-6">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">Ingresa tus datos</h4>
                            </div>
                            <div class="card-body">
                                <form action="formulario_vecino.php" method="post" id="form" enctype="multipart/form-data">
                                    <div class="mb-3 form-group">
                                        <label for="">Rut</label>
                                        <input type="text" name="rut" id="rut" class="form-control" placeholder="Ingrese su rut sin puntos y sin guión" maxlength="10">
                                        <p id="respuesta" class="text-danger"> </p>
                                        <p id="cedula" class="text-danger"> </p>
                                    </div>
                                    <div class="mb-3 form-group">
                                        <label for="">Nombre</label>
                                        <input type="text" name="nombre" id="nombre" placeholder="Ingrese su primer nombre" class="form-control">
                                        <p id="nom" class="text-danger"> </p>
                                    </div>
                                    <div class="mb-3 form-group">
                                        <label for="">Apellido Paterno</label>
                                        <input type="text" name="a_paterno" id="a_paterno" placeholder="Ingrese su primer apellido" class="form-control">
                                        <p id="p_apellido" class="text-danger"> </p>
                                    </div>
                                    <div class="mb-3 form-group">
                                        <label for="">Apellido Materno</label>
                                        <input type="text" name="a_materno" id="a_materno" placeholder="Ingrese su segundo apellido" class="form-control">
                                        <p id="s_apellido" class="text-danger"> </p>
                                    </div>
                                    <div class="mb-3 form-group">
                                        <label for="">Correo</label>
                                        <input type="text" name="correo" id="correo" class="form-control" placeholder="example@gmail.com">
                                        <p id="email" class="text-danger"> </p>
                                    </div>
                                    <div class="mb-3 form-group">
                                        <label for="">Dirección</label>
                                        <input type="text" name="direccion" id="direccion" placeholder="Ejem: dirección #xxxx " class="form-control">
                                        <p id="direc" class="text-danger"> </p>
                                    </div>
                                    <div class="mb-3 form-group">
                                        <label for="">Fono</label>
                                        <input type="number" name="fono" id="fono" placeholder="Ingrese su número con 9 dígitos" class="form-control" min="1">
                                        <p id="fon" class="text-danger"> </p>
                                    </div>
                                    <div class="mb-3 form-group">
                                        <label for="">Contraseña</label>
                                        <input type="password" name="contrasena" id="contrasena" placeholder="Ingrese su contraseña con mínimo 8 caracteres" class="form-control">
                                        <p id="contra" class="text-danger"> </p>
                                    </div>
                                    <div class="mb-3 form-group">
                                        <label for="">Confirmar contraseña</label>
                                        <input type="password" id="confirmar_contrasena" placeholder="Confirme su contraseña" class="form-control">
                                        <p id="err" class="text-danger"> </p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Subir comprobante de pago (formatos aceptados: <strong>jpg</strong> y <strong>jpeg</strong>)</small></label>
                                        <input class="form-control" name="imagen" type="file" id="formFile">
                                        <p id="compro" class="text-danger"> </p>
                                    </div>
                                    <input type="hidden" name="estado" id='estado' value="pendiente">
                                    <input type="hidden" name="id_membresia" value="<?php echo $membresia ?>">
                                    <button type="submit" name="registro" id='registro' class="w-100 btn btn-lg btn-outline-primary">Registrar</button>
                                    <a type="button" href="index.php" name="atras" class="w-100 btn btn-lg btn-outline-danger mt-2">Atrás</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="static/assets/demo/chart-area-demo.js"></script>
        <script src="static/assets/demo/chart-bar-demo.js"></script>
        <script src="static/js/validar_formulario.js"></script> -->
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script>
            $("#rut").on("keyup", function() {
                var cedula = $("#rut").val(); //CAPTURANDO EL VALOR DE INPUT CON ID CEDULA
                var longitudCedula = $("#rut").val().length; //CUENTO LONGITUD
                //Valido la longitud 
                if (longitudCedula >= 5) {
                    var dataString = 'cedula=' + cedula;

                    $.ajax({
                        url: 'buscar_rut.php',
                        type: "GET",
                        data: dataString,
                        dataType: "JSON",

                        success: function(datos) {

                            if (datos.success == 0) { //usuario no registrado

                                $("#respuesta").html(datos.message);
                                $("#nombre").attr("disabled", false);
                                $("#nombre").attr('value', '');
                                $("#a_paterno").attr("disabled", false);
                                $("#a_materno").attr("disabled", false);
                                $("#correo").attr("disabled", false);
                                $("#direccion").attr("disabled", false);
                                $("#fono").attr("disabled", false);
                                $("#contrasena").attr("disabled", false);
                                $("#confirmar_contrasena").attr("disabled", false);
                                $("#formFile").attr("disabled", false);
                                $("#id_membresia").attr("disabled", false);
                                $("#registro").attr("disabled", false);
                                
                            } else if (datos.success == 1) {//membresia vencida

                                $("#respuesta").html(datos.message);
                                $("#nombre").attr("disabled", true);
                                $("#a_paterno").attr("disabled", true);
                                $("#a_materno").attr("disabled", true);
                                $("#correo").attr("disabled", true);
                                $("#direccion").attr("disabled", true);
                                $("#fono").attr("disabled", true);
                                $("#contrasena").attr("disabled", true);
                                $("#confirmar_contrasena").attr("disabled", true);
                                $("#formFile").attr("disabled", true);
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
                                $("#formFile").attr("disabled", true);
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
                                $("#formFile").attr("disabled", true);
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