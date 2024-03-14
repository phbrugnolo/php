<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Lista</title>
</head>

<body>

    <h1>Exercicio 1</h1>

    <?php

        $a = 2;
        $b = 4;
        $c = 6;
        $m = (($c + $b) / 2) ** (--$c);
        $t = --$c ** ($b + $a);
        $x = --$c + $b;
        $y = $b++ + $a;
        $z = $a - $b--;

        echo "A variavel a tem o seguinte valor " . $a;
        echo "<br>A variavel b tem o seguinte valor " . $b;
        echo "<br>A variavel c tem o seguinte valor " . $c;
        echo "<br>A variavel m tem o seguinte valor " . $m;
        echo "<br>A variavel t tem o seguinte valor " . $t;
        echo "<br>A variavel x tem o seguinte valor " . $x;
        echo "<br>A variavel y tem o seguinte valor " . $y;
        echo "<br>A variavel z tem o seguinte valor " . $z;

        $varAConv = (float) $a;
        $varBConv = (float) $b;
        $varCConv = (string) $c;

        echo "<br>A variavel A convertida é um " . gettype($varAConv);
        echo "<br>A variavel B convertida é um " . gettype($varBConv);
        echo "<br>A variavel C convertida é um " . gettype($varCConv);


    ?>

    <br>
    <h1>Exercicio 2</h1>
    <br>

    <?php 

        $raio = 5;
        $pi = 3.14;
        $area = pow($raio , 2) * $pi;
        $perimetro = 2 * $pi * $raio;

        echo "O raio do circulo é " . $raio;
        echo "<br>A constante de pi é " . $pi;
        echo "<br>A area do circulo é " . $area;
        echo "<br>O perimetro do circulo é " . $perimetro;
        
    ?>

    <br>
    <h1>Exercicio 3</h1>
    <br>

    <?php 
    
    $num1 = 20;
    $num2 = 5;
    
    echo "O 1° número é " . $num1;
    echo "<br>O 2° número é " . $num2;
    echo "<br>A soma $num1 e $num2 é " . $num1 + $num2;
    echo "<br>A subtração $num1 e $num2 é " . $num1 - $num2;
    echo "<br>A multiplicação $num1 e $num2 é " . $num1 * $num2;
    echo "<br>A divisão $num1 e $num2 é " . $num1 / $num2;
    echo "<br>O modulo da subtração $num1 e $num2 é " . $num1 % $num2;
    echo "<br>O resto da divisão $num1 e $num2 é " . ($num1 / $num2) %  2;
    echo "<br> A exponenciação entre $num1 e $num2 é " . pow($num1, $num2);
    echo "<br> A média de $num1 e $num2 é " . ($num1 + $num2) / 2;
    echo "<br> A raiz quadrada da soma de $num1 e $num2 é " . sqrt(($num1 + $num2));
    
    ?>

    <br>
    <h1>Exercicio 4</h1>
    <br>

    <?php 
    
    $varx = 3;
    echo "O resultado da equação é " .  (2 * pow($varx, 2) + (pow((3 * $varx) , ($varx + 1)))/ 2 * $varx) + (sqrt(($varx + 1)) / 4) / sqrt((4 * $varx) + pow(2, $varx));
    
    ?>

    <br>
    <h1>Exercicio 5</h1>
    <br>

    <?php 
    
    $numA = 2;
    $numB = 2;
    $numC = 2;
    $numR = pow(($numA + $numB), 2); 
    $numS = pow(($numB + $numC), 2);

    echo "O resultado da equação é " . ($numR + $numS) / 2;
    
    
    ?>
</body>

</html>