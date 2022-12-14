<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    
    if($_GET['button'] == 'habilitar'){
        if (isset($_GET['id']) && isset($_GET['id_membresia'])) {

            require_once('../includes/functions.php');
            $id_membresia = $_GET['id_membresia'];
            $id = $_GET['id'];
    
            if (cambiar_estado_vecino($id, $id_membresia)  == 1) {
                header('Location: dashboard.php?msg=1');
            } 
        }
    }else if($_GET['button'] == 'deshabilitar'){
        echo 'Hola guapo';
        if (isset($_GET['id'])) {

            require_once('../includes/functions.php');
            $id = $_GET['id'];
            
            
            if (deshabilitar_vecino($id) == 1){
                header('Location: dashboard.php?msgg=3');
            }
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
                <?php if (isset($_GET['msg']) == 1) { ?>
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
                            Vecino habilitado
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php
                }
                
                if(isset($_GET['mensaje']) == 2){
                    ?>
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
                            Membres??a renovada con ??xito 
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php

                }
                
                if(isset($_GET['msgg']) == 3){
                    ?>
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
                            Vecino deshabilitado 
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php
                }
                ?>
                <div class="card mt-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Vecinos para habilitar
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" class="table table-striped display responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Rut</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Direcci??n</th>
                                    <th>Tel??fono</th>
                                    <th>Email</th>
                                    <th>Comprobante de pago</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include '../includes/functions.php';
                                $vecinos = listar_vecinos_pendientes();

                                foreach ($vecinos as $vecino) {
                                ?>

                                    <tr>
                                        <td><?php echo $vecino['rut']; ?></td>
                                        <td><?php echo $vecino['nombre']; ?></td>
                                        <td><?php echo $vecino['apellido_paterno'] . ' ' . $vecino['apellido_materno']; ?></td>
                                        <td><?php echo $vecino['direccion']; ?></td>
                                        <td><?php echo $vecino['telefono']; ?></td>
                                        <td><?php echo $vecino['correo']; ?></td>
                                        <td><a href="../descarga.php?file=<?php echo $vecino['comprobante']; ?>">Descargar comprobante</a></td>
                                        <td>
                                        <form action="dashboard.php" method="get">
                                            <input type="hidden" name="id" id="id" value="<?php echo $vecino['id_usuario']; ?>"> 
                                            <input type="hidden" name="id_membresia" id="id_membresia" value="<?php echo $vecino['id_membresia']; ?>">
                                            <input type="hidden" name="button" value="habilitar">
                                            <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Permite habilitar a vecinos inscritos desde la p??gina">Habilitar</button>
                                        </form>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Renovar subcripciones vencidas
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple1" class="table table-striped display responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Rut</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>fecha de vencimiento</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $vecinos = listar_vecinos_vencidos();
                                foreach ($vecinos as $vecino) {
                                ?>

                                    <tr>
                                        <td><?php echo $vecino['rut']; ?></td>
                                        <td><?php echo $vecino['nombre']; ?></td>
                                        <td><?php echo $vecino['apellido_paterno'] . ' ' . $vecino['apellido_materno']; ?></td>
                                        <td><?php
                                            echo date("d-m-Y", strtotime($vecino['fecha_vencimiento']));
                                            ?></td>
                                        <td>
                                            <a type="button" href="renovar_membresia.php?id=<?php echo $vecino['id_usuario']; ?>& rut=<?php echo $vecino['rut']; ?> & nombre=<?php echo $vecino['nombre']; ?> 
                                        & ape_pa=<?php echo $vecino['apellido_paterno']; ?> & ape_ma=<?php echo $vecino['apellido_materno']; ?> & fecha=<?php echo $vecino['fecha_vencimiento']; ?>" name="renovar_membresia" class="btn btn-primary"
                                        data-toggle="tooltip" data-placement="top" title="Permite renovar mebres??a de vecinos que les haya expirado">Renovar membres??a</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Subcripciones vencidas
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple2" class="table table-striped display responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Rut</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>fecha de vencimiento</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $vecinos = listar_vecinos();
                                foreach ($vecinos as $vecino) {
                                    if($vecino['fecha_vencimiento'] < date('Y-m-d')){
                                        ?>
                                        <tr>
                                            <td><?php echo $vecino['rut']; ?></td>
                                            <td><?php echo $vecino['nombre']; ?></td>
                                            <td><?php echo $vecino['apellido_paterno'] . ' ' . $vecino['apellido_materno']; ?></td>
                                            <td><?php
                                            echo date("d-m-Y", strtotime($vecino['fecha_vencimiento']));
                                            ?></td>
                                            <td><a type="button" href="dashboard.php?id=<?php echo $vecino['id_usuario']; ?> & button=deshabilitar" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Permite deshabilitar a vecino que expir?? su fecha de membres??a">Deshabilitar vecino</a></td>
                                        </tr>
                                <?php }
                                }?>
                                    
                            </tbody>
                        </table>
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $('#datatablesSimple').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "lengthMenu": [
                    [5, 10],
                    [5, 10]
                ],
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                },
            });

            $('#datatablesSimple1').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "lengthMenu": [
                    [5, 10],
                    [5, 10]
                ],
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                },
            });

            $('#datatablesSimple2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "lengthMenu": [
                    [5, 10],
                    [5, 10]
                ],
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                },
            });
        });

        

    </script>
</body>

</html>