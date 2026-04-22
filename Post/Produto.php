<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
</head>
<header>
    <?php include "header.php";?>
</header>
<body>
    <div style=" border: 15px; margin: 20px; padding: 20px">
     
        <form action="" method="post" style="display: flex ; flex-direction: column; max-width: 250px ">
            Nome do Produto: <input type="text" name="nome">
            Preço: <input type="number" name="preco">
            Quantidade: <input type="number" name="quant">
            <button type="submit" name="btn">Enviar</button>

        </form>
    </div>
       <?php
            if($_SERVER["REQUEST_METHOD"] === "POST"){
                if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['preco']) && !empty($_POST['preco']) && isset($_POST['quant']) && !empty($_POST['quant'])){
                    $nome = $_POST['nome'];
                    $preco = (float)$_POST['preco'];
                    $quant = (int)$_POST['quant']; 
                }else{
                    echo "Todos os campos são obrigatorios";
                }
            }
        ?>
</body>
<footer>
    <?php include "footer.php";?>
</footer>
</html>