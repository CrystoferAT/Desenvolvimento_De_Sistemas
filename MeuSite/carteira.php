<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carteira</title>
</head>
<body>
    <div>
        <?php 

           $x = true; 
           $y = false; 
           
           var_dump( $x && $y);
           var_dump( $x || $y);
           var_dump( !$x);
           
           $idade = 29;
           $tem_carteira = true;

           if ($idade >=18 && $tem_carteira == true) {
                echo"Pode dirigir!";
            }else{
                
                echo"Não pode dirigir!";
           }
        ?>
    </div>
</body>
</html>