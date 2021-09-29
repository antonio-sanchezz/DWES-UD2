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

$text = "Mensaje Secreto";

echo $text;
echo "<br>";
echo("Tipo de variable: " . gettype($text));
echo "<br>";
echo("Tipo string: " . var_export(is_string($text)));
echo "<br>";
echo("Tipo entero: " . var_export(is_integer($text)));
echo "<br>";
echo "<hr>";
//--------------------------
$text = 23.52;

echo($text);
echo "<br>";
echo("Tipo de variable: " . gettype($text));
echo "<br>";
echo("Tipo decimal: " . var_export(is_double($text)));
echo "<br>";
echo("Tipo numerico: " . var_export(is_numeric($text)));
echo "<br>";
echo "<hr>";
//--------------------------

echo((int)$text);
echo "<br>";

$newVar = "6dofaiojasd";

echo $newVar;
echo "<br>";
echo((int)$newVar);


?>
</body>
</html>