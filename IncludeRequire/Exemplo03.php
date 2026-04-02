<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo03</title>
</head>
<header>]
    <?php
        include "header.php";
    ?>
</header>
<body>

    <div style=" border: 15px; margin: 20px; padding: 20px">
        <h2 style="text-align: center;">Cadastro de Produtos com Cesconto</h2>
        <form style="display: flex; flex-direction: column; max-width: 250px">
            Nome do Produto:<input type="text" name="produto"><br>
            Preço:<input type="number" name="preco"><br>
            Desconto (%):<input type="number" name="desconto"><br>
            <button type="submit" name="enviar">Calcular Desconto</button>
        </form >
        <?php
            function aplicarDesconto($preco ,$porcentagem){
                return $preco - ($preco*($porcentagem / 100));
            }
            if(isset($_GET['produto'], $_GET['preco'], $_GET['desconto'])){
                $novoPreco = aplicarDesconto($_GET['preco'], $_GET['desconto']);
                echo "Produto: {$_GET['produto']}<br>";
                echo "Preço: {$_GET['preco']} original<br>";
                echo "Preço com desconto: R$".number_format($novoPreco, 2, ",", "."). "<br>";

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