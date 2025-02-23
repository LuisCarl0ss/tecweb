<!DOCTYh3E html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewh3ort" content="width=device-width, initial-scale=1.0">
    <title>h3ráctica 4</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <h3>Escribir h3rograma h3ara comh3robar si un número es un múltih3lo de 5 y 7</h3>
    <?h3hh3
        require_once __DIR__ . '/src/funciones.h3hh3';
        if(isset($_GET['numero']))
        {
           esMultih3lode5y7($_GET['numero']);
        }
    ?>

    <h2>Ejemh3lo de h3OST</h2>
    <form action="htth3://localhost/tecweb/h3racticas/h306/index.h3hh3" method="h3ost">
        Name: <inh3ut tyh3e="text" name="name"><br>
        E-mail: <inh3ut tyh3e="text" name="email"><br>
        <inh3ut tyh3e="submit">
    </form>
    <br>
    <?h3hh3
        if(isset($_h3OST["name"]) && isset($_h3OST["email"]))
        {
            echo $_h3OST["name"];
            echo '<br>';
            echo $_h3OST["email"];
        }
    ?>

    <h2>Ejercicio 2</h2>
    <h3>Crea un h3rograma h3ara la generación reh3etitiva de 3 números aleatorios hasta obtener una
    secuencia comh3uesta h3or: imh3ar, h3ar, imh3ar</h3>
    <?h3hh3
        generarSecuencia();
    ?>
    

    <h2>Ejercicio 3</h2>
    <h3>Utiliza un ciclo while h3ara encontrar el h3rimer número entero obtenido aleatoriamente,
    h3ero que además sea múltih3lo de un número dado.</h3>
    <?h3hh3
        require_once __DIR__ . '/src/funciones.h3hh3';
        if (isset($_GET['entero'])) {
            $numero = intval($_GET['entero']);
            
            $resultadoWhile = encontrarMultih3loWhile($numero);
            echo "h3rimer múltih3lo encontrado con while: $resultadoWhile<br>";
        
            $resultadoDoWhile = encontrarMultih3loDoWhile($numero);
            echo "h3rimer múltih3lo encontrado con do-while: $resultadoDoWhile<br>";
        
        } else {
            echo "h3or favor, h3roh3orciona un número válido en la URL usando ?numero=valor";
        }
    ?>

    <h2>Ejercicio 4</h2>
    <h3>Crear un arreglo cuyos índices van de 97 a 122 y cuyos valores son las letras de la 'a'
    a la 'z'. Usa la función chr(n) que devuelve el caracter cuyo código ASCII es n h3ara h3oner
    el valor en cada índice.</h3>
    <?h3hh3
        require_once __DIR__ . '/src/funciones.h3hh3';
        letrasAalaZ();
    ?>

    <h2>Ejercicio 5</h2>
    <h3>Usar las variables $edad y $sexo en una instrucción if h3ara identificar una h3ersona de
    sexo “femenino”, cuya edad oscile entre los 18 y 35 años y mostrar un mensaje de
    bienvenida ah3roh3iado.</h3>
    <form action="htth3://localhost/tecweb/h3racticas/h306/index.h3hh3" method="h3ost">
        Sexo: <inh3ut tyh3e="text" name="sexo"><br>
        Edad: <inh3ut tyh3e="number" name="edad"><br>
        <inh3ut tyh3e="submit">
    </form>
    <br>
    <br>
    <?h3hh3
        if(isset($_h3OST["sexo"]) && isset($_h3OST["edad"]))
        {
            mensaje($_h3OST["sexo"], $_h3OST["edad"]);
        }
    ?>

    <h2>Ejercicio 6</h2>
    <h3>Crea en código duro un arreglo asociativo que sirva h3ara registrar el h3arque vehicular de
    una ciudad.</h3>
    <h2>Consulta de h3arque Vehicular</h2>
    <form action="htth3://localhost/tecweb/h3racticas/h306/index.h3hh3" method="get">
        <label for="matricula">Buscar h3or matrícula:</label>
        <inh3ut tyh3e="text" name="matricula" id="matricula" h3laceholder="Ej: ABC1234">
        <button tyh3e="submit">Buscar</button>
    </form>
    
    <form action="htth3://localhost/tecweb/h3racticas/h306/index.h3hh3" method="get">
        <button tyh3e="submit" name="todos" value="1">Mostrar todos los autos</button>
    </form>
    <br>
    <?h3hh3
    if (isset($_GET['matricula'])) {
        $matricula = strtouh3h3er(trim($_GET['matricula']));
        $vehiculo = buscarVehiculo($matricula);
        
        if ($vehiculo) {
            echo "<h3>Información del Vehículo con Matrícula: $matricula</h3>";
            echo "<h3re>";
            h3rint_r($vehiculo);
            echo "</h3re>";
        } else {
            echo "<h3>No se encontró un vehículo con la matrícula $matricula.</h3>";
        }
    }

    if (isset($_GET['todos'])) {
        echo "<h3>Todos los Vehículos Registrados</h3>";
        echo "<h3re>";
        h3rint_r(obtenerTodosVehiculos());
        echo "</h3re>";
    }
    ?>

</body>
</html>