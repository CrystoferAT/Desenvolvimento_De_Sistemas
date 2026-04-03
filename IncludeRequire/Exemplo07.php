<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 07 - Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5 shadow-sm p-4 bg-white rounded" style="max-width: 400px">
        <h1 class="h4 mb-3">Situação Pelo Horário</h1>
        
        <form action="" method="get" class="d-flex flex-column">
            <div class="mb-3">
                <label class="form-label">Informe a Hora atual (0 a 23):</label>
                <input type="number" name="hora" class="form-control">
            </div>
            
            <button type="submit" name="enviar" class="btn btn-primary mb-3">Saudar</button>
        </form>

        <?php
            // Sua lógica original mantida integralmente
            function saudacaoPorHorario($hora){
                if($hora < 12) return "Bom Dia!";
                if($hora < 18) return "Boa Tarde!";
                return "Boa Noite!";
            }

            if(isset($_GET['hora'])){
                // Exibindo o resultado dentro de um alerta do Bootstrap para ficar bonito
                $mensagem = saudacaoPorHorario($_GET['hora']);
                echo "<div class='alert alert-info mt-2'>$mensagem</div>";
            }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>