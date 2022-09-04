<?php
/* funciones que seran usadas en la biblioteca */

/*funcion para listar todo el catalogo de libros */
function listar_libros(){
    include 'db.php';
    $sql_query = "SELECT titulo_libro, autor_libro, dewey, isbn, stock, id_libro, foto_portada FROM libro;";
    $stmt = $conn->prepare($sql_query);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_all();
    $stmt->close();
    $conn->close();
    return $row;
}

/* funcion para buscar libro segun la cadena de texto ingresada en el campo de busqueda */
function buscar_libro($termino){
    include 'db.php';
    $sql_query = "SELECT titulo_libro, autor_libro, stock, foto_portada FROM libro WHERE titulo_libro LIKE CONCAT('%',?,'%') ORDER BY stock DESC;";
    $stmt = $conn->prepare($sql_query);
    $stmt->bind_param('s', $termino);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_all();
    $stmt->close();
    $conn->close();
    return $row;
}

/* funcion para filtrar libro por categoria */
function buscar_libro_by_id($id_libro){
    include 'db.php';
    $sql_query = "SELECT * FROM libro WHERE id_libro = ?;";
    $stmt = $conn->prepare($sql_query);
    $stmt->bind_param('i', $id_libro);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_row();
    $stmt->close();
    $conn->close();
    return $row;
}
/* funcion para mostrar categorias */
function listar_categorias(){
    include 'db.php';
    $sql_query = "SELECT * FROM categoria;";
    $stmt = $conn->prepare($sql_query);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_all();
    $stmt->close();
    $conn->close();
    return $row;
}

/* funcion para listar libros buscados por titulo pero por categoria */
function listar_libros_by_categoria($cod_dewey, $titulo){
    include 'db.php';
    //$sql_query = "SELECT * FROM libro, tiene, categoria WHERE categoria.id_categoria = tiene.id_categoria AND tiene.id_libro = libro.id_libro AND libro.titulo_libro LIKE '%?%';";
    if ($cod_dewey == -1){
        $todo_by_termino = buscar_libro($titulo);
        return $todo_by_termino;// Retorna todos los libros
    }
    else {
        $sql_query = "SELECT titulo_libro, autor_libro, stock, foto_portada FROM libro, tiene, categoria WHERE categoria.cod_dewey = ? AND categoria.cod_dewey = tiene.cod_dewey AND tiene.id_libro = libro.id_libro AND libro.titulo_libro LIKE CONCAT('%',?,'%');";
        $stmt = $conn->prepare($sql_query);
        $stmt->bind_param('is', $cod_dewey, $titulo);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_all();
        $stmt->close();
        $conn->close();
        return $row;
    }
}

/* funcion para listar todos los libros segun categoria, sin buscarlos */
function listar_todos_libros_categoria($cod_dewey, $cat){
    include 'db.php';
    if ($cat == -1){
        $sql_query = "SELECT titulo_libro, autor_libro, stock, foto_portada FROM libro;";
        $stmt = $conn->prepare($sql_query);
    }
    else{
        $sql_query = "SELECT titulo_libro, autor_libro, stock, foto_portada FROM libro, tiene, categoria WHERE categoria.cod_dewey = ? AND categoria.cod_dewey = tiene.cod_dewey AND tiene.id_libro = libro.id_libro;";
        $stmt = $conn->prepare($sql_query);
        $stmt->bind_param('i', $cod_dewey);
    }
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_all();
    $stmt->close();
    $conn->close();
    return $row;

}

function obtener_categoria_libro($id_libro){
    include 'db.php';
    $sql_query = "SELECT categoria.cod_dewey, categoria.nombre_categoria, libro.id_libro FROM libro, tiene, categoria WHERE categoria.cod_dewey = tiene.cod_dewey AND tiene.id_libro = libro.id_libro AND libro.id_libro = ?;";
    $stmt = $conn->prepare($sql_query);
    $stmt->bind_param('i', $id_libro);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_row();
    $stmt->close();
    $conn->close();
    return $row;
}


/* funcion para guardar al vecino */
function registrar_vecino($rut, $nombre, $a_paterno, $a_materno, $correo, $direccion, $fono, $contrasena, $id_membresia, $estado,$carpeta_destino,$nombre_img){
    try {
        include 'db.php';

        $consulta3 = 'SELECT COUNT(*) FROM usuario WHERE rut = ?';
        $stmt3 = $conn->prepare($consulta3);
        $stmt3->bind_param('s', $rut);
        $stmt3->execute();
        $result = $stmt3->get_result();
        $row = $result->fetch_assoc();
        $contador = $row['COUNT(*)'];

        

        if ($contador == 0 ){
            
            $estado_vecino = $estado;
            $id_rol = 1;
            $password = password_hash($contrasena,PASSWORD_DEFAULT);
            $fecha_actual = date('Y-m-d');
            $nombre = ucfirst(strtolower(htmlspecialchars($nombre)));
            $a_paterno = ucfirst(strtolower(htmlspecialchars($a_paterno)));
            $a_materno = ucfirst(strtolower(htmlspecialchars($a_materno)));
            $correo = strtolower(htmlspecialchars($correo));
            $direccion = htmlspecialchars($direccion);
            
            
            if($estado_vecino =='habilitado'){
                
                $fecha_activacion = date('Y-m-d');

                if($id_membresia == '1'){
                    $fecha_vencimiento = strtotime('+6 months', strtotime($fecha_activacion));
                    $fecha_vencimiento = date('Y-m-d' , $fecha_vencimiento);
                }else{
                    $fecha_vencimiento = strtotime('+12 months', strtotime($fecha_activacion));
                    $fecha_vencimiento = date('Y-m-d' , $fecha_vencimiento);
                }
            
            
            }
            else{
                move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre_img);
                $fecha_activacion = NULL;
                $fecha_vencimiento = NULL;
            }

            $consulta="INSERT INTO usuario (nombre, apellido_paterno, apellido_materno, rut, correo, clave,comprobante,estado, direccion, telefono, id_rol) 
            VALUES (?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $conn->prepare($consulta);
            $stmt->bind_param('ssssssssssi', $nombre, $a_paterno, $a_materno, $rut , $correo, $password,$nombre_img,$estado_vecino, $direccion, $fono, $id_rol);
            $stmt->execute();
            echo 'hola camilo';
            $key = mysqli_insert_id($conn);
            $consulta2 = "INSERT INTO paga (id_usuario,id_membresia, fecha_pago, fecha_vencimiento, fecha_activacion) VALUES (?,?,?,?,?) ";
            $stmt_2 = $conn->prepare($consulta2);
            $stmt_2->bind_param('iisss',$key,$id_membresia, $fecha_actual,$fecha_vencimiento,$fecha_activacion);
            $stmt_2->execute();
            echo 'hola camilo';
            $conn->close();
            return 1;
        }else{

            return 2;

        }

    } catch (Exception $e) {
        $msg = $e->getMessage();
        echo $msg;
        return 0;
    }
}

function listar_vecinos(){
    include 'db.php';
    // $sql_query = "SELECT id_usuario, nombre, apellido_paterno, apellido_materno, rut, correo, telefono, direccion FROM usuario WHERE usuario.estado = 'habilitado'";
    $sql_query = "SELECT u.id_usuario, u.nombre, u.apellido_paterno, u.apellido_materno, u.rut, u.correo, u.telefono, u.direccion, p.id_membresia,p.fecha_vencimiento 
    FROM usuario u , paga p where u.id_usuario = p.id_usuario and u.estado = 'habilitado'";
    $stmt = $conn->prepare($sql_query);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
    $conn->close();
    return $row;
}

function editar_vecino($id, $nombre, $a_paterno, $a_materno, $correo, $direccion, $fono)
{

    $nombre = ucfirst(strtolower(htmlspecialchars($nombre)));
    $a_paterno = ucfirst(strtolower(htmlspecialchars($a_paterno)));
    $a_materno = ucfirst(strtolower(htmlspecialchars($a_materno)));
    $correo = strtolower(htmlspecialchars($correo));
    $direccion = htmlspecialchars($direccion);
    
    include 'db.php';
    $sql_query = "UPDATE usuario SET nombre = ? , apellido_paterno = ?, apellido_materno = ?, correo = ?, direccion = ?, telefono = ? WHERE id_usuario = ?";
    $stmt = $conn->prepare($sql_query);
    $stmt->bind_param('ssssssi', $nombre, $a_paterno, $a_materno, $correo, $direccion, $fono, $id);
    $stmt->execute();
    $stmt->close();
    return 1;
}

function listar_vecinos_pendientes(){
    include 'db.php';
    $sql_query = "SELECT u.id_usuario, u.nombre, u.apellido_paterno, u.comprobante ,u.apellido_materno, u.rut, u.correo, u.telefono, u.direccion, p.id_membresia 
    FROM usuario u , paga p where u.id_usuario = p.id_usuario and u.estado = 'pendiente'";
    $stmt = $conn->prepare($sql_query);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
    $conn->close();
    return $row;;
}

function cambiar_estado_vecino($id,$id_membresia)
{

    $fecha_activacion = date('Y-m-d');

    if($id_membresia == '1'){
        $fecha_vencimiento = strtotime('+6 months', strtotime($fecha_activacion));
        $fecha_vencimiento = date('Y-m-d' , $fecha_vencimiento);
    }elseif($id_membresia == '2'){
        $fecha_vencimiento = strtotime('+12 months', strtotime($fecha_activacion));
        $fecha_vencimiento = date('Y-m-d' , $fecha_vencimiento);
    }

    $estado = 'habilitado';
    include 'db.php';
    $sql_query = "UPDATE usuario SET estado = ? WHERE id_usuario = ?";
    $stmt = $conn->prepare($sql_query);
    $stmt->bind_param('si', $estado,$id);
    $sql_query2 = "UPDATE paga SET fecha_activacion = ?, fecha_vencimiento = ? WHERE id_usuario = ?";
    $stmt2 = $conn->prepare($sql_query2);
    $stmt2->bind_param('ssi', $fecha_activacion,$fecha_vencimiento,$id);
    $stmt->execute();
    $stmt2->execute();
    $stmt->close();
    $stmt2->close();
    return 1;
}

function membresia_vencida($id){

    include 'db.php';
    $estado = 'pendiente';
    $sql_query = "UPDATE usuario SET estado = ? WHERE id_usuario = ?";
    $stmt = $conn->prepare($sql_query);
    $stmt->bind_param('si', $estado, $id);
    $stmt->execute();
    $stmt->close();
    return 1;

}


function agregar_libro($titulo_libro, $id_categoria, $cantidad, $isbn_libro, $dewey_libro, $autor_libro, $carpeta_destino ,$img_libro){
    include 'db.php';
    $fecha = new DateTime();
    $random_time = $fecha->getTimestamp();
    $path_completo = $carpeta_destino.$random_time.'-'.$img_libro; // localizacion de la imagen de portada
    $portada_libro = $random_time.'-'.$img_libro;
    move_uploaded_file($_FILES['img_libro']['tmp_name'], $path_completo);
    //echo var_dump($_FILES);
    $sql_query = "INSERT INTO libro(titulo_libro, autor_libro, isbn, stock, dewey, foto_portada) VALUES (?,?,?,?,?,?);";
    $sql_query_relacion = "INSERT INTO tiene(cod_dewey, id_libro) VALUES (?,?);";
    $stmt = $conn->prepare($sql_query);
    $stmt_2 = $conn->prepare($sql_query_relacion);
    $stmt->bind_param('ssssis', $titulo_libro, $autor_libro, $isbn_libro, $cantidad, $dewey_libro, $portada_libro);
    
    $stmt->execute();
    $last_id_libro = $stmt->insert_id;
    $stmt_2->bind_param('ii', $id_categoria, $last_id_libro);
    $stmt_2->execute();
    $stmt->close();
    $stmt_2->close();
    $conn->close();
    
    return 1;
}
function editar_libro($id_libro, $titulo_libro, $id_categoria, $cantidad, $isbn_libro, $dewey_libro, $autor_libro, $img_libro){
    if ($img_libro == '0'){
        include 'db.php';
        $sql_query = "UPDATE libro SET titulo_libro = ?, autor_libro = ?, isbn = ?, stock = ?, dewey = ? WHERE id_libro = ?;";
        $sql_query_relacion = "UPDATE tiene SET cod_dewey = ? WHERE id_libro = ?;";
        $stmt = $conn->prepare($sql_query);
        $stmt_2 = $conn->prepare($sql_query_relacion);
        $stmt_2->bind_param('ii', $id_categoria, $id_libro);
        $stmt->bind_param('sssssi', $titulo_libro, $autor_libro, $isbn_libro, $cantidad, $dewey_libro, $id_libro);
        $stmt->execute();
        $stmt_2->execute();
        $stmt->close();
        $stmt_2->close();
        $conn->close();
        return 1;
    }
    else{
        try {
            include 'db.php';
            $sql_query = "UPDATE libro SET titulo_libro = ?, autor_libro = ?, isbn = ?, stock = ?, dewey = ?, foto_portada = ? WHERE id_libro = ?;";
            $sql_query_relacion = "UPDATE tiene SET cod_dewey = ? WHERE id_libro = ?;";            
            $fecha = new DateTime();
            $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/static/img/libros/';

            $random_time = $fecha->getTimestamp();
            $path_completo = $carpeta_destino.$random_time.'-'.$img_libro; // localizacion de la imagen de portada
            $portada_libro = $random_time.'-'.$img_libro;
            move_uploaded_file($_FILES['img_libro']['tmp_name'], $path_completo);
            $stmt = $conn->prepare($sql_query);
            $stmt->bind_param('sssisss', $titulo_libro, $autor_libro, $isbn_libro, $cantidad, $dewey_libro, $portada_libro, $id_libro);
            $stmt->execute();
            $stmt->close();
            $stmt_2 = $conn->prepare($sql_query_relacion);
            $stmt_2->bind_param('ii', $id_categoria, $id_libro);
            $stmt_2->execute();
            $stmt_2->close();
            $conn->close();
            return 1;
        } catch (\Throwable $th) {
            return 0;
        }
        
    }
}


function agregar_ejemplar($id_libro, $cantidad, $isbn_libro, $dewey_libro){
    include 'db.php';
    $sql_query = "UPDATE libro SET stock += ? WHERE id = ?;";
    $stmt = $conn->prepare($sql_query);
    $stmt->bind_param('ii', $cantidad, $id_libro);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    return $row;;
}

//funcion que cambia el estado 

function renovar_membresia($id,$id_membresia){
    $fecha_activacion = date('Y-m-d');

    if($id_membresia == '1'){
        $fecha_vencimiento = strtotime('+6 months', strtotime($fecha_activacion));
        $fecha_vencimiento = date('Y-m-d' , $fecha_vencimiento);
    }elseif($id_membresia == '2'){
        $fecha_vencimiento = strtotime('+12 months', strtotime($fecha_activacion));
        $fecha_vencimiento = date('Y-m-d' , $fecha_vencimiento);
    }

    $estado = 'habilitado';
    include 'db.php';
    $sql_query = "UPDATE usuario SET estado = ? WHERE id_usuario = ?";
    $stmt = $conn->prepare($sql_query);
    $stmt->bind_param('si', $estado,$id);
    $sql_query2 = "UPDATE paga SET fecha_pago = ?, fecha_activacion = ?, fecha_vencimiento = ? WHERE id_usuario = ?";
    $stmt2 = $conn->prepare($sql_query2);
    $stmt2->bind_param('sssi',$fecha_activacion,$fecha_activacion,$fecha_vencimiento,$id);
    $stmt->execute();
    $stmt2->execute();
    $stmt->close();
    $stmt2->close();
    return 1;
}

function deshabilitar_vecino($id){

    $estado = 'vencido';
    include 'db.php';
    $sql_query = "UPDATE usuario SET estado = ? WHERE id_usuario = ?";
    $stmt = $conn->prepare($sql_query);
    $stmt->bind_param('si', $estado,$id);
    $stmt->execute();
    $stmt->close();
    return 1;
}
