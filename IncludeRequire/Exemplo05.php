<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05 - Tabuada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0 text-center">Gerar Tabuada</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="get">
                            <div class="mb-3">
                                <label for="num" class="form-label">Digite um número:</label>
                                <input type="number" class="form-control" name="num" id="num" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Ver Tabuada</button>
                        </form>

                        <?php
                        function gerarTabuada($numero){
                            echo "<div class='mt-4'>";
                            echo "<h5 class='text-center border-bottom pb-2'>Tabuada do $numero</h5>";
                            echo "<ul class='list-group list-group-flush'>";
                            for($i = 1; $i <= 10; $i++){
                                $resultado = $numero * $i;
                                echo "<li class='list-group-item d-flex justify-content-between'>";
                                echo "<span>$numero x $i</span> <strong>$resultado</strong>";
                                echo "</li>";
                            }
                            echo "</ul>";
                            echo "</div>";
                        }

                        if(isset($_GET['num']) && $_GET['num'] !== ""){
                            gerarTabuada(intval($_GET['num']));
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>