<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Registro - Biblioteca PHP</title>
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
        <main class="container">
            <div class="row g-5">
                <div class="col-md-12 col-lg-12">
                    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                        <h1 class="display-4 fw-normal">Sé miembro</h1>
                        <p class="fs-5 text-muted">Si necesitas pedir libros puedes hacerlo pagando algún tipo de membresía</p>
                    </div>
                    <div class="row row-cols-1 row-cols-md-2 mb-3 text-center">
                        <div class="col">
                            <div class="card mb-4 rounded-3 shadow-sm">
                                <div class="card-header py-3">
                                    <h4 class="my-0 fw-normal">Semestral</h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title pricing-card-title">$1500<small class="text-muted fw-light">/6 meses</small></h1>
                                    <p>Pide libros durante 6 meses pagando solo una vez</p>
                                    <form action="formulario_vecino.php" method="get">
                                        <input type="hidden" name="membresia" value=1 >
                                        <button type="submit" class="w-100 btn btn-lg btn-outline-primary">Registrate</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mb-4 rounded-3 shadow-sm">
                                <div class="card-header py-3">
                                    <h4 class="my-0 fw-normal">Anual</h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title pricing-card-title">$3000<small class="text-muted fw-light">/año</small></h1>
                                    <p>Pide libros durante 1 año pagando solo una vez</p>
                                    <form action="formulario_vecino.php" method="get">
                                        <input type="hidden" name="membresia" value=2 >
                                        <button type="submit" class="w-100 btn btn-lg btn-outline-primary">Registrate</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- -->

            </div>

        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="static/assets/demo/chart-area-demo.js"></script>
        <script src="static/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="/static/js/datatables-simple-demo.js"></script>
    </body>
</html>
