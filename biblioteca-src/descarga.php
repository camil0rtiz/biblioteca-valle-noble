<?php 


    $archivo = $_REQUEST['file'];
    $ruta_archivo = '/static/img/'. $archivo;
    $size =filesize($ruta_archivo);

    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.$archivo.'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . $size);
    readfile($$ruta_archivo);

    readfile($ruta_archivo);


?>
