<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple-v1.css">
    <title>Calculadora</title>
</head>

<body>
    <h2>Calculadora PHP</h2>
    <form method="post">
        <input type="text" name="num1" placeholder="Digite o primeiro número">
        <select name="operator">
            <option value="+">Adição</option>
            <option value="-">Subtração</option>
            <option value="*">Multiplicação</option>
            <option value="/">Divisão</option>
            <option value="**">Potenciação</option>
            <option value="sqrt">Radiacição</option>
            <option value="fat">Fatorial</option>
        </select>
        <input type="text" name="num2" placeholder="Digite o segundo número">
        <input type="submit" name="submit" value="Calcular">
    </form>

    <?php
    include 'funcoes.php';

    if (isset($_POST['submit'])) {
        $num1 = str_replace(',', '.', $_POST['num1']);
        $num2 = str_replace(',', '.', $_POST['num2']);
        $operator = $_POST['operator'];
        $result = '';

        if ($num1 === '' || !is_numeric($num1)) {
            echo "Por favor, insira um número válido para o primeiro campo.";
        } else if ($num2 === '' || !is_numeric($num2)) { 
            echo "Por favor, insira um número válido para o segundo campo.";
        } else {
            switch ($operator) {
                case '+':
                    $result = $num1 + $num2;
                    break;
                case '-':
                    $result = $num1 - $num2;
                    break;
                case '*':
                    $result = $num1 * $num2;
                    break;
                case '/':
                    if ($num2 == 0) {
                        $result = 'Não é possível dividir por zero';
                    } else {
                        $result = $num1 / $num2;
                    }
                    break;
                case '**':
                    $result = potenciacao($num1,$num2);
                    break;
                case 'sqrt':
                    $result = raizQuadrada(($num1 + $num2));
                    break;
                case 'fat' :
                    $result = fatorial(($num1 + $num2));
                    break;
                default:
                    $result = 'Operador inválido';
                    break;
            }
        }
        echo "Resultado: " . number_format($result, 2, ',', '.');
    }
    ?>
</body>
</html>
