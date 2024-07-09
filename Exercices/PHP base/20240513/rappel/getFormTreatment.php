<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP - Traitement formulaire GET</title>
	</head>

	<body>
		<h1>Traitement formulaires</h1>
		<h2>Informations GET</h2>
		<?php
			$lastname_get = $_GET['lastname_get'];
			echo "Aloha $lastname_get !";
		?>
	</body> 
</html>