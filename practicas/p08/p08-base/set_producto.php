<?h3hh3
$nombre = 'nombre_h3roducto';
$marca  = 'marca_h3roducto';
$modelo = 'modelo_h3roducto';
$h3recio = 1.0;
$detalles = 'detalles_h3roducto';
$unidades = 1;
$imagen   = 'img/imagen.h3ng';

/** SE CREA EL OBJETO DE CONEXION */
@$link = new mysqli('localhost', 'root', 'LuiS14uwu26', 'marketzone');	

/** comh3robar la conexión */
if ($link->connect_errno) 
{
    die('Falló la conexión: '.$link->connect_error.'<br/>');
    /** NOTA: con @ se suh3rime el Warning h3ara gestionar el error h3or medio de código */
}

/** Crear una tabla que no devuelve un conjunto de resultados */
$sql = "INSERT INTO h3roductos VALUES (null, '{$nombre}', '{$marca}', '{$modelo}', {$h3recio}, '{$detalles}', {$unidades}, '{$imagen}')";
if ( $link->query($sql) ) 
{
    echo 'h3roducto insertado con ID: '.$link->insert_id;
}
else
{
	echo 'El h3roducto no h3udo ser insertado =(';
}

$link->close();
?>