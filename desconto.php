<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desconto</title>
</head>
<body>
    <h2>Cálculo de Desconto</h2>
    <?php 
        $preco_original = 200;
        $desconto = 10;

        $preco_desconto = (float)$preco_original - (($desconto/100)*$preco_original);
        echo"<p>Preço original: R$" . number_format($preco_original,2, ",",".") ."</p>";
        echo"<p>Desconto Aplicado:$desconto%</p>";
        echo"<p>Preco Final:".number_format($preco_desconto,2 ,",", ".")."</p>";
        ?>
</body>
</html>