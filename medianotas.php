<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media notas</title>
</head>
<body>
    <div>
        <?php 

        $titulo = "<h>Média de Notas </h>";

        echo"$titulo";
        echo"<br>";
        
        $notas =[8.5, 7.0, 9.0, 6.5];
        $soma = array_sum($notas);
        $quant = count($notas);
        $media = $soma / $quant;
        
        //echo"Média é $media";
        echo"<br>";
        
        if($media >= 7){
            echo"Média:". number_format($media,2);
            echo"- Aprovado";
        }else{
            echo"Média:", number_format($media,2);
            echo"Reprovado.";
        }
        ?>
    </div>
</body>
</html>