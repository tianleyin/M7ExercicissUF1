<?php 

    $quantitat = $_POST["Quantitat"];

    echo "Has seleccionat: ".$quantitat;

    for ($i=1;$i<=$quantitat;$i++) {
        echo "<br><a href=\"ex22pagina3.php?quantitat=$i\">Comanda ".$i."</a><br>";
    }

?>