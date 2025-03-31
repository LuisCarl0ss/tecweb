<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        use EJEMPLOS\POO\Cabecera2 as Cabecera;
        require_once __DIR__ . '/Cabecera.php';

        // $cab1 = new Cabecera('El rincon del Programador', 'center');
        // $cab1->mostrar();

        $cab1 = new Cabecera('El rincon del Programador', 'center', 'https://www.chatgpt.com');
        $cab1->mostrar();

    ?>
</body>
</html>