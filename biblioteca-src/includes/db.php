<?php

$userdb = 'G21taller';
$passdb = 'G21taller1052';
$dbname = 'G21taller_bd';
$host = 'mysqltrans.face.ubiobio.cl';

// $userdb = 'root';
// $passdb = 'camilo';
// $dbname = 'biblioteca';
// $host = 'host.docker.internal';

$conn = new mysqli($host, $userdb, $passdb, $dbname);
$conn->set_charset("utf8"); // Se setea default_charset para la base de datos
if ($conn->connect_error){
    die('Error al conectar al servidor SQL' . $conn->connect_error);
}

