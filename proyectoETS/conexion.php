<?php

/* ARCHIVO DE PHP PARA CONEXION CON SQL SERVER */
require_once 'data.php';

try {
    $connection = new PDO("mysql:host=$instance;dbname=$db", $uid, $key);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexión Establecida";

} catch (Exception $e) {
    echo "Ocurrió un error con la base de datos: " . $e->getMessage();
}