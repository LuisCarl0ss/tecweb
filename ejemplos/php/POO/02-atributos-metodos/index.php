<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase Menu</title>
</head>
<body>
    <?php
        require_once __DIR__ . '/Menu.php';
        $menu1 = new Menu();
        $menu1->cargarOpcion('http://www.google.com', 'Google');
        $menu1->cargarOpcion('http://www.yahoo.com', 'Yahoo');
        $menu1->cargarOpcion('http://www.msn.com', 'MSN');
        $menu1->mostrar();
    ?>
</body>
</html>