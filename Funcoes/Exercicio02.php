<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticação e Salário com Bônus</title>
</head>
<body>
    <h2 style="text-align: center;">Autenticação e Salário com Bônus</h2>
    <div style=" border: 15px; margin: 20px; padding: 20px">
        <form action="" method="get" style="display:flex ; flex-direction: column ; max-width: 250px">
            Nome:<input type="text" name="nome">
            Senha: <input type="password" name="senha">
            Cargo: <input type="text" name="cargo">
            Salário: <input type="number" name="salarioBase">
            Hora: <input type="number" name="horaAtual">
            <br> <button type="submit" name="enviar">Enviar</button> <br>

        </form>
        <?php
            if(isset($_GET['nome']) && isset($_GET['senha']) && isset($_GET['cargo']) && isset($_GET['salarioBase']) && isset($_GET['horaAtual'])){
                $nome = $_GET['nome'];
                $senha = $_GET['senha'];
                $cargo = $_GET['cargo'];
                $salario =(float) $_GET['salarioBase'];
                $hora = $_GET['horaAtual'];
                
                $autenticacao = ($senha === "php2026")? salarioBonus($salario,$cargo) : "<h3>Senha invalida</h3>";
                echo saudacaoHora($nome,$hora);
                
                
                }
            function salarioBonus($salario, $cargo){
            
                $salarioBonus =($cargo == "gerente")? $salario * 1.2 : $salario * 1.1;
                echo "<h3>Resultado</h3>";
                echo "<p>Salario é {$salarioBonus}</p>";
            }
            function saudacaoHora($nome, $hora){
                if ($hora < 12) return "<h2><strong>Bom Dia {$nome}!</strong></h2>";
                if ($hora < 18) return "<h2><strong>Boa Tarde {$nome}</strong></h2>";
                return "<h2><strong> Boa Noite {$nome}!</strong></h2>";
            }

        ?>
    </div>
</body>
</html>