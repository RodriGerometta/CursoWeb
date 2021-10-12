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

            $a = 4;
            $b = 2;
            $inicioA = $a;
            $inicioB = $b;

            echo ("<b>OPERADORES DE INCREMENTO</b> <br>");
            echo ("Valores iniciales: a=$a, b=$b <br><br>");

            echo ("Operador ++ (Pre-incremento): ++a * b == " .++$a*$b. "<br>");
            echo ("(Ahora el valor de a es: $a)<br><br>");

            $a = $inicioA;

            echo ("Operador ++ (posterior): a++ * b ==" .$a++*$b. "<br>");
            echo ("(Ahora el valor de a es: $a)<br><br>");

            $a = $inicioA;

            echo ("Operador -- (anterior): --a * b ==" .--$a*$b. "<br>");
            echo ("(Ahora el valor de a es: $a)<br><br>");

            $a = $inicioA;

            echo ("Operador -- (posterior): a-- * b ==" .$a--*$b. "<br>");
            echo ("(Ahora el valor de a es: $a)<br><br>");
        ?>

    </body>

</html>