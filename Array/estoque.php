<?php 
        $produtos =[
            ["nome" => "Celular",
             "preco" => 1500,
             "quant" => 5,
             "categoria" => "Eletronico"],
             
             ["nome" => "Geladeira", 
             "preco" => 3500, 
             "quant" => 5,
             "categoria" => "Eletrodomestico"],
             
             ["nome" => "Sofa", 
             "preco" => 1200, 
             "quant" => 5,
             "categoria" => "Moveis"],
             
             ["nome" =>"Notebook", 
             "preco" => 4000, 
             "quant" => 5,
             "categoria" => "Eletronico"]
        ];

        echo"<h2>Lista de produtos</h2>";
        $totalPreco = 0;
        $totalUnidade =0;
        $quantidadeProdutos = count($produtos);

        foreach($produtos as $produto){
            echo "<p><strong>Produto:".$produto['nome'].
            "Preço R$:".number_format($produto['preco'], 2,',','.').
            "Quantidade:".$produto['quant'].
            "Categoria:".$produto['categoria']."</p></strong>";

            $totalUnidade += $produto ['preco'];
            $totalPreco += ($produto ['preco']*$produto['quant']);

        }
        $mediaPrecos = $totalUnidade/$quantidadeProdutos;
        echo"<h3>Media de preços:". number_format($totalPreco/$quantidadeProdutos, 2,',','.')."</h3>";
        echo"<h3>valor total do estoque:". number_format($totalPreco, 2,',','.')."</h3>";
    ?>