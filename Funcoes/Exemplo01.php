<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo01</title>
</head>
<body>
    <?php
    echo "<br><br>";

        function saudacao($nome){
            return "Olá, $nome!";
        }
        echo saudacao("Crystofer");

        echo "<br><br>";

        function calcularMedia($n1,$n2){
            return ($n1 + $n2) /2;
        }
        echo calcularMedia(7,9);
    ?>
</body>
</html>