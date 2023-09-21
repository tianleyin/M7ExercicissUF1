<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1">
    <title></title>
    <style type="text/css">
        table, td {
            border: 1px black solid;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h1>Exercici 3</h1>
    <table>
    <?php
    echo "  <tr>";
    $n = 7;
    for ($i=0;$i<=$n;$i++){
        echo "\t\t<td> $i </td>\n";
    }
    echo "  </tr>";
    echo "  <tr>";
    $n = 7;
    for ($i=1;$i<=$n+1;$i++){
        echo "\t\t<td> $i </td>\n";
    }
    echo "  </tr>";
    echo "  <tr>";
    $n = 7;
    for ($i=2;$i<=$n+2;$i++){
        echo "\t\t<td> $i </td>\n";
    }
    echo "  </tr>";
    echo "  <tr>";
    $n = 7;
    for ($i=3;$i<=$n+3;$i++){
        echo "\t\t<td> $i </td>\n";
    }
    echo "  </tr>";
    echo "  <tr>";
    $m = 1;
    for ($i=1;$i<=$n+1;$i++){
        echo "\t\t<td> $i </td>\n";
    }
    echo "  </tr>";
    ?>
    </table>
</body>
</html>