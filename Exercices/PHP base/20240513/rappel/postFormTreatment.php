<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP - Traitement formulaire POST</title>
	</head>

	<body>
		<h1>Traitement formulaires</h1>
		<h2>Informations POST</h2>
		<?php
			$lastname_post = $_POST['lastname_post'];
			echo "Aloha $lastname_post !";
		?>
	</body> 
</html>