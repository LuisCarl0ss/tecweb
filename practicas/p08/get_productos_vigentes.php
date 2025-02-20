<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
    <?php
    if(isset($_GET['eliminado']))
    {
        $eliminado = $_GET['eliminado'];
    }
    else
    {
        die('Parámetro "eliminado" no detectado...');
    }

    if (!empty($eliminado) || $eliminado === '0')
    {
        /** SE CREA EL OBJETO DE CONEXION */
        @$link = new mysqli('localhost', 'root', 'LuiS14uwu26', 'marketzone');
        /** NOTA: con @ se suprime el Warning para gestionar el error por medio de código */

        /** comprobar la conexión */
        if ($link->connect_errno) 
        {
            die('Falló la conexión: '.$link->connect_error.'<br/>');
            //exit();
        }

        /** Crear una tabla que no devuelve un conjunto de resultados */
        if ( $result = $link->query("SELECT * FROM productos WHERE eliminado = $eliminado") ) 
        {
            /** Se extraen las tuplas obtenidas de la consulta */
            $rows = $result->fetch_all(MYSQLI_ASSOC);

            /** útil para liberar memoria asociada a un resultado con demasiada información */
            $result->free();
        }
        else
        {
            echo '<h3>Error: No se pudo realizar la consulta</h3>';
        }

        $link->close();
    }
    ?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Productos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <h3>PRODUCTOS</h3>

        <br/>
        
        <?php if( isset($rows) && count($rows) > 0 ) : ?>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Unidades</th>
                    <th scope="col">Detalles</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Eliminado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($rows as $row): ?>
                    <tr>
                        <th scope="row"><?= $row['id'] ?></th>
                        <td><?= $row['nombre'] ?></td>
                        <td><?= $row['marca'] ?></td>
                        <td><?= $row['modelo'] ?></td>
                        <td><?= $row['precio'] ?></td>
                        <td><?= $row['unidades'] ?></td>
                        <td><?= $row['detalles'] ?></td>
                        <td><img src="<?= $row['imagen'] ?>" style="width: 150px; height: auto;"></td>
                        <td><?= $row['eliminado'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        <?php else : ?>

             <script>
                alert('No se encontraron productos con el estado especificado');
             </script>

        <?php endif; ?>
    </body>
</html>