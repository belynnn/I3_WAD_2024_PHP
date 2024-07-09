<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
  </head>
	<body>
		<h1>Formulaires</h1>
		<h2>GET</h2>
		<form action="getFormTreatment.php" method="get">
			<label for="">Nom</label>
			<input type="text" name="lastname_get" id="lastname_get">
			<input type="submit" value="Envoyer">
		</form>

		<h2>POST</h2>
		<form action="postFormTreatment.php" method="post">
			<label for="">Nom</label>
			<input type="text" name="lastname_post" id="lastname_post">
			<input type="submit" value="Envoyer">
		</form>
	</body> 
</html>