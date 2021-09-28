<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $operacionesDiarias = "5";
    $operacionesSemanales = 25;
    $mensaje;

    define("MAX_OPERACIONES_DIARIAS", 6);
    define("MAX_OPERACIONES_SEMANALES", 30);

    if ($operacionesDiarias >= MAX_OPERACIONES_DIARIAS) {
        $mensaje = "El valor de operaciones diarias es mayor o igual que el máximo";
    }

    ?>
</body>
</html>