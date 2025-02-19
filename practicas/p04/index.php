<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Práctica 4</title>
    </head>
    <body>
        <?php
            // Ejercicio 1
            $_myvar = "Hola Mundo, soy _myvar"; // Es válida, las variables pueden empezar con un guion bajo
            $_7var = "Hola Mundo, soy _7var"; // Es válida, las variables pueden empezar con un número
            $myvar = "Hola Mundo, soy myvar"; // Una variable puede empezar con una letra
            $var7 = "Hola Mundo, soy var7"; // Lo mismo, una variable normal 
            $_element1 = "Hola Mundo, soy _element1";

            echo $_myvar . "<br />";
            echo $_7var . "<br />";
            echo $myvar . "<br />";
            echo $var7 . "<br />";
            echo $_element1 . "<br />";

            unset($_myvar, $_7var, $myvar, $var7, $_element1);

            echo "<hr />";

            // Ejercicio 2
            $a = "ManejadorSQL";
            echo "Primer valor de a: " . $a . "<br />";

            $b = 'MySQL';
            echo "Primer valor de b: " . $b . "<br />";

            $c = &$a;
            echo "Primer valor de c: " . $c . "<br />";

            $a = "PHP server";
            echo "La variable a se redefine, segundo valor de a: " . $a . "<br />";

            $b = &$a;
            echo "La variable b pasa a tomar el nuevo valor de a: " . $b . "<br />";

            echo "La variable c también toma el nuevo valor de a: " . $c . "<br />";

            unset($a, $b, $c);

            echo "<hr />";

            // Ejercicio 3
            $a = "PHP5";
            echo "Después de asignar \$a = 'PHP5': " . $a . "<br />";

            $z[] = &$a;
            echo "Después de asignar \$z[] = &\$a: " . $z[0] . "<br />";

            $b = "5a versión de PHP";
            echo "Después de asignar \$b = '5a versión de PHP': " . $b . "<br />";

            $c = $b * 10;
            echo "Después de asignar \$c = \$b * 10: " . $c . "<br />";

            $a .= $b;
            echo "Después de asignar \$a .= \$b: " . $a . "<br />";

            $b *= $c;
            echo "Después de asignar \$b *= \$c: " . $b . "<br />";

            $z[0] = "MySQL";
            echo "Después de asignar \$z[0] = 'MySQL': " . $z[0] . "<br />";

            unset($a, $b, $c, $z);

            echo "<hr />";

            // Ejercicio 4
            global $a, $z, $b, $c;

            $a = "PHP5";
            echo "Después de asignar \$a = 'PHP5': " . $a . "<br />";

            $z[] = &$a;
            echo "Después de asignar \$z[] = &\$a: " . $z[0] . "<br />";

            $b = "5a versión de PHP";
            echo "Después de asignar \$b = '5a versión de PHP': " . $b . "<br />";

            $c = $b * 10;
            echo "Después de asignar \$c = \$b * 10: " . $c . "<br />";

            $a .= $b;
            echo "Después de asignar \$a .= \$b: " . $a . "<br />";

            $b *= $c;
            echo "Después de asignar \$b *= \$c: " . $b . "<br />";

            $z[0] = "MySQL";
            echo "Después de asignar \$z[0] = 'MySQL': " . $z[0] . "<br />";

            unset($a, $b, $c, $z);

            echo "<hr />";

            // Ejercicio 5
            $a = "7 personas";
            $b = (integer) $a;
            $a = "9E3";
            $c = (double) $a;

            var_dump($a);
            echo "<br />";
            var_dump($b);
            echo "<br />";
            var_dump($c);
            echo "<br />";

            unset($a, $b, $c);

            echo "<hr />";

            // Ejercicio 6
            $a = "0";
            $b = "TRUE";
            $c = FALSE;
            $d = ($a OR $b);
            $e = ($a AND $c);
            $f = ($a XOR $b);

            var_dump($a);
            echo "<br />";
            var_dump($b);
            echo "<br />";
            var_dump($c);
            echo "<br />";
            var_dump($d);
            echo "<br />";
            var_dump($e);
            echo "<br />";
            var_dump($f);
            echo "<br />";

            unset($a, $b, $c, $d, $e, $f);

            echo "<hr />";

            // Ejercicio 7
            echo "Versión de Apache: " . $_SERVER['SERVER_SOFTWARE'] . "<br />";
            echo "Versión de PHP: " . phpversion() . "<br />";
            echo "Sistema operativo del servidor: " . php_uname() . "<br />";
            echo "Idioma del navegador: " . $_SERVER['HTTP_ACCEPT_LANGUAGE'] . "<br />";
        ?>
        <div style="border: 1px solid red;">
            <p>
                <a href="https://validator.w3.org/markup/check?uri=referer"><img
                src="https://www.w3.org/Icons/valid-xhtml11" alt="Valid XHTML 1.1" height="31" width="88" /></a>
            </p>
        </div>
    </body>
</html>
