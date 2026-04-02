<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelo</title>
</head>
<body>
    <div style=" border: 15px; margin: 20px; padding: 20px">
        <?php
            if(isset($_GET['a']) && isset($_GET['b'])){
                $soma = $_GET['a']+ $_GET['b'];
                echo "<hr><h2>Soma</h2>";
                echo "{$_GET['a']} + {$_GET['b']} = $soma";
            }else{
                echo "<hr><p>Para somar, use a URL: ?a=5&b=10</p>";
            }
        ?>
    </div>
</body>
</html>