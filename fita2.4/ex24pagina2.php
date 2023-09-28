<h1>Login</h1>

<?php
    $contra1 = $_POST('password1');
    $contra2 = $_POST('password2');
    if (strcmp($_POST["password1"],$_POST["password2"])) {
        $aarl = str_split($_POST["password1"]);
        $msj = "La contraseña tiene que contener un numero como mínimo";
        foreach ($aarl as $valor) {
            if (is_numeric($valor)) {
                $msj = "CONTRASEÑA CORRECTA";
            }
        }
        echo "<h3>".$msj."</h3>";
    } else {
        echo "<h3>La contraseña no coincide</h3>";
    }

?>