<html>
    <head>
        <title>Contador</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </head>
<body>
    <div class="container">
    <h1>Consulta Abandonos WCB T&T<h2></br>
        <small><?php echo date('Y-m-d | H:i:s'); ?></small>
        <div class="row">
            <div class="col-md-12">
                <?php
                $fech = date("Y-m-d");

                // AGENTE LIBRE
                include "conexion.php";
                $result = pg_query($conexion, "SELECT * FROM empleado_proyecto ep
                INNER JOIN agent_status ag
                ON ep.empleado_rut = ag.agente_id
                WHERE ep.proyecto_id = '14' AND ag.status = 'IDLE'");
                while ($consulta = pg_fetch_array($result)) {
                    $rutAg = $consulta['empleado_rut'];
                }
                    //Si hay un agente libre se carga la url con el número del abandono.
                    if(strlen($rutAg) > 0){

                        echo "<script>
                        
                        // NÚMERO EN LA LISTA
                        function numAbandono()
                        {
                            var numer = $.ajax({
                                url:'numero_abandono.php',
                                dataType:'text',
                                async:false
                                }).responseText;

                                alert(numer);

                        // fetch(`http://10.206.193.4/api/wsapi.php?action=MakeCall&token=ew3QcS3Zq3&channel=SIP/TRUNK-ISABEL/\${numer}&ext=3014&contexto=aware_cola`)

                        }
                        setInterval(numAbandono, 1000);

                        
                        </script>";
                    }

                    echo $rutAg;
                include "cerrar.php";
                ?>
            </div>
            <div class="col-md-12">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>