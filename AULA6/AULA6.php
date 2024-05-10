<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 6</title>
</head>

<body>
    <?php
        $nome = 'PHP';
        echo '$nome <br>';

        echo "teste.teste $nome ";

        $name = "Acelino";
        $snome = "Freitas";

        echo "<br>$name $snome" ;

        // HereDoc
        echo <<< txz
            <br>$nome e esquiso. 
        txz;
                   
        //NowDoc
        echo <<< "txz"
            <br>$nome e esquiso. 
        txz;

        echo "<br><br>";

        //RegEx
        function valida($data){
            $padrao = '/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/';
            $res = preg_match($padrao, $data);
            if($res == 1){
                return "data correta";
            }
            else {
                return "data incorreta";
            }
        }

        echo valida('03/02/2312');
        
        $array = [
            "Client" => [
                "nome" => "P",
                "sob" => "H", 
                "ddd" => "41"
            ], "Client2" => [
                "nome" => "N",
                "sob" => "S",
                "ddd" => "49"
            ]
        ];

        foreach ($array as $key) {
            foreach($key as $newkey => $valor){
                echo "<br>$newkey =  $valor";
            }
        }

    ?>
</body>

</html>