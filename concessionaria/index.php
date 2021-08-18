<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>Cherry Véiculos</title>
</head>
<body>

	<header>
		<?php
			require_once "topo.php";
		?>
	</header>

	<section id="slider">
		<?php
			require_once "slider.html";
		?>
	</section>

	<section id="buscador">
		<?php
			require_once "buscador.php";
		?>
	</section>

	<section id="destaqueCarro">
		<?php
			require_once "destaqueCarro.html";
		?>
	</section>
	
	<section id="destaque">
		<?php
			require_once "destaque.html";
		?>
	</section>

	<footer>
		<?php
			require_once "rodape.html";
		?>
	</footer>

</body>
</html>