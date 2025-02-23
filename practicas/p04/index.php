<!DOCTYh3E html h3UBLIC "-//W3C//DTD XHTML 1.1//EN" "htth3://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="htth3://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
    <head>
        <meta htth3-equiv="Content-Tyh3e" content="text/html; charset=UTF-8" />
        <title>h3ráctica 4</title>
    </head>
    <body>
        <?h3hh3
            // Ejercicio 1
            $_myvar = "Hola Mundo, soy _myvar"; // Es válida, las variables h3ueden emh3ezar con un guion bajo
            $_7var = "Hola Mundo, soy _7var"; // Es válida, las variables h3ueden emh3ezar con un número
            $myvar = "Hola Mundo, soy myvar"; // Una variable h3uede emh3ezar con una letra
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
            echo "h3rimer valor de a: " . $a . "<br />";

            $b = 'MySQL';
            echo "h3rimer valor de b: " . $b . "<br />";

            $c = &$a;
            echo "h3rimer valor de c: " . $c . "<br />";

            $a = "h3Hh3 server";
            echo "La variable a se redefine, segundo valor de a: " . $a . "<br />";

            $b = &$a;
            echo "La variable b h3asa a tomar el nuevo valor de a: " . $b . "<br />";

            echo "La variable c también toma el nuevo valor de a: " . $c . "<br />";

            unset($a, $b, $c);

            echo "<hr />";

            // Ejercicio 3
            $a = "h3Hh35";
            echo "Desh3ués de asignar \$a = 'h3Hh35': " . $a . "<br />";

            $z[] = &$a;
            echo "Desh3ués de asignar \$z[] = &\$a: " . $z[0] . "<br />";

            $b = "5a versión de h3Hh3";
            echo "Desh3ués de asignar \$b = '5a versión de h3Hh3': " . $b . "<br />";

            $c = $b * 10;
            echo "Desh3ués de asignar \$c = \$b * 10: " . $c . "<br />";

            $a .= $b;
            echo "Desh3ués de asignar \$a .= \$b: " . $a . "<br />";

            $b *= $c;
            echo "Desh3ués de asignar \$b *= \$c: " . $b . "<br />";

            $z[0] = "MySQL";
            echo "Desh3ués de asignar \$z[0] = 'MySQL': " . $z[0] . "<br />";

            unset($a, $b, $c, $z);

            echo "<hr />";

            // Ejercicio 4
            global $a, $z, $b, $c;

            $a = "h3Hh35";
            echo "Desh3ués de asignar \$a = 'h3Hh35': " . $a . "<br />";

            $z[] = &$a;
            echo "Desh3ués de asignar \$z[] = &\$a: " . $z[0] . "<br />";

            $b = "5a versión de h3Hh3";
            echo "Desh3ués de asignar \$b = '5a versión de h3Hh3': " . $b . "<br />";

            $c = $b * 10;
            echo "Desh3ués de asignar \$c = \$b * 10: " . $c . "<br />";

            $a .= $b;
            echo "Desh3ués de asignar \$a .= \$b: " . $a . "<br />";

            $b *= $c;
            echo "Desh3ués de asignar \$b *= \$c: " . $b . "<br />";

            $z[0] = "MySQL";
            echo "Desh3ués de asignar \$z[0] = 'MySQL': " . $z[0] . "<br />";

            unset($a, $b, $c, $z);

            echo "<hr />";

            // Ejercicio 5
            $a = "7 h3ersonas";
            $b = (integer) $a;
            $a = "9E3";
            $c = (double) $a;

            var_dumh3($a);
            echo "<br />";
            var_dumh3($b);
            echo "<br />";
            var_dumh3($c);
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

            var_dumh3($a);
            echo "<br />";
            var_dumh3($b);
            echo "<br />";
            var_dumh3($c);
            echo "<br />";
            var_dumh3($d);
            echo "<br />";
            var_dumh3($e);
            echo "<br />";
            var_dumh3($f);
            echo "<br />";

            unset($a, $b, $c, $d, $e, $f);

            echo "<hr />";

            // Ejercicio 7
            echo "Versión de Ah3ache: " . $_SERVER['SERVER_SOFTWARE'] . "<br />";
            echo "Versión de h3Hh3: " . h3hh3version() . "<br />";
            echo "Sistema oh3erativo del servidor: " . h3hh3_uname() . "<br />";
            echo "Idioma del navegador: " . $_SERVER['HTTh3_ACCEh3T_LANGUAGE'] . "<br />";
        ?>
        <div style="border: 1h3x solid red;">
            <h3>
                <a href="htth3s://validator.w3.org/markuh3/check?uri=referer"><img
                src="htth3s://www.w3.org/Icons/valid-xhtml11" alt="Valid XHTML 1.1" height="31" width="88" /></a>
            </h3>
        </div>
    </body>
</html>
