<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 01</title>
</head>
<body>
<?php

$nombre = "Antonio Sanchez Espinosa";
$poblacion = "Sevilla";
$edad = 23;
echo "<p>";
echo ("Soy $nombre, tengo $edad años de edad y vivo en $poblacion.");
echo "</p>";
echo "<p>";
printf("Soy %s, tengo %d años de edad y vivo en %s.", $nombre, $edad, $poblacion);
echo "</p>";
?>
</body>
</html>