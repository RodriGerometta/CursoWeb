<?php
    
    $x = 5;
    $y = $x;
    
    while ($x > 1){

        $y = $y * ($x - 1);

        $x = $x - 1;
      
    }

    echo ("el factorial de 5 es: " .$y);

?>