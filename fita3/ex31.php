<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1">
    <title>PROCESSA CONTACTES</title>
</head>
<body>
    <h1>PROCESSA CONTACTES</h1>
    <?php
        $fp = fopen("contactes31.txt","r"); 
        $str = fread($fp, filesize("contactes31.txt"));
        $sep = explode(',', $str);
        $many = count($sep)/4;
        $itera = 0;
        echo "<h3>Nombre - Apellido1 - Apellido2 - Telefono</h3><br>";
        for ($i=0;$i<=$many-1;$i++) {
            echo $sep[$itera]." - ".$sep[$itera+1]." - ".$sep[$itera+2]." - ".$sep[$itera+3]."<br>";
            $itera += 4;
        }
        $ej31b = str_replace(",","#",$str);
        $fp2 = fopen("contactes31b.txt","w");
        fwrite($fp2, $ej31b);
        fclose($fp2);
        fclose($fp);
    ?>
</body>
</html>