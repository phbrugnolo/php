<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex002</title>
</head>

<body>

    <h3>Exercicio 1</h3>
    <br>

    <?php

    $nota1 = 10;
    $nota2 = 10;
    $nota3 = 10;

    $media = ($nota1 + $nota2 + $nota3) / 3;

    if ($media < 4) {
        echo "Aluno reprovado";
    } elseif ($media >= 4 && $media < 6) {
        echo "Aluno aguardando prova substitutiva";
    } elseif ($media >= 6 && $media < 9.9) {
        echo "Aluno aprovado";
    } elseif ($media == 10) {
        echo "Aluno aprovado sem dificuldade";
    } else {
        echo "Média inserida incorretamente";
    }

    echo "<br>";

    echo match (true) {
        $media < 4 => "Aluno reprovado",
        $media >= 4 && $media < 6 => "Aluno aguardando prova substitutiva",
        $media >= 6 && $media < 9.9 => "Aluno aprovado",
        $media == 10 => "Aluno aprovado sem dificuldade",
        default => "Média inserida incorretamente"
    };

    ?>

    <br>
    <h3>Exercicio 2</h3>
    <br>

    <?php

    $lado1 = 5;
    $lado2 = 7;
    $lado3 = 8;

    if ($lado1 == $lado2 && $lado2 == $lado3) {
        echo "Equilátero";
    } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
        echo "Isósceles";
    } else {
        echo "Escaleno";
    }

    ?>

    <br>
    <h3>Exercico 3</h3>
    <br>

    <?php

    $numero = 7;

    if ($numero % 2 == 0) {
        echo "par";
    } else {
        echo "ímpar";
    }

    echo "<br>";

    switch ($numero % 2) {
        case 0:
            echo "par";
            break;
        case 1:
            echo "ímpar";
            break;
    }

    echo "<br>";

    echo match ($numero % 2) {
        0 => "par",
        1 => "ímpar"
    };

    ?>

    <br>
    <h3>Exercicio 4</h3>
    <br>

    <?php

    $dataNasc = 2000;

    // Calculando a idade do usuário
    $idade = 2024 - $dataNasc;

    // Verificando se o usuário está apto a votar
    if ($idade >= 18) {
        echo "Você tem $idade anos e está apto a votar";
    } else {
        echo "Você tem $idade anos e ainda não está apto a votar";
    }
    ?>

    <br>
    <h3>Exercicio 5</h3>
    <br>

    <?php
    $numero = 25;

    $operacao = "raiz"; 

    switch ($operacao) {
        case "dobro":
            echo "O dobro de $numero é " . ($numero * 2);
            break;
        case "cubo":
            echo "O cubo de $numero é " . pow($numero, 3);
            break;
        case "raiz":
            echo "A raiz quadrada de $numero é " . sqrt($numero);
            break;
        default:
            echo "Operação inválida";
    }

    echo "<br>";

    echo match ($operacao) {
        "dobro" => "O dobro de $numero é " . ($numero * 2),
        "cubo" => "O cubo de $numero é " . pow($numero, 3),
        "raiz" => "A raiz quadrada de $numero é " . sqrt($numero),
        default => "Operação inválida"
    };
    ?>

</body>

</html>