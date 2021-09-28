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
    $descuentoZapatos = 12;
    $precioPantalon = 29.99;
    $numeroPantalones = 3;
    $precioCamisa = 25.99;
    $numeroCamisa = 2;
    $precioZapatos = 45.99;
    $precioZapatosDescuento += $precioZapatos - ($precioZapatos*($descuentoZapatos/100)); 

    $total = $precioPantalon*$numeroPantalones + $precioCamisa*$numeroCamisa;
    $totalDescuento = $total+$precioZapatos - ($total*DESCUENTO)/100 - ($precioZapatos - $precioZapatosDescuento);

    printf("El precio de un pantalón es %s <br />", $precioPantalon);
    printf("El precio de una camisa es %s <br />", $precioCamisa);
    printf("El precio de los zapatos sin descuento es de %s <br />", $precioZapatos);
    printf("El precio de los zapatos con descuento es de %0.2f <br />", $precioZapatosDescuento);
    printf("El total sin descuento es %s <br />", $total);
    printf("El total con descuento es %0.2f <br />", $totalDescuento);    ?>
</body>
</html>