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

    define("DESCUENTO", 8);
    $precioPantalon = 29.99;
    $numeroPantalones = 3;
    $precioCamisa = 25.99;
    $numeroCamisa = 2;
    $total = $precioPantalon*$numeroPantalones + $precioCamisa*$numeroCamisa;
    $totalDescuento = round(($total - ($total*DESCUENTO)/100), 2);

    printf("El precio de un pantalón es %s <br />", $precioPantalon);
    printf("El precio de una camisa es %s <br />", $precioCamisa);
    printf("El total sin descuento es %s <br />", $total);
    printf("El total con descuento es %s <br />", $totalDescuento);

    ?>
</body>
</html>