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
    <h1>Exercici 4</h1>
    <table>
    <?php
    $n = 7;
    $str = 'a';
    echo "  <tr>";
    echo "\t\t<td> </td>\n";
    for ($i=1;$i<=$n;$i++){
        echo "\t\t<td> $i </td>\n";
    }
    echo "  </tr>";
    for ($i2=1;$i2<=4;$i2++){
        echo "  <tr>";
        for ($i=1;$i<=4;$i++){
            echo "\t\t<td> $str </td>\n";
            for ($i=1;$i<=$n;$i++){
                echo "\t\t<td>&nbsp</td>\n";
            }
            ++$str;
        }
        echo "  </tr>";
    }
    ?>
    </table>
</body>
</html>