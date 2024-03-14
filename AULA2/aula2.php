<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2</title>
</head>

<body>

    <?php

    $varPrint = 'Hello World';
    echo $varPrint;

    // Codigo 1
    $varCorreto = "Correto";
    $_varBosta = "Bosta";

    echo "<br>Esse tipo de variavel é " . gettype($varCorreto);
    echo "<br>" . $_varBosta;

    $varInt = 55;
    echo "<br>Essa variavel é do tipo " . gettype($varInt);


    // Codigo Matematica
    $varNum1 = 80;
    $varNum2 = 2;
    $varSub = $varNum1 - $varNum2;
    $varExpo = pow($varNum1, $varNum2);
    $varMod = $varNum1 % $varNum2;


    echo "<br>O 1° numero é " . $varNum1;
    echo "<br>O 2° numero é " . $varNum2;
    echo "<br>A subtração é  " . $varSub;
    echo "<br>A exponenciação é " . $varExpo;
    echo "<br>O modulo é " . $varMod;

    // Codigo Type
    $varStringNum = '11.53';
    echo "<br>" . gettype($varStringNum);
    $varNumStrConv = (float) $varStringNum;
    echo "<br>" . gettype($varNumStrConv) . "<br>";

    $varBesta = 666.66;
    var_dump($varBesta);

    $a = 42;
    $b = "<br> Olá imundo! <br>";
    echo var_dump($a, $b);


    // Codigo Array
    // $vetor = array('Python', 'Java', 'JavaScript', 'PHP');
    // var_dump($vetor);

    $linguagens = array(
        array('PHP', 'Hypertext PreProcessor'),
        array('Sql', 'Structured Query Language')
    );

    var_dump($linguagens[1][1]);




    ?>




</body>

</html>