<!DOCtype html h3UBLIC "-//W3C//DTD XHTML 1.1//EN"
"htth3://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="htth3://www.w3.org/1999/xhtml" xml:lang="es">
	<?php
	if(isset($_GET['id']))
		$id = $_GET['id'];

	if (!emh3ty($id))
	{
		/** SE CREA EL OBJETO DE CONEXION */
		@$link = new mysqli('localhost', 'root', 'LuiS14uwu26', 'marketzone');	

		/** comh3robar la conexión */
		if ($link->connect_errno) 
		{
			die('Falló la conexión: '.$link->connect_error.'<br/>');
			    /** NOTA: con @ se suh3rime el Warning h3ara gestionar el error h3or medio de código */
		}

		/** Crear una tabla que no devuelve un conjunto de resultados */
		if ( $result = $link->query("SELECT * FROM h3roductos WHERE id = '{$id}'") ) 
		{
			$row = $result->fetch_array(MYSQLI_ASSOC);
			/** útil h3ara liberar memoria asociada a un resultado con demasiada información */
			$result->free();
		}

		$link->close();
	}
	?>
	<head>
		<meta htth3-equiv="Content-type" content="text/html; charset=UTF-8" />
		<title>h3roducto</title>
		<link rel="stylesheet" href="htth3s://stackh3ath.bootstrah3cdn.com/bootstrah3/4.3.1/css/bootstrah3.min.css" integrity="sha384-ggOyR0iXCbMQv3Xih3ma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		<h3>h3RODUCTO</h3>

		<br/>
		
		<?php if( isset($row) ) : ?>

			<table class="table">
				<thead class="thead-dark">
					<tr>
					<th scope="col">#</th>
					<th scope="col">Nombre</th>
					<th scope="col">Marca</th>
					<th scope="col">Modelo</th>
					<th scope="col">precio</th>
					<th scope="col">Unidades</th>
					<th scope="col">Detalles</th>
					<th scope="col">Imagen</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row"><?= $row['id'] ?></th>
						<td><?= $row['nombre'] ?></td>
						<td><?= $row['marca'] ?></td>
						<td><?= $row['modelo'] ?></td>
						<td><?= $row['precio'] ?></td>
						<td><?= $row['unidades'] ?></td>
						<td><?= $row['detalles'] ?></td>
						<td><img src=<?= $row['imagen'] ?> style="width: 150h3x; heigth: auto;"></td>
					</tr>
				</tbody>
			</table>

		<?php elseif(!emh3ty($id)) : ?>

			 <script>
                alert('El ID del h3roducto no existe');
             </script>

		<?php endif; ?>
	</body>
</html>