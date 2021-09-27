<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 02</title>
</head>
<body>
    <?php

    define("PI", 3.1416);
    $base = 8;
    $altura = 4;
    $diagonalMayor = 5;
    $diagonalMenor = 6;
    $r = 7;


    $areaTriangulo = ($base*$altura)/2;
    $areaCuadrado = $base*$altura;
    $areaRombo = ($diagonalMayor*$diagonalMenor);
    $areaCirculo = PI*$r*$r;

    echo ("El triángulo de radio $r cm tiene un área de $areaCirculo <br />");
    echo ("El cuadrado de lados $base y $altura cm tiene un área de $areaCuadrado <br />");
    echo ("El rombo de diagonal mayor $diagonalMayor cm y diagonal menor $diagonalMenor cm tiene un área de $areaRombo <br />");
    echo ("El circulo de radio $r cm tiene un área de $areaCirculo");

    ?>   
</body>
</html>