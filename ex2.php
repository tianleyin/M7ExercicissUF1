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
    <h1>Exercici 2</h1>
    <table>
    <?php
    $str = 'a';
    $n = 7;
    echo "  <tr>";
    for ($i=1;$i<=$n+1;$i++){
        echo "\t\t<td> $str </td>\n";
        ++$str;    
    }
    echo "  </tr>";
    echo "  <tr>";
    for ($i=0;$i<=$n;$i++){
        echo "\t\t<td> $i </td>\n";
    }
    echo "  </tr>";
    ?>
    </table>
</body>
</html>