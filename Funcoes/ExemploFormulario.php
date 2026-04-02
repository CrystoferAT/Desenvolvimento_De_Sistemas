<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Formulário - Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light"> <div class="container mt-5"> <div class="card shadow p-4 mx-auto" style="max-width: 500px;"> <h3 class="mb-4 text-center">Cadastro de Compra</h3>

            <form method="get" action="" class="mb-4">
                <div class="mb-3">
                    <label class="form-label">Nome:</label>
                    <input type="text" name="nome" class="form-control" placeholder="Digite seu nome">
                </div>

                <div class="mb-3">
                    <label class="form-label">Idade:</label>
                    <input type="number" name="idade" class="form-control" placeholder="Sua idade">
                </div>

                <div class="mb-3">
                    <label class="form-label">Produto:</label>
                    <input type="text" name="produto" class="form-control" placeholder="Nome do item">
                </div>

                <div class="mb-3">
                    <label class="form-label">Preço:</label>
                    <input type="text" name="preco" class="form-control" placeholder="Valor (ex: 50.00)">
                </div>

                <button type="submit" name="enviar" class="btn btn-primary w-100">Enviar Dados</button>
            </form>

            <?php
                // Sua lógica PHP permanece IDÊNTICA
                if(isset($_GET['nome']) && $_GET['nome'] != ""){
                    echo "<div class='alert alert-info'>"; // Caixa de alerta azul para os resultados
                    
                    echo "<strong>Nome:</strong> ". htmlspecialchars($_GET['nome']) ."<br>";

                    function mensagemIdade($idade){
                        if($idade >= 60) return "Idoso.";
                        elseif($idade >= 18) return "Adulto.";
                        else return "Menor de idade.";
                    }

                    if(isset($_GET['idade']) && $_GET['idade'] != ""){
                        echo "<strong>Idade daqui a 5 anos:</strong> ". ((int)$_GET['idade'] + 5) ."<br>";
                        echo "<strong>Status:</strong> " . mensagemIdade($_GET['idade']) . "<br>";
                    }

                    if (isset($_GET['produto'], $_GET['preco']) && $_GET['produto'] != ""){
                        echo "<strong>Produto:</strong> {$_GET['produto']} custa R\$ {$_GET['preco']}<br>";
                    }  

                    if(isset($_GET['nome'], $_GET['idade'], $_GET['produto'], $_GET['preco'])){
                        echo "<hr>";
                        echo "<p class='mb-0'>{$_GET['nome']} tem {$_GET['idade']} anos e comprou {$_GET['produto']} por R\${$_GET['preco']}</p>";
                    }

                    echo "</div>";
                }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>