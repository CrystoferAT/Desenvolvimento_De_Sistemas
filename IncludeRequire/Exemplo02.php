<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo02</title>
</head>
<header>
    <?php
        include "header.php";
    ?>
</header>
<body>
    <div style=" border: 15px; margin: 20px; padding: 20px">
        <?php
            echo "<h2><strong>Verificação de Chave</strong></hr>";

            if($_GET['chave'] ){
                if($_GET['chave'] === "php123"){
                    echo "Chave correta! Seja bem vindo!";
                }else{
                    echo "Chave incorreta";
                }
            }else{
                echo "Adicione ?chave=php123 na URL.";
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