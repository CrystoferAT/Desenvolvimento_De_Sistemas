<!DOCTYPE html>
<html lang="pt-pr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Array</title>
</head>
<body>
    <?php 
        $produtos =[
            ["nome" => "Celular",
             "preco" => 1500,
            "categoria" => "Eletronico"],
            
            ["nome" => "Geladeira", 
            "preco" => 3500, 
            "categoria" => "Eletrodomestico"],
            
            ["nome" => "Sofa", 
            "preco" => 1200, 
            "categoria" => "Moveis"],
            
            ["nome" =>"Notebook", 
            "preco" => 4000, 
            "categoria" => "Eletronico"]
        ];

        echo"<h2>Lista de produtos</h2>";
        $totalPreco = 0;
        $quantidadeProdutos = count($produtos);

        foreach($produtos as $produto){
            echo "<p><strong>Produto:".$produto['nome'].
            "Preço R$:".number_format($produto['preco'], 2,',','.').
            "Categoria:".$produto['categoria']."</p></strong>";

            $totalPreco += $produto ['preco'];

        }
        echo"<h3>Media de preços:". number_format($totalPreco/$quantidadeProdutos, 2,',','.')."</h3>";
        include "arrayAssociativo.php";

        include "arrayMultidimensionais.php";
    ?>
</body>
</html>