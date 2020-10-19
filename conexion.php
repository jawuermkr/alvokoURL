<?php

// Inicia la conexión al servidor.
$conexion = pg_connect("host=10.206.193.4 dbname=aware port=5432 user=analista password=aware_analista");

//verificamos la conexion
if(!$conexion){
    echo "No se pudo conectar con el servidor";
}