<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1">
    <title></title>
    <style type="text/css">
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px black solid;
            width: 30px;
            height: 30px;
        }
    </style>
</head>

<body>
    <h1>Guerra Naval</h1>
    <table>
        <?php

        $mida = 10;

        // Portaavions
        $_SESSION['portaavions'] = [];
        $ship_x4 = rand(0, $mida - 4);
        $ship_y4 = rand(0, $mida -1);
        $_SESSION['portaavions'][] = ['x' => $ship_x4, 'y' => $ship_y4];

        // Destructor
        $_SESSION['destructor'] = [];
        for ($i = 0; $i < 2; $i++) {
            $ship_x3 = rand(0, $mida - 3);
            $ship_y3 = rand(0, $mida - 1);
            $_SESSION['destructor'][] = ['x' => $ship_x3, 'y' => $ship_y3];
        }

        // Submari
        $_SESSION['submari'] = [];
        for ($i = 0; $i < 3; $i++) {
            $ship_x2 = rand(0, $mida - 2);
            $ship_y2 = rand(0, $mida - 1);
            $_SESSION['submari'][] = ['x' => $ship_x2, 'y' => $ship_y2];
        }

        // Fragata
        $_SESSION['fragata'] = [];
        for ($i = 0; $i < 4; $i++) {
            $ship_x1 = rand(0, $mida - 2);
            $ship_y1 = rand(0, $mida - 1);
            $_SESSION['fragata'][] = ['x' => $ship_x1, 'y' => $ship_y1];
        }

        for ($fila = 0; $fila < $mida; $fila++) {
            echo "<tr>";
            for ($col = 0; $col < $mida; $col++) {
                $contingut = "&nbsp;";
                foreach ($_SESSION['fragata'] as $sub) {
                    if ($col == $sub['x'] && $fila == $sub['y']) {
                        $contingut = "F";
                        break;
                    }
                }
                foreach ($_SESSION['destructor'] as $dest) {
                    if (
                        $col >= $dest['x'] &&
                        $col < $dest['x'] + 3 &&
                        $fila == $dest['y']
                    ) {
                        $contingut = "D";
                        break;
                    }
                }
                foreach ($_SESSION['submari'] as $sub) {
                    if (
                        $col >= $sub['x'] &&
                        $col < $sub['x'] + 2 &&
                        $fila == $sub['y']
                    ) {
                        $contingut = "S";
                        break;
                    }
                }
                echo "<td>$contingut</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>