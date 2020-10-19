<?php
    $fech = date("Y-m-d");

    include "conexion.php";
    $result = pg_query($conexion, "SELECT * FROM vista_abandono_inbound WHERE cola='3014' AND fecha='$fech' ORDER BY hora ASC LIMIT 1");
    while ($consulta = pg_fetch_row($result)) {
        //echo $consulta[4];
        echo "3114436548";
    }
    include "cerrar.php";
?>