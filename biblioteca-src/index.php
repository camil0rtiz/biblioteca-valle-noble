<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Inicio - Biblioteca Valle Noble</title>
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
        <main class="container-fluid">
        <?php if (isset($_GET['msg'])){
            if($_GET['msg'] == '1'){?>

            
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </symbol>
                </svg> 

                <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                        Usted ha sido registrado con éxito, por favor espere a que confirmen sus datos desde administración.
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php 
            }elseif($_GET['msg'] == '2'){ ?>
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </symbol>
                </svg>
                
                <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                        Vecino ya se encuentra registrado.
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> <?php
            }elseif($_GET['msg'] == '3'){ ?>
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </symbol>
                </svg>
                
                <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                        Solo se adminte pdf o jpg
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> <?php
            }
        }?>

            <div class="row g-5">
                <div class="col-md-7 col-lg-8">
                    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                        <h1 class="display-4 fw-normal">¿Quiénes somos?</h1>
                        <div class="row row-cols-1 row-cols-md-2 mb-3 text-center mx-auto d-block">
                            <img src="static/img/logo.jpg">
                        </div>
                        <p class="fs-5 text-muted">Somos una biblioteca comunitaria creada por y para los vecinos de Valle Noble en la Comuna de Concepción. Soñamos con convertirnos en un centro cultural que acerque y fomente las distintas expresiones culturales a los vecinos de nuestro barrio.</p>
                    </div>
                </div>
                <!-- -->
                <div class="col-md-5 col-lg-4 order-md-last">
                    <div class="bg-light p-5">
                        <h3>Si ya eres miembro, inicia sesión</h3>
                        <p class="lead"></p>
                        <div class="col">
                            <label for="correo" class="form-label" >Correo</label>
                            <input type="email" class="form-control" id="correo" disabled placeholder="vecino@dominio.cl" value="" required>
                                <div class="invalid-feedback">
                                    Correo válido es requerido.
                                </div>
                        </div>
                        <br>
                        <div class="col">
                            <label for="claves" class="form-label" >Contraseña</label>
                            <input type="password" class="form-control" disabled id="clave" placeholder="" value="" required>
                        </div>

                        <hr class="my-4">
                        <div>
                            <input type="button" class="btn btn-md btn-primary" disabled value="Iniciar sesión">
                        </div>
                    </div>
                </div>
                
            </div>
            
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="static/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="static/assets/demo/chart-area-demo.js"></script>
        <script src="static/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="static/js/datatables-simple-demo.js"></script>
    </body>
</html>
