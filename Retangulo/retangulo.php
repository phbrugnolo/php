<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple-v1.css">
    <title>Calculado</title>
</head>

<body>
    <center>
        <?php

        $lado1 = $_GET['lado1'];
        $lado2 = $_GET['lado2'];

        if ($lado1 > 0 and $lado2 > 0) {
            echo "<h3>A area do retangulo é " . $lado1 * $lado2;
            echo "<br><h3>E o seu perimetro é de " . $lado1*2 + $lado2*2;
        } else {
            echo "<h3>Voce digitou um valor inválido";
        }

        ?>
        <a href="javascript:history.go(-1)">
            <h2>Voltar para a página anterior</h2>
        </a>
        </p>
    </center>
</body>

</html>
