<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOTIGA</title>
</head>
<body>
    <form method="POST">
        <?php 
            // Crear Formulari
            $file = fopen("productes.txt","r");
            while ($line = fgets($file)) {
                echo "<input type='checkbox' name='prods[]' value='".trim($line)."'>$line</input><br>";
            }
            echo "<input type='text' name='nom' required></input><br>";
            echo "<input type='submit' value='enviar'></input>";

            // Processar dades
            if (isset($_POST["prods"])) {
                $user = $_POST["nom"];
                $comanda = $user;
                $file2 = fopen("comandes.txt", "a");
                foreach ($_POST["prods"] as $producte) {
                    $comanda.= ", ".$producte;
                }
                $comanda.="\n";
                fwrite($file2, $comanda);
            }
        ?>

    </form>

</body>
</html>