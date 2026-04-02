<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Presença</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white text-center">
                <h2>Controle de Presença</h2>
            </div>
            <div class="card-body">
                <table class="table table-hover table-bordered">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>Nome do Aluno</th>
                            <th>Status de Presença</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $alunos = ["Ana", "Carlos", "Beatriz", "Daniel", "Fernanda", "Gustavo"];

                            foreach($alunos as $aluno){
                                // Sorteio da presença
                                $presente = rand(0,1);
                                $status = $presente ? "Presente" : "Ausente";
                                
                                // Classes do Bootstrap para cores (success = verde, danger = vermelho)
                                $cor_badge = $presente ? "bg-success" : "bg-danger";

                                echo "<tr>
                                        <td>$aluno</td>
                                        <td class='text-center'>
                                            <span class='badge $cor_badge'>$status</span>
                                        </td>
                                      </tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>