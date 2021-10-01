<html>
    <head>
        <meta charset="UTF-8">
        <title>App propina</title>
    </head>
    <body>
        <div><h2>Calculador de propinas</h2></div>
        <form method="POST" ACTION="./processes/calculo.proc.php">
                Total de la cuenta:<br>
            <INPUT TYPE="POST" NAME="cuenta" id="" placeholder="Total de lauenta"><br><br>
                ¿Como ha sido el servicio?<br>
            <select name="servicio" id="">
                <option value="0.3">30% Excelente</option>
                <option value="0.2">20% Bueno</option>
                <option value="0.1">10% Normal</option>
                <option value="0.05">5% Mala</option>
            </select><br><br>
                ¿Cuantas personas van a pagar?<br>
            <INPUT TYPE="number" NAME="personas" id=""><br><br>
            <INPUT TYPE="SUBMIT" value="CALCULA"> <!--Botón para enviar formulario-->
        </form>
        <?php
        if (isset($_REQUEST['formula'])) {
        echo "<p>Total a pagar</p>";
        
        echo "<h3>".$_REQUEST['formula']." por persona.</h3>";
        }
        ?>
    </body>
</html>

