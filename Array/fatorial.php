<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Matemático: Fatorial e Primos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .card { margin-top: 20px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        .badge-primo { background-color: #6f42c1; }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="text-center mb-4">
        <h1 class="display-5 fw-bold text-primary">Análise de Números (1 a 15)</h1>
    </div>

    <?php
    $pares = [];
    $impares = [];
    $primos = [];

    // Lógica de Processamento
    for($i = 1; $i <= 15; $i++){
        if($i % 2 == 0){
            $pares[]= $i;
        } else {
            $impares[] = $i;
        }

        // Correção lógica: 1 não é primo
        $ePrimo = ($i > 1);
        for($j = 2; $j <= sqrt($i); $j++){
            if($i % $j == 0){
                $ePrimo = false;
                break;
            }
        }
        if($ePrimo){
            $primos[] = $i; 
        }
    }
    ?>

    <div class="row g-4">
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-header bg-dark text-white">Paridade</div>
                <div class="card-body">
                    <h5 class="text-success">Pares</h5>
                    <p class="text-muted"><?php echo implode(' — ', $pares); ?></p>
                    <hr>
                    <h5 class="text-danger">Ímpares</h5>
                    <p class="text-muted"><?php echo implode(' — ', $impares); ?></p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-header bg-primary text-white">Números Primos Detectados</div>
                <div class="card-body d-flex flex-wrap gap-2">
                    <?php foreach($primos as $primo): ?>
                        <span class="badge rounded-pill badge-primo fs-6"><?php echo $primo; ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-header bg-info text-dark fw-bold">Cálculo de Fatorial dos Primos</div>
                <div class="card-body p-0">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Número Primo</th>
                                <th>Cálculo</th>
                                <th>Resultado (Fatorial)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            foreach ($primos as $num){
                                $fatorial = 1;
                                for($k = $num; $k > 1; $k--){
                                    $fatorial *= $k;
                                }
                                echo "<tr>
                                        <td><span class='badge bg-secondary'>$num</span></td>
                                        <td>$num!</td>
                                        <td class='fw-bold text-primary'>" . number_format($fatorial, 0, ',', '.') . "</td>
                                      </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>