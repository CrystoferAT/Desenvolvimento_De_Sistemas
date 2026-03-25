<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
</head>
<?php include'navbar.php';?>
<body>
    <div>
        <table border="1" style="border-collapse: collapse; width: 100%; text-align: center;">
            <thead>
                <tr style="background-color: #333; color: white;">
                    <th>Horário</th>
                    <th>Segunda</th>
                    <th>Terça</th>
                    <th>Quarta</th>
                    <th>Quinta</th>
                    <th>Sexta</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    for($hora = 8; $hora < 12; $hora++){
                        echo "<tr>";
                        echo "<td></td>";
                        for($dia = 1; $dia <= 5; $dia++){
                            echo"<td>----</td>";
                        }
                        echo"</tr>";
                    }

                ?>
            </tbody>
        </table>
    </div>
</body>
</html>