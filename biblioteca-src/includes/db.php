<?php

$userdb = '';
$passdb = '';
$dbname = '';
$host = '';

$conn = new mysqli($host, $userdb, $passdb, $dbname);
$conn->set_charset("utf8"); // Se setea default_charset para la base de datos
if ($conn->connect_error){
    die('Error al conectar al servidor SQL' . $conn->connect_error);
}

