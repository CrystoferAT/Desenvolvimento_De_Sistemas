<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventário de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-dark text-white text-center">
            <h2 class="mb-0">Lista de Produtos</h2>
        </div>
        <div class="card-body">
            
            <table class="table table-striped table-hover align-middle">
                <thead class="table-secondary">
                    <tr>
                        <th>Produto</th>
                        <th>Categoria</th>
                        <th class="text-center">Quantidade</th>
                        <th class="text-end">Preço Unit.</th>
                        <th class="text-end">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $produtos = [
                            ["nome" => "Celular", "preco" => 1500, "quant" => 5, "categoria" => "Eletrônico"],
                            ["nome" => "Geladeira", "preco" => 3500, "quant" => 5, "categoria" => "Eletrodoméstico"],
                            ["nome" => "Sofá", "preco" => 1200, "quant" => 5, "categoria" => "Móveis"],
                            ["nome" => "Sofá", "preco" => 1200, "quant" => 5, "categoria" => "Móveis"],
                            ["nome" => "Sofá", "preco" => 1200, "quant" => 5, "categoria" => "Móveis"],
                            ["nome" => "Sofá", "preco" => 1200, "quant" => 5, "categoria" => "Móveis"],
                            ["nome" => "Notebook", "preco" => 4000, "quant" => 5, "categoria" => "Eletrônico"]
                        ];

                        $totalPreco = 0;
                        $totalUnidade = 0;
                        $quantidadeProdutos = count($produtos);

                        foreach($produtos as $produto) {
                            $subtotal = $produto['preco'] * $produto['quant'];
                            $totalUnidade += $produto['preco'];
                            $totalPreco += $subtotal;

                            echo "<tr>
                                    <td><strong>{$produto['nome']}</strong></td>
                                    <td><span class='badge bg-info text-dark'>{$produto['categoria']}</span></td>
                                    <td class='text-center'>{$produto['quant']}</td>
                                    <td class='text-end'>R$ " . number_format($produto['preco'], 2, ',', '.') . "</td>
                                    <td class='text-end'>R$ " . number_format($subtotal, 2, ',', '.') . "</td>
                                  </tr>";
                        }

                        // Lógica das categorias
                        $categorias = array_column($produtos, 'categoria');
                        $contagemCategorias = array_count_values($categorias);
                        arsort($contagemCategorias);
                        $categoriaMaisComum = array_key_first($contagemCategorias);
                        $quantVezes = current($contagemCategorias);
                    ?>
                </tbody>
            </table>

            <hr class="my-4">

            <div class="row text-center">
                <div class="col-md-4">
                    <div class="p-3 border bg-white rounded shadow-sm">
                        <p class="text-muted mb-1">Média de Preços</p>
                        <h4 class="text-primary">R$ <?php echo number_format($totalUnidade / $quantidadeProdutos, 2, ',', '.'); ?></h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 border bg-white rounded shadow-sm">
                        <p class="text-muted mb-1">Total em Estoque</p>
                        <h4 class="text-success">R$ <?php echo number_format($totalPreco, 2, ',', '.'); ?></h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 border bg-white rounded shadow-sm">
                        <p class="text-muted mb-1">Categoria Recorrente</p>
                        <h4 class="text-warning"><?php echo "$categoriaMaisComum ($quantVezes itens)"; ?></h4>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>