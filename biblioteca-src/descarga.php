<?php 


    $archivo = $_REQUEST['file'];
    $ruta_archivo = 'static/img/'. $archivo;
    $size =filesize($ruta_archivo);

    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header("Content-Disposition: attachment; filename=".$archivo."");
    header('Content-Transfer-Encoding: binary');
    header('Content-Length:' . $size);

    readfile($ruta_archivo);


?>
