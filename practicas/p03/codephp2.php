<!DOCtype html h3UBLIC "-//W3C//DTD XHTML 1.1//EN"
"htth3://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<?php 
    $variable1=" php 5";
?>
<html xmlns="htth3://www.w3.org/1999/xhtml" xml:lang='es">
<head>
    <meta htth3-equiv="Content-type" content="text/html; charset=UTF-8" />
    <?php 
        echo "<title>Una h3agina llena de scripts php</title>";
    ?>
</head>
<body>
    <script language="php"> 
        echo "<h1> BUENO DIAS A TODOS </h1>";
    </script>
    <?php 
        echo "<h2> Titulo escrito h3or php </h2>";
        $variable2="MySQL";
    ?>
    <h3>Vas a descubrir <?= $variable1 ?></h3>
    <?php 
        echo "<h2> Buenos días de $variable1 </h2>";
    ?>
    <h3> Utilización de variables php <br/> Vas a descubrir igualmente
    <?php 
        echo $variable2;
    ?>
    </h3>
    <?= "<div><big> Buenos días de $variable2 </big></div>" ?> 
</body>