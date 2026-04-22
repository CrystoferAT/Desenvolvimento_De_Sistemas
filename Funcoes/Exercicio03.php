<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03 - Carrinho</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow p-4">
                    <h1 class="text-center h3 mb-4">🛒 Simulador de Carrinho</h1>
                    
                    <form action="" method="get">
                        <div class="mb-3">
                            <label class="form-label">Produto A (R$ 50,00)</label>
                            <input type="number" class="form-control" value="0" name="a">
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Produto B (R$ 80,00)</label>
                            <input type="number" class="form-control" value="0" name="b">
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Produto C (R$ 120,00)</label>
                            <input type="number" class="form-control" value="0" name="c">
                        </div>
                        
                        <button type="submit" name="enviar" class="btn btn-primary w-100">
                            Enviar para o Carrinho
                        </button>
                    </form>

                    <hr>

                    <div class="text-center">
                        <?php
                            // Sua lógica permanece exatamente a mesma
                            if(isset($_GET['enviar'])){
                                $qntA =(int)$_GET['a'];
                                $qntB = (int)$_GET['b'];
                                $qntC =(int)$_GET['c'];
                                
                                if($qntA > 0 || $qntB > 0 || $qntC > 0 ){
                                    $resultado = comprar($qntA, $qntB, $qntC);
                                    echo "<div class='alert alert-success'>";
                                    echo "<h3 class='h5 mb-0'>Sua Compra ficou no valor de R$ ". number_format($resultado, 2 , "," , ".") . "</h3>";
                                    echo "</div>";
                                } else {
                                    echo "<div class='alert alert-danger'>";
                                    echo "<h2 class='h6 mb-0'>Compre pelo menos um produto</h2>";
                                    echo "</div>";
                                }
                            }

                            function comprar($a, $b, $c){
                                $precoA = 50; $precoB = 80; $precoC = 120;
                                $total = ($a * $precoA) + ($b * $precoB) + ($c * $precoC);
                                return $total;
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>