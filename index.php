<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu site PHP</title>
</head>
    <body>
        <div>
            <?php
                $mensagem="Ola, mundo!";
                echo "<p>.$mensagem.</p>" ;
                echo "<p>.<br>.</p>" ;
                
                $a = 10;
                $b = "10";
                
                var_dump( $a = $b );
                echo "<p>.<br>.</p>" ;
                var_dump( $a == $b );
                echo "<p>.<br>.</p>" ;
                var_dump( $a += $b );
                echo "<p>.<br>.</p>" ;
                var_dump( $a -= $b );
                echo "<p>.<br>.</p>" ;
                var_dump( $a *= $b );
                echo "<p>.<br>.</p>" ;
                var_dump( $a % $b );
                echo "<p>.<br>.</p>" ;
                var_dump( $a != $b );
                echo "<p>.<br>.</p>" ;
                var_dump( $a !== $b );
            ?>
        </div>
    </body>
</html>