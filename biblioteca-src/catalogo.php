<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Catálogo - Biblioteca PHP</title>
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
            body{margin-top:20px;
                background-color: #eee;
                }

                .search-result-categories>li>a {
                    color: #b6b6b6;
                    font-weight: 400
                }

                .search-result-categories>li>a:hover {
                    background-color: #ddd;
                    color: #555
                }

                .search-result-categories>li>a>.glyphicon {
                    margin-right: 5px
                }

                .search-result-categories>li>a>.badge {
                    float: right
                }

                .search-results-count {
                    margin-top: 10px
                }

                .search-result-item {
                    padding: 20px;
                    background-color: #fff;
                    border-radius: 4px
                }

                .search-result-item:after,
                .search-result-item:before {
                    content: " ";
                    display: table
                }

                .search-result-item:after {
                    clear: both
                }

                .search-result-item .image-link {
                    display: block;
                    overflow: hidden;
                    border-top-left-radius: 4px;
                    border-bottom-left-radius: 4px
                }

                @media (min-width:768px) {
                    .search-result-item .image-link {
                        display: inline-block;
                        margin: -20px 0 -20px -20px;
                        float: left;
                        width: 200px
                    }
                }

                @media (max-width:767px) {
                    .search-result-item .image-link {
                        max-height: 200px
                    }
                }

                .search-result-item .image {
                    max-width: 100%
                }

                .search-result-item .info {
                    margin-top: 2px;
                    font-size: 12px;
                    color: #999
                }

                .search-result-item .description {
                    font-size: 13px
                }

                .search-result-item+.search-result-item {
                    margin-top: 20px
                }

                @media (min-width:768px) {
                    .search-result-item-body {
                        margin-left: 200px
                    }
                }

                .search-result-item-heading {
                    font-weight: 400
                }

                .search-result-item-heading>a {
                    color: #555
                }

                @media (min-width:768px) {
                    .search-result-item-heading {
                        margin: 0
                    }
                }
        </style>
    </head>
    <body class="sb-nav-fixed">
        <!-- menu -->
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Biblioteca PHP</a>
            <!-- Navbar list -->
            <li class="nav-link">
              <a class="nav-link ps-3 blanco" href="catalogo.php">Buscar</a>
            </li>
            <li class="nav-link">
              <a class="nav-link ps-3 blanco" href="registro.php">Registro</a>
            </li>
            <!--
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>

            </ul>
            -->
        </nav>
        <!-- endmenu -->

        <div class="container">
            <div class="row ng-scope">
            <?php
                    include 'includes/functions.php';
                    $categorias = listar_categorias();
                    if (isset($_GET["titulo"]) && !isset($_GET["cat"])){
                        $titulo = $_GET["titulo"];
                        $libros = buscar_libro($titulo);
                    echo '
                        <div class="col-md-3 col-md-push-9">
                            <p class="text-muted fs-mini">Categorias:</p>
                            <select class="form-select" aria-label="Default select example" onchange="location = this.value;">
                                <option selected disabled hidden select>Seleccione</option>
                                <option value="?cat=-1&titulo='.$titulo.'">Todas</option>
                                ';
                                foreach($categorias as $categoria){
                                    echo '<option value="?cat='.$categoria[1].'&titulo='.$titulo.'">'.$categoria[2].'</option>\n';
                                }
                    echo '
                        </select>
                    </div>
                    <div class="col-md-9 col-md-pull-3">
                        <form action="catalogo.php" method="GET">
                            <div class="input-group">
                                <input class="form-control" name="titulo" type="text" placeholder="Buscar libro por..." aria-label="Buscar libro por..." aria-describedby="btnNavbarSearch" />
                                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                            </div>
                        </form>';
                    
                    
                    echo '
                        <p class="search-results-count">'.count($libros).' resultados encontrados</p>';
                            foreach ($libros as $libro){
                                //var_dump($libro);
                            echo '
                            <section class="search-result-item">
                                <a class="image-link" href="#">';
                                if (strlen($libro[3] == 0 || $libro[3] == NULL)){
                                    echo '<img src="../static/img/libros/defecto.jpg" height="280" width="200" alt="..." class="img-thumbnail">';
                                }
                                else {
                                    echo '<img src="../static/img/libros/'.$libro[3].'" height="280" width="200" alt="..." class="img-thumbnail">';
                                }
                                echo '</a>
                                <div class="search-result-item-body">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <h4 class="search-result-item-heading"><a href="#">'.$libro[0].'</a></h4>
                                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                        <div class="col-sm-3 text-align-center">
                                            <p>Disponibles: '.$libro[2].'</p>
                                            <a class="btn btn-primary btn-info " href="#">Pedir</a>
                                        </div>
                                    </div>
                                </div>
                            </section>';
                        }
                    }
                    // Otro if
                    if (isset($_GET["titulo"]) && isset($_GET["cat"]) && $_GET["cat"] != '' && $_GET["cat"] != ' '){
                        $titulo = $_GET["titulo"];
                        $cat = $_GET["cat"];
                        $categorias = listar_categorias();
                        $libros = listar_libros_by_categoria(intval($cat), $titulo);
                    echo '
                        <div class="col-md-3 col-md-push-9">
                            <p class="text-muted fs-mini">Categorias:</p>
                            <select class="form-select" aria-label="Default select example" onchange="location = this.value;">
                                <option selected disabled hidden>Seleccione</option>
                                <option value="?cat=-1&titulo='.$titulo.'">Todas</option>
                                ';
                                foreach($categorias as $categoria){
                                    echo '<option value="?cat='.$categoria[1].'&titulo='.$titulo.'">'.$categoria[2].'</option>\n';
                                }
                    echo '
                        </select>
                    </div>
                    <div class="col-md-9 col-md-pull-3">
                        <form action="catalogo.php" method="GET">
                            <div class="input-group">
                                <input class="form-control" name="titulo" type="text" placeholder="Buscar libro por..." aria-label="Buscar libro por..." aria-describedby="btnNavbarSearch" />
                                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                            </div>
                        </form>';
                    
                    
                    echo '
                        <p class="search-results-count">'.count($libros).' resultados encontrados</p>';
                            foreach ($libros as $libro){
                            echo '
                            <section class="search-result-item">
                                <a class="image-link" href="#">';
                                if (strlen($libro[3] == 0 || $libro[3] == NULL)){
                                    echo '<img src="../static/img/libros/defecto.jpg" height="280" width="200" alt="..." class="img-thumbnail">';
                                }
                                else {
                                    echo '<img src="../static/img/libros/'.$libro[3].'" height="280" width="200" alt="..." class="img-thumbnail">';
                                }
                                echo '</a>
                                <div class="search-result-item-body">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <h4 class="search-result-item-heading"><a href="#">'.$libro[0].'</a></h4>
                                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                        <div class="col-sm-3 text-align-center">
                                            <p>Disponibles: '.$libro[2].'</p>
                                            <a class="btn btn-primary btn-info " href="#">Pedir</a>
                                        </div>
                                    </div>
                                </div>
                            </section>';
                        }
                    }
                    if (!isset($_GET['cat']) && !isset($_GET['titulo'])){
                        $libros = listar_libros();
                    echo '
                        <div class="col-md-3 col-md-push-9">
                            <p class="text-muted fs-mini">Categorias:</p>
                            <select class="form-select" aria-label="Default select example" onchange="location = this.value;">
                                <option selected disabled hidden select>Seleccione</option>
                                <option value="?cat=-1">Todas</option>
                                ';
                                foreach($categorias as $categoria){
                                    echo '<option value="?cat='.$categoria[1].'">'.$categoria[2].'</option>\n';
                                }
                    echo '
                        </select>
                    </div>
                    <div class="col-md-9 col-md-pull-3">
                        <form action="catalogo.php" method="GET">
                            <div class="input-group">
                                <input class="form-control" name="titulo" type="text" placeholder="Buscar libro por..." aria-label="Buscar libro por..." aria-describedby="btnNavbarSearch" />
                                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                            </div>
                        </form>';

                        echo '
                        <p class="search-results-count">'.count($libros).' resultados encontrados</p>';
                            foreach ($libros as $libro){
                            echo '
                            <section class="search-result-item">
                                <a class="image-link" href="#">';
                                if (strlen($libro[6] == 0 || $libro[6] == NULL)){
                                    echo '<img src="../static/img/libros/defecto.jpg" height="280" width="200" alt="..." class="img-thumbnail">';
                                }
                                else {
                                    echo '<img src="../static/img/libros/'.$libro[6].'" height="280" width="200" alt="..." class="img-thumbnail">';
                                }
                                echo '</a>
                                <div class="search-result-item-body">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <h4 class="search-result-item-heading"><a href="#">'.$libro[0].'</a></h4>
                                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                        <div class="col-sm-3 text-align-center">
                                            <p>Disponibles: '.$libro[4].'</p>
                                            <a class="btn btn-primary btn-info " href="#">Pedir</a>
                                        </div>
                                    </div>
                                </div>
                            </section>';
                        }
                    
                    }

                    if (isset($_GET['cat']) && !isset($_GET['titulo'])){
                        $libros = listar_todos_libros_categoria($_GET['cat'], $_GET['cat']);
                      
                    echo '
                        <div class="col-md-3 col-md-push-9">
                            <p class="text-muted fs-mini">Categorias:</p>
                            <select class="form-select" aria-label="Default select example" onchange="location = this.value;">
                                <option selected disabled hidden select>Seleccione</option>
                                <option value="?cat=-1">Todas</option>
                                ';
                                foreach($categorias as $categoria){
                                    echo '<option value="?cat='.$categoria[1].'">'.$categoria[2].'</option>\n';
                                }
                    echo '
                        </select>
                    </div>
                    <div class="col-md-9 col-md-pull-3">
                        <form action="catalogo.php" method="GET">
                            <div class="input-group">
                                <input class="form-control" name="titulo" type="text" placeholder="Buscar libro por..." aria-label="Buscar libro por..." aria-describedby="btnNavbarSearch" />
                                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                            </div>
                        </form>';

                        echo '
                        <p class="search-results-count">'.count($libros).' resultados encontrados</p>';
                            foreach ($libros as $libro){
                                
                            echo '
                            <section class="search-result-item">
                                <a class="image-link" href="#">';
                                if (strlen($libro[3]) == 0 || $libro[3] == NULL){
                                    echo '<img src="../static/img/libros/defecto.jpg" height="280" width="200" alt="..." class="img-thumbnail">';
                                }
                                else {
                                    echo '<img src="../static/img/libros/'.$libro[3].'" height="280" width="200" alt="..." class="img-thumbnail">';
                                }
                                echo '</a>
                                <div class="search-result-item-body">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <h4 class="search-result-item-heading"><a href="#">'.$libro[0].'</a></h4>
                                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                        <div class="col-sm-3 text-align-center">
                                            <p>Disponibles: '.$libro[2].'</p>
                                            <a class="btn btn-primary btn-info " href="#">Pedir</a>
                                        </div>
                                    </div>
                                </div>
                            </section>';
                        }
                    
                    }
                    ?>
                    <!--
                    <div class="text-align-center">
                        <ul class="pagination pagination-sm">
                            <li class="disabled"><a href="#">Prev</a>
                            </li>
                            <li class="active"><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li><a href="#">5</a>
                            </li>
                            <li><a href="#">Next</a>
                            </li>
                        </ul>
                    </div>
                    -->
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
