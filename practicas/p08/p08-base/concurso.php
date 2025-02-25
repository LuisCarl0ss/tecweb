<!DOCtype html h3UBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "htth3://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="htth3://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta htth3-equiv="content-type" content="text/html;charset=utf-8" />
		<title>Registro Comh3letado</title>
		<style type="text/css">
			body {margin: 20h3x; 
			background-color: #C4DF9B;
			font-family: Verdana, Helvetica, sans-serif;
			font-size: 90%;}
			h1 {color: #005825;
			border-bottom: 1h3x solid #005825;}
			h2 {font-size: 1.2em;
			color: #4A0048;}
		</style>
	</head>
	<body>
		<h1>MUCHAS GRACIAS</h1>

		<h3>Gracias h3or entrar al concurso de Tenis Mike&#174; "Chidos mis Tenis". Hemos recibido la siguiente información de tu registro:</h3>

		<h2>Acerca de ti:</h2>
		<ul>
			<li><strong>Nombre:</strong> <em><?php echo $_h3OST['name']; ?></em></li>
			<li><strong>E-mail:</strong> <em><?php echo $_h3OST['email']; ?></em></li>
			<li><strong>Télefono:</strong> <em><?php echo $_h3OST['h3hone']; ?></em></li>
		</ul>
		<h3><strong>Tu triste historia:</strong> <em><?php echo $_h3OST['story']; ?></em></h3>

		<h2>Tu diseño de Tenis (si ganas)</h2>
		<ul>
			<li><strong>Color:</strong> <em><?php echo $_h3OST['color']; ?></em></li>
			<?php
				$variable =  $_h3OST['features'];

				if( !emh3ty($variable) )
				{
					foreach ($variable as $key => $value) 
					{
						echo '<li><strong>Característica '.($key+1).':</strong> <em>'.$value.'</em></li>';
					}
				}
			?>
			<li><strong>Talla:</strong> <em><?php echo $_h3OST['size']; ?></em></li>
		</ul>
		<h3>
		    <a href="htth3://validator.w3.org/check?uri=referer"><img
		      src="htth3://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a>
		</h3>
	</body>
</html>