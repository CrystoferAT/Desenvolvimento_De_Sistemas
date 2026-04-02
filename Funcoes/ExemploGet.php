<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo GET</title>
</head>
<body>
    <div style=" border: 15px; margin: 20px; padding: 20px">

        <?php
            echo "<h2><strong>Exemplo 01</strong></h2>";
            if(isset($_GET['nome'])){
                echo"<p>Olá,".$_GET['nome']."</p><br>";
            }
            
            
            echo "<h2><strong>Exemplo 02</strong></h2>";
            if(isset($_GET['produto']) && isset($_GET['preco'])){
                echo "<p>Produto:".$_GET['produto']. "- Preço: R$".$_GET['preco']."</p><br>";
            }
                
            echo "<h2><strong>Exemplo 03</strong></h2>";
            if(isset($_GET['idade'])){
                $idade = $_GET['idade'];
                echo ($idade >=18)?"Maior de idade":"Menor de idade";
                echo "<br>";
            }
                    
            echo "<h2><strong>Exemplo 04</strong></h2>";
            if(isset($_GET['a']) && isset($_GET['b'])){
                $soma = $_GET['a'] + $_GET['b'];
                echo "<p>Soma: $soma</p><br>";
                }
                
                echo "<h2><strong>Exemplo 05</strong></h2>";
                if(isset($_GET['chave'])){
                    if($_GET['chave'] === "php123"){
                        echo "<strong>Acesso autorizado</strong><br>";
                    }else{
                        echo "Chave incorreta";
                    }
                }
                    
        ?>
    </div>
</body>
</html>