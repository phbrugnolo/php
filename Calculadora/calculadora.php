<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <h2>Calculadora PHP</h2>
    <form method="post">
        <input type="text" name="num1" placeholder="Digite o primeiro número" required>
        <select name="operator">
            <option value="+">Adição</option>
            <option value="-">Subtração</option>
            <option value="*">Multiplicação</option>
            <option value="/">Divisão</option>
            <option value="**">Potenciação</option>
            <option value="sqrt">Radiacição</option>
            <option value="fat">Radiacição</option>
        </select>
        <input type="text" name="num2" placeholder="Digite o segundo número" required>
        <input type="submit" name="submit" value="Calcular">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num1 = str_replace(',', '.', $_POST['num1']);
        $num2 = str_replace(',', '.', $_POST['num2']);
        $operator = $_POST['operator'];
        $result = '';

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
                $result = sqrt($num1);
                break;
            case 'fat' :
                $result = 0;
                break;
            default:
                $result = 'Operador inválido';
                break;
        }

        echo "Resultado: " . number_format($result, 2, ',', '.');
    }
    ?>

    <?php 
    
    function potenciacao($base, $expoente) {
        if ($expoente == 0) {
            return 1;
        } elseif ($expoente < 0) {
            $base = 1 / $base;
            $expoente = abs($expoente);
        }
        
        $resultado = 1;
        for ($i = 0; $i < $expoente; $i++) {
            $resultado *= $base;
        }
        return $resultado;
    }
  
    
    ?>
</body>

</html>