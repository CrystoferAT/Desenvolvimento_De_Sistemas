<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 04 - Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow-sm p-4 mx-auto" style="max-width: 400px;">
            <h2 class="text-center mb-4">Classificador de Idade</h2>
            
            <form method="get" action="">
                <div class="mb-3">
                    <label class="form-label">Nome:</label>
                    <input type="text" name="nome" class="form-control" placeholder="Ex: Crystofer" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Idade:</label>
                    <input type="number" name="idade" class="form-control" placeholder="Ex: 28" required>
                </div>
                
                <button type="submit" class="btn btn-primary w-100">Classificar</button>
            </form>

            <hr>

            <?php
                function classificarIdade($idade){
                    if($idade < 12) return "Criança";
                    if($idade < 18) return "Adolescente";
                    if($idade < 60) return "Adulto";
                    return "Idoso";
                }

                if(!empty($_GET['nome']) && isset($_GET['idade'])){
                    $nome = htmlspecialchars($_GET['nome']);
                    $classificacao = classificarIdade(intval($_GET['idade']));
                    
                    // Alerta do Bootstrap para o resultado
                    echo "<div class='alert alert-info mt-3' role='alert'>";
                    echo "<strong>$nome</strong> é classificado como: <strong>$classificacao</strong>.";
                    echo "</div>";
                }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>