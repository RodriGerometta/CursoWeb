<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 2</title>
    </head>

    <body>
        
        <?php

            //punto a)
            $resultado = (min (15, -150, 60, 10, -5, 200));
            echo ("El menor valor de la lista es: $resultado <br>" );
            
            //punto b)
            if ($resultado < 0){
                echo ("El valor absoluto es: " .(abs ($resultado)));
            }
            
        ?>

    </body>
    
</html>