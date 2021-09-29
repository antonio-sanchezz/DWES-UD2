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
echo(gettype($text));
echo "<br>";
echo(is_string($text));
echo "<br>";
echo(is_integer($text));
echo "<br>";
echo "<hr>";
//--------------------------
$text = 23.52;

echo $text;
echo "<br>";
echo(gettype($text));
echo "<br>";
echo(is_double($text));
echo "<br>";
echo(is_numeric($text));
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