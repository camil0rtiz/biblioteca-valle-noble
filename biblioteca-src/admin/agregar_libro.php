<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('../includes/functions.php');
    if (
        isset($_POST['titulo_libro']) && isset($_POST['id_categoria']) && isset($_POST['cantidad_libro']) && isset($_POST['isbn_libro'])) {
        $titulo_libro = $_POST['titulo_libro'];
        $id_categoria = $_POST['id_categoria'];
        $cantidad_libro = $_POST['cantidad_libro'];
        $isbn_libro = $_POST['isbn_libro'];
        $autor = $_POST['autor_libro'];
        $img_libro = ""; //$_FILES['direccion'];

        /*if (registrar_vecino($rut, $nombre, $a_paterno, $a_materno, $correo, $direccion, $fono, $contrasena, $id_membresia, $estado,null,null)  == 1) {
            header('Location: guardar_vecino.php?msg=1');
        } else {
            //header('Location:guardar_vecino.php');
        }
        */
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Registrar nuevo libro - Biblioteca PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
    <link href="../static/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css"/>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

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
                            Libro registrado con éxito
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php
                } ?>
                <div class="card mt-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Registrar nuevo libro
                    </div>
                    <div class="card-body">
                        <form action="" method="post" id="formMain">
                            <div class="row mb-3 form-group">
                                <div class="col-md-6">
                                    <label for="">Título del nuevo libro (si este aún no existe en la base de datos)</label>
                                    <input type="text" name="titulo_libro" id="tituloInput" class="form-control" required>
                                </div> 
                                <div class="col-md-6">
                                    <label for="">Agregue un nuevo ejemplar a un libro existente</label>                         
                                    <select name="titulo_libro" id="listadoTitulo" class="form-control" required>
                                        <option value="0">Seleccione un libro</option>
                                        <option value="1">1984</option>
                                    </select>
                                </div>                            
                            </div>
                            <div class="row form-group">
                                <div class="mb-3">
                                    <label for="">Categoría </label>
                                    <select name="id_categoria" class="form-control" required>
                                        <option>Novela</option>
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Cantidad</label>
                                <input type="number" name="cantidad_libro" class="form-control" placeholder="1" required>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">ISBN</label>
                                <input type="text" name="isbn_libro" id="a_paterno" class="form-control" placeholder="Ej. 978-956-11-2987-0" required>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Autor</label>
                                <input type="text" name="autor_libro" id="a_paterno" class="form-control" required>
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Imagen de portada <small>(Tamaño máximo: <strong>280x200</strong>, formatos aceptados: <strong>jpg</strong>, <strong>jpeg</strong> y <strong>png</strong>)</small></label>
                                <input type="file" name="img_libro" accept="image/png, image/jpeg, image/jpg" class="form-control" required>
                            </div>
                            <input type="hidden" value="habilitado" name="estado">
                            <button type="submit" name="registro" class="w-100 btn btn-lg btn-outline-primary">Registrar libro</button>
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
    <script src="../static/js/rut.js"></script>
    <script src="../static/js/validar_contrasenas.js"></script>
    <script>
        $(document).ready(function(){
            $('#search').focus()

            $('#search').on('keyup', function(){
                var search = $('#search').val()
                $.ajax({
                    type: 'POST',
                    url: 'buscar_libro.php',
                    data: {'search': search},
                    beforeSend: function(){
                        $('#result').html('<img src="img/pacman.gif">')
                    }
                })
            .done(function(resultado){
                $('#result').html(resultado)
            })
            .fail(function(){
                alert('Hubo un error');
            })
            })
    })
    </script>
    <script type="text/javascript">
        // Accedemos al botón
var tituloInput = document.getElementById('tituloInput');
var listadoTitulo = document.getElementById('listadoTitulo');

// evento para el input radio del "si"
document.getElementById('listadoTitulo').addEventListener('input', function() {
    if (this.value.length > 0){
        tituloInput.disabled = true;
        //console.log('Vamos a habilitar el input text');
    }
    if (this.value == 0){
        tituloInput.disabled = false;
    }
    else {
        tituloInput.disabled = true;
    }
  //console.log('Vamos a habilitar el input text');
});
document.getElementById('tituloInput').addEventListener('input', function(){
    if (this.value.length > 0){
        listadoTitulo.disabled = true;
        //console.log('Vamos a habilitar el input text');
    }
    else {
        listadoTitulo.disabled = false;
    }
})
    </script>
</body>

</html>