<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>Usuário cadastrado</h1>
    </header>

    <main>
        <?php
        $nome = $_GET['nome'];
        $sobrenome = $_GET['sobrenome'];


        if (!empty($nome) and !empty($sobrenome)) {
            echo "<p>Bem vindo ao site $nome $sobrenome</p>";
        } else {
            echo "Existem campos em branco, verique-os";
        }
        ?>



        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>

</html>