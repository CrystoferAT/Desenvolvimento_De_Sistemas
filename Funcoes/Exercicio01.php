<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Symmetry IMC Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f0f2f5; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .card { border: none; border-radius: 12px; box-shadow: 0 8px 24px rgba(0,0,0,0.05); }
        .bg-gradient-primary { background: linear-gradient(45deg, #007bff, #0056b3); }
        .result-number { font-size: 3.5rem; font-weight: 800; }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row g-4">
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-header bg-gradient-primary text-white p-3">
                    <h5 class="mb-0">Entrada de Dados</h5>
                </div>
                <div class="card-body">
                    <form method="get">
                        <div class="mb-3">
                            <label class="form-label text-muted small fw-bold">NOME</label>
                            <input type="text" class="form-control" name="nome" required placeholder="Digite seu nome">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted small fw-bold">PESO (KG)</label>
                            <input type="number" step="0.01" class="form-control" name="peso" required placeholder="Ex: 80.5">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted small fw-bold">ALTURA (M)</label>
                            <input type="number" step="0.01" class="form-control" name="altura" required placeholder="Ex: 1.75">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-muted small fw-bold">IDADE</label>
                            <input type="number" class="form-control" name="idade" required>
                        </div>
                        <button type="submit" name="enviar" class="btn btn-primary w-100 fw-bold shadow-sm">CALCULAR IMC</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card h-100">
                <div class="card-body p-4">
                    <?php
                    if (isset($_GET['enviar'])) {
                        $nome = htmlspecialchars($_GET['nome']);
                        $peso = (float)$_GET['peso'];
                        $altura = (float)$_GET['altura'];
                        $idade = (int)$_GET['idade'];
                        $imc = ($altura > 0) ? $peso / ($altura * $altura) : 0;

                        // Definição de Classificação e Cores
                        if ($imc < 18.5) { $class = "Abaixo do peso"; $badge = "bg-info"; }
                        elseif ($imc <= 24.9) { $class = "Peso Normal"; $badge = "bg-success"; }
                        elseif ($imc <= 29.9) { $class = "Sobrepeso"; $badge = "bg-warning text-dark"; }
                        elseif ($imc <= 34.9) { $class = "Obesidade Grau I"; $badge = "bg-danger"; }
                        else { $class = "Obesidade Severa"; $badge = "bg-dark"; }

                        echo "<div class='row align-items-center'>";
                        echo "<div class='col-md-6 text-center border-end'>";
                        echo "<h6 class='text-uppercase text-muted ls-1'>Resultado para {$nome}</h6>";
                        echo "<div class='result-number my-2'>" . number_format($imc, 2, ',', '.') . "</div>";
                        echo "<span class='badge {$badge} p-2 px-3 fs-6'>{$class}</span>";
                        
                        if ($idade >= 60 && ($imc < 18.5 || $imc > 24.9)) {
                            echo "<div class='alert alert-warning mt-4 small'>Atenção: Faixa de IMC diferenciada para idosos.</div>";
                        }
                        echo "</div>";

                        echo "<div class='col-md-6 ps-md-4'>";
                        echo "<h6 class='text-muted mb-3'>Tabela de Referência:</h6>";
                        echo "<table class='table table-sm table-borderless small'>";
                        echo "<tr><td>< 18.5</td><td><span class='text-info'>Abaixo do peso</span></td></tr>";
                        echo "<tr class='table-success'><td>18.5 - 24.9</td><td><strong>Normal</strong></td></tr>";
                        echo "<tr><td>25.0 - 29.9</td><td><span class='text-warning'>Sobrepeso</span></td></tr>";
                        echo "<tr><td>30.0 - 34.9</td><td><span class='text-danger'>Obesidade I</span></td></tr>";
                        echo "<tr><td>> 35.0</td><td><strong>Obesidade II/III</strong></td></tr>";
                        echo "</table>";
                        echo "</div>";
                        echo "</div>";
                    } else {
                        echo "<div class='text-center py-5'><p class='text-muted'>Aguardando submissão dos dados...</p></div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>