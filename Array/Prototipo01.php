<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Cadastro de Funcionários</h4>
                        <form action="" method="get">
                            <div class="mb-3">
                                <label class="form-label">Nome:</label>
                                <input type="text" name="nome" class="form-control" placeholder="Ex: João Silva">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Idade:</label>
                                <input type="number" name="idade" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Salário:</label>
                                <input type="number" name="salario" class="form-control" step="0.01">
                            </div>
                            <button type="submit" name="enviar" class="btn btn-primary w-100">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <?php
                session_start();

                if(!isset($_SESSION['funcionarios'])){
                    $_SESSION['funcionarios'] = [];
                }

                function classificar($salario){
                    if($salario < 3000) return "Junior";
                    if($salario >= 3000 && $salario <= 6000) return "Pleno";
                    return "Senior";
                }

                if(isset($_GET['enviar'])){
                    $nome = trim($_GET['nome']);
                    $idade = (int)$_GET['idade'];
                    $salario = (float)$_GET['salario'];

                    if(!empty($nome) && !empty($idade) && !empty($salario)){
                        
                        // Correção: Começa como FALSE
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
                            // Redireciona para limpar a URL
                            header("Location: " . $_SERVER['PHP_SELF']);
                            exit();
                        } else {
                            echo "<div class='alert alert-warning'>Funcionário já cadastrado!</div>";
                        }
                    } else {
                        echo "<div class='alert alert-danger'>Preencha todos os campos!</div>";
                    }
                }

                // Exibição da Tabela
                if (!empty($_SESSION['funcionarios'])): ?>
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Funcionários Ativos</h4>
                            <table class="table table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Nome</th>
                                        <th>Idade</th>
                                        <th>Salário</th>
                                        <th>Categoria</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($_SESSION['funcionarios'] as $fun): ?>
                                        <tr>
                                            <td><?= $fun['nome'] ?></td>
                                            <td><?= $fun['idade'] ?></td>
                                            <td>R$ <?= number_format($fun['salario'], 2, ',', '.') ?></td>
                                            <td>
                                                <span class="badge <?php 
                                                    echo ($fun['categoria'] == 'Senior') ? 'bg-success' : 
                                                         (($fun['categoria'] == 'Pleno') ? 'bg-info' : 'bg-secondary'); 
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
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>