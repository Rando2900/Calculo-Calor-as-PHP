<h1>Calculo de Calorias</h1>
<h3>Dietetica y nutrición</h3>

<body>
    <?php
    $Peso = $_POST['Peso'];
    $Libras = ($Peso * 2.2);



    if ($_POST['Actividad'] == "Actividad1") {
        $Actividad = 1;
    } elseif ($_POST['Actividad'] == "Actividad2") {
        $Actividad = 2;
    } else {
        $Actividad = 3;
    }

    if ($_POST['Objetivo'] == "Objetivo1") {
        $Objetivo = 1;
    } elseif ($_POST['Objetivo'] == "Objetivo2") {
        $Objetivo = 2;
    } else {
        $Objetivo = 3;
    }

    if ($_POST['Tipo'] == "Tipo1") {
        $Tipo = 1;
    } elseif ($_POST['Tipo'] == "Tipo2") {
        $Tipo = 2;
    } else {
        $Tipo = 3;
    }

    switch (true) {
        case (($Actividad == 1) && ($Objetivo == 1)):

        case (($Actividad == 1) && ($Objetivo == 2)):
            $RangoKcalMin = $Libras * 12;
            $RangoKcalMax = $RangoKcalMin = $Libras * 10;
            $RangoKcalMax = $Libras * 12;
            break;
            $Libras * 14;
            break;
        case (($Actividad == 1) && ($Objetivo == 3)):
            $RangoKcalMin = $Libras * 16;
            $RangoKcalMax = $Libras * 18;
            break;
        case (($Actividad == 2) && ($Objetivo == 1)):
            $RangoKcalMin = $Libras * 12;
            $RangoKcalMax = $Libras * 14;
            break;
        case (($Actividad == 2) && ($Objetivo == 2)):
            $RangoKcalMin = $Libras * 14;
            $RangoKcalMax = $Libras * 16;
            break;
        case (($Actividad == 2) && ($Objetivo == 3)):
            $RangoKcalMin = $Libras * 18;
            $RangoKcalMax = $Libras * 20;
            break;
        case (($Actividad == 3) && ($Objetivo == 1)):
            $RangoKcalMin = $Libras * 14;
            $RangoKcalMax = $Libras * 16;
            break;
        case (($Actividad == 3) && ($Objetivo == 2)):
            $RangoKcalMin = $Libras * 16;
            $RangoKcalMax = $Libras * 18;
            break;
        case (($Actividad == 3) && ($Objetivo == 3)):
            $RangoKcalMin = $Libras * 20;
            $RangoKcalMax = $Libras * 22;
            break;
    }


    switch (true) {
        case ($Objetivo == 1):
            $CarboidratosMin = $RangoKcalMin * 0.5 / 4;
            $CarboidratosMax = $RangoKcalMax * 0.5 / 4;
            $ProteinasMin = $RangoKcalMin * 0.25 / 4;
            $ProteinasMax = $RangoKcalMax * 0.25 / 4;
            $GrasaMin = $RangoKcalMin * 0.2 / 9;
            $GrasaMax = $RangoKcalMax * 0.2 / 9;
            break;
        case ($Objetivo == 2):
            $CarboidratosMin = $RangoKcalMin * 0.4 / 4;
            $CarboidratosMax = $RangoKcalMax * 0.4 / 4;
            $ProteinasMin = $RangoKcalMin * 0.3 / 4;
            $ProteinasMax = $RangoKcalMax * 0.3 / 4;
            $GrasaMin = $RangoKcalMin * 0.3 / 9;
            $GrasaMax = $RangoKcalMax * 0.3 / 9;
            break;
        case ($Objetivo == 3):
            $CarboidratosMin = $RangoKcalMin * 0.25 / 4;
            $CarboidratosMax = $RangoKcalMax * 0.25 / 4;
            $ProteinasMin = $RangoKcalMin * 0.4 / 4;
            $ProteinasMax = $RangoKcalMax * 0.4 / 4;
            $GrasaMin = $RangoKcalMin * 0.35 / 4;
            $GrasaMax = $RangoKcalMax * 0.35 / 4;
            break;
    }

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <h4>Peso en KGs: <?php echo $Peso ?></h4>
        <h4>Peso en libras: <?php echo $Libras ?></h4>
        <h4>Rango Kcal: <?php echo $RangoKcalMin ?> (Min) <?php echo $RangoKcalMax ?></h4>
</br></br>

        <h3>Distribución de Macronutrientes</h3>
        <br>
        <ul>
            <li><h4>Gramos de carbohidratos: <?php echo $CarboidratosMin ?> (min) / <?php echo $CarboidratosMax ?> (GrasaMax) </h4></li>
            <li><h4>Gramos de proteinas: <?php echo $ProteinasMin ?> (min) / <?php echo $ProteinasMax ?> (GrasaMax) </h4></li>
            <li><h4>Gramos de grasa: <?php echo $GrasaMin ?> (min) / <?php echo $GrasaMax ?> (GrasaMax) </h4></li>
        </ul>
    </body>

    </html>
</body>