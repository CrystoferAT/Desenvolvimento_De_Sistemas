<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo02</title>
</head>
<body>
    <?php
    echo "<br><br>";

        function boasVindas($nome = "Visitante"){
            return "Bem vindo, $nome!";
        }
        echo boasVindas();

        echo "<br><br>";

        function maiorDeIdade($idade){
            return $idade > 18;
        }
        echo maiorDeIdade(29)?"Maior":"Menor";
    ?>
</body>
</html>