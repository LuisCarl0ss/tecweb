<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once __DIR__ . '/Tabla.php';

        $tabla = new Tabla(3, 3, 'border: 2px solid black;');
        $tabla->cargar(0, 0, '1');
        $tabla->cargar(0, 1, '2');
        $tabla->cargar(0, 2, '3');
        $tabla->cargar(1, 0, '4');  
        $tabla->cargar(1, 1, '5');
        $tabla->cargar(1, 2, '6');
        $tabla->cargar(2, 0, '7');
        $tabla->cargar(2, 1, '8');
        $tabla->cargar(2, 2, '9');
        $tabla->mostrar();
    ?>
</body>
</html>