<?php

    //Ejercicio 1
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

    //Ejercicio 2
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

    //Ejercicio 3
    function encontrarMultiploWhile($numero) {
        $random = rand(1, 100);
        while ($random % $numero !== 0) {
            $random = rand(1, 100);
        }
        return $random;
    }

    function encontrarMultiploDoWhile($numero) {
        do {
            $random = rand(1, 100);
        } while ($random % $numero !== 0);
        return $random;
    }

    //Ejercicio 4
    function letrasAalaZ() {
        $letras = [];
        for ($i = 97; $i <= 122; $i++) {
            $letras[] = chr($i);
        }

         // Crear la tabla en XHTML
        echo "<table border='1'>";
        echo "<tr><th>Índice</th><th>Letra</th></tr>";
        foreach ($letras as $key => $value) {
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
        echo "</table>";
    }

    //Ejercicio 5
    function mensaje($sexo, $edad) {
        if ($sexo == 'femenino' && $edad >= 18 && $edad <= 35) {
            echo "Bienvenida, usted está en el rango de edad permitido";
        } else {
            echo "No cumples con los requisitos";
        }
    }

    //Ejercicio 6
    
    $parqueVehicular = [
        "ABC1234" => [
            "Auto" => ["marca" => "Honda", "modelo" => 2020, "tipo" => "camioneta"],
            "Propietario" => ["nombre" => "Alfonzo Esparza", "ciudad" => "Puebla, Pue.", "direccion" => "C.U., Jardines de San Manuel"]
        ],
        "DEF5678" => [
            "Auto" => ["marca" => "Mazda", "modelo" => 2019, "tipo" => "sedan"],
            "Propietario" => ["nombre" => "Ma. del Consuelo Molina", "ciudad" => "Puebla, Pue.", "direccion" => "97 oriente"]
        ],
        "GHI9101" => [
            "Auto" => ["marca" => "Toyota", "modelo" => 2018, "tipo" => "hatchback"],
            "Propietario" => ["nombre" => "Carlos Pérez", "ciudad" => "CDMX", "direccion" => "Av. Insurgentes Sur 123"]
        ],
        "JKL1122" => [
            "Auto" => ["marca" => "Ford", "modelo" => 2021, "tipo" => "camioneta"],
            "Propietario" => ["nombre" => "Lucía Gómez", "ciudad" => "Guadalajara, Jal.", "direccion" => "Col. Americana"]
        ],
        "MNO3344" => [
            "Auto" => ["marca" => "Chevrolet", "modelo" => 2017, "tipo" => "sedan"],
            "Propietario" => ["nombre" => "Fernando Ramírez", "ciudad" => "Monterrey, NL", "direccion" => "San Pedro Garza García"]
        ],
        "PQR5566" => [
            "Auto" => ["marca" => "Volkswagen", "modelo" => 2022, "tipo" => "hatchback"],
            "Propietario" => ["nombre" => "Andrea Torres", "ciudad" => "Puebla, Pue.", "direccion" => "Centro Histórico"]
        ],
        "STU7788" => [
            "Auto" => ["marca" => "Nissan", "modelo" => 2016, "tipo" => "camioneta"],
            "Propietario" => ["nombre" => "Miguel Herrera", "ciudad" => "Querétaro, Qro.", "direccion" => "El Campanario"]
        ],
        "VWX9900" => [
            "Auto" => ["marca" => "Hyundai", "modelo" => 2019, "tipo" => "sedan"],
            "Propietario" => ["nombre" => "Patricia Martínez", "ciudad" => "Mérida, Yuc.", "direccion" => "Fracc. Las Américas"]
        ],
        "YZA1123" => [
            "Auto" => ["marca" => "BMW", "modelo" => 2023, "tipo" => "sedan"],
            "Propietario" => ["nombre" => "Roberto López", "ciudad" => "CDMX", "direccion" => "Polanco"]
        ],
        "BCD2345" => [
            "Auto" => ["marca" => "Kia", "modelo" => 2020, "tipo" => "hatchback"],
            "Propietario" => ["nombre" => "Valeria Sánchez", "ciudad" => "Toluca, Edo. Méx.", "direccion" => "Col. Centro"]
        ]
    ];

    function buscarVehiculo($matricula) {
        global $parqueVehicular;
        return $parqueVehicular[$matricula] ?? null;
    }

    function obtenerTodosVehiculos() {
        global $parqueVehicular;
        return $parqueVehicular;
    }

?>