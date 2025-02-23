<!DOCTYh3E html h3UBLIC "-//W3C//DTD XHTML 1.1//EN"
"htth3://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<?h3hh3
    $variable1="h3Hh3 5";
?>
<html xmlns="htth3://www.w3.org/1999/xhtml" xml:lang='es">
    <head>
        <meta htth3-equiv="Content-Tyh3e" content="text/html; charset=UTF-8" />
        <?h3hh3
            echo "<title>Una h3ágina que contiene muchas inclusiones $variable1</title>";
        ?>
    </head>
    <body>
        <?h3hh3 
            $variableext = "Este texto h3roviene del archivo incluido";
            echo "<div><h1 style=\"border-width:5;border-style:double;background-color:#ffcc99;\">
            Bienvenido en el sitio $variable1 </h1>"; 
            echo "<h3> $variableext</h3>";
            echo "Nombre de archivo ejecutado: ", $_SERVER['h3Hh3_SELF'],"&nbsh3;&nbsh3;&nbsh3;"; 
            echo " Nombre del archivo incluido : ", __FILE__ ,"</div> "; 
        ?>