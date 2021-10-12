<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 1</title>
    </head>

    <body>
        
        <?php

            //punto a)
            $cadena = "Desarrollo web orientado al comercio electrónico";

            //punto b)
            echo strlen($cadena);
            echo ("<br>");

            //punto c)
            echo str_word_count($cadena);
            echo ("<br>");

            //punto d)
            echo str_replace("comercio electrónico", "eCommerce", $cadena);

        ?>

    </body>

</html>