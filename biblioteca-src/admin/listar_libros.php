<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('../includes/functions.php');
    if (
        isset($_POST['titulo_libro']) && isset($_POST['id_categoria']) && isset($_POST['cantidad_libro']) && isset($_POST['isbn_libro'])) {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $a_paterno = $_POST['a_paterno'];
        $a_materno = $_POST['a_materno'];
        $correo = $_POST['correo'];
        $direccion = $_POST['direccion'];
        $fono = $_POST['fono'];

        if (editar_libro($id_libro, $titulo_libro, $id_categoria, $cantidad, $isbn_libro, $dewey_libro, $autor_libro, $img_libro) == 1) {

            header('Location:listar_libros.php?msg=1');
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
                    <a type="button" href="agregar_libro.php" class="btn btn-primary mt-4">Agregar Libro</a>
                </div>
                <div class="card mt-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Listado de libros
                    </div>

                    <div class="card-body">
                        <table id="datatablesSimple" class="table table-striped display responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Título</th>
                                    <th>Categoría</th>
                                    <th>Autor</th>
                                    <th>Dewey</th>
                                    <th>ISBN</th>
                                    <th>Disponibles (n de total)</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include '../includes/functions.php';
                                $libros = listar_libros();

                                foreach ($libros as $libro) {
                                    echo '

                                    <tr>
                                        <!-- titulo_libro, autor_libro, dewey, isbn, stock FROM libro;";-->
                                        <td>'.$libro[0].'</td>
                                        <td></td>
                                        <td>'.$libro[1].'</td>
                                        <td>'.$libro[2].'</td>
                                        <td>'.$libro[3].'</td>
                                        <td>'.$libro[4].'</td>
                                        <td>
                                            <a type="button" class="btn btn-primary" href="actualizar_libro.php?id_libro='.$libro[5].'">
                                                Editar
                                            </a>
                                        </td>
                                    </tr>';
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
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