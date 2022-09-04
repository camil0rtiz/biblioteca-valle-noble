<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include '../includes/functions.php';
    if (isset($_POST['titulo_libro']) && isset($_POST['id_categoria']) && isset($_POST['stock_libro']) && isset($_POST['isbn_libro']) && isset($_POST['dewey_libro'])
    && isset($_POST['autor_libro'])){
        $titulo_libro = strip_tags($_POST['titulo_libro']);
        $id_categoria = strip_tags($_POST['id_categoria']);
        $stock_libro = strip_tags($_POST['stock_libro']);
        $isbn_libro = strip_tags($_POST['isbn_libro']);
        $dewey_libro = strip_tags($_POST['dewey_libro']);
        $autor_libro = strip_tags($_POST['autor_libro']);
        $id_libro = strip_tags($_POST['id_libro']);
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
                        <form action="actualizar_libro.php" method="POST" id="formulario" enctype="multipart/form-data">
                            <input type="hidden" name="id_libro" id="id_libro" class="form-control" value="'.$id_libro.'">
                            <div class="mb-3 form-group">
                                <label for="">Título</label>
                                <input type="text" name="titulo_libro" id="tituloInput" class="form-control" value="'.$libro[1].'">
                                <div id="validez_titulo"></div>
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
                                <input type="text" name="isbn_libro" id="isbn_libroInput" class="form-control" value="'.$libro[4].'">
                                <div id="validez_isbn"></div>
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
                                
                                echo '<input type="file" style="display:none;" name="img_libro" id="img_libroInput" accept="image/png, image/jpeg, image/jpg" class="form-control" min="1">
                            </div>
                            <button type="button" class="btn btn-sm btn-primary" id="cambiar_imagen">Cambiar imagen</button>
                            <br><br>
                            <div class="mb-3 form-group">
                                <label for="">Stock</label>
                                <input type="number" name="stock_libro" id="stock_libro" class="form-control" min="1" value="'.$libro[7].'">
                            </div>
                            <!--
                            <div class="mb-3 form-group">
                                <label for="">Estado del libro</label>
                                <select class="form-control" disabled>
                                    <option>Disponible</option>
                                    <option>No disponible</option>
                                </select>
                            </div>
                            -->
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
    </div>';
}
}
?>
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
    <script>
    var subject = document.getElementById("isbn_libroInput").value;
    
    document.getElementById("isbn_libroInput").addEventListener("change", iese);
    function iese(){
        var subject = document.getElementById("isbn_libroInput").value;
        var validarISBN;
        var regex = /^(?:ISBN(?:-1[03])?:? )?(?=[0-9X]{10}$|(?=(?:[0-9]+[- ]){3})[- 0-9X]{13}$|97[89][0-9]{10}$|(?=(?:[0-9]+[- ]){4})[- 0-9]{17}$)(?:97[89][- ]?)?[0-9]{1,5}[- ]?[0-9]+[- ]?[0-9]+[- ]?[0-9X]$/;
        if (regex.test(subject)) {
            // Remove non ISBN digits, then split into an array
            var chars = subject.replace(/[- ]|^ISBN(?:-1[03])?:?/g, "").split("");
            // Remove the final ISBN digit from `chars`, and assign it to `last`
            var last = chars.pop();
            var sum = 0;
            var check, i;

            if (chars.length == 9) {
                // Compute the ISBN-10 check digit
                chars.reverse();
                for (i = 0; i < chars.length; i++) {
                    sum += (i + 2) * parseInt(chars[i], 10);
                }
                check = 11 - (sum % 11);
                if (check == 10) {
                    check = "X";
                } else if (check == 11) {
                    check = "0";
                }
            } 
            else {
                // Compute the ISBN-13 check digit
                for (i = 0; i < chars.length; i++) {
                    sum += (i % 2 * 2 + 1) * parseInt(chars[i], 10);
                }
                check = 10 - (sum % 10);
                if (check == 10) {
                    check = "0";
                }
            }

            if (check == last) {
                document.getElementById("validez_isbn").innerHTML = "<p>El ISB ingresado es válido</p>";
                validarIBSN = true;
                //alert("Valid ISBN");
            } 
            else {
                document.getElementById("validez_isbn").innerHTML = "<p>El ISB ingresado es inválido</p>";
                //alert("Invalid ISBN check digit");
                validarIBSN = false;
            }
        } 
        else {
            document.getElementById("validez_isbn").innerHTML = "<p>El ISB ingresado es inválido</p>";
            //alert("Invalid ISBN");
            validarIBSN = false;
        }
    }

    document.addEventListener("DOMContentLoaded", function(){
        document.getElementById("formulario").addEventListener("submit", validarFormulario);
    });
    function validarFormulario(evento){
        evento.preventDefault();
        var titulo_libro = document.getElementById("tituloInput").value;
        
        if (titulo_libro.length == 0){
            document.getElementById("validez_titulo").innerHTML = "<p>El título de libro no puede estar vacío</p>";
            return;
        }
        if(validarIBSN == false){
            document.getElementById("validez_isbn").innerHTML = "<p>El ISBN no puede ser inválido</p>";
            return;
        }
        this.submit();

    }
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../static/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../static/assets/demo/chart-area-demo.js"></script>
    <script src="../assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="../static/js/datatables-simple-demo.js"></script>
</body>

</html>

