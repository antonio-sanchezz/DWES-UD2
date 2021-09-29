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
define("MAX_OPERACIONES_DIARIAS", 6);
define("MAX_OPERACIONES_SEMANALES", 30);

echo "El valor de operaciones diarias es mayor o igual que el máximo: " . var_export($operacionesDiarias >= MAX_OPERACIONES_DIARIAS);
echo "<br>";
echo "El valor de operaciones semanales es mayor o igual que el máximo: " . var_export($operacionesSemanales >= MAX_OPERACIONES_SEMANALES);
echo "<br>";
echo "El valor de operaciones diarias es exactamente igual al máximo: " . var_export($operacionesDiarias === MAX_OPERACIONES_DIARIAS);
echo "<br>";
echo "El valor de operaciones diarias es distinto al de operaciones semanales: " . var_export($operacionesDiarias != $operacionesSemanales);

?>
</body>
</html>