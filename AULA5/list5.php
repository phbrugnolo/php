<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista 5</title>
</head>

<body>
    <?php
    function calcularMedia($aluno, $nota1, $nota2, $nota3, $nota4)
    {
        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

        if ($media >= 6) {
            $situacao = "Aprovado";
        } elseif ($media < 6 && $media >= 4) {
            $situacao = "Recuperação";
        } else {
            $situacao = "Reprovado";
        }

        echo "$aluno - Média: " . number_format($media, 2) . " - Situação: $situacao <br>";
    }

    calcularMedia("Aluno 1", 7, 8, 6, 5);
    calcularMedia("Aluno 2", 5, 4, 3, 2);
    calcularMedia("Aluno 3", 9, 8, 9, 7);
    ?>

    <br>
    <br>

    <?php
    function somaPositiva($a, $b)
    {
        if ($a > 0 && $b > 0) {
            $soma = $a + $b;
            return $soma;
        } else {

            $soma = 0;
            return $soma;
        }
    }

    echo somaPositiva(3, 5) . "<br>"; 
    echo somaPositiva(-2, 5); 
    ?>

    <br>
    <br>

    <?php
    function calcular($operacao, $num1, $num2)
    {
        switch ($operacao) {
            case "soma":
                $resultado = $num1 + $num2;
                break;
            case "subtracao":
                $resultado = $num1 - $num2;
                break;
            case "multiplicacao":
                $resultado = $num1 * $num2;
                break;
            case "divisao":
                $resultado = $num1 / $num2;
                break;
            case "exponenciacao":
                $resultado = pow($num1, $num2);
                break;
            default:
                return "Operação inválida";
        }

        echo "Resultado da $operacao: $resultado <br>";
    }

    calcular("soma", 5, 3);
    calcular("subtracao", 10, 4);
    calcular("multiplicacao", 7, 2);
    calcular("divisao", 10, 2);
    calcular("exponenciacao", 2, 3);
    ?>

    <br>
    <br>

    <?php
    function calcularMediaGeral($notas)
    {
        $totalNotas = count($notas);
        $soma = array_sum($notas);
        $media = $soma / $totalNotas;

        if ($media >= 6) {
            echo "Média: " . number_format($media, 2) . " - Aprovado <br>";
        } elseif ($media < 6) {
            echo "Média: " . number_format($media, 2) . " - Reprovado <br>";
        }

        if ($media > 10) {
            echo "Alguma(s) das notas é inválida. <br>";
        }
    }

    calcularMediaGeral([7, 8, 6, 5]);
    calcularMediaGeral([5, 4, 3, 2]);
    calcularMediaGeral([9, 8, 9, 7]);
    ?>

    <br>
    <br>

    <?php
    function calcularFatorial($numero)
    {
        if ($numero == 0 || $numero == 1) {
            return 1;
        } else {
            return $numero * calcularFatorial($numero - 1);
        }
    }

    $numero = 5;
    echo "!$numero = " . calcularFatorial($numero);
    ?>

</body>

</html>