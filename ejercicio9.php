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

echo("Donde se encuentra el arhivo en el servidor: " . $_SERVER['PHP_SELF'] . "<br>");
echo("Direccion del servidor: " . $_SERVER['SERVER_ADDR'] . "<br>");
echo("Nombre del servidor: " . $_SERVER['SERVER_NAME'] . "<br>");
echo("La raiz de carpetas del servidor: " . $_SERVER['DOCUMENT_ROOT'] . "<br>");
echo("Direccion remota del servidor: " . $_SERVER['REMOTE_ADDR'] . "<br>");
echo("Metodo de obtencion de la pagina" . $_SERVER['REQUEST_METHOD'] . "<br>");

function ejemplo() {
    $varLocal = 33;
    STATIC $arEstatica = 22;
    GLOBAL $varGlobal;
}

$varGlobal = 11;

echo($varLocal);
echo($varEstatica);
echo($varGlobal);


?>
</body>
</html>