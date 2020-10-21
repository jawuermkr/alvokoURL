<html>
    <head>
        <title>Contador</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

		<script type="text/javascript">

		function numAbandono()
		{
			var numer = $.ajax({
				url:'numero_abandono.php',
				dataType:'text',
				async:false
			    }).responseText;

			document.getElementById("num").innerHTML = numer;
		}
		setInterval(numAbandono, 1000);
		</script>
        <script type="text/javascript">

        function agentLibre()
        {
            var tablad = $.ajax({
                url:'agente_libre.php',
                dataType:'text',
                async:false
                }).responseText;

            document.getElementById("agen").innerHTML = tablad;
        }
        setInterval(agentLibre, 1000);
        </script>
    </head>
<body>
    <div class="container">
    <h1>Consulta Abandonos WCB T&T<h2></br>
        <small><?php echo date('Y-m-d | H:i:s'); ?></small>
        <div class="row">
            <div class="col-md-12">
            </br><section>
                <p>Primer registro en abandono:</p>
                <b><p id="num"></p></b>
            </section>
            <section>
                <p>Agente Disponible:</p>
                <b><p style="color:red;" id="agen"></p></b>
            </section>

            </div>
            <div class="col-md-12">
            <!--- Con JavaScript --->
            <script>
                function abrir_otra() {
                window.open("http://10.206.193.4/api/wsapi.php?action=MakeCall&token=ew3QcS3Zq3&channel=SIP/TRUNK-ISABEL/" . $num . "&ext=" . $cola . "&contexto=aware_cola", "nom_page", "features");
                }
            </script>
            <!--- Con PHP --->
                <?php
                    $num = "3114436548";
                    $cola = "3014";

                    $url = "http://10.206.193.4/api/wsapi.php?action=MakeCall&token=ew3QcS3Zq3&channel=SIP/TRUNK-ISABEL/" . $num . "&ext=" . $cola . "&contexto=aware_cola";
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>