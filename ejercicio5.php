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
    $var1;
    $var2;
    $var3;
?>
    <h1>Tabla de verdad de operador AND</h1>
    <table border="1">
        <tr>
            <th>Variable 1</th>
            <th>Variable 2</th>
            <th>Variable 3</th>
            <th>Resultado</th>
        </tr>
        <tr>
            <?php
            $var1 = true;
            $var2 = true;
            $var3 = true;
            ?>
            <td><?php echo var_export($var1) ?></td>
            <td><?php echo var_export($var2) ?></td>
            <td><?php echo var_export($var3) ?></td>
            <td><?php echo var_export($var1 && $var2 && $var3)?></td>
        </tr>
        <tr>
            <?php
            $var1 = false;
            $var2 = false;
            $var3 = false;
            ?>
            <td><?php echo var_export($var1) ?></td>
            <td><?php echo var_export($var2) ?></td>
            <td><?php echo var_export($var3) ?></td>
            <td><?php echo var_export($var1 && $var2 && $var3)?></td>
        </tr>
        <tr>
            <?php
            $var1 = true;
            $var2 = true;
            $var3 = false;
            ?>
            <td><?php echo var_export($var1) ?></td>
            <td><?php echo var_export($var2) ?></td>
            <td><?php echo var_export($var3) ?></td>
            <td><?php echo var_export($var1 && $var2 && $var3)?></td>
        </tr>
        <tr>
            <?php
            $var1 = true;
            $var2 = false;
            $var3 = false;
            ?>
            <td><?php echo var_export($var1) ?></td>
            <td><?php echo var_export($var2) ?></td>
            <td><?php echo var_export($var3) ?></td>
            <td><?php echo var_export($var1 && $var2 && $var3)?></td>
        </tr>
        <tr>
            <?php
            $var1 = false;
            $var2 = true;
            $var3 = true;
            ?>
            <td><?php echo var_export($var1) ?></td>
            <td><?php echo var_export($var2) ?></td>
            <td><?php echo var_export($var3) ?></td>
            <td><?php echo var_export($var1 && $var2 && $var3)?></td>
        </tr>
        <tr>
            <?php
            $var1 = false;
            $var2 = false;
            $var3 = true;
            ?>
            <td><?php echo var_export($var1) ?></td>
            <td><?php echo var_export($var2) ?></td>
            <td><?php echo var_export($var3) ?></td>
            <td><?php echo var_export($var1 && $var2 && $var3)?></td>
        </tr>
        <tr>
            <?php
            $var1 = false;
            $var2 = true;
            $var3 = false;
            ?>
            <td><?php echo var_export($var1) ?></td>
            <td><?php echo var_export($var2) ?></td>
            <td><?php echo var_export($var3) ?></td>
            <td><?php echo var_export($var1 && $var2 && $var3)?></td>
        </tr>
        <tr>
            <?php
            $var1 = true;
            $var2 = false;
            $var3 = true;
            ?>
            <td><?php echo var_export($var1) ?></td>
            <td><?php echo var_export($var2) ?></td>
            <td><?php echo var_export($var3) ?></td>
            <td><?php echo var_export($var1 && $var2 && $var3)?></td>
        </tr>
</table>
<h1>Tabla de verdad de operador OR</h1>
    <table border="1">
        <tr>
            <th>Variable 1</th>
            <th>Variable 2</th>
            <th>Variable 3</th>
            <th>Resultado</th>
        </tr>
        <tr>
            <?php
            $var1 = true;
            $var2 = true;
            $var3 = true;
            ?>
            <td><?php echo var_export($var1) ?></td>
            <td><?php echo var_export($var2) ?></td>
            <td><?php echo var_export($var3) ?></td>
            <td><?php echo var_export($var1 || $var2 || $var3)?></td>
        </tr>
        <tr>
            <?php
            $var1 = false;
            $var2 = false;
            $var3 = false;
            ?>
            <td><?php echo var_export($var1) ?></td>
            <td><?php echo var_export($var2) ?></td>
            <td><?php echo var_export($var3) ?></td>
            <td><?php echo var_export($var1 || $var2 || $var3)?></td>
        </tr>
        <tr>
            <?php
            $var1 = true;
            $var2 = true;
            $var3 = false;
            ?>
            <td><?php echo var_export($var1) ?></td>
            <td><?php echo var_export($var2) ?></td>
            <td><?php echo var_export($var3) ?></td>
            <td><?php echo var_export($var1 || $var2 || $var3)?></td>
        </tr>
        <tr>
            <?php
            $var1 = true;
            $var2 = false;
            $var3 = false;
            ?>
            <td><?php echo var_export($var1) ?></td>
            <td><?php echo var_export($var2) ?></td>
            <td><?php echo var_export($var3) ?></td>
            <td><?php echo var_export($var1 || $var2 || $var3)?></td>
        </tr>
        <tr>
            <?php
            $var1 = false;
            $var2 = true;
            $var3 = true;
            ?>
            <td><?php echo var_export($var1) ?></td>
            <td><?php echo var_export($var2) ?></td>
            <td><?php echo var_export($var3) ?></td>
            <td><?php echo var_export($var1 || $var2 || $var3)?></td>
        </tr>
        <tr>
            <?php
            $var1 = false;
            $var2 = false;
            $var3 = true;
            ?>
            <td><?php echo var_export($var1) ?></td>
            <td><?php echo var_export($var2) ?></td>
            <td><?php echo var_export($var3) ?></td>
            <td><?php echo var_export($var1 || $var2 || $var3)?></td>
        </tr>
        <tr>
            <?php
            $var1 = false;
            $var2 = true;
            $var3 = false;
            ?>
            <td><?php echo var_export($var1) ?></td>
            <td><?php echo var_export($var2) ?></td>
            <td><?php echo var_export($var3) ?></td>
            <td><?php echo var_export($var1 || $var2 || $var3)?></td>
        </tr>
        <tr>
            <?php
            $var1 = true;
            $var2 = false;
            $var3 = true;
            ?>
            <td><?php echo var_export($var1) ?></td>
            <td><?php echo var_export($var2) ?></td>
            <td><?php echo var_export($var3) ?></td>
            <td><?php echo var_export($var1 || $var2 || $var3)?></td>
        </tr>
</table>
</body>
</html>