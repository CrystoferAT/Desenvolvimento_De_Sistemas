<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo01</title>
</head>
<header>
    <?php 
        include "header.php";
    ?>
</header>
<body>
    <h2>Calcular Média</h2>
    <div style=" border: 15px; margin: 20px; padding: 20px; height: 700px">
        <form method="get"  action="">
            Nota1: <input type="number" step="0.1" name="nota1">
            Nota2: <input type="number" step="0.1" name="nota2">
            <button type="submit" name="enviar">Calcular</button>
        </form>
        <?php
            function calcularMedia($n1, $n2){
                return ($n1 + $n2) / 2;
            }
            if(isset($_GET['nota1']) && isset($_GET['nota2'])){
                $media = calcularMedia($_GET['nota1'], $_GET['nota2']);
                echo "Média: $media<br>";
                echo ($media >= 7)? "Aprovado":"Reprovado";
            }
        ?>
    </div>
</body>
<footer>
    <?php
        include "footer.php";
    ?>
</footer>
</html>