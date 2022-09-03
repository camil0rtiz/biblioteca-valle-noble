<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include '../includes/functions.php';
    if (isset($_POST['titulo_libro']) && isset($_POST['id_categoria']) && isset($_POST['stock_libro']) && isset($_POST['isbn_libro']) && isset($_POST['dewey_libro'])
    && isset($_POST['autor_libro'])){
        $titulo_libro = $_POST['titulo_libro'];
        $id_categoria = $_POST['id_categoria'];
        $stock_libro = $_POST['stock_libro'];
        $isbn_libro = $_POST['isbn_libro'];
        $dewey_libro = $_POST['dewey_libro'];
        $autor_libro = $_POST['autor_libro'];
        $id_libro = $_POST['id_libro'];
        if (isset($_FILES['img_libro']['name']) && $_FILES['img_libro']['name'] > 0){
            //echo var_dump($_FILES['img_libro']['name']);
            $img_libro = $_FILES['img_libro']['name']; //$_FILES['direccion'];
            $tamanio_img = $_FILES['img_libro']['size']; // tamaño en memoria
            $formato_img = $_FILES['img_libro']['type'];
            $carpeta_guardado = $_SERVER['DOCUMENT_ROOT'] . '/static/img/libros/';
            $x = editar_libro($id_libro, $titulo_libro, $id_categoria, $stock_libro, $isbn_libro, $dewey_libro, $autor_libro, $img_libro);
            header('Location: listar_libros.php?msg=1');

        }
        else{
            $x = editar_libro($id_libro, $titulo_libro, $id_categoria, $stock_libro, $isbn_libro, $dewey_libro, $autor_libro, '0');
            header('Location: listar_libros.php?msg=1');
        }
    }
    else {
        echo "algun paramentro no se detecto";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    //include '../includes/functions.php';
    if (!isset($_GET['id_libro'])){
        echo "Debe seleccionar el libro";
    }
    else {
        include '../includes/functions.php';
        $categorias = listar_categorias();
        $id_libro = $_GET['id_libro'];
        $libro = buscar_libro_by_id($id_libro);
        $categoria_libro = obtener_categoria_libro($id_libro);
        echo var_dump($categoria_libro);
        include 'partes/head.php';
        echo '
<body class="sb-nav-fixed">';
        include('partes/nav.php');
        include('partes/sidebar.php');
        echo '
    <!-- body content -->
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <div class="card mt-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Actualizar libro
                    </div>
                    <div class="card-body">
                        <form action="actualizar_libro.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id_libro" id="id_libro" class="form-control" value="'.$id_libro.'">
                            <div class="mb-3 form-group">
                                <label for="">Título</label>
                                <input type="text" name="titulo_libro" id="titulo_libro" class="form-control" value="'.$libro[1].'">
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Categoría</label>
                                <select name="id_categoria" class="form-control" id="categoria_libroInput" required>
                                    <option value="'.$categoria_libro[0].'" disabled>'.$categoria_libro[1].'</option>';

                                foreach ($categorias as $categoria) {
                                    echo '<option value="'.$categoria[1].'">'.$categoria[2].'</option>';
                                }
                                echo '
                                </select>
                            </div>';
                            echo '
                            <div class="mb-3 form-group">
                                <label for="">ISBN</label>
                                <input type="text" name="isbn_libro" id="isbn_libro" class="form-control" value="'.$libro[4].'">
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Dewey</label>
                                <input type="text" name="dewey_libro" id="dewey_libro" class="form-control" value="'.$libro[5].'">
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Autor</label>
                                <input type="text" name="autor_libro" id="autor_libro" class="form-control" value="'.$libro[2].'">
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Imagen de portada</label>';
                                if (strlen($libro[6] == 0)){
                                    echo '<img src="../static/img/libros/defecto.jpg" height="280" width="200" alt="..." class="img-thumbnail">';
                                }
                                else {
                                    echo '<img src="../static/img/libros/'.$libro[6].'" height="280" width="200" alt="..." class="img-thumbnail">';
                                }
                                
                                echo '<input type="file" style="display:none;" name="img_libro" id="img_libroInput" accept="image/png, image/jpeg, image/jpg" class="form-control" min="1" value="'.$libro[6].'">
                            </div>
                            <button type="button" class="btn btn-sm btn-primary" id="cambiar_imagen">Cambiar imagen</button>
                            <br><br>
                            <div class="mb-3 form-group">
                                <label for="">Stock</label>
                                <input type="number" name="stock_libro" id="stock_libro" class="form-control" min="1" value="'.$libro[7].'">
                            </div>
                            <div class="mb-3 form-group">
                                <label for="">Estado del libro</label>
                                <select class="form-control">
                                    <option>Disponible</option>
                                    <option>No disponible</option>
                                </select>
                            </div>
                            <button type="submit" class="w-100 btn btn-lg btn-outline-primary">Actualizar libro</button>
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
    <script>
    const btn = document.getElementById("cambiar_imagen");
    btn.addEventListener("click", () => {
    const form = document.getElementById("img_libroInput");

    if (form.style.display === "none") {
        // 👇️ this SHOWS the form
        form.style.display = "block";
    } else {
        // 👇️ this HIDES the form
        form.style.display = "none";
    }
});

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../static/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../static/assets/demo/chart-area-demo.js"></script>
    <script src="../assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="../static/js/datatables-simple-demo.js"></script>
    <script src="../static/js/validar_editar.js"></script>
</body>

</html>
        ';
    }
}
?>
