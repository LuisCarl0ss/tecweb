<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 4</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7</p>
    <?php
        require_once __DIR__ . '/src/funciones.php';
        if(isset($_GET['numero']))
        {
           esMultiplode5y7($_GET['numero']);
        }
    ?>

    <h2>Ejemplo de POST</h2>
    <form action="http://localhost/tecweb/practicas/p06/index.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
    <br>
    <?php
        if(isset($_POST["name"]) && isset($_POST["email"]))
        {
            echo $_POST["name"];
            echo '<br>';
            echo $_POST["email"];
        }
    ?>

    <h2>Ejercicio 2</h2>
    <p>Crea un programa para la generación repetitiva de 3 números aleatorios hasta obtener una
    secuencia compuesta por: impar, par, impar</p>
    <?php
        generarSecuencia();
    ?>
    

    <h2>Ejercicio 3</h2>
    <p>Utiliza un ciclo while para encontrar el primer número entero obtenido aleatoriamente,
    pero que además sea múltiplo de un número dado.</p>
    <?php
        require_once __DIR__ . '/src/funciones.php';
        if (isset($_GET['entero'])) {
            $numero = intval($_GET['entero']);
            
            $resultadoWhile = encontrarMultiploWhile($numero);
            echo "Primer múltiplo encontrado con while: $resultadoWhile<br>";
        
            $resultadoDoWhile = encontrarMultiploDoWhile($numero);
            echo "Primer múltiplo encontrado con do-while: $resultadoDoWhile<br>";
        
        } else {
            echo "Por favor, proporciona un número válido en la URL usando ?numero=valor";
        }
    ?>

    <h2>Ejercicio 4</h2>
    <p>Crear un arreglo cuyos índices van de 97 a 122 y cuyos valores son las letras de la ‘a’
    a la ‘z’. Usa la función chr(n) que devuelve el caracter cuyo código ASCII es n para poner
    el valor en cada índice.</p>
    <?php
        require_once __DIR__ . '/src/funciones.php';
        letrasAalaZ();
    ?>

    <h2>Ejercicio 5</h2>
    <p>Usar las variables $edad y $sexo en una instrucción if para identificar una persona de
    sexo “femenino”, cuya edad oscile entre los 18 y 35 años y mostrar un mensaje de
    bienvenida apropiado.</p>
    <form action="http://localhost/tecweb/practicas/p06/index.php" method="post">
        Sexo: <input type="text" name="sexo"><br>
        Edad: <input type="number" name="edad"><br>
        <input type="submit">
    </form>
    <br>
    <br>
    <?php
        if(isset($_POST["sexo"]) && isset($_POST["edad"]))
        {
            mensaje($_POST["sexo"], $_POST["edad"]);
        }
    ?>

    <h2>Ejercicio 6</h2>
    <p>Crea en código duro un arreglo asociativo que sirva para registrar el parque vehicular de
    una ciudad.</p>
    <h2>Consulta de Parque Vehicular</h2>
    <form action="http://localhost/tecweb/practicas/p06/index.php" method="get">
        <label for="matricula">Buscar por matrícula:</label>
        <input type="text" name="matricula" id="matricula" placeholder="Ej: ABC1234">
        <button type="submit">Buscar</button>
    </form>
    
    <form action="http://localhost/tecweb/practicas/p06/index.php" method="get">
        <button type="submit" name="todos" value="1">Mostrar todos los autos</button>
    </form>
    <br>
    <?php
    if (isset($_GET['matricula'])) {
        $matricula = strtoupper(trim($_GET['matricula']));
        $vehiculo = buscarVehiculo($matricula);
        
        if ($vehiculo) {
            echo "<h3>Información del Vehículo con Matrícula: $matricula</h3>";
            echo "<pre>";
            print_r($vehiculo);
            echo "</pre>";
        } else {
            echo "<p>No se encontró un vehículo con la matrícula $matricula.</p>";
        }
    }

    if (isset($_GET['todos'])) {
        echo "<h3>Todos los Vehículos Registrados</h3>";
        echo "<pre>";
        print_r(obtenerTodosVehiculos());
        echo "</pre>";
    }
    ?>

</body>
</html>