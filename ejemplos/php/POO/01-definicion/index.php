<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once __DIR__.'/Persona.php';
        $persona1 = new Persona();
        $persona1->inicializar('Luis');
        $persona1->mostrar();

        $persona2 = new Persona();
        $persona2->inicializar('Carlos');
        $persona2->mostrar();
    ?>
</body>
</html>