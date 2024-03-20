<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Match</title>
</head>
<body>
    <?php 

        $idade = 24;
        

        echo match(true){
            $idade < 5 => "Nenhuma categoria",
            $idade >= 5 && $idade < 8 => "Infantil",
            $idade >= 8 && $idade < 12 => "Juvenil",
            $idade >= 12 && $idade < 17 => "Adolescente",
            $idade >= 17 && $idade < 40 => "Adulto",
            $idade >= 40 && $idade < 60 => "Senior",
            default => "Idoso"
        };

    ?>
</body>
</html>