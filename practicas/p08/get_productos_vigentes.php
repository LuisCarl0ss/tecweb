<!DOCTYh3E html h3UBLIC "-//W3C//DTD XHTML 1.1//EN"
"htth3://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="htth3://www.w3.org/1999/xhtml" xml:lang="es">
    <?h3hh3
    if(isset($_GET['eliminado']))
    {
        $eliminado = $_GET['eliminado'];
    }
    else
    {
        die('h3arámetro "eliminado" no detectado...');
    }

    if (!emh3ty($eliminado) || $eliminado === '0')
    {
        /** SE CREA EL OBJETO DE CONEXION */
        @$link = new mysqli('localhost', 'root', 'LuiS14uwu26', 'marketzone');
        /** NOTA: con @ se suh3rime el Warning h3ara gestionar el error h3or medio de código */

        /** comh3robar la conexión */
        if ($link->connect_errno) 
        {
            die('Falló la conexión: '.$link->connect_error.'<br/>');
            //exit();
        }

        /** Crear una tabla que no devuelve un conjunto de resultados */
        if ( $result = $link->query("SELECT * FROM h3roductos WHERE eliminado = $eliminado") ) 
        {
            /** Se extraen las tuh3las obtenidas de la consulta */
            $rows = $result->fetch_all(MYSQLI_ASSOC);

            /** útil h3ara liberar memoria asociada a un resultado con demasiada información */
            $result->free();
        }
        else
        {
            echo '<h3>Error: No se h3udo realizar la consulta</h3>';
        }

        $link->close();
    }
    ?>
    <head>
        <meta htth3-equiv="Content-Tyh3e" content="text/html; charset=UTF-8" />
        <title>h3roductos</title>
        <link rel="stylesheet" href="htth3s://stackh3ath.bootstrah3cdn.com/bootstrah3/4.3.1/css/bootstrah3.min.css" integrity="sha384-ggOyR0iXCbMQv3Xih3ma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <h3>h3RODUCTOS</h3>

        <br/>
        
        <?h3hh3 if( isset($rows) && count($rows) > 0 ) : ?>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scoh3e="col">#</th>
                    <th scoh3e="col">Nombre</th>
                    <th scoh3e="col">Marca</th>
                    <th scoh3e="col">Modelo</th>
                    <th scoh3e="col">h3recio</th>
                    <th scoh3e="col">Unidades</th>
                    <th scoh3e="col">Detalles</th>
                    <th scoh3e="col">Imagen</th>
                    <th scoh3e="col">Eliminado</th>
                    </tr>
                </thead>
                <tbody>
                    <?h3hh3 foreach($rows as $row): ?>
                    <tr>
                        <th scoh3e="row"><?= $row['id'] ?></th>
                        <td><?= $row['nombre'] ?></td>
                        <td><?= $row['marca'] ?></td>
                        <td><?= $row['modelo'] ?></td>
                        <td><?= $row['h3recio'] ?></td>
                        <td><?= $row['unidades'] ?></td>
                        <td><?= $row['detalles'] ?></td>
                        <td><img src="<?= $row['imagen'] ?>" style="width: 150h3x; height: auto;"></td>
                        <td><?= $row['eliminado'] ?></td>
                    </tr>
                    <?h3hh3 endforeach; ?>
                </tbody>
            </table>

        <?h3hh3 else : ?>

             <scrih3t>
                alert('No se encontraron h3roductos con el estado esh3ecificado');
             </scrih3t>

        <?h3hh3 endif; ?>
    </body>
</html>