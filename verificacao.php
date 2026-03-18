<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>"Verificador de acesso"</h2>
        <?php 
        $idade = 20;
        $tem_ingresso = true;

        if ($idade >= 10 && $tem_ingresso){
            echo"<p style = 'color : green'>Acesso Liberado!</p>";
        }else{
            echo"<p style = 'color : red'>Acesso Negadoado!</p>";

        }

        ?>
    </div>
</body>
</html>