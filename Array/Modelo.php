<?php
// 1. INÍCIO DA SESSÃO E LÓGICA DE BASTIDORES (Sempre no topo)
session_start();

// Lógica para limpar a memória da lista
if (isset($_GET['limpar'])) {
    $_SESSION['funcionarios'] = []; 
    header("Location: " . $_SERVER['PHP_SELF']); 
    exit();
}

// Inicializa o array se não existir
if(!isset($_SESSION['funcionarios'])){
    $_SESSION['funcionarios'] = [];
}

// Função para classificar o cargo com base no salário
function classificar($salario){
    if($salario < 3000) return "Junior";
    if($salario >= 3000 && $salario <= 6000) return "Pleno";
    return "Senior";
}

// Processamento do Formulário
$erro = "";
if(isset($_GET['enviar'])){
    $nome = trim($_GET['nome']);
    $idade = (int)$_GET['idade'];
    $salario = (float)$_GET['salario'];

    // Validação de segurança: campos preenchidos e valores positivos
    if(!empty($nome) && $idade > 0 && $salario > 0){
        
        $jaCadastrado = false;
        foreach($_SESSION['funcionarios'] as $fun){
            if(strcasecmp($fun['nome'], $nome) == 0){
                $jaCadastrado = true;
                break;
            }
        }

        if(!$jaCadastrado){
            $categoria = classificar($salario);
            $_SESSION['funcionarios'][] = [
                "nome" => $nome,
                "idade" => $idade,
                "salario" => $salario,
                "categoria" => $categoria
            ];
            // Redireciona para limpar a URL e evitar duplicar com F5
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } else {
            $erro = "Atenção: Este funcionário já foi cadastrado!";
        }
    } else {
        $erro = "Erro: Preencha todos os campos corretamente!";
    }
}

// Cálculo da Média de Idade
$mediaIdade = 0;
if (!empty($_SESSION['funcionarios'])) {
    $somaIdades = array_column($_SESSION['funcionarios'], 'idade');
    $mediaIdade = array_sum($somaIdades) / count($_SESSION['funcionarios']);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestão de Funcionários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <header class="mb-5 text-center">
            <h1 class="display-5">Painel de RH</h1>
            <p class="text-muted">Gestão simplificada de colaboradores</p>
        </header>

        <div class="row">
            <div class="col-md-4">
                
                <?php if($erro): ?>
                    <div class="alert alert-danger shadow-sm"><?= $erro ?></div>
                <?php endif; ?>

                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Novo Cadastro</h5>
                        <form action="" method="get">
                            <div class="mb-3">
                                <label class="form-label small fw-bold">NOME COMPLETO</label>
                                <input type="text" name="nome" class="form-control" placeholder="João Silva" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold">IDADE</label>
                                <input type="number" name="idade" class="form-control" required min="1">
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold">SALÁRIO (R$)</label>
                                <input type="number" name="salario" class="form-control" step="0.01" required min="1">
                            </div>
                            <button type="submit" name="enviar" class="btn btn-primary w-100 shadow-sm">Cadastrar Funcionário</button>
                            <a href="?limpar=1" class="btn btn-link btn-sm text-danger w-100 mt-2 text-decoration-none">Limpar todos os dados</a>
                        </form>
                    </div>
                </div>

                <?php if (!empty($_SESSION['funcionarios'])): ?>
                <div class="card shadow-sm border-primary">
                    <div class="card-body text-center">
                        <span class="text-muted small text-uppercase fw-bold">Média de Idade da Equipe</span>
                        <h2 class="display-6 text-primary mb-0"><?= number_format($mediaIdade, 1, ',', '.') ?> <small class="fs-6">anos</small></h2>
                    </div>
                </div>
                <?php endif; ?>
            </div>

            <div class="col-md-8">
                <?php if (!empty($_SESSION['funcionarios'])): ?>
                    <div class="card shadow-sm">
                        <div class="card-header bg-white py-3">
                            <h5 class="mb-0">Funcionários Ativos <span class="badge bg-secondary ms-2"><?= count($_SESSION['funcionarios']) ?></span></h5>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="ps-3">Nome</th>
                                            <th>Idade</th>
                                            <th>Salário</th>
                                            <th>Categoria</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($_SESSION['funcionarios'] as $fun): ?>
                                            <tr>
                                                <td class="ps-3 fw-semibold"><?= $fun['nome'] ?></td>
                                                <td><?= $fun['idade'] ?> anos</td>
                                                <td>R$ <?= number_format($fun['salario'], 2, ',', '.') ?></td>
                                                <td>
                                                    <span class="badge rounded-pill <?php 
                                                        echo ($fun['categoria'] == 'Senior') ? 'bg-success' : 
                                                             (($fun['categoria'] == 'Pleno') ? 'bg-info text-dark' : 'bg-secondary'); 
                                                    ?>">
                                                        <?= $fun['categoria'] ?>
                                                    </span>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="text-center py-5 bg-white shadow-sm rounded">
                        <img src="https://cdn-icons-png.flaticon.com/512/4076/4076432.png" width="80" class="mb-3 opacity-25" alt="Vazio">
                        <p class="text-muted">Nenhum funcionário cadastrado no sistema.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>