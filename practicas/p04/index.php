<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.1//EN”
“http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd”>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang=“es” lang=“es”>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Practica 4</title>
    </head>
    <body>
        <?php
             // Ejericio 1

            $_myvar = "Hola Mundo, soy _myvar"; // Es valida, las variables pueden empezar con un guion bajo
            $_7var = "Hola Mundo, soy _7var"; // Es valida, las variables pueden empezar con un numero
            // myvar -> No es una variable valida porque no esta declarada
            // no tiene el signo $ antes del nombre
            $myvar = "Hola Mundo, soy myvar"; // Una variable puede empezar con una letra
            $var7 = "Hola Mundo, soy var7"; // Lo mismo, una variable normal 
            $_element1 = "Hola Mundo, soy _element1";
            // $house*5 = "Hola Mundo"; Una variable no puede tener caracteres
            // especiales como el asterisco

            echo $_myvar . "<br>";
            echo $_7var . "<br>";
            // echo myvar 
            echo $myvar . "<br>";
            echo $var7 . "<br>";
            echo $_element1 . "<br>";   
            // echo $house*5 . "<br>";

            unset($_myvar);
            unset($_7var);
            unset($myvar);
            unset($var7);
            unset($_element1);

            echo "<hr>";

            
        ?>
    </body>
</html>