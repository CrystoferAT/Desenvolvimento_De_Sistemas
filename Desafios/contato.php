<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
</head>
<body>
    <?php include'navbar.php';?>

    <div class="container-form">
        <form method="post" action="#">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" id="email">
            </div>
            <div class="form-group">
                <label for="text">Texto</label>
                <textarea   id="texto"></textarea>
            </div>
        </form>
        <button type="submit" class= "btn">Enviar Contato</button>
    </div>
    
</body>
</html>