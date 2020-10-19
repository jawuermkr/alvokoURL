<?php
    $fech = date("Y-m-d");

    include "conexion.php";
    $anteriores = fopen("anteriores.txt", "a+");
    $filesize = filesize("anteriores.txt");
    $lista = $filesize ? fread($anteriores,filesize("anteriores.txt")) : "'0',";

    $result = pg_query($conexion, "SELECT * FROM vista_abandono_inbound WHERE cola='3014' AND fecha='$fech' AND callid NOT IN (" . trim($lista, ",") . ") ORDER BY hora ASC LIMIT 1");
    while ($consulta = pg_fetch_row($result)) {
        echo $consulta[4];
        fwrite($anteriores, "'" . $consulta[2] . "',")
    }
    include "cerrar.php";
?>
