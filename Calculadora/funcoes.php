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

    function raizQuadrada($numero, $tolerancia = 0.00001) {
        $chute = $numero / 2;
        
        while ($chute * $chute - $numero >= $tolerancia || $chute * $chute - $numero <= -$tolerancia) {
            $chute = ($chute + $numero / $chute) / 2;
        }
        
        return $chute;
    }
    
    function fatorial($numero) {
        if ($numero < 0) {
            return "O fatorial não está definido para números negativos.";
        }
    
        if ($numero === 0) {
            return 1;
        }
    
        $fatorial = 1;
    
        for ($i = 1; $i <= $numero; $i++) {
            $fatorial *= $i;
        }
    
        return $fatorial;
    }
      
    ?>