<?php
include('includes/db.php');
$rut    = $_REQUEST['cedula'];

//Verificando si existe algun cliente en bd ya con dicha cedula asignada
//Preparamos un arreglo que es el que contendrá toda la información
$jsonData = array();
$selectQuery   = ("SELECT rut,nombre,estado FROM usuario WHERE rut='".$rut."' ");
$query         = mysqli_query($conn, $selectQuery);
$totalCliente  = mysqli_num_rows($query);
$vecino = mysqli_fetch_all($query, MYSQLI_ASSOC);

//traer datos del cliente , nombre, estado, etc

  //Validamos que la consulta haya retornado información
  if( $totalCliente <= 0 ){
    $jsonData['success'] = 0;
    $jsonData['message'] = '';
    //$jsonData['message'] = '';
  } else if($vecino[0]['estado'] == 'vencido'){
    //Si hay datos entonces retornas algo
    $jsonData['success'] = 1;
    $jsonData['vecino'] = $vecino[0];
    $jsonData['message'] = '<p style="color:red;">Ésta cuenta está vencida <strong>(' .$rut.')<strong></p>';
  }
  else if($vecino[0]['estado'] == 'habilitado'){

    $jsonData['success'] = 2;
    $jsonData['message'] = '<p style="color:red;">Ésta cuenta, aún está vigente <strong>(' .$rut.')<strong></p>';

  }else if($vecino[0]['estado'] == 'pendiente'){

    $jsonData['success'] = 3;
    $jsonData['message'] = '<p style="color:red;">Vecino está pendiente <strong>(' .$rut.')<strong></p>';

  }

//Mostrando mi respuesta en formato Json
header('Content-type: application/json; charset=utf-8');
echo json_encode( $jsonData );
?>