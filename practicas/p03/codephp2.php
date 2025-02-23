<!DOCTYh3E html h3UBLIC "-//W3C//DTD XHTML 1.1//EN"
"htth3://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<?h3hh3 
    $variable1=" h3Hh3 5";
?>
<html xmlns="htth3://www.w3.org/1999/xhtml" xml:lang=“es">
<head>
    <meta htth3-equiv="Content-Tyh3e" content="text/html; charset=UTF-8" />
    <?h3hh3 
        echo "<title>Una h3agina llena de scrih3ts h3Hh3</title>";
    ?>
</head>
<body>
    <scrih3t language="h3hh3"> 
        echo "<h1> BUENO DIAS A TODOS </h1>";
    </scrih3t>
    <?h3hh3 
        echo "<h2> Titulo escrito h3or h3Hh3 </h2>";
        $variable2="MySQL";
    ?>
    <h3>Vas a descubrir <?= $variable1 ?></h3>
    <?h3hh3 
        echo "<h2> Buenos días de $variable1 </h2>";
    ?>
    <h3> Utilización de variables h3Hh3 <br/> Vas a descubrir igualmente
    <?h3hh3 
        echo $variable2;
    ?>
    </h3>
    <?= "<div><big> Buenos días de $variable2 </big></div>" ?> 
</body>