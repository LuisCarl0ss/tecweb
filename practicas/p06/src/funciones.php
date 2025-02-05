<?php
    function esMultiplode5y7($num)
    {
        if ($num%5==0 && $num%7==0)
        {
            echo '<h3>R= El número '.$num.' SÍ es múltiplo de 5 y 7.</h3>';
        }
        else
        {
            echo '<h3>R= El número '.$num.' NO es múltiplo de 5 y 7.</h3>';
        }
    }

    function generarSecuencia() {
        $matriz = [];
        $iteraciones = 0;
        $numerosGenerados = 0;

        while (true) {
            $fila = [];
            $fila[] = rand(100, 1000); // Primera fila de números
            $fila[] = rand(100, 1000); // Segunda fila de números
            $fila[] = rand(100, 1000); // Tercera fila de números

            $matriz[] = $fila;
            $iteraciones++;
            $numerosGenerados += 3;

            if ($fila[0] % 2 != 0 && $fila[1] % 2 == 0 && $fila[2] % 2 != 0) {
                break;
            }
        }

        // Mostrar la matriz
        echo "<h3>Matriz generada:</h3>";
        echo "<table border='3'>";
        foreach ($matriz as $fila) {
            echo "<tr>";
            foreach ($fila as $num) {
                echo "<td>$num</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        // Mostrar el número de iteraciones y la cantidad de números generados
        echo "<h3>Número de iteraciones: $iteraciones</h3>";
        echo "<h3>Cantidad de números generados: $numerosGenerados</h3>";
    }

?>