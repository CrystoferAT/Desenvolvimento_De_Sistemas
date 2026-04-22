<?php
// 1. DEFINIÇÃO DAS FUNÇÕES (Sempre no topo para evitar erros de carregamento)

/**
 * Retorna uma saudação baseada na hora informada
 */
function saudacaoHora($nome, $hora) {
    $hora = (int)$hora; // Garante que a hora seja um número inteiro
    if ($hora >= 6 && $hora < 12) {
        return "<h4 class='text-primary'>Bom Dia, $nome!</h4>";
    } elseif ($hora >= 12 && $hora < 18) {
        return "<h4 class='text-primary'>Boa Tarde, $nome</h4>";
    } else {
        return "<h4 class='text-primary'>Boa Noite, $nome!</h4>";
    }
}

/**
 * Calcula e exibe o bônus salarial baseado no cargo
 */
function exibirSalarioBonus($salario, $cargo) {
    // Gerente ganha 20% (1.2), outros cargos ganham 10% (1.1)
    $percentual = (strcasecmp($cargo, "gerente") == 0) ? 1.2 : 1.1;
    $salarioFinal = $salario * $percentual;
    
    echo "<hr>";
    echo "<h5 class='text-success'>Cálculo de Bônus Aplicado</h5>";
    echo "<p class='mb-0'>Cargo identificado: <strong>" . htmlspecialchars($cargo) . "</strong></p>";
    echo "<p class='mb-0'>O salário final com bônus é: <strong>R$ " . number_format($salarioFinal, 2, ',', '.') . "</strong></p>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticação e Salário com Bônus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white text-center">
                        <h4 class="mb-0">Autenticação e Salário</h4>
                    </div>
                    
                    <div class="card-body p-4">
                        <form action="" method="get">
                            <div class="mb-3">
                                <label class="form-label">Nome:</label>
                                <input type="text" name="nome" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Senha:</label>
                                <input type="password" name="senha" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Cargo:</label>
                                <input type="text" name="cargo" class="form-control" placeholder="Ex: gerente" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Salário Base:</label>
                                <input type="number" name="salarioBase" class="form-control" step="0.01" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Hora Atual (0-23):</label>
                                <input type="number" name="horaAtual" class="form-control" min="0" max="23" required>
                            </div>
                            <button type="submit" name="enviar" class="btn btn-primary w-100 mt-2">Enviar Dados</button>
                        </form>
                    </div>

                    <?php if(isset($_GET['enviar'])): ?>
                    <div class="card-footer bg-white border-top-0 p-4">
                        <div class="alert alert-secondary mb-0">
                            <?php
                                // Coleta os dados protegendo contra campos vazios
                                $nome = $_GET['nome'] ?? '';
                                $senha = $_GET['senha'] ?? '';
                                $cargo = $_GET['cargo'] ?? '';
                                $salario = (float)($_GET['salarioBase'] ?? 0);
                                $hora = $_GET['horaAtual'] ?? 0;

                                // 1. Exibe a Saudação
                                echo saudacaoHora($nome, $hora);

                                // 2. Verifica a Senha e calcula bônus
                                if ($senha === "php2026") {
                                    exibirSalarioBonus($salario, $cargo);
                                } else {
                                    echo "<div class='text-danger mt-2 fw-bold'>Acesso Negado: Senha inválida!</div>";
                                }
                            ?>
                        </div>
                    </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>