<?php 

    include 'includes/functions.php';
    $fecha_actual = date('Y-m-d');

    $vecinos = listar_vecinos();

    foreach($vecinos as $vecino){

        echo $vecino['id_usuario'] . '</br>';
        echo $vecino['fecha_vencimiento']. '</br>';
        echo $fecha_actual . '</br>';
        
        if($fecha_actual == $vecino['fecha_vencimiento']){

            membresia_vencida($vecino['id_usuario']);
            
        }
    }
?>