<?php
    $fech = date("Y-m-d");

    include "conexion.php";
    $result = pg_query($conexion, "SELECT * FROM empleado_proyecto ep
    INNER JOIN agent_status ag
    ON ep.empleado_rut = ag.agente_id
    WHERE ep.proyecto_id = '14' AND ag.status = 'IDLE'");
    while ($consulta = pg_fetch_array($result)) {
        $rutAg = $consulta['empleado_rut'];
    }
    echo $rutAg;
    include "cerrar.php";
?>