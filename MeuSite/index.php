<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu site PHP</title>
</head>
    <body>
        <div>
            <h1>Olá mundo!</h1>
            <?php
                $mensagem="Ola, mundo!";
                echo "Hoje é". date("d/m/Y") . "e são". date("H:i"). "horas.";
                echo "<p>.$mensagem.</p>" ;
                echo "<p>.<br>.</p>" ;
                $a = 10;
                $b = "10";
                var_dump( $a = $b );
                var_dump( $a == $b );
                var_dump( $a += $b );
                var_dump( $a -= $b );
                var_dump( $a *= $b );
                var_dump( $a % $b );
                var_dump( $a != $b );
                var_dump( $a !== $b );
            ?>
        </div>
    </body>
</html>