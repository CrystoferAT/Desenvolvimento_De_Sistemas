<?php
    $produtos = [
        ["nome" => "celular", "preco" => 1200],
        ["nome" => "Notebook", "preco" => 3500],
        ["nome" => "Tablet", "preco" => 900]
    ];
    foreach($produtos as $produto){
        echo"<p>Produto: {$produto['nome']} - Preço:{$produto['preco']}</p>";
    }
?>