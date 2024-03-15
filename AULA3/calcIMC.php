<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 3</title>
</head>
<body>
    <h2>Calculo IMC</h2>


    <?php

 
        $peso = 70; 
        $altura = 170; 
        

        $alturaMetros = $altura / 100;


        $imc = $peso / ($alturaMetros * $alturaMetros);


        $imc = round($imc, 2);


        if ($imc < 18.5) {
            $status = "Abaixo do peso";
        } elseif ($imc >= 18.5 && $imc < 24.9) {
            $status = "Peso normal";
        } elseif ($imc >= 25 && $imc < 29.9) {
            $status = "Sobrepeso";
        } elseif ($imc >= 30 && $imc < 34.9) {
            $status = "Obesidade Grau I";
        } elseif ($imc >= 35 && $imc < 39.9) {
            $status = "Obesidade Grau II";
        } else {
            $status = "Obesidade Grau III";
        }

        echo "Seu IMC é: $imc. Você está classificado como: $status";

    ?>


</body>
</html>