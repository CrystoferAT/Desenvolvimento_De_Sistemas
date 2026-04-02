<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <h2 class="mb-4">Lista de Produtos</h2>
        
        <table class="table table-striped table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Produto</th>
                    <th>Preço (R$)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $produtos = [
                        "NoteBook" => 3500.00,
                        "SmartPhone" => 2500.00,
                        "Fone de Ouvido" => 150.00,
                        "Teclado" => 200.00
                    ];

                    foreach($produtos as $produto => $preco){
                        echo "<tr>
                                <td>$produto</td>
                                <td>R$ " . number_format($preco, 2, ",", ".") . "</td>
                              </tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>