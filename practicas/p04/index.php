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

            // Ejercicio 2

            $a = "ManejadorSQL";
            echo "Primer valor de a: " . $a . "<br>";

            $b = 'MySQL';
            echo "Primer valor de b: " . $b . "<br>";

            $c = &$a;
            echo "Primer valor de c: " . $c . "<br>";

            echo $a . "<br>";
            echo $b . "<br>";
            echo $c . "<br>";

            echo "<br>";    

            $a = "PHP server";
            echo "La variable a se redefine, segundo valor de a: " . $a . "<br>";

            $b = &$a;
            echo "La variable b pasa a tomar el nuevo valor de a: " . $b . "<br>";

            echo "Mas arriba se declaro que la variable c iba a tomar el valor
            de a, asi se modifique las veces que sea, por lo que paso a tomar
            el nuevo valor de a: " . $c . "<br>";

            echo $a . "<br>";
            echo $b . "<br>";
            echo $c . "<br>";

            unset($a);
            unset($b);
            unset($c);

            echo "<hr>";

             // Ejercicio 3

            $a = "PHP5";
            echo "Después de asignar \$a = 'PHP5': ";
            echo "Resultado: " . $a;
            echo "<br><br>";

            
            $z[] = &$a;
            echo "Después de asignar \$z[] = &\$a: ";
            echo "Resultado: " . $z[0];
            echo "<br><br>";

        
            $b = "5a version de PHP";
            echo "Después de asignar \$b = '5a version de PHP': ";
            echo "Resultado: " . $b;
            echo "<br><br>";


            $c = $b * 10;
            echo "Después de asignar \$c = \$b * 10: ";
            echo "Resultado: " . $c;
            echo "<br><br>";

            
            $a .= $b;
            echo "Después de asignar \$a .= \$b: ";
            echo "Resultado: " . $a;
            echo "<br><br>";


            $b *= $c;
            echo "Después de asignar \$b *= \$c: ";
            echo "Resultado: " . $b;
            echo "<br><br>";

            
            $z[0] = "MySQL";
            echo "Después de asignar \$z[0] = 'MySQL': ";
            echo "Resultado: " . $z[0];
            echo "<br><br>";

            unset($a);
            unset($b);
            unset($c);
            unset($z);

            echo "<hr>";

            // Ejercicio 4

            global $a, $z, $b, $c; 

            $a = "PHP5";
            echo "Después de asignar \$a = 'PHP5': ";
            echo "Resultado: " . $a;
            echo "<br><br>";

            $z[] = &$a;
            echo "Después de asignar \$z[] = &\$a: ";
            echo "Resultado: " . $z[0];
            echo "<br><br>";

            $b = "5a version de PHP";
            echo "Después de asignar \$b = '5a version de PHP': ";
            echo "Resultado: " . $b;
            echo "<br><br>";

            $c = $b * 10;
            echo "Después de asignar \$c = \$b * 10: ";
            echo "Resultado: " . $c;
            echo "<br><br>";

            $a .= $b;
            echo "Después de asignar \$a .= \$b: ";
            echo "Resultado: " . $a;
            echo "<br><br>";

            $b *= $c;
            echo "Después de asignar \$b *= \$c: ";
            echo "Resultado: " . $b;
            echo "<br><br>";

            $z[0] = "MySQL";
            echo "Después de asignar \$z[0] = 'MySQL': ";
            echo "Resultado: " . $z[0];
            echo "<br><br>";

            unset($a);
            unset($b);
            unset($c);
            unset($z);

            echo "<hr>";

            // Ejercicio 5
      
            $a = "7 personas";
            $b = (integer) $a;
            $a = "9E3";
            $c = (double) $a;

            var_dump("Valor de \$a: " . $a . "<br>"); // Debería mostrar "9E3"
            var_dump("Valor de \$b: " . $b . "<br>"); // Debería mostrar 7
            var_dump("Valor de \$c: " . $c . "<br>"); // Debería mostrar 9000

            echo "<br>";

            var_dump($a); echo "<br>"; // string(3) "9E3"
            var_dump($b); echo "<br>"; // int(7)
            var_dump($c); echo "<br>"; // float(9000)

            unset($a);
            unset($b);
            unset($c);

            echo "<hr>";       
            
            // Ejercicio 6

            $a = "0";
            $b = "TRUE";
            $c = FALSE;
            $d = ($a OR $b);
            $e = ($a AND $c);
            $f = ($a XOR $b);

            var_dump($a); echo "<br>";
            var_dump($b); echo "<br>";
            var_dump($c); echo "<br>";
            var_dump($d); echo "<br>";
            var_dump($e); echo "<br>";
            var_dump($f); echo "<br>";

            // Mostrar valores booleanos con echo
            echo "<br>Valor de \$c con echo: " . var_export($c, true);
            echo "<br>Valor de \$e con echo: " . var_export($e, true);

            unset($a);
            unset($b);
            unset($c);
            unset($d);
            unset($e);
            unset($f);

            echo "<hr>";
        ?>
    </body>
</html>